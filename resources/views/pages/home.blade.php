<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('common.webisteName')}}</title>
    <!-- Styles -->
    <link rel="shortcut icon" href="{{ asset('images//favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images//favicon.ico') }}" type="image/x-icon">

    @if (App::getLocale() === 'ar')
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css"
        integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
        <style>
            html {
                direction: rtl;
            }
        </style>
    @else
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    @endif
    <link href="{{ asset('css/users/home.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container home-container">

        <a href="/{{App::getLocale()}}/company/" class="text-white mr-3">{{ trans('common.company')}}</a>
        @if (App::getLocale()==='ar')
        <a href="/en" class="text-white">{{ trans('common.english')}}</a>
        @else
        <a href="/ar" class="text-white">{{ trans('common.arabic')}}</a>
        @endif

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
            <a href="/{{App::getLocale()}}/get_started"
                class="text-center text-yellow home-container__start-link">{{ trans('home.getStarted')}}</a>
        </div>
    </div>
</body>

</html>