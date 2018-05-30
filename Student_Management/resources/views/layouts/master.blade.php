<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>
    {{--<script src="{{asset('js/list-students.js')}}"></script>--}}

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
</head>
<body>
@section('header')
    <div class="container">
        <div class="col-md-12" style="background-color: #f8f9fa">
            <img class="logo"
                 src="https://t00.deviantart.net/OX2D4hANtQQbzRyA5hlc2fk1W1o=/300x200/filters:fixed_height(100,100):origin()/pre00/a35a/th/pre/i/2014/176/5/5/student_space_logo_by_nicolasmzrd-d7nz0uo.jpg"
                 alt="logo" style="width: 15%; background-color:">
        </div>
    </div>
@show
@section('nav')
    <div class="container">
        <div class="col-md-12 pl-0 pr-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
    </div>
@show

<div class="container">
    <div class="row">
        @section('content')


        @show

        {{--<script src="{{asset('js/app.js')}}"></script>--}}
        {{--<script src="{{asset('js/list-students.js')}}"></script>--}}
        <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
        <script>
            CKEDITOR.replace('summary-ckeditor');
        </script>
    </div>
</div>

</body>
</html>