@extends('common.master')
    @section('content')
    <style>
        .decorate{
            display: flex;
        }
        .box{ width: 600px; height: 300px; border: 1px solid black  ; border-radius: 50px 50px 50px 50px;}
        .box .boxinside1{width: 200px; height: 70px; border: 1px solid black  ; border-radius: 50px 50px 50px 50px ; margin: 50px 50px 0 50px; padding-top: 3%}
        .box .boxinside2{width: 200px; height: 70px; border: 1px solid black  ; border-radius: 50px 50px 50px 50px ; margin: 50px 0 50px 50px; padding-top: 3%}
        .box .boxinside3{width: 200px; height: 70px; border: 1px solid black  ; border-radius: 50px 50px 50px 50px ; margin: 0px 50px 50px 50px; padding-top: 3%}
        .box .boxinside4{width: 200px; height: 70px; border: 1px solid black  ; border-radius: 50px 50px 50px 50px ; margin: 0px 50px 50px 50px; padding-top: 3%}

    </style>
    <div>
        <h1> <b>Dashboard</b>   </h1>
        <div class="row justify-content-sm-center section-34">
            <div class="box" >  
                <div class="decorate">
                    <a href="{{route('userprofile')}}">
                        <div class="boxinside1" onmouseover="colourOn(this)" onmouseout="colourOff(this)"> 
                                {{-- <b>Heyy</b> --}}
                                <img src="{{asset('/images/user.png')}}" height="40px" width="40px"> 
                                <b> My Account</b>
                        </div>
                    </a>
                    <a href="">
                        <div class="boxinside2" onmouseover="colourOn(this)" onmouseout="colourOff(this)">
                                {{-- <b> Pritzz !!</b> --}}
                                <span>
                                    <img src="{{asset('/images/search.png')}}" height="40px" width="40px"> 
                                    <b> Searched Properties.</b>
                                </span>
                        </div>
                    </a>
                </div>
               <div class="decorate">
                    <a  href="{{route('membership')}}">
                        <div class="boxinside3" onmouseover="colourOn(this)" onmouseout="colourOff(this)">
                            {{-- <b> i have </b> --}}
                            <img src="{{asset('/images/project.png')}}" height="40px" width="40px"> 
                            <b>Upgrade Plan</b>
                        </div>
                    </a>
                    <a href="{{route('contactUs')}}">
                        <div class="boxinside4" onmouseover="colourOn(this)" onmouseout="colourOff(this)">
                            <p>
                                <img src="{{asset('/images/contact.png')}}" height="40px" width="40px"> 
                                <b> Contact Us </b>
                            </p>
                        </div>
                    </a>
                    
               </div>
            </div>
        </div>
    </div>
    <script>
        function colourOn(x) { 
                x.style.backgroundColor = 'grey'
                // console.log(x);
         }
         function colourOff(x) { 
                x.style.backgroundColor = ''
                // console.log(x);
         }
    </script>
@endsection