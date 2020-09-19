@include('pages.users.includes.header')
<div class="container mt-5">


    @if(Session::has('orderSuccess'))
    <div class="alert alert-success" role="alert">
        {{ trans('common.'.Session::get('orderSuccess')) }}
    </div>
    @endif


    <div class="row">
        <div class="col-md-8">
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
                    <img src="{{url('/images/company/services/teams/'.$team->image)}}"
                        class="mt-5 mx-auto d-block img-fluid" width="200">
                </div>
                @endforeach

            </div>
            @endif


            <div class="book-form mt-5">
                <div class="form-title">
                    <h4>{{ trans('company.bookThisService') }}</h4>
                </div>
                <hr>
                <div class="form-body">
                    <form action="/{{App::getLocale()}}/services/book" method="POST">
                        @csrf
                        @method('POST')

                        <h6>{{ trans('company.contactInfo') }}</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control mt-2" type="text" name="name"
                                    placeholder="{{ trans('placeholders.name') }}">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control mt-2" type="text" name="address"
                                    placeholder="{{ trans('placeholders.address') }}">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control mt-2" type="text" name="mobile"
                                    placeholder="{{ trans('placeholders.mobile') }}">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control mt-2" type="email" name="email"
                                    placeholder="{{ trans('placeholders.email') }}">
                            </div>
                        </div>
                        <hr>

                        <div class="form-group mt-3">
                            <label for="my-textarea">{{ trans('company.bookDescription') }}</label>
                            <textarea id="my-textarea" class="form-control" name="description" rows="5"
                                cols="100"></textarea>
                        </div>

                        <hr>
                        <div class="form-group">
                            <label for="service_date">{{ trans('company.whenToGetService') }}</label>
                            <input id="service_date" class="form-control" type="date" name="date">
                        </div>

                        <p class="text-center">
                            {{ trans('company.confirmBook') }}
                        </p>
                        <hr>

                        <div class="form-group">
                            <label for="my-select">{{ trans('company.requestedService') }}</label>
                            <select id="my-select" class="form-control" name="service">
                                @foreach ($services as $item)
                                <option value="{{ $item->id }}">{{ trans('services.'.$item->name) }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="d-flex">
                            <button class="btn book-btn" type="submit">
                                {{ trans('company.bookNow') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">

            <img src="{{url('/images/google/google1.png')}}" class="img-fluid" width="250">
            <img src="{{url('/images/google/google2.png')}}" class="img-fluid mt-5" width="250">

        </div>

    </div>

</div>

@include('pages.users.includes.footer')