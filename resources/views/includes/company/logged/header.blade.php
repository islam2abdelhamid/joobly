<nav class="navbar navbar-expand-lg justify-content-between px-5">
    <a class="navbar-brand" href="/"><img src="{{url('/images/logo.png')}}" alt="logo" class="img-fluid ml-5"
            width="150" /></a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link link" href="#">
                {{ trans('common.english')}}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link link" href="#">
                {{ trans('common.arabic')}}
            </a>
        </li>

        <li class="company-info">
            <a class="nav-link link" href="#">
                {{Auth::user()->companyName}}
            </a>
            <img src="{{url('/images/company/')}}/{{Auth::user()->logo}}" class="img-fluid" width="50">
        </li>


        {{-- {{Auth::user()->companyName}} --}}
    </ul>
</nav>