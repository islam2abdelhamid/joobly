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
    <link href="{{ asset('css/company/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/company/css/main.css') }}" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg justify-content-between px-5">
        <a class="navbar-brand" href="/"><img src="{{url('/images/logo.png')}}" alt="logo" class="img-fluid ml-5"
                width="150" /></a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link link" href="#">
                    {{ trans('common.english')}}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link link" href="#">
                    {{ trans('common.arabic')}}
                </a>
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
            <a class="nav-link" href="/company">{{ trans('common.home') }}</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/company/services">{{ trans('common.services') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/company/discounts">{{ trans('common.discounts') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/company/orders">{{ trans('common.orders') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/company/profile">{{ trans('common.profile') }}</a>
        </li>
    
        <li class="nav-item">
            <a class="nav-link" href="/company/logout">{{ trans('common.logout') }}</a>
        </li>
    </nav>