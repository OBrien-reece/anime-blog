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
          <img src="{{ URL('images/img/canvas.png') }}" height="60%" alt="" class="background-img">

          <div class="left-centered" style="margin-left: 80px;margin-top: 40px">
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



          <div class="mt-1 border-bottom border-end border-top border-start" style="border-radius: 3px">
              <div class="row m-auto">
                  <div class="col-md-9">
                      <div class="border-bottom">
                          <div style="font-family: Times New Roman, SansSerif;font-size: medium">
                                <span style="color: purple">Ongoing Anime Blogs</span>
                                <span style="float: right">
                                    <a href="">
                                        Read More
                                        <small>
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </small>
                                    </a>
                                </span>
                          </div>
                      </div>

                      <div class="row">
                          @foreach($ongoing_anime as $anime)
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
                          @endforeach
                      </div>

                      <br>

                      <div class="border-bottom">
                          <div style="font-family: Times New Roman, SansSerif;font-size: medium">
                              <span style="color: purple">Completed Anime - Blogs</span>
                              <span style="float: right">
                                    <a href="">
                                        Read More
                                        <small>
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </small>
                                    </a>
                                </span>
                          </div>
                      </div>

                      <div class="row">
                          @foreach($completed_anime as $anime)
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
                          @endforeach
                      </div>

                  </div>

                  <div class="col-md-3 mt-1 border-start">
                      <div class="jumbotron p-2 jumbotron-card">
                          <h1 class="display-7" style="font-family: 'Times New Roman';">Most Read</h1>
                          <div class="row">
                              <div class="col-md-4 pull-right">
                                  <img width="100%" height="70px" src="{{ URL('storage/luffy.jpg') }}" alt="">
                              </div>
                              <div class="col-md-8">
                                  <span>Test1</span>
                                  <br>
                                  <span>Test2</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
              </div>
          </div>



       <div class="row" style="margin-top: 20px">
           <div class="col-md-8">
               <h3>One Piece</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                   elit. Ad aut dolores, eius laboriosam laborum libero
                   modi quibusdam saepe veniam. A beatae consectetur dolor
                   ea earum molestias nostrum, quo ratione voluptatem?Lorem
                   ipsum dolor sit amet, consectetur adipisicing elit. Aliquam
                   culpa delectus distinctio dolores doloribus dolorum earum ipsam
                   iure magnam minus nihil numquam officiis recusandae repellat
                   repellendus sit vero, voluptatem, voluptatibus?Lorem ipsum dolor
                   sit amet, consectetur adipisicing elit. Animi dolorum exercitationem
                   expedita fugiat illo ipsam, neque nisi nulla odit quam quia reprehenderit
                   sunt suscipit. A ad consectetur facilis libero quod.</p>
           </div>
           <div class="col-md-4">
               <div class="jumbotron p-2 jumbotron-card">
                   <h1 class="display-7">Characters</h1>
                   <div class="row">
                       <div class="col-md-4 pull-right">
                           <img width="100px" height="70px" src="{{ URL('storage/luffy.jpg') }}" alt="">
                       </div>
                       <div class="col-md-8">
                           <p>
                               Monkey D. Luffy, also known as "Straw Hat" Luffy, is a fictional
                               character and the main protagonist of the One Piece manga series, created by Eiichiro Oda.
                           </p>
                       </div>
                       <hr class="hr-element-1">
                   </div>
                   </div>
               </div>
           </div>

    <hr>


       </div>
</div>

</div>

<!-- FOOTER -->
<footer class="w-100 py-4 flex-shrink-0">
    <div class="container py-4">
        <div class="row gy-4 gx-5">
            <div class="col-lg-4 col-md-6">
                <h5 class="h1 text-white">FB.</h5>
                <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary" href="#">Bootstrapious.com</a></p>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5 class="text-white mb-3">Quick links</h5>
                <ul class="list-unstyled text-muted">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Get started</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5 class="text-white mb-3">Quick links</h5>
                <ul class="list-unstyled text-muted">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Get started</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="text-white mb-3">Newsletter</h5>
                <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                <form action="#">
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-primary" id="button-addon2" type="button"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
</div>

@endsection



