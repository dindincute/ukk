<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        @include('layout.navbar')

        {{-- Section home --}}
        @yield('home')

        {{-- Section classes --}}
        @yield('classes')

        {{-- Section schedule --}}
        @yield('schedule')

        {{-- Section schedule --}}
        @yield('services')

        {{-- Section schedule --}}
        @yield('contact')

        {{-- Section schedule --}}
        @yield('trainer')


        @include('layout.footer')

    </div>
    <!-- .site-wrap -->

    @include('layout.script')

</body>

</html>
