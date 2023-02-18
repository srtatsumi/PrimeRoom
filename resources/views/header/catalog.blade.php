@extends('common.master')

@section('content')
<section class="context-dark">
    <div class="parallax-container" data-parallax-img="images/bg-header-1920x362.jpg">
      <div class="parallax-content">
        <div class="container section-top-34 section-md-top-98 section-bottom-34">
          <div>
            <h1 class="font-weight-bold text-center">Property Catalog</h1>
          </div>
          <ul class="list-inline list-inline-dashed p text-light breadcrumb-modern offset-top-10 offset-md-top-66">
            <li class="list-inline-item active"><a href="../index.php">Home</a></li>
            <li class="list-inline-item"> Catalog</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</header>
<!-- Page Contents-->
<main class="page-content">
  <!--Section Property Filter-->
  <div class="filterItem">
    <section class="section-50 bg-lighter">
      <div class="container">
        <!-- RD Mailform-->
        <form  method="post" action="{{route('searchFilter')}}">
          @csrf
          <h5 class="font-weight-bold">Property Filter</h5>
          <div class="row justify-content-sm-center offset-top-0">
            <div class="col-md col-lg">
              <div class="form-group">
                <label class="form-label form-label-outside" for="form-filter-location">Premium type:</label>
                <select class="form-control" id="form-filter-location" name="advertisementPlan" data-minimum-results-for-search="Infinity">
                  <option value="">Choose premium type</option>
                  <option value="silver">silver</option>
                  <option value="gold">gold</option>
                  <option value="platinum">platinum</option>
                </select>
              </div>
              <div class="form-group">
                <label class="form-label form-label-outside" for="form-filter-location">Location:</label>
                <select class="form-control" id="form-filter-location" name="location" data-minimum-results-for-search="Infinity">
                  <option value="1">any</option>
                  <option value="2">San Francisco</option>
                  <option value="3">New York</option>
                  <option value="4">Las Vegas</option>
                </select>
              </div>
            </div>
            <div class="col-md col-lg offset-top offset-md-top-0">
              <div class="form-group">
                <label class="form-label form-label-outside" for="form-filter-property-status">Property Status:</label>
                <select class="form-control" id="form-filter-property-status" name="property-status" data-minimum-results-for-search="Infinity">
                  <option value="1">any</option>
                  <option value="2">Sale</option>
                  <option value="3">Rent</option>
                  <option value="4">Commercial</option>
                </select>
              </div>
            </div>
            <div class="col-md col-lg offset-top offset-lg-top-0">
              <div class="form-group">
                <label class="form-label form-label-outside" for="form-filter-property-type">Property Type:</label>
                <select class="form-control" id="form-filter-property-type" name="property-type" data-minimum-results-for-search="Infinity">
                  <option value="1">any</option>
                  <option value="2">Apartment</option>
                  <option value="3">Office</option>
                  <option value="4">Hotel</option>
                </select>
              </div>
            </div>
            <div class="row-spacer offset-top-20 d-none d-lg-flex"></div>
            <div class="col-md col-lg offset-top offset-lg-top-0">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label form-label-outside" for="form-filter-min-beds">Min Beds:</label>
                    <select class="form-control" id="form-filter-min-beds" name="min-beds" data-minimum-results-for-search="Infinity">
                      <option value="1">any</option>
                      <option value="2">1</option>
                      <option value="3">2</option>
                      <option value="4">3</option>
                      <option value="5">4</option>
                    </select>
                  </div>
                </div>
                <div class="col-md offset-top offset-md-top-0">
                  <div class="form-group">
                    <label class="form-label form-label-outside" for="form-filter-min-bath">Min Baths:</label>
                    <select class="form-control" id="form-filter-min-bath" name="min-bath" data-minimum-results-for-search="Infinity">
                      <option value="1">any</option>
                      <option value="2">1</option>
                      <option value="3">2</option>
                      <option value="4">3</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md col-lg offset-top offset-lg-top-20">
              <div class="form-group-multiple">
                <div class="form-group">
                  <label class="form-label form-label-outside" for="form-filter-price-from"><span class="d-none d-md-block">Price (USD):</span><span class="d-md-none">Price from (USD):</span></label>
                  <input class="form-control bg-white" id="form-filter-price-from" type="text" name="price-from">
                </div>
                <div class="form-group">
                  <label class="form-label form-label-outside" for="form-filter-price-to"> &nbsp;<span class="d-md-none">Price to (USD):</span></label>
                  <input class="form-control bg-white" id="form-filter-price-to" type="text" name="price-to">
                </div>
              </div>
            </div>
            <div class="col-md col-lg offset-top offset-lg-top-20">
              <div class="form-group-multiple">
                <div class="form-group">
                  <label class="form-label form-label-outside" for="form-filter-area-from"><span class="d-none d-md-block">Area (Sq Ft):</span><span class="d-md-none">Area from (Sq Ft):</span></label>
                  <input class="form-control bg-white" id="form-filter-area-from" type="text" name="area-from">
                </div>
                <div class="form-group">
                  <label class="form-label form-label-outside" for="form-filter-area-to"> &nbsp;<span class="d-md-none">Area to (Sq Ft):</span></label>
                  <input class="form-control bg-white" id="form-filter-area-to" type="text" name="area-to">
                </div>
              </div>
            </div>
            <div class="col-lg offset-top offset-lg-top-20">
              <div class="row align-items-sm-end">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label form-label-outside" for="form-filter-sorting">Sorting</label>
                    <select class="form-control" id="form-filter-sorting" name="sorting" data-minimum-results-for-search="Infinity">
                      <option value="1">By Price</option>
                      <option value="2">By Date</option>
                    </select>
                  </div>
                </div>
                <div class="col-md offset-top offset-md-top-0">
                  <button class="btn btn-primary btn-block" type="submit">search</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
    <!--Section Properties-->
    <section class="section-66 section-md-bottom-110">
      <div class="container">
        <div class="row justify-content-sm-center">
          <div class="col-lg-8">
            <div class="row">
             @if (count($details) == 0)
                 <p>No data Found</p>
             @endif
              @foreach ($details as $item)
                <div class="col-md-6"><img class="img-fluid d-inline-block" src="./images/home-img-05-370x250.jpg" width="370" height="250" alt="">
                  <div class="text-md-left offset-top-24">
                  <div>
                    <h5 class="font-weight-bold text-primary"><a href="./single-property-page.php">{{$item->propertyTitle}}</a></h5>
                  </div>
                  <h6 class="offset-top-10"> San Francisco</h6>
                  <ul class="list-inline list-inline-dotted text-dark">
                    <li class="list-inline-item">1200 sq ft</li>
                    <li class="list-inline-item">4 bedrooms</li>
                    <li class="list-inline-item">2 bathrooms</li>
                  </ul>
                  <div>
                    <!-- <p>AVA Nob Hill includes studios and 1 and 2 bedroom apartments that feature an urban-inspired design that extends beyond your walls and throughout the entire community.</p> -->
                  </div>
                </div>
              @endforeach
             
            </div>
              
              <div class="offset-top-66 text-center">
            <!-- Classic Pagination-->
              <nav>
                <ul class="pagination-classic">
                  {{-- <li><a href="#">Prev</a></li> --}}
                  {{ $details->links()}}
                  {{-- <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li> --}}
                  {{-- <li><a href="#">Next</a></li> --}}
                </ul>
              </nav>
            </div>
        <!--<div class="col-lg-4 offset-top-66 offset-lg-top-0">
              <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-styles="[{&quot;featureType&quot;: &quot;administrative&quot;,&quot;elementType&quot;: &quot;labels.text.fill&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#444444&quot;}]}, {&quot;featureType&quot;: &quot;administrative.locality&quot;,&quot;elementType&quot;: &quot;labels&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;on&quot;}]}, {&quot;featureType&quot;: &quot;landscape&quot;,&quot;elementType&quot;: &quot;all&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#f2f2f2&quot;}, {&quot;visibility&quot;: &quot;simplified&quot;}]}, {&quot;featureType&quot;: &quot;poi&quot;,&quot;elementType&quot;: &quot;all&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;on&quot;}]}, {&quot;featureType&quot;: &quot;poi&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;simplified&quot;}, {&quot;saturation&quot;: &quot;-65&quot;}, {&quot;lightness&quot;: &quot;45&quot;}, {&quot;gamma&quot;: &quot;1.78&quot;}]}, {&quot;featureType&quot;: &quot;poi&quot;,&quot;elementType&quot;: &quot;labels&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]}, {&quot;featureType&quot;: &quot;poi&quot;,&quot;elementType&quot;: &quot;labels.icon&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]}, {&quot;featureType&quot;: &quot;road&quot;,&quot;elementType&quot;: &quot;all&quot;,&quot;stylers&quot;: [{&quot;saturation&quot;: -100}, {&quot;lightness&quot;: 45}]}, {&quot;featureType&quot;: &quot;road&quot;,&quot;elementType&quot;: &quot;labels&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;on&quot;}]}, {&quot;featureType&quot;: &quot;road&quot;,&quot;elementType&quot;: &quot;labels.icon&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]}, {&quot;featureType&quot;: &quot;road.highway&quot;,&quot;elementType&quot;: &quot;all&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;simplified&quot;}]}, {&quot;featureType&quot;: &quot;road.highway&quot;,&quot;elementType&quot;: &quot;labels.icon&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]}, {&quot;featureType&quot;: &quot;road.arterial&quot;,&quot;elementType&quot;: &quot;labels.icon&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]}, {&quot;featureType&quot;: &quot;transit.line&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;saturation&quot;: &quot;-33&quot;}, {&quot;lightness&quot;: &quot;22&quot;}, {&quot;gamma&quot;: &quot;2.08&quot;}]}, {&quot;featureType&quot;: &quot;transit.station.airport&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;gamma&quot;: &quot;2.08&quot;}, {&quot;hue&quot;: &quot;#ffa200&quot;}]}, {&quot;featureType&quot;: &quot;transit.station.airport&quot;,&quot;elementType&quot;: &quot;labels&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]}, {&quot;featureType&quot;: &quot;transit.station.rail&quot;,&quot;elementType&quot;: &quot;labels.text&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]}, {&quot;featureType&quot;: &quot;transit.station.rail&quot;,&quot;elementType&quot;: &quot;labels.icon&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;simplified&quot;}, {&quot;saturation&quot;: &quot;-55&quot;}, {&quot;lightness&quot;: &quot;-2&quot;}, {&quot;gamma&quot;: &quot;1.88&quot;}, {&quot;hue&quot;: &quot;#ffab00&quot;}]}, {&quot;featureType&quot;: &quot;water&quot;,&quot;elementType&quot;: &quot;all&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#bbd9e5&quot;}, {&quot;visibility&quot;: &quot;simplified&quot;}]}]">
                <div class="google-map"></div>
                <ul class="google-map-markers">
                  <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
                </ul>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>
  </div>
</main>
@endsection