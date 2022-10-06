@extends('layouts.app')

@section('title', "$post->title")
@section('css')
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
@endsection

@section('meta')

    {{-- meta tag for search engine --}}
    <meta name="description" content="{{ Str::words($post->content, 25) }}">
    <meta name="copyright" content="COVA" />{{-- company name --}}
    <meta name="author" content="">{{-- author name --}}
    <meta name="revised" content="{{ \Carbon\Carbon::parse($post->created_at)->format('m-d-Y') }}" />{{-- date --}}
    <meta name="keywords" content="{{ $tag_meta }}" />{{-- keywords tags for post --}}

    {{-- facebook meta --}}
    <meta property="og:title" content="{{$post->title}}" />{{-- post title --}}
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ url()->current() }}" />{{-- post url --}}
    <meta property="og:image" content="" />{{-- post image --}}
    <meta property="og:description" content="{{ Str::words($post->content, 100) }}" />{{-- general description for post --}}
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
    <article class="container">
        <div class="nav-home">
            <a href="{{ route('index') }}">
                Home
            </a>
            <span>
                /
            </span>
            <span>
                {{ $post->title }}
            </span>
        </div>
        <h1>{{ $post->title }}</h1>
        <div class="head-content">
            <div>author</div>
            <div>{{ $post->category->name }}</div>
            <time datetime="{{ \Carbon\Carbon::parse($post->created_at)->format('m-d-Y') }}" class="">
                {{ \Carbon\Carbon::parse($post->created_at)->format('M d Y') }}
            </time>
        </div>
        <div class="d-flex justify-content-center">
            <img src="{{ asset('test-img/FXeYPFFXgAIc3Od.jfif') }}" class="img-post" alt="" />
        </div>
        <div class="container">

            <div class="share">
                {{-- <img src="{{ asset('img/icon/facebook.svg') }}" alt="" srcset="">
                <img src="{{ asset('img/icon/twitter.svg') }}" alt="" srcset="">
                <img src="{{ asset('img/icon/linkedin.svg') }}" alt="" srcset="">
                <img src="{{ asset('img/icon/share.svg') }}" alt="" srcset=""> --}}
            </div>
            <div class="container markdown" id="markdown">
                {!! str::markdown($post->content) !!}

                <div class="inter-font mt-5">
                    <hr style="width: 34px;">
                    <div>Posted be Cova</div>
                    <span>Category : </span>
                    <u> <a href="{{route('index')}}"></a> {{ $post->category->name }}</u>
                </div>

            </div>
        </div>
        </div>
    </article>
    {{-- <button  class="btn" >
        <svg  height="16" viewBox="0 0 16 16" version="1.1" width="16">
            <path
                d="M0 6.75C0 5.784.784 5 1.75 5h1.5a.75.75 0 010 1.5h-1.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-1.5a.75.75 0 011.5 0v1.5A1.75 1.75 0 019.25 16h-7.5A1.75 1.75 0 010 14.25v-7.5z">
            </path>
            <path
                d="M5 1.75C5 .784 5.784 0 6.75 0h7.5C15.216 0 16 .784 16 1.75v7.5A1.75 1.75 0 0114.25 11h-7.5A1.75 1.75 0 015 9.25v-7.5zm1.75-.25a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-7.5z">
            </path>
        </svg>
    </button> --}}

@endsection
