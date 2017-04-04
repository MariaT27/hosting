<?php namespace App\Http\Controllers;

use Carbon\Carbon;
use GuzzleHttp\Client;

class ParserVk extends Controller
{
    protected $client;
    protected $token;
    protected $version = '5.53';
    protected $vkpage;

    public function __construct()
    {
        parent::__construct();

        $this->client = new Client(['base_uri' => 'https://api.vk.com/method/']);
    }

    public function index($vkpage = 'pn6', $date = false)
    {
        $this->vkpage = $vkpage;
        $this->token = $token = $this->request->input('token');
        $own = $this->request->input('own');
        $date = false === $date ? '-1 day' : $date;
        $date = Carbon::parse($date);

        $count = 100;
        $offset = $total = 0;
        $parsed = false;
        $posts = collect();

        $date_start = Carbon::parse($date)->startOfDay()->timestamp;
        $date_end = Carbon::parse($date)->endOfDay()->timestamp;
        $previous = Carbon::parse($date)->subDay();
        $next = Carbon::now()->startOfDay()->gt($date) ? Carbon::parse($date)->addDay() : null;

        while (false === $parsed) {
            $json = $this->getPosts($count, $offset);

            if (isset($json->error)) {
                dd($json->error);
            }

            $total = $total ?: $json->response->count;

            $json = $json->response->items;

            $portion = sizeof($json);

            if ($own) {
                $json = collect($json)->reject(function ($post) {
                    return !empty($post->copy_history);
                });
            }

            foreach ($json as $post) {
                if (@$post->is_pinned) {
                    continue;
                }

                if ($post->date < $date_start) {
                    $previous = Carbon::createFromTimestamp($post->date);
                    $parsed = true;
                    break 2;
                }

                if ($post->date > $date_end) {
                    continue;
                }

                $photos = 0;

                if (isset($post->attachments)) {
                    foreach ($post->attachments as $attach) {
                        if ($attach->type == 'photo') {
                            $photos++;
                        }
                    }
                }

                $posts->push([
                    'likes'       => $post->likes->count,
                    'reposts'     => $post->reposts->count,
                    'url'         => "https://vk.com/wall{$post->owner_id}_{$post->id}",
                    'text'        => $post->text,
                    'type'        => $post->post_type,
                    'photos'      => $photos,
                    'attachment'  => @$post->attachment,
                    'attachments' => @$post->attachments,
                    'copy_history' => @$post->copy_history,
                ]);
            }

            if ($offset + $portion === $total) {
                $previous = null;
                $parsed = true;
                break;
            }

            $offset += $count;
        }

        $posts = $posts->sortByDesc('likes')->take(10);

        return view('parser.vk', compact(
            'date',
            'next',
            'own',
            'posts',
            'previous',
            'token',
            'vkpage'
        ));
    }

    public function indexPost()
    {
        return redirect(path("{$this->class}@index", $this->request->input('slug')));
    }

    protected function getPosts($count = 100, $offset = 0)
    {
        $cache_entry = "vk_{$this->vkpage}_{$count}_{$offset}";
        $access_token = $this->token;
        $filter = 'owner';
        $v = $this->version;

        $params = compact('access_token', 'count', 'filter', 'offset', 'v');

        if (is_numeric($this->vkpage)) {
            $params['owner_id'] = $this->vkpage;
        } else {
            $params['domain'] = $this->vkpage;
        }

        return \Cache::remember($cache_entry, 15 + intval($offset / 100), function () use ($params) {
            if ($params['access_token'] && $params['offset']) {
                sleep(1);
            }

            $response = $this->client->get('wall.get', ['query' => $params]);

            event(new \App\Events\Stats\ParserVkWallGet);

            return json_decode($response->getBody());
        });
    }

    protected function getPostsCount()
    {
        return $this->getPosts(1)->response[0];
    }
}
