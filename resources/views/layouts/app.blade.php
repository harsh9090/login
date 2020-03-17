<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-left">
                       
                        @if (!Auth::guest())
                                <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> Hi, {{ Auth::user()->name }} Logout here
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></font>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
        @if (!Auth::guest())
            <a href="{{ url('/logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"> Hi, {{ Auth::user()->name }} Logout here
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form></font>
        @endif
    </div>

    <script src="/js/app.js"></script>
</body>
</html>
