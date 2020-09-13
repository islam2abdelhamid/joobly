@extends('layouts.company.logged')

@section('content')
<nav class="nav sub-nav">
    <li class="nav-item">
        <a class="nav-link" href="#">{{ trans('common.logout') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="#">{{ trans('common.edit') }}</a>
    </li>

</nav>

@if(Session::has('serviceAddSuccess'))
<div class="alert alert-success" role="alert">
    {{ trans('common.'.Session::get('serviceAddSuccess')) }}
</div>
@endif

@if(Session::has('companyUpdated'))
<div class="alert alert-success" role="alert">
    {{ trans('company.'.Session::get('companyUpdated')) }}
</div>
@endif





<div class="container">
    <p class="text-white">{{ trans('company.chooseServices') }}</p>

    <form action="/company/services" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="service text-center">
                    <p>{{ trans('common.homeServices') }}</p>
                </div>

                @foreach ($services as $service)
                @if ($service->type === 'homeServices' || $service->type === 'other')
                <div class="service">
                    <div class="form-check">
                        <input id="my-input" class="form-check-input" type="checkbox" name="services[]"
                            value={{$service->id}}>
                        <label for="my-input" class="form-check-label">{{ 
                            trans('services.'.$service->name) 
                            }}</label>
                    </div>
                </div>
                @endif
                @endforeach

            </div>


            <div class="col-md-6">
                <div class="service text-center">
                    <p>{{ trans('common.commercialServices') }}</p>

                </div>

                @foreach ($services as $service)
                @if ($service->type === 'commercialServices' || $service->type === 'other')
                <div class="service">
                    <div class="form-check">
                        <input id="my-input" class="form-check-input" type="checkbox" name="services[]"
                            value={{$service->id}}>
                        <label for="my-input" class="form-check-label">{{ 
                                        trans('services.'.$service->name) 
                                        }}</label>
                    </div>
                </div>
                @endif
                @endforeach


            </div>


        </div>
        <button type="submit" class="btn btn-default btn-block">{{ trans('common.save') }}</button>
    </form>


    <div class="company-form">
        <h5 class="text-white">{{ trans('company.fillForm') }}</h5>
        <form action="{!! url('company/update', Auth::user()) !!}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="company-form-container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="landTel" placeholder="phone">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="mobile" placeholder="mobile">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="companyName" placeholder="company name">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <select class="form-control" name="category">
                                    <option> {{ trans('common.serviceType') }} </option>
                                    <option value="homeCleaning"> {{ trans('services.homeCleaning') }} </option>
                                    <option value="babySitter"> {{ trans('services.babySitter') }} </option>
                                    <option value="babySitter"> {{ trans('services.babySitter') }} </option>
                                    <option value="elderlyHealthCare"> {{ trans('services.elderlyHealthCare') }}
                                    </option>
                                    <option value="gardening"> {{ trans('services.gardening') }} </option>
                                    <option value="other"> {{ trans('services.other') }} </option>
                                </select>
                            </div>
                            <input type="text" class="form-control" name="managerName" placeholder="manager name">
                            <input type="file" class="form-control" name="image" placeholder="logo">
                        </div>
                        <div class="form-group ">
                            <textarea class="form-control" name="description" rows="3"
                                placeholder="about company"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn text-white">{{ trans('common.save') }}</button>
        </form>
    </div>



    <div class="our-services mt-5">
        <h1 class="text-center text-white title">{{ trans('company.ourServices') }}</h1>
        <p class="text-center text-white">
            {{Auth::user()->description}}
        </p>
    </div>



    <div class="row">
        @foreach (Auth::user()->services()->get() as $item)
        <div class="col-md-4 text-center mt-3">
            <img src="{{url('/images/services/'.$item->image)}}" alt="logo" class="img-fluid" width="150" />
            <h5 class="text-white">{{$item->name}}</h5>
            <p class="text-white">{{$item->description}}</p>
        </div>
        @endforeach
    </div>


</div>



@endsection