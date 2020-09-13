@extends('layouts.base')

@section('content')
<div class="container base-container">
    <div class="d-flex justify-content-center">
        <div class="home-container__service text-center">
            <a href="home_services">
                <img src="{{url('/images/home_clean.png')}}" class="img-fluid" width="125">
                <h5 class="text-white">{{ trans('common.homeServices')}}</h5>
            </a>
        </div>
        <div class="home-container__service">
            <a href="residential_services">
                <img src="{{url('/images/commercial_clean.png')}}" class="img-fluid" width="125">
                <h5 class="text-white">{{ trans('common.commercialServices')}}</h5>
            </a>
        </div>
    </div>
</div>
@endsection