<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * App\Models\UserDetails
 *
 * @property int $id
 * @property int $user_model_id
 * @property string $first_name
 * @property string $last_name
 * @property string $citizenship
 * @property string $address
 * @property string $birth_date
 * @property string $mob_phone
 * @property string $job_title
 * @property string $postcode
 * @property-read \App\Models\UserModel $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereBirthDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereCitizenship($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereJobTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereMobPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails wherePostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereUserModelId($value)
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserDetailsFactory factory($count = null, $state = [])
 * @mixin \Eloquent
 */
class UserDetails extends Model
{
    use HasApiTokens, Notifiable;
    public $timestamps = false;
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(UserModel::class, 'user_model_id');
    }
    protected $fillable = [
        'first_name',
        'last_name',
        'password',
        'citizenship',
        'address',
        'birth_date',
        'mob_phone',
        'job_title',
        'postcode'
    ];
}
