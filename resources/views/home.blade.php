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
          <img src="{{ URL('storage/rmluffy.png') }}" alt="" class="background-img">

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

          <div>

{{--              <div style="display: flex">--}}
{{--                    <div class="row" style="margin: auto;position: relative">--}}

{{--                  @foreach($animes as $anime)--}}

{{--                      <div class="card_class">--}}
{{--                          <div class="imgbox">--}}
{{--                              <img class="img_class"--}}
{{--                                  src="https://images.pexels.com/photos/1815257/pexels-photo-1815257.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"--}}
{{--                              />--}}

{{--                              <div class="content">--}}
{{--                                  <h2>keep Smiling</h2>--}}
{{--                                  <p>--}}
{{--                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat--}}
{{--                                      doloribus vitae fugit enim repudiandae--}}
{{--                                  </p>--}}
{{--                              </div>--}}
{{--                          </div>--}}
{{--                      </div>--}}




{{--                      <div class="col-md-4 mb-4">--}}
{{--                              <div class="card">--}}
{{--                                  <div class="card-body">--}}
{{--                                  <div>--}}
{{--                                      <span><code><h4>{{ $anime['anime_title'] }}</h4></code></span>--}}

{{--                                  </div>--}}

{{--                                      <br>--}}

{{--                                      <span class="card-text">--}}
{{--                                      {!! Str::limit($anime["description"], 300) !!}--}}
{{--                                  </span>--}}

{{--                                      <br><br>--}}

{{--                                      <div>--}}
{{--                                          <span class="card-link">--}}
{{--                                              <a href="/blog/{{ $anime['slug'] }}" class="btn-link">--}}
{{--                                                  <strong>--}}
{{--                                                      Read more &rarr;--}}
{{--                                                  </strong>--}}
{{--                                              </a>--}}
{{--                                          </span>--}}

{{--                                          --}}{{----}}{{--Show only the logged in user the Edit button to the blog he created--}}

{{--                                          @if(Auth::user() && Auth::user()->id === $anime['user_id'])--}}
{{--                                              <div style="float: right"><span style="color: green;">Edit &rarr;</span></div>--}}
{{--                                          @endif--}}

{{--                                      </div>--}}

{{--                                  </div>--}}

{{--                              </div>--}}
{{--                      </div>--}}

{{--                  @endforeach--}}

{{--              </div>--}}
{{--              </div>--}}

              <section class="product">
{{--                  <h2 class="product-category">Best selling</h2>--}}
                  <button class="pre-btn"><img src="{{ URL('images/img/arrow.png') }}" alt=""></button>
                  <button class="nxt-btn"><img src="{{ URL('images/img/arrow.png') }}" alt=""></button>
                  <div class="product-container">


                      @foreach($animes as $anime)

                      <div class="product-card">
                          <div class="product-image">
                              <span class="discount-tag">50% off</span>
                              <img src="{{ asset('images/anime_image_profile/' . $anime->anime_image_profile) }}" class="product-thumb" alt="Anime Picture">
                              <button class="card-btn">Add to wishlist</button>
                          </div>
                          <div class="product-info">
                              <h2 class="product-brand">Brand</h2>
                              <p class="product-short-description">A short description</p>
                              <span class="price">$20</span>
                              <span class="actual-price">$40</span>
                          </div>
                      </div>

                      @endforeach


                  </div>
              </section>

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



