<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.includes.scripts_top')
    @stack('top')
</head>
<body>
    @yield('menu')
    @yield('content')
</body>
    @include('admin.includes.scripts_bottom')
    @stack('bot')
</html>
