@extends('layouts.company.guest')

@section('content')
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
        <form class="form-group" action="/company/login" method="POST">
            @csrf



            <label><i class="fas fa-star-of-life"></i>{{ trans('company.email')}}</label>
            <input type="email" class="form-control" name="email" placeholder={{ trans('company.email')}}>


            <label><i class="fas fa-star-of-life"></i> {{ trans('company.password')}}</label>
            <input type="password" class="form-control" placeholder={{ trans('company.password')}} name="password">



            <div class="mt-4">
                <button class="btn btn-primary float-right">{{ trans('company.signIn')}}</button>
            </div>
        </form>

    </div>
</div>
</div>
@endsection