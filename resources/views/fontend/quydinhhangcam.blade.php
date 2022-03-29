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
                    <h1 class="display-5 fw-bolder text-white mb-2">Quy định hàng cấm nhập khẩu về Việt Nam</h1>
                    
                </div>
            </div>
        </div>
    </div>
</header>
<section class="content">
    <div class="container">
            <div class="row my-5 justify-content">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;Chúng tôi nhận đặt mua tất cả những mặt hàng có bán trên các webite thương mại điện tử Trung Quốc, chấp nhận thanh toán qua internet, trừ hàng cấm trong danh mục hàng cấm nhập khẩu về Việt Nam</p>
                <h5>* HÀNG HÓA CẤM ĐẶT BAO GỒM:</h5>
                <p class="fw-bold">&nbsp;&nbsp;&nbsp;&nbsp;- Các loại vật phẩm, hàng hóa quốc cấm như ma túy, chất kích thích thần kinh, vũ khí đạn dược, trang thiết bị quân sự, văn hóa phẩm đồi trụy, tài liệu, ấn phẩm phản động, kích động chống lại nước Cộng hòa Xã hội Chủ nghĩa Việt Nam.</p>
                <p class="fw-bold">&nbsp;&nbsp;&nbsp;&nbsp;- Các mặt hàng thực phẩm chức năng, mỹ phẩm, nước hoa, đồ ăn, thuốc , dung dịch, ...</p>
                <p class="fw-bold">&nbsp;&nbsp;&nbsp;&nbsp;- Vật hoặc chất dễ nổ, dễ cháy và các chất gây nguy hiểm hoặc làm mất vệ sinh, gây ô nhiễm môi trường.</p>
                <p class="fw-bold">&nbsp;&nbsp;&nbsp;&nbsp;- Sinh vật sống.</p>
                <p class="fw-bold">&nbsp;&nbsp;&nbsp;&nbsp;(Nếu quý khách cố tình mua sinh vật sống, trong trường hợp bị cơ quan chức năng thu hồi Quý khách sẽ hoàn toàn chịu trách nhiệm trước cơ quan pháp luật).</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Trong qua trình kiểm hàng, nếu chúng tôi phát hiện đơn hàng của Quý khách có kèm các sản phẩm nói trên, chúng tôi xin phép được tiêu hủy những sản phẩm này mà không chịu trách nhiệm bồi hoàn lại cho Quý khách.</p>
                
                <p class="fw-bold">&nbsp;&nbsp;&nbsp;&nbsp;Trân trọng!</p>
            </div>
                    
    </div>
</section>

</main>
@endsection