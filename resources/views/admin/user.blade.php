@extends('admin.layout')
@section('titlepage', 'Quản trị người dùng')
@section('content')
<section>
    <div class="container">
        <div class="col3">
            <h2>Thêm Mới</h2>
            <form>
                <input type="text" placeholder="Tên">
                <input type="text" placeholder="Email">
                <input type="submit" value="Thêm">
            </form>
        </div>
        <div class="col9">
            <h2>Danh Sách</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Thao tác</th> <!-- Thêm cột mới -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Người Dùng 1</td>
                        <td>user1@example.com</td>
                        <td class="action-icons">
                            <a href="#"><i class="fas fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Người Dùng 2</td>
                        <td>user2@example.com</td>
                        <td class="action-icons">
                            <a href="#"><i class="fas fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <!-- Các hàng khác -->
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection