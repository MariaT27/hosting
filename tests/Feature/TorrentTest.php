<?php namespace Tests\Feature;

use App\Comment;
use App\Services\Rto;
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

        $this->get(action('Torrents@index', ['category_id' => $categoryId]))
            ->assertStatus(200);
    }

    public function testComments()
    {
        factory(Comment::class)->state('torrent')->create();

        $this->get(action('Torrents@comments'))
            ->assertStatus(200);
    }

    public function testCreate()
    {
        $user = factory(User::class)->make();

        $this->be($user)
            ->get(action('Torrents@create'))
            ->assertStatus(200);
    }

    public function testFaq()
    {
        $this->get(action('Torrents@faq'))
            ->assertStatus(200);
    }

    public function testIndex()
    {
        factory(Torrent::class)->create();

        $this->get(action('Torrents@index'))
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
            ->get(action('Torrents@my'))
            ->assertStatus(200);
    }

    public function testPromo()
    {
        $this->get(action('TorrentPromo@index'))
            ->assertStatus(200);
    }

    public function testSearch()
    {
        factory(Torrent::class)->create(['title' => 'title _2017_ something else']);

        $this->get(action('Torrents@index', ['q' => '_2017_']))
            ->assertStatus(200);
    }

    public function testShow()
    {
        /** @var Torrent $torrent */
        $torrent = factory(Torrent::class)->create();

        $this->get($torrent->www())
            ->assertStatus(200);
    }

    public function testStore()
    {
        /* @var User $user */
        $user = factory(User::class)->create();
        $rtoId = 1234567890;

        $this->instance(Rto::class, \Mockery::mock(Rto::class, function (MockInterface $mock) use ($rtoId) {
            $mock->shouldReceive('findTopicId')->andReturnNull();
            $mock->shouldReceive('torrentData')->andReturn([
                'body' => 'body',
                'size' => 1,
                'title' => 'title',
                'magnet' => 'magnet',
                'rto_id' => $rtoId,
                'reg_time' => now()->toDateTimeString(),
                'announcer' => 'announcer',
                'info_hash' => 'info_hash',
                'tor_status' => Torrent::RTO_STATUS_OK,
            ]);
        }));

        $response = $this->be($user)
            ->post(action('Torrents@store'), ['input' => $rtoId, 'category_id' => 2]);

        $torrent = $user->torrents[0];

        $response->assertRedirect($torrent->www());

        $this->assertEquals($rtoId, $torrent->rto_id);
    }

    public function estStoreDuplicate()
    {
    }
}