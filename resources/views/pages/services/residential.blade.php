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
    <nav class="navbar navbar-expand-lg justify-content-between px-5">
        <a class="navbar-brand" href="/"><img src="{{url('/images/logo.png')}}" alt="logo" class="img-fluid ml-5"
                width="150" /></a>
    </nav>
    <div class="container base-container">
        <div class="d-flex justify-content-center">
            <div class="home-container__service home-container__service text-center">
                <a href="home_services">
                    <img src="{{url('/images/home_clean.png')}}" class="img-fluid" width="125">
                    <h5 class="text-white">{{ trans('common.homeServices')}}</h5>
                </a>
            </div>
            <div class="home-container__service">
                <a href="residential_services">
                    <img src="{{url('/images/commercial_clean.png')}}" class="img-fluid" width="125">
                    <h5 class="text-yellow">{{ trans('common.commercialServices')}}</h5>
                </a>
            </div>
        </div>
        <div class="services">
            <div class="service">
                <img src="{{url('/images/services/commercial/manclean.png')}}" class="img-fluid" width="80">
                <div class="service-title">
                    <a href="#">
                        {{ trans('services.officeCleaning')}}
                    </a>
                </div>
            </div>
            <div class="service">
                <img src="{{url('/images/services/commercial/office shifting.png')}}" class="img-fluid" width="110">
                <div class="service-title">
                    <a href="#">
                        {{ trans('services.shiftting')}}
                    </a>
                </div>
            </div>
            <div class="service">
                <img src="{{url('/images/services/commercial/disinfection.png')}}" class="img-fluid" width="110">
                <div class="service-title">
                    <a href="#">
                        {{ trans('services.sterilization')}}
                    </a>
                </div>
            </div>
            <div class="service">
                <img src="{{url('/images/services/commercial/resiptionist.png')}}" class="img-fluid" width="100">
                <div class="service-title">
                    <a href="#">
                        {{ trans('services.receptionist')}}
                    </a>
                </div>
            </div>
            <div class="service">
                <img src="{{url('/images/services/commercial/hospitality.png')}}" class="img-fluid" width="100">
                <div class="service-title">
                    <a href="#">
                        {{ trans('services.hospitality')}}
                    </a>
                </div>
            </div>
            <div class="service">
                <img src="{{url('/images/services/commercial/cooking.png')}}" class="img-fluid" width="150">
                <div class="service-title">
                    <a href="#">
                        {{ trans('services.other')}}
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>