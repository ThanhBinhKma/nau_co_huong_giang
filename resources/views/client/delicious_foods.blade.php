@extends('client.layouts.master')
@section('css')
    <style>
        .header-li-about-active {
            border-bottom: 3px solid #f5a60d;
        }

    </style>
@endsection
@section('content')
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('img/banner1-1400x533.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/banner1-1400x533.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/banner1-1400x533.jpg') }}" alt="Third slide">
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('img/icon/dr.png') }}" class="line-title" alt="">
                </div>
            </div>
            <div class="col-12 text-center text-title-index">
                <h2>MÓN NGON</h2>
            </div>
        </div>
        <div class="row list-img-service">
            @foreach ($foods as $food)
            <div class="col-6 col-md-4 col-lg-4 col-xl-3 mb-3 img-delicious">
                <img src="{{  $food->image  }}" alt="">
                <p>{{ $food->name }}</p>
                <!-- <a href="tel:0975364865" class="btn">Đặt món</a> -->
            </div>
            @endforeach
        </div>
    </div>
@endsection
