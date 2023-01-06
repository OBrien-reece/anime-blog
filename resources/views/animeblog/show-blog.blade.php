@extends('layouts.app')

@section('content')

<div class="container">
    <div class="container-fluid">
        <div class="row mt-3 border-top border-start border-end">
            <div class="col-sm-3 col-md-3 mt-2">
                <img
                    class="image_avatar"
                    width="100%" style="z-index: 0"
                    src="{{ asset('images/anime_image_profile/' . $anime->anime_image_profile) }}"
                    alt="">

                <br><br>

                <div class="border-bottom">
                    <span style="font-family: Times New Roman, SansSerif">Information</span>
                </div>

                @foreach($anime->blogInformation as $blogInfo)

                <span>Type: {{ $blogInfo['type'] }}</span>

                @endforeach

            </div>
            <div class="col-sm-9 col-md-9 border-start">

                <p>{!! $anime['description'] !!}</p>

            </div>
        </div>
    </div>
</div>

@endsection
