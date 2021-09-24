<header class="display-pc">
    <div class="container-fluid">
        <div class="row header-top">
            <div class="col-12 d-flex justify-content-center">
                <div class="text-center" style="width:50%">
                    <ul>
                        <li>
                            <strong>Dịch vụ đặt cỗ trọn gói tại nhà</strong>
                        </li>
                    </ul>
                </div>
                <div class="">
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
            </div>
        </div>
    </div>
    <div class="container-fluid header-main-master">
        <nav class="navbar navbar-expand-lg navbar-light header-main">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto d-flex w-100 justify-content-end align-item-center">
                    <li>
                        <a href="/">
                            <img src="{{ asset('img/logo.png') }}" alt="">
                        </a>
                    </li>
                    <li class="fl-gr-1"></li>
                    <li class="nav-item header-li-active">
                        <a class="nav-link" href="{{ route('client.home') }}">Trang chủ</a>
                    </li>
                    <li class="nav-item header-li-about-active">
                        <a class="nav-link" href="{{ route('client.about') }}">Giới thiệu</a>
                    </li>
                    <li class="nav-item dropdown header-li-menu-active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Thực đơn cỗ
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($home_menus as $home_menu)
                                <a class="dropdown-item"
                                    href="{{ route('client.menu' , ['slug' => $home_menu->slug]) }}">
                                <span>{{ $home_menu->name }}</span></a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item dropdown header-li-service-active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dịch vụ
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($home_services as $header_service)
                                <a class="dropdown-item"
                                    href="{{ route('client.service', ['id' => $header_service->id ]) }}">{{ $header_service->name }}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('client.contact') }}" class="nav-link">Liên hệ</a>
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
<div class="header-mobile-humbuger text-right display-mobile">
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
            <a href="javascript:void(0)" class="ann menu-menu-on-click">
                Thực đơn cỗ
                <span></span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" class="ann menu-service-on-click">
                Dịch vụ
            </a>
        </li>
        <li>
            <a href="{{ route('client.contact') }}">Liên hệ
            </a>
        </li>
    </ul>
</div>

<div class="header-mobile-humbuger-sub-menu-menu">
    <ul>
        @foreach ($home_menus as $home_menu)
            <li> <a class="dropdown-item" href="{{ route('client.menu' , ['slug' => $home_menu->slug]) }}">{{ $home_menu->name }}</a></li>
        @endforeach
    </ul>
</div>

<div class="header-mobile-humbuger-sub-menu-service">
    <ul>
        @foreach ($home_services as $home_service)
            <li> <a class="dropdown-item" href="{{ route('client.service' , ['id' => $home_service->id]) }}">{{ $home_service->name }}</a></li>
        @endforeach
    </ul>
</div>
