@extends('common.master')
@section('content')
<div class="page-head">
    <section class="context-dark">
      <div class="parallax-container" data-parallax-img="images/bg-header-1920x362.jpg"><div class="material-parallax parallax"><img src="{{asset("images/bg-header-1920x362.jpg")}}" alt="" style="transform: translate3d(-50%, 41px, 0px); display: block;"></div>
    
        <div class="parallax-content">
          <div class="container section-top-34 section-md-top-98 section-bottom-34">
            <div>
              @if ($data == 0)
                <h1 class="font-weight-bold tagchange">Login</h1>
              @endif
              @if ($data == 2)
                <h1 class="font-weight-bold tagchange">Register</h1>
              @endif
            </div>
            <ul class="list-inline list-inline-dashed p text-light breadcrumb-modern offset-top-10 offset-md-top-66">
              <li class="list-inline-item active"><a href="">Home</a></li>
              @if ($data == 0)
                <li class="list-inline-item tagchange"> Login</li>
              @endif
              @if ($data == 2)
                <li class="list-inline-item tagchange"> Register</li>
              @endif
            </ul>
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
        @if ($data == 0)
          <h2 class="font-weight-bold tagchange" id="l">Login</h2>
        @endif
        @if ($data == 2)
          <h2 class="font-weight-bold tagchange" id="r">Register</h2>
        @endif

      
        <hr class="divider bg-saffron">
        <div class="offset-md-top-66">
          <!-- Responsive-tabs-->

          <ul class="nav nav-mytabs" id="myTab" role="tablist">
            
            @if ($data == 0)
                <li  class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#login" role="tab" aria-controls="home" aria-selected="true" >Login</a>
                </li>
               
                <li class="nav-item">
                  <a class="nav-link" id="history-tab" data-toggle="tab" href="#register" role="tab" aria-controls="history" aria-selected="false" onclick="rrr()">Register</a>
              </li>
              @endif
              @if ($data == 2)
              <li  class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#login" role="tab" aria-controls="home" aria-selected="false">Login</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" id="history-tab" data-toggle="tab" href="#register" role="tab" aria-controls="history" aria-selected="true">Register</a>
              </li>
              @endif
          </ul>
          <div class="tab-content mytab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="home-tab">
                <div class="row justify-content-sm-center section-34">
                  <div class="col-sm-8 col-md-6 col-lg-4">
                  
                    <form class=" text-left" method="POST" action="{{route('Login')}}">
                      @csrf
                      <div class="form-group">
                        <label>E-mail:</label>
                        <input class="form-control bg-white" id="email" type="text" name="email" onkeyup="up(this)">
                        {{-- <span id="emailspan" style="color: red;">Please enter a valid email</span> --}}
                      </div>
                      <div class="form-group offset-top-24">
                        <label>Password:</label>
                        <input class="form-control bg-white" id="password" type="password" name="password" onkeyup="up(this)">
                      </div>
                      @if((session()->has('error')))
                        <span style="text-align: center; color: red ">{{session()->get('error')}}</span>
                      @endif
                      <span id="validation" style="color: red;"></span>
                      <div class="offset-top-24">
                        <button class="btn btn-primary btn-block " type="submit" id = "signin" name="submit">sign in</button>
                      </div>
                    </form> 

                  </div>
                </div>
            </div>
            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="profile-tab">
              <div class="row justify-content-sm-center section-34" id="register">
                  <div class="col-sm-8 col-md-6 col-lg-4">
                    <form class="text-left" id="RegisterForm" method="POST" action="{{route('registerPage')}}">
                      @csrf     
                      <div class="form-group">
                        <label>Name:</label>
                        <input class="form-control bg-white" id="name" type="text" name="name" >
                      </div>
                      <div class="form-group offset-top-24">
                        <label>Email:</label>
                        <input class="form-control bg-white" id="signupemail"  type="email" name="email" >
                      </div>
                      <div class="form-group offset-top-24">
                        <label>Register As:</label>
                        <select class="form-control bg-white" id="role" name="role" >
                          <option value="owner">Agent</option>
                          <option value="buyer">User</option>
                        </select>
                      </div>
                      <div class="form-group offset-top-24">
                        <label>Password:</label>
                        <input class="form-control bg-white" id="signuppassword" type="password" name="pass" >
                      </div>
                      <div class="form-group offset-top-24">
                        <label>Confirm Password:</label>
                        <input class="form-control bg-white" id="confirmpassword"  type="password" name="confirmpass" >
                      </div>
                      <div class="offset-top-24">
                        <button class="btn btn-primary btn-block" type="submit" id="signup" name="submit">sign up</button>
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
  <!-- Page Footer-->
</div>

<script>
  var email = document.getElementById("email");
  var pass = document.getElementById("password");
  if (email && pass ) {
    document.getElementById("signin").disabled = true;
  }
  function up(e) {
    var emailchk = (e.name === "email") ? (e.value): null
    var passchk = (e.name === "password") ? (e.value): null
    if (emailchk) {
      var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; 
      var check = (emailchk).match(pattern)
      if (emailchk == null) {
      document.getElementById("validation").innerHTML = "Please Enter a valid Mail Id";
    }
    }
    
    if ( passchk) {
      document.getElementById("signin").disabled = false;
    }
  }
</script>

@endsection