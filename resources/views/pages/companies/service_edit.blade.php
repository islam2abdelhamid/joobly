@include('pages.companies.includes.header')
<div class="container">
    @if(Session::has('serviceAddSuccess'))
    <div class="alert alert-success" role="alert">
        {{ trans('common.'.Session::get('serviceAddSuccess')) }}
    </div>
    @endif
    <div class="company-form">
        <h5 class="text-white mb-3 mt-5">{{ trans('company.fillForm') }}</h5>
        <form action="/company/services/{{$service->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="company-form-container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input required type="text" class="form-control" name="company_name"
                                placeholder="company name" value={{$service->company_name}}>
                        </div>
                        <div class="form-group">
                            <input required type="email" class="form-control" name="email" placeholder="email"
                                value={{$service->email}}>
                        </div>
                        <div class="form-group">
                            <input required type="text" class="form-control" name="address" placeholder="address"
                                value={{$service->address}}>
                        </div>
                        <div class="form-group">
                            <input required type="text" class="form-control" name="phone" placeholder="phone"
                                value={{$service->phone}}>
                        </div>


                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <input required type="text" class="form-control" name="mobile" placeholder="mobile"
                                value={{$service->mobile}}>
                        </div>

                        <label class="mt-3">{{ trans('company.companyImageField') }} : </label>
                        <input required type="file" class="form-control" name="image">
                        <label class="mt-3">{{ trans('common.logo') }} : </label>
                        <input required type="file" class="form-control" name="logo" placeholder="logo">
                        <div class="form-group ">
                            <textarea class="form-control mt-3" name="about_company" rows="3"
                                placeholder="about company">{{$service->description}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn text-white">{{ trans('common.save') }}</button>
        </form>
    </div>

</div>



</body>

</html>