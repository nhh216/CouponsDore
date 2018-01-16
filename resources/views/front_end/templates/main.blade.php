<!doctype html>
<html lang="en">
<head>
    <title> DORE || {{ $title or '' }}</title>
    @include('front_end.includes.scripts_top')
    @stack('head')
</head>
<body>
    @include('front_end.layout.header_home_content')
    @includeWhen($homePage,'front_end.layout.search')
    @includeWhen($homePage,'front_end.layout.store_populart')
    <div class="section wb">
        <div class="container">
            {{--Slider--}}
             @includeWhen($hasSlider,'front_end.layout.slider')
            {{--Content--}}
            @yield('content')
            {{-- Sidebar--}}
            @yield('sidebar')

        </div>
    </div>
</body>
    @include('front_end.includes.scripts_bottom')
    @stack('tail')
</html>