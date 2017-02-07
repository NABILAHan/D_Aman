 @extends('index')

      @section('content')
    
      <section>

        <div  class="parallax-container">
          <div class="section no-pad-bot">
            <div class="container">
              <br><br>
              <h1 class="header center white-text text-white">{{ trans('meet.meeting') }}</h1>
              <div class="row center">
                <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
              </div>
              <div class="row center">
                <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
              </div>
              <br><br>

            </div>
          </div>
          <div class="parallax"><img src="img/1.JPG" alt="Unsplashed background img 1"></div>
        </div>

      </section>
      <br>
      <div class="row">
       <div class="col s12">
         <div class="row">
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="img/h4.JPG">
                <span class="card-title">Card Title</span>
              </div>
              <div class="card-content">
              <h5 >{{ trans('meet.large') }}</h5>
              <br>
              <h6 class="light-blue-text">{{ trans('meet.le') }}</h6>
              <dd><div class="title teal-text">
          <span class="fa-stack fa-lg black-text" ">
            <i class=" small material-icons">store</i>
          </span>
         {{ trans('meet.rimlay') }}
        </div>
                 <div class="title teal-text">
          <span class="fa-stack fa-lg black-text">
            <i class=" small material-icons">store</i>
          </span>
         {{ trans('meet.Leela_Y') }}
        </div></dd>
        

           
                </div>
                <div class="row center">
                <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1"> {{ trans('meet.View') }}</a>
              </div>
              </div>
            </div>
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <img src="img/h4.JPG">
                  <span class="card-title">Card Title</span>
                </div>

                <div class="card-content">
                 <h5>{{ trans('meet.Medium') }}</h5>
              <br>
              <h6 class="light-blue-text">{{ trans('meet.md') }}</h6>
              <dd><div class="title teal-text">
          <span class="fa-stack fa-lg black-text">
            <i class=" small material-icons">store</i>
          </span>
         {{ trans('meet.Pradoo') }}
        </div>
                 <div class="title teal-text">
          <span class="fa-stack fa-lg black-text">
            <i class=" small material-icons">store</i>
          </span>
         {{ trans('meet.Jaturus') }}
        </div></dd>
        </div>
                  <div class="row center">
                <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">{{ trans('meet.View') }}</a>
              </div>

                </div>
              </div>
              <div class="col s12 m4">
                <div class="card">
                  <div class="card-image">
                    <img src="img/h4.JPG">
                    <span class="card-title">Card Title</span>
                  </div>
                  <div class="card-content">
                    <h5>{{ trans('meet.Small') }}</h5>
              <br>
              <h6 class="light-blue-text">{{ trans('meet.sl') }}</h6>
              <dd><div class="title teal-text">
          <span class="fa-stack fa-lg black-text">
            <i class=" small material-icons">store</i>
          </span>
         {{ trans('meet.Leela_L') }}
        </div>
                 <div class="title teal-text">
          <span class="fa-stack fa-lg black-text">
            <i class=" small material-icons">store</i>
          </span>
         {{ trans('meet.Limnum') }}
        </div></dd>
        </div>
                    <div class="row center">
                <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">{{ trans('meet.View') }}</a>
              </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          </div>

          <div class="row">
            <div class="col s12">
             <div class="container">
              <p><h5 class=" black-text" >{{ trans('meet.a') }}{{ trans('meet.Note') }}</h5></p>
              <p class=" black-text left-align light">{{ trans('meet.N') }}</p>
              <dd><p><li class=" black-text left-align light">{{ trans('meet.room1') }}</li></p>
              <p><li class=" black-text left-align light">{{ trans('meet.room2') }}</li></p>
              <p><li class=" black-text left-align light">{{ trans('meet.room3') }}</li></p>
            </dd>
            <p class=" black-text left-align light">{{ trans('meet.if1') }}</p>
            <p class=" black-text left-align light">{{ trans('meet.if2') }}</p>
            <p class=" black-text left-align light">{{ trans('meet.if3') }}</p></div>
          </div>




          @endsection