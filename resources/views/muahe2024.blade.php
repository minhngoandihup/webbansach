@extends('layout')
@section('title', 'Sản phẩm mùa hè 2024')
@section('content')
<!-- Carousel Start -->
<main>

<div class="slider-area">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="slider-active dot-style">

<div class="single-slider slider-height slider-bg1 d-flex align-items-center">
<div class="container">
<div class="row justify-content-center">
<div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
<div class="hero-caption text-center">
<span data-animation="fadeInUp" data-delay=".2s">Khoa học viễn tưởng</span>
<h1 data-animation="fadeInUp" data-delay=".4s">Lịch sử<br> của Phipino</h1>
<a href="#" class="btn hero-btn" data-animation="bounceIn" data-delay=".8s">Xem thêm</a>
</div>
</div>
</div>
</div>
</div>

<div class="single-slider slider-height slider-bg2 d-flex align-items-center">
<div class="container">
<div class="row justify-content-center">
<div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
<div class="hero-caption text-center">
<span data-animation="fadeInUp" data-delay=".2s">Khoa học viễn tưởng</span>
<h1 data-animation="fadeInUp" data-delay=".4s">Lịch sử<br> của Phipino</h1>
<a href="#" class="btn hero-btn" data-animation="bounceIn" data-delay=".8s">Xem thêm</a>
</div>
</div>
</div>
</div>
</div>

<div class="single-slider slider-height slider-bg3 d-flex align-items-center">
<div class="container">
<div class="row justify-content-center">
<div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
<div class="hero-caption text-center">
<span data-animation="fadeInUp" data-delay=".2s">Khoa học viễn tưởng</span>
<h1 data-animation="fadeInUp" data-delay=".4s">Lịch sử<br> của Phipino</h1>
<a href="#" class="btn hero-btn" data-animation="bounceIn" data-delay=".8s">Xem thêm</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="best-selling section-bg">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-7 col-lg-8">
<div class="section-tittle text-center mb-55">
<h2>Sách bán chạy nhất từ trước đến nay</h2>
</div>
</div>
</div>
<div class="row">

<div class="col-xl-12">
<div class="selling-active">
@foreach ($newProducts as $item)
<div class="properties pb-20">
<div class="properties-card">



<div class="properties-img">

<a href="book-details.html"><img src="{{$item->image }}" alt></a>
</div>
<div class="properties-caption">
<h3><a href="book-details.html">{{$item->name }}</a></h3>
<p>{{$item->category->name }}</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>{{number_format( $item->price,0,'.',',' )}} VNĐ</span>
</div>
</div>

</div>
</div>@endforeach

</div>
</div>
</div>
</div>
</div>


<div class="services-area2 top-padding">
<div class="container">
<div class="row">
<div class="col-xl-9 col-lg-9 col-md-8">
<div class="row">

<div class="col-xl-12">
<div class="section-tittle d-flex justify-content-between align-items-center mb-40">
<h2 class="mb-0">Nổi bật trong tuần</h2>
<a href="#" class="browse-btn">Xem thêm</a>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-12">
<div class="services-active">

<div class="single-services d-flex align-items-center">
<div class="features-img">
<img src="img/gallery/best-books1.jpg" alt>
</div>
<div class="features-caption">
<img src="img/icon/logo.html" alt>
<h3>The Rage of Dragons</h3>
<p>By Evan Winter</p>
<div class="price">
<span class="format-number">33333333333 VNĐ</span>
</div>
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(120 Đánh giá)</p>
</div>
<a href="book-details.html" class="border-btn">Xem chi tiết</a>
</div>
</div>

<div class="single-services d-flex align-items-center">
<div class="features-img">
<img src="img/gallery/best-books1.jpg" alt>
</div>
<div class="features-caption">
<img src="img/icon/logo.html" alt>
<h3>The Rage of Dragons</h3>
<p>By Evan Winter</p>
<div class="price">
<span>49.000 VNĐ.00</span>
</div>
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(120 Đánh giá)</p>
</div>
<a href="book-details.html" class="border-btn">Xem chi tiết</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-9">

