@extends('index')

@section('content')

<div class="parallax-container">
  <div class="section no-pad-bot">
    <div class="container">
      <br><br>
      <h1 class="header center white-text text-white">BOOKING ROOM</h1>
      

    </div>
  </div>
  <div class="parallax"><img src="{{asset('img/h4.JPG')}}" alt="Unsplashed background img 1" style="display: block; transform: translate3d(-50%, 10px, 0px);"></div>
</div>
</section>
<br>

<div class="container">
 
  <div class="row">
    <div class="col s12 m8 l6">

      <div class="card white darken-1">
        <br>
        <span class="light-blue-text card-title"><dd>{{ trans('messageRg.Step1') }}</dd></span>
        <br>
        <div class="input-field col s6 ">
          <input id="last_name" type="date" class="datepicker">
          <label for="last_name">{{ trans('messageRg.Check-in') }}</label>
        </div>

        <div class="input-field col s6">
          <input id="last_name" type="date" class="datepicker">
          <label for="last_name">{{ trans('messageRg.Check-out') }}</label>
        </div>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>   
        
      </div>
    </div>
    <div class="row">
      <div class="col s12 m8 l6 ">

        <div class="card white darken-1">
          <br>
          <span class="light-blue-text card-title"><dd>{{ trans('messageRg.Step2') }}</dd></span>
          <br/>
          <div class="input-field col s6 ">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">{{ trans('messageRg.Name') }}</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">{{ trans('messageRg.Last') }}</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">{{ trans('messageRg.Phone') }}</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">{{ trans('messageRg.Email') }}</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">{{ trans('messageRg.Address') }}</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">{{ trans('messageRg.Country') }}</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">{{ trans('messageRg.State') }}</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">{{ trans('messageRg.City') }}</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">{{ trans('messageRg.Zipcode') }}</label>
          </div>
          <br/>
          <br/>
          <br/>
          <br/>
          
          <br/>
          <br/>
          <br/>
          <br/>
        </div>
      </div>

      
    </div>
  </div>
  

</div>


@endsection