<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trang chủ - Dịch vụ nấu cỗ Hương Giang</title>
    <link rel="icon" href="{{ asset('images/cropped-1060134560-shutterstock_1060134560-e1621501058161-32x32.png') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('font/Montserrat-Medium.ttf') }}">
    <link rel="stylesheet" href="{{ asset('font/Montserrat-BoldItalic.ttf') }}">
    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    @yield('css')
</head>

<body>
    <div>
        @include('client.layouts.header')
        <div class="main">
            @yield('content')
        </div>
        @include('client.layouts.footer')

    </div>

    <div class="phonering-alo-phone phonering-alo-green phonering-alo-show" id="phonering-alo-phoneIcon">
        <div class="phonering-alo-ph-circle"></div>
         <div class="phonering-alo-ph-circle-fill"></div>
        <a href="tel:+84975364865" class="pps-btn-img" title="Liên hệ">
         <div class="phonering-alo-ph-img-circle"></div>
         </a>
        </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.header-mobile-humbuger').on('click', function() {
                $('.header-mobile-humbuger').toggleClass('open');
                $('.header-mobile-humbuger-menu').toggleClass('active');
                $('.header-mobile-humbuger-sub-menu-menu').removeClass('active');
                $('.header-mobile-humbuger-sub-menu-service').removeClass('active');
            })
            $('.menu-menu-on-click').on('click', function() {
                $('.header-mobile-humbuger-sub-menu-menu').toggleClass('active');
            })

            $('.menu-service-on-click').on('click', function() {
                $('.header-mobile-humbuger-sub-menu-service').toggleClass('active');
            })
        })
    </script>
    @yield('script')
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=1561160237359966&autoLogAppEvents=1" nonce="29BZE7M1"></script>
    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "111761914287754");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
</body>

</html>
