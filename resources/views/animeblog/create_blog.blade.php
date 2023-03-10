@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 m-auto mt-5" >

                <form enctype="multipart/form-data" autocomplete="off" action="/blog" method="POST">
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
                            value="{{ old('anime_title') }}"
                            id="">

                         @if($errors->any())

                            @if($errors->has('anime_title'))
                                <div style="font-family: 'Times New Roman'" class="invalid-feedback">{{ $errors->first('anime_title') }}</div>
                            @else
                                <div class="text-success" style="color: green;font-family: 'Times New Roman'">{{ __("Looks good!") }}</div>
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
                            value="{{ old('blog_title') }}"
                            required
                            placeholder="Article Title...">

                        @if($errors->any())

                            @if($errors->has('blog_title'))
                                <div style="font-family: 'Times New Roman'" class="text-danger">{{ $errors->first('blog_title') }}</div>
                            @else
                                <div class="text-success" style="color: green;font-family: 'Times New Roman'">{{ __("Looks good!") }}</div>
                            @endif

                        @endif

                    </div>

                    <textarea class="mt-4 summernote" name="description" id="your_summernote" >{{ old('description') }}</textarea>

                    @if($errors->any())

                        @if($errors->has('description'))
                            <div style="font-family: 'Times New Roman'" class="text-danger">{{ $errors->first('description') }}</div>
                        @else
                            <div class="text-success" style="color: green;font-family: 'Times New Roman'">{{ __("Looks good!") }}</div>
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

                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <code><label for="aired" class="mb-2 mt-2"><h5>Type of anime:</h5></label></code>
                                    <select class="form-select" name="animetype" id="type">
                                        <option value="Television Series">Television Series</option>
                                        <option value="Movie">Movie</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <code><label for="aired" class="mb-2 mt-2"><h5>Status of the Anime:</h5></label></code>
                                    <select class="form-select" name="anime_status" id="type">
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
                                           value="{{ old('premiered') }}"
                                           id="premiered">

                                    @if($errors->any())

                                        @if($errors->has('premiered'))
                                            <div style="font-family: 'Times New Roman'" class="text-danger">{{ $errors->first('premiered') }}</div>
                                        @else
                                            <div class="text-success" style="color: green;font-family: 'Times New Roman'">{{ __("Looks good!") }}</div>
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
                                           value="{{ old('genre') }}"
                                           id="genre">

                                    @if($errors->any())

                                        @if($errors->has('genre'))
                                            <div style="font-family: 'Times New Roman'" class="text-danger">{{ $errors->first('genre') }}</div>
                                        @else
                                            <div class="text-success" style="color: green;font-family: 'Times New Roman'">{{ __("Looks good!") }}</div>
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
                                           value="{{ old('licensors') }}"
                                           id="genre">

                                    @if($errors->any())

                                        @if($errors->has('licensors'))
                                            <div style="font-family: 'Times New Roman'" class="text-danger">{{ $errors->first('licensors') }}</div>
                                        @else
                                            <div class="text-success" style="color: green;font-family: 'Times New Roman'">{{ __("Looks good!") }}</div>
                                        @endif

                                    @endif

                                </div>
                            </div>

                            <div class="col-md-6 mb-2">
                                <code><label for="aired" class="mb-2 mt-2"><h5>Studio</h5></label></code>
                                <input
                                    value="{{ old('studio') }}"
                                    type="text"
                                    placeholder="e.g Studio Mappa"
                                    name="studio"
                                    id="studio"
                                    class="form-control @error('studio') is-invalid @enderror">

                                @if($errors->any())

                                    @if($errors->has('studio'))
                                        <div style="font-family: 'Times New Roman'" class="text-danger">{{ $errors->first('studio') }}</div>
                                    @else
                                        <div class="text-success" style="color: green;font-family: 'Times New Roman'">{{ __("Looks good!") }}</div>
                                    @endif

                                @endif

                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <input type="file" name="anime_image_profile" class="form-control">
                        @if($errors->any())

                            @if($errors->has('anime_image_profile'))

                                @foreach ($errors->get('anime_image_profile') as $message)
                                    <span style="font-family: 'Times New Roman'" class="text-danger">{{ $message }}</span>
                                    <br>
                                @endforeach

                            @else
                                <div class="text-success" style="color: green;font-family: 'Times New Roman'">{{ __("Looks good!") }}</div>
                            @endif

                        @endif
                    </div>

                    <button class="btn btn-success mt-4 mb-5 col-12" name="postBlogBtn" type="submit">Post Blog</button>

                </form>
            </div>

        </div>
    </div>
@endsection

@prepend('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Summernote JS - CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#your_summernote").summernote();
            $('.dropdown-toggle').dropdown();
            // var plainText = $($("#summernote").summernote("code")).text()
        });
        $('#your_summernote').summernote({
            toolbar: [
                ['style', ['style']],
                ['fontsize', ['fontsize']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['picture', 'hr']],
                ['table', ['table']]
            ],
            // height: 100,
            focus: false
        });
    </script>
@endprepend
