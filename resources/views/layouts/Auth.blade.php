@extends('common.master')
@section('content')

<div class="page-head">
    <section class="context-dark">
      <div class="parallax-container" data-parallax-img="images/bg-header-1920x362.jpg"><div class="material-parallax parallax"><img src="images/bg-header-1920x362.jpg" alt="" style="transform: translate3d(-50%, 41px, 0px); display: block;"></div>
        <div class="parallax-content">
          <div class="container section-top-34 section-md-top-98 section-bottom-34">
            <div>
              <h1 class="font-weight-bold">Login / Register</h1>
            </div>
            <ul class="list-inline list-inline-dashed p text-light breadcrumb-modern offset-top-10 offset-md-top-66">
              <li class="list-inline-item active"><a href="../index.php">Home</a></li>
              <li class="list-inline-item"> Login - Register</li>
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
        <h2 class="font-weight-bold">Sign In - Sign Up</h2>
        @if((session()->has('error')))
        <div class="swal" id="swalId"></div>
        @endif
        <hr class="divider bg-saffron">
        <div class="offset-md-top-66">
          <!-- Responsive-tabs-->

          <ul class="nav nav-mytabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#login" role="tab" aria-controls="home" aria-selected="true">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="history-tab" data-toggle="tab" href="#register" role="tab" aria-controls="history" aria-selected="false">Register</a>
            </li>
          </ul>
          <div class="tab-content mytab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="home-tab">
                <div class="row justify-content-sm-center section-34">
                  <div class="col-sm-8 col-md-6 col-lg-4">
                    
                    <form class=" text-left">
                      @csrf
                      <div class="form-group">
                        <label>E-mail:</label>
                        <input class="form-control bg-white" id="email" type="text" name="email">
                        <span id="emailspan" style="color: red;">Please enter a valid email</span>
                      </div>
                      <div class="form-group offset-top-24">
                        <label>Password:</label>
                        <input class="form-control bg-white" id="password" type="password" name="password">
                      </div>
                      <div class="offset-top-24">
                        <button class="btn btn-primary btn-block " type="button" id = "signin" name="submit">sign in</button>
                      </div>
                    </form> 
                  </div>
                </div>
            </div>
            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="profile-tab">
              <div class="row justify-content-sm-center section-34" id="register">
                  <div class="col-sm-8 col-md-6 col-lg-4">
                    <form class="text-left" method="post" action="{{route('registerPage')}}">
                      @csrf     
                      <div class="form-group">
                        <label>Name:</label>
                        <input class="form-control bg-white"  type="text" name="name" required>
                      </div>
                      <div class="form-group offset-top-24">
                        <label>Email:</label>
                        <input class="form-control bg-white"  type="email" name="email" required>
                      </div>
                      <div class="form-group offset-top-24">
                        <label>Register As:</label>
                        <select class="form-control bg-white" name="role" required>
                          <option value="owner">Owner</option>
                          <option value="buyer">Buyer</option>
                        </select>
                      </div>
                      <div class="form-group offset-top-24">
                        <label>Password:</label>
                        <input class="form-control bg-white"  type="password" name="pass" required>
                      </div>
                      <div class="form-group offset-top-24">
                        <label>Confirm Password:</label>
                        <input class="form-control bg-white"  type="password" name="confirmpass" required>
                      </div>
                      <div class="offset-top-24">
                        <button class="btn btn-primary btn-block" type="submit" name="submit">sign up</button>
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
  $(document).ready(function () {
    $('#emailspan').hide();


    $('#signin').on('click', function () {
      // alert("djdj")
  
      var emalValue  = $('#email').val();
      var passwordValue  = $('#password').val();

      var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      console.log(regex.test(emalValue));
      if(regex.test(emalValue) == false){
        // emailspan
        $('#emailspan').show();
      }

      $.ajax({
        type: "post",
        url: "/login"+'?_token=' + '{{ csrf_token() }}',
        data: {email:emalValue, password:passwordValue},
        dataType: "json",
        success: function (response) {
          if (response) {
              window.location.href = "/";
            alert("logeged in")
          }else{
            Swal.fire({
        icon: 'warning',
        text: 'Incorrect Password or E-mail',
      })
          }
       
        }
      });
      
  
    // var checkClass = $( "#swalId" ).hasClass( "swal" )
    // if (checkClass) {
    //   Swal.fire({
    //     icon: 'warning',
    //     text: 'Incorrect Password or E-mail',
    //   })
    // }    
  });
});
</script>

@endsection