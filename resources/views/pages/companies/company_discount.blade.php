@include('pages.companies.includes.header')


<div class="container">


    <div class="company-form mt-5">
        <h5 class="text-white">{{ trans('company.createDiscount') }}</h5>
        <div class="service-type mb-3">
            <p>{{ trans('company.discounts') }}</p>
        </div>

        <form action="/company/discounts" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="company-form-container">

                <div class="form-group ">

                    @if (trim(Auth::user()->discount_description)!=="")

                    <textarea class="form-control mt-3" name="discount_description" rows="3"
                        placeholder="{{ trans('company.discountDescription')}}">{{Auth::user()->discount_description}}</textarea>

                    @else
                    <textarea class="form-control mt-3" name="discount_description" rows="3"
                        placeholder="{{trans('company.discountDescription')}}"></textarea>
                    @endif

                </div>

                <p>{{ trans('company.addDiscount') }}</p>
                <div class="row">



                    <div class="col-md-4">
                        <div class="form-group">
                            <input required type="text" class="form-control" name="discount1[]" placeholder="title"
                                value="{{count(Auth::user()->discounts()->get())>0 ?Auth::user()->discounts()->get()[0]->name:''}}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('company.color') }} :</label>
                            <input required type="color" class="form-control" name="discount1[]"
                                placeholder="first discount"
                                value="{{count(Auth::user()->discounts()->get())>0 ?Auth::user()->discounts()->get()[0]->color:''}}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <input required type="text" class="form-control" name="discount2[]" placeholder="title"
                                value="{{count(Auth::user()->discounts()->get())>0 ?Auth::user()->discounts()->get()[1]->name:''}}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('company.color') }} :</label>
                            <input required type="color" class="form-control" name="discount2[]"
                                placeholder="first discount"
                                value="{{count(Auth::user()->discounts()->get())>0 ?Auth::user()->discounts()->get()[1]->color:''}}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <input required type="text" class="form-control" name="discount3[]" placeholder="title"
                                value="{{count(Auth::user()->discounts()->get())>0 ?Auth::user()->discounts()->get()[2]->name:''}}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('company.color') }} :</label>
                            <input required type="color" class="form-control" name="discount3[]"
                                placeholder="first discount"
                                value="{{count(Auth::user()->discounts()->get())>0 ?Auth::user()->discounts()->get()[2]->color:''}}">
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