<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title >NamKien Logistic </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css') }}/app.css" rel="stylesheet" />
    </head>
    
    <body class="d-flex flex-column">
        
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="{{route('welcome.show')}}">NamKien Logistic</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="{{route('welcome.show')}}">Trang chủ</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('banggia.show')}}">Bảng giá</a></li>
                            <li class="btn-group"><a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Điều khoản & Chính sách</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('chinhsachmuahang.show')}}">Chính sách mua hàng</a></li>
                                    <li><a class="dropdown-item" href="{{route('chinhsachdoitrahang.show')}}">Chính sách đổi trả hàng</a></li>
                                    <li><a class="dropdown-item" href="{{route('chinhsachkiemhang.show')}}">Chính sách kiểm hàng</a></li>
                                    <li><a class="dropdown-item" href="{{route('chinhsachdongkiengo.show')}}">Chính sách đóng kiện gỗ</a></li>
                                    <li><a class="dropdown-item" href="{{route('quydinhhangcam.show')}}">Quy định hàng cấm nhập khẩu về Việt Nam </a></li>
                                    <li><a class="dropdown-item" href="{{route('quydinhbaomat.show')}}">Quy định bảo mật và quản lý thông tin khách hàng</a></li>
                                    <li><a class="dropdown-item" href="{{route('chinhsachkhieunaiboithuong.show')}}">Chính sách khiếu nại và bồi thường</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="">Hướng dẫn đặt hàng</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('login.show')}}">Đăng nhập</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('signup.show')}}">Đăng ký</a></li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->
            @yield('content')           
        <!-- Footer-->
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
