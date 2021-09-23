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
            <p class="mt-2">Dịch vụ nấu cỗ Hương Giang là dịch vụ đặt cỗ trọn gói tại nhà có gần 15 năm kinh nghiệm trong lĩnh
                vực đặt cỗ, đi lên và phát triển dựa trên tiêu chí: “Uy tín – Chuyên nghiệp – Chất lượng”. Cho đến
                nay đã có nhiều bước tiến quan trọng và cải thiện thêm những phong cách mới lạ, độc đáo và sang
                trọng cho mỗi buổi tiệc, sự kiện.
                Tại dịch vụ nấu cỗ Hương Giang chúng tôi cam kết sẽ nỗ lực mang đến sự thành công và ấn tượng nhất
                cho ngày trọng đại của Quý vị.
            </p>
        </div>
    </div>
@endsection
