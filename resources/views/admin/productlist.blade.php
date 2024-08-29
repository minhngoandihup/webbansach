@extends('admin.layout')
@section('titlepage', 'Danh sách sản phẩm')
@section('content')
<section>
    <div class="container">
        <div class="col12">
            <h2>Thêm Mới Sản Phẩm</h2>
            <form action="{{ route('productadd') }}" method="post" enctype="multipart/form-data">
               @csrf
                <select name="category_id" id="">
                    <option value="0" selected>Chọn danh mục</option>
                    @foreach ($category as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                <input type="text" name="name" placeholder="Tên sản phẩm">
                <input type="text" name="price" placeholder="Giá">
                <input type="text" name="quantity" placeholder="Số lượng">
                <input type="file" name="image"> <!-- Thêm trường nhập hình ảnh -->
                <input type="submit" value="Thêm">
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