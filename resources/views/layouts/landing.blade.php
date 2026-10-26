<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- bagian head template fitness --}}
        @include('layouts.landing.head')
    </head>

    <body>
        {{-- header / menubar navigasi --}}
        @include('layouts.landing.header')

        {{-- bagian main content yang dinamis sesuai halaman --}}
        @yield('content')

        {{-- footer template --}}
        @include('layouts.landing.footer')

        {{-- javascript library & custom js --}}
        @include('layouts.landing.scripts')
    </body>
</html>
