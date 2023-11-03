<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * App\Models\UserModel
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $phone
 * @property string $avatar
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereAvatar($value)
 * @property string $confiramtion_code
 * @property-read \App\Models\UserDetails|null $details
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserModelFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereConfiramtionCode($value)
 * @mixin \Eloquent
 */
class UserModel extends Authenticatable
{
    use HasApiTokens, Notifiable;
    public $timestamps = false;
    use HasFactory;
    protected $table = 'user_models';
    public function details()
    {
        return $this->hasOne(UserDetails::class);
    }
    protected $fillable = [
        'username',
        'email',
        'password',
        'phone',
        'avatar',
        'confiramtion_code'
    ];
}
