@extends('index')

@section('content')

<section>
  <div  class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center black-text text-white">{{ trans('room.room') }}</h1>
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
        <br><br>
      </div>
    </div>
    <div class="parallax"><img src="{{asset('img/roomr/7.jpg')}}" ></div>
  </div>
</section>
<br>
<br>
<div class="row">
  <!-- zome A -->
  <div class="col s12 m4">
    <div class="card">
      <div class="card-image">
        <img src="{{asset('img/roomr/1.jpg')}}">
        <h5 class="card-title blue darken-1">{{ trans('room.zomeA') }}</h5>
        <a class="btn-floating halfway-fab waves-effect waves-light  blue modal-trigger"  id="download-button"  href="#modal3"><i class="material-icons">add</i></a>
      </div>
      <div class="card-content">
        <p>{{ trans('room.rowA') }}</p>
        <p>{{ trans('room.manyA') }}</p>
        <p>{{ trans('room.bathA') }}</p>
        <p>{{ trans('room.limitA') }}</p>
      </div>
       <div class="card-action">
              <a href="{{url('registerroom')}}" class="header center blue-text">{{ trans('meet.Book') }}</a>
            </div>
    </div>
  </div>

  <div id="modal3" class="modal">
    <div class="modal-content">
     <div class="panel-heading"><h4>{{ trans('room.zomeA') }}</h4></div>
     <div class="row">

       <div class="slider" >
        <ul class="slides">

          <li>

            <img src="{{asset('img/roomr/9.jpg')}}"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="{{asset('img/roomr/9.jpg')}}"> <!-- random image -->
            <div class="caption left-align">
              <h3>Left Aligned Caption</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>

            <img src="{{asset('img/roomr/9.jpg')}}"> <!-- random image -->
            <div class="caption right-align">
              <h3>Right Aligned Caption</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="{{asset('img/roomr/9.jpg')}}"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
        </ul>
      </div>
      <br><br>
      <div class="card-content black-text">
        <h5 class="card-title">Features</h5>
        <br>
        <div class="row">
          <div class="col s12"></div>
          <div class="col s6">
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text" ">
                <i class=" small material-icons">done</i>
              </span>
              Double Size Bed 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Beach View 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Free Wifi 
            </div>
            </div>
            <div class="col s6"><div class="title teal-text">
              <span class="fa-stack fa-lg black-text" ">
                <i class=" small material-icons">done</i>
              </span>
              Double Size Bed 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Beach View 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Free Wifi 
            </div>
            </div>
          </div>
        </div>
      </div>        
    </div>
  </div>
  <!-- close zomeA -->
  <div class="col s12 m4">
    <div class="card">
      <div class="card-image">
        <img src="{{asset('img/roomr/2.jpg')}}">
        <h5 class="card-title blue darken-1">{{ trans('room.zomeT') }}</h5>
        <a class="btn-floating halfway-fab waves-effect waves-light blue modal-trigger"  id="download-button"  href="#modal4"><i class="material-icons">add</i></a>
      </div>
      <div class="card-content">
        <p>{{ trans('room.rowT') }}</p>
        <p>{{ trans('room.manyT') }}</p>
        <p>{{ trans('room.bathT') }}</p>
        <p>{{ trans('room.limitT') }}</p>
        </div>
           <div class="card-action">
              <a href="{{url('registerroom')}}" class="header center blue-text">{{ trans('meet.Book') }}</a>
            </div>
      </div>
    </div>

  <div id="modal4" class="modal">
    <div class="modal-content">
     <div class="panel-heading"><h4>ZomeB</h4></div>
      <div class="row">

       <div class="slider" >
        <ul class="slides">

          <li>

            <img src="{{asset('img/roomr/9.jpg')}}"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="{{asset('img/roomr/9.jpg')}}"> <!-- random image -->
            <div class="caption left-align">
              <h3>Left Aligned Caption</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>

            <img src="{{asset('img/roomr/9.jpg')}}"> <!-- random image -->
            <div class="caption right-align">
              <h3>Right Aligned Caption</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="{{asset('img/roomr/9.jpg')}}"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
        </ul>
      </div>
      <br><br>
      <div class="card-content black-text">
        <h5 class="card-title">Features</h5>
        <br>
        <div class="row">
          <div class="col s12"></div>
          <div class="col s6">
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text" ">
                <i class=" small material-icons">done</i>
              </span>
              Double Size Bed 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Beach View 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Free Wifi 
            </div>
            </div>
            <div class="col s6"><div class="title teal-text">
              <span class="fa-stack fa-lg black-text" ">
                <i class=" small material-icons">done</i>
              </span>
              Double Size Bed 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Beach View 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Free Wifi 
            </div>
            </div>
          </div>
        </div>
      </div>
   </div>
 </div>
