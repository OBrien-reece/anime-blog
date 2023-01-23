@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 m-auto mt-5" >

                <form
                    enctype="multipart/form-data"
                    autocomplete="off"
                    action="/blog/{{$anime['id']}}"
                    method="POST">

                    @method('PUT')
                    @csrf

                    <div class="form-group">
                        <code><label for="anime_name" class="for"></code>
                        <h2>
                            <strong>Anime Title</strong>
                        </h2>
                        </label>
                        <input
                            type="text"
                            placeholder="Anime Title e.g One Piece"
                            class="form-control @error('anime_title') is-invalid @enderror "
                            name="anime_title"
                            value="{{ $anime['anime_title'] }}"
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
                        <code><label for="blog-title"></label></code>
                        <input
                            type="text"
                            class="input-form input-placeholder"
                            style="color: gray"
                            name="blog_title"
                            value="{{ $anime['blog_title'] }}"
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

                    <textarea class="mt-4 summernote" name="description" id="your_summernote" >{{ $anime['description'] }}</textarea>

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

                    <div class="form-group mt-3">
                        <div class="row">

                            <h4 style="color: gray">Anime Information</h4>

                            @foreach($anime->blogInformation as $blogInfo)

                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <code><label for="aired" class="mb-2 mt-2"><h5>Type of anime:</h5></label></code>
                                        <select class="form-select" name="animetype" id="type">
                                            <option value="{{ $blogInfo['type'] }}" selected>{{ $blogInfo['type'] }}</option>
                                            <option value="Television Series">Television Series</option>
                                            <option value="Movie">Movie</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <code><label for="aired" class="mb-2 mt-2"><h5>Status of the Anime:</h5></label></code>
                                        <select class="form-select" name="anime_status" id="type">
                                            <option value="{{ $blogInfo['status'] }}" selected>{{ $blogInfo['status'] }}</option>
                                            <option value="Ongoing">Ongoing</option>
                                            <option value="Completed">Completed</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <code><label for="aired" class="mb-2 mt-2"><h5>Anime Premier:</h5></label></code>
                                        <input type="text"
                                               class="form-control @error('premiered') is_invalid @enderror"
                                               name="premiered"
                                               placeholder="e.g Winter 2017"
                                               value="{{ $blogInfo['premiered'] }}"
                                               id="premiered">

                                        @if($errors->any())

                                            @if($errors->has('premiered'))
                                                <div class="text-danger">{{ $errors->first('premiered') }}</div>
                                            @else
                                                <div class="text-success" style="color: green">{{ __("Looks good!") }}</div>
                                            @endif

                                        @endif

                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <code><label for="aired" class="mb-2 mt-2"><h5>Anime Genre:</h5></label></code>
                                        <input type="text"
                                               placeholder="e.g Action, Fantasy, Shonen"
                                               class="form-control @error('genre') is-invalid @enderror"
                                               name="genre"
                                               value="{{ $blogInfo['genre'] }}"
                                               id="genre">

                                        @if($errors->any())

                                            @if($errors->has('genre'))
                                                <div class="text-danger">{{ $errors->first('genre') }}</div>
                                            @else
                                                <div class="text-success" style="color: green">{{ __("Looks good!") }}</div>
                                            @endif

                                        @endif

                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <code><label for="aired" class="mb-2 mt-2"><h5>Licensors</h5></label></code>
                                        <input type="text"
                                               placeholder="e.g Funimation, Crunchyroll"
                                               class="form-control @error('licensors') is-invalid @enderror"
                                               name="licensors"
                                               value="{{ $blogInfo['licensors'] }}"
                                               id="genre">

                                        @if($errors->any())

                                            @if($errors->has('licensors'))
                                                <div class="text-danger">{{ $errors->first('licensors') }}</div>
                                            @else
                                                <div class="text-success" style="color: green">{{ __("Looks good!") }}</div>
                                            @endif

                                        @endif

                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <code><label for="aired" class="mb-2 mt-2"><h5>Studio</h5></label></code>
                                    <input
                                        value="{{ $blogInfo['studio'] }}"
                                        type="text"
                                        placeholder="e.g Studio Mappa"
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

                            @endforeach

                        </div>
                    </div>

                    <div class="form-group">
                        <span style="font-family: 'Times New Roman';color: green">
                            You can choose to update the image, or retain the previous image. If so, leave blank
                        </span>
                        <input type="file" name="anime_image_profile" class="form-control">
                        @if($errors->any())

                            @if($errors->has('anime_image_profile'))
                                <div class="text-danger">{{ $errors->first('anime_image_profile') }}</div>
                            @else
                                <div class="text-success" style="color: green">{{ __("Looks good!") }}</div>
                            @endif

                        @endif
                    </div>

                    <button class="btn btn-success mt-4 mb-5 col-12" name="postBlogBtn" type="submit">Submit edits to register updates</button>

                </form>
            </div>

        </div>
    </div>
@endsection
