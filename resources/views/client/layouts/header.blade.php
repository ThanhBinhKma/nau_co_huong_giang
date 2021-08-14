<header class="display-pc">
    <div class="container-fluid">
        <div class="row header-top">
            <div class="col-12 d-flex justify-content-center">
                <div class="fl-gr-1">

                </div>
                <div class="fl-gr-1 text-center">
                    <ul>
                        <li>
                            <strong>Dịch vụ đặt cỗ trọn gói tại nhà</strong>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="">
                        <li class="header-nav-list-contact">
                            <i class="fa fa-phone"></i>
                            0975365865
                        </li>
                        <li class="header-nav-list-contact">
                            <i class="fab fa-facebook-f"></i>
                        </li>
                        <li class="header-nav-list-contact">
                            <i class="far fa-envelope"></i>
                        </li>
                    </ul>
                </div>
                <div class="fl-gr-1"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid header-main-master">
        <nav class="navbar navbar-expand-lg navbar-light header-main">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto d-flex w-100 justify-content-end align-item-center">
                    <li>
                        <a href="/">
                            <img src="{{ asset('img/logo.png') }}" alt="">
                        </a>
                    </li>
                    <li class="fl-gr-1"></li>
                    <li class="nav-item header-li-active">
                        <a class="nav-link" href="{{ route('client.home') }}">Trang chủ <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item header-li-about-active">
                        <a class="nav-link" href="{{ route('client.about') }}">Giới thiệu</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Thực đơn cỗ
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('client.menu') }}">Thực đơn món khai vị</a>
                            <a class="dropdown-item" href="#">Thực đơn món chính</a>
                            <a class="dropdown-item" href="#">Thực đơn cơm</a>
                            <a class="dropdown-item" href="#">Thực đơn canh</a>
                            <a class="dropdown-item" href="#">Thực đơn thực đơn đồ uống</a>
                            <a class="dropdown-item" href="#">Thực đơn món tráng miệng</a>
                            <a class="dropdown-item" href="#">Thực đơn cỗ chay</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dịch vụ
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('client.service') }}">Tiệc tại gia</a>
                            <a class="dropdown-item" href="#">Tiệc cơ quan</a>
                            <a class="dropdown-item" href="#">Tiệc sinh nhật</a>
                            <a class="dropdown-item" href="#">Tiệc đám cưới</a>
                            <a class="dropdown-item" href="#">Tiệc tân gia</a>
                            <a class="dropdown-item" href="#">Tiệc buffet</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid header-main-layer"></div>
</header>

<header class="display-mobile">
    <div class="container-fluid">
        <div class="row header-mobile">
            <div class="col-6">
                <a href="/">
                    <img src="{{ asset('img/logo.png') }}" alt=""></a>
            </div>

        </div>
    </div>
</header>
<div class="header-mobile-humbuger text-right">
    <span></span>
    <span></span>
    <span></span>
</div>

<div class="header-mobile-humbuger-menu">
    <ul>
        <li>
            <a href="">Trang chủ</a>
        </li>
        <li>
            <a href="">Giới thiệu</a>
        </li>
        <li>
            <a href="javascript:void(0)">
                Thực đơn cỗ
            </a>
        </li>
        <li>
            <a href="javascript:void(0)">Dịch vụ</a>
        </li>
        <li><a href="">Liên hệ</a></li>
    </ul>
</div>
