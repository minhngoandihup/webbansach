@extends('admin.layout')
@section('titlepage', 'Danh sách sản phẩm')
@section('content')
<section>
    <div class="container">
        <div class="col12">
            <h2>Cập Nhật Sản Phẩm</h2>
            <form action="{{ route('productupdate') }}" method="post" enctype="multipart/form-data">
               @csrf
                <select name="category_id" id="">
                    <option value="0" selected>Chọn danh mục</option>
                    @foreach ($category as $item)
                        @if ($item->id==$product->category_id)
                         <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                        @else
                         <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endif
                
                    @endforeach
                </select>
                
                <input type="text" name="name" value="{{ $product->name }}" placeholder="Tên sản phẩm">
                <input type="text" name="price" value="{{ $product->price }}" placeholder="Giá">
                <input type="text" name="quantity" value="{{ $product->quantity }}" placeholder="Số lượng">
                <input type="file" name="image"> <!-- Thêm trường nhập hình ảnh -->
                <img src="{{ asset('uploaded/'.$product->image) }}" style="width:150px" alt="">
                <textarea name="description" rows="5" style="width:100%">{{$product->description}}</textarea>
                <input type="hidden" name="id" value="{{ $product->id }}">
            
                <input type="submit" value="Cập nhật">
            </form>
        </div>
        <div class="col12">
            <h2>Danh Sách Sản Phẩm</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hình ảnh</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Lượt xem</th>
                        <th>Lượt bán</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)                    
                    <tr>
                        <td rowspan="2">{{$item->id}}</td>
                        <td rowspan="2"><img style="width:60px;" src="{{asset('uploaded/'.$item->image)}}" alt=""></td>
                        <td rowspan="2">{{$item->name}}</td>
                        <td rowspan="2">{{number_format( $item->price,0,'.','.')}} VNĐ</td>
                        <td rowspan="2">{{$item->quantity}}</td>
                        <td rowspan="2">{{$item->view}}</td>
                        <td rowspan="2">{{$item->sold}}</td>
                        <td class="action-icons">
                            <a href="{{route('productupdateform',$item->id)}}">Edit</a>                        
                        </td>                        
                    </tr>
                    <tr>
                        <td class="action-icons">
                            <a href="{{route('productdelete',$item->id)}}" onclick="return confirm('Bạn có chắc chắn là muốn xóa sản phẩm ' + '{{ $item->name }}'.toUpperCase())">Delete</a>                          
                        </td> 
                    </tr>
                    @endforeach                    
                </tbody>
            </table>
            <div class="pagination">
                {{ $products->links('pagination::default')}}
            </div>
        </div>
    </div>
</section>

@endsection