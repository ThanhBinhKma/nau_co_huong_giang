@extends('client.layouts.master')
@section('css')
    <style>
        .header-li-menu-active {
            border-bottom: 3px solid #f5a60d;
        }

        .owl-nav,
        .owl-dots {
            display: none;
        }

        .item-sub-menu img {
            width: 300px;
            height: 300px;
            object-fit: cover;
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
                <h2 style="text-transform: uppercase">{{($menu->name) }}</h2>
                <p class="mt-3">{{$menu->description}}</p>
            </div>
        </div>

        @foreach ($foods as  $food)
        <div class="row list-img-service">

            <p class="title-sub-menu">{{ $food->name }} </p>
            <div class="owl-carousel owl-theme">
                @foreach($food->subfoods as $subfood)
                <div class="item item-sub-menu">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="{{ asset('images/' . $subfood->image) }}" alt="">
                    </a>
                    <div class="title-sub-sub-menu">
                        <p>{{ $subfood->name }}</p>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
        @endforeach
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel();
        });
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            items: 2,
            autoplay: true,
            autoplayTimeout: 1500,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
@endsection
