<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/users/home.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container home-container">
        <a href="#" class="text-white">{{ trans('common.arabic')}}</a>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <img src="{{url('/images/logo.png')}}" alt="logo" class="img-fluid ml-5" width="250" />
            <h1 class="text-center text-white text-uppercase mt-3">
                {{ trans('home.homeTitle')}}
            </h1>
            <p class="text-yellow text-center home-container__subtitle">
                {{ trans('home.homeSubtitle1')}}
                <br />
                {{ trans('home.homeSubtitle2')}}
            </p>

        </div>
        <div class="d-flex justify-content-center">
            <div class="home-container__service text-center">
                <img src="{{url('/images/home_clean.png')}}" class="img-fluid" width="125">
                <h5 class="text-white">{{ trans('common.homeServices')}}</h5>
            </div>
            <div class="home-container__service">
                <img src="{{url('/images/commercial_clean.png')}}" class="img-fluid" width="125">
                <h5 class="text-white">{{ trans('common.commercialServices')}}</h5>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <a href="/get_started"
                class="text-center text-yellow home-container__start-link">{{ trans('home.getStarted')}}</a>
        </div>
    </div>
</body>

</html>