<?php namespace Tests\Feature;

use App\Comment;
use App\Services\Rto;
use App\Services\RtoTopicData;
use App\Services\RtoTopicHtmlResponse;
use App\Services\RtoTorrentData;
use App\Torrent;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Mockery\MockInterface;
use Tests\TestCase;

class TorrentTest extends TestCase
{
    use DatabaseTransactions;

    public function testCategoryFilter()
    {
        $categoryId = 2;

        factory(Torrent::class)->create(['category_id' => $categoryId]);

        $this->get("torrents?category_id={$categoryId}")
            ->assertStatus(200);
    }

    public function testComments()
    {
        factory(Comment::class)->state('torrent')->create();

        $this->get('torrents/comments')
            ->assertStatus(200);
    }

    public function testCreate()
    {
        $user = factory(User::class)->state('id')->make();

        $this->be($user)
            ->get('torrents/add')
            ->assertStatus(200);
    }

    public function testFaq()
    {
        $this->get('torrents/faq')
            ->assertStatus(200);
    }

    public function testIndex()
    {
        factory(Torrent::class)->create();

        $this->get('torrents')
            ->assertStatus(200);
    }

    public function estMagnetClick()
    {
    }

    public function testMy()
    {
        /** @var User $user */
        $user = factory(User::class)->create();

        factory(Torrent::class)->create(['user_id' => $user->id]);

        $this->be($user)
            ->get('torrents/my')
            ->assertStatus(200);
    }

    public function testPromo()
    {
        $this->get('torrent')
            ->assertStatus(200);
    }

    public function testSearch()
    {
        factory(Torrent::class)->create(['title' => 'title _2017_ something else']);

        $this->get('torrents?q=_2017_')
            ->assertStatus(200);
    }

    public function testShow()
    {
        /** @var Torrent $torrent */
        $torrent = factory(Torrent::class)->create();

        $this->get("torrents/{$torrent->id}")
            ->assertStatus(200);
    }

    public function testStore()
    {
        /** @var User $user */
        $user = factory(User::class)->create();
        $rtoId = 1234567890;

        $this->mock(Rto::class, function (MockInterface $mock) use ($rtoId) {
            $response = new RtoTopicHtmlResponse('<div class="post_body">body<fieldset class="attach"><span class="attach_link"><a href="magnet:?xt=urn:btih:info_hash&tr=announcer"></a></span></fieldset></fieldset>');
            $topicData = new RtoTopicData($rtoId, 'title', 'info_hash', now(), RtoTopicData::STATUS_APPROVED, 1, 1, 1, 1, now());
            $torrentData = new RtoTorrentData($topicData, $response);

            $mock->shouldReceive('findTopicId')->andReturn($rtoId);
            $mock->shouldReceive('torrentData')->andReturn($torrentData);
        });

        $response = $this->be($user)
            ->post('torrents', ['input' => $rtoId, 'category_id' => 2]);

        $torrent = $user->torrents[0];

        $response->assertRedirect($torrent->www());

        $this->assertEquals($rtoId, $torrent->rto_id);
    }

    public function estStoreDuplicate()
    {
    }
}
