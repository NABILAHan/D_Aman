@extends('index')

@section('content')

<section>
  <div  class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text text-white">THE ROOM</h1>
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
        <br><br>
      </div>
    </div>
    <div class="parallax"><img src="{{asset('img/roomr/7.jpg')}}" alt="Unsplashed background img 1"></div>
  </div>
</section>
<br>
<div class="container">
<div class="row">
<div class="col s8 offset-s3">
    <div class="col s12 m10">
      <div class="card">
        <div class="card-image">
          <img src="{{asset('img/roomr/7.jpg')}}">
          <span class="card-title">Card Title</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col s8 offset-s3">
    <div class="col s12 m10">
      <div class="card">
        <div class="card-image">
          <img src="{{asset('img/roomr/7.jpg')}}">
          <span class="card-title">Card Title</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col s8 offset-s3">
    <div class="col s12 m10">
      <div class="card">
        <div class="card-image">
          <img src="{{asset('img/roomr/7.jpg')}}">
          <span class="card-title">Card Title</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
@endsection