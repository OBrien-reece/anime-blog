<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateUserProfileImageRequest;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidateUserProfileImageRequest $request, $id)
    {
        $request->validated();
        $user = User::find($id);

        $new_file_name = 'profile' . '_' . time() . '.' . $request->image_profile->extension();

        $request->image_profile->move(public_path('images/user_profile_img'), $new_file_name);

        $user->profile_image = $new_file_name;
        if ($user->save()) {
            return redirect()->route('profile')->with('success', 'Profile Image updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

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

}
