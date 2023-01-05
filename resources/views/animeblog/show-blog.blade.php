@extends('layouts.app')

@section('content')

<div class="container">
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-sm-3 col-md-3 border-start border-end">
                <img width="86%" src="{{ asset('images/anime_image_profile/' . $anime->anime_image_profile) }}" alt="">
            </div>
            <div class="col-sm-9 col-md-9 border-end">
                <label>Right Column</label>

                <p>{!! $anime['description'] !!});</p>
            </div>
        </div>
    </div>
</div>

@endsection
