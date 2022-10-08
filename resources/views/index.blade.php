@extends('layouts.app')

@section('title', 'COVA - Blog')
@section('meta')
    {{-- meta tag for search engine --}}
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="copyright" content="&copy; Cova" />
    <meta name="author" content="Cova">
@endsection

@section('content')
    <section class="single-post">
        <figure class="post">
            <img src="{{ asset('test-img/FXt000uUIAEFjgq.jfif') }}" alt="blog-1" />
            <figcaption>
                <h6 class="post-type">
                    COMPANY UPDATES
                </h6>
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
                <time datetime="JULY 4, 2022">JULY 4, 2022</time>
            </figcaption>
        </figure>
    </section>

    <section class="posts">
        <!-- nav All Company updates Tips -->
        <nav class="nav-posts">
            <ul class="nav nav-posts-ul">

                <li class="nav-posts-li">
                    <a id="all" class="nav-link  nav-link-posts active">
                        All
                    </a>
                </li>
                @foreach ($categories as $category)
                    <li class="nav-posts-li">
                        <a id="{{ $category->name }}" class="nav-link  nav-link-posts">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
        <div class="wrapper" id="blogs">
            @foreach ($posts as $post)
                    <figure class="card-post">
                        <a href="{{ route('post.show', [app()->getLocale(),$post->id]) }}" class="card-post-link">
                        <div class="card-banner">
                            <img class="banner-img" src='{{ asset('test-img/FWRITyxXkAAFSC4.jfif') }}' alt=''>
                        </div>
                        <div class="card-body">
                            <time datetime="$post->created_at" class="blog-date">
                                {{ \Carbon\Carbon::parse($post->created_at)->format('M d Y') }}
                            </time>
                            <h2 class="blog-title">
                                {{ $post->title }}
                            </h2>
                            <p class="blog-description">
                                {{-- {{preg_replace('/\s+/', ' ', strip_tags(Str::markdown(Str::words($post->content, 30))))}} --}}
                                {{ (Str::words($post->content, 30)) }}
                            </p>
                            <h6>{{ $post->category->name }}</h6>
                        </div>
                        </a>
                    </figure>
            @endforeach
            <figure class="card-post card-grid" id="order_partner">
                <div class="card-order">
                    <h2 class="blog-title">
                        {{__('Get a coffee when you need one')}}
                    </h2>
                    <a class="blog-description">
                        {{__('Sign up to order')}}
                    </a>
                </div>
                <div class="card-partner">
                    <h2 class="blog-title">
                        {{__('Reach more customers than ever.')}}
                    </h2>
                    <a class="blog-description">
                        {{__('Sign up to be partner')}}
                    </a>
                </div>
            </figure>
        </div>
        <div id="view_more" class="view-more">{{__('View more')}}</div>

    </section>
@endsection
