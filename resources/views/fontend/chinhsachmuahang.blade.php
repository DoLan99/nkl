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
                                <h1 class="display-5 fw-bolder text-white mb-2">Chính sách mua hàng</h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <section class="content">
                <div class="container">
                        <div class="row my-5 justify-content">
                            <h5>1. Định nghĩa</h5>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Mua hàng là quá trình NAMKIENLOGISTICS làm việc với Quý khách và Nhà cung cấp (NCC) để thực hiện việc mua đơn hàng theo đúng yêu cầu hợp lý của Quý khách và khả năng đáp ứng của NCC.</p>
                            <h5>2. Mức phí mua hàng</h5>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Mức phí mua hàng được quy định trong bảng phí dịch vụ. Vui lòng tham khảo <a href="#" class="text-reset">tại đây.</a></p>
                            <h5>3. Quy định mua hàng</h5>
                            <h6>a. Hàng hóa</h6>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Là các sản phẩm không nằm trong danh mục hàng Quốc cấm của Nhà nước, hàng không được phép mua theo quy định của chúng tôi.</p>
                            <h6>b. Thời gian mua hàng</h6>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Chúng tôi cam kết hoàn thành việc mua hàng trong vòng 24h làm việc tính từ thời điểm đơn hàng được đặt cọc trong giờ hành chính và trước 16h00 cùng ngày. Trong trường hợp có lý do khách quan không thể mua được (ví dụ: cần chờ Quý khách xác nhận lại thông tin, cần chờ NCC phản hồi lại thông tin), chúng tôi sẽ thông báo với Quý khách trên đơn.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Chúng tôi chỉ thực hiện việc mua các đơn hàng đã đủ điều kiện về tài chính. Trường hợp đơn hàng có phát sinh tăng số lượng, tăng giá… dẫn đến thiếu tài chính; Chúng tôi sẽ yêu cầu Quý khách nạp bổ sung tài chính theo đúng quy định trước khi mua đơn hàng.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Chúng tôi cam kết không thu phí dịch vụ mua hàng đối với những đơn hàng được xác nhận là không mua theo đúng cam kết do lỗi chủ quan của chúng tôi.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Chính sách mua hàng 24h áp dụng các đơn hàng đặt cọc trong giờ hành chính, trước 16h00 tất cả các ngày trong tuần từ thứ 2 đến thứ 7 trừ các ngày chủ nhật, các dịp lễ và Namkiennhaphang.com cam kết sẽ thông báo trước tới quý khách khi có bất kỳ sự thay đổi nào trên website của chúng tôi.</p>
                            <h6>c. Thông tin giao dịch</h6>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Chúng tôi căn cứ vào các thông tin trên đơn để thực hiện giao dịch. Trong trường hợp chúng tôi cần xác nhận thông tin từ Quý khách (ví dụ: hỏi lại sản phẩm), Quý khách vui lòng phản hồi sớm trên đơn.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Do đặc thù các đơn hàng có nhiều sản phẩm, và việc bán hàng trực tuyến thường xuyên có tình trạng hết hàng đối với một số sản phẩm nhất định; chúng tôi sẽ vẫn đặt mua đơn hàng nếu có một trong số các sản phẩm trên đơn bị hết hàng. Trong trường hợp có yêu cầu bắt buộc mua đủ các mặt hàng, Quý khách vui lòng ghi chú trên đơn để nhân viên mua hàng có thể xử lý theo yêu cầu của Quý khách.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- NAMKIENLOGISTICS thực hiện các yêu cầu mua sản phẩm theo trình tự ưu tiên như sau: ghi chú trên sản phẩm; các thuộc tính sản phẩm Quý khách đã chọn trên công cụ đặt hàng; ghi chú trên đơn hàng. Quý khách lưu ý ghi chú yêu cầu rõ ràng, tránh gây hiểu nhầm (ví dụ: Không viết tắt M thay cho “mình”, vì M rất dễ nhầm lẫn với kích cỡ sản phẩm đặt mua). Chúng tôi sẽ không chịu trách nhiệm khi thông tin Quý khách ghi chú trên đơn không rõ ràng.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Chúng tôi chỉ kiểm tra và xử lý các yêu cầu/trả lời các câu hỏi liên quan đến việc tìm hiểu thông tin đơn hàng nếu các yêu cầu đó được Quý khách ghi chú trên đơn hàng trước thời điểm nhân viên giao dịch thực hiện việc mua hàng 30 phút (bao gồm cả yêu cầu về số lượng sản phẩm tối thiểu cần mua trên đơn).</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Chúng tôi sẽ thực hiện truy thu/hoàn lại tài chính trên đơn hàng khi có phát sinh thêm tăng/giảm liên quan tới số lượng sản phẩm và phí vận chuyển.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Đối với các sản phẩm thuộc nhóm có nguy cơ cao (hư hại trong quá trình vận chuyển, hạn chế vận chuyển,…), NAMKIENLOGISTICS sẽ cảnh báo lại rủi ro cho Quý khách kính đề nghị Quý khách thực hiện các biện pháp giảm thiểu nguy cơ và cam kết chấp nhận rủi ro trước khi mua hàng (xác nhận trên đơn).</p>
                            <h6>d. Phí vận chuyển nội địa TQ</h6>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Chúng tôi chủ động điền phí vận chuyển cho các đơn hàng theo quy định về cách tính phí vận chuyển của NCC và các quy định tính phí vận chuyển đã được thông báo. Nếu cần kiểm tra lại phí vận chuyển, Quý khách vui lòng thông báo trước thời gian mua hàng 30 phút.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Phí vận chuyển nội địa cho các đơn hàng cùng sản phẩm, cùng số lượng, cùng NCC có thể khác nhau trong các lần mua hàng (do NCC có nhiều chính sách, sử dụng hình thức vận chuyển khác nhau cho mỗi thời điểm,…). Chúng tôi sẽ không thông báo lại mức phí vận chuyển nội địa cho đơn hàng nếu mức phí không vượt quá mức khung phí chuyển phát nhanh tại Trung Quốc (tham khảo tại trang phí dịch vụ) hoặc không có yêu cầu từ Quý khách.</p>
                            <h6>e. Hủy đơn hàng</h6>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Trước, trong và sau khi mua hàng nhưng phải trước thời điểm NCC phát hàng; Quý khách & chúng tôi có thể hủy đơn hàng vào các thời điểm và trong các trường hợp sau:</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Sau 05 ngày liên lạc (05 ngày làm việc) mà vẫn không nhận được thông tin phản hồi từ NCC.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Sau 05 ngày chúng tôi thông báo nhưng Quý khách không bổ sung tài chính cho đơn hàng.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Muốn hủy đơn, Quý khách báo với chúng tôi chậm nhất trong vòng 2 tiếng kể từ khi chuyển tiền cọc theo số hotline: 0358.222.891 để được hỗ trợ.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Chúng tôi chỉ chấp nhận các yêu cầu hủy hàng khi có ghi chú trên đơn hàng trong thời gian quy định.</p>
                            <h6>f. Các lưu ý</h6>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Quý khách vui lòng cung cấp đầy đủ thông tin liên hệ (email và số điện thoại) khi sử dụng dịch vụ đặt hàng của chúng tôi.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Trong một số trường hợp chúng tôi sẽ chủ động liên lạc với Quý khách để xác nhận thông tin và thỏa thuận thêm những nội dung phát sinh, thông tin liên quan đến đơn hàng. Trong trường hợp thông tin liên hệ không chính xác, chúng tôi không đảm bảo việc giao dịch được thực hiện đúng trong thời gian quy định.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Nhà cung cấp (NCC): Là cá nhân/tổ chức cung cấp hàng hóa mà Quý khách đặt mua, có mối quan hệ độc lập với chúng tôi.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Với tư cách là đơn vị trung gian nhập hàng hóa, chúng tôi sẽ làm việc với NCC để đảm bảo hàng hóa đáp ứng đúng các yêu cầu nằm trong phạm vi dịch vụ mà NAMKIENLOGISTICS cung cấp.</p>
                            <p class="fw-bold">&nbsp;&nbsp;&nbsp;&nbsp;Trân trọng!</p>
                        </div>
                                
                </div>
            </section>
            
            </main>
@endsection