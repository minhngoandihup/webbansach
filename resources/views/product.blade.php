  @extends('layout')
  @section('title', 'Sản Phẩm' )
  @section('content')
  
  
  <main>

<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="slider-area">
<div class="slider-height2 slider-bg4 d-flex align-items-center justify-content-center">
<div class="hero-caption hero-caption2">
<h2>Danh mục sách</h2>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="listing-area pt-50 pb-50">
<div class="container">
<div class="row">

<div class="col-xl-4 col-lg-4 col-md-6">

<div class="category-listing mb-50">

<div class="single-listing">

<div class="select-Categories pb-30">
<div class="small-tittle mb-20">
<h4>Lọc theo thể loại</h4>
</div>
@foreach ($category as $item)
<label class="container">
  <li><a href="{{ route('productBycategory', $item->id)}}"> {{ $item->name}}</a></li>
<input type="checkbox">

</label>
@endforeach


</div>


<aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow mb-40">
<div class="small-tittle">
<h4>Lọc theo giá</h4>
</div>
<div class="widgets_inner">
  <div class="range_item">
    <input type="text" class="js-range-slider" value />
    <div class="d-flex align-items-center">
      <div class="price_value d-flex justify-content-center">
        <input type="text" class="js-input-from" id="amount" readonly />
        <span>đến</span>
        <input type="text" class="js-input-to" id="amount" readonly />
      </div>
    </div>
  </div>
</div>

</aside>


<div class="select-job-items2 mb-30">
<div class="col-xl-12">
<select name="select2">
<option value>Lọc theo đánh giá</option>
<option value>Đánh giá 5 sao</option>
<option value>Đánh giá 4 sao</option>
<option value>Đánh giá 3 sao</option>
<option value>Đánh giá 2 sao</option>
<option value>Đánh giá 1 sao</option>
</select>
</div>
</div>


<div class="select-Categories pt-100 pb-60">
<div class="small-tittle mb-20">
<h4>Lọc theo nhà sản xuất</h4>
</div>
<label class="container">Nhà xuất bản xanh
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Nhà xuất bản Anondo
<input type="checkbox" checked="checked active">
<span class="checkmark"></span>
</label>
<label class="container">Nhà xuất bản Rinku
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Nhà xuất bản Sheba
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Nhà xuất bản đỏ
<input type="checkbox">
<span class="checkmark"></span>
</label>
</div>


<div class="select-Categories">
<div class="small-tittle mb-20">
<h4>Lọc theo tên tác giả</h4>
</div>
<label class="container">Buster Hyman
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Phil Harmonic
<input type="checkbox" checked="checked active">
<span class="checkmark"></span>
</label>
<label class="container">Cam L. Toe
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Otto Matic
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Juan Annatoo
<input type="checkbox">
<span class="checkmark"></span>
</label>
</div>

</div>
</div>

</div>

<div class="col-xl-8 col-lg-8 col-md-6">
<div class="row justify-content-end">
<div class="col-xl-4">
<div class="product_page_tittle">
<div class="short_by">
<select name="#" id="product_short_list">
<option>Sắp xếp theo độ phổ biến</option>
<option>Tên</option>
<option>Mới nhất</option>
<option>Cỗ điển</option>
<option>Giá cả</option>
</select>
</div>
</div>
</div>
</div>
<div class="best-selling p-0">
<div class="row">
  @foreach ($product as $item)
  
  
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="{{route('productsDetail', $item->id)}}">
  <img src="{{asset('uploaded/'.$item->image)}}" alt>
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
<div class="pagination">
    {{$product->links('pagination::default')}}
</div>
</div>

<!-- <div class="row">
<div class="col-xl-12">
   <div class="more-btn text-center mt-15">
<a href="#" class="border-btn border-btn2 more-btn2">Xem thêm</a>
</div>
</div>
</div>
</div> -->
</div>
</div>
</div>


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