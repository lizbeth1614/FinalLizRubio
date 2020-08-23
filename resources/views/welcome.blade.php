<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Mobiliario de Palets

                </div>
                  <br>

                  <div class="container">

                  </div>
                  <style>
                      /* Make the image fully responsive */
                      .carousel-inner img {
                        width: 600px;
                        height: 300px;
                      }
                      </style>
                    </head>
                    <body>

                    <div id="demo" class="carousel slide" data-ride="carousel">


                      <!-- Indicators -->
                      <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                      </ul>

                      <!-- The slideshow -->
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="{{url ('/carpeta/palets1.jpg')}}" alt="Los Angeles" width= "50px" height="50px">

                        </div>
                        <div class="carousel-item">
                          <img src="{{url ('/carpeta/palets2.jpeg')}}" alt="Chicago" width="100" height="50">
                        </div>
                        <div class="carousel-item">
                          <img src="{{url ('/carpeta/palets3.jpg')}}" alt="New York" width="100" height="50">
                        </div>
                      </div>

                      <!-- Left and right controls -->
                      <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                      </a>
                      <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                      </a>
                    </div>

            </div>
        </div>
    </body>
</html>
