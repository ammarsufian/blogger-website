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
    @livewireStyles

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
        if (language == "ar") {
            let ar = document.getElementById("ar");
            ar.classList.add("active");
            ar.querySelector(".check").classList.remove("d-none");
            let canvas_navbar = document.getElementById("offcanvasNavbar");
            canvas_navbar.classList.remove("offcanvas-start");
            canvas_navbar.classList.add("offcanvas-end");
            document.querySelector(".language-dropdown").classList.add("left-0-px");
            let style = document.getElementById('triangle-shadow').style;
            style.setProperty('--left', '25px');
            document.querySelector(".title-store").style.setProperty('margin', 'auto');
        }
        else {
            let en = document.getElementById("en");
            en.classList.add("active");
            en.querySelector(".check").classList.remove("d-none");
            document.querySelector(".language-dropdown").classList.add("right-0-px");
            let style = document.getElementById('triangle-shadow').style;
            style.setProperty('--right', '25px');
        }
    }

    document.getElementById("checkbox_language").addEventListener("change", function() {
        document.querySelector(".angle").innerHTML = "";
        let img = document.createElement("img");
        img.width = 14;
        if (this.checked) {
            img.src = "{{asset('img/icon/angle-down.svg')}}";
        } else {
            img.src = "{{asset('img/icon/angle-up.svg')}}";
        }
        document.querySelector(".angle").appendChild(img);
    });

</script>
@livewireScripts
</html>
