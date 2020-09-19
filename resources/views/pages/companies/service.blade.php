@include('pages.companies.includes.header')

<div class="container">
    @if(Session::has('serviceUpdated'))
    <div class="alert alert-success" role="alert">
        {{ trans('company.'.Session::get('serviceUpdated')) }}
    </div>
    @endif
    <div class="our-services mb-5">
        <h3 class="title text-center text-white">
            {{ trans('services.'.$service->name) }}
        </h3>
    </div>

    <img src="{{url('/images/company/services/'.$service->image)}}" class="mt-5 mx-auto d-block img-fluid">
    <p class="text-white mt-3 text-center">
        {{$service->description}}
    </p>


    @if (count($service->members()->get())>0)
    <div class="our-services">
        <h5 class="title text-center text-white">
            {{ trans('company.ourTeams') }}
        </h5>
    </div>
    <div class="row">
        @foreach ($service->members()->get() as $team)
        <div class="col-md-4">
            <img src="{{url('/images/company/services/teams/'.$team->image)}}" class="mt-5 mx-auto d-block img-fluid"
                width="200">
        </div>
        @endforeach

    </div>
    @endif

    <hr class="white-hr">
    <a href="/{{App::getLocale()}}/company/services/{{$service->id}}/edit" class="text-white">{{ trans('common.edit') }}</a>
</div>




</body>

</html>