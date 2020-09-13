@include('includes.company.guest.heading')
<div id="app">
    <main class="py-4">
        <header id="topNavbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 topRightMenu">
                        <div class="sign ml-lg-auto">
                            <a href="login" class="mr-5">{{ trans('company.signIn')}}</a>
                            <a href="register" class="mr-5">{{ trans('company.signUp')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
    </main>
</div>
@include('includes.footer')