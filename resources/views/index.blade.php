  <!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
   <!--  <meta name="theme-color" content="#1a237e"> -->

    <title>Material UI One Page Theme</title>

    
    <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->

  
    <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="min/custom-min.css" type="text/css" rel="stylesheet" >
    

</head>
<body id="top" class="scrollspy">
<!-- 
<div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2015 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">GeeksLabs</a> All rights reserved.</span>
        <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://geekslabs.com/">GeeksLabs</a></span>
        </div>
    </div> -->
 <div class=" navbar-fixed ">
    <nav id="nav_f" class="default_color" role="navigation">
      <div class="nav-wrapper indigo darken-4">
       
        <dd>0847652709&nbsp; <a href="{{ URL::to('change/en') }}">ENGLISH</a>  &nbsp;<a href="{{ URL::to('change/th') }}">THAILAND</a></li>&nbsp;  <a href="{{ URL::to('auth/login') }}">login</a>&nbsp;<a href="{{ URL::to('auth/logout') }}">logout</a>
        </ul>
      </div>
    </nav>
  </div>
  

<!-- Pre Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>


<!--Hero-->
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <h1 class="text_h center header cd-headline letters type  Hex-text">
            <span>D-aman</span> 
            <span class="cd-words-wrapper waiting">
                <b class="is-visible">Hotel & Resort</b>
                
            </span>
        </h1>
    </div>
    <!--Navigation-->


 
    <nav id="nav_f" class="default_color" role="navigation">

    <!-- <a href="#" class="brand-logo">D-aman</a> -->
        <div class="section-right">
            <div class="nav-wrapper">
             <a href="#!" class="brand-logo">D-aman</a>

          <!--   <a href="#"  class="brand-logo">MD Template</a> -->
                <ul class="right hide-on-med-and-down">
                    <li><a href="{{url('home')}}">Home</a></li>
                    <li><a href="{{url('mr')}}">MeetingRoom</a></li>         
                    <li><a href="{{url('RR')}}">ReservationRoom</a></li>
                    <li><a href="{{url('room')}}">Reservation</a></li>
                    <li><a href="{{url('food')}}">Food</a></li>
                    <li><a href="{{url('contact')}}">Contact</a></li>

                </ul>
               <ul id="nav-mobile" class="side-nav">
                    <li><a href="{{url('home')}}">Home</a></li>
                    <li><a href="{{url('mr')}}">MeetingRoom</a></li>         
                    <li><a href="{{url('RR')}}">ReservationRoom</a></li>
                    <li><a href="{{url('room')}}">Reservation</a></li>
                    <li><a href="{{url('food')}}">Food</a></li>
                    <li><a href="{{url('contact')}}">Contact</a></li>
                </ul>
            <dd><a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
          
            </div>
            </nav>
     </div>
     </nav>
     </div>
     </div>


@yield('content')


    <!--  Scripts-->
    <script src="min/plugin-min.js"></script>
    <script src="min/custom-min.js"></script>
     <!-- <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.min.js"></scrip -->
    <script >
    window.picker = $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 100, // Creates a dropdown of 15 years to control year
        format: 'yyyy/mm/dd'    
    });
</script>

    </body>
</html>
