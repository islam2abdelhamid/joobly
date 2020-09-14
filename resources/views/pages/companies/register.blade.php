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
    <link href="{{ asset('css/company/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <header id="topNavbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 topRightMenu">
                    <div class="sign ml-lg-auto">
                        <a href="login" class="mr-5">{{ trans('company.signIn')}}</a>
                        <a href="register" class="mr-5">{{ trans('company.signUp')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="signIn">
        <div class="container">


            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="row">
                <div class="col-md-6">
                    <p class="h4 mb-3"> {{trans('company.companyServicesProvider')}}</p>
                </div>
                <div class="col-md-6">
                    <div class="loginWithSocial">
                        <p>{{ trans('company.loginWithSocialLinks')}}</p>
                        <a href="" class="loginFacebook">
                            <img src="{{url('/images/company/facebook.png')}}" alt="facebook">
                            <span>{{ trans('company.loginWithFacebook')}}</span>
                        </a>
                        <a href="" class="loginGoogle">
                            <img src="{{url('/images/company/search.png')}}" alt="google">
                            <span>{{ trans('company.loginWithGoogle')}}</span>
                        </a>
                    </div>
                </div>
            </div>
            <form class="form-group" action="/company/register" method="POST">
                @csrf
                <label><i class="fas fa-star-of-life"></i>{{ trans('company.managerName')}}</label>
                <input type="text" class="form-control" name="managerName"
                    placeholder={{ trans('company.managerName')}}>

                <label><i class="fas fa-star-of-life"></i>{{ trans('company.companyName')}}</label>
                <input type="text" class="form-control" name="companyName"
                    placeholder={{ trans('company.companyName')}}>


                <div class="row">
                    <div class="col-md-6">
                        <label><i class="fas fa-star-of-life"></i>{{ trans('company.mobileNumber')}}</label>
                        <input type="text" class="form-control" name="mobile"
                            placeholder={{ trans('company.mobileNumber')}}>
                    </div>
                    <div class="col-md-6">
                        <label><i class="fas fa-star-of-life"></i>{{ trans('company.landTel')}}</label>
                        <input type="text" class="form-control" name="landTel"
                            placeholder={{ trans('company.landTel')}}>
                    </div>
                </div>

                <label><i class="fas fa-star-of-life"></i>{{ trans('company.email')}}</label>
                <input type="email" class="form-control" name="email" placeholder={{ trans('company.email')}}>


                <div class="row">
                    <div class="col-md-4">
                        <label class="mt-2 mt-lg-0">* {{ trans('company.country')}}</label>
                        <select class="selectpicker form-control" name="country">
                            <option>South Africa</option>
                            <option>Cameron</option>
                            <option>Kenyan</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="mt-2 mt-lg-0">* {{ trans('company.city')}}</label>
                        <select class="selectpicker form-control" name="city">
                            <option>South Africa</option>
                            <option>Cameron</option>
                            <option>Kenyan</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="mt-2">{{ trans('company.address')}}</label>
                        <input type="text" class="form-control" placeholder={{ trans('company.address')}}
                            name="address">
                    </div>
                </div>
                <label class="mt-2 mt-lg-0">* {{ trans('company.category')}}</label>

                <select class="selectpicker form-control" name="category">
                    <option> {{ trans('common.serviceType') }} </option>
                    <option value="homeCleaning"> {{ trans('services.homeCleaning') }} </option>
                    <option value="babySitter"> {{ trans('services.babySitter') }} </option>
                    <option value="elderlyHealthCare"> {{ trans('services.elderlyHealthCare') }}
                    </option>
                    <option value="gardening"> {{ trans('services.gardening') }} </option>
                    <option value="other"> {{ trans('services.other') }} </option>
                </select>

                <label><i class="fas fa-star-of-life"></i> {{ trans('company.password')}}</label>
                <input type="password" class="form-control" placeholder={{ trans('company.password')}} name="password">

                <label><i class="fas fa-star-of-life"></i> {{ trans('company.description')}}</label>
                <textarea class="form-control" name="description"></textarea>


                <div class="mt-4">
                    <button class="btn btn-primary float-right">{{ trans('company.signUp')}}</button>
                </div>
            </form>

        </div>
    </div>
    </div>
</body>

</html>