@include('includes.heading')
<div id="app">
    @include('includes.header')
    <main class="py-4">
        @yield('content')
    </main>
</div>
@include('includes.footer')