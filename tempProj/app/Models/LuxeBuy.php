<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\LuxeBuy
 *
 * @method static \Illuminate\Database\Eloquent\Builder|LuxeBuy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LuxeBuy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LuxeBuy query()
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
 * @method static \Illuminate\Database\Eloquent\Builder|LuxeBuy whereCardcvv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LuxeBuy whereCardexp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LuxeBuy whereCardname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LuxeBuy whereCardnumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LuxeBuy whereDatefrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LuxeBuy whereDateto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LuxeBuy whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LuxeBuy whereFname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LuxeBuy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LuxeBuy whereLname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LuxeBuy whereUsername($value)
 * @mixin \Eloquent
 */
class LuxeBuy extends Model
{
    public $timestamps = false;
    use HasFactory;
}
