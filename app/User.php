<?php namespace App;

use App\Mail\ResetPassword;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\UploadedFile;
use Illuminate\Notifications\Notifiable;

/**
 * Пользователь
 *
 * @property integer $id
 * @property string  $email
 * @property string  $login
 * @property string  $password
 * @property string  $salt
 * @property integer $status
 * @property integer $theme
 * @property integer $torrent_short_title
 * @property string  $avatar
 * @property string  $ip
 * @property string  $activation_token
 * @property string  $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $last_login_at
 *
 * @property \Illuminate\Support\Collection $notifications
 */
class User extends Authenticatable
{
    use Notifiable;

    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    const THEME_LIGHT = 0;
    const THEME_DARK = 1;

    protected $guarded = ['created_at', 'updated_at'];
    protected $hidden = ['password', 'remember_token'];
    protected $perPage = 50;

    public function commentsCount()
    {
        return Comment::selectRaw('COUNT(*) as total')
            ->where('user_id', $this->id)
            ->get()
            ->first()
            ->total;
    }

    public function imagesCount()
    {
        return Image::selectRaw('COUNT(*) as total')
            ->where('user_id', $this->id)
            ->get()
            ->first()
            ->total;
    }

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function torrentsCount()
    {
        return Torrent::selectRaw('COUNT(*) as total')
            ->where('user_id', $this->id)
            ->get()
            ->first()
            ->total;
    }

    public function scopeForNotifying($query)
    {
        return $query->where('last_login_at', '>', Carbon::now()->subDays(7));
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function avatarName()
    {
        return mb_strtoupper(mb_substr($this->login ?: $this->email, 0, 2));
    }

    public function avatarUrl()
    {
        return $this->avatar ? (new Avatar())->originalUrl($this->avatar) : '';
    }

    public function displayName()
    {
        return $this->login ?: $this->email;
    }

    public function isAdmin()
    {
        return $this->isRoot();
    }

    public function isRoot()
    {
        return $this->id === 1;
    }

    public function markNotificationsAsRead()
    {
        $have_unread = false;

        foreach ($this->notifications as $notification) {
            if ($notification->unread()) {
                $have_unread = true;
                break;
            }
        }

        if ($have_unread) {
            $this->unreadNotifications()->update(['read_at' => Carbon::now()]);
        }

        return $have_unread;
    }

    public function publicName()
    {
        return $this->login ?: "user #{$this->id}";
    }

    public function sendPasswordResetNotification($token)
    {
        register_shutdown_function(function () use ($token) {
            \Mail::to($this)->send(new ResetPassword($token));
        });
    }

    public function uploadAvatar(UploadedFile $file)
    {
        $avatar = new Avatar();

        if ($this->avatar) {
            $avatar->delete($this->avatar);
        }

        $filename = $avatar->upload($file, $this->id);

        $this->avatar = $filename;
        $this->save();

        return $avatar->originalUrl($filename);
    }

    public function isPasswordOld()
    {
        return strlen($this->password) === 32;
    }

    public function isOldPasswordCorrect($password)
    {
        if ($this->salt && md5($password.$this->salt) === $this->password) {
            return true;
        }

        if (!$this->salt && md5($password) === $this->password) {
            return true;
        }

        return false;
    }
}
