@extends('layouts.app')

@section('content')

<div class="container">
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-sm-3 col-md-3 border-start border-end">
                <img width="100%" style="z-index: 0" src="{{ asset('images/anime_image_profile/' . $anime->anime_image_profile) }}" alt="">
            </div>
            <div class="col-sm-9 col-md-9 border-end">

                <p>{!! $anime['description'] !!}</p>

            </div>
        </div>
    </div>
</div>

@endsection
