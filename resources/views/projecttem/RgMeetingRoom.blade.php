@extends('index')

@section('content')

<div class="parallax-container">
  <div class="section no-pad-bot">
    <div class="container">
      <br><br>
      <h1 class="header center white-text text-white">{{ trans('meet.BM') }}</h1>

    </div>
  </div>
  <div class="parallax"><img src="{{asset('img/room/mr1.JPG')}}" alt="Unsplashed background img 1" style="display: block; transform: translate3d(-50%, 10px, 0px);"></div>
</div>
</section>
<br>
<form action="{{url('/RM')}}/{{Auth::user()->id}}" method="post">  
  <input type="hidden" name="_token" value="{{csrf_token()}}" />

  <div class="container">

    <div class="row">
      <div class="col s12 m8 l6">

        <div class="card white darken-1">
          <br>
          <span class="light-blue-text card-title"><dd>{{ trans('messageRg.Step1') }}</dd></span>
          <br>

          <span class="light-blue-text card-title"><dd>{{ trans('messageRg.D') }}</dd></span>
          <div class="input-field col s6 ">
            <input id="last_name" type="date" name="date" class="datepicker" >
            <label for="last_name">{{ trans('messageRg.Check-in') }}</label>
          </div>

          <div class="input-field col s6">
            <input id="last_name" type="date" name="date1" class="datepicker">
            <label for="last_name">{{ trans('messageRg.Check-out') }}</label>
          </div>
          
          <br><br>
          <span class="light-blue-text card-title"><dd>{{ trans('messageRg.Time') }}</dd></span>

          <div class="col s12">
            <div class="col s6 m4">
              <p>
                <input name="time" type="checkbox" class="filled-in" id="filled-in-box1" value="Daytime"  />
                <label for="filled-in-box1">{{ trans('messageRg.Daytime') }}</label>
              </p></div>
              <div class="col s6 m4">
                <p>
                  <input name="time" type="checkbox" class="filled-in" id="filled-in-box2" value="Nighttime" />
                  <label for="filled-in-box2">{{ trans('messageRg.Nighttime') }}</label>
                </p>      
              </div>
              <div class="col s6 m4">
                <p>
                  <input name="time" type="checkbox" class="filled-in" id="filled-in-box3" value="DaytimeandNighttime" />
                  <label for="filled-in-box3">{{ trans('messageRg.Daytime&&Nighttime') }}</label>
                </p>      
              </div>
            </div>
            <br><br>

            
            <div class="col s12">
              <br>
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
        <div class="row">
          <div class="col s12 m8 l6 ">

            <div class="card white darken-1">
              <br>
              <span class="light-blue-text card-title"><dd>{{ trans('messageRg.Step2') }}</dd></span>
              <br/>

              <div class="input-field col s6 ">
                <input name="name" id="last_name" type="text" class="validate" value="{{ Auth ::user()->name}}" >
                <label for="last_name">{{ trans('messageRg.Name') }} </label>
              </div>

              <div class="input-field col s6">
                @if  ( Auth::user()->Detail == null )
                <input name="surname" id="cus_name" type="text" class="validate" value="" >
                @else
                <input name="surname" id="cus_name" type="text" class="validate" value="{{Auth::user()->Detail->cus_surname}}">
                @endif
                <label for="last_name">{{ trans('messageRg.Last') }}</label>
              </div>

              <div class="input-field col s6">
                @if  ( Auth::user()->Detail == null )
                <input name="phonenumber" id="last_name" type="text" class="validate" value=""  >
                @else
                <input name="phonenumber" id="cus_name" type="text" class="validate" value="{{Auth::user()->Detail->cus_phonenumber}}">
                @endif
                <label for="last_name">{{ trans('messageRg.Phone') }}</label>
              </div>
               <div class="input-field col s6">
              @if  ( Auth::user()->Detail == null )
              <input name="idcard" id="last_name" type="text" class="validate" >
              @else
              <input name="idcard" id="cus_name" type="text" class="validate" value="{{Auth::user()->Detail->cus_IDcard}}">
              @endif 
              <label for="last_name">{{ trans('meet.a') }}</label>
            </div>
              <div class="input-field col s6">
                <input name="email" id="last_name" type="text" class="validate" value="{{ Auth::user()->email}}" >
                <label for="last_name">{{ trans('messageRg.Email') }}</label>
              </div>
              <div class="input-field col s6">
                @if  ( Auth::user()->Detail == null )
                <input name="address" id="last_name" type="text" class="validate" value="" >
                @else
                <input name="address" id="cus_name" type="text" class="validate" value="{{Auth::user()->Detail->cus_address}}">
                @endif
                <label for="last_name">{{ trans('messageRg.Address') }}</label>
              </div>
              <div class="input-field col s6">
                @if  ( Auth::user()->Detail == null )
                <input name="country" id="last_name" type="text" class="validate" value=""  >
                @else
                <input name="country" id="cus_name" type="text" class="validate" value="{{Auth::user()->Detail->cus_country}}">
                @endif  
                <label for="last_name">{{ trans('messageRg.Country') }}</label>
              </div>
              <div class="input-field col s6">
                @if  ( Auth::user()->Detail == null )
                <input name="state" id="last_name" type="text" class="validate" value="" >
                @else
                <input name="state" id="cus_name" type="text" class="validate" value="{{Auth::user()->Detail->cus_state}}">
                @endif 
                <label for="last_name">{{ trans('messageRg.State') }}</label>
              </div>
              <div class="input-field col s6">
               @if  ( Auth::user()->Detail == null )
               <input name="city" id="last_name" type="text" class="validate" value="" >
               @else
               <input name="city" id="cus_name" type="text" class="validate" value="{{Auth::user()->Detail->cus_city}}">
               @endif 
               <label for="last_name">{{ trans('messageRg.City') }}</label>
             </div>
             <div class="input-field col s6">
              @if  ( Auth::user()->Detail == null )
              <input name="postalcode" id="last_name" type="text" class="validate" >
              @else
              <input name="postalcode" id="cus_name" type="text" class="validate" value="{{Auth::user()->Detail->cus_postalcode}}">
              @endif 
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

  <center><button  type="submit"  class="btn large indigo darken-4 btn-default">จองตอนนี้</button></br></center>
  <br>
</div>

</form>         
@endsection