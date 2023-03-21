<!DOCTYPE html>
<html class="wow-animation" lang="en">
  <head>
    <title>PrimeRoom</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <link rel="icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,700%7CLato:400,700'">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- custom JS -->
    <script src="{{asset('js/main.js')}}"></script>
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>

  <body>
    <!-- IE panel-->
    <div class="ie-panel"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="./images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Head-->
      
        <header class="page-head">
          <!-- RD Navbar Transparent-->
          <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-top-panel rd-navbar-light" data-lg-stick-up-offset="79px" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
              <div class="container">

                <div class="rd-navbar-inner"> 
                  <div class="rd-navbar-top-panel">
                    <div class="left-side">
                      @if (session()->has('user'))
                        <ul class="rd-navbar-top-links list-unstyled">
                          <!-- <li class="right-section"><a class="text-uppercase text-ubold" href="./login.php"><small>Log in</small></a></li>
                          <li class="right-section"><a class="text-uppercase text-ubold" href="./login.php"><small>Register</small></a></li> -->
                            <li class="right-section">
                              Welcome, {{ucfirst( session()->get('user')->name) }}
                            </li>
                        </ul>
                      @endif

                      @if (!session()->has('user'))
                        <ul class="rd-navbar-top-links list-unstyled">
                          <li class="right-section"><a class="text-uppercase text-ubold" href="{{route('loginPage')}}"><small>Log in</small></a></li>
                          <li class="right-section"><a class="text-uppercase text-ubold" href="{{route('register')}}"><small>Register</small></a></li>
                        </ul>
                      @endif


                    </div>
                    @if (session()->has('user'))
                      <div class="right-side">
                        <ul class="rd-navbar-top-links list-unstyled">
                          <li class="right-section"><a class="text-uppercase text-ubold" href="{{route('addAdminDashboard')}}"><small>Dashboard</small></a></li>

                          <li class="right-section"><a class="text-uppercase text-ubold" href="{{route('Logout')}}"><small>Log out</small></a></li>
                        </ul>
                      </div>
                    @endif

                  </div>
                  <!-- RD Navbar Panel-->
                  <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle-->
                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                    <!-- RD Navbar Top Panel Toggle-->
                    <button class="rd-navbar-top-panel-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-top-panel"><span></span></button>
                    <!--Navbar Brand-->
                    <div class="rd-navbar-brand" ><a href="index.php"><img class="logo" src='/images/logo.png' alt=''/></a>
                   
                      <div class="LiveUpdates">
                        <div class="button">Shop Now</div>
                        <div class="update" style="display:flex; justify-content: space-between; margin-top:15px;">
                          <p>Live Update  (
                          <div class="counter" data-target="43567" style="margin:0px 3px;"> 0 </div>
                          ) ads online</p>

                        </div>
                      </div>
                 
                    </div>
                  </div>
                  <!-- <div class="LiveUpdates">
                        <div class="button">Shop Now</div>
                        <div class="update"><p>Live Update <span id="number">(43,567)</span>ads online</p></div>
                      </div> -->
                  
                  <div class="rd-navbar-menu-wrap mt-3">
                    <div class="rd-navbar-nav-wrap">
                      <div class="rd-navbar-mobile-scroll">
                        <!--Navbar Brand Mobile-->
                        <div class="rd-navbar-mobile-brand"><a href="index.php"><img src="./images/logo.png" alt=''/></a></div>

                        
                        <!-- RD Navbar Nav-->

                        <ul class="rd-navbar-nav">
                          <li><a href="/"><span>Home</span></a>
                          </li>
                          <li><a href="{{route('catalog')}}"><span>Browse</span></a>
                          </li>
                          <li><a href="{{route('about')}}"><span>About</span></a>
                          </li>
                          <li><a href="{{route('contactus')}}"><span>Contact Us</span></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </header>
        