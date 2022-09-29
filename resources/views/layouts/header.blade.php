<header class="mt-3" dir="ltr">
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
                        <span class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></span>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Become a partner</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Become a rider</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="position-relative">
                <input type="checkbox" id="checkbox_language" />
                <label for="checkbox_language" class="language">
                    <span id="language">English</span>
                    <i class="angle"><img src="{{asset('img/icon/angle-up.svg')}}" alt="" width="14px"></i>
                </label>
                <div class="language-dropdown display-none menu_language">
                  <div class="triangle-with-shadow"></div>
                  <ul class="shadow-box">
                    <li class=" d-flex">
                        <a class="nav-link active" href="/">
                            English
                        </a>
                        <i class="check"><img src="{{asset('img/icon/check.svg')}}" alt="" width="14px"></i>
                    </li>
                    <li class=" d-flex">
                        <a class="nav-link" href="/">العربية</a>
                        <i class="check"><img src="{{asset('img/icon/check.svg')}}" alt="" width="14px"></i>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
    </nav>
</header>
