<!doctype html>
<html lang="en">
<head>
    @include('admin.includes.scripts_top')
    @stack('top')
</head>
<body class="hold-transition skin-blue sidebar-mini" >
        @include('admin.layout.header')

        @yield('menu')

        @yield('content')

        @include('admin.layout.footer')
</body>
    @include('admin.includes.scripts_bottom')
    @stack('tail')
</html>
