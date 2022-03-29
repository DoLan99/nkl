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
          <p class="login-box-msg">Đăng nhập để bắt đầu phiên của bạn</p>
    
          <form action="{{route('dashboard.show')}}" method="GET">
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
            <div class="row">
              <div class="col-7">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Ghi nhớ tài khoản
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-5">
                <button type="submit" class="btn btn-primary btn-block">Đăng Nhập</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
          
          <p class="mb-1">
            <a href="#">Quên Mật Khẩu</a>
          </p>
          <p class="mb-0">
            <a href="{{route('signup.show')}}" class="text-center">Đăng Ký</a>
          </p>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    

@endsection
