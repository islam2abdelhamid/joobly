<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('common.webisteName')}}</title>
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
                <input required type="text" class="form-control" name="managerName"
                    placeholder={{ trans('company.managerName')}}>

                <label><i class="fas fa-star-of-life"></i>{{ trans('company.companyName')}}</label>
                <input required type="text" class="form-control" name="companyName"
                    placeholder={{ trans('company.companyName')}}>


                <div class="row">
                    <div class="col-md-6">
                        <label><i class="fas fa-star-of-life"></i>{{ trans('company.mobileNumber')}}</label>
                        <input required type="text" class="form-control" name="mobile"
                            placeholder={{ trans('company.mobileNumber')}}>
                    </div>
                    <div class="col-md-6">
                        <label><i class="fas fa-star-of-life"></i>{{ trans('company.landTel')}}</label>
                        <input required type="text" class="form-control" name="landTel"
                            placeholder={{ trans('company.landTel')}}>
                    </div>
                </div>

                <label><i class="fas fa-star-of-life"></i>{{ trans('company.email')}}</label>
                <input required type="email" class="form-control" name="email" placeholder={{ trans('company.email')}}>


                <div class="row">
                    <div class="col-md-4">
                        <label class="mt-2 mt-lg-0">* {{ trans('company.country')}}</label>
                        <input required type="text" class="form-control" name="country"
                            placeholder={{ trans('company.country')}}>
                    </div>

                    <div class="col-md-4">
                        <label class="mt-2 mt-lg-0">* {{ trans('company.city')}}</label>
                        <input required type="text" class="form-control" name="city"
                            placeholder={{ trans('company.city')}}>
                    </div>

                    <div class="col-md-4">
                        <label class="mt-2 mt-lg-0">* {{ trans('company.address')}}</label>
                        <input required type="text" class="form-control" name="address"
                            placeholder={{ trans('company.address')}}>
                    </div>

                </div>

                <label><i class="fas fa-star-of-life"></i> {{ trans('company.password')}}</label>
                <input required type="password" class="form-control" placeholder={{ trans('company.password')}}
                    name="password">

                <label><i class="fas fa-star-of-life"></i> {{ trans('company.description')}}</label>
                <textarea class="form-control" name="description"></textarea>


                <div class="mt-4">
                    <button class="btn btn-primary float-right">{{ trans('company.signUp')}}</button>
                </div>
            </form>

        </div>
    </div>
    </div>


    <script>
        async function fetchCountries() {
          let response = await fetch('http://country.io/names.json');
            console.log(response);  
        } 
        fetchCountries();
    </script>
</body>

</html>