@extends('layout.app')

@section('content')
<section class="banner_blue">
</section>
<section class="about py-5">
    <div class="container">
        <div class="row">
            <div class="col-7">
                <div class="my_card p-5 fs-5">
                    <h3 class="fw-bold">{{$comic->title}}</h3>
                    <p>{{$comic->description}}</p>
                    <p> Price: {{$comic->price}}$</p>
                    <p>Series: {{$comic->series}}</p>
                    <p>Sale Date: {{$comic->sale_date}}</p>
                    <p>Type: {{$comic->type}}</p>
                </div>
            </div>
            <div class="col-5 d-flex justify-content-center align-items-center">
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
            </div>
        </div>
    </div>
</section>


@endsection