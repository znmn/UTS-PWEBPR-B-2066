<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ url('/favicon.svg') }}">
    <title>UTS Pweb - @yield('title', 'Zaiul Muhaimin')</title>

    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body>
    @include('components.nav')
    <div class="container-xxl bg-light">
        @yield('content')
        @include('components.footer')
    </div>
</body>
</html>