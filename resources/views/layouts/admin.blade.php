<!DOCTYPE html>
<html lang="en">
<head>
    {{-- bagian head admin (css vendor & app) --}}
    @include('layouts.admin.head')
</head>
<body class="@yield('body-class')">
    <!-- BEGIN #app -->
    <div id="app" class="app @yield('app-class')">
        @hasSection('no-header')
        @else
            {{-- header topbar dan menubar sidebar --}}
            @include('layouts.admin.header')
        @endif

        {{-- konten dinamis dari tiap view blade --}}
        @yield('content')

        {{-- panel footer dan tombol scroll to top --}}
        @include('layouts.admin.footer')
    </div>
    <!-- END #app -->

    {{-- javascript core dan demo script --}}
    @include('layouts.admin.scripts')
</body>
</html>