<div class="google-add">
<img src="img/gallery/ad.jpg" alt class="w-100">
</div>
</div>
</div>
</div>
</div>


<section class="our-client section-padding best-selling">
<div class="container">
<div class="row justify-content-between">
<div class="col-xl-5 col-lg-5 col-md-12">

<div class="section-tittle  mb-40">
<h2>Các mục được xuất bản mới nhất</h2>
</div>
</div>
<div class="col-xl-7 col-lg-7 col-md-12">
<div class="nav-button mb-40">

<nav>
<div class="nav nav-tabs" id="nav-tab" role="tablist">
<a class="nav-link active" id="nav-one-tab" data-bs-toggle="tab" href="#nav-one" role="tab" aria-controls="nav-one" aria-selected="true">Tất cả</a>
<a class="nav-link" id="nav-two-tab" data-bs-toggle="tab" href="#nav-two" role="tab" aria-controls="nav-two" aria-selected="false">Kinh dị</a>
<a class="nav-link" id="nav-three-tab" data-bs-toggle="tab" href="#nav-three" role="tab" aria-controls="nav-three" aria-selected="false">Giật gân</a>
<a class="nav-link" id="nav-four-tab" data-bs-toggle="tab" href="#nav-four" role="tab" aria-controls="nav-four" aria-selected="false">Khoa học viễn tưởng</a>
<a class="nav-link" id="nav-five-tab" data-bs-toggle="tab" href="#nav-five" role="tab" aria-controls="nav-five" aria-selected="false">Lịch sử</a>
</div>
</nav>

</div>
</div>
</div>
</div>
<div class="container">

<div class="tab-content" id="nav-tabContent">
<div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">

<div class="row">
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling7.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling8.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling6.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling4.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling9.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling2.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">

<div class="row">
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling4.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling9.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling2.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling7.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling8.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling6.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">

<div class="row">
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling7.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling8.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling6.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling4.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling9.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling2.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="nav-four-tab">

<div class="row">
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling9.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling2.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling7.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling8.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling6.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling4.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-five" role="tabpanel" aria-labelledby="nav-five-tab">

<div class="row">
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling7.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling8.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling6.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling4.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling9.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="img/gallery/best_selling2.jpg" alt></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<p>(<span>120</span> Đánh giá)</p>
</div>
</div>
<div class="price">
<span>49.000 VNĐ</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-12">
<div class="more-btn text-center mt-15">
<a href="#" class="border-btn border-btn2 more-btn2">Xem thêm</a>
</div>
</div>
</div>
</div>
</section>


<section class="container">
<div class="row align-items-center justify-content-between">
<div class="col-xl-6 col-lg-6">
<div class="wantToWork-area w-padding2 mb-30" data-background="img/gallery/wants-bg1.jpg">
<h2>Lịch sử<br> của Phipino</h2>
<div class="linking">
<a href="#" class="btn wantToWork-btn">Xem chi tiết</a>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-6">
<div class="wantToWork-area w-padding2 mb-30" data-background="img/gallery/wants-bg2.jpg">
<h2>Wilma Mumduya</h2>
<div class="linking">
<a href="#" class="btn wantToWork-btn">Xem chi tiết</a>
</div>
</div>
</div>
</div>
</section>


<section class="subscribe-area">
<div class="container">
<div class="subscribe-caption text-center  subscribe-padding section-img2-bg" data-background="img/gallery/section-bg1.jpg">
<div class="row justify-content-center">
<div class="col-xl-6 col-lg-8 col-md-9">
<h3>Tham gia bản tin</h3>
<p>Lorem bắt đầu hành trình của mình với các sản phẩm gang (CI) vào năm 1980. Mục tiêu chính ban đầu là đảm bảo nước tinh khiết và hệ thống tưới tiêu giá cả phải chăng.</p>
<form action="#">
<input type="text" placeholder="Email của bạn">
<button class="subscribe-btn">Gửi</button>
</form>
</div>
</div>
</div>
</div>
</section>

</main>
@endsection
