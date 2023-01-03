<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Web doc truyen</title>

        <!-- Fonts -->
         <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <link rel="{{ asset('css/style.css') }}" type="" href="stylesheet">
    <!-- <link rel="{{ asset('css/owl.carousel.min.css') }}" type="" href="stylesheet">
    <link rel="{{ asset('css/docs.theme.min.css') }}" type="" href="stylesheet">
    <link rel="{{ asset('css/owl.theme.default.min.css') }}" type="" href="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4bb5f64390.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       
    </head>
    <body>
    <header>
            <div class="header">
            <div class="header">
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container justify-content-between">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="https://st.nettruyentv.com/data/logos/logo-nettruyen.png">
                            </a>
                        </div>
                        <div class="navbar-nav ">                            
                                <form class="navbar-form navbar-right" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Tim kiem" autocomplete="off">
                                        <div class="input-group-btn">
                                            <input type="submit" class="btn btn-default">
                                        </div>  
                                    </div>
                                </form>
                        </div>
                        

                        <div class="navbar-right" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto">
                                                                            
                            </ul>
 
                            <!-- Right Side Of Navbar-->
                            <ul class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
        
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
        <div class="container">
            <div class="navbar-header" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">Trang chủ <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">HOT</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="XepHangMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Xếp hạng
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Top tháng</a>
                    <a class="dropdown-item" href="#">Top tuần</a>
                    <a class="dropdown-item" href="#">Top ngàyngày</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="TheLoaiMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Thể loại
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Manga</a>
                    <a class="dropdown-item" href="#">Manghua</a>
                    <a class="dropdown-item" href="#">Manwa</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tìm truyện</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Theo dõi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Lịch sử</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
         
    <main>
        <div class="container">
            <h3>Truyen hot</h3>
            <div class="owl-carousel owl-theme">
                <div class="item" style="width: 200px; height: 220px;">
                    <a href="https://www.nettruyenup.com/truyen-tranh/do-thi-dinh-phong-cao-thu-246980" title="truyen 1">
                        <img src="https://st.ntcdntempv3.com/data/comics/122/do-thi-dinh-phong-cao-thu.jpg" style="height: 220px;" alt="truyen 1">
                    </a>
                </div>
                <div class="item" style="width: 200px; height: 220px;">
                    <a href="https://www.nettruyenup.com/truyen-tranh/do-thi-dinh-phong-cao-thu-246980" title="truyen 2">
                        <img src="https://st.ntcdntempv3.com/data/comics/122/do-thi-dinh-phong-cao-thu.jpg" style="height: 220px;" alt="truyen 2">
                    </a>
                </div>
                <div class="item" style="width: 200px; height: 220px;">
                    <a href="https://www.nettruyenup.com/truyen-tranh/do-thi-dinh-phong-cao-thu-246980" title="truyen 3">
                        <img src="https://st.ntcdntempv3.com/data/comics/122/do-thi-dinh-phong-cao-thu.jpg" style="height: 220px;" alt="truyen 3">
                    </a>
                </div>
                <div class="item" style="width: 200px; height: 220px;">
                    <a href="https://www.nettruyenup.com/truyen-tranh/do-thi-dinh-phong-cao-thu-246980" title="truyen 4">
                        <img src="https://st.ntcdntempv3.com/data/comics/122/do-thi-dinh-phong-cao-thu.jpg" style="height: 220px;" alt="truyen 4">
                    </a>
                </div>
                <div class="item" style="width: 200px; height: 220px;">
                    <a href="https://www.nettruyenup.com/truyen-tranh/do-thi-dinh-phong-cao-thu-246980" title="truyen 5">
                        <img src="https://st.ntcdntempv3.com/data/comics/122/do-thi-dinh-phong-cao-thu.jpg" style="height: 220px;" alt="truyen 5">
                    </a>
                </div>
                <div class="item" style="width: 200px; height: 220px;">
                    <a href="https://www.nettruyenup.com/truyen-tranh/do-thi-dinh-phong-cao-thu-246980" title="truyen 6">
                        <img src="https://st.ntcdntempv3.com/data/comics/122/do-thi-dinh-phong-cao-thu.jpg" style="height: 220px;" alt="truyen 6">
                    </a>
                </div>
                <div class="item" style="width: 200px; height: 220px;">
                    <a href="https://www.nettruyenup.com/truyen-tranh/do-thi-dinh-phong-cao-thu-246980" title="truyen 7">
                        <img src="https://st.ntcdntempv3.com/data/comics/122/do-thi-dinh-phong-cao-thu.jpg" style="height: 220px;" alt="truyen 7">
                    </a>
                </div>
            </div>

        <div class="row">
            <div id="side-left" class="col-md-8">
                <div class= "container-fluid">
                    <h3>Truyen moi cap nhat</h3>
                    <div class="row">
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg"  class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <a class="btn btn-success" style="" id="" href="">xem tat ca</a>
                    </div>
                    <h3>Truyen hay nen doc</h3>
                    <div class="row">
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg"  class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class ="col-12 col-sm-6 col-md-3 bg-red">
                            <figure>
                                <div class="image">
                                    <a href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" title="nu phu ngay nao...">
                                    <img src="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg" class="figure-img img-fluid z-depth-1">
                                    </a>
                                </div>
                                <figcaption class="figure-caption">
                                    <h4>
                                        <a class="" href="https://st.ntcdntempv3.com/data/comics/211/nu-phu-ngay-nao-cung-muon-ly-hon-voi-ta.jpg">
                                            nu phu ngay nao cung muon
                                        </a>
                                    </h4>
                                    <ul class="">
                                        <li class="">
                                            <a href="" title="">Chap1</a>
                                            <i class="time">1p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap2</a>
                                            <i class="time">2p</i>
                                        </li>
                                        <li class="">
                                            <a href="" title="">Chap3</a>
                                            <i class="time">3p</i>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <a class="btn btn-success" style="" id="" href="">xem tat ca</a>
                    </div> 
                </div>
            </div>

            <div id="side-right" class="col-md-3">
                <div class="container">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="tab-javascript" data-toggle="tab" href="#content-javascript" role="tab" aria-controls="content-javascript" aria-selected="false">
                            Top tháng
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-css" data-toggle="tab"  href="#content-css"  role="tab" aria-controls="content-css" aria-selected="false">
                            Top tuần
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="tab-bootstrap" data-toggle="tab" href="#content-bootstrap" role="tab" aria-controls="content-bootstrap" aria-selected="true">
                            Top ngày
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade" id="content-topthang" role="tabpanel" aria-labelledby="tab-javascript">
                            <div class="topThang">

                            </div>
                        </div>
                        <div class="tab-pane fade" id="content-toptuan" role="tabpanel" aria-labelledby="tab-css">
                            <div class="topTuan">

                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="content-topngay" role="tabpanel" aria-labelledby="tab-bootstrap">
                            <div class="topNgay">

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <nav aria-label="...">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active">
                    <span class="page-link">
                        2
                        <span class="sr-only">(current)</span>
                    </span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        </div>

        </main>

        <footer  class="bg-black text-white text-center text-lg-start footer" id="footer">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Web doc truyen</h5>
                        <a href="{{ route('home') }}">
                            <img src="https://st.nettruyentv.com/data/logos/logo-nettruyen.png" alt="logo">
                        </a>
                        <div class="mt-4">
                            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-facebook-f"></i></a>
                            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-dribbble"></i></a>
                            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-twitter"></i></a>
                            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-google-plus-g"></i></a>
                        </div>                       
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                        <p>
                            Từ khóa
                        </p>
                        <ul>

                        </ul>
                    </div>
                </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:Web truyện
                <a class="text-white" href="{{ route('home') }}">http://localhost:8012/webtruyen/home</a>
            </div>
        </footer>



        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript">
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                dots:false,
                autoplay: true,
                autoplayTimeout: 1500,
                autoplaySpeed: 1000,
                autoplayHoverPause:4,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            })
        </script>
    </body>
</html>
