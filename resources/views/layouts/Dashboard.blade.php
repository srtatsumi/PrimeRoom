@extends('common.master')
@section('content')

<main class="page-content">

  @if((session()->has('s_msg')))
  <span style="text-align: center; color: green ">{{session()->get('s_msg')}}</span>
@endif
    <!--Section Search form-->
      <section style="margin: 5px auto;">        
        <div>
            <div>
              <form action="{{route('searchFilter')}}" method="post">
                @csrf
                <div>
                  <div>
                   
                      
                      <div class="searchBars" >
                        <!-- <label class="search-text" for="home-tabs1-search-form-input">Search by City or Address:</label> -->
                        <select name="regions" id="" style="width:30px; margin-right:25px;">
                          <option value="" selected>All regions</option>
                          @foreach ($details as $item)
                          <option value="{{$item->city}}">{{$item->city}}</option>
                          @endforeach
                        </select>
                        <input class="search-bar" id="home-tabs1-search-form-input" type="text" name="s" autocomplete="off" placeholder="Where do you want to rent">
                        <select name="roomToRent" id="">
                          <option value="" selected>Room to rent</option>
                          @foreach ($details as $item)
                            <option value="{{$item->roomToRent}}">{{$item->roomToRent}}</option>
                          @endforeach
                        </select>
                        
                        <button class="button" type="submit" style="max-width: 120px">search</button>
                      </div>
                   
                  </div>
                </div>
              </form>

              <!-- <form>
                <div class="group-sm group-top">
                  <div class="group-item element-fullwidth" style="max-width: 390px">
                      <div class="form-group">
                        <label class="form-label rd-input-label" for="home-tabs1-search-form-input">Search by City or Address:</label>
                        <input class="form-control" id="home-tabs1-search-form-input" type="text" name="s" autocomplete="off">
                      </div>
                  </div>
                        <button class="btn btn-primary element-fullwidth" type="button" style="max-width: 120px">search</button>
                </div>
              </form> -->
            </div>
          </div>
      </section>

    <section class="context-dark">
      <!-- Swiper-->
      <div class="swiper-container swiper-slider" data-height="33%" data-min-height="600px" data-dots="true">
        <div class="swiper-wrapper">
          <div class="swiper-slide swiper-slide-overlay-disable" data-slide-bg="./images/room.jpg" style="background-position: center center"></div>
          <div class="swiper-slide swiper-slide-overlay-disable" data-slide-bg="./images/room-bed.jpg" style="background-position: center center"></div>
          <div class="swiper-slide swiper-slide-overlay-disable" data-slide-bg="./images/home.jpg" style="background-position: center center"></div>
        </div>

        <!-- Swiper Pagination-->
        <div class="swiper-pagination swiper-pagination-type-2"></div>
      </div>
    </section>
    <!--Section thumbnails terry-->
    <!-- <section class="section-34"> -->
      <!-- <div class="container-fluid"> -->
        <!-- <div class="row justify-content-sm-center"> -->
          <!-- <div class="col-sm-8 col-md-6 col-xl-3"> -->
            <!-- Thumbnail Terry-->
            <!-- <figure class="thumbnail-terry"><a href="#"><img width="442" height="280" src="./images/home-img-01-442-280.jpg" alt=""/></a> -->
              <!-- <figcaption> -->
                <!-- <div> -->
                  <!-- <h4 class="thumbnail-terry-title">With Swimming Pool </h4> -->
                <!-- </div> -->
                <!-- <p class="thumbnail-terry-desc offset-top-0">32 properties</p><a class="btn offset-top-10 offset-md-top-0 btn-primary" href="./catalog.php">choose an apartment</a> -->
              <!-- </figcaption> -->
            <!-- </figure> -->
          <!-- </div> -->
          <!-- <div class="col-sm-8 col-md-6 col-xl-3 offset-top-30 offset-md-top-0"> -->
            <!-- Thumbnail Terry-->
            <!-- <figure class="thumbnail-terry"><a href="#"><img width="442" height="280" src="./images/home-img-02-442-280.jpg" alt=""/></a> -->
              <!-- <figcaption> -->
                <!-- <div> -->
                  <!-- <h4 class="thumbnail-terry-title">Cozy Houses</h4> -->
                <!-- </div> -->
                <!-- <p class="thumbnail-terry-desc offset-top-0">54 properties</p><a class="btn offset-top-10 offset-md-top-0 btn-primary" href="./catalog.php">choose an apartment</a> -->
              <!-- </figcaption> -->
            <!-- </figure> -->
          <!-- </div> -->
          <!-- <div class="col-sm-8 col-md-6 col-xl-3 offset-top-30 offset-xl-top-0"> -->
            <!-- Thumbnail Terry-->
           <!--  <figure class="thumbnail-terry"><a href="#"><img width="442" height="280" src="./images/home-img-03-442-280.jpg" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Studio Apartments</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0">32 properties</p><a class="btn offset-top-10 offset-md-top-0 btn-primary" href="./catalog.php">choose an apartment</a>
              </figcaption>
            </figure>
          </div>
          <div class="col-sm-8 col-md-6 col-xl-3 offset-top-30 offset-xl-top-0"> -->
            <!-- Thumbnail Terry-->
            <!-- <figure class="thumbnail-terry"><a href="#"><img width="442" height="280" src="./images/home-img-04-442-280.jpg" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Luxury Houses</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0">19 properties</p><a class="btn offset-top-10 offset-md-top-0 btn-primary" href="./catalog.php">choose an apartment</a>
              </figcaption>
            </figure>
          </div>
        </div>
      </div> -->
    <!-- </section> -->
    <!--Section Recent Properties-->
    <section class="section-bottom-98 section-top-34 section-lg-bottom-110 section-lg-top-66">
      <div class="container">
        <h2 class="font-weight-bold">Recent Properties</h2>
        <hr class="divider bg-saffron">
        @if (count($details ) == 0)
         <p class="font-weight-bold">No Property Found</p>
        @endif
        <div class="row">
        
        
             @foreach ($details as $item)
             <div class="col-md-6 col-lg-4"><img class="img-fluid d-inline-block" src="{{$item->propertyImage}}" width="370" height="250" alt="">
              <div class="text-md-left offset-top-24">
                <div>
                  <h5 class="font-weight-bold text-primary"><a href="{{ url('getPropertyDetails/'.$item->id) }}">{{$item->propertyTitle}}</a></h5>
                </div>
                <!-- <h6 class="offset-top-10"> $1199.00/mon</h6> -->
                <ul class="list-inline list-inline-dotted text-dark">
                  <li class="list-inline-item">1200 sq ft</li>
                  <li class="list-inline-item">{{$item->bedroom}} bedroom</li>
                  <li class="list-inline-item">{{$item->bathroom}} bathroom</li>
                </ul>
                <div>
                  <p>{{$item->propertyDescription}}</p>
                </div>
              </div>
            </div>
             @endforeach
   
       
         
          {{-- <div class="col-md-6 col-lg-4 offset-top-66 offset-md-top-0"><img class="img-fluid d-inline-block" src="./images/home-img-06-370x250.jpg" width="370" height="250" alt="">
            <div class="text-md-left offset-top-24">
              <div>
                <h5 class="font-weight-bold text-primary"><a href="./single-property-page.php">Ashton San Francisco</a></h5>
              </div>
              <!-- <h6 class="offset-top-10"> $1595.00/mon</h6> -->
              <ul class="list-inline list-inline-dotted text-dark">
                <li class="list-inline-item">1200 sq ft</li>
                <li class="list-inline-item">2 bedrooms</li>
                <li class="list-inline-item">2 bathrooms</li>
              </ul>
              <div>
                <p>Ashton San Francisco offers luxury apartments, eco-friendly features, and remarkable on-site resident amenities. Enjoy premier services and access to our state-of-the-art fitness center, clubhouse, business center, and outdoor fire pit lounge.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 offset-top-66 offset-lg-top-0"><img class="img-fluid d-inline-block" src="./images/home-img-07-370x250.jpg" width="370" height="250" alt="">
            <div class="text-md-left offset-top-24">
              <div>
                <h5 class="font-weight-bold text-primary"><a href="./single-property-page.php">The Presidio Residences</a></h5>
              </div>
              <!-- <h6 class="offset-top-10"> $2699.00/mon</h6> -->
              <ul class="list-inline list-inline-dotted text-dark">
                <li class="list-inline-item">2200 sq ft</li>
                <li class="list-inline-item">4 bedrooms</li>
                <li class="list-inline-item">3 bathrooms</li>
              </ul>
              <div>
                <p>The Presidio Residences offer a unique opportunity to live in a national park setting and enjoy quiet neighborhoods, convenient location, beautiful open spaces, and outstanding recreational amenities.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 offset-top-66"><img class="img-fluid d-inline-block" src="./images/home-img-08-370x250.jpg" width="370" height="250" alt="">
            <div class="text-md-left offset-top-24">
              <div>
                <h5 class="font-weight-bold text-primary"><a href="./single-property-page.php">Alchemy by Alta</a></h5>
              </div>
              <!-- <h6 class="offset-top-10"> $1199.00/mon</h6> -->
              <ul class="list-inline list-inline-dotted text-dark">
                <li class="list-inline-item">1200 sq ft</li>
                <li class="list-inline-item">4 bedrooms</li>
                <li class="list-inline-item">2 bathrooms</li>
              </ul>
              <div>
                <p>One month FREE on select apartment homes for a limited time.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 offset-top-66"><img class="img-fluid d-inline-block" src="./images/home-img-09-370x250.jpg" width="370" height="250" alt="">
            <div class="text-md-left offset-top-24">
              <div>
                <h5 class="font-weight-bold text-primary"><a href="./single-property-page.php">Avalon at Mission Bay</a></h5>
              </div>
              <!-- <h6 class="offset-top-10"> $1595.00/mon</h6> -->
              <ul class="list-inline list-inline-dotted text-dark">
                <li class="list-inline-item">1200 sq ft</li>
                <li class="list-inline-item">2 bedrooms</li>
                <li class="list-inline-item">2 bathrooms</li>
              </ul>
              <div>
                <p>Avalon at Mission Bay located in San Francisco near the San Francisco Caltrain Station offers thoughtfully designed studio, 1, 2 and 3 bedroom apartments and town homes.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 offset-top-66"><img class="img-fluid d-inline-block" src="./images/home-img-10-370x250.jpg" width="370" height="250" alt="">
            <div class="text-md-left offset-top-24">
              <div>
                <h5 class="font-weight-bold text-primary"><a href="./single-property-page.php">Bayside Village Apartments</a></h5>
              </div>
              <!-- <h6 class="offset-top-10"> $2699.00/mon</h6> -->
              <ul class="list-inline list-inline-dotted text-dark">
                <li class="list-inline-item">2200 sq ft</li>
                <li class="list-inline-item">4 bedrooms</li>
                <li class="list-inline-item">3 bathrooms</li>
              </ul>
              <div>
                <p>Pick your pleasure from a vantage point that puts all the best of the city's lively South Beach neighborhood within easy reach.</p>
              </div>
            </div>
          </div> --}}
        </div>
        @if (count($details) == 0)
         {{-- <p class="font-weight-bold">No Property Found</p> --}}
        @else
          <div class="offset-top-50"><a class="btn btn-primary" href="">view all properties</a></div>
        @endif
      </div>
    </section>
    <!--Section Why Choose primeroom?-->
    <section class="context-dark">
      <div class="parallax-container" data-parallax-img="images/bg-01-1920x768.jpg">
        <div class="parallax-content">
          <div class="container section-98 section-md-110">
            <h2 class="font-weight-bold">Why Choose primeroom?</h2>
            <hr class="divider bg-saffron">
            <div class="row justify-content-sm-center offset-top-66">
              <div class="col-md-4">
                <!-- Icon Box Type 4--><span class="icon icon-circle mdi mdi-comment-text-outline icon-carrot-filled"></span>
                <h5 class="font-weight-bold text-uppercase">more listings</h5>
                <p class="text-light">Check up to 40% more houses for sale. See pictures of your new life at a new place. See maps, markets, etc.</p>
              </div>
              <div class="col-md-4 offset-top-66 offset-md-top-0">
                <!-- Icon Box Type 4--><span class="icon icon-circle mdi mdi-star icon-carrot-filled"></span>
                <h5 class="font-weight-bold text-uppercase">top-rated agents</h5>
                <p class="text-light">All our real estate agents are professionals in your neighborhood, which are ready to help you find your new home.</p>
              </div>
              <div class="col-md-4 offset-top-66 offset-md-top-0">
                <!-- Icon Box Type 4--><span class="icon icon-circle mdi mdi-domain icon-carrot-filled"></span>
                <h5 class="font-weight-bold text-uppercase">home estimates</h5>
                <p class="text-light">Wanna know how much your new home will cost? See estimates for any neighborhood and check prices for similar homes.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Section Teams-->
    <section class="section-98 section-lg-110">
      <div class="container">
        <h2 class="font-weight-bold">Meet Our Team</h2>
        <hr class="divider bg-saffron">
        <div class="row justify-content-sm-center offset-top-66">
          <div class="col-md-6 col-lg-3">
            <div class="member-block-type-6"><img class="img-fluid d-inline-block" src="./images/users/user-ashley-mason-270x270.jpg" width="270" height="270" alt="">
              <div class="text-left offset-top-20">
                <div>
                  <h5 class="font-weight-bold text-primary"><a href="./team-member.php">Ashley Mason</a></h5>
                </div>
              </div>
              <address class="contact-info text-left">
                <ul class="list-unstyled p">
                  <li class="d-block"><span class="icon icon-xxs mdi mdi-email-open text-middle"></span> <a class="d-inline-block text-middle" href="mailto:ashley@demolink.org">ashley@demolink.org</a>
                  </li>
                </ul>
              </address>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 offset-top-50 offset-md-top-0">
            <div class="member-block-type-6"><img class="img-fluid d-inline-block" src="./images/users/user-russel-myers-270x270.jpg" width="270" height="270" alt="">
              <div class="text-left offset-top-20">
                <div>
                  <h5 class="font-weight-bold text-primary"><a href="./team-member.php">Russell Myers</a></h5>
                </div>
              </div>
              <address class="contact-info text-left">
                <ul class="list-unstyled p">
                  <li class="d-block"><span class="icon icon-xxs mdi mdi-email-open text-middle"></span> <a class="d-inline-block text-middle" href="mailto:russell@demolink.org">russell@demolink.org</a>
                  </li>
                </ul>
              </address>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 offset-top-50 offset-lg-top-0">
            <div class="member-block-type-6"><img class="img-fluid d-inline-block" src="./images/users/user-shirley-vasques-270x270.jpg" width="270" height="270" alt="">
              <div class="text-left offset-top-20">
                <div>
                  <h5 class="font-weight-bold text-primary"><a href="./team-member.php">Shirley Vasquez</a></h5>
                </div>
              </div>
              <address class="contact-info text-left">
                <ul class="list-unstyled p">
                  <li class="d-block"><span class="icon icon-xxs mdi mdi-email-open text-middle"></span> <a class="d-inline-block text-middle" href="mailto:shirley@demolink.org">shirley@demolink.org</a>
                  </li>
                </ul>
              </address>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 offset-top-50 offset-lg-top-0">
            <div class="member-block-type-6"><img class="img-fluid d-inline-block" src="./images/users/user-terry-sandoval-270x270.jpg" width="270" height="270" alt="">
              <div class="text-left offset-top-20">
                <div>
                  <h5 class="font-weight-bold text-primary"><a href="./team-member.php">Terry Sandoval</a></h5>
                </div>
              </div>
              <address class="contact-info text-left">
                <ul class="list-unstyled p">
                  <li><span class="icon icon-xxs mdi mdi-email-open text-middle"></span> <a class="d-inline-block text-middle" href="mailto:terry@demolink.org">terry@demolink.org</a>
                  </li>
                </ul>
              </address>
            </div>
          </div>
        </div>
        <div class="offset-top-66"><a class="btn btn-primary" href="./about.php">view all Teams</a></div>
      </div>
    </section>
    <!--Section Testimonials-->
    <section class="section-98 section-lg-110 bg-lighter">
      <div class="container">
        <h2 class="font-weight-bold">Testimonials</h2>
        <hr class="divider bg-saffron">
        <div class="offset-top-66">
          <!-- Testimonials Slider v.4-->
          <div class="owl-carousel owl-carousel-classic owl-carousel-class-light veil-owl-nav owl-carousel-testimonials-3" data-items="1" data-md-items="2" data-xl-items="3" data-nav="false" data-dots="true" data-margin="50px">
            <div>
              <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row">
                <div class="unit-left"><img class="quote-img rounded-circle" width="80" height="80" src="./images/users/user-lisa-evans-80x80.jpg" alt="Lisa Evans"/></div>
                <div class="unit-body text-left">
                  <div>
                    <p>
                      <q>Thank you for your prompt response and the help that you gave me. You always have a quick solution to any problem. What an excellent level of customer service!</q>
                    </p>
                  </div>
                  <p class="font-weight-bold quote-author offset-top-10 offset-md-top-4">
                    <cite class="text-normal">Lisa Evans</cite>
                  </p>
                </div>
              </blockquote>
            </div>
            <div>
              <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row">
                <div class="unit-left"><img class="quote-img rounded-circle" width="80" height="80" src="./images/users/user-nicholas-lane-80x80.jpg" alt="Nicholas Lane"/></div>
                <div class="unit-body text-left">
                  <div>
                    <p>
                      <q>I just want to thank you for your help. I was so pleased and grateful. Keep up the excellent work. Your site provides the best support I have ever encountered.</q>
                    </p>
                  </div>
                  <p class="font-weight-bold quote-author offset-top-10 offset-md-top-4">
                    <cite class="text-normal">Nicholas Lane</cite>
                  </p>
                </div>
              </blockquote>
            </div>
            <div>
              <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row">
                <div class="unit-left"><img class="quote-img rounded-circle" width="80" height="80" src="./images/users/user-ethan-dean-80x80.jpg" alt="Ethan Dean"/></div>
                <div class="unit-body text-left">
                  <div>
                    <p>
                      <q>Thank you very much for your rapid response. It's no doubt that your company is worth admiring! I have experienced the fastest support ever. Thank you a thousand times.</q>
                    </p>
                  </div>
                  <p class="font-weight-bold quote-author offset-top-10 offset-md-top-4">
                    <cite class="text-normal">Ethan Dean</cite>
                  </p>
                </div>
              </blockquote>
            </div>
            <div>
              <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row">
                <div class="unit-left"><img class="quote-img rounded-circle" width="80" height="80" src="./images/users/user-lisa-evans-80x80.jpg" alt="Lisa Evans"/></div>
                <div class="unit-body text-left">
                  <div>
                    <p>
                      <q>Thank you for your prompt response and the help that you gave me. You always have a quick solution to any problem. What an excellent level of customer service!</q>
                    </p>
                  </div>
                  <p class="font-weight-bold quote-author offset-top-10 offset-md-top-4">
                    <cite class="text-normal">Lisa Evans</cite>
                  </p>
                </div>
              </blockquote>
            </div>
            <div>
              <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row">
                <div class="unit-left"><img class="quote-img rounded-circle" width="80" height="80" src="./images/users/user-nicholas-lane-80x80.jpg" alt="Nicholas Lane"/></div>
                <div class="unit-body text-left">
                  <div>
                    <p>
                      <q>I just want to thank you for your help. I was so pleased and grateful. Keep up the excellent work. Your site provides the best support I have ever encountered.</q>
                    </p>
                  </div>
                  <p class="font-weight-bold quote-author offset-top-10 offset-md-top-4">
                    <cite class="text-normal">Nicholas Lane</cite>
                  </p>
                </div>
              </blockquote>
            </div>
            <div>
              <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row">
                <div class="unit-left"><img class="quote-img rounded-circle" width="80" height="80" src="./images/users/user-ethan-dean-80x80.jpg" alt="Ethan Dean"/></div>
                <div class="unit-body text-left">
                  <div>
                    <p>
                      <q>Thank you very much for your rapid response. It's no doubt that your company is worth admiring! I have experienced the fastest support ever.Thank you a thousand </q>
                    </p>
                  </div>
                  <p class="font-weight-bold quote-author offset-top-10 offset-md-top-4">
                    <cite class="text-normal">Ethan Dean</cite>
                  </p>
                </div>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Section Real Estate Tools and Resources-->
    <section class="context-dark">
    
    </section>
</main>
<script>
    @if(Session::has('success'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
        toastr.success("{{ session('message') }}");
    @endif
</script>
@endsection
