@extends('layouts.app')

@section('content')

    @if(!Auth::user())
        <script>
            setTimeout(function() {
                window.location.href = "/login"
            }, 6000); // 2 second
        </script>
    @endif

<div class="container wrapper">

      <div>
          @if(Session::has('success'))
              <div class="col-md-6 m-auto alert alert-dismissible alert-danger">
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                  <span>{{ session('success') }}</span>
              </div>
          @endif
          <img src="{{ URL('images/img/canvas.png') }}" height="60%" alt="" class="background-img">

          {{--<div class="left-centered" style="margin-left: 80px;margin-top: 40px">
              <div>
                  <strong>
                          <h1 class="text-uppercase image-text anime-text">9anime : anime blog site</h1>
                      <br>
                  </strong>

                      <h6>
                          @guest
                              @if(Route::has('login'))
                                  <span class="signup">
                                      <strong><a  href="{{ route('register') }}">Sign up</a></strong>
                                  </span>
                                      <span style="margin-bottom: 80px">or</span>
                                  <span>
                                      <strong><a class="signin" href="{{ route('login') }}">Sign in</a></strong>
                                  </span>
                                  <hr>
                              @endif
                          @else
                              <h2 class=" signup create_blog_link"><a href="/blog/create">{{ __('Create blog') }} &rarr;</a></h2>
                          @endguest
                      </h6>
              </div>
          </div>
--}}


          <div class="mt-1 border-bottom border-end border-top border-start" style="border-radius: 3px">
              <div class="row m-auto">
                  <div class="col-md-9">
                      <div class="border-bottom">
                          <div style="font-family: Times New Roman, SansSerif;font-size: medium">
                                <span style="color: purple">Ongoing Anime Blogs</span>
                                <span style="float: right">
                                    <a href="{{route('ongoing')}}">
                                        Read More
                                        <small>
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </small>
                                    </a>
                                </span>
                          </div>
                      </div>

                      <div class="row">
                          @forelse($ongoing_anime as $anime)
                              <div class="col-md-3 mt-2 mb-2 image_container">
                                  <a href="/blog/{{ $anime->slug }}">
                                      <img
                                          class="image_hover"
                                          style="border-radius: 4px"
                                          width="100%"
                                          src="{{ asset('/images/anime_image_profile/' . $anime->anime_image_profile) }}"
                                          alt="Anime Blog Canvas">
                                  </a>
                                  <small class="bottom-left">{{ $anime->anime_title }}</small>
                              </div>
                          @empty
                              <p style="padding: 20px;font-family: 'Times New Roman'">Updates will be made available soon</p>
                          @endforelse
                      </div>

                      <div class="border-bottom mt-4">
                          <div style="font-family: Times New Roman, SansSerif;font-size: medium">
                              <span style="color: purple">Completed Anime - Blogs</span>
                              <span style="float: right">
                                    <a href="{{ route('completed') }}">
                                        Read More
                                        <small>
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </small>
                                    </a>
                                </span>
                          </div>
                      </div>

                      <div class="row">
                          @forelse($completed_anime as $anime)
                              <div class="col-md-3 mt-3 mb-2 image_container">
                                  <a href="/blog/{{ $anime->slug }}">
                                      <img
                                          class="image_hover"
                                          style="border-radius: 4px"
                                          width="100%"
                                          src="{{ asset('/images/anime_image_profile/' . $anime->anime_image_profile) }}"
                                          alt="Anime Blog Canvas">
                                  </a>
                                  <small class="bottom-left">{{ $anime->anime_title }}</small>
                              </div>
                          @empty
                              <p style="padding: 20px;font-family: 'Times New Roman'">Updates will be made available soon</p>
                          @endforelse
                      </div>

                  </div>

                  <div class="col-md-3 mt-1 border-start">
                      <div class="jumbotron p-2 jumbotron-card">
                          <h4 class="display-10" style="font-family: 'Times New Roman';">Most read articles</h4>


                          @forelse($blog_rankings as $branking)
                          <div class="row">
                              <div class="col-md-6 mb-4 pull-right">
                                  <a href="/blog/{{ $branking->slug }}/">
                                  <img
                                      style="border-radius: 3px"
                                      width="100%"
                                      class="responsive"
                                      height="auto"
                                      src="{{ asset('images/anime_image_profile/' . $branking->anime_image_profile) }}"
                                      alt="Blog canvas">
                                  </a>
                              </div>
                              <div class="col-md-6">
                                  <span style="font-family: 'Times New Roman'">
                                      {{ $branking->anime_title }}
                                  </span>
                                  <br>
                                  <span style="font-family: 'Times New Roman'">
                                      {{ $branking->type }}
                                  </span>
                              </div>
                          </div>
                          @empty
                              <p style="font-family: 'Times New Roman';">No information at the moment</p>
                          @endforelse


                      </div>
                  </div>
                  </div>
              </div>
          </div>



      {{-- <div class="row" style="margin-top: 20px">
           <div class="col-md-6">
               <span>Trending Ongoing anime blog</span>
           </div>
           <div class="col-md-6">
               <span>Trending Completed anime blog</span>
           </div>

    <hr>


       </div>--}}
</div>

</div>


    @include('layouts.footer')

@endsection



