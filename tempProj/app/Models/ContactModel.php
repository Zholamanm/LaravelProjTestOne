<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ContactModel
 *
 * @property int $id
 * @property string $email
 * @property string $subject
 * @property string $message
 * @method static \Illuminate\Database\Eloquent\Builder|ContactModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactModel whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactModel whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactModel whereSubject($value)
 * @mixin \Eloquent
 */
class ContactModel extends Model
{
    public $timestamps = false;
    use HasFactory;
}
