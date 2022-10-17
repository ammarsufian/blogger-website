@section('title', "$post->title")

@section('meta')
    {{-- meta tag for search engine --}}
    <meta name="description" content="{{ Str::words($post->content, 25) }}">
    <meta name="copyright" content="COVA" />{{-- company name --}}
    <meta name="author" content="">{{-- author name --}}
    <meta name="revised" content="{{ \Carbon\Carbon::parse($post->created_at)->format('m-d-Y') }}" />{{-- date --}}
    <meta name="keywords" content="{{ $meta_tags }}" />{{-- keywords tags for post --}}

    {{-- facebook meta --}}
    <meta property="og:title" content="{{ $post->title }}" />{{-- post title --}}
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

@section('css')
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
@endsection

@section('content')
    <article class="container">
        <div class="nav-home">
            <a href="{{ route('index', app()->getLocale()) }}">
                {{ __('Home') }}
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
                    <div>{{ __('Posted be Cova') }}</div>
                    <span>{{ __('Category') }} : </span>
                    <u> {{ $post->category->name }}</u>
                </div>
            </div>
        </div>
        </div>
    </article>
@endsection
