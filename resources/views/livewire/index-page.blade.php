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
        @if (isset($single_post->id))
            <figure class="post">
                <img src="{{ asset('test-img/FXt000uUIAEFjgq.jfif') }}" alt="blog-1" />
                <figcaption>
                    <a href="{{ route('post.show', [app()->getLocale(), $single_post->id]) }}" class="card-post-link">
                        <h6 class="post-type">
                            {{ $single_post->category->name }}
                        </h6>
                        <h1>
                            {{ $single_post->title }}
                        </h1>
                        <p>
                            {{ Str::words($single_post->content, 30) }}
                        </p>
                        <time datetime="{{ \Carbon\Carbon::parse($single_post->created_at)->format('M d Y') }}">
                            {{ \Carbon\Carbon::parse($single_post->created_at)->format('M d Y') }}
                        </time>
                    </a>
                </figcaption>
            </figure>
        @endif
    </section>
    @livewire('categories')
    <script>
        document.getElementById('scroll_up').addEventListener("click", function() {
            let box = document.querySelector('.single-post');
            let height = box.offsetHeight;
            window.scrollTo(0, height);
        });
    </script>
@endsection
