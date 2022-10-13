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
                <a href="{{ route('post.show', [app()->getLocale(), $post->id]) }}" class="card-post-link">
                <h6 class="post-type">
                    {{ $post->category->name }}
                </h6>
                <h1>
                    {{ $post->title }}
                </h1>
                <p>
                    {{ Str::words($post->content, 30) }}
                </p>
                <time datetime="{{ \Carbon\Carbon::parse($post->created_at)->format('M d Y') }}">
                    {{ \Carbon\Carbon::parse($post->created_at)->format('M d Y') }}
                </time>
                </a>
            </figcaption>
        </figure>
    </section>
    @livewire('categories')
    {{-- <livewire:categories :data="$data" /> --}}
@endsection
