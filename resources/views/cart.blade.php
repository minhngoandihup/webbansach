 @extends('layout')
 @section('title', 'Giỏ Hàng')
 @section('content')
 <main>

<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="slider-area">
<div class="slider-height2 slider-bg5 d-flex align-items-center justify-content-center">
<div class="hero-caption hero-caption2">
<h2>Giỏ hàng</h2>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="cart_area section-padding">
<div class="container">
<div class="cart_inner">
<div class="table-responsive">
<table class="table">
<thead>
<tr>
<th scope="col">Tên sản phẩm</th>
<th scope="col">Giá</th>
<th scope="col">Số lượng</th>
<th scope="col">Tổng tiền</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="media">
<div class="d-flex">
<img src="img/gallery/best-books1.jpg" alt />
</div>
<div class="media-body">
<p>Minimalistic shop for multipurpose use</p>
</div>
</div>
</td>
<td>
<h5>$360.00</h5>
</td>
<td>
<div class="product_count">
<span class="input-number-decrement"> <i class="ti-minus"></i></span>
<input class="input-number" type="text" value="1" min="1" max="10">
<span class="input-number-increment"> <i class="ti-plus"></i></span>
</div>
</td>
<td>
<h5>$360.00</h5>
</td>
</tr>
<tr>
<td>
<div class="media">
<div class="d-flex">
<img src="img/gallery/best_selling1.jpg" alt />
</div>
<div class="media-body">
<p>Minimalistic shop for multipurpose use</p>
</div>
</div>
</td>
<td>
<h5>$299.00</h5>
</td>
<td>
<div class="product_count">
<span class="input-number-decrement"> <i class="ti-minus"></i></span>
<input class="input-number2" type="text" value="1" min="1" max="10">
<span class="input-number-increment"> <i class="ti-plus"></i></span>
</div>
</td>
<td>
<h5>$299.00</h5>
</td>
</tr>
<tr class="bottom_button">
<td>
<a class="btn" href="#">Cập nhật giỏ hàng</a>
</td>
<td></td>
<td></td>
<td>
<div class="cupon_text float-right">
<a class="btn" href="#">Chọn mã giảm giá</a>
</div>
</td>
</tr>
<tr>
<td></td>
<td></td>
<td>
<h5>Tổng tiền</h5>
</td>
<td>
<h5>$2160.00</h5>
</td>
</tr>
<tr class="shipping_area">
<td></td>
<td></td>
<td>
<h5>Phí giao hàng</h5>
</td>
<td>
<div class="shipping_box">
<ul class="list">
<li>
Giao hàng: $5.00
<input type="radio" aria-label="Radio button for following text input">
</li>
<li>
Miễn phí vận chuyển
<input type="radio" aria-label="Radio button for following text input">
</li>
<li>
Giao hàng nhanh: $10.00
<input type="radio" aria-label="Radio button for following text input">
</li>
<li class="active">
Giao hàng tận nơi: $20.00
<input type="radio" aria-label="Radio button for following text input">
</li>
</ul>
<h6>
Tổng tiền vận chuyển
<i class="fa fa-caret-down" aria-hidden="true"></i>
</h6>
<select class="shipping_select">
<option value="1">Bangladesh</option>
<option value="2">India</option>
<option value="4">Pakistan</option>
</select>
<select class="shipping_select section_bg">
<option value="1">Select a State</option>
<option value="2">Select a State</option>
<option value="4">Select a State</option>
</select>
<input class="post_code" type="text" placeholder="Mã giảm giá" />
<a class="btn" href="#">Cập nhật chi tiết</a>
</div>
</td>
</tr>
</tbody>
</table>
<div class="checkout_btn_inner float-right">
<a class="btn" href="#">Tiếp tục mua sắm</a>
<a class="btn checkout_btn" href="#">Tiến hành thanh toán</a>
</div>
</div>
</div>
</div>
</section>

</main>
    @endsection