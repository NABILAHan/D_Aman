@extends('templete')
@section('content')

<div class="row">


 <div class="col s5 offset-s2">
  <div class="col s5 push-s6"  class="pull-left ">
    <img src="{{asset('img/Lo.JPG')}}" style="display: block;transform: translate3d(-0%, 0px, 0px);height: 200px;">
  </div>
</div>
</div>


<div class="row">
  <div class="col s8 offset-s2">

    <div class="grid-example col s12 m12">
      <div class="card grey lighten-5">
        <div class="card-content indigo darken-4-text">
          <span class=" white-text card-title">Detail Booking MeetingRooms</span>
        </div>
        <div class="row">
      
          <form action="{{url('payments')}}/{{$book->id}}" method="post" >  
          <input type="hidden" name="_token" value="{{csrf_token()}}" />  
            @foreach ($c as $c)
           <div class="col s7 push-s4">
            <input id="last_name" type="text" class="validate"  readonly="true" value="{{$c->cus_name}}" ></div>
            <div class="col s4 pull-s6"><p for="last_name">{{ trans('messageRg.Name') }}</p>
            </div>
            <div class="col s7 push-s4">
             <input id="last_name" type="text" class="validate" readonly="true" value="{{$book->book_checkin}}"></div>
            <div class="col s4 pull-s6"><p for="last_name">{{ trans('messageRg.Check-in') }}</p>
            </div>

            <div class="col s7 push-s4"><input id="last_name" type="text" class="validate" readonly="true" value="{{$book->book_checkout}}"></div>
            <div class="col s4 pull-s6"><p for="last_name">{{ trans('messageRg.Check-out') }}</p>
            </div>
            <div class="col s7 push-s4"><input id="last_name" type="text" class="validate" readonly="true" value="{{$room->roomtype_name}}"></div>
            <div class="col s4 pull-s6"><p for="last_name">{{ trans('messageRg.Room') }}</p>
            </div>
            <!-- <div class="col s7 push-s4"><input id="last_name" name="status" type="text" class="validate"></div>
            <div class="col s4 pull-s6"><p for="last_name">{{ trans('messageRg.Name') }}</p>
            </div>
            <div class="col s7 push-s4"><input id="last_name" type="text" class="validate"></div>
            <div class="col s4 pull-s6"><p for="last_name">{{ trans('messageRg.Name') }}</p>
            </div> -->
          </div>
              
        </div>
      </div>
    </div>
  </div>
        


<center><button  type="submit"  class="btn large indigo darken-4 btn-default">อนุมัติ</button></center>
<br>
 @endforeach      

</div>

 
</div>

</form> 







@endsection
