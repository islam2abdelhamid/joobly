@include('pages.companies.includes.header')

<div class="container">
    @if(Session::has('serviceAddSuccess'))
    <div class="alert alert-success" role="alert">
        {{ trans('common.'.Session::get('serviceAddSuccess')) }}
    </div>
    @endif


    <div class="company-form mt-5">
        <div class="service-type mb-3">
            <p>{{ trans('company.address') }}</p>
        </div>
        <h5 class="text-white">{{ trans('company.fillContactForm') }}</h5>
        <form action="/{{App::getLocale()}}/company/services/{{$service->id}}/contact" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="company-form-container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input required type="text" class="form-control" name="contact_company_name"
                                placeholder="company name">
                        </div>
                        <div class="form-group">
                            <input required type="text" class="form-control" name="contact_phone" placeholder="phone">
                        </div>
                        <div class="form-group">
                            <input required type="text" class="form-control" name="contact_mobile" placeholder="mobile">
                        </div>
                        <div class="form-group">
                            <input required type="email" class="form-control" name="contact_email" placeholder="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input required type="text" class="form-control" name="contact_address"
                                placeholder="address">
                        </div>
                        <div class="form-group ">
                            <textarea class="form-control mt-3" name="contact_social" rows="3"
                                placeholder="social media links"></textarea>
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