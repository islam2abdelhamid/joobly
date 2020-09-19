@include('pages.services.includes.header')

<div class="container base-container">
    <div class="d-flex justify-content-center">
        <div class="home-container__service home-container__service text-center">
            <a href="home_services">
                <img src="{{url('/images/home_clean.png')}}" class="img-fluid" width="125">
                <h5 class="text-yellow">{{ trans('common.homeServices')}}</h5>
            </a>
        </div>
        <div class="home-container__service">
            <a href="residential_services">
                <img src="{{url('/images/commercial_clean.png')}}" class="img-fluid" width="125">
                <h5 class="text-white">{{ trans('common.commercialServices')}}</h5>
            </a>
        </div>
    </div>
    <div class="services">
        <div class="service">
            <img src="{{url('/images/services/home/woman clean.png')}}" class="img-fluid" width="80">
            <div class="service-title">
                <a href="/{{App::getLocale()}}/home_services/companies/homeCleaning">
                    {{ trans('services.homeCleaning')}}
                </a>
            </div>
        </div>
        <div class="service">
            <img src="{{url('/images/services/home/babysitter.png')}}" class="img-fluid" width="110">
            <div class="service-title">
                <a href="/{{App::getLocale()}}/home_services/companies/babySitter">
                    {{ trans('services.babySitter')}}
                </a>
            </div>
        </div>
        <div class="service">
            <img src="{{url('/images/services/home/elderry.png')}}" class="img-fluid" width="110">
            <div class="service-title">
                <a href="/{{App::getLocale()}}/home_services/companies/elderlyHealthCare">
                    {{ trans('services.elderlyHealthCare')}}
                </a>
            </div>
        </div>
        <div class="service">
            <img src="{{url('/images/services/home/Gradniner.png')}}" class="img-fluid" width="100">
            <div class="service-title">
                <a href="/{{App::getLocale()}}/home_services/companies/gardening">
                    {{ trans('services.gardening')}}
                </a>
            </div>
        </div>
        <div class="service">
            <img src="{{url('/images/services/home/Other.png')}}" class="img-fluid" width="150">
            <div class="service-title">
                <a href="/{{App::getLocale()}}/home_services/companies/other">
                    {{ trans('services.other')}}
                </a>
            </div>
        </div>
    </div>
</div>
</body>

</html>