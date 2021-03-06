@include('pages.companies.includes.header')
<div class="container">

    <div class="company-form">
        <h5 class="text-white mb-3 mt-5">{{ trans('company.updateProfile') }}</h5>
        <form action="/{{App::getLocale()}}/company" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="company-form-container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input required type="text" class="form-control" name="companyName"
                                placeholder="{{ trans('placeholders.companyName') }}" value={{Auth::user()->companyName}}>
                        </div>
                        <div class="form-group">
                            <input required type="text" class="form-control" name="managerName"
                                placeholder="{{ trans('placeholders.managerName') }}" value={{Auth::user()->managerName}}>
                        </div>

                        <div class="form-group">
                            <input required type="email" class="form-control" name="email" placeholder="{{ trans('placeholders.email') }}"
                                value={{Auth::user()->email}}>
                        </div>

                        <div class="form-group">
                            <input required type="text" class="form-control" name="country" placeholder="{{ trans('placeholders.country') }}"
                                value={{Auth::user()->country}}>
                        </div>

                        <div class="form-group">
                            <input required type="text" class="form-control" name="city" placeholder="{{ trans('placeholders.city') }}"
                                value={{Auth::user()->city}}>
                        </div>



                        <div class="form-group">
                            <input required type="text" class="form-control" name="address" placeholder="{{ trans('placeholders.address') }}"
                                value={{Auth::user()->address}}>
                        </div>

                        <div class="form-group">
                            <input required type="text" class="form-control" name="landTel" placeholder="{{ trans('placeholders.landTel') }}"
                                value={{Auth::user()->landTel}}>
                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="form-group">
                            <input required type="text" class="form-control" name="mobile" placeholder="{{ trans('placeholders.mobile') }}"
                                value={{Auth::user()->mobile}}>
                        </div>

                        <div class="form-group">
                            <input required type="password" class="form-control" name="password" placeholder="{{ trans('placeholders.password') }}">
                        </div>

                        <div class="form-group">
                            <label class="mt-3">{{ trans('company.companyImageField') }} : </label>
                            <input required type="file" class="form-control" name="image">
                        </div>

                        <div class="form-group">
                            <label class="mt-3">{{ trans('common.logo') }} : </label>
                            <input required type="file" class="form-control" name="logo">
                        </div>

                        <div class="form-group ">
                            <textarea class="form-control mt-3" name="description" rows="3"
                                placeholder="{{ trans('placeholders.about') }}">{{Auth::user()->description}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn text-white" href="/company">{{ trans('common.cancel') }}</a>
            <button type="submit" class="btn text-white">{{ trans('common.save') }}</button>
        </form>
    </div>

</div>



</body>

</html>