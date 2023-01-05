@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 m-auto mt-5" >

                <form enctype="multipart/form-data" autocomplete="off" action="/blog" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="anime_name" class="for">
                            <h2>
                                <strong>Anime Title</strong>
                            </h2>
                        </label>
                        <input
                            type="text"
                            placeholder="Anime Title e.g One Piece"
                            class="form-control @error('anime_title') is-invalid @enderror "
                            name="anime_title"
                            value="{{ old('anime_title') }}"
                            id="">

                         @if($errors->any())

                            @if($errors->has('anime_title'))
                                <div class="invalid-feedback">{{ $errors->first('anime_title') }}</div>
                            @else
                                <div class="text-success" style="color: green">{{ __("Looks good!") }}</div>
                            @endif

                        @endif

                    </div>

                    <div class="form-group mt-3">
                        <label for="blog-title"></label>
                        <input
                            type="text"
                            class="input-form input-placeholder"
                            style="color: gray"
                            name="blog_title"
                            value="{{ old('blog_title') }}"
                            required
                            placeholder="Article Title...">

                        @if($errors->any())

                            @if($errors->has('blog_title'))
                                <div class="text-danger">{{ $errors->first('blog_title') }}</div>
                            @else
                                <div class="text-success" style="color: green">{{ __("Looks good!") }}</div>
                            @endif

                        @endif

                    </div>

                    <textarea class="mt-4 summernote" name="description" id="your_summernote" >{{ old('description') }}</textarea>

                    @if($errors->any())

                        @if($errors->has('description'))
                            <div class="text-danger">{{ $errors->first('description') }}</div>
                        @else
                            <div class="text-success" style="color: green">{{ __("Looks good!") }}</div>
                        @endif

                    @endif

                    <script>
                        var tx = document.getElementsByTagName('textarea');
                        for (var i = 0; i < tx.length; i++) {
                            tx[i].setAttribute('style', 'height:' + (tx[i].scrollHeight) + 'px;overflow-y:hidden;');
                            tx[i].addEventListener("input", OnInput, false);
                        }

                        function OnInput(e) {
                            this.style.height = 'auto';
                            this.style.height = (this.scrollHeight) + 'px';
                        }
                    </script>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label for="aired" class="mb-2 mt-2"><h4>First Aired</h4></label>
                                <input
                                    type="date"
                                    name="aired"
                                    id="date"
                                    value="{{ old('aired') }}"
                                    class="form-control @error('aired') is-invalid @enderror">

                                @if($errors->any())

                                    @if($errors->has('aired'))
                                        <div class="text-danger">{{ $errors->first('aired') }}</div>
                                    @else
                                        <div class="text-success" style="color: green">{{ __("Looks good!") }}</div>
                                    @endif

                                @endif

                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="studio" class="mb-2 mt-2"><h4>Studio</h4></label>
                                <input
                                    value="{{ old('studio') }}"
                                    type="text"
                                    name="studio"
                                    id="studio"
                                    class="form-control @error('studio') is-invalid @enderror">

                                @if($errors->any())

                                    @if($errors->has('studio'))
                                        <div class="text-danger">{{ $errors->first('studio') }}</div>
                                    @else
                                        <div class="text-success" style="color: green">{{ __("Looks good!") }}</div>
                                    @endif

                                @endif

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="file" name="anime_image_profile" class="form-control">
                        @if($errors->any())

                            @if($errors->has('anime_image_profile'))
                                <div class="text-danger">{{ $errors->first('studio') }}</div>
                            @else
                                <div class="text-success" style="color: green">{{ __("Looks good!") }}</div>
                            @endif

                        @endif
                    </div>

                    <button class="btn btn-success mt-4 mb-5 col-12" name="postBlogBtn" type="submit">Post Blog</button>

                </form>
            </div>
{{--            <div class="col-md-3 mt-5">--}}

{{--                @if($errors->any())--}}
{{--                    <div class="m-auto text-danger">--}}
{{--                        @foreach($errors->all() as $error)--}}
{{--                            <li class="list-none" style="list-style-type: none">--}}
{{--                                <strong>{{ $error }}</strong>--}}
{{--                            </li>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                @endif--}}

{{--            </div>--}}
        </div>
    </div>
@endsection