<!-- close zomeB -->
 <div class="col s12 m4">
  <div class="card">
    <div class="card-image">
      <img src="{{asset('img/roomr/3.jpg')}}">
      <h5 class="card-title blue darken-1">{{ trans('room.zomeV') }}</h5>
      <a class="btn-floating halfway-fab waves-effect waves-light blue modal-trigger"  id="download-button"  href="#modal5"><i class="material-icons">add</i></a>
    </div>
    <div class="card-content">
        <p>{{ trans('room.rowV') }}</p>
        <p>{{ trans('room.manyV') }}</p>
        <p>{{ trans('room.bathV') }}</p>
        <p>{{ trans('room.limitV') }}</p>
        </div>
           <div class="card-action">
              <a href="{{url('registerroom')}}" class="header center blue-text">{{ trans('meet.Book') }}</a>
            </div>
    </div>
  </div>

<div id="modal5" class="modal">
  <div class="modal-content">
   <div class="panel-heading"><h4>{{ trans('room.zomeV') }}</h4></div>
   <div class="row">

       <div class="slider" >
        <ul class="slides">

          <li>

            <img src="{{asset('img/roomr/9.jpg')}}"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="{{asset('img/roomr/9.jpg')}}"> <!-- random image -->
            <div class="caption left-align">
              <h3>Left Aligned Caption</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>

            <img src="{{asset('img/roomr/9.jpg')}}"> <!-- random image -->
            <div class="caption right-align">
              <h3>Right Aligned Caption</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="{{asset('img/roomr/9.jpg')}}"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
        </ul>
      </div>
      <br><br>
      <div class="card-content black-text">
        <h5 class="card-title">Features</h5>
        <br>
        <div class="row">
          <div class="col s12"></div>
          <div class="col s6">
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text" ">
                <i class=" small material-icons">done</i>
              </span>
              Double Size Bed 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Beach View 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Free Wifi 
            </div>
            </div>
            <div class="col s6"><div class="title teal-text">
              <span class="fa-stack fa-lg black-text" ">
                <i class=" small material-icons">done</i>
              </span>
              Double Size Bed 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Beach View 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Free Wifi 
            </div>
            </div>
          </div>
        </div>
 </div>
</div>
</div>
<!-- close zomeC -->

<!-- ส่วนที่2 -->
<div class="row">
  <div class="col s12 m4">
    <div class="card">
      <div class="card-image">
        <img src="{{asset('img/roomr/4.jpg')}}">
        <h5 class="card-title blue darken-1">{{ trans('room.zomeN') }}</h5>
        <a class="btn-floating halfway-fab waves-effect waves-light blue modal-trigger"  id="download-button"  href="#modal6"><i class="material-icons">add</i></a>
      </div>
      <div class="card-content">
        <p>{{ trans('room.rowN') }}</p>
        <p>{{ trans('room.manyN') }}</p>
        <p>{{ trans('room.bathN') }}</p>
        <p>{{ trans('room.limitN') }}</p>
        </div>
           <div class="card-action">
              <a href="{{url('registerroom')}}" class="header center blue-text">{{ trans('meet.Book') }}</a>
            </div>
      </div>
    </div>
  

  <div id="modal6" class="modal">
    <div class="modal-content">
     <div class="panel-heading"><h4>{{ trans('room.zomeN') }}</h4></div>
      <div class="row">

       <div class="slider" >
        <ul class="slides">

          <li>

            <img src="{{asset('img/roomr/9.jpg')}}"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="{{asset('img/roomr/9.jpg')}}"> <!-- random image -->
            <div class="caption left-align">
              <h3>Left Aligned Caption</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>

            <img src="{{asset('img/roomr/9.jpg')}}"> <!-- random image -->
            <div class="caption right-align">
              <h3>Right Aligned Caption</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="{{asset('img/roomr/9.jpg')}}"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
        </ul>
      </div>
      <br><br>
      <div class="card-content black-text">
        <h5 class="card-title">Features</h5>
        <br>
        <div class="row">
          <div class="col s12"></div>
          <div class="col s6">
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text" ">
                <i class=" small material-icons">done</i>
              </span>
              Double Size Bed 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Beach View 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Free Wifi 
            </div>
            </div>
            <div class="col s6"><div class="title teal-text">
              <span class="fa-stack fa-lg black-text" ">
                <i class=" small material-icons">done</i>
              </span>
              Double Size Bed 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Beach View 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Free Wifi 
            </div>
            </div>
          </div>
        </div>
 </div>
   </div>
 </div>

 <!-- close ZomeD -->
 <div class="col s12 m4">
  <div class="card">
    <div class="card-image">
      <img src="{{asset('img/roomr/5.jpg')}}">
      <h5 class="card-title blue darken-1">{{ trans('room.zomeVIP') }}</h5>
      <a class="btn-floating halfway-fab waves-effect waves-light blue modal-trigger"  id="download-button"  href="#modal7"><i class="material-icons">add</i></a>
    </div>
    <div class="card-content">
        <p>{{ trans('room.rowI') }}</p>
        <p>{{ trans('room.manyI') }}</p>
        <p>{{ trans('room.bathI') }}</p>
        <p>{{ trans('room.limitI') }}</p>
        </div>
          <div class="card-action">
              <a href="{{url('registerroom')}}" class="header center blue-text">{{ trans('meet.Book') }}</a>
            </div>
    </div>
  </div>

