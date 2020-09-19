@include('pages.companies.includes.header')

<div class="container m-3">
    <p class="text-white">{{ trans('company.justCreatedServices') }}</p>


    <div class="mt-5">
        <div class="service-type">
            <p>{{ trans('common.homeServices') }}</p>
        </div>
        <div class="row">
            @foreach (Auth::user()->services()->get() as $item)
            @if ($item->type === 'homeServices')
            <div class="col-md-4  mt-3">
                <img src="{{url('/images/company/services/'.$item->image)}}" alt="logo" class="img-fluid" width="225" />
                <div class="my-3">
                    <a href="/{{App::getLocale()}}/company/services/{{$item->id}}"
                        class="text-white">{{ trans('services.'.$item->name) }}</a>
                </div>
                <a href="/{{App::getLocale()}}/company/services/{{$item->id}}/edit" class="edit-btn">{{ trans('company.editServices') }}</a>
            </div>
            @endif
            @endforeach
        </div>
    </div>


    <div class="mt-5">
        <div class="service-type">
            <p>{{ trans('common.commercialServices') }}</p>
        </div>
        <div class="row">
            @foreach (Auth::user()->services()->get() as $item)
            @if ($item->type === 'commercialServices')
            <div class="col-md-4  mt-3">
                <img src="{{url('/images/company/services/'.$item->image)}}" alt="logo" class="img-fluid" width="225" />
                <p class="text-white wrap-text">{{ trans('services.'.$item->name) }}</p>
                <a href="/{{App::getLocale()}}/company/services/{{$item->id}}/edit" class="edit-btn">{{ trans('company.editServices') }}</a>
            </div>
            @endif
            @endforeach
        </div>
    </div>


</div>



</body>

</html>