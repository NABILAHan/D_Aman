@extends('index')

@section('content')
<div class="row">
        <div class="col s1">
</div>

        <div class="row">
        <div class="col s8 offset-s1">
        <div class="grid-example col s12 m12">
          <div class="card grey lighten-5">
            <div class="card-content indigo darken-4-text">
             <div class="col s3 push-s1"  class="pull-left ">
           <dd><a class="btn-floating btn-large waves-effect waves-blue darken-1 white-text">1</a></dd>
           <span class="card-title indigo-text">Choose Date</span>
           </div>
           <div class="col s3 push-s2" class="pull-left">
           <dd><a class=" btn-large btn-floating disabled">2</a></dd>
           <span class="card-title indigo-text">Choose Date</span>
           </div>
           <div class="col s3 push-s3" class="pull-left">
           <dd><a class="btn-large btn-floating disabled">3<a></dd>
           <span class="card-title indigo-text">Choose Date</span>
           </div>
            </div>
          </div>
        </div>
     </div>

      </div>
      
<div class="row">
        <div class="col s1">
</div>
<div class="row">
        <div class="col s8 offset-s1">
        <div class="grid-example col s12 m12">
          <div class="card grey lighten-5">
            <div class="card-content indigo darken-4-text">
            <span class="light-blue-text card-title"><dd>{{ trans('messageRg.D') }}</dd></span>
          <div class="input-field col s6 ">
            <input id="last_name" type="date" name="date" class="datepicker" >
            <label for="last_name">{{ trans('messageRg.Check-in') }}</label>
          </div>

          <div class="input-field col s6">
            <input id="last_name" type="date" name="date1" class="datepicker">
            <label for="last_name">{{ trans('messageRg.Check-out') }}</label>
          </div>
            </div>
          </div>
        </div>
     </div>
     <div class="row">
        <div class="col s1">
</div>
<div class="row">
        <div class="col s8 offset-s2">
        <div class="grid-example col s12 m12">
          <div class="card grey lighten-5">
            <div class="card-content indigo darken-4-text">
            <span class="light-blue-text card-title"><dd>{{ trans('messageRg.Room') }}</dd></span>
            <div class="col s6 m6">
              <p>
                <input name="room" type="radio" id="test1" checked value="1"  />
                <label for="test1">{{ trans('messageRg.Rimlay') }}</label>
              </p>
              <p>
                <input name="room" type="radio" id="test2" value="2" />
                <label for="test2">{{ trans('messageRg.Leelayai') }}</label>
              </p>
              <p>
                <input name="room" type="radio" id="test3" value="3" />
                <label for="test3">{{ trans('messageRg.Pradoo') }}</label>
              </p></div>
              <div class="col s6 m6">
               <p>
                <input name="room" type="radio" id="test4" value="4" />
                <label for="test4">{{ trans('messageRg.Jaturus') }}</label>
              </p>
              <p>
                <input name="room" type="radio" id="test5" value="5" />
                <label for="test5">{{ trans('messageRg.Leelalak') }}</label>
              </p>
              <p>
                <input name="room" type="radio" id="test6" value="6" />
                <label for="test6">{{ trans('messageRg.Limnum') }}</label>
              </p>
            </div>
       
            </div>
          </div>
        </div>
     </div>
      


@endsection