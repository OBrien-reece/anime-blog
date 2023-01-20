@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row mt-3 border-top border-start border-end border-bottom">
            <div class="col-sm-3 col-md-3 mt-2">
                <img
                    class="image_avatar"
                    width="100%" style="z-index: 0"
                    src="{{ asset('images/anime_image_profile/' . $anime->anime_image_profile) }}"
                    alt="">

                <br><br>

                <div class="border-bottom">
                    <span style="font-family: Times New Roman, SansSerif">
                        <strong>Information</strong>
                    </span>
                </div>

                <div class="anime_info border-bottom" style="padding: 20px;font-family: 'Times New Roman'">

                @foreach($anime->blogInformation as $blogInfo)

                <div style="padding: .2px">
                    <span>
                        <strong>Type:</strong> {{ $blogInfo['type'] }}
                    </span>
                </div>

                <br>

                <div style="padding: .2px">
                    <span>
                        <strong>Status:</strong> {{ $blogInfo['status'] }}
                    </span>
                </div>

                        <br>

                <div style="padding: .2px">
                    <span>
                        <strong>Premiered:</strong> {{ $blogInfo['premiered'] }}
                    </span>
                </div>

                        <br>

                <div style="padding: .2px">
                    <span>
                        <strong>Studio:</strong> {{ $blogInfo['studio'] }}
                    </span>
                </div>

                        <br>

                <div style="padding: .2px">
                    <span>
                        <strong>Genre:</strong> {{ $blogInfo['genre'] }}
                    </span>
                </div>

                        <br>

                <div style="padding: .2px">
                    <span>
                        <strong>Licensors:</strong> {{ $blogInfo['licensors'] }}
                    </span>
                </div>

                @endforeach

                </div>


                @if(Auth::user() && Auth::user()->id === $anime->user_id)
                    <div class="mt-2 mb-4 border-bottom">
                        <span style="font-family: 'Times New Roman'">
                            Actions:
                            <ul style="list-style-type: none">
                                <li style="color: green">
                                    <a href="/blog/{{ $anime->slug }}/edit">
                                        Edit
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </li>
                                <li style="color: red">
                                    <form action="/blog/{{ $anime->slug }}" method="POST">
{{--                                        @method('DELETE')--}}
                                        @csrf
                                            <button
                                                style="text-decoration:none;color: red"
                                                class="btn btn-link">
                                                Delete
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                    </form>
                                </li>
                            </ul>
                        </span>
                    </div>
                @endif


            </div>
            <div class="col-sm-9 col-md-9 border-start">
                <img
                    style="border-bottom-left-radius: 3px;border-bottom-right-radius: 3px"
                    width="100%"
                     src="{{ asset('images/anime_image_profile/' . $anime->anime_image_profile) }}"
                     alt="">
                <h2 class="mt-3 border-bottom" style="font-family: 'Times New Roman';text-align: center">
                    {{ $anime['blog_title'] }}
                </h2>

                <p>{!! $anime['description'] !!}</p>

            </div>
        </div>

        <div class="row m-auto mb-2">
                <div class="col-md-8 border-start border-end border-bottom">
                    <div style="padding-top: 10px">
                        <strong>
                            <span style="color: purple" class="border-bottom">Recent Comments</span>
                        </strong>
                        <div class="row">
                            <div class="col-md-2">Lorem ipsum dolor sit.</div>
                            <div class="col-md-10">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi ea facilis fugit laudantium numquam officiis quod rerum vel voluptatum!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 border-end border-bottom" style="padding-top: 10px">
                    <strong>
                        <span style="color: purple" class="border-bottom">If interested, Please comment below</span>
                    </strong>

                    <br>

                    <form action="" method="POST">
                        <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
{{--                        <br>--}}
                        <strong>
                            <a
                                style="text-decoration: none;color: purple;font-family: 'Times New Roman'"
                                href=""
                                class="btn-link">
                                Post Comment
                            </a>
                        </strong>
                    </form>

                </div>
        </div>

    </div>

@include('layouts.footer')

@endsection
