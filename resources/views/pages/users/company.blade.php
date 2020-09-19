@include('pages.users.includes.header')

<section id="home">
    <div class="container">
        <img src="{{url('/images/company/'.$company->image)}}" class="mt-5 mx-auto d-block img-fluid">
    </div>
</section>


<section id="services">
    <div class="container">
        <div class="our-services mb-5">
            <h3 class="title text-center text-white">
                {{ trans('company.ourServices') }}
            </h3>
        </div>
        <p class="text-white mt-3 text-center">
            {{$company->description}}
        </p>

        <div class="row">
            @foreach ($services as $item)
            <div class="col-md-4  mt-3 text-center">
                <img src="{{url('/images/company/services/'.$item->image)}}" alt="logo" class="img-fluid" width="225" />
                <div class="my-1">
                    <a href="/{{App::getLocale()}}/companies/{{$company->id}}/services/{{$item->id}}"
                        class="text-white">{{ trans('services.'.$item->name) }}</a>
                </div>
                <a href="/{{App::getLocale()}}/companies/{{$company->id}}/services/{{$item->id}}"
                    class="text-white">{{ trans('common.learnMore') }}</a>
            </div>
            @endforeach
        </div>
    </div>
</section>


@if (count($company->discounts()->get())>0)
<section id="offers">
    <div class="container">
        <div class="our-services mb-5">
            <h3 class="title text-center text-white">
                {{ trans('common.discounts') }}
            </h3>
        </div>
        <p class="text-white mt-3 text-center">
            {{$company->discount_description}}
        </p>


        <div class="row">
            @foreach ($company->discounts()->get() as $item)
            <div class="col-md-4  mt-3 text-center">
                <div style="height: 10rem;
                                    background: {{$item->color}};
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    border-radius:10px">
                    <h3 class="text-center text-white">
                        {{$item->name}}
                    </h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<section id="contact" class="mt-5">
    <div class="container">
        <div class="our-services mb-5">
            <h3 class="title text-center text-white">
                {{ trans('common.contact') }}
            </h3>
        </div>
    </div>
    <div class="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="item">
                        <strong class="label">
                            {{ trans('company.companyName') }}:
                        </strong>
                        <span>{{$company->companyName}}</span>
                    </div>
                    <div class="item">
                        <strong class="label">
                            {{ trans('company.address') }}:
                        </strong>
                        <span>{{$company->address}}</span>
                    </div>

                    <div class="item">
                        <strong class="label">
                            {{ trans('company.email') }}:
                        </strong>
                        <span>{{$company->email}}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item">
                        <strong class="label">
                            {{ trans('company.mobileNumber') }}:
                        </strong>
                        <span>{{$company->mobile}}</span>
                    </div>
                    <div class="item">
                        <strong class="label">
                            {{ trans('company.landTel') }}:
                        </strong>
                        <span>{{$company->landTel}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('pages.users.includes.footer')