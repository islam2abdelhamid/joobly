@include('pages.companies.includes.header')

<div class="container">
    @if(Session::has('serviceAddSuccess'))
    <div class="alert alert-success" role="alert">
        {{ trans('common.'.Session::get('serviceAddSuccess')) }}
    </div>
    @endif
    <div class="our-services">
        <h3 class="title text-white text-center">
            {{ trans('services.'.$service->name) }}
        </h3>
    </div>
    <form action="/{{App::getLocale()}}/company/services/{{$service->id}}/team" method="POST" enctype="multipart/form-data"
        enctype="multipart/form-data">
        <div class="company-form">
            @csrf
            @method('PUT')
            <div class="company-form-container">
                <div class="row">

                    <div class="col-md-8">
                        <div class="form-group">

                            <textarea class="form-control mt-3" name="description" rows="3"
                                placeholder="{{ trans('company.serviceDescriptionField') }}">{{$service->description}}</textarea>
                        </div>
                    </div>
                </div>

            </div>
            <p class="text-center text-white mt-3">
                {{ trans('company.addTeamImages') }}
            </p>


            <div class="our-services">
                <h3 class="title text-center text-white">
                    {{ trans('company.ourTeams') }}
                </h3>
            </div>


            <div class="row">
                <div class="col-md-4 mt-2"><input type="file" class="form-control" name="images[]"></div>
                <div class="col-md-4 mt-2"><input type="file" class="form-control" name="images[]"></div>
                <div class="col-md-4 mt-2"><input type="file" class="form-control" name="images[]"></div>
                <div class="col-md-4 mt-2"><input type="file" class="form-control" name="images[]"></div>
                <div class="col-md-4 mt-2"><input type="file" class="form-control" name="images[]"></div>
                <div class="col-md-4 mt-2"><input type="file" class="form-control" name="images[]"></div>
            </div>

        </div>
        <a class="btn text-white" href="/company/services/{{$service->id}}">{{ trans('common.cancel') }}</a>
        <button type="submit" class="btn text-white">{{ trans('common.save') }}</button>
    </form>

</div>



</body>

</html>