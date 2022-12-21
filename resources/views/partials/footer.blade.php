<footer id="site-footer">

    <section class="list">
        <div class="container d-flex justify-content-between back">
            <div class="col-12 col-lg-5">
                <div class="container py-5">
                    <div class="row row-cols-3">
                        <div class="col">
                            <ul>
                                <li>
                                    <a href="#">
                                        <h4 class="mb-3 text-light">DC COMICS</h4>
                                    </a>
                                </li>
                                @foreach ($links['dcComics'] as $link)
                                <li class="font"><a href="#">{{ $link }}</a></li>
                                @endforeach
                                <li><a href="#">
                                        <h4 class="my-3 text-light">SHOP</h4>
                                    </a></li>
                                @foreach ($links['shop'] as $link)
                                <li class="font"><a href="#">{{ $link }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="#">
                                        <h4 class="mb-3 text-light">DC</h4>
                                    </a></li>
                                @foreach ($links['dc'] as $link)
                                <li class="font"><a href="#">{{ $link }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="#">
                                        <h4 class="mb-3 text-light">SITES</h4>
                                    </a></li>
                                @foreach ($links['sites'] as $link)
                                <li class="font"><a href="#">{{$link}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <p>All Site Content TM and &copy; 2020 DC Enterainment, unless otherwise 
                         <span>noted here.</span> All rights reserved. <span>Cookies Settings</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="allSocials">
        <div class="container d-flex justify-content-between flex-wrap px-3">
            <div class="my_btn">SIGN-UP NOW!</div>
            <div class="social d-flex align-items-center flex-wrap">
                <h6 class="blue me-3">FOLLOW US</h6>
                <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="">
                <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="">
                <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="">
                <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="">
                <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="">
            </div>
        </div>
    </section>

</footer>