<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel 10 task list app</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    {{-- blade-formatter-disable --}}
    <style type="text/tailwindcss">
        .btn {
            @apply rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 ring-slate-700/30 hover:bg-slate-200
        }

        .link {
            @apply font-medium text-gray-700 underline decoration-blue-500
        }

        label {
            @apply block uppercase text-slate-700 mb-2
        }

        input, textarea {
            @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
        }

        .error {
            @apply text-red-500 text-sm
        }

    </style>
    {{-- blade-formatter-enable --}}

    @yield('styles')
</head>

<body class="container mx-auto mt-10 mb-10 max-w-lg">
<h1 class="text-3xl mb-4">@yield('title')</h1>
<div x-data="{ flash: true }">
    @if(session()->has('success'))
        {{--        <div class="success-message">{{session('success')}}</div>--}}
        <div x-show="flash"
             class="relative mb-8 rounded border border-green-400 bg-green-100 px-4 py-3 text-green-800 text-lg "
             role="alert">
            <strong class="font-bold">Success!</strong>
            <div>{{session('success')}}</div>

            <span class="absolute top-0 right-0 px-4 py-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"
                     stroke-width="1.5"
                     @click="flash = false"
                     stroke="currentColor" class="h-4 w-4 cursor-pointer" @click="flash = false">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </span>
        </div>
    @endif

    @yield('content')
</div>
</body>
</html>
