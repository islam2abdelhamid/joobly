<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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



    <div class="container">
        @if(Session::has('serviceUpdated'))
        <div class="alert alert-success" role="alert">
            {{ trans('company.'.Session::get('serviceUpdated')) }}
        </div>
        @endif


        <div class="company-form mt-5">
            <h5 class="text-white">{{ trans('company.createDiscount') }}</h5>
            <div class="service-type mb-3">
                <p>{{ trans('company.discounts') }}</p>
            </div>
            <form action="/company/services/{{$service->id}}/contact" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="company-form-container">

                    <div class="form-group ">
                        <textarea class="form-control mt-3" name="discount_description" rows="3"
                            placeholder="{{ trans('company.discountDescription') }}"></textarea>
                    </div>

                    {{-- 
                    <div class="form-group">
                        <input type="text" class="form-control" name="contact_address" placeholder="address">
                    </div> --}}

                </div>
                <button type="submit" class="btn text-white">{{ trans('common.save') }}</button>
            </form>
        </div>

    </div>



</body>

</html>