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

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('img/icon/dr.png') }}" class="line-title" alt="">
                </div>
            </div>
            <div class="col-12 text-center text-title-index">
                <h2 style="text-transform: uppercase">Thực đơn</h2>
                <div class="row">
                    @foreach($menus as $menu)
                    <div class="col-12 col-xs-6 col-md-4 col-xl-4 col-lg-4 mt-4">
                        <img src="{{ asset($menu->description) }}" class="" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


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
