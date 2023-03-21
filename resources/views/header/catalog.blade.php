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
        <form method="post" action="{{route('searchFilter')}}">
          @csrf
          <h5 class="font-weight-bold">Property Filter</h5>
          <div class="row justify-content-sm-center offset-top-0">
            <div class="col-md col-lg">
              <div class="form-group">
                <label class="form-label form-label-outside" for="form-filter-location">Premium type:</label>
                <select class="form-control" id="form-filter-location" name="advertisementPlan" data-minimum-results-for-search="Infinity">
                  <option value="">Choose premium type</option>
                  <option value="1">silver</option>
                  <option value="2">gold</option>
                  <option value="3">platinum</option>
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
              <div class="col-md-6">
                <img class="img-fluid d-inline-block" src="{{$item->propertyImage}}" width="370" height="250" alt="">
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


              <div class="offset-top-66 text-center">
                <!-- Classic Pagination-->
                <nav>
                  <ul class="pagination-classic">
                    {{-- {{ $details->links()}} --}}
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>
</main>
@endsection