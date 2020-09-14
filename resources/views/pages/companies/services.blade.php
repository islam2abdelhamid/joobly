<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

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


            {{-- {{Auth::user()->companyName}} --}}
        </ul>
    </nav>
    <nav class="nav sub-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">{{ trans('common.logout') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">{{ trans('common.edit') }}</a>
        </li>

    </nav>

    {{-- @if(Session::has('serviceAddSuccess'))
    <div class="alert alert-success" role="alert">
        {{ trans('common.'.Session::get('serviceAddSuccess')) }}
    </div>
    @endif

    @if(Session::has('companyUpdated'))
    <div class="alert alert-success" role="alert">
        {{ trans('company.'.Session::get('companyUpdated')) }}
    </div>
    @endif
    --}}




    <div class="container">
        <p class="text-white">{{ trans('company.justCreatedServices') }}</p>


        <div class="mt-5">
            <div class="service-type">
                <p>{{ trans('common.homeServices') }}</p>
            </div>
            <div class="row">
                @foreach (Auth::user()->services()->get() as $item)
                @if ($item->type === 'homeServices')
                <div class="col-md-4  mt-3">
                    <img src="{{url('/images/services/'.$item->image)}}" alt="logo" class="img-fluid" width="225" />
                    <p class="text-white wrap-text">{{ trans('services.'.$item->name) }}</p>
                    <a href="/company/services/{{$item->id}}" class="edit-btn">{{ trans('company.editServices') }}</a>
                </div>
                @endif
                @endforeach
            </div>
        </div>


        <div class="mt-5">
            <div class="service-type">
                <p>{{ trans('common.commercialServices') }}</p>
            </div>
            <div class="row">
                @foreach (Auth::user()->services()->get() as $item)
                @if ($item->type === 'commercialServices')
                <div class="col-md-4  mt-3">
                    <img src="{{url('/images/services/'.$item->image)}}" alt="logo" class="img-fluid" width="225" />
                    <p class="text-white wrap-text">{{ trans('services.'.$item->name) }}</p>
                    <a href="/company/services/{{$item->id}}" class="edit-btn">{{ trans('company.editServices') }}</a>
                </div>
                @endif
                @endforeach
            </div>
        </div>


    </div>



</body>

</html>