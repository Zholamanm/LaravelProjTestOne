<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\Models\UserModel
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $phone
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel wherePhone($value)
 * @mixin \Eloquent
 */
class UserModel extends Authenticatable
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'user_models';
}
