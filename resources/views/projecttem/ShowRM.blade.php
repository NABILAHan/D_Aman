@extends('index')

@section('content')

 <div class="row">
 @foreach($cus as $v)
 				<label class="col s3">Email: </label>
            		<div class="col s9">
              			{{$v->cus_name}} {{$v->cus_surname}}

              		</div>
        	</div>
            	<label class="col s3">Email: </label>
              {{$v->cus_email}}
            		<div class="col s9">
   
   
    @endforeach
              		</div>
        	</div>



  @endsection

