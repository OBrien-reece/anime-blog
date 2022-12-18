@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 m-auto mt-5" >

                <form autocomplete="off" action="/blog" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="anime_name" class="for">
                            <h2>
                                <strong>Anime Title</strong>
                            </h2>
                        </label>
                        <input type="text" placeholder="Anime Title e.g One Piece" class="form-control" name="anime_title" id="">
                    </div>

                    <div class="form-group mt-3">
                        <label for="blog-title"></label>
                        <input type="text" class="input-form input-placeholder" style="color: gray" name="blog_title" placeholder="Article Title...">
                    </div>

                    <textarea class="mt-4" name="description" id="description" cols="102" rows="10"></textarea>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label for="aired" class="mb-2 mt-2"><h4>First Aired</h4></label>
                                <input type="date" name="aired" id="date" class="form-control">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="studio" class="mb-2 mt-2"><h4>Studio</h4></label>
                                <input type="text" name="studio" id="studio" class="form-control">
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-success mt-4 mb-5 col-12" name="postBlogBtn" type="submit">Post Blog</button>

                </form>
            </div>
            <div class="col-md-3 mt-5">

                @if($errors->any())
                    <div class="m-auto text-danger">
                        @foreach($errors->all() as $error)
                            <li class="list-none" style="list-style-type: none">
                                {{ $error }}
                            </li>
                        @endforeach
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection
