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
              <th data-field="id">รหัส</th>
              <th data-field="name">ชื่อ</th>
              <th data-field="Last">นางสกุล</th>
              <th data-field="Phone">หมายเลขโทรศัพท์</th>
              <th data-field="status">สถานะ</th> 
              
          </tr>
        </thead>
   @foreach ($cus as $index => $customers)
    </br>
        <tbody>
          <tr>
            <td>{{$index+1}}</td>
            <td>{{$customers->cus_name}}</td>
            <td>{{$customers->cus_surname}}</td>
            <td> {{$customers->cus_phonenumber}}</td>
 

<td><a href="{{url('payments')}}/{{$customers->id}}">รอการอนุมัติ</a></td>


  
 
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