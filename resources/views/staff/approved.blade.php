@extends('index')
@section('content')
<br>
<br>
      <div class="row container">
        <div class="col s12  ">

        <div class="highlight"> </div>

        <table>
        <thead>
      
          <tr>
              <th data-field="name">เลขบัตรประชาชน</th>
              <th data-field="name">รหัสเลขห้อง</th>
              <th data-field="Last">วันที่เข้าพัก</th>
              <th data-field="Phone">วันที่ออก</th>
              <th data-field="status">สถานะ</th> 
              
          </tr>
        </thead>
   @foreach ($oder as $oder)
    </br>
        <tbody>
          <tr>
            <td>{{$oder->booking_code}}</td>
            <td>{{$oder->name_room_meeting}}</td>
            <td>{{$oder->book_checkin}}</td>
            <td>{{$oder->book_checkout}}</td>
            <td>{{$oder->status}}</td>

          </tr>
     @endforeach
        </tbody>
      </table>
            
      </div>
     </div>
     <br>

      <div class="row center">
                <a href="{{url('payments')}}" id="download-button" class="btn-large waves-effect waves-light  indigo darken-4"> {{ trans('messageRg.back') }}</a>
              </div>
     

@endsection