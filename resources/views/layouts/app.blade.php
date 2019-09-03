<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body>
    <div id="app">
        <main>
            @include('layouts.nav')
            @include('layouts.header')
            @yield('content')
            @include('layouts.footer')
        </main>
    </div>
</body>
</html>
