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
                                <h1 class="display-5 fw-bolder text-white mb-2">Chính sách đổi trả hàng</h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <section class="content">
                <div class="container">
                        <div class="row my-5 justify-content">
                            <h5>1. Định nghĩa</h5>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Đổi hàng: là hoạt động chúng tôi làm việc với Nhà cung cấp (NCC) để thực hiện việc đổi hàng để nhận lại hàng thay thế.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Trả hàng: là hoạt động Quý khách trả lại hàng hóa mà Quý khách không nhận do lỗi từ NCC, lỗi dịch vụ của chúng tôi hoặc do mong muốn chủ quan của Quý khách và nhận lại tiền mua hàng.</p>
                            <h5>2. Chính sách đổi/ trả hàng</h5>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Trong trường hợp Quý khách đổi/ trả hàng do lỗi dịch vụ của chúng tôi: Chúng tôi sẽ thực hiện việc nhận hàng tại các điểm giao dịch của chúng tôi. Sau khi nhận hàng, chúng tôi sẽ hoàn lại số tiền hàng cho Quý khách và chúng tôi chủ động thực hiện các hoạt động đổi/ trả hàng cho NCC (nếu cần).</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Trong trường hợp Quý khách đổi/ trả hàng do lỗi từ phía NCC, không thuộc phạm vi cam kết các dịch vụ của chúng tôi như mua hàng, kiểm hàng:</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Nếu lỗi sai được phát hiện từ thời điểm kiểm hàng và Quý khách không đồng ý nhận hàng lỗi, chúng tôi sẽ làm việc với NCC để đổi/ trả hàng và sẽ hoàn tiền lại cho Quý khách ngay khi NCC hoàn tiền cho chúng tôi.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Nếu lỗi sai được phát hiện khi Quý khách đã nhận hàng và không nằm trong phạm vi dịch vụ kiểm hàng của chúng tôi, Chúng tôi sẽ thực hiện nhận lại hàng sau khi đã liên lạc với NCC và NCC đã đồng ý việc trả hàng.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Trong trường hợp đổi/ trả hàng theo mong muốn của Quý khách, xuất phát từ lỗi của NCC:</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Chúng tôi sẽ hỗ trợ làm việc với NCC để đổi/ trả hàng, tuy nhiên, chúng tôi không cam kết việc trả hàng cho NCC sẽ thành công cho tới khi việc trả hàng kết thúc (xác định bằng việc NCC hoàn tiền cho chúng tôi). Trong trường hợp trả hàng không thành công, Quý khách sẽ chịu rủi ro liên quan đến hàng hóa và chi phí đổi trả.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Trong trường hợp Quý khách yêu cầu đổi/ trả hàng, nếu việc đổi/ trả hàng được NCC chấp thuận; Chúng tôi sẽ miễn phí công trả hàng, tuy vậy sẽ thu phí vận chuyển để trả hàng và chỉ hoàn lại tiền hàng cho Quý khách sau khi đã nhận được tiền bồi hoàn từ NCC.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Đối với các đơn hàng chúng tôi đã mua và thanh toán theo yêu cầu/ chỉ định của Quý khách, chúng tôi chỉ có thể hỗ trợ tiến hành khiếu nại đến NCC và không chịu bất cứ trách nhiệm nào khi NCC từ chối xử lý khiếu nại không hoàn tiền cho sản phẩm đã mua.</p>
                            <h5>3.   Quy trình đổi/ trả hàng</h5>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Bước 1: Quý khách thực hiện việc tạo khiếu nại dịch vụ trên đơn hàng để yêu cầu đổi/ trả hàng. Để quá trình thực hiện khiếu nại đổi/ trả hàng được thuận lợi, Quý khách cần gửi đầy đủ thông tin, hình ảnh thể hiện lỗi sai khác của hàng hóa.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Bước 2: Sau khi nhận được đề xuất của Quý khách, phòng Chăm sóc khách hàng sẽ liên lạc với NCC tại Trung Quốc để tiến hành thỏa thuận đổi/ trả hàng. Khi NCC Trung Quốc chấp nhận đổi/ trả hàng, phòng Chăm sóc khách hàng sẽ liên lạc với Quý khách để thông báo tới Quý khách nội dung chi tiết và các yêu cầu của việc đổi/ trả hàng.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Bước 3: Sau khi đã tìm hiểu và xác nhận đồng ý đổi /trả hàng, Quý khách cần gửi sản phẩm cần đổi trả đến các điểm giao dịch của chúng tôi và các giấy tờ liên quan (nếu có); Quý khách lưu ý giữ nguyên vỏ hộp hoặc các phụ kiện đi kèm (nếu có).</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Bước 4: Chúng tôi nhận lại sản phẩm và thực hiện việc đổi/ trả hàng, theo dõi quá trình xử lý và cập nhật thông tin cho Quý khách.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Bước 5: Chúng tôi đóng khiếu nại sau khi nhận được phản hồi chính thức của NCC và thông báo tới Quý khách.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;Lưu ý</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Chúng tôi chỉ tiếp nhận những yêu cầu đổi/ trả hàng nếu đơn hàng cần đổi/ trả vẫn nằm trong quy định về thời gian xử lý của NCC Trung Quốc. Đồng thời, do việc đổi/ trả hàng Quốc tế phải trải qua một thời gian khá lâu (thông thường là 15 ngày), nên khi có yêu cầu đổi/ trả hàng, Quý khách cần kiên nhẫn chờ đợi, chúng tôi sẽ thông báo đến Quý khách tình hình của việc đổi/ trả hàng khi có kết quả.</p>
                            <p class="fw-bold">&nbsp;&nbsp;&nbsp;&nbsp;Trân trọng!</p>
                        </div>
                                
                </div>
            </section>
            
            </main>
@endsection