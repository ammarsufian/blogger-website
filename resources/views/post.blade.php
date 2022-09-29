@extends('layouts.app')

@section('title', 'Page Title') {{-- post title --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
@endsection

@section('head')

    {{-- meta tag for search engine --}}
    <meta name="description" content="{{-- general description for post --}}">
    <meta name="copyright" content="" />{{-- company name --}}
    <meta name="author" content="">{{-- author name --}}
    <meta name="revised" content="" />{{-- date --}}
    <meta name="keywords" content="" />{{-- keywords tags for post --}}

    {{-- facebook meta --}}
    <meta property="og:title" content="" />{{-- post title --}}
    <meta property="og:type" content="article" />
    <meta property="og:url" content="" />{{-- post url --}}
    <meta property="og:image" content="" />{{-- post image --}}
    <meta property="og:description" content="" />{{-- general description for post --}}
    <meta property="og:site_name" content="" />{{-- COVABLOG.com --}}

    {{-- twitter meta --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="" /> {{-- COVABLOG.com --}}
    <meta name="twitter:creator" content="" />{{-- author name --}}
    <meta name="twitter:title" content="" />{{-- post title --}}
    <meta name="twitter:description" content="" />{{-- general description for post --}}
    <meta name="twitter:image" content="" />{{-- post image --}}

@endsection

@section('content')
    {{-- dsiplay felx bootstrap 5.2 --}}
    <article class="container">
        <div class="nav-home">
            <a href="">
                Home
            </a>
            <span>
                post title
            </span>
        </div>
        <h1>Making the perfect cup of coffee at home</h1>
        <div class="head-content">
            <div>author</div>
            <div>category</div>
            <time datetime="JULY 15, 2022" class="">JULY 15, 2022</time>
        </div>
        <div class="d-flex justify-content-center">
            <img src="{{ asset('test-img/FXt000uUIAEFjgq.jfif') }}" class="img-post" alt="" />
        </div>
        <div class="container">

            <div class="share">
                {{-- <img src="{{ asset('img/icon/facebook.svg') }}" alt="" srcset="">
                <img src="{{ asset('img/icon/twitter.svg') }}" alt="" srcset="">
                <img src="{{ asset('img/icon/linkedin.svg') }}" alt="" srcset="">
                <img src="{{ asset('img/icon/share.svg') }}" alt="" srcset=""> --}}
            </div>
            <div class="">
                <h1>
                    Tentang Creetivity
                    Cova coffee
                </h1>
                <p>
                    Vel orci neque, urna, pulvinar eu. Feugiat id turpis justo,
                    vehicula massa, amet aliquet tempor. Commodo eleifend vel
                    quis eleifend vivamus bland.
                    Vel orci neque, urna, pulvinar eu. Feugiat id turpis justo,
                    vehicula massa, amet aliquet tempor. Commodo eleifend vel
                    quis eleifend vivamus bland. Vel orci neque, urna, pulvinar eu. Feugiat id turpis justo,
                    vehicula massa, amet aliquet tempor. Commodo eleifend vel
                    quis eleifend vivamus bland.
                </p>
                <p>
                    Vel orci neque, urna, pulvinar eu. Feugiat id turpis justo,
                    vehicula massa, amet aliquet tempor. Commodo eleifend vel
                    quis eleifend vivamus bland.
                    Vel orci neque, urna, pulvinar eu. Feugiat id turpis justo,
                    vehicula massa, amet aliquet tempor. Commodo eleifend vel
                    quis eleifend vivamus bland. Vel orci neque, urna, pulvinar eu. Feugiat id turpis justo,
                    vehicula massa, amet aliquet tempor. Commodo eleifend vel
                    quis eleifend vivamus bland.
                </p>
                <p>
                    Vel orci neque, urna, pulvinar eu. Feugiat id turpis justo,
                    vehicula massa, amet aliquet tempor. Commodo eleifend vel
                    quis eleifend vivamus bland.
                    Vel orci neque, urna, pulvinar eu. Feugiat id turpis justo,
                    vehicula massa, amet aliquet tempor. Commodo eleifend vel
                    quis eleifend vivamus bland. Vel orci neque, urna, pulvinar eu. Feugiat id turpis justo,
                    vehicula massa, amet aliquet tempor. Commodo eleifend vel
                    quis eleifend vivamus bland.
                </p>
                <p>
                    Vel orci neque, urna, pulvinar eu. Feugiat id turpis justo,
                    vehicula massa, amet aliquet tempor. Commodo eleifend vel
                    quis eleifend vivamus bland.
                    Vel orci neque, urna, pulvinar eu. Feugiat id turpis justo,
                    vehicula massa, amet aliquet tempor. Commodo eleifend vel
                    quis eleifend vivamus bland. Vel orci neque, urna, pulvinar eu. Feugiat id turpis justo,
                    vehicula massa, amet aliquet tempor. Commodo eleifend vel
                    quis eleifend vivamus bland.
                </p>
                <time datetime="JULY 4, 2022">JULY 4, 2022</time>
            </div>
        </div>
    </article>
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay"
        data-copy-feedback="Copied!" data-tooltip-direction="w" value="npm install" tabindex="0" role="button">
        <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true"
            class="octicon octicon-copy js-clipboard-copy-icon m-2">
            <path fill-rule="evenodd"
                d="M0 6.75C0 5.784.784 5 1.75 5h1.5a.75.75 0 010 1.5h-1.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-1.5a.75.75 0 011.5 0v1.5A1.75 1.75 0 019.25 16h-7.5A1.75 1.75 0 010 14.25v-7.5z">
            </path>
            <path fill-rule="evenodd"
                d="M5 1.75C5 .784 5.784 0 6.75 0h7.5C15.216 0 16 .784 16 1.75v7.5A1.75 1.75 0 0114.25 11h-7.5A1.75 1.75 0 015 9.25v-7.5zm1.75-.25a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-7.5z">
            </path>
        </svg>
        <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true"
            class="octicon octicon-check js-clipboard-check-icon color-fg-success m-2 d-none">
            <path fill-rule="evenodd"
                d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z">
            </path>
        </svg>
    </clipboard-copy>

@endsection
