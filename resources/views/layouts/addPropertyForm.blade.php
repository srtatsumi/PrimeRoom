@extends('common.master')
@section('content')



<div class="page-head">
  <section class="context-dark">
    <div class="parallax-container" data-parallax-img="images/bg-header-1920x362.jpg">
      <div class="material-parallax parallax"><img src="images/bg-header-1920x362.jpg" alt="" style="transform: translate3d(-50%, 41px, 0px); display: block;"></div>
      <div class="parallax-content">
        <div class="container section-top-34 section-md-top-98 section-bottom-34">
          <div>
            <h1 class="font-weight-bold">Add Property</h1>
          </div>
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
      <div class="offset-md-top-66">
        <!-- Responsive-tabs-->
        <div class="tab-content mytab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="home-tab">
            <div class="row justify-content-sm-center section-34">
              <div class="col-sm-8 col-md-6 col-lg-4">

                <form class=" text-left" method="post" action="{{route('addProperty')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label style="font-weight: 600">Property Title: </label>
                    <input type="text" class="form-control bg-white" name="propertyTitle" id="" placeholder="Property Name">
                  </div>
                  <div class="form-group">
                    <label>Property Description :</label>
                    <textarea name="propertyDescription" class="form-control bg-white" cols="39" rows="8" style="border:none; outline:none; border: 1.5px solid silver; border-radius:5px;" placeholder="Property Descriptions"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Property Images :</label>
                    <input type="file" name="propertyImage" class="form-control bg-white" id="">
                  </div>
                  <div class="form-group">
                    <label>Property Video :</label>
                    <input type="file" class="form-control bg-white" name="propertyVideo" id="">
                  </div>
                  <div class="form-group">
                    <label>Location :</label>
                    <input class="form-control bg-white" type="number" name="postcode" id="" placeholder="Postcode" required>
                    <input class="form-control bg-white" type="text" name="road" id="" placeholder="Road" required>
                    <input class="form-control bg-white" type="text" name="city" id="" placeholder="City" required>
                  </div>
                  <div class="form-group">
                    <label>Add Type :</label>
                    <ul class="list-unstyled">
                      <li>
                        <input type="radio" name="adType" value="Room to Rent" id="" required>Room to Rent
                      </li>
                      <li>
                        <input type="radio" name="adType" value="Room Wanted" id="" Room Wanted>Room Wanted
                      </li>
                      <li>
                        <input type="radio" name="adType" value="House to Rent" id="">House to Rent
                      </li>
                      <li>
                        <input type="radio" name="adType" value="House Wanted" id="">House Wanted
                      </li>
                    </ul>
                  </div>
                  <div class="form-group">
                    <label>Property Type : </label>
                    <ul class="list-unstyled">
                      <li>
                        <input type="radio" name="propertyType" value="Flat" id="" required>Flat
                      </li>
                      <li>
                        <input type="radio" name="propertyType" value="House" id="">House
                      </li>
                      <li>
                        <input type="radio" name="propertyType" value="Bunglow" id="">Bunglow
                      </li>
                    </ul>
                  </div>
                  <div class="form-group">
                    <label>Total Bedrooms : </label>
                    <select name="bedroom" class="form-control bg-white" id="" required>
                      <option name="bedroom" value="">Choose...</option>
                      <option name="bedroom" value="1">Only 1 Bedroom</option>
                      <option name="bedroom" value="1-2">1-2 Bedrooms</option>
                      <option name="bedroom" value="2-3">2-3 Bedrooms</option>
                      <option name="bedroom" value="3-4">3-4 Bedrooms</option>
                      <option name="bedroom" value="4-5">4-5 Bedrooms</option>
                      <option name="bedroom" value="5-6">5-6 Bedrooms</option>
                      <option name="bedroom" value="6-7">6-7 Bedrooms</option>
                      <option name="bedroom" value="7-8">7-8 Bedrooms</option>
                      <option name="bedroom" value="8-9">8-9 Bedrooms</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Total Bathrooms :</label>
                    <select name="bathroom" class="form-control bg-white" id="" required>
                      <option name="bathroom" value="">Choose...</option>
                      <option name="bathroom" value="1">Only 1 Bathroom</option>
                      <option name="bathroom" value="1-2">1-2 Bathrooms</option>
                      <option name="bathroom" value="2-3">2-3 Bathrooms</option>
                      <option name="bathroom" value="3-4">3-4 Bathrooms</option>
                      <option name="bathroom" value="4-5">4-5 Bathrooms</option>
                      <option name="bathroom" value="5-6">5-6 Bathrooms</option>
                      <option name="bathroom" value="6-7">6-7 Bathrooms</option>
                      <option name="bathroom" value="7-8">7-8 Bathrooms</option>
                      <option name="bathroom" value="8-9">8-9 Bathrooms</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Total Kitchens :</label>
                    <select name="kitchen" class="form-control bg-white" id="" required>
                      <option name="kitchen" value="">Choose...</option>
                      <option name="kitchen" value="1">Only 1 Kitchen</option>
                      <option name="kitchen" value="1-2">1-2 Kitchens</option>
                      <option name="kitchen" value="2-3">2-3 Kitchens</option>
                      <option name="kitchen" value="3-4">3-4 Kitchens</option>
                      <option name="kitchen" value="4-5">4-5 Kitchens</option>
                      <option name="kitchen" value="5-6">5-6 Kitchens</option>
                      <option name="kitchen" value="6-7">6-7 Kitchens</option>
                      <option name="kitchen" value="7-8">7-8 Kitchens</option>
                      <option name="kitchen" value="8-9">8-9 Kitchens</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Total Receptions : </label>
                    <select name="reception" class="form-control bg-white" id="" required>
                      <option name="reception" value="">Choose...</option>
                      <option name="reception" value="1">Only 1 Reception</option>
                      <option name="reception" value="1-2">1-2 Receptions</option>
                      <option name="reception" value="2-3">2-3 Receptions</option>
                      <option name="reception" value="3-4">3-4 Receptions</option>
                      <option name="reception" value="4-5">4-5 Receptions</option>
                      <option name="reception" value="5-6">5-6 Receptions</option>
                      <option name="reception" value="6-7">6-7 Receptions</option>
                      <option name="reception" value="7-8">7-8 Receptions</option>
                      <option name="reception" value="8-9">8-9 Receptions</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Total Rooms to Rent :</label>
                    <select name="roomToRent" class="form-control bg-white" id="" required>
                      <option value="">Choose...</option>
                      <option name="roomToRent" value="1">Only 1 Room</option>
                      <option name="roomToRent" value="1-2">1-2 Rooms</option>
                      <option name="roomToRent" value="2-3">2-3 Rooms</option>
                      <option name="roomToRent" value="3-4">3-4 Rooms</option>
                      <option name="roomToRent" value="4-5">4-5 Rooms</option>
                      <option name="roomToRent" value="5-6">5-6 Rooms</option>
                      <option name="roomToRent" value="6-7">6-7 Rooms</option>
                      <option name="roomToRent" value="7-8">7-8 Rooms</option>
                      <option name="roomToRent" value="8-9">8-9 Rooms</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Room :</label>
                    <ul class="list-unstyled">
                      <li>
                        <input type="checkbox" name="room[]" value="Single" id="myCheck">Single
                      </li>
                      <li>
                        <input type="checkbox" name="room[]" value="Double" id="myCheck">Double
                      </li>
                      <li>
                        <input type="checkbox" name="room[]" value="Shared" id="myCheck">Shared
                      </li>
                      <li>
                        <input type="checkbox" name="room[]" value="Couples" id="myCheck">Couples
                      </li>
                    </ul>
                  </div>
                  <div class="form-group">
                    <label>Extra :</label>
                    <ul class="list-unstyled">
                      <li>
                        <input type="checkbox" name="extras[]" value="Ensuite" id="myCheckmyCheck"> Ensuite
                      </li>
                      <li>
                        <input type="checkbox" name="extras[]" value="Furnished" id="myCheckmyCheck"> Furnished
                      </li>
                      <li>
                        <input type="checkbox" name="extras[]" value="Cleaner" id="myCheckmyCheck">Cleaner
                      </li>
                      <li>
                        <input type="checkbox" name="extras[]" value="Gardener" id="myCheckmyCheck">Gardener
                      </li>
                    </ul>
                  </div>
                  <div class="form-group">
                    <label>Services :</label>
                    <ul class="list-unstyled">
                      <li>
                        <input type="checkbox" name="services[]" value="Internet" id="myCheckmyCheckmyCheck">Internet
                      </li>
                      <li>
                        <input type="checkbox" name="services[]" value="Television" id="myCheckmyCheckmyCheck">Television
                      </li>
                      <li>
                        <input type="checkbox" name="services[]" value="Garden" id="myCheckmyCheckmyCheck">Garden
                      </li>
                      <li>
                        <input type="checkbox" name="services[]" value="Balcony" id="myCheckmyCheckmyCheck">Balcony
                      </li>
                      <li>
                        <input type="checkbox" name="services[]" value="Parking" id="myCheckmyCheckmyCheck">Parking
                      </li>
                      <li>
                        <input type="checkbox" name="services[]" value="Garage" id="myCheckmyCheckmyCheck">Garage
                      </li>
                    </ul>
                  </div>
                  <div class="form-group">
                    <label>Rent : </label><br>
                    <input type="radio" name="rent" value="Monthly" id="" required>Monthly
                    <input type="radio" name="rent" value="Weekly" id="">Weekly
                    <input type="number" class="form-control bg-white" name="rentAmount" id="" placeholder="Rent Amount" required>
                  </div>
                  <div class="form-group">
                    <label>Bill Includes : </label>
                    <ul class="list-unstyled">
                      <li>
                        <input type="checkbox" name="billInclude[]" value="Gas" id="myCheck">Gas
                      </li>
                      <li>
                        <input type="checkbox" name="billInclude[]" value="Electric" id="myCheck">Electric
                      </li>
                      <li>
                        <input type="checkbox" name="billInclude[]" value="Water" id="myCheck">Water
                      </li>
                      <li>
                        <input type="checkbox" name="billInclude[]" value="Council Tax" id="myCheck">Council Tax
                      </li>
                      <li>
                        <input type="checkbox" name="billInclude[]" value="Wifi" id="myCheck">Wifi
                      </li>
                    </ul>
                  </div>
                  <div class="form-group">
                    <label>Dates : </label><br>
                    <input type="radio" name="availability" value="available" id="">Available<br>
                    <label for="minLength">Min Length : </label>
                    <input class="form-control bg-white" type="date" name="minLength" id="" required>
                    <label for="maxLength">Max Length : </label>
                    <input class="form-control bg-white" type="date" name="maxLength" id="" required>
                  </div>
                  <div class="form-group">
                    <label>Current Household :</label>
                    <select class="form-control bg-white" name="currentHousehold" id="" required>
                      <option name="currentHousehold" value="">Choose ...</option>
                      <option name="currentHousehold" value=" 1">only 1</option>
                      <option name="currentHousehold" value="1-2">1-2</option>
                      <option name="currentHousehold" value="2-3">2-3</option>
                      <option name="currentHousehold" value="3-4">3-4</option>
                      <option name="currentHousehold" value="4-5">4-5</option>
                      <option name="currentHousehold" value="5-6">5-6</option>
                      <option name="currentHousehold" value="6-7">6-7</option>
                      <option name="currentHousehold" value="7-8">7-8</option>
                      <option name="currentHousehold" value="8-9">8-9</option>
                    </select>
                    <input class="form-control bg-white" type="number" name="avgAge" id="" placeholder="Average Age of Housemates">
                    <input type="radio" name="housemateGender" value="Male" id="" required> Male
                    <input type="radio" name="housemateGender" value="Female" id=""> Female
                    <input type="radio" name="housemateGender" value="Mixed" id=""> Mixed
                  </div>
                  <div class="form-group">
                    <label>Occupation :</label><br>
                    <input type="radio" name="occupation" value="Student" id="" required>Student
                    <input type="radio" name="occupation" value="Professional" id="">Professional
                    <input type="radio" name="occupation" value="Doesn't Matter" id=""> Doesn't Matter
                  </div>
                  <div class="form-group">
                    <label>Ethinicity : </label><br>
                    <input type="radio" name="ethinicity" value="National" id="" required>National
                    <input type="radio" name="ethinicity" value="International" id="">International
                    <input type="radio" name="ethinicity" value="Doesn't Matter" id="">Doesn't Matter
                  </div>
                  <div class="form-group">
                    <label>Preferred Housemate :</label>
                    <label for="prefferedHousemateAge">Average Age of Housemate: </label>
                    <input class="form-control bg-white" type="number" name="prefferedHousemateAge" id="" required>
                    <input type="radio" name="prefferedHousemateGender" value="Male" id="" required>Male
                    <input type="radio" name="prefferedHousemateGender" value="Female" id="">Female
                    <input type="radio" name="prefferedHousemateGender" value="Doesn't Matter" id="">Doesn't Matter
                  </div>
                  <div class="form-group">
                    <label>Group : </label><br>
                    <input type="radio" name="group" value="Family" id="" required>Family
                    <input type="radio" name="group" value="Children" id="">Children
                    <input type="radio" name="group" value="Single" id="">Single
                    <input type="radio" name="group" value="Couples" id="">Couples
                    <input type="radio" name="group" value="Pets" id="">Pets
                    <input type="radio" name="group" value="Doesn't Matter" id="">Doesn't Matter
                  </div>
                  <div class="form-group">
                    <label>Advertiser : </label><br>
                    <input type="radio" name="advertiser" value="Home Owner" id="" required>Home Owner
                    <input type="radio" name="advertiser" value="Landlord" id="">Landlord
                    <input type="radio" name="advertiser" value="Flatmate" id="">Flatmate
                    <input type="radio" name="advertiser" value="Agent" id="">Agent
                  </div>
                  <div class="form-group">
                    <label>Advertisement Plan :</label><br>
                    <input type="radio" name="advertisementPlan" value="1" id="">Silver
                    <input type="radio" name="advertisementPlan" value="2" id="">Gold
                    <input type="radio" name="advertisementPlan" value="3" id="">Platinum
                  </div>
                  <div class="offset-top-24">
                    <button class="btn btn-primary btn-block" type="submit" name="submit">Add Property</button>
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

@endsection