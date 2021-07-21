@extends('client.layouts.master')
@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('img/banner1-1400x533.jpg')}}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('img/banner1-1400x533.jpg')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('img/banner1-1400x533.jpg')}}" alt="Third slide">
        </div>
    </div>
</div>
<div style="background-color: #e4d8c9" class="mt-4">
    <div class="container">
        <div class="row intro-service">
            <div class="col-4">
                <img src="{{asset('img/icon_table.png')}}" alt="">
                <p></p>
            </div>
            <div class="col-4">
                <img src="{{asset('img/icon_catering.png')}}" alt="">
                <p></p>
            </div>
            <div class="col-4">
                <img src="{{asset('img/icon_waitress.png')}}" alt="">
                <p></p>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <img src="{{asset('img/ico_line.png')}}" alt="">
        </div>
        <div class="col-12 text-center text-title-index">
            <h2>Các dịch vụ</h2>
        </div>
    </div>
    <div class="row list-img-service">
        <div class="col-6 div-outnner">
            <img src="{{asset('img/dat-tiec-tai-nha-mon-ngon-1.png')}}" alt="">
            <div class="div-inner">Tiec tai gia</div>
        </div>
        <div class="col-6 div-outnner">
            <img src="{{asset('img/dat-tiec-tai-co-quan.jpg')}}" alt="">
            <div class="div-inner">Tiec tai gia</div>
        </div>
    </div>

    <div class="row list-img-service">
        <div class="col-4 div-outnner">
            <img src="{{asset('img/tiec-sinh-nhat.jpg')}}" alt="">
            <div class="div-inner">Tiec tai gia</div>
        </div>
        <div class="col-4 div-outnner">
            <img src="{{asset('img/tiec-cuoi-2.jpg')}}" alt="">
            <div class="div-inner">Tiec tai gia</div>
        </div>
        <div class="col-4 div-outnner">
            <img src="{{asset('img/tiec-tan-gia.png')}}" alt="">
            <div class="div-inner">Tiec tai gia</div>
        </div>
    </div>

    <div class="row list-img-service">
        <div class="col-6 div-outnner">
            <img src="{{asset('img/tiec-buffet.jpg')}}" alt="">
            <div class="div-inner">Tiec tai gia</div>
        </div>
        <div class="col-6 div-outnner">
            <img src="{{asset('img/giao-mon-ngon-tan-nha.jpg')}}" alt="">
            <div class="div-inner">Tiec tai gia</div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <img src="{{asset('img/ico_line.png')}}" alt="">
        </div>
        <div class="col-12 text-center text-title-index">
            <h2>Món ngon huong giang</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-3 img-dish">
            <img src="{{asset('img/ngong-tron-kieu-thai_200x200.jpg')}}" alt="">
        </div>
        <div class="col-3 img-dish">
            <img src="{{asset('img/ngong-tron-kieu-thai_200x200.jpg')}}" alt="">
        </div>
        <div class="col-3 img-dish">
            <img src="{{asset('img/ngong-tron-kieu-thai_200x200.jpg')}}" alt="">
        </div>
        <div class="col-3 img-dish">
            <img src="{{asset('img/ngong-tron-kieu-thai_200x200.jpg')}}" alt="">
        </div>
        <div class="col-3 img-dish">
            <img src="{{asset('img/ngong-tron-kieu-thai_200x200.jpg')}}" alt="">
        </div>
        <div class="col-3 img-dish">
            <img src="{{asset('img/ngong-tron-kieu-thai_200x200.jpg')}}" alt="">
        </div>
        <div class="col-3 img-dish">
            <img src="{{asset('img/ngong-tron-kieu-thai_200x200.jpg')}}" alt="">
        </div>
        <div class="col-3 img-dish">
            <img src="{{asset('img/ngong-tron-kieu-thai_200x200.jpg')}}" alt="">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <img src="{{asset('img/ico_line.png')}}" alt="">
        </div>
        <div class="col-12 text-center text-title-index">
            <h2>Cac dia chi</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                        aria-controls="pills-home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                        aria-controls="pills-contact" aria-selected="false">Contact</a>
                </li>
            </ul>
        </div>
        <div class="col-12">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.2378986837434!2d105.8107805144631!3d20.9830987947125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acec170cc8c5%3A0x74c492d6d8383390!2zSG_DoG5nIMSQ4bqhbyBUaMOgbmgsIEtpbSBHaWFuZywgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1626619791526!5m2!1svi!2s"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4 mb-4">
    <div class="row">
        <div class="col-12">
            <img src="{{asset('img/ico_line.png')}}" alt="">
        </div>
        <div class="col-12 text-center text-title-index">
            <h2>Danh gia cua khach hang ve chung toi</h2>
        </div>
    </div>
    <div class="row">
        <div class="carousel-item active">

            <div class="row">
              <div class="col-md-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                       alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a class="btn btn-primary">Button</a>
                  </div>
                </div>
              </div>

              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                       alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a class="btn btn-primary">Button</a>
                  </div>
                </div>
              </div>

              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                       alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a class="btn btn-primary">Button</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
    </div>
    </div>
</div>
@endsection
