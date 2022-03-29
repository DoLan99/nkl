@extends('layouts.app')
 
@section('title')
 
@section('sidebar')
    @@parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
<header class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2">Quy định bảo mật và quản lý thông tin</h1>
                    
                </div>
            </div>
        </div>
    </div>
</header>
<section class="content">
    <div class="container">
            <div class="row my-5 justify-content">
                <h5>1. Bảo mật thông tin nguồn hàng</h5>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Chúng tôi cam kết bảo mật tuyệt đối thông tin nguồn hàng của Quý khách. Các hành vi tiết lộ nguồn hàng của một Quý khách bất kỳ cho đối thủ cạnh tranh, từ bất kỳ một nhân sự nào của chúng tôi là hành vi được nghiêm cấm.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Chúng tôi chỉ sử dụng các thông tin lịch sử nhập hàng của Quý khách vào mục đích nâng cao dịch vụ dành cho chính khách hàng và các mục đích thống kê tổng quan thị trường của riêng chúng tôi.</p>
                <h5>2. Bảo mật thông tin cá nhân</h5>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Mọi thông tin cá nhân của Quý khách đăng ký trên hệ thống của chúng tôi được bảo mật tuyệt đối. Chúng tôi cam kết chỉ sử dụng thông tin này trong hoạt động giao dịch với Quý khách và các hoạt động marketing, chăm sóc khách hàng của riêng chúng tôi dành cho Quý khách.</p>  
                <h5>3. Chính sách lưu trữ thông tin </h5>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Chúng tôi sẽ lưu trữ thông tin (đơn hàng, tài chính) của Quý khách trên hệ thống server của chúng tôi.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Thời gian lưu trữ trực tuyến tối thiểu là 06 tháng kể từ thời điểm phát sinh thông tin. Để đáp ứng hiệu năng của hệ thống, chúng tôi có thể phải xóa hoặc ẩn các thông tin quá thời gian lưu trữ.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Chúng tôi sẽ ghi lại các hành động/thao tác và các nội dung trao đổi của Quý khách khi truy cập và sử dụng dịch vụ của chúng tôi nhằm mục đích đảm bảo an toàn và sự rõ ràng của giao dịch, cũng như nâng cao chất lượng dịch vụ khách hàng.</p>
                <p class="fw-bold">&nbsp;&nbsp;&nbsp;&nbsp;Trân trọng!</p>
            </div>
                    
    </div>
</section>

</main>
@endsection