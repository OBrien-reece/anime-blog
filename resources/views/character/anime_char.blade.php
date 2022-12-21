@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-md-9 text-center mt-4 m-auto">
            <form action="/character" autocomplete="off" method="POST" enctype="multipart/form-data">

                @csrf

                <h2 class="h2-class">Add Anime characters and their description</h2>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="anime_name" class="anime_name">Anime the character belongs to:</label>
                        </div>
                        <div class="col-md-6">
                            <select id="cars" class="form-control" name="anime_title_id" >

                                @foreach($animes as $anime)
                                <option value="{{$anime->id}}">{{$anime->anime_title}}</option>
                                @endforeach

                            </select><br><br>
                        </div>
                    </div>
                </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="character" class="label-size">Anime Character's name<sup>*</sup></label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="characters"
                                            value="{{ old('characters') }}"
                                            id="characters">

                                        @if($errors->any())

                                            @if($errors->has('characters'))
                                                <div class="text-danger">
                                                    <small>
                                                        <strong>{{ $errors->first('characters') }}</strong>
                                                    </small>
                                                </div>
                                            @else
                                                <div class="text-success" style="color: green">
                                                    <small>
                                                        <strong>{{ __("Looks good!") }}</strong>
                                                    </small>
                                                </div>
                                            @endif

                                        @endif

                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="voice_actor" class="label-size">Voice actor that voices the character<sup>*</sup></label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="voice_actor"
                                            value="{{ old('voice_actor') }}"
                                            id="voice_actor">

                                        @if($errors->any())

                                            @if($errors->has('voice_actor'))
                                                <div class="text-danger">
                                                    <small>
                                                        <strong>{{ $errors->first('voice_actor') }}</strong>
                                                    </small>
                                                </div>
                                            @else
                                                <div class="text-success" style="color: green">
                                                    <small>
                                                        <strong>{{ __("Looks good!") }}</strong>
                                                    </small>
                                                </div>
                                            @endif

                                        @endif

                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <textarea placeholder="Type Character's power description here..." class="mt-4 textarea" name="power_desc" id="description" cols="90" rows="4">{{ old('power_desc') }}</textarea>

                                @if($errors->any())

                                    @if($errors->has('power_desc'))
                                        <div class="text-danger">
                                            <smaLL>
                                                <strong>{{ $errors->first('power_desc') }}</strong>
                                            </smaLL>
                                        </div>
                                    @else
                                        <div class="text-success" style="color: green">
                                            <smaLL>
                                                <strong>{{ __("Looks good!") }}</strong>
                                            </smaLL>
                                        </div>
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

                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control" type="file" name="image_path" value="{{ old('image_path') }}">
                                        @if($errors->any())

                                            @if($errors->has('image_path'))
                                                <div class="text-danger">
                                                    <smaLL>
                                                        <strong>{{ $errors->first('image_path') }}</strong>
                                                    </smaLL>
                                                </div>
                                            @endif

                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="file" name="image_path_2" value="{{ old('image_path_2') }}">
                                        @if($errors->any())

                                            @if($errors->has('image_path_2'))
                                                <div class="text-danger">
                                                    <smaLL>
                                                        <strong>{{ $errors->first('image_path_2') }}</strong>
                                                    </smaLL>
                                                </div>
                                            @endif

                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                <button type="submit" class="btn btn-success btn-block mt-2 mb-2 col-12">Submit</button>
            </form>
        </div>
    </div>

@endsection
