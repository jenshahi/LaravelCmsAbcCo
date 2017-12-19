<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Project2</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


</head>
<body>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}">Project2</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About Us</a></li>

            {{--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="{{ url('/about') }}">About Us<span class="caret"></span></a>--}}
                {{--<ul class="dropdown-menu">--}}
                    {{--<li><a href="#">Our Mission</a></li>--}}
                    {{--<li><a href="#">Our Vision</a></li>--}}
                    {{--<li><a href="#">Our Projects</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
        </ul>

        @if (Route::has('login'))
            <ul class="nav navbar-nav navbar-right">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                    <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span>Login</a></li>
                    <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span>Register</a></li>
                    @endauth
            </ul>
        @endif

    </div>
</nav>

@yield('content')

</body>
</html>
