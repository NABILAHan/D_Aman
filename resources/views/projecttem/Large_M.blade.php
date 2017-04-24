@extends('index')

@section('content')

<br>


<div class="row content">

  <div class="col s12">
    <dd>
      <div class="col s12 m5 l6 ">

        <div class="card ">
          <div class="card-image">
            <img src="{{asset('img/room/mr2.JPG')}}" style="display: block;transform: translate3d(-0%, 0px, 0px);height: 400px;">

          </div>

        </div>
      </div>
    </dd>
    <div class="row center">
     <div class="col s12 m6 l5 ">

       <br>
       <br>
       <br>
       <br>
       <div class="card-content">
        <h4 >{{ trans('meet.rimlay') }}</h4>

        <h5 class="light-blue-text">{{ trans('meet.AL') }}</h5>
        <h6>
         {{ trans('meet.timeL') }}</h6>
         <h6 class=" blue-text">
           {{ trans('meet.Dt1') }}</h6>
           <h6 class=" blue-text">
             {{ trans('meet.Nt1') }}</h6>
           </div>
           <br>
           <div class="row center">
             @if (Auth::guest())
             <a class="btn-large waves-effect waves-light indigo darken-4 white-text modal-trigger" id="download-button"  href="#modal3">{{ trans('meet.Book') }}</a>
             
             @else
             
             <a class="waves-effect waves-light btn  red modal-trigger" href="{{url('/RM')}}">{{ trans('meet.Book') }}</a>
             @endif
             
           </div>
           
         </div>
         

       </div>

     </div>
   </div>
 </div>
 <div class="row content">

  <div class="col s12">
    <dd>
      <div class="col s12 m5 l6 ">

        <div class="card ">
          <div class="card-image">
            <img src="{{asset('img/room/mr1.JPG')}}" style="display: block;transform: translate3d(-0%, 0px, 0px);height: 400px;">

          </div>

        </div>
      </div>
    </dd>
    <div class="row center">
     <div class="col s12 m6 l5 ">

       <br>
       <br>
       <br>
       <br>
       <div class="card-content">
        <h4 >{{ trans('meet.Leela_Y') }}</h4>

        <h5 class="light-blue-text">{{ trans('meet.ALY') }}</h5>
        <h6>
         {{ trans('meet.timeL') }}</h6>
         <h6 class=" blue-text">
           {{ trans('meet.Dt1') }}</h6>
           <h6 class=" blue-text">
             {{ trans('meet.Nt1') }}</h6>
           </div>
           <br>
           <div class="row center">
             @if (Auth::guest())
             <a class="btn-large waves-effect waves-light indigo darken-4 white-text modal-trigger" id="download-button"  href="#modal3">{{ trans('meet.Book') }}</a>
             
             @else
             
             <a class="waves-effect waves-light btn  red modal-trigger" href="{{url('/RM')}}">{{ trans('meet.Book') }}</a>
             @endif
             
           </div>

         </div>

       </div>
     </div>
   </div>
   <div id="modal3" class="modal">
    <div class="modal-content">
     <div class="panel-heading"><h4>{{ trans('meet.Please') }}</h4></div>
     <div class="panel-body">
      

      
     </div>
   </div>
 </div>
 @endsection
