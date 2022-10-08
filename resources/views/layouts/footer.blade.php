<section class="download-app">
    <div class="title-store">
      <h2>{{__('Order and your coffee delivered to doorstep')}}</h2>
      <h5>{{__('Download Cova on your mobile')}}</h5>
      <div class="store-flex">
        <div class="store-size-btn">
          <a href="#">
            <img src="{{ asset('img/Mobile_1.svg')}}" class="Mobile" alt="">
          </a>
        </div>
        <div class="store-size-btn">
          <a href="#">
            <img src="{{ asset('img/Mobile_2.svg')}}" class="Mobile" alt="">
          </a>
        </div>
        <div class="store-size-btn">
          <a href="#">
            <img src="{{ asset('img/Mobile_3.svg')}}" class="Mobile" alt="">
          </a>
        </div>
      </div>
    </div>
    <div class="img-bg">
      <img src="{{ asset('img/Badge.png')}}" alt="" class="badge-img">
      <img src="{{ asset('img/phone.png')}}" alt="">
    </div>
</section>

<footer>
        <nav class="navbar justify-content-around bg-f7f7f7 pt-5">
            <div>
                <h5>Cova App</h5>
            </div>
            <div class="">
                <a href="#" class="" target="_blank">
                    <img class="media-img" src="{{ asset('img/icon/youtube.svg') }}" alt="youtube">
                </a>
                <a href="#" class="" target="_blank">
                    <img class="media-img" src="{{ asset('img/icon/instagram.svg') }}" alt="instagram">
                </a>
                <a href="#" class="" target="_blank">
                    <img class="media-img" src="{{ asset('img/icon/twitter.svg') }}" alt="twitter">
                </a>
                {{-- <a href="#" target="_blank">
                <i class="fab fa-linkedin-in"></i>
                </a> --}}
            </div>
        </nav>
        <nav class="navbar justify-content-center bg-f7f7f7">
                <a href="#" class="m-3">{{__('Blog')}}</a>
                <a href="#" class="m-3">{{__('Contact')}}</a>
                <a href="#" class="m-3">{{__('About us')}}</a>
                <a href="#" class="m-3">{{__('Become a rider')}}</a>
                <a href="#" class="m-3">{{__('Become a partner')}}</a>
        </nav>
    <nav class="navbar justify-content-around bg-ededed">
        <div>
            &copy; 2022 Cova
        </div>
        <div>
            {{__('Terms & Conditions')}}
        </div>
    </nav>
</footer>
