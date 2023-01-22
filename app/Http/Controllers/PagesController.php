<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\ValidateUserProfileImageRequest;

class PagesController extends Controller
{
    public function show_about() {
        return view('pages.about');
    }

    public function contact_us() {
        return view('pages.contact_us');
    }

    public function view_profile() {

        $logged_in_user = User::where('users.id', Auth()->user()->id)->firstOrFail();

        return view('pages.profile', [
            'logged_in_user' => $logged_in_user
        ]);
    }

    public function update_user_profile(ValidateUserProfileImageRequest $request, $id) {

        $request->validated();

        dd($user_id = $request->input('user_id'));

//        $save_user_profile_image = User::
    }
}
