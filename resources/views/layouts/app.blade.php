<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('favicon.png') }}">
</head>

@include('partials.header')

<body>
    <main>
        @yield('content')
    </main>
</body>

@include('partials.footer')

</html>