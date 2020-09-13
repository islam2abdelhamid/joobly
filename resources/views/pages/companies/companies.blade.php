@extends('layouts.company.main')

@section('content')

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
            @foreach ($companies as $company)

            <div class="company">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{url('/images/company/'.$company->logo)}}" class="img-fluid" width="110">
                    </div>
                    <div class="col-md-5">
                        <div class="info">
                            <h3>
                                {{$company->companyName}}
                            </h3>
                            <p>
                                {{$company->description}}
                            </p>
                            <a href={{$company->id."/services"}}>
                                {{ trans('common.more') }}
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact">
                            {{ trans('company.address') }}:
                            <br />
                            {{$company->address}}
                            <br />
                            <br />

                            <strong class="text-dark">
                                {{$company->mobile}} / {{$company->landTel}}
                            </strong>

                        </div>
                    </div>
                </div>


            </div>

            @endforeach
        </div>
    </div>
</div>

@endsection