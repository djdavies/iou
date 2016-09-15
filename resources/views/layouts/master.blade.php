<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token --> 
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>iou - @yield('title')</title>

        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href="/css/mystyles.css">
        <link rel="stylesheet" type="text/css" href="/font-awesome-4.6.3/css/font-awesome.min.css">

        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <ul class="nav nav-pills">

                    @if(Auth::check())
                        <li role="presentation" class="active"><a href="/posts"><i class="fa fa-home fa-fw" aria-hidden="true"></i>Posts</a></li>
                        <li role="presentation"><a href="/jobs"><i class="fa fa-tasks fa-fw" aria-hidden="true"></i>Your Jobs</a></li>
                        <li role="presentation"><a href="/users/{{Auth::id()}}/proposals"><i class="fa fa-bell fa-fw aria-hidden="true"></i>Job Proposals</a></li>
                        {{--<li role="presentation"><a href="#"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Your Profile</a></li>--}}
                    @endif

                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                    <li role="presentation" class="active"><i class="fa fa-money fa-fw" aria-hidden="true" style="font-size:32px; color: #3097D1;"></i>
                        @if (Auth::check())
                            @section('credits')
                                // Will break if not logged in.
                                {{ $credits }}
                            @endsection
                        @endif
                    </li>
                </ul>
            </div> <!-- /container -->
        </nav>

        <div class="container">
            @yield('content')
        </div>
        <script src="/js/app.js"></script>
        @yield('scripts')
    </body>
</html>
