{{-- <div>
    @foreach ($categories as $category)
        <a wire:click="showPosts({{ $category->id }})">{{ $category->name }}</a>
    @endforeach
</div> --}}

<section class="posts">
    <nav class="nav-posts">
        <ul class="nav nav-posts-ul">

            <li class="nav-posts-li">
                <a wire:click="showAllPosts() id="all" class="nav-link  nav-link-posts {{$category->id??'active'}}">
                    All
                </a>
            </li>

            @foreach ($categories as $category_item)
                <li class="nav-posts-li">
                    <a wire:click="showPostsByCategory({{ $category_item->id }})"
                        class="nav-link  nav-link-posts
                        @if((isset($category))&&($category->id==$category_item->id))
                        {{'active'}}
                        @endif">
                        {{ $category_item->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
    <div class="wrapper">
        <div class="wrapper-posts" id="blogs">
            @foreach ($posts as $post)
                <figure class="card-post">
                    <a href="{{ route('post.show', [app()->getLocale(), $post->id]) }}" class="card-post-link">
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
                                {{ Str::words($post->content, 30) }}
                            </p>
                            <h6>{{ $post->category->name }}</h6>
                        </div>
                    </a>
                </figure>
            @endforeach
            <figure class="card-post card-grid" id="order_partner">
                <div class="card-order">
                    <h2 class="blog-title">
                        {{ __('Get a coffee when you need one') }}
                    </h2>
                    <a class="blog-description">
                        {{ __('Sign up to order') }}
                    </a>
                </div>
                <div class="card-partner">
                    <h2 class="blog-title">
                        {{ __('Reach more customers than ever.') }}
                    </h2>
                    <a class="blog-description">
                        {{ __('Sign up to be partner') }}
                    </a>
                </div>
            </figure>
        </div>
    </div>
    <div id="view_more" class="view-more">{{ __('View more') }}</div>
    <!-- nav All Company updates Tips -->
</section>
