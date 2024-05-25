<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title.auth')</title>
</head>

<body>
    @yield('content.auth')
    @include('sweetalert::alert')
</body>

</html>
