@extends('layouts.appadmin')
 
@section('title')
 
@section('sidebar')
    @@parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
<body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="{{route('welcome.show')}}"><b>NAMKIEN LOGISTIC</b></a>
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Tạo một tài khoản mới</p>
    
          <form action="{{route('login.show')}}" method="GET">
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Mật Khẩu">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Nhập Lại Mật Khẩu">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Họ">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user-alt"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="Text" class="form-control" placeholder="Tên">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user-alt"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Số Điện Thoại">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-phone"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Địa Chỉ">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-house-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Mã Nhân Viên Bán Hàng">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user-tag"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-7">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Tôi đồng ý với tất cả điều khoản
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-5">
                <button type="submit" class="btn btn-primary btn-block">Đăng Ký</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
          
          <p class="mb-1">
            <a href="{{route('login.show')}}">Tôi Đã Có Tài Khoản</a>
          </p>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>

@endsection