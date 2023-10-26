<?php

namespace App\Http\Controllers;

use App\Models\BudgetBuy;
use App\Models\DeluxeBuy;
use App\Models\LuxeBuy;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    private function processPurchase(Request $request, $model) {
        $valid = $request->validate([
            'fname' => 'required|min:1|max:100',
            'lname' => 'required|min:1|max:100',
            'username' => 'required|min:1|max:100',
            'email' => 'required|min:4|max:30',
            'from' => 'required|min:1|max:30',
            'to' => 'required|min:1|max:30',
            'cardname' => 'required|min:1|max:100',
            'cardnumber' => 'required|min:16|max:16',
            'cardexp' => 'required|min:5|max:5',
            'cardcvv' => 'required|min:3|max:3',
        ]);

        $review = new $model;
        $review->fname = $request->input('fname');
        $review->lname = $request->input('lname');
        $review->username = $request->input('username');
        $review->email = $request->input('email');
        $review->datefrom = $request->input('from');
        $review->dateto = $request->input('to');
        $review->cardname = $request->input('cardname');
        $review->cardnumber = $request->input('cardnumber');
        $review->cardexp = $request->input('cardexp');
        $review->cardcvv = $request->input('cardcvv');

        $review->save();

        return redirect()->route('pricing');
    }

    public function pricing_budget_buy_check(Request $request) {
        return $this->processPurchase($request, BudgetBuy::class);
    }

    public function pricing_luxe_buy_check(Request $request) {
        return $this->processPurchase($request, LuxeBuy::class);
    }

    public function pricing_deluxe_buy_check(Request $request) {
        return $this->processPurchase($request, DeluxeBuy::class);
    }

}
