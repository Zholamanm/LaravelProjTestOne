<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DeluxeBuy
 *
 * @method static \Illuminate\Database\Eloquent\Builder|DeluxeBuy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeluxeBuy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeluxeBuy query()
 * @property int $id
 * @property string $fname
 * @property string $lname
 * @property string $username
 * @property string $email
 * @property string $datefrom
 * @property string $dateto
 * @property string $cardname
 * @property string $cardnumber
 * @property string $cardexp
 * @property string $cardcvv
 * @method static \Illuminate\Database\Eloquent\Builder|DeluxeBuy whereCardcvv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeluxeBuy whereCardexp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeluxeBuy whereCardname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeluxeBuy whereCardnumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeluxeBuy whereDatefrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeluxeBuy whereDateto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeluxeBuy whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeluxeBuy whereFname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeluxeBuy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeluxeBuy whereLname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeluxeBuy whereUsername($value)
 * @mixin \Eloquent
 */
class DeluxeBuy extends Model
{
    public $timestamps = false;
    use HasFactory;
}
