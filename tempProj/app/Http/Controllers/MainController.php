<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class MainController extends Controller {
    public function home() {
        return view('home');
    }

    public function profile() {
        return view('profile');
    }

    public function about() {
        return view('about');
    }
    public function faqs() {
        $faq = new ContactModel();
        return view('faqs', ['faqs' => $faq->all()]);
    }

    public function pricing() {
        return view('pricing');
    }

    public function pricing_budget_buy() {
        return view('budget_buy');
    }

    public function pricing_luxe_buy() {
        return view('luxe_buy');
    }

    public function pricing_deluxe_buy() {
        return view('deluxe_buy');
    }

    public function features() {
        return view('features');
    }

    public function faqs_check(Request $request) {
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:15|max:300'
        ]);

        $review = new ContactModel();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('faqs');
    }
}
