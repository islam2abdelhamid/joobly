<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ trans('common.webisteName')}}
    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="shortcut icon" href="{{ asset('images//favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images//favicon.ico') }}" type="image/x-icon">
    @if (App::getLocale() === 'ar')
    <link href="{{ asset('css/company/css/bootstrap.ar.min.css') }}" rel="stylesheet">

    @else
    <link href="{{ asset('css/company/css/bootstrap.min.css') }}" rel="stylesheet">
    @endif
    <link href="{{ asset('css/company/css/main.css') }}" rel="stylesheet">



</head>

<body>
    <nav class="navbar navbar-expand-lg justify-content-between px-5">
        <a class="navbar-brand" href="/"><img src="{{url('/images/logo.png')}}" alt="logo" class="img-fluid ml-5"
                width="150" /></a>
        <ul class="navbar-nav">

            <li class="nav-item">
                @if (App::getLocale()==='ar')
                <a class="nav-link link" href="/en/company" class="text-white">{{ trans('common.english')}}</a>
                @else
                <a class="nav-link link" href="/ar/company" class="text-white">{{ trans('common.arabic')}}</a>
                @endif

            </li>

            <li class="company-info">
                <a class="nav-link link" href="#">
                    {{Auth::user()->companyName}}
                </a>
                <img src="{{url('/images/company/')}}/{{Auth::user()->logo}}" class="img-fluid" width="50">
            </li>
        </ul>
    </nav>
    <nav class="nav sub-nav">

        <li class="nav-item">
            <a class="nav-link" href="/{{App::getLocale()}}/company">{{ trans('common.home') }}</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/{{App::getLocale()}}/company/services">{{ trans('common.services') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/{{App::getLocale()}}/company/discounts">{{ trans('common.discounts') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/{{App::getLocale()}}/company/orders">{{ trans('common.orders') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/{{App::getLocale()}}/company/profile">{{ trans('common.profile') }}</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/{{App::getLocale()}}/company/logout">{{ trans('common.logout') }}</a>
        </li>
    </nav>