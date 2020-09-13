@extends('layouts.base')

@section('content')
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
@endsection