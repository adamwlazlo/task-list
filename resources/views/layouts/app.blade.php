<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel 10 task list app</title>
    @yield('styles')
</head>

<body>
    <h1>@yield('title')</h1>
    <div>
        @if(session()->has('success'))
            <div class="success-message">{{session('success')}}</div>
        @endif

        @yield('content')
    </div>
</body>
</html>
