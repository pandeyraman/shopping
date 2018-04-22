<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', "Shopping") }}</title>

    <!--styles-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body class="">
    <div class="body">
        <div class="">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Shopping</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('customer.index') }}">Customer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('product.index')}}">Product</a>
                        </li>
                        <li class="nav-item text-right">
                            <a href="{{ route('logout') }}" class="nav-link text-right"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style=" display: none">
                {{ csrf_field() }}
            </form>

            <div class="right container_col container" role="main">
                <div class="x_panel">
                    @yield('content')
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div>
    <footer class="footer bg-dark">
        <div class="container text-center">
            <span class="text-muted text-center">Copyright @2018</span>
        </div>
    </footer>
<script src="{{ asset("js/app.js") }}"></script>
@yield('script')
</body>
</html>