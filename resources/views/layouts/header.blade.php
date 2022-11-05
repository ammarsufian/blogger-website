<header class="mt-3" dir="auto">
    <nav id="nav" class="navbar navbar-expand-lg bg-fff">
        <div class="container-fluid">
            <div class="navbar-header d-flex">
                <span class="navbar-toggler border-0 hamburger" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    &#9776;
                </span>
                <a href="#" class="nav-link">
                    <img class="logo-img" src="{{asset('img/Logo.svg')}}" alt="logo">
                </a>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel" dir="auto">
                    <div class="offcanvas-header">
                        <a href="#" class="offcanvas-title" id="offcanvasNavbarLabel">
                            <img class="logo-img-menu" src="{{asset('img/Logo.svg')}}" alt="logo">
                        </a>
                        <span class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></span>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href="{{route('index', app()->getLocale() )}}">{{__('Blog')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{config('app.cova_url.contact')}}">{{__('Contact')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{config('app.cova_url.provider')}}">{{__('Become a partner')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{config('app.cova_url.rider')}}">{{__('Become a rider')}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="position-relative">
                <input type="checkbox" id="checkbox_language" />
                <label for="checkbox_language" class="language">
                    <span id="language">{{ __(app()->getLocale()) }}</span>
                    <i class="angle"><img src="{{asset('img/icon/angle-up.svg')}}" alt="" width="14px"></i>
                    {{-- <i class="angle d-none"><img src="{{asset('img/icon/angle-down.svg')}}" alt=""
                    width="14px"></i> --}}
                </label>
                <div class="language-dropdown display-none menu_language" id="language-dropdown">
                    <div class="triangle-with-shadow" id="triangle-shadow"></div>
                    <ul class="shadow-box">
                        <li class=" d-flex" id="en">
                            @php
                            $url=explode('/', url()->current());
                            $id=end($url);
                            (Route::current()->getName()=='post.show') ? $list = ['en',$id] : $list = ['en'];
                            @endphp
                            <a class="nav-link" href="{{ route(Route::current()->getName(),$list)}}">
                                {{__('en')}}
                            </a>
                            <i class="check d-none"><img src="{{asset('img/icon/check.svg')}}" alt="" width="14px"></i>
                        </li>
                        <li class="d-flex" id="ar">
                            @php
                            (Route::current()->getName()=='post.show') ? $list = ['ar',$id] : $list = ['ar'];
                            @endphp
                            <a class="nav-link" href="{{route(Route::current()->getName(),$list)}}">{{__('ar')}}</a>
                            <i class="check d-none"><img src="{{asset('img/icon/check.svg')}}" alt="" width="14px"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </nav>
</header>