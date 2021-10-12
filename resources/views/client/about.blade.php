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
            <h2>GIỚI THIỆU</h2>
        </div>
    </div>
    <div class="row list-img-service">
        <h4>CỖ NGON HƯƠNG GIANG - SẠCH SẼ, VỆ SINH, PHỤC VỤ NHIỆT TÌNH, MÂM CAO ĐẦY CỖ

        </h4>
        <p class="mt-2">
            Hãy để Hương Giang thay bạn “tiếp đón và chiêu đãi” những vị khách của bạn.


            <br>- Món ăn ngon , đa dạng thực khách ăn một lần nhớ mãi không quên.
            <br>
            - Nguyên liệu sạch sẽ, đảm bảo vệ sinh an toàn thực phẩm, an lòng khách ăn, đẹp lòng khách đặt.

            <br>
            - Phục vụ nhiệt tình, nhanh chóng, đúng giờ đảm bảo công việc của khách diễn ra suôn sẻ.

            <br>

            - Giá thành vừa túi tiền, không đắt không rẻ, khách không bị hớ, Hương Giang không bị lỗ.

        </p>
        <img src="{{ asset('images/gioithieu.jpg') }}" alt="">
        <p class="mt-4">
            Gia đình bạn đang cần thuê dịch vụ nấu cỗ tại nhà, gọi ngay Hương Giang để chúng tôi tư vấn menu và giúp bạn
            có một bữa cỗ tuyệt vời để thay bạn phục vụ những vị khách của mình.
            <br>
            Thực đơn đa dạng từ các nguyên liệu sạch sẽ, tươi ngon. Từ các món ăn “đất liền” như chim, gà, lợn, bò cho
            đến món ăn “biển cả” như tôm, cá, mực, ngao,...

            <br>
            Món ăn ngon, khoa học từ món ăn mặn, ăn nhạt, món khai vị, tráng miệng. Món ăn nhiều dinh dưỡng cho đến món
            thanh thanh.
            </p>
            <img src="{{ asset('images/b750923e6b38a266fb29.jpg') }}" alt="">
            <p>
            <br>
            -Tất cả nguyên liệu đảm bảo tươi ngon, rõ ràng nguồn gốc xuất xứ.

            <br>
            -Thời gian phục vụ đúng giờ, nhanh chóng, chuyên nghiệp từ khâu chuẩn bị đến dọn dẹp.

            <br>
            - Còn chần chừ gì, nhanh tay gọi <a href="tel:0975364865">0975364865</a> hoặc inbox để được tư vấn thực đơn phù hợp nhất với chi
            phí và loại hình cỗ nhà bạn.


        </p>
    </div>
</div>
@endsection
