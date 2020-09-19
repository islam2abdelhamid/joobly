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
    <nav class="navbar navbar-expand-lg justify-content-between px-5">
        <a class="navbar-brand" href="/"><img src="{{url('/images/logo.png')}}" alt="logo" class="img-fluid ml-5"
                width="150" /></a>
    </nav>