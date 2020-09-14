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

        @if(Session::has('serviceAddSuccess'))
        <div class="alert alert-success" role="alert">
            {{ trans('common.'.Session::get('serviceAddSuccess')) }}
        </div>
        @endif


        <p class="text-white">{{ trans('company.chooseServices') }}</p>

        <form action="/company/services" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="service text-center">
                        <p>{{ trans('common.homeServices') }}</p>
                    </div>

                    <div class="service">
                        <div class="form-check">
                            <input @if (in_array("homeCleaning", $userServices)) checked @endif id="my-input"
                                class="form-check-input" type="checkbox" name="services[]"
                                value="homeServices-homeCleaning">
                            <label for="my-input" class="form-check-label">{{ 
                            trans('services.homeCleaning') 
                            }}</label>
                        </div>
                    </div>

                    <div class="service">
                        <div class="form-check">
                            <input @if (in_array("elderlyHealthCare", $userServices)) checked @endif id="my-input"
                                class="form-check-input" type="checkbox" name="services[]"
                                value="homeServices-elderlyHealthCare">
                            <label for="my-input" class="form-check-label">{{ 
                            trans('services.elderlyHealthCare') 
                            }}</label>
                        </div>
                    </div>

                    <div class="service">
                        <div class="form-check">
                            <input @if (in_array("babySitter", $userServices)) checked @endif id="my-input"
                                class="form-check-input" type="checkbox" name="services[]"
                                value="homeServices-babySitter">
                            <label for="my-input" class="form-check-label">{{ 
                            trans('services.babySitter') 
                            }}</label>
                        </div>
                    </div>

                    <div class="service">
                        <div class="form-check">
                            <input @if (in_array("gardening", $userServices)) checked @endif id="my-input"
                                class="form-check-input" type="checkbox" name="services[]"
                                value="homeServices-gardening">
                            <label for="my-input" class="form-check-label">{{ 
                            trans('services.gardening') 
                            }}</label>
                        </div>
                    </div>

                    <div class="service">
                        <div class="form-check">
                            <input @if (in_array("other", $userServices)) checked @endif id="my-input"
                                class="form-check-input" type="checkbox" name="services[]" value="homeServices-other">
                            <label for="my-input" class="form-check-label">{{ 
                            trans('services.other') 
                            }}</label>
                        </div>
                    </div>

                </div>


                <div class="col-md-6">
                    <div class="service text-center">
                        <p>{{ trans('common.commercialServices') }}</p>
                    </div>

                    <div class="service">
                        <div class="form-check">
                            <input @if (in_array("cleaningFacilities", $userServices)) checked @endif id="my-input"
                                class="form-check-input" type="checkbox" name="services[]"
                                value="commercialServices-cleaningFacilities">
                            <label for="my-input" class="form-check-label">
                                {{trans('services.cleaningFacilities')}}
                            </label>
                        </div>
                    </div>

                    <div class="service">
                        <div class="form-check">
                            <input @if (in_array("transferIsolation", $userServices)) checked @endif id="my-input"
                                class="form-check-input" type="checkbox" name="services[]"
                                value="commercialServices-transferIsolation">
                            <label for="my-input" class="form-check-label">
                                {{trans('services.transferIsolation')}}
                            </label>
                        </div>
                    </div>

                    <div class="service">
                        <div class="form-check">
                            <input @if (in_array("sterilization", $userServices)) checked @endif id="my-input"
                                class="form-check-input" type="checkbox" name="services[]"
                                value="commercialServices-sterilization">
                            <label for="my-input" class="form-check-label">
                                {{trans('services.sterilization')}}
                            </label>
                        </div>
                    </div>

                    <div class="service">
                        <div class="form-check">
                            <input @if (in_array("receptionist", $userServices)) checked @endif id="my-input"
                                class="form-check-input" type="checkbox" name="services[]"
                                value="commercialServices-receptionist">
                            <label for="my-input" class="form-check-label">
                                {{trans('services.receptionist')}}
                            </label>
                        </div>
                    </div>

                    <div class="service">
                        <div class="form-check">
                            <input @if (in_array("other", $userServices)) checked @endif id="my-input"
                                class="form-check-input" type="checkbox" name="services[]"
                                value="commercialServices-other">
                            <label for="my-input" class="form-check-label">
                                {{trans('services.other')}}
                            </label>
                        </div>
                    </div>



                </div>


            </div>
            <button type="submit" class="btn btn-default btn-block">{{ trans('common.next') }}</button>
        </form>




    </div>



</body>

</html>