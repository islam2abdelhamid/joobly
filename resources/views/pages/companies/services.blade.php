@extends('layouts.company.main')

@section('content')
<div class="our-services mt-5">
    <h1 class="text-center text-white title">{{ trans('company.ourServices') }}</h1>
    <p class="text-center text-white">
        {{-- {{Auth::user()->description}} --}}
    </p>
</div>



<div class="row">
    @foreach ($services as $item)
    <div class="col-md-4 text-center mt-3">
        <img src="{{url('/images/services/'.$item->image)}}" alt="logo" class="img-fluid" width="150" />
        <h5 class="text-white">{{$item->name}}</h5>
        <p class="text-white">{{$item->description}}</p>
    </div>
    @endforeach
</div>
@endsection