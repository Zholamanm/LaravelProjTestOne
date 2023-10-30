<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BudgetBuy
 *
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
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetBuy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetBuy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetBuy query()
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetBuy whereCardcvv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetBuy whereCardexp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetBuy whereCardname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetBuy whereCardnumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetBuy whereDatefrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetBuy whereDateto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetBuy whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetBuy whereFname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetBuy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetBuy whereLname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetBuy whereUsername($value)
 * @mixin \Eloquent
 */
class BudgetBuy extends Model
{
    public $timestamps = false;
    use HasFactory;
}
