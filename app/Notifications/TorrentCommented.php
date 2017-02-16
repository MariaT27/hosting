<?php namespace App\Notifications;

use App\Comment;
use App\Torrent;
use Illuminate\Notifications\Notification;

class TorrentCommented extends Notification
{
    public $comment;
    public $torrent;

    public function __construct(Torrent $torrent, Comment $comment)
    {
        $this->torrent = $torrent;
        $this->comment = $comment;
    }

    public function via($notifiable)
    {
        return $notifiable->id !== $this->comment->user_id ? ['database'] : [];
    }

    public function toArray($notifiable)
    {
        return [
            'id' => $this->torrent->id,
            'title' => $this->torrent->title,
            'comment' => [
                'id' => $this->comment->id,
                'html' => $this->comment->html,
                'user' => [
                    'id' => $this->comment->user_id,
                    'name' => $this->comment->user->publicName(),
                ],
            ],
        ];
    }
}