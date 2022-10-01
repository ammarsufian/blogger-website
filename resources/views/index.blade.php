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
                    quis eleifend vivamus bland.                    Vel orci neque, urna, pulvinar eu. Feugiat id turpis justo,
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
                {{-- <li class="nav-posts-li">
                    <a id="company_updates" class="nav-link nav-link-posts">
                        Company updates
                    </a>
                </li>
                <li class="nav-posts-li">
                    <a id="tips" class="nav-link nav-link-posts">
                        Tips
                    </a>
                </li> --}}
            </ul>
        </nav>
        <div class="wrapper" id="blogs">
            <figure class="card-post">
                <div class="card-banner">
                    <img class="banner-img" src='{{ asset('test-img/FWRITyxXkAAFSC4.jfif') }}' alt=''>
                </div>
                <div class="card-body">
                    <time datetime="JULY 4, 2022" class="blog-date">JULY 15, 2022</time>
                    <h2 class="blog-title">
                        Nullam nibh feugiat pulvinar est faucibus laoreet.
                    </h2>
                    <p class="blog-description">
                        Nunc purus dui arcu, fermentum risus, imperdiet iaculis commodo ut. Egestas in cursus nisi, morbi
                        purus
                        lorem donec nisl.
                    </p>
                    <h6>COMPANY UPDATES</h6>
                </div>
            </figure>
            <figure class="card-post">
                <div class="card-banner">
                    <img class="banner-img" src='{{ asset('test-img/FWRITyxXkAAFSC4.jfif') }}' alt=''>
                </div>
                <div class="card-body">
                    <time datetime="JULY 4, 2022" class="blog-date">JULY 15, 2022</time>
                    <h2 class="blog-title">
                        Nullam nibh feugiat pulvinar est faucibus laoreet.
                    </h2>
                    <p class="blog-description">
                                Nunc purus dui arcu, fermentum risus,
                                imperdiet iaculis commodo ut. Egestas in cursus nisi,
                                morbi purus lorem donec nisl. Nunc purus dui arcu,
                                fermentum risus, imperdiet iaculis commodo ut.
                    </p>
                    <h6>Tips</h6>

                </div>
            </figure>

            <figure class="card-post">
                <div class="card-banner">
                    <img class="banner-img" src='{{ asset('test-img/coffee bean.jpg') }}' alt=''>
                </div>
                <div class="card-body">
                    <time datetime="JULY 4, 2022" class="blog-date">JULY 15, 2022</time>
                    <h2 class="blog-title">
                        Nullam nibh feugiat pulvinar est faucibus laoreet.
                    </h2>
                    <p class="blog-description">
                        Nunc purus dui arcu, fermentum risus, imperdiet iaculis commodo ut. Egestas in cursus nisi, morbi
                        purus
                        lorem donec nisl.
                    </p>
                    <h6>Tips</h6>
                </div>
            </figure>

            <figure class="card-post card-grid" id="order_partner">
                <div class="card-order">
                    <h2 class="blog-title">
                        Get a coffee when you need one
                    </h2>
                    <a class="blog-description">
                        Sign up to order
                    </a>
                </div>
                <div class="card-partner">
                    <h2 class="blog-title">
                        Reach more customers than ever.
                    </h2>
                    <a class="blog-description">
                        Sign up to be partner
                    </a>
                </div>
            </figure>

            <figure class="card-post">
                <div class="card-banner">
                    <img class="banner-img" src='{{ asset('test-img/FVyOs1lXsAIjQPs.jfif') }}' alt=''>
                </div>
                <div class="card-body">
                    <time datetime="JULY 4, 2022" class="blog-date">JULY 15, 2022</time>
                    <h2 class="blog-title">
                        Nullam nibh feugiat pulvinar est faucibus laoreet.
                    </h2>
                    <p class="blog-description">
                        Nunc purus dui arcu, fermentum risus, imperdiet iaculis commodo ut. Egestas in cursus nisi, morbi
                        purus
                        lorem donec nisl.
                    </p>
                    <h6>COMPANY UPDATES</h6>

                </div>
            </figure>

            <figure class="card-post">
                <div class="card-banner">
                    <img class="banner-img" src='{{ asset('test-img/FXeYPFFXgAIc3Od.jfif') }}' alt=''>
                </div>
                <div class="card-body">
                    <time datetime="JULY 15, 2022" class="blog-date">JULY 15, 2022</time>
                    <h2 class="blog-title">
                        Justo, suscipit nibh lacus amet gravida.
                    </h2>
                    <p class="blog-description">
                        Malesuada sed risus, sed amet viverra fermentum egestas. sed risus, sed amet viverra fermentum
                        egestas.
                    </p>
                    <h6>PROMOTIONS</h6>
                </div>
            </figure>

        </div>
        <div id="view_more" class="view-more">View more</div>

    </section>
@endsection
