@extends('client.layouts.master')
@section('css')
    <style>
        .header-li-about-active {
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
                <h2>MÓN KHAI VỊ</h2>
                <p>Món khai vị là những món ăn không thể thiếu trong mỗi thực đơn. Các món ăn khai vị ngon và đúng quy cách
                    sẽ giúp kích thích vị giác và hệ tiêu hóa của bạn</p>
            </div>
        </div>
        <div class="row list-img-service">
            <p class="title-sub-menu">Món sup </p>
            <div class="owl-carousel owl-theme">
                <div class="item item-sub-menu">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="http://beeimg.com/images/h26180623163.jpg" alt="">
                    </a>
                    <div class="title-sub-sub-menu">
                        <p>Mon trung</p>
                    </div>
                </div>
                <div class="item item-sub-menu">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="http://beeimg.com/images/h26180623163.jpg" alt="">
                    </a>
                    <div class="title-sub-sub-menu">
                        <p>Mon trung</p>
                    </div>
                </div>
                <div class="item item-sub-menu">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="http://beeimg.com/images/h26180623163.jpg" alt="">
                    </a>
                    <div class="title-sub-sub-menu">
                        <p>Mon trung</p>
                    </div>
                </div>
                <div class="item item-sub-menu">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="http://beeimg.com/images/h26180623163.jpg" alt="">
                    </a>
                    <div class="title-sub-sub-menu">
                        <p>Mon trung</p>
                    </div>
                </div>
                <div class="item item-sub-menu">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="http://beeimg.com/images/h26180623163.jpg" alt="">
                    </a>
                    <div class="title-sub-sub-menu">
                        <p>Mon trung</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row list-img-service">
            <p class="title-sub-menu">Món sup </p>
            <div class="owl-carousel owl-theme">
                <div class="item item-sub-menu">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="http://beeimg.com/images/h26180623163.jpg" alt="">
                    </a>
                    <div class="title-sub-sub-menu">
                        <p>Mon trung</p>
                    </div>
                </div>
                <div class="item item-sub-menu">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="http://beeimg.com/images/h26180623163.jpg" alt="">
                    </a>
                    <div class="title-sub-sub-menu">
                        <p>Mon trung</p>
                    </div>
                </div>
                <div class="item item-sub-menu">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="http://beeimg.com/images/h26180623163.jpg" alt="">
                    </a>
                    <div class="title-sub-sub-menu">
                        <p>Mon trung</p>
                    </div>
                </div>
                <div class="item item-sub-menu">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="http://beeimg.com/images/h26180623163.jpg" alt="">
                    </a>
                    <div class="title-sub-sub-menu">
                        <p>Mon trung</p>
                    </div>
                </div>
                <div class="item item-sub-menu">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="http://beeimg.com/images/h26180623163.jpg" alt="">
                    </a>
                    <div class="title-sub-sub-menu">
                        <p>Mon trung</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row list-img-service">
            <p class="title-sub-menu">Món sup </p>
            <div class="owl-carousel owl-theme">
                <div class="item item-sub-menu">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="http://beeimg.com/images/h26180623163.jpg" alt="">
                    </a>
                    <div class="title-sub-sub-menu">
                        <p>Mon trung</p>
                    </div>
                </div>
                <div class="item item-sub-menu">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="http://beeimg.com/images/h26180623163.jpg" alt="">
                    </a>
                    <div class="title-sub-sub-menu">
                        <p>Mon trung</p>
                    </div>
                </div>
                <div class="item item-sub-menu">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="http://beeimg.com/images/h26180623163.jpg" alt="">
                    </a>
                    <div class="title-sub-sub-menu">
                        <p>Mon trung</p>
                    </div>
                </div>
                <div class="item item-sub-menu">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="http://beeimg.com/images/h26180623163.jpg" alt="">
                    </a>
                    <div class="title-sub-sub-menu">
                        <p>Mon trung</p>
                    </div>
                </div>
                <div class="item item-sub-menu">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="http://beeimg.com/images/h26180623163.jpg" alt="">
                    </a>
                    <div class="title-sub-sub-menu">
                        <p>Mon trung</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row list-img-service">
            <p class="title-sub-menu">Món sup </p>
            <div class="owl-carousel owl-theme">
                <div class="item item-sub-menu">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="http://beeimg.com/images/h26180623163.jpg" alt="">
                    </a>
                    <div class="title-sub-sub-menu">
                        <p>Mon trung</p>
                    </div>
                </div>
                <div class="item item-sub-menu">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="http://beeimg.com/images/h26180623163.jpg" alt="">
                    </a>
                    <div class="title-sub-sub-menu">
                        <p>Mon trung</p>
                    </div>
                </div>
                <div class="item item-sub-menu">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="http://beeimg.com/images/h26180623163.jpg" alt="">
                    </a>
                    <div class="title-sub-sub-menu">
                        <p>Mon trung</p>
                    </div>
                </div>
                <div class="item item-sub-menu">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="http://beeimg.com/images/h26180623163.jpg" alt="">
                    </a>
                    <div class="title-sub-sub-menu">
                        <p>Mon trung</p>
                    </div>
                </div>
                <div class="item item-sub-menu">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="http://beeimg.com/images/h26180623163.jpg" alt="">
                    </a>
                    <div class="title-sub-sub-menu">
                        <p>Mon trung</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
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
            autoplayTimeout: 1000,
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
