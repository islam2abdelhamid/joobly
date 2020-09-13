@include('includes.company.main.heading')
<div id="app">
    <main class="py-4">
        @include('includes.company.main.header')
        @yield('content')
    </main>
</div>
@include('includes.footer')