<div id="modal7" class="modal">
  <div class="modal-content">
   <div class="panel-heading"><h4>{{ trans('room.zomeN') }}</h4></div>
                 <div class="row">

       <div class="slider" >
        <ul class="slides">

          <li>

            <img src="{{asset('img/roomr/9.jpg')}}"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="{{asset('img/roomr/9.jpg')}}"> <!-- random image -->
            <div class="caption left-align">
              <h3>Left Aligned Caption</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>

            <img src="{{asset('img/roomr/9.jpg')}}"> <!-- random image -->
            <div class="caption right-align">
              <h3>Right Aligned Caption</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="{{asset('img/roomr/9.jpg')}}"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
        </ul>
      </div>
      <br><br>
      <div class="card-content black-text">
        <h5 class="card-title">Features</h5>
        <br>
        <div class="row">
          <div class="col s12"></div>
          <div class="col s6">
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text" ">
                <i class=" small material-icons">done</i>
              </span>
              Double Size Bed 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Beach View 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Free Wifi 
            </div>
            </div>
            <div class="col s6"><div class="title teal-text">
              <span class="fa-stack fa-lg black-text" ">
                <i class=" small material-icons">done</i>
              </span>
              Double Size Bed 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Beach View 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Free Wifi 
            </div>
            </div>
          </div>
        </div>
 </div>
          </div>
        </div>


<!-- clse ZomeE -->
<div class="col s12 m4">
  <div class="card">
    <div class="card-image">
      <img src="{{asset('img/roomr/6.jpg')}}">
      <h5 class="card-title blue darken-1">{{ trans('room.zomeK') }}</h5>
      <a class="btn-floating halfway-fab waves-effect waves-light blue modal-trigger"  id="download-button"  href="#modal8"><i class="material-icons">add</i></a>
    </div>
    <div class="card-content">
        <p>{{ trans('room.rowK') }}</p>
        <p>{{ trans('room.manyK') }}</p>
        <p>{{ trans('room.bathK') }}</p>
        <p>{{ trans('room.limitK') }}</p>
        </div>
           <div class="card-action">
              <a href="{{url('registerroom')}}" class="header center blue-text">{{ trans('meet.Book') }}</a>
            </div>
    </div>
  </div>
</div>
<div id="modal8" class="modal">
  <div class="modal-content">
   <div class="panel-heading"><h4>{{ trans('room.zomeK') }}</h4></div>
           <div class="row">
          <div class="col s12"></div>
          <div class="col s6">
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text" ">
                <i class=" small material-icons">done</i>
              </span>
              Double Size Bed 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Beach View 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Free Wifi 
            </div>
            </div>
            <div class="col s6"><div class="title teal-text">
              <span class="fa-stack fa-lg black-text" ">
                <i class=" small material-icons">done</i>
              </span>
              Double Size Bed 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Beach View 
            </div>
            <div class="title teal-text">
              <span class="fa-stack fa-lg black-text">
                <i class=" small material-icons">done</i>
              </span>
              Free Wifi 
            </div>
            </div>
          </div>
        </div>
 </div>
</div>
</div>


@endsection