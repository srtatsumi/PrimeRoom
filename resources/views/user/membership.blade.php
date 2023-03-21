@extends('common.master')
@section('content')
<div class="page-head">
  <section class="context-dark">
    <div class="parallax-container" data-parallax-img="images/bg-header-1920x362.jpg"><div class="material-parallax parallax"><img src="images/bg-header-1920x362.jpg" alt="" style="transform: translate3d(-50%, 41px, 0px); display: block;"></div>
      <div class="parallax-content">
        <div class="container section-top-34 section-md-top-98 section-bottom-34">
          <div>
            <h1 class="font-weight-bold">Membership</h1>
          </div>
          <!-- <ul class="list-inline list-inline-dashed p text-light breadcrumb-modern offset-top-10 offset-md-top-66">
            <li class="list-inline-item active"><a href="../index.php">Home</a></li>
            <li class="list-inline-item"> Login - Register</li>
          </ul> -->
        </div>
      </div>
    </div>
  </section>
</div>
<!-- Page Contents-->
<main class="page-content">
  <!--Section Sign In-->
  <section class="section-98 section-md-110 section-bottom-66">
    <div class="container">
      <h2 class="font-weight-bold offset-md-top-50">Choose Membership</h2>
      <hr class="divider bg-saffron">
      <div class="offset-md-top-66">

      
        <form class=" d-flex justify-content-around" method="post" action="{{route('subscription')}}">
          @csrf
          {{-- <input type="hidden" name="userid" id="userid" value="{{$getOtpDetails->userid}}"> --}}
          <div class="membershipContainer " style="width: 350px; height: 450px;border-radius:8px; background-color: blue; padding:25px; box-shadow: 5px 7px 9px black;">
              <!-- <div class="d-flex justify-content-center"> -->
                  <h3 style="color: white; font-size: 25px; font-weight:600;text-decoration:underline;">Silver</h3>
                  <div class="benefits">
                    <ul style="color: white; text-align:left;">
                      <li>You can view all ads</li>
                      <li>You can contact Silver ads after 10 days</li>
                      <li>You can contact Gold ads after 5 days</li>
                      <li>You can contact Platinum ads immediately</li>
                    </ul>
                  </div> 
                  <div class="form-group">
                    <h4 style="color: white; font-size: 18px; font-weight:500; margin-top:25px;">Pricing : </h4>
                    <select class="form-control bg-white" name="pricingForSilver">
                      <option value="">Choose ...</option>
                      <option value="7" {{($data->subscriptionType == "silver" && $data->days == 7 ) ? "selected" : "" }} >7 days ($0)</option>
                      <option value="14" {{($data->subscriptionType == "silver" && $data->days == 14 ) ? "selected" : "" }}>14 days ($0)</option>
                      <option value="21" {{($data->subscriptionType == "silver" && $data->days == 21 ) ? "selected" : "" }}>21 days ($0)</option>
                    </select>
                  </div>                                      
              <!-- </div> -->
              <div class="offset-top-24">
                  <button class="btn btn-primary btn-block" type="submit" name="submit" value="silver">Select </button>
              </div>
          </div>
          <div class="membershipContainer md-50" style="width: 350px; height: 450px;border-radius:8px; background-color: yellow; padding:25px; box-shadow: 5px 7px 9px black;">
              <!-- <div class="d-flex justify-content-center"> -->
                  <h3 style="color: white; font-size: 25px; font-weight:600;text-decoration:underline;">Gold</h3>
                  <div class="benefits">
                    <ul style="color: white; text-align:left;">
                      <li>You can view all ads</li>
                      <li>You can contact Silver ads after 5 days</li>
                      <li>You can contact Gold ads immediately</li>
                      <li>You can contact Platinum ads immediately</li>
                    </ul>
                  </div>
                  <div class="form-group">
                    <h4 style="color: white; font-size: 18px; font-weight:500; margin-top:25px;">Pricing:</h4>
                    <select class="form-control bg-white" name="pricingForGold">
                      <option value="">Choose...</option>
                      <option value="7" {{($data->subscriptionType == "gold" && $data->days == 7 ) ? "selected" : "" }}>7 days ($4.99)</option>
                      <option value="14"{{($data->subscriptionType == "gold" && $data->days == 14 ) ? "selected" : "" }}>14 days ($7.49)</option>
                      <option value="21"{{($data->subscriptionType == "gold" && $data->days == 21 ) ? "selected" : "" }}>21 days ($9.99)</option>
                    </select>
                  </div>                 
              <!-- </div> -->
              <div class="offset-top-24">
                  <button class="btn btn-primary btn-block" type="submit" name="submit" value="gold">Select </button>
              </div>
          </div>
          <div class="membershipContainer" style="width: 350px; height: 450px;border-radius:8px; background-color: red; padding:25px;box-shadow: 5px 7px 9px black;">
              <!-- <div class="d-flex justify-content-center"> -->
                  <h3 style="color: white; font-size: 25px; font-weight:600; text-decoration:underline;">Platinum</h3>
                  <div class="benefits">
                    <ul style="color: white; text-align:left;">
                      <li>You can view all ads</li>
                      <li>You can contact Silver ads immediately</li>
                      <li>You can contcat Gold ads immediately</li>
                      <li>You can contact Platinum ads immediately</li>
                    </ul>
                  </div> 
                  <div class="form-group">
                    <h4 style="color: white; font-size: 18px; font-weight:500; margin-top:25px;">Pricing:</h4>
                    <select class="form-control bg-white" name="pricingForPlatinum">
                      <option value="">Choose ...</option>
                      <option value="7"{{($data->subscriptionType == "platinum" && $data->days == 7 ) ? "selected" : "" }}>7 days ($9.99)</option>
                      <option value="14"{{($data->subscriptionType == "platinum" && $data->days == 14 ) ? "selected" : "" }}>14 days ($14.99)</option>
                      <option value="21"{{($data->subscriptionType == "platinum" && $data->days == 21 ) ? "selected" : "" }}>21 days ($19.99)</option>
                    </select>
                  </div>             
              <!-- </div> -->
              <div class="offset-top-24">
                  <button class="btn btn-primary btn-block" type="submit" name="submit" value="platinum">Select </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</main>
@endsection