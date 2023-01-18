@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="mt-4 border-bottom border-end border-top border-start" style="border-radius: 3px">
            <div class="row m-auto">
                <div class="col-md-12">
                    <div class="border-bottom">
                        <div style="font-family: Times New Roman, SansSerif;font-size: medium">
                            <span style="color: purple">Ongoing Anime Blogs</span>
                        </div>
                    </div>

                    <div class="row">

                        @forelse($ongoing_anime as $ongoing)

                            <div class="col-md-4 col-lg-3 col-sm-4 mt-2 mb-2">
                                <div class="card image_card_blog">
                                    <a href="/blog/{{ $ongoing->slug }}">
                                        <img
                                            class="image_anime_blog"
                                            style="border-radius: 3px"
                                            width="100%"
                                            src="{{ asset('images/anime_image_profile/' . $ongoing->anime_image_profile) }}"
                                            alt="Ongoing Anime Blog Canvas">
                                    <div class="card-body">
                                        <div class="intro text-dark">
                                            <h4 style="font-family: 'Times New Roman';color: purple">
                                                {{ $ongoing->anime_title }}
                                            </h4>
                                            <span style="font-family: 'Times New Roman'">
                                                {{ $ongoing->blog_title }}
                                            </span>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>

                        @empty

                            <p style="font-family: 'Times New Roman'">
                                No blogs to display at the moment. Updates will be made soon
                            </p>

                        @endforelse


                    </div>
                </div>
            </div>
        </div>
    </div>



{{--    @include('layouts.footer')--}}
@endsection
