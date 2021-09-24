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
                <h2>LIÊN HỆ</h2>
                <p>Bạn có thể liên hệ với chúng tôi theo 1 trong các địa chỉ cửa hàng trong hệ thống nhà hàng của chúng tôi: <br>

                    Hoặc điền đầy đủ những thông tin yêu cầu vào form bên dưới rồi nhấn nút 'Gửi liên hệ'. Bộ phận chăm sóc khách hàng của chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất:</p>
            </div>
        </div>
        <div class="row list-img-service">
            <div class="col-12 col-sm-12 col-lg-6 col-md-12">
                <form>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Họ tên</label>
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nguyễn Văn A">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Địa chỉ</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Số điện</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="0912345678">
                      </div>

                      <div class="form-group">
                        <label for="exampleFormControlInput1">Tiêu đề</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Tôi muốn đặt cỗ">
                      </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Nội dung</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                   <div class="form-group text-center">
                    <button class="btn btn-contact">Gửi liên hệ</button>
                   </div>
                  </form>
            </div>
            <div class="col-12 col-sm-12 col-lg-6 col-md-12">
                <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active button-map-headquarters" id="pills-home-tab" data-toggle="pill"
                                href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Cơ sở 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link button-map-headquarters" id="pills-profile-tab" data-toggle="pill"
                                href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Cơ sở
                                2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link button-map-headquarters" id="pills-contact-tab" data-toggle="pill"
                                href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Cơ sở
                                3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link button-map-headquarters" id="pills-contact-tab-2" data-toggle="pill"
                                href="#pills-contact-2" role="tab" aria-controls="pills-contact-2" aria-selected="false">Cơ
                                sở
                                4</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active map-headquarters" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9630580187704!2d105.81882911541922!3d21.03416409296867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab0ccff62615%3A0xe57fc666d6b7e057!2zNDEgTmfDtSAyMTAsIMSQ4buZaSBD4bqlbiwgQmEgxJDDrG5oLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1626925373642!5m2!1svi!2s"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="tab-pane fade map-headquarters" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.1976080840955!2d105.8527756154192!3d21.02477779328904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abeb7c0656e9%3A0x5bd7ed294bae5fc3!2zMTggUC4gTmfDtCBRdXnhu4FuLCBUcsOgbmcgVGnhu4FuLCBIb8OgbiBLaeG6v20sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1626925476663!5m2!1svi!2s"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="tab-pane fade map-headquarters" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3082826525583!2d105.84498991541905!3d21.020347393440197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab921bb44f57%3A0x33a6b56c89f4295d!2zTmfDtSBUcuG6p24gUXXhu5FjIFRv4bqjbiwgVHLhuqduIEjGsG5nIMSQ4bqhbywgSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1626925501063!5m2!1svi!2s"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="tab-pane fade map-headquarters" id="pills-contact-2" role="tabpanel"
                            aria-labelledby="pills-contact-tab-2">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.623771645836!2d105.84499211541926!3d21.04773469250498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abb6afc409e1%3A0x5587b582ae47edb0!2zMTAwIFAuIE5naMSpYSBExaluZywgUGjDumMgeMOhLCBCYSDEkMOsbmgsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1626925526432!5m2!1svi!2s"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
