@extends('client.layouts.master')
@section('css')
    <style>
        .header-li-service-active {
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
                <h2>TIEC TAN GIA</h2>
            </div>
        </div>
        <div class="row list-img-service ">
            <div class="w-100 mb-4">
                <span class="title-sub-menu">Mam goi y co chuyen vit</span>
            </div>
            <div class="col-6">
                <div class="text-center menu-in-service">
                    <span>Menu</span>
                </div>
                <div class="row">
                    <div class="col-5">
                        <ol>
                            <li>Vit quay bac kinh</li>
                            <li>Vit quay bac kinh</li>
                            <li>Vit quay bac kinh</li>
                            <li>Vit quay bac kinh</li>
                            <li>Vit quay bac kinh</li>
                            <li>Vit quay bac kinh</li>
                            <li>Vit quay bac kinh</li>
                            <li>Vit quay bac kinh</li>
                        </ol>
                    </div>
                    <div class="col-2 offset-col-1">
                        <div><span>....................</span></div>
                        <div><span>....................</span></div>
                        <div><span>....................</span></div>
                        <div><span>....................</span></div>
                        <div><span>....................</span></div>
                        <div><span>....................</span></div>
                        <div><span>....................</span></div>
                        <div><span>....................</span></div>
                    </div>
                    <div class="col-4">
                        <div><span>220,000 d</span></div>
                        <div><span>220,000 d</span></div>
                        <div><span>220,000 d</span></div>
                        <div><span>220,000 d</span></div>
                        <div><span>220,000 d</span></div>
                        <div><span>220,000 d</span></div>
                        <div><span>220,000 d</span></div>
                        <div><span>220,000 d</span></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <img src="https://nauco29.com/files/thumb/490/395//uploads/content/cochuyenmon-16.jpg" alt="">
            </div>
        </div>
        <div class="line-with w-100 mb-3"></div>
        <div class="row list-img-service">
            <div class="w-100 mb-4">
                <span class="title-sub-menu">Mam goi y co chuyen vit</span>
            </div>
            <br>
            <div class="col-6">
                <div class="text-center menu-in-service">
                    <span>Menu</span>
                </div>
                <div class="row">
                    <div class="col-5">
                        <ol>
                            <li>Vit quay bac kinh</li>
                            <li>Vit quay bac kinh</li>
                            <li>Vit quay bac kinh</li>
                            <li>Vit quay bac kinh</li>
                            <li>Vit quay bac kinh</li>
                            <li>Vit quay bac kinh</li>
                            <li>Vit quay bac kinh</li>
                            <li>Vit quay bac kinh</li>
                        </ol>
                    </div>
                    <div class="col-2 offset-col-1">
                        <div><span>....................</span></div>
                        <div><span>....................</span></div>
                        <div><span>....................</span></div>
                        <div><span>....................</span></div>
                        <div><span>....................</span></div>
                        <div><span>....................</span></div>
                        <div><span>....................</span></div>
                        <div><span>....................</span></div>
                    </div>
                    <div class="col-4">
                        <div><span>220,000 d</span></div>
                        <div><span>220,000 d</span></div>
                        <div><span>220,000 d</span></div>
                        <div><span>220,000 d</span></div>
                        <div><span>220,000 d</span></div>
                        <div><span>220,000 d</span></div>
                        <div><span>220,000 d</span></div>
                        <div><span>220,000 d</span></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <img src="https://nauco29.com/files/thumb/490/395//uploads/content/cochuyenmon-16.jpg" alt="">
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
            // autoplay: true,
            // autoplayTimeout: 1000,
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
