
<link rel="shortcut icon" type="image/x-icon" href="{{asset('img/icon/favicon.png')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/slicknav.css')}}">
<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('css/price_rangs.css')}}">
<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
<link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('css/slick.css')}}">
<link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<header>
<div class="header-area">
<div class="main-header ">
<div class="header-top ">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="d-flex justify-content-between align-items-center flex-sm">
<div class="header-info-left d-flex align-items-center">

<div class="logo">
<a href=""><img src="{{asset('img/logo/logo.png')}}" alt></a>
</div>

<form action="{{route('product.search')}}" method="GET" class="form-box">
  <input type="text" name="query" placeholder="Tìm sách bạn muốn">
    <button type="submit">
        <i class="bi bi-search"></i>
    </button>
</form>
</div>
<div class="header-info-right d-flex align-items-center">
<ul>
<li><a href="#">Câu hỏi</a></li>
<li><a href="#">Theo dõi</a></li>
<li class="shopping-card">
<a href="{{route('register')}}"><img src="{{asset('img/icon/cart.svg')}}" alt></a>
</li>
<li><a href="{{route('login')}}" class="btn header-btn">Đăng nhập</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="header-bottom  header-sticky">
<div class="container">
<div class="row align-items-center">
<div class="col-xl-12">

<div class="logo2">
<a href="index.html"><img src="../public/img/logo/logo.png" alt></a>
</div>

<div class="main-menu text-center d-none d-lg-block">
<nav>
<ul id="navigation">
<li><a href="{{ route('home')}}">Trang chủ</a></li>
<li><a href="{{ route('product')}}">Sản phẩm</a></li>
<li><a href="{{ route('about')}}">Giới thiệu</a></li>
<li><a href="#">Pages</a>
<ul class="submenu">
<li><a href="{{ route('login') }}">Đăng nhập</a></li>
<li><a href="{{ route('cart')}}">Giỏ hàng</a></li>
<li><a href="{{ route('checkout') }}">Thanh toán</a></li>
<li><a href="{{ route('productdetail') }}">Chi tiết sản phẩm</a></li>
<li><a href="{{ route('detailblog')}}">Chi tiết Blog</a></li>
</ul>
</li>
<li><a href="{{ route('blog') }}">Blog</a></li>
<li><a href="{{ route('contact')}}">Liên hệ</a></li>
<li><a href="{{ route('muahe2024') }}">Sảm phẩm hè 2024</a></li>
</ul>
</nav>
</div>
</div>

<div class="col-xl-12">
<div class="mobile_menu d-block d-lg-none"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</header>