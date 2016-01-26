<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>




    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">


</head>

<body >
    <nav>





        <ul id="home">
            <li><a href="{{ url('/welcome') }}">Home</a>
            </li>
        </ul>

        <ul id="logreg">

            @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Login</a>
            </li>
            <li><a href="{{ url('/register') }}">Register</a>
            </li>
            @else
            <li>
                <a href="#">
                                {{ Auth::user()->name }} 
                            </a>
 </li>
              
                    <li><a href="{{ url('/logout') }}">Logout</a>
                    </li>
             
           
            @endif
        </ul>

    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{--
    <script src="{{ elixir('js/app.js') }}"></script>--}}
</body>

</html>
