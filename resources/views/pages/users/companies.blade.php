@include('pages.users.includes.header')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="{{url('/images/ads/ad1.png')}}" class="img-fluid" width="250">
        </div>
        <div class="col-md-8">

            <div class="page-nave text-white">
                <a href="/" class="text-white">{{ trans('common.home') }}</a>/
                <?php $link = "" ?>
                @for($i = 1; $i <= count(Request::segments()); $i++) @if($i < count(Request::segments()) & $i> 0)
                    @if (Request::segment($i)!=="companies")
                    <?php $link .= "/" . Request::segment($i); ?>
                    <a href="<?= $link ?>" class="text-white">{{ trans('common.'.Request::segment($i)) }}</a> /
                    @endif
                    @else {{ucwords(str_replace('-',' ',Request::segment($i)))}}
                    @endif
                    @endfor

            </div>
            <hr class="hr" />

            @if (count($companies)>0)
            @foreach ($companies as $company)

            <div class="company mt-5">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{url('/images/company/services/'.$company->logo)}}" class="img-fluid" width="110">
                    </div>
                    <div class="col-md-5">
                        <div class="info">
                            <h3>
                                {{$company->company_name}}
                            </h3>
                            <p>
                                {{$company->description}}
                            </p>
                            <a href="/companies/{{$company->id}}">
                                {{ trans('common.more') }}
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact">
                            <strong>
                                {{ trans('company.address') }}:
                            </strong>
                            {{$company->address}}
                            <br>
                            <strong>
                                {{ trans('company.contactInfo') }}:
                            </strong>
                            {{$company->mobile}} / {{$company->phone}}

                        </div>
                    </div>
                </div>


            </div>

            @endforeach

            @else
            <h3 class="text-white">
                {{ trans('company.noCompanies') }}
            </h3>

            @endif


        </div>
    </div>
</div>
@include('pages.users.includes.footer')