   
<!DOCTYPE html>
<html class="wow-animation" lang="en">
  <head>
    <title>PrimeRoom</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,700%7CLato:400,700'">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- custom JS -->
    <script src="./js/main.js"></script>
    <style>
      form input{
        display:inline-block;
        width:50px;
        height:50px;
        text-align:center;
      }
    </style>
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <!-- IE panel-->
    <div class="ie-panel"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="./images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Head-->
      <!-- Page Contents-->
      <main class="page-content">
          <!--Section Sign In-->
          <section class="section-98 section-md-110 section-bottom-66">
            <div class="container">
              <h2 class="font-weight-bold">OTP Verification</h2>
              <hr class="divider bg-saffron">
              <div class="offset-md-top-66">
                <!-- Responsive-tabs-->
                
                
                @if($e_msg)
               
                    <span style="text-align: center; color: red ">otp not verified</span>

                @endif
                <div class="tab-content mytab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="home-tab">
                      <div class="row justify-content-sm-center section-34">
                        <div class="col-sm-8 col-md-6 col-lg-4">
                          <form method="post" class="mt-5" action="{{route('checkotp')}}">
                            @csrf
                            <label>Enter OTP:</label><br>
                            <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(1)' maxlength=1 name="otp_1">
                            <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(2)' maxlength=1 name="otp_2">
                            <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(3)' maxlength=1 name="otp_3">
                            <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(4)' maxlength=1 name="otp_4">
                            <div class="offset-top-24">
                              <button class="btn btn-primary btn-block" name="submit">Verify</button>
                            </div>
                            <div>
                              <button id="get_otp">Resend OTP</button>
                            </div>
                          </form>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
      </main>
    </div>
      <!-- Java script-->
      <script src="./js/core.min.js"></script>
      <script src="./js/script.js"></script>
      <script>
        let digitValidate = function(ele){
          ele.value = ele.value.replace(/[^0-9]/g,'');
        }

        let tabChange = function(val){
            let ele = document.querySelectorAll('input');
            if(ele[val-1].value != ''){
              if(typeof ele[val] != 'undefined') {
                ele[val].focus();
              }
            }else if(ele[val-1].value == ''){
              if(typeof ele[val-2] != 'undefined') {
                ele[val-2].focus();
              }
            }      
        }
      </script>
      <script src="js/otp.js"></script>
  </html>