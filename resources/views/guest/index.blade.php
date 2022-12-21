@extends('layout.app')

@section('content')
<section class="my_grid">
    <div class="container position-relative text-center py-3">
        <div class="my_btn">CURRENT SERIES</div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3   row-cols-lg-4 row-cols-xxl-6 g-3 py-4">

            @foreach ($tumblers as $tumbler)
            <div class="col">
                <div class="my_card text-center">
                    <div class="image_card text-center">
                        <a href="{{route('guest.show', $tumbler->id)}}"> <img src="{{$tumbler->thumb}}" :alt="{{$tumbler->title}}"></a>
                    </div>
                    <h6 class="mt-3">{{$tumbler->series}}</h6>
                </div>
            </div>
            @endforeach
        </div>
        <div class="btn btn-primary rounded-0 px-5">LOAD MORE</div>
    </div>
</section>
<section class="linked">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-5">
                
                <div class="col d-flex align-items-center py-5 justify-content-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    <p class="mb-0 ms-3"><a href="#">DIGITAL COMICS</a></p>
                </div>
                <div class="col d-flex align-items-center py-5 justify-content-center">
                    <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
                    <p class="mb-0 ms-3"><a href="#">DC MERCHANDISE</a></p>
                </div>
                <div class="col d-flex align-items-center py-5 justify-content-center">
                    <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                    <p class="mb-0 ms-3"><a href="#">SUBSCRIPTION</a></p>
                </div>
                <div class="col d-flex align-items-center py-5 justify-content-center">
                    <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
                    <p class="mb-0 ms-3"><a href="#">COMIC SHOP LOCATOR</a></p>
                </div>
                <div class="col d-flex align-items-center py-5 justify-content-center">
                    <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
                    <p class="mb-0 ms-3"><a href="#">DC POWER VISA</a></p>
                </div>
                
            </div>
        </div>
    </section>

@endsection