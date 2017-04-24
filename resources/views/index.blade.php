<!DOCTYPE html>
<html>
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  

  <title>D-AmanHotel&&Resort</title>

  
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
  <link href="min/custom-min.css" type="text/css" rel="stylesheet" >
  
</head>

<body id="top" class="scrollspy">
 <div class=" navbar-fixed ">
  <nav id="nav_f" class="default_color" role="navigation">
    <div class="nav-wrapper indigo darken-4">

      <dd><ul class="left hide-on-med-and-down">
        <li><i class="material-icons left ">phone</i><strong>0847652709</strong>&nbsp;&nbsp;</li>
        <li><i class="material-icons left ">email</i><strong>D-AmanHR@gmail.com </strong></li>  
      </ul>

      <center>
        <a href="{{ URL::to('change/en') }}"><img src="{{asset('img/L/en.png')}}"></a>  
        <a href="{{ URL::to('change/th') }}"><img src="{{asset('img/L/th.png')}}"></a>

        @if (Auth::guest())
        <div class="right">  
         <a class="waves-effect waves-light btn indigo accent-4 modal-trigger" href="#modal2">{{ trans('meet.Rg') }}</a>
         <a class="waves-effect waves-light btn indigo accent-4 modal-trigger" href="#modal1">{{ trans('meet.Lo') }}</a>
         @else
         <div class="right"> <a class="waves-effect waves-light btn pink modal-trigger" href="#modal3">{{ Auth::user()->name }}</a>
           <a class="waves-effect waves-light btn  red modal-trigger" href="{{url('auth/logout')}}">{{ trans('meet.Lout') }}</a>
           @endif
         </div> 
       </div>

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
      <div class=" navbar">
        <nav id="nav_f" class="default_color" role="navigation">
          <div class="section-right">
            <div class="nav-wrapper">
             @if  (Auth::guest())
             <a href="#!" class="brand-logo">D-aman</a>
             @else
             <a href="#!" class="brand-logo">{{ Auth ::user()->level  }}</a>
             @endif
             
             <ul class="right hide-on-med-and-down">
              @if (Auth::guest())
                  <li><a href="{{url('home')}}">Home</a></li>
                  <li><a href="{{url('mr')}}">MeetingRoom</a></li>         
                  <li><a href="{{url('room')}}">Room</a></li>
                  <li><a href="{{url('restaurant')}}">Restaurant</a></li>
                  <li><a href="{{url('contact')}}">Contact</a></li>
              @elseif(Auth::user()->level == 'staff')
                  <li><a href="{{url('home')}}">หน้าหลัก</a></li>
                  <li><a href="{{url('/staff')}}">รายการจองสั่งห้องประชุม</a></li>
                  <li><a href="{{url('mr')}}">รายการสั่งจองห้องพัก</a></li>         
                  <li><a href="{{url('app')}}">รายการจองห้องประชุม</a></li>
              @else
                  <li><a href="{{url('home')}}">Home</a></li>
                  <li><a href="{{url('mr')}}">MeetingRoom</a></li>         
                  <li><a href="{{url('room')}}">Room</a></li>
                  <li><a href="{{url('restaurant')}}">Restaurant</a></li>
                  <li><a href="{{url('contact')}}">Contact</a></li>
              @endif
            </ul>
            
            <ul id="nav-mobile" class="side-nav">
              <li><a href="{{url('home')}}">Home</a></li>
              <li><a href="{{url('mr')}}">MeetingRoom</a></li>         
              <li><a href="{{url('room')}}">Room</a></li>
              <li><a href="{{url('rr')}}">Reservation</a></li>
              <li><a href="{{url('food')}}">Food</a></li>
              <li><a href="{{url('contact')}}">Contact</a></li>
            </ul>
            <dd><a href="nav-mobile"  data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
          </nav>
        </div>
      </nav>
    </div>
  </div>
</dd>
</div>
</div>
</nav>
</div>
</dd>
</div>
</nav>
</div>

<div id="modal1" class="modal">
  <div class="modal-content">
   <div class="panel-heading"><h4>Login</h4></div>
   <div class="panel-body">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <form class="form-horizontal" role="form" method="POST" action="{{url('/auth/login')}}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="form-group">
        <label class="col-md-4 control-label">E-Mail Address</label>
        <div class="col-md-6">
          <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">Password</label>
        <div class="col-md-6">
          <input type="password" class="form-control" name="password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
          <button type="submit" class="btn  indigo darken-4" style="margin-right: 15px;">
            Login
          </button>

          <a href="{{url('/password/email')}}">Forgot Your Password?</a>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
<div id="modal2" class="modal">
  <div class="modal-content">
    <div class="panel-heading"><h4>Register</h4></div>
    <div class="panel-body">
      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <form class="form-horizontal" role="form" method="POST" action="{{url('/auth/register')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
          <label class="col-md-4 control-label">Name</label>
          <div class="col-md-6">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">E-Mail Address</label>
          <div class="col-md-6">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Password</label>
          <div class="col-md-6">
            <input type="password" class="form-control" name="password">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Confirm Password</label>
          <div class="col-md-6">
            <input type="password" class="form-control" name="password_confirmation">
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn indigo darken-4">
              Register
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

@yield('content')

<!--  Scripts-->
<script src="min/plugin-min.js"></script>
<script src="min/custom-min.js"></script>

<script >
  window.picker = $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 100, // Creates a dropdown of 15 years to control year
      format: 'yyyy/mm/dd'    
    });
  $(document).ready(function(){
    $('.modal-trigger').leanModal();
  });

</script>
</body>
</html>
