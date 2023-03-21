@extends('common.master')
@section('content')
<section class="context-dark">
          <div class="parallax-container" data-parallax-img="images/bg-header-1920x362.jpg">
            <div class="parallax-content">
              <div class="container section-top-34 section-md-top-98 section-bottom-34">
                <div>
                  <h1 class="font-weight-bold">Single Property Page</h1>
                </div>
                <ul class="list-inline list-inline-dashed p text-light breadcrumb-modern offset-top-10 offset-md-top-66">
                  <li class="list-inline-item active"><a href="../index.php">Home</a></li>
                  <li class="list-inline-item"><a href="./catalog.php">Catalog</a></li>
                  <li class="list-inline-item"> Single Property Page</li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </header>
      <!-- Page Contents-->
      <main class="page-content">
        <!--Section The Presidio Residences-->
        <section class="section-98 section-md-110">
          <div class="container">
            <h2 class="font-weight-bold">{{$data->propertyTitle}}</h2>
            <hr class="divider bg-saffron">
            <div class="offset-md-top-66">
              <div class="row">
                <div class="col-lg-7 col-xl-8">
                  <!-- Owl Carousel-->
                  <div class="owl-carousel owl-carousel-classic" data-items="1" data-dots="true" data-nav="true" data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;, &quot;owl-next mdi mdi-chevron-right&quot;]" data-lightgallery="group"><a class="thumbnail-classic" data-lightgallery="item" href="./images/single-property-page-01-770x510.jpg">
                      <figure><img width="770" height="510" src="{{$data->propertyImage}}" alt=""/>
                      </figure></a><a class="thumbnail-classic" data-lightgallery="item" href="./images/single-property-page-02-770x510.jpg">
                      <figure><img width="770" height="510" src="./images/single-property-page-02-770x510.jpg" alt=""/>
                      </figure></a><a class="thumbnail-classic" data-lightgallery="item" href="./images/single-property-page-03-770x510.jpg">
                      <figure><img width="770" height="510" src="./images/single-property-page-03-770x510.jpg" alt=""/>
                      </figure></a><a class="thumbnail-classic" data-lightgallery="item" href="./images/single-property-page-05-770x510.jpg">
                      <figure><img width="770" height="510" src="./images/single-property-page-05-770x510.jpg" alt=""/>
                      </figure></a><a class="thumbnail-classic" data-lightgallery="item" href="./images/single-property-page-06-770x510.jpg">
                      <figure><img width="770" height="510" src="./images/single-property-page-06-770x510.jpg" alt=""/>
                      </figure></a><a class="thumbnail-classic" data-lightgallery="item" href="./images/single-property-page-07-770x510.jpg">
                      <figure><img width="770" height="510" src="./images/single-property-page-07-770x510.jpg" alt=""/>
                      </figure></a><a class="thumbnail-classic" data-lightgallery="item" href="./images/single-property-page-08-770x510.jpg">
                      <figure><img width="770" height="510" src="./images/single-property-page-08-770x510.jpg" alt=""/>
                      </figure></a>
                  </div>
                  <div class="text-md-left offset-top-50">
                    <h5 class="font-weight-bold">Description</h5>
                    <p>{{$data->propertyDescription}}</p>
                    {{-- <p>The Presidio Residences offer a unique opportunity to live in a national park setting and enjoy quiet neighborhoods, convenient location, beautiful open spaces, and outstanding recreational amenities that you won’t find anywhere else in the area.</p> --}}
                    {{-- <p>This property includes a wide variety of facilities that can make your dwelling in the picturesque area of Southern Los Angeles very comfortable. There is everything modern citizen may need, even the most up-to-date technologies that are organically integrated with all the communications of the house. If you are looking for a calm place to live, the Presidential Residences have something to offer you. With effective planning and additional amenities available as a part of the property, these apartments can give you an unprecedented level of comfort with a quick access to the airport, train station, and the city center.</p> --}}
                  </div>
                  <div class="offset-top-30">
                    <!-- Bootstrap Table-->
                    <div class="table-responsive clearfix">
                      <table class="table table-striped">
                        <tr>
                          <th>Property details</th>
                          <th></th>
                        </tr>
                        <tr>
                          <th>Services</th>
                            <td>
                              @php
                                foreach (json_decode($data->services) as $key => $value) {
                                  echo $value. ", ";
                                }
                              @endphp
                            </td>
                        </tr>
                        <tr>
                          <th>AdType</th>
                          <td>{{$data->adType}}</td>
                        </tr>
                        <tr>
                          <th>Property Type</th>
                          <td>{{$data->propertyType}}</td>
                        </tr>
                        <tr>
                          <th>Extras</th>
                          <td>
                            @php
                              foreach (json_decode($data->extras) as $key => $value) {
                                echo $value. ", ";
                              }
                            @endphp
                          </td>
                        {{-- </tr>
                        <tr>
                          <th>Parking Type</th>
                          <td>Garage - Attached</td>
                        </tr>
                        <tr>
                          <th>Room Count</th>
                          <td>6</td>
                        </tr>
                        <tr>
                          <th>Roof Type</th>
                          <td>Tile</td>
                        </tr>
                        <tr>
                          <th>View Type</th>
                          <td>Mountain</td>
                        </tr>
                        <tr>
                          <th>Exterior Type</th>
                          <td>Stucco</td>
                        </tr> --}}
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 col-xl-4 text-lg-left inset-lg-left-30 offset-top-66 offset-md-top-0">
                  <div class="row">
                    <div class="col-sm-12 offset-top-50 order-lg-4">
                      <div class="unit unit-md flex-lg-row">
                        <div class="unit-left"><img class="img-fluid d-inline-block" src="./images/users/user-shirley-vasquez-120x120.jpg" width="120" height="120" alt=""></div>
                        <div class="unit-body">
                          <div>
                            <h5 class="text-primary font-weight-bold">Shirley Vasquez</h5>
                          </div>
                          <div class="offset-top-10">
                            <address class="contact-info text-lg-left">
                              <ul class="list-unstyled p">
                                <li class="d-block"><span class="icon icon-xxs mdi mdi-phone text-middle"></span> <a class="d-inline-block text-middle" href="tel:1-800-7650-986">1-800-7650-986</a>
                                </li>
                                <li class="d-block"><span class="icon icon-xxs mdi mdi-email-open text-middle"></span> <a class="d-inline-block text-middle" href="mailto:russell@demolink.org">shirley@demolink.org</a>
                                </li>
                              </ul>
                            </address>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 order-lg-1 offset-top-41 offset-lg-top-0">
                      <p><span class="text-middle mdi-calendar-today mdi text-light icon icon-xxs"></span> <span>April 12, 2018</span>
                      </p>
                      <div class="offset-top-20 offset-lg-top-50">
                        <ul class="list-inline list-inline-dotted text-dark">
                          <li class="list-inline-item">2200 sq ft</li>
                          <li class="list-inline-item">{{$data->bedroom}} bedrooms</li>
                          <li class="list-inline-item">{{$data->bathroom}} bathrooms</li>
                        </ul>
                      </div>
                      <div class="offset-top-20 offset-lg-top-50">
                        <h5 class="font-weight-bold"> ${{$data->rentAmount}}/{{$data->rent}}</h5>
                      </div>
                    </div>
                    <div class="col-sm-12 order-lg-2 offset-top-41 offset-lg-top-20"><a class="btn btn-primary" href="{{route("enquiry")}}">contact an agent</a>
                      <div class="offset-top-10"><a class="btn btn-info" href="{{route("enquiry")}}">request a visit</a></div>
                    </div>
                    <div class="col-sm-12 offset-top-66 order-lg-3">
                      <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-styles="[{&quot;featureType&quot;: &quot;administrative&quot;,&quot;elementType&quot;: &quot;labels.text.fill&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#444444&quot;}]}, {&quot;featureType&quot;: &quot;administrative.locality&quot;,&quot;elementType&quot;: &quot;labels&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;on&quot;}]}, {&quot;featureType&quot;: &quot;landscape&quot;,&quot;elementType&quot;: &quot;all&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#f2f2f2&quot;}, {&quot;visibility&quot;: &quot;simplified&quot;}]}, {&quot;featureType&quot;: &quot;poi&quot;,&quot;elementType&quot;: &quot;all&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;on&quot;}]}, {&quot;featureType&quot;: &quot;poi&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;simplified&quot;}, {&quot;saturation&quot;: &quot;-65&quot;}, {&quot;lightness&quot;: &quot;45&quot;}, {&quot;gamma&quot;: &quot;1.78&quot;}]}, {&quot;featureType&quot;: &quot;poi&quot;,&quot;elementType&quot;: &quot;labels&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]}, {&quot;featureType&quot;: &quot;poi&quot;,&quot;elementType&quot;: &quot;labels.icon&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]}, {&quot;featureType&quot;: &quot;road&quot;,&quot;elementType&quot;: &quot;all&quot;,&quot;stylers&quot;: [{&quot;saturation&quot;: -100}, {&quot;lightness&quot;: 45}]}, {&quot;featureType&quot;: &quot;road&quot;,&quot;elementType&quot;: &quot;labels&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;on&quot;}]}, {&quot;featureType&quot;: &quot;road&quot;,&quot;elementType&quot;: &quot;labels.icon&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]}, {&quot;featureType&quot;: &quot;road.highway&quot;,&quot;elementType&quot;: &quot;all&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;simplified&quot;}]}, {&quot;featureType&quot;: &quot;road.highway&quot;,&quot;elementType&quot;: &quot;labels.icon&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]}, {&quot;featureType&quot;: &quot;road.arterial&quot;,&quot;elementType&quot;: &quot;labels.icon&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]}, {&quot;featureType&quot;: &quot;transit.line&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;saturation&quot;: &quot;-33&quot;}, {&quot;lightness&quot;: &quot;22&quot;}, {&quot;gamma&quot;: &quot;2.08&quot;}]}, {&quot;featureType&quot;: &quot;transit.station.airport&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;gamma&quot;: &quot;2.08&quot;}, {&quot;hue&quot;: &quot;#ffa200&quot;}]}, {&quot;featureType&quot;: &quot;transit.station.airport&quot;,&quot;elementType&quot;: &quot;labels&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]}, {&quot;featureType&quot;: &quot;transit.station.rail&quot;,&quot;elementType&quot;: &quot;labels.text&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]}, {&quot;featureType&quot;: &quot;transit.station.rail&quot;,&quot;elementType&quot;: &quot;labels.icon&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;simplified&quot;}, {&quot;saturation&quot;: &quot;-55&quot;}, {&quot;lightness&quot;: &quot;-2&quot;}, {&quot;gamma&quot;: &quot;1.88&quot;}, {&quot;hue&quot;: &quot;#ffab00&quot;}]}, {&quot;featureType&quot;: &quot;water&quot;,&quot;elementType&quot;: &quot;all&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#bbd9e5&quot;}, {&quot;visibility&quot;: &quot;simplified&quot;}]}]">
                        <div class="google-map"></div>
                        <ul class="google-map-markers">
                          <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--Section Similar Properties-->
        <section class="section-bottom-98 section-md-bottom-110">
          <div class="container">
            <h2 class="font-weight-bold">Similar Properties</h2>
            <hr class="divider bg-saffron">
            <div class="offset-md-top-66">
              <div class="row justify-content-sm-center">
                <div class="col-md-4"><img class="img-fluid d-inline-block" src="./images/home-img-11-370x250.jpg" width="370" height="250" alt="">
                  <div class="text-md-left offset-top-24">
                    <div>
                      <h5 class="font-weight-bold text-primary"><a href="#">Scandia Vista Apartments</a></h5>
                    </div>
                    <h6 class="offset-top-10"> $1199.00/mon</h6>
                    <ul class="list-inline list-inline-dotted text-dark">
                      <li class="list-inline-item">1200 sq ft</li>
                      <li class="list-inline-item">4 bedrooms</li>
                      <li class="list-inline-item">2 bathrooms</li>
                    </ul>
                    <div>
                      <p>Experience the ultimate comfort in one of our most renowned apartments with well thought-out planning, perfect furniture and cozy atmosphere.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 offset-top-66 offset-md-top-0"><img class="img-fluid d-inline-block" src="./images/home-img-08-370x250.jpg" width="370" height="250" alt="">
                  <div class="text-md-left offset-top-24">
                    <div>
                      <h5 class="font-weight-bold text-primary"><a href="#">Alchemy by Alta</a></h5>
                    </div>
                    <h6 class="offset-top-10"> $1199.00/mon</h6>
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
                <div class="col-md-4 offset-top-66 offset-md-top-0"><img class="img-fluid d-inline-block" src="./images/home-img-09-370x250.jpg" width="370" height="250" alt="">
                  <div class="text-md-left offset-top-24">
                    <div>
                      <h5 class="font-weight-bold text-primary"><a href="#">Avalon at Mission Bay</a></h5>
                    </div>
                    <h6 class="offset-top-10"> $1595.00/mon</h6>
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
              </div>
            </div>
          </div>
        </section>
      </main>


@endsection
