@extends('index')

@section('content')

<br>

<div class="content">
<div class="row ">

<div class="col s12">

      <div class="col s6 l5 ">
   
    <div class="card Medium">
      <div class="card-image">
        <img src="{{asset('img/h4.JPG')}}">

      </div>
      
    </div>
  </div>
   <div class="col s6 l5 ">
   <span class="black-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>
    <div class="row center">
                <a href="{{url('RM')}}" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">{{ trans('meet.Book') }}</a>
              </div>
</div>

</div>
</div>
</div>
 @endsection
