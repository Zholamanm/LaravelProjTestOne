<?php

namespace App\Http\Controllers;

use App\Models\UserDetails;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function profile_edit() {
        return view('profile_edit');
    }
    public function profile_edit_check(Request $request) {
        $valid = $request->validate([
            'fname' => 'required|min:4|max:100',
            'lname' => 'required|min:4|max:100',
            'mob_phone' => 'required|min:4|max:100',
            'phone' => 'required|min:4|max:100',
            'address' => 'required|min:4|max:100',
            'postcode' => 'required|min:4|max:100',
            'citizenship' => 'required|min:4|max:100',
            'bdate' => 'required|min:4|max:100',
            'job_title' => 'required|min:4|max:100'
        ]);

        $user = auth()->user();

        if ($request->has('phone')) {
            $user->phone = $request->input('phone');
            $user->save();
        }
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('uploads/avatars/' . $filename));

            $user = auth()->user();
            $user->avatar = $filename;
            $user->save();
        }

        $user_details = $user->details ?? new UserDetails();

        $user_details->user_model_id = auth()->user()->id;
        $user_details->first_name = $request->input('fname');
        $user_details->last_name = $request->input('lname');
        $user_details->mob_phone = $request->input('mob_phone');
        $user->phone = $request->input('phone');
        $user_details->address = $request->input('address');
        $user_details->postcode = $request->input('postcode');
        $user_details->citizenship = $request->input('citizenship');
        $user_details->birth_date = $request->input('bdate');
        $user_details->job_title = $request->input('job_title');

        $user->save();
        $user_details->save();

        return redirect()->route('profile');
    }
}
