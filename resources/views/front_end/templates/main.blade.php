<!doctype html>
<html lang="en">
<head>
    <title> DORE || {{ $title or '' }}</title>
    @include('front_end.includes.scripts_top')
    @include('front_end.includes.scripts_search')
    @stack('head')
</head>
<body>
    @include('front_end.layout.header_home_content')

    <div class="section wb">

            {{--Slider--}}
            @includeWhen([$hasSlider],'front_end.layout.slider')
            {{--Content--}}
            @yield('content')
            {{-- Sidebar--}}
            @yield('sidebar')

    </div>
</body>
    @include('front_end.includes.scripts_bottom')
    @stack('tail')
</html>