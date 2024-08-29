@extends('layout')
@section('title', 'Chi Tiết Sản Phẩm')
@section('content')

<main>

<div class="services-area2">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="row">
<div class="col-xl-12">

<div class="single-services d-flex align-items-center mb-0">
<div class="features-img">
<img src="{{asset('img/gallery/'.$sp->image)}}" alt>
</div>
<div class="features-caption">
<h3>{{$sp->name}}</h3>
<h5>{{ $sp->category->name }}</h5>
<div class="price">
<span>{{number_format($sp->price,0,'.','.')}} VNĐ</span>
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
<a href="#" class="white-btn mr-10">Thêm vào giỏ hàng</a>
<a href="#" class="border-btn share-btn"><i class="bi bi-share-fill"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="our-client section-padding best-selling">
<div class="container">
<div class="row">
<div class="offset-xl-1 col-xl-10">
<div class="nav-button f-left">

<nav>
<div class="nav nav-tabs " id="nav-tab" role="tablist">
<a class="nav-link active" id="nav-one-tab" data-bs-toggle="tab" href="#nav-one" role="tab" aria-controls="nav-one" aria-selected="true">Mô tả</a>
<a class="nav-link" id="nav-two-tab" data-bs-toggle="tab" href="#nav-two" role="tab" aria-controls="nav-two" aria-selected="false">Tác giả</a>
<a class="nav-link" id="nav-three-tab" data-bs-toggle="tab" href="#nav-three" role="tab" aria-controls="nav-three" aria-selected="false">Bình luận</a>
<a class="nav-link" id="nav-four-tab" data-bs-toggle="tab" href="#nav-four" role="tab" aria-controls="nav-four" aria-selected="false">Đánh giá</a>
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
<div class="offset-xl-1 col-lg-9">
<p>Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in Reading at the age of 15, where she went to secretarial school and then into an insurance office. After moving to London and then Hampton, she eventually married her next door neighbour from Reading, John Cook. He was an officer in the Merchant Navy and after he left the sea in 1956, they bought a pub for a year before John took a job in Southern Rhodesia with a motor company. Beryl bought their young son a box of watercolours, and when showing him how to use it, she decided that she herself quite enjoyed painting. John subsequently bought her a child’s painting set for her birthday and it was with this that she produced her first significant work, a half-length portrait of a dark-skinned lady with a vacant expression and large drooping breasts. It was aptly named ‘Hangover’ by Beryl’s husband and</p>
<p>It is often frustrating to attempt to plan meals that are designed for one. Despite this fact, we are seeing more and more recipe books and Internet websites that are dedicated to the act of cooking for one. Divorce and the death of spouses or grown children leaving for college are all reasons that someone accustomed to cooking for more than one would suddenly need to learn how to adjust all the cooking practices utilized before into a streamlined plan of cooking that is more efficient for one person creating less.</p>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">

<div class="row">
<div class="offset-xl-1 col-lg-9">
<p>Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in Reading at the age of 15, where she went to secretarial school and then into an insurance office. After moving to London and then Hampton, she eventually married her next door neighbour from Reading, John Cook. He was an officer in the Merchant Navy and after he left the sea in 1956, they bought a pub for a year before John took a job in Southern Rhodesia with a motor company. Beryl bought their young son a box of watercolours, and when showing him how to use it, she decided that she herself quite enjoyed painting. John subsequently bought her a child’s painting set for her birthday and it was with this that she produced her first significant work, a half-length portrait of a dark-skinned lady with a vacant expression and large drooping breasts. It was aptly named ‘Hangover’ by Beryl’s husband and</p>
<p>It is often frustrating to attempt to plan meals that are designed for one. Despite this fact, we are seeing more and more recipe books and Internet websites that are dedicated to the act of cooking for one. Divorce and the death of spouses or grown children leaving for college are all reasons that someone accustomed to cooking for more than one would suddenly need to learn how to adjust all the cooking practices utilized before into a streamlined plan of cooking that is more efficient for one person creating less.</p>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">

