@extends('client.layouts.master')
@section('css')
<style>
    .header-li-active {
        border-bottom: 3px solid #f5a60d;
    }

    .owl-nav,
    .owl-dots {
        display: none;
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
<div style="background-color: #e4d8c9" class="mt-4">
    <div class="container">
        <div class="row intro-service">
            <div class="col-xl-4 col-4 col-lg-4 col-sm-4">
                <div>
                    <img src="{{ asset('img/icon_table.png') }}" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-4 col-lg-4 col-sm-4 text-center">
                <div>
                    <img src="{{ asset('img/icon_catering.png') }}" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-4 col-sm-4 text-right">
                <div>
                    <img src="{{ asset('img/icon_waitress.png') }}" alt="">
                </div>
            </div>
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
            <h2>DỊCH VỤ</h2>
        </div>
    </div>
    <div class="row list-img-service display-pc">
        @foreach ($home_services as $key => $service)
        @if ($key > 5)
        @break
        @else
        @if ($key < 2) <div class="col-12 col-md-6 col-xl-6 col-lg-6 div-outnner mb-30">
            <a href="{{route('client.service', ['id' => $service->id ])}}" class="d-flex w-100">
                <div class="w-100">
                    <div class="border-img-service">
                        <img src="{{ asset($service->image) }}" alt="" class="img-top-service-home">
                    </div>
                    <div class="bg-div-inner"></div>
                    <div class="div-inner">
                        {{ $service->name }}
                        <span><i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>
            </a>
    </div>


    @elseif ($key < 5) <div class="col-12 col-md-4 col-xl-4 col-lg-4 div-outnner mb-30">
        <a href="{{route('client.service', ['id' => $service->id ])}}" class="d-flex w-100">
            <div class="w-100">
                <div class="border-img-service">
                    <img src="{{ asset($service->image) }}" alt="" class="img-center-service-home">
                </div>
                <div class="bg-div-inner"></div>
                <div class="div-inner">{{ $service->name }}
                    <span><i class="fas fa-arrow-right"></i></span>
                </div>
            </div>
        </a>
</div>
@else
<div class="col-12 col-md-6 col-lg-6 col-xl-6 div-outnner">
    <a href="{{route('client.service', ['id' => $service->id ])}}" class="d-flex w-100">
        <div class="w-100">
            <div class="border-img-service">
                <img src="{{ asset($service->image) }}" alt="" class="img-top-service-home">
            </div>
            <div class="bg-div-inner"></div>
            <div class="div-inner">{{ $service->name }}
                <span><i class="fas fa-arrow-right"></i></span>
            </div>
        </div>
    </a>
</div>

@endif
@endif
@endforeach
<div class="col-12 col-md-6 col-xl-6 col-lg-6 div-outnner">
    <div class="w-100">
        <div class="border-img-service">
            <img src="{{ asset('img/giao-mon-ngon-tan-nha.jpg') }}" alt="">
        </div>
        <div class="bg-div-inner"></div>
        <div class="div-inner">Giao tận nhà
            <span><i class="fas fa-arrow-right"></i></span>
        </div>
    </div>
</div>
</div>

<div class="row list-img-service display-mobile">
    @foreach ($home_services as $keys => $service)
    @if ($keys > 5)
    @break
    @else
    @if ($keys < 2) <div class="col-12 col-sm-6 col-md-6 col-xl-6 col-lg-6 div-outnner mb-30">

        <a href="{{route('client.service', ['id' => $service->id ])}}" class="d-flex w-100">
            <div class="w-100">
                <div class="border-img-service">
                    <img src="{{ asset($service->image) }}" alt="" class="img-top-service-home">
                </div>
                <div class="bg-div-inner"></div>
                <div class="div-inner">
                    {{ $service->name }}
                    <span><i class="fas fa-arrow-right"></i></span>
                </div>
            </div>
        </a>
</div>
@elseif ($keys < 5) <div class="col-12 col-sm-6 col-md-4 col-xl-4 col-lg-4 div-outnner mb-30">
    <a href="{{route('client.service', ['id' => $service->id ])}}" class="d-flex w-100">
        <div class="w-100">
            <div class="border-img-service">
                <img src="{{ asset($service->image) }}" alt="" class="img-center-service-home">
            </div>
            <div class="bg-div-inner"></div>
            <div class="div-inner">{{ $service->name }}
                <span><i class="fas fa-arrow-right"></i></span>
            </div>
        </div>
        </a>
        </div>
        @else
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 div-outnner">
            <a href="{{route('client.service', ['id' => $service->id ])}}" class="d-flex w-100">
                <div class="w-100">
                    <div class="border-img-service">
                        <img src="{{ asset($service->image) }}" alt="" class="img-top-service-home">
                    </div>
                    <div class="bg-div-inner"></div>
                    <div class="div-inner">{{ $service->name }}
                        <span><i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>
            </a>
        </div>
        @endif
        @endif
        @endforeach
        <div class="col-12 col-sm-12 col-md-6 col-xl-6 col-lg-6 div-outnner div-ship">
            <div class="border-img-service">
                <img src="{{ asset('img/giao-mon-ngon-tan-nha.jpg') }}" alt="">
            </div>
            <div class="bg-div-inner"></div>
            <div class="div-inner">Giao tận nhà
                <span><i class="fas fa-arrow-right"></i></span>
            </div>
        </div>
        </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('img/icon/dr.png') }}" class="line-title" alt="">
                    </div>
                </div>
                <div class="col-12 text-center text-title-index">
                    <h2>MÓN NGON HƯƠNG GIANG</h2>
                </div>
            </div>
            <div class="row food_show_in">
                <div class="col-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
                        @foreach ($food_types as $key => $food_type )
                        @if($key !== 0)
                        <li class="nav-item">
                            <a class="nav-link button-map-headquarters" id="food_h_{{ $food_type->id }}" data-toggle="pill" href="#food_{{ $food_type->id }}" role="tab" aria-controls="food_{{ $food_type->id }}" aria-selected="true">{{ $food_type->name }}</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link active button-map-headquarters" id="food_h_{{ $food_type->id }}" data-toggle="pill" href="#food_{{ $food_type->id }}" role="tab" aria-controls="food_{{ $food_type->id }}" aria-selected="false">{{ $food_type->name }}</a>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </div>

                <div class="col-12">
                    <div class="tab-content" id="pills-tabContent">
                        @foreach ($food_types as $key => $food_type )
                        @if($key === 0)
                        <div class="tab-pane active show fade map-headquarters" id="food_{{ $food_type->id }}" role="tabpanel" aria-labelledby="food_h_{{ $food_type->id }}">
                            @else
                            <div class="tab-pane fade map-headquarters" id="food_{{ $food_type->id }}" role="tabpanel" aria-labelledby="food_h_{{ $food_type->id }}">
                                @endif
                                <div class="row">
                                    @foreach ($foods as $ke => $food)
                                        @if ($food->food_type === $food_type->id)
                                            @if ($ke%2!=0)
                                            <div class="col-12 col-md-6 col-lg-6 col-xl-6 dish-list rv-row">
                                                <div class="img-show-dish">
                                                    <img src="{{  $food->image }}" alt="">
                                                </div>
                                                <div class="content-show-dish">
                                                    <p>
                                                        {{ $food->name }}
                                                    </p>
                                                    <span>
                                                        {{ Illuminate\Support\Str::limit($food->description,100, $end='...') }}
                                                    </span>
                                                    <a href="tel:0975364865" class="btn">Đặt món</a>
                                                </div>
                                            </div>
                                            @else
                                            <div class="col-12 col-md-6 col-lg-6 col-xl-6 dish-list">
                                                <div class="img-show-dish">
                                                    <img src="{{  $food->image}}" alt="">
                                                </div>
                                                <div class="content-show-dish">
                                                    <p>
                                                        {{ $food->name }}
                                                    </p>
                                                    <span>
                                                        {{ Illuminate\Support\Str::limit($food->description,100, $end='...') }}
                                                    </span>
                                                    <a href="tel:0975364865" class="btn">Đặt món</a>
                                                </div>
                                            </div>
                                            @endif
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12 view-all-dish mb-3">
                        <a href="{{ route('client.deliciou_foods') }}" class="btn btn-default">Xem tất cả</a>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('img/icon/dr.png') }}" class="line-title" alt="">
                            </div>
                        </div>
                        <div class="col-12 text-center text-title-index">
                            <h2>ĐỊA CHỈ</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active button-map-headquarters" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Cơ sở 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link button-map-headquarters" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Cơ sở
                                        2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link button-map-headquarters" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Cơ sở
                                        3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link button-map-headquarters" id="pills-contact-tab-2" data-toggle="pill" href="#pills-contact-2" role="tab" aria-controls="pills-contact-2" aria-selected="false">Cơ
                                        sở
                                        4</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active map-headquarters" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9630580187704!2d105.81882911541922!3d21.03416409296867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab0ccff62615%3A0xe57fc666d6b7e057!2zNDEgTmfDtSAyMTAsIMSQ4buZaSBD4bqlbiwgQmEgxJDDrG5oLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1626925373642!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                                <div class="tab-pane fade map-headquarters" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.228979025295!2d105.83451831541866!3d20.983456494698164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac5db9f988ff%3A0x424580e244b8cd0d!2zMTc1IMSQ4buLbmggQ8O0bmcsIFBoxrDGoW5nIExp4buHdCwgVGhhbmggWHXDom4sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1633750715130!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                                <div class="tab-pane fade map-headquarters" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3082826525583!2d105.84498991541905!3d21.020347393440197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab921bb44f57%3A0x33a6b56c89f4295d!2zTmfDtSBUcuG6p24gUXXhu5FjIFRv4bqjbiwgVHLhuqduIEjGsG5nIMSQ4bqhbywgSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1626925501063!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                                <div class="tab-pane fade map-headquarters" id="pills-contact-2" role="tabpanel" aria-labelledby="pills-contact-tab-2">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.623771645836!2d105.84499211541926!3d21.04773469250498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abb6afc409e1%3A0x5587b582ae47edb0!2zMTAwIFAuIE5naMSpYSBExaluZywgUGjDumMgeMOhLCBCYSDEkMOsbmgsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1626925526432!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-4 mb-4">
                    <div class="row">
                        <div class="container">
                            <div class="mgb-40 padb-30 auto-invert line-b-4 align-center">
                                <div class="col-12">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('img/icon/dr.png') }}" class="line-title" alt="">
                                    </div>
                                </div>
                                <h2 class="font-cond-b fg-text-d lts-md fs-300 fs-300-xs no-mg" style="margin-top:15px" contenteditable="false">ĐÁNH GIÁ CỦA KHÁCH HÀNG</h2>
                            </div>
                            <div class="owl-carousel owl-theme text-center">
                                <div class="item sub-item-feedback text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="wpx-100 img-round mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                                    <p class="fs-110 font-cond-l" contenteditable="false">" Sed ut perspiciatis unde omnis iste
                                        natus
                                        error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.
                                        "
                                    </p>
                                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Martha Stewart</h5>
                                    <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">Business Woman -
                                        New
                                        York</small>
                                </div>

                                <div class="item sub-item-feedback text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="wpx-100 img-round mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                                    <p class="fs-110 font-cond-l" contenteditable="false">" Sed ut perspiciatis unde omnis iste
                                        natus
                                        error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.
                                        "
                                    </p>
                                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Martha Stewart</h5>
                                    <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">Business Woman -
                                        New
                                        York</small>
                                </div>
                                <div class="item sub-item-feedback text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="wpx-100 img-round mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                                    <p class="fs-110 font-cond-l" contenteditable="false">" Sed ut perspiciatis unde omnis iste
                                        natus
                                        error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.
                                        "
                                    </p>
                                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Martha Stewart</h5>
                                    <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">Business Woman -
                                        New
                                        York</small>
                                </div>
                                <div class="item sub-item-feedback text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="wpx-100 img-round mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                                    <p class="fs-110 font-cond-l" contenteditable="false">" Sed ut perspiciatis unde omnis iste
                                        natus
                                        error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.
                                        "
                                    </p>
                                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Martha Stewart</h5>
                                    <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">Business Woman -
                                        New
                                        York</small>
                                </div>
                                <div class="item sub-item-feedback text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="wpx-100 img-round mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                                    <p class="fs-110 font-cond-l" contenteditable="false">" Sed ut perspiciatis unde omnis iste
                                        natus
                                        error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.
                                        "
                                    </p>
                                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Martha Stewart</h5>
                                    <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">Business Woman -
                                        New
                                        York</small>
                                </div>
                                <div class="item sub-item-feedback text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="wpx-100 img-round mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                                    <p class="fs-110 font-cond-l" contenteditable="false">" Sed ut perspiciatis unde omnis iste
                                        natus
                                        error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.
                                        "
                                    </p>
                                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Martha Stewart</h5>
                                    <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">Business Woman -
                                        New
                                        York</small>
                                </div>
                                <div class="item sub-item-feedback text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="wpx-100 img-round mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                                    <p class="fs-110 font-cond-l" contenteditable="false">" Sed ut perspiciatis unde omnis iste
                                        natus
                                        error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.
                                        "
                                    </p>
                                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Martha Stewart</h5>
                                    <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">Business Woman -
                                        New
                                        York</small>
                                </div>
                                <div class="item sub-item-feedback text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="wpx-100 img-round mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                                    <p class="fs-110 font-cond-l" contenteditable="false">" Sed ut perspiciatis unde omnis iste
                                        natus
                                        error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.
                                        "
                                    </p>
                                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Martha Stewart</h5>
                                    <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">Business Woman -
                                        New
                                        York</small>
                                </div>
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
