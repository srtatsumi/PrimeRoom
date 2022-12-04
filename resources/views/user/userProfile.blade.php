@extends('common.master')
@section('content')
<div class="page-head">
    <section class="context-dark">
      <div class="parallax-container" data-parallax-img="images/bg-header-1920x362.jpg"><div class="material-parallax parallax"><img src="images/bg-header-1920x362.jpg" alt="" style="transform: translate3d(-50%, 41px, 0px); display: block;"></div>
        <div class="parallax-content">
          <div class="container section-top-34 section-md-top-98 section-bottom-34">
            <div>
              <h1 class="font-weight-bold">My Profile / Edit Profile</h1>
            </div>
        
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- Page Contents-->
  <main class="page-content">
    <!--Section Sign In-->
    <section class="section-5 section-md-80 section-bottom-66">
      <div class="container">
        <!-- <h2 class="font-weight-bold">My Profile - Edit Profile</h2>
        <hr class="divider bg-saffron"> -->
        <div class="offset-md-top-66">
          <!-- Responsive-tabs-->

          <ul class="nav nav-mytabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#login" role="tab" aria-controls="home" aria-selected="true">My Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="history-tab" data-toggle="tab" href="#register" role="tab" aria-controls="history" aria-selected="false">Edit Profile</a>
            </li>
          </ul>
          <div class="tab-content mytab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="home-tab">
                <div class="row justify-content-sm-center section-34">
                  <div class="col-sm-8 col-md-6 col-lg-4">
                    <div class="profileContainer">
                        <div class="abbreContainer">
                            <h1>{{mb_substr($data->name, 0, 1);}}</h1>
                        </div>
                        <div class="name">
                            <h4>{{$data->name}}</h4>
                        </div>
                        <div class="profileValues" style="margin: 25px 50px; text-align:left;">
                            <div class="form-group d-flex ">
                                <label>Email : </label>
                                <p style="margin-top: 0px; margin-left:25px;">{{$data->email}}</p>
                            </div>
                            <div class="form-group d-flex ">
                                <label>Mobile : </label>
                                <p style="margin-top: 0px; margin-left:25px;">--</p>
                            </div>
                            <div class="form-group d-flex ">
                                <label>Gender : </label>
                                <p style="margin-top: 0px; margin-left:25px;">--</p>
                            </div>
                            <div class="form-group d-flex ">
                                <label>Occupation : </label>
                                <p style="margin-top: 0px;margin-left:25px;">--
                        </div>
                    </div>
                    
                    <!-- <form class=" text-left" method="post" action="">
                      <div class="form-group">
                        <label>E-mail:</label>
                        <input class="form-control bg-white" type="text" name="email">
                      </div>
                      <div class="form-group offset-top-24">
                        <label>Password:</label>
                        <input class="form-control bg-white" type="password" name="password">
                      </div>
                      <div class="offset-top-24">
                        <button class="btn btn-primary btn-block" name="submit">sign in</button>
                      </div>
                    </form> -->
                  </div>
                </div>
            </div>
            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="profile-tab">
              <div class="row justify-content-sm-center section-34" id="register">
                  <div class="col-sm-8 col-md-6 col-lg-4">
                    <form class="text-left" method="post" action="includes/register.php">
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
@endsection