<div class="row">
<div class="offset-xl-1 col-lg-9">
<p>Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in Reading at the age of 15, where she went to secretarial school and then into an insurance office. After moving to London and then Hampton, she eventually married her next door neighbour from Reading, John Cook. He was an officer in the Merchant Navy and after he left the sea in 1956, they bought a pub for a year before John took a job in Southern Rhodesia with a motor company. Beryl bought their young son a box of watercolours, and when showing him how to use it, she decided that she herself quite enjoyed painting. John subsequently bought her a child’s painting set for her birthday and it was with this that she produced her first significant work, a half-length portrait of a dark-skinned lady with a vacant expression and large drooping breasts. It was aptly named ‘Hangover’ by Beryl’s husband and</p>
<p>It is often frustrating to attempt to plan meals that are designed for one. Despite this fact, we are seeing more and more recipe books and Internet websites that are dedicated to the act of cooking for one. Divorce and the death of spouses or grown children leaving for college are all reasons that someone accustomed to cooking for more than one would suddenly need to learn how to adjust all the cooking practices utilized before into a streamlined plan of cooking that is more efficient for one person creating less.</p>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="nav-four-tab">

<div class="row">
<div class="offset-xl-1 col-lg-9">
<p>Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in Reading at the age of 15, where she went to secretarial school and then into an insurance office. After moving to London and then Hampton, she eventually married her next door neighbour from Reading, John Cook. He was an officer in the Merchant Navy and after he left the sea in 1956, they bought a pub for a year before John took a job in Southern Rhodesia with a motor company. Beryl bought their young son a box of watercolours, and when showing him how to use it, she decided that she herself quite enjoyed painting. John subsequently bought her a child’s painting set for her birthday and it was with this that she produced her first significant work, a half-length portrait of a dark-skinned lady with a vacant expression and large drooping breasts. It was aptly named ‘Hangover’ by Beryl’s husband and</p>
<p>It is often frustrating to attempt to plan meals that are designed for one. Despite this fact, we are seeing more and more recipe books and Internet websites that are dedicated to the act of cooking for one. Divorce and the death of spouses or grown children leaving for college are all reasons that someone accustomed to cooking for more than one would suddenly need to learn how to adjust all the cooking practices utilized before into a streamlined plan of cooking that is more efficient for one person creating less.</p>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-five" role="tabpanel" aria-labelledby="nav-five-tab">

<div class="row">
<div class="offset-xl-1 col-lg-9">
<p>Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in Reading at the age of 15, where she went to secretarial school and then into an insurance office. After moving to London and then Hampton, she eventually married her next door neighbour from Reading, John Cook. He was an officer in the Merchant Navy and after he left the sea in 1956, they bought a pub for a year before John took a job in Southern Rhodesia with a motor company. Beryl bought their young son a box of watercolours, and when showing him how to use it, she decided that she herself quite enjoyed painting. John subsequently bought her a child’s painting set for her birthday and it was with this that she produced her first significant work, a half-length portrait of a dark-skinned lady with a vacant expression and large drooping breasts. It was aptly named ‘Hangover’ by Beryl’s husband and</p>
<p>It is often frustrating to attempt to plan meals that are designed for one. Despite this fact, we are seeing more and more recipe books and Internet websites that are dedicated to the act of cooking for one. Divorce and the death of spouses or grown children leaving for college are all reasons that someone accustomed to cooking for more than one would suddenly need to learn how to adjust all the cooking practices utilized before into a streamlined plan of cooking that is more efficient for one person creating less.</p>
</div>
</div>
</div>
</div>
</div>
</section>

<div class="container">
    <div class="best-selling p-0">
<div class="row">
    <h3>Sản phẩm liên quan</h3>
@foreach ($splq as $item)
  
  
  <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
  <div class="properties pb-30">
  <div class="properties-card">
  <div class="properties-img">
  <a href="{{route('productsDetail', $item->id)}}">
    <img src="{{asset('img/gallery/'.$item->image)}}" alt>
  </a>
  </div>
  <div class="properties-caption properties-caption2">
  <h3>
    <a href="{{route('productsDetail', $item->id)}}">
      {{ $item->name}}
    </a>
  </h3>
  <p></p>
  
  <div class="properties-footer d-flex justify-content-between align-items-center">
  <div class="review">
  <div class="rating">
  <i class="bi bi-star-fill"></i>
  <i class="bi bi-star-fill"></i>
  <i class="bi bi-star-fill"></i>
  <i class="bi bi-star-fill"></i>
  <i class="bi bi-star-fill"></i>
  </div>
  <p>(<span>120</span> Đánh giá)</p>
  </div>
  </div>
  <div class="price">
  <span>{{number_format( $item->price,0,'.','.')}} VNĐ</span>
  </div>
  </div>
  </div>
  </div>
  </div>
  @endforeach
</div>
</div>
</div>
</main>

@endsection