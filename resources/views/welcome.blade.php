<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Enter CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'StudentCorner') }}</title>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>


      <script>
           addEventListener("load", function () {
               setTimeout(hideURLbar, 0);
           }, false);

           function hideURLbar() {
               window.scrollTo(0, 1);
           }
       </script>

      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


      <!-- Styles -->

      <link href="{{ asset('css/style.css') }}" rel="stylesheet">


      <!-- Custom Theme files -->

      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
      <!-- //Custom Theme files -->
      <!-- web font -->
      <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
      <!-- //web font -->

      <!-- Bootstrap -->
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
      <!-- Bootstrap -->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #4d5254;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100%;
                margin: 0;
                background: #0250c5;
                background: -webkit-linear-gradient(bottom , #ffffff, #ffffff);
                background: -o-linear-gradient(bottom, ##ffffff, #ffffff);
                background: -moz-linear-gradient(bottom, #ffffff, #ffffff);
                background: linear-gradient(bottom, #ffffff, #d43f8d);
                position: relative;
                z-index: 1;
                overflow:hidden;
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
                color: #ffffff;
            }

            .title {
                font-size: 84px;
            }

            .links > a,p {

                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                color: #ffffff;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid" style="background-color:#343a40">
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

            <div class="w3layouts-main">
              <br><br><br><br>
                  <div class="header-main" style="max-width: 750px; max-height:auto; ">
                      <div class="bg-layer" style="max-width: 750px; max-height:1200px !important; min-height: 100px; */">
                    <div class="card-body">

            <div class="content">
                <div class="title m-b-md">
                    StudentCorner
                </div>

                <div class="links">
                    <p>A place where you can find all your notes</p>
                  </div>
              </div>
            </div>
        </div>
        </div>
        </div>
      </div>

    </body>
</html>
