<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->

   <center><img src="{{asset('img/Lo.JPG')}}" style="display: block;transform: translate3d(-0%, 0px, 0px);height: 200px;"></center>
   <br>



        <div class="row">
        
        <div class="container">

        <div class="col s12">
        <div class=" offset-s1">
         
         <h6 class="flow-text">{{ trans('meet.P')}}{{ trans('meet.l')}}</h6>
          <div class="card grey lighten-5">
            <div class="card-content indigo darken-4-text">
            <span class=" black-text card-title"><h3>Your Reservation</span>
            </div>
           
      <div class="col s5 push-s5"><h6 class="flow-text">{{ trans('messageRg.Check-in')}}:</h6></div>
      <div class="col s5 pull-s5"><h6 class="flow-text">{{$book->book_checkin}}</h6></div>
      <div class="col s5 push-s5"><h6 class="flow-text">{{ trans('messageRg.Check-out')}}:</h5></div>
      <div class="col s5 pull-s5"><h6 class="flow-text">{{$book->book_checkout}}</h6></div>
      <div class="col s5 push-s5"><h6 class="flow-text">{{ trans('messageRg.Time') }}:</h6></div>
      <div class="col s5 pull-s5"><h6 class="flow-text">{{$book->time}}</h6></div>
       <div class="col s5 push-s5"><h6 class="flow-text">{{ trans('messageRg.Room') }}:</h6></div>
      <div class="col s5 pull-s5"><h6 class="flow-text">{{$room->roomtype_name}}</h6></div>
      <div class="col s5 push-s5"><h6 class="flow-text">{{ trans('messageRg.Name') }}:</h6></div>
      <div class="col s5 pull-s5"><h6 class="flow-text">{{$cus->cus_name}} {{$cus->cus_surname}}</h6></div>
      <div class="col s5 push-s5"><h6 class="flow-text">{{ trans('messageRg.Email') }}:</h6></div>
      <div class="col s5 pull-s5"><h6 class="flow-text">{{$cus->cus_email}}</h6></div>
      <div class="col s5 push-s5"><h6 class="flow-text">{{ trans('messageRg.Phone') }}:</h6></div>
      <div class="col s5 pull-s5"><h6 class="flow-text">{{$cus->cus_phonenumber}}</h6></div>
       <div class="col s5 push-s5"><h6 class="flow-text">{{ trans('messageRg.Grand') }}:</h6></div>
      <div class="col s5 pull-s5"><h6 class="flow-text">{{$room->roomtype_price}}{{ trans('messageRg.b') }}</h6></div>
   
     </div>
        </div>
      </div>
    </div>
  </div>       
    

      <div class="row center">
                <a href="{{url('auth/logout')}}" id="download-button" class="btn-large waves-effect waves-light  indigo darken-4"> {{ trans('messageRg.back') }}</a>
              </div>
     
     
    </body>
     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  </html>