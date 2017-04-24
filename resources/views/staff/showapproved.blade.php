@extends('index')
@section('content')
<br>
<br>
      <div class="row container">
      <div class="highlight"> </div>
        <div class="col s12  ">
        <table>
        <thead>
      
          <tr>
              <th data-field="datein">Datein</th>
              <th data-field="dateout">Dateout</th>
              <th data-field="time">Time</th>
              <th data-field="room">Room</th>
          </tr>
        </thead>

    </br>
        <tbody>
          <tr>
            

            <td>{{$book->book_checkin}}</td>
            <td>{{$book->book_checkout}}</td>
            <td>{{$book->book_time}}</td>
            <td>{{$room->roomtype_name}}</td>
            
          </tr>

        </tbody>
      </table>
            
      </div>
     </div>
    
 @endforeach  
      <div class="row center">
                <a href="{{url('table')}}" id="download-button" class="btn-large waves-effect waves-light  indigo darken-4"> {{ trans('messageRg.back') }}</a>
              </div>
@endsection