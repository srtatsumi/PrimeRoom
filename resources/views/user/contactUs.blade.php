@extends('common.master')
@section('content')
<section class="context-dark">
    <div class="parallax-container" data-parallax-img="images/bg-header-1920x362.jpg">
      <div class="parallax-content">
        <div class="container section-top-34 section-md-top-98 section-bottom-34">
          <div>
            <h1 class="font-weight-bold">Contacts</h1>
          </div>
          <ul class="list-inline list-inline-dashed p text-light breadcrumb-modern offset-top-10 offset-md-top-66">
            <li class="list-inline-item active"><a href="../index.php">Home</a></li>
            <li class="list-inline-item"> Contacts</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</header>
<!-- Page Contents-->
<main class="page-content">
  <!--Section Contact Info-->
  <section class="bg-lighter section-66">
    <div class="container-wide">
      <div class="row justify-content-sm-center text-md-left">
        <div class="col-sm-10 col-md-8 col-lg-12">
          <div class="row justify-content-sm-center">
            <div class="col-sm-6 col-lg-3 col-xxl-2">
              <div class="unit unit-spacing-xs unit-sm flex-md-row">
                <div class="unit-left"><span class="icon icon-xs mdi mdi-phone text-primary" style="font-size: 26px"></span></div>
                <div class="unit-body">
                  <h6>Phones</h6>
                  <div class="p"><a class="d-block" href="tel:1-800-1234-567">1-800-1234-567</a><a class="d-block" href="tel:1-800-6547-987">1-800-6547-987</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xxl-2 offset-top-50 offset-sm-top-0">
              <div class="unit unit-spacing-xs unit-sm flex-md-row">
                <div class="unit-left"><span class="icon icon-xs mdi mdi-email-open text-primary" style="font-size: 26px"></span></div>
                <div class="unit-body">
                  <h6>E-mail</h6>
                  <div class="p"><a class="d-block" href="mailto:info@demolink.org">info@demolink.org</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xxl-2 offset-top-50 offset-lg-top-0">
              <div class="unit unit-spacing-xs unit-sm flex-md-row">
                <div class="unit-left"><span class="icon icon-xs mdi mdi-map text-primary" style="font-size: 26px"></span></div>
                <div class="unit-body">
                  <h6>Address</h6>
                  <address class="contact-info">213, New Lenox, Chicago, IL 60606</address>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xxl-2 offset-top-50 offset-lg-top-0">
              <div class="unit unit-spacing-xs unit-sm flex-md-row">
                <div class="unit-left"><span class="icon icon-xs mdi mdi-timelapse text-primary" style="font-size: 26px"></span></div>
                <div class="unit-body">
                  <h6>Open Hours</h6>
                  <div>
                    <p>8:00 – 19:00 Mon – Fri</p>
                  </div>
                  <p class="offset-top-0">9:00 – 17:00 Sat</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Section Get In Touch-->
  <section class="section-98 section-md-110">
    <div class="container">
      <h2 class="font-weight-bold">Get In Touch</h2>
      <hr class="divider bg-saffron">
      <div class="offset-md-top-66">
        <div class="row justify-content-sm-center">
          <div class="col-sm-10 col-lg-8">
            <!-- RD Mailform-->
            <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="../wt_58887_v2/bat/rd-mailform.php">
              <div class="row justify-content-sm-center grid-group-sm">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="mailform-first-name">First name</label>
                    <input class="form-control bg-white" id="mailform-first-name" type="text" name="first name" data-constraints="@Required">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="mailform-last-name">Last Name</label>
                    <input class="form-control bg-white" id="mailform-last-name" type="text" name="last name" data-constraints="@Required">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="mailform-phone">Phone</label>
                    <input class="form-control bg-white" id="mailform-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="mailform-email">E-mail</label>
                    <input class="form-control bg-white" id="mailform-email" type="text" name="email" data-constraints="@Email @Required">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="form-label" for="mailform-message">Message</label>
                    <textarea class="form-control bg-white" id="mailform-message" name="message" data-constraints="@Required"></textarea>
                  </div>
                </div>
              </div>
              <div class="offset-top-24 text-center">
                <button class="btn btn-primary" type="submit">send message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="google-map-container mod-1" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-styles="[{&quot;featureType&quot;: &quot;administrative&quot;,&quot;elementType&quot;: &quot;labels.text.fill&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#444444&quot;}]}, {&quot;featureType&quot;: &quot;administrative.locality&quot;,&quot;elementType&quot;: &quot;labels&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;on&quot;}]}, {&quot;featureType&quot;: &quot;landscape&quot;,&quot;elementType&quot;: &quot;all&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#f2f2f2&quot;}, {&quot;visibility&quot;: &quot;simplified&quot;}]}, {&quot;featureType&quot;: &quot;poi&quot;,&quot;elementType&quot;: &quot;all&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;on&quot;}]}, {&quot;featureType&quot;: &quot;poi&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;simplified&quot;}, {&quot;saturation&quot;: &quot;-65&quot;}, {&quot;lightness&quot;: &quot;45&quot;}, {&quot;gamma&quot;: &quot;1.78&quot;}]}, {&quot;featureType&quot;: &quot;poi&quot;,&quot;elementType&quot;: &quot;labels&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]}, {&quot;featureType&quot;: &quot;poi&quot;,&quot;elementType&quot;: &quot;labels.icon&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]}, {&quot;featureType&quot;: &quot;road&quot;,&quot;elementType&quot;: &quot;all&quot;,&quot;stylers&quot;: [{&quot;saturation&quot;: -100}, {&quot;lightness&quot;: 45}]}, {&quot;featureType&quot;: &quot;road&quot;,&quot;elementType&quot;: &quot;labels&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;on&quot;}]}, {&quot;featureType&quot;: &quot;road&quot;,&quot;elementType&quot;: &quot;labels.icon&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]}, {&quot;featureType&quot;: &quot;road.highway&quot;,&quot;elementType&quot;: &quot;all&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;simplified&quot;}]}, {&quot;featureType&quot;: &quot;road.highway&quot;,&quot;elementType&quot;: &quot;labels.icon&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]}, {&quot;featureType&quot;: &quot;road.arterial&quot;,&quot;elementType&quot;: &quot;labels.icon&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]}, {&quot;featureType&quot;: &quot;transit.line&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;saturation&quot;: &quot;-33&quot;}, {&quot;lightness&quot;: &quot;22&quot;}, {&quot;gamma&quot;: &quot;2.08&quot;}]}, {&quot;featureType&quot;: &quot;transit.station.airport&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;gamma&quot;: &quot;2.08&quot;}, {&quot;hue&quot;: &quot;#ffa200&quot;}]}, {&quot;featureType&quot;: &quot;transit.station.airport&quot;,&quot;elementType&quot;: &quot;labels&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]}, {&quot;featureType&quot;: &quot;transit.station.rail&quot;,&quot;elementType&quot;: &quot;labels.text&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]}, {&quot;featureType&quot;: &quot;transit.station.rail&quot;,&quot;elementType&quot;: &quot;labels.icon&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;simplified&quot;}, {&quot;saturation&quot;: &quot;-55&quot;}, {&quot;lightness&quot;: &quot;-2&quot;}, {&quot;gamma&quot;: &quot;1.88&quot;}, {&quot;hue&quot;: &quot;#ffab00&quot;}]}, {&quot;featureType&quot;: &quot;water&quot;,&quot;elementType&quot;: &quot;all&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#bbd9e5&quot;}, {&quot;visibility&quot;: &quot;simplified&quot;}]}]">
      <div class="google-map"></div>
      <ul class="google-map-markers">
        <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
      </ul>
    </div>
  </section>
</main>
<!-- Page Footer-->
@endsection