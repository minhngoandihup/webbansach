@extends('layout')
@section('title', 'Đăng ký')
@section('content')

<main class="login-bg">

<div class="register-form-area">
<div class="register-form text-center">

<div class="register-heading">
<span>Đăng ký</span>
<p>Đăng ký tài khoản của bạn ở đây</p>
</div>

<form action="" method="post">
    @csrf
    <div class="input-box">
        <div class="single-input-fields">
        <label>Họ và Tên</label>
        <input type="text" name="name" placeholder="Nhập họ và tên">
        </div>
        <div class="single-input-fields">
        <label>Email</label>
        <input type="email" name="email" placeholder="Nhập email">
        </div>
        <div class="single-input-fields">
        <label>Mật khẩu</label>
        <input type="password" name="password" placeholder="Nhập mật khẩu">
        </div>
        <div class="single-input-fields">
        <label>Nhập lại mật khẩu</label>
        <input type="password" placeholder="Nhập lại mật khẩu">
        </div>
        </div>
        
        <div class="register-footer">
        <p> Bạn đã có tài khoản? <a href="{{ route('login') }}"> Đăng nhập</a> ở đây</p>
        <button class="submit-btn3" type="submit">Đăng ký </button>
</form>
</div>
</div>
</div>

</main>

@endsection