<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('common.webisteName')}}</title>
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/users/home.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg justify-content-between px-5">
        <a class="navbar-brand" href="/"><img src="{{url('/images/logo.png')}}" alt="logo" class="img-fluid ml-5"
                width="150" /></a>
    </nav>
    <div class="container home-container">
        <div class="d-flex justify-content-center">
            <div class="home-container__service text-center">
                <a href="home_services" class="text-hover-yellow">
                    <img src="{{url('/images/home_clean.png')}}" class="img-fluid" width="125">
                    <h5 class="text-white ">{{ trans('common.homeServices')}}</h5>
                </a>
            </div>
            <div class="home-container__service">
                <a href="residential_services" class="text-hover-yellow">
                    <img src="{{url('/images/commercial_clean.png')}}" class="img-fluid" width="125">
                    <h5 class="text-white">{{ trans('common.commercialServices')}}</h5>
                </a>
            </div>
        </div>
    </div>
</body>

</html>