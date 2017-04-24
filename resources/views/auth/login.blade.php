<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
   <!--  <meta name="theme-color" content="#1a237e"> -->

    <title>Material UI One Page Theme</title>

    
    <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  
 
    

</head>
<br>

<body id="top" class="scrollspy">


	<div class="row-container">
	  <center><img src="{{asset('img/Lo.JPG')}}" style="display: block;transform: translate3d(-0%, 0px, 0px);height: 200px;"></center>
   <br>
   </div>

        <div class="row">
        <div class="container"></div>
    <div class="col s12">
    <div class="container"></div>
    <div class="col s12 m4 l4"></div>
    <div class="col s12 m4 l4">
   <div class="card blue lighten-5">
            <div class="card-content black-text">

			
			
				<div class="flow-text black-text ">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{url('/auth/login')}}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="flow-text">
							<label class="col-md-4 control-label black-text">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="flow-text">
							<label class="col-md-4 control-label black-text">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

					

						<div class="flow-text">
							<div class="col-md-6 col-md-offset-4 black-text">
								<button type="submit" class="waves-effect indigo darken-4 btn" >
									Login
								</button>
								</br>

							<!-- 	<div class="flow-text"> -->

								<!-- <a href="/password/email">Forgot Your Password?</a> -->
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@yield('content')


    <!--  Scripts-->
    <script src="min/plugin-min.js"></script>
    <script src="min/custom-min.js"></script>
</body>
</html>
