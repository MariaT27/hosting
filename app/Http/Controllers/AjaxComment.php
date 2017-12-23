<?php namespace App\Http\Controllers;

use App\Comment;
use App\Exceptions\CommentLimitExceededException;
use App\Limits\CommentsTodayLimit;
use App\News;
use App\Notifications\NewsCommented;
use App\Notifications\TorrentCommented;
use App\Notifications\TripCommented;
use App\Torrent;
use App\Trip;
use Ivacuum\Generic\Exceptions\FloodException;

class AjaxComment extends Controller
{
    public function store($type, $id, CommentsTodayLimit $limits)
    {
        $text = e(request('text'));
        $user_id = request()->user()->id;

        $validator = \Validator::make(compact('id', 'text', 'type'), [
            'id' => 'integer|min:1',
            'text' => 'required|max:1000',
            'type' => 'in:news,torrent,trip'
        ]);

        $this->validateWith($validator);

        $model = $this->notifiableModel($type, $id);

        if ($limits->flood($user_id)) {
            throw new FloodException;
        } elseif ($limits->ipExceeded() || $limits->userExceeded($user_id)) {
            throw new CommentLimitExceededException;
        }

        /* @var Comment $comment */
        $comment = $model->comments()->create([
            'html' => $text,
            'status' => Comment::STATUS_PUBLISHED,
            'user_id' => $user_id,
        ]);

        $this->notifyUsersAboutComment($model, $comment);

        return $this->redirectToComment($model, $comment);
    }

    /**
     * @param  string  $type
     * @param  integer $id
     * @return \App\News|\App\Trip|\App\Torrent
     * @throws \Exception
     */
    protected function notifiableModel(string $type, int $id)
    {
        if ($type === 'news') {
            return News::published()->findOrFail($id);
        } elseif ($type === 'trip') {
            return Trip::published()->findOrFail($id);
        } elseif ($type === 'torrent') {
            return Torrent::published()->findOrFail($id);
        }

        throw new \Exception('Не выбран объект для комментирования');
    }

    protected function notifyUsersAboutComment($model, Comment $comment): bool
    {
        event(new \App\Events\Stats\CommentAdded);

        $type = $model->getMorphClass();

        if ($type === 'News') {
            event(new \App\Events\Stats\NewsCommented);

            \Notification::send($comment->usersForNotification($model), new NewsCommented($model, $comment));

            return true;
        }

        if ($type === 'Trip') {
            event(new \App\Events\Stats\TripCommented);

            \Notification::send($comment->usersForNotification($model), new TripCommented($model, $comment));

            return true;
        }

        if ($type === 'Torrent') {
            event(new \App\Events\Stats\TorrentCommented);

            \Notification::send($comment->usersForNotification($model), new TorrentCommented($model, $comment));

            return true;
        }

        return false;
    }

    protected function redirectToComment($model, Comment $comment)
    {
        if (method_exists($model, 'www')) {
            return redirect($model->www($comment->anchor()));
        }

        return back()->with('message', trans('comments.posted'));
    }
}
