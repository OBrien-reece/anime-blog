@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-md-9 mt-4 m-auto border-top border-bottom">
            <div class="row">
                <div class="col-md-3 border-start" style="padding: 20px">
                    <img
                        src="{{ '/images/user_profile_img/' . $logged_in_user->profile_image }}"
                        onError="this.onerror=null;this.src='https://picsum.photos/150';"
                         width="100%"
                         class="rounded">

                    <div class="mt-4">
                        <form
                            enctype="multipart/form-data"
                            action="/user/{{$logged_in_user['id']}}"
                            method="POST">

                            @method('PUT')
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $logged_in_user->id }}">
                            <label class="custom-file-upload">
                                <input type="file" name="image_profile"/>
                                <i class="fa fa-cloud-upload"></i> Edit profile image
                            </label>
                            <button
                                type="submit"
                                class="btn btn-link"
                                style="color: purple;text-decoration: none">
                                Update Profile Image
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-9 border-end" style="padding: 20px">
                    <span style="font-size: 30px" class="border-bottom">My profile</span>
                    <form action="">
                        <div class="form-group">
                            <label>First Name</label>
                            <input
                                type="text"
                                name="fname"
                                class="form-control"
                                readonly
                                value="{{$logged_in_user['fname']}}">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input
                                type="text"
                                name="lname"
                                class="form-control"
                                readonly
                                value="{{$logged_in_user['lname']}}">
                        </div>
                        <div class="form-group">
                            <label>E-Mail</label>
                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                readonly
                                value="{{$logged_in_user['email']}}">
                        </div>
                        <div class="text-center">
                            <button
                                style="text-decoration: none;color: purple;"
                                type="submit"
                                class="btn btn-link border-bottom">
                                Edit Details
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
