<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->

   <center><img src="{{asset('img/Lo.JPG')}}" style="display: block;transform: translate3d(-0%, 0px, 0px);height: 200px;"></center>
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
    

      <div class="row center">
                <a href="{{url('table')}}" id="download-button" class="btn-large waves-effect waves-light  indigo darken-4"> {{ trans('messageRg.back') }}</a>
              </div>
     
     
    </body>

     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  </html>