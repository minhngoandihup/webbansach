@extends('layout')
@section('title', 'Đăng Nhập')
@section('content')
<main class="login-bg">

<div class="login-form-area">
<div class="login-form">

<div class="login-heading">
<span>Đăng nhập</span>
<p>Nhập thông tin để đăng nhập</p>
</div>

<form action="" method="post">
    @csrf
    @if ($message = Session::get('error'))
                                <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>	
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
    <div class="input-box">
        <div class="single-input-fields">
        <label>Tên hoặc Email của bạn</label>
        <input type="text" name="email" placeholder="Tên / Email đăng nhập">
        </div>
        <div class="single-input-fields">
        <label>Mật khẩu</label>
        <input type="password" name="password" placeholder="Nhập mật khẩu">
        </div>
        <div class="single-input-fields login-check">
        <input type="checkbox" id="fruit1" name="keep-log">
        <label for="fruit1">Lưu thông tin đăng nhập</label>
        <a href="#" class="f-right">Quên mật khẩu?</a>
        </div>
        </div>
        
        <div class="login-footer">
        <p>Bạn chưa có tài khoản ? <a href="{{ route('register') }}">Đăng ký</a> tại đây</p>
        <button class="submit-btn3" type="submit">Đăng nhập</button>
</form>
</div>
</div>
</div>

</main>
@endsection