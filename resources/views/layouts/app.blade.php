<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaravelBlog</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('layouts.header')

    @if (session('message'))
        <div class="alert alert-secondary">
            {{ session('message') }}
        </div>
    @endif
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>