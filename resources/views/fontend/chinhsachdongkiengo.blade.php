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
                                <h1 class="display-5 fw-bolder text-white mb-2">Chính sách đóng kiện gỗ</h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <section class="content">
                <div class="container">
                        <div class="row my-5 justify-content">
                            <h5>1. Thông tin về dịch vụ đóng kiễn gỗ</h5>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Đóng gỗ là một hình thức đảm bảo an toàn đối với hàng hóa nhất là hàng hóa dễ vỡ, dễ biến dạng trong quá trình vận chuyển.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;* Lưu ý: đối với kiện hàng đã được người bán đóng gỗ và Quý khách không sử dụng dịch vụ đóng gỗ của chúng tôi, chúng tôi không đảm bảo được chất lượng đóng gỗ của người bán. </p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Vì vậy, nếu kiện hàng về có rủi ro gãy nát, hỏng hóc sản phẩm, chúng tôi xin phép từ chối trách nhiệm giải quyết bồi thường, tuy nhiên chúng tôi sẽ cố gắng hết sức hỗ trợ Quý khách khiếu nại với NCC để đảm bảo quyền lợi của Quý khách.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;* Trong trường hợp nhà cung cấp Trung Quốc đóng gỗ không đảm bảo để vận chuyển về Việt Nam, chúng tôi sẽ chụp ảnh và khuyến nghị Quý khách nên sử dụng thên dịch vụ đóng kiện gỗ của chúng tôi.</p>
                            <h5>2. Chi phí đóng kiện gỗ được xác định như thế nào?</h5>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- So với hàng hóa thông thường, hàng hóa đóng gỗ khi vận chuyển Trung Quốc – Việt Nam sẽ được tính phí như sau:</p>
                            <p class="fw-bold" >&nbsp;&nbsp;&nbsp;&nbsp;PHÍ ĐÓNG GỖ = 20 tệ/kg đầu + 1 tệ/kg tiếp theo</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Cân nặng sử dụng để tính phí đóng kiện gỗ là mức cân nặng so sánh giữa cân nặng thực tế và cân nặng quy đổi. Mức cân nặng nào lớn hơn sẽ được áp dụng để tính phí đóng kiện, và được hệ thống thực hiện tự động.</p>
                            <h5>3. Cách thức đăng ký sử dụng dịch vụ</h5>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Đối với các hàng hóa dễ vỡ hoặc các hàng hóa dễ hư hỏng do va đập, chúng tôi đề nghị Quý khách đóng kiện gỗ để đảm bảo an toàn đối với hàng hóa. Trong trường hợp không đóng kiện gỗ, Quý khách sẽ chịu các rủi ro hư hỏng hàng hóa trên đường vận chuyển.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Để sử dụng hình thức đóng kiện gỗ hàng hóa, Quý khách có thể lựa chọn dịch vụ đóng kiện gỗ khi tạo đơn hàng hoặc ghi chú trên đơn hàng trước khi chúng tôi tiến hành mua hàng. Các yêu cầu đóng kiện gỗ hàng hóa sau khi mua hàng cần thông báo trực tiếp với nhân viên tư vấn của chúng tôi để có thể đăng ký sử dụng kịp thời trước khi hàng hóa được xuất khỏi kho Trung Quốc.</p>
                            <p class="fw-bold">&nbsp;&nbsp;&nbsp;&nbsp;Trân trọng!</p>
                        </div>
                                
                </div>
            </section>
            
            </main>
@endsection