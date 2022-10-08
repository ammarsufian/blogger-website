<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('img/Logo.svg') }}" type="image/x-icon" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="HandheldFriendly" content="true" />
    {{-- <meta name="MobileOptimized" content="width"/> --}}
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <meta name="robots" content="index, follow" />
    @yield('meta')

    <!-- styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    @yield('css')

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" class="bg-fff">
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
</body>
<script src="{{ asset('js/index.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    let language = "{{ app()->getLocale() }}";
    window.onload = function() {
        if (language == "en") {
            let en = document.getElementById("en");
            en.classList.add("active");
            en.querySelector(".check").classList.remove("d-none");
            document.querySelector(".language-dropdown").classList.add("right-0-px");
            var style = document.getElementById('triangle-shadow').style;
            style.setProperty('--right', '25px');

        } else {
            let ar = document.getElementById("ar");
            ar.classList.add("active");
            ar.querySelector(".check").classList.remove("d-none");
            document.querySelector(".language-dropdown").classList.add("left-0-px");
            var style = document.getElementById('triangle-shadow').style;
            style.setProperty('--left', '25px');

        }
    }
</script>

</html>
