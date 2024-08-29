@extends('admin.layout')
@section('titlepage', 'Cập nhật sản phẩm')
@section('content')
<section>
    <div class="container2">
        <section>
            <form>
                <label for="product_name">Tên sản phẩm:</label><br>
                <input type="text" id="product_name" name="product_name"><br>
                
                <label for="product_price">Giá:</label><br>
                <input type="text" id="product_price" name="product_price"><br>
                
                <label for="product_image">Hình ảnh:</label><br>
                <input type="file" id="product_image" name="product_image"><br>
                
                <input type="submit" value="Cập nhật">
            </form>
        </section>
    </div>
</section>
@endsection