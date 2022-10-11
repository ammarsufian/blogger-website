<section class="download-app">
    <div class="title-store">
      <h2>{{__('Order and your coffee delivered to doorstep')}}</h2>
      <h5>{{__('Download Cova on your mobile')}}</h5>
      <div class="store-flex">
        <div class="store-size-btn">
          <a href="{{ config('app.cova_app.app_store') }}" target="_blank">
            <img src="{{ asset('img/Mobile_1.svg')}}" class="Mobile" alt="">
          </a>
        </div>
        <div class="store-size-btn">
            <a href="{{ config('app.cova_app.play_store') }}" target="_blank">
            <img src="{{ asset('img/Mobile_2.svg')}}" class="Mobile" alt="">
          </a>
        </div>
        <div class="store-size-btn">
            <a href="{{ config('app.cova_app.app_gallery') }}" target="_blank">
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
                <a href="{{ config('app.cova_social.youtube') }}" class="" target="_blank">
                    <img class="media-img" src="{{ asset('img/icon/youtube.svg') }}" alt="youtube">
                </a>
                <a href="{{ config('app.cova_social.instagram') }}" class="" target="_blank">
                    <img class="media-img" src="{{ asset('img/icon/instagram.svg') }}" alt="instagram">
                </a>
                <a href="{{ config('app.cova_social.twitter') }}" class="" target="_blank">
                    <img class="media-img" src="{{ asset('img/icon/twitter.svg') }}" alt="twitter">
                </a>
                {{-- <a href="#" target="_blank">
                <i class="fab fa-linkedin-in"></i>
                </a> --}}
            </div>
        </nav>
        <nav class="navbar justify-content-center bg-f7f7f7">
                <a href="{{route('index',app()->getLocale())}}" class="m-3">{{__('Blog')}}</a>
                <a href="{{ config('app.cova_url.contact') }}" class="m-3">{{__('Contact')}}</a>
                <a href="" class="m-3">{{__('About us')}}</a>
                <a href="{{ config('app.cova_url.rider') }}" class="m-3">{{__('Become a rider')}}</a>
                <a href="{{ config('app.cova_url.provider') }}" class="m-3">{{__('Become a partner')}}</a>
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
