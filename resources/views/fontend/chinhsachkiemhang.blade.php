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
                    <h1 class="display-5 fw-bolder text-white mb-2">Chính sách kiểm hàng</h1>
                    
                </div>
            </div>
        </div>
    </div>
</header>
<section class="content">
    <div class="container">
            <div class="row my-5 justify-content">
                <h5>1. Định nghĩa</h5>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Kiểm hàng là thực hiện các công việc kiểm tra và so sánh các sản phẩm/hàng hóa trong kiện hàng nhận được từ Nhà cung cấp (NCC) với các sản phẩm hiển thị ở từng link sản phẩm trong đơn hàng, ghi nhận lại các thông tin về số lượng sản phẩm nhận được, các sai khác và ghi chú nếu có trước khi chuyển hàng về Việt Nam.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Quý khách có thể lựa chọn hoặc không lựa chọn dịch vụ kiểm hàng. Quý khách có thể thay đổi lựa chọn của mình cho tới trước khi chúng tôi thực hiện việc kiểm hàng.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Đơn hàng không kiểm: Chúng tôi sẽ nhận kiện hàng và không kiểm tra hàng hóa bên trong. Chúng tôi sẽ chuyển nguyên đai nguyên kiện của NCC về VN cho Quý khách.</p>
                <h5>2. Mức phí kiểm hàng</h5>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Mức phí kiểm hàng được quy định trong bảng phí dịch vụ. Vui lòng tham khảo <a href="#" class="text-reset">tại đây.</a></p>
                <h5>3. Quy định</h5>
                <h6>a. Thời gian kiểm hàng</h6>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Chúng tôi hoàn thành việc kiểm hàng trong khoảng thời gian 8h – 16h làm việc tính từ khi nhận hàng tại Trung Quốc đối với các kiện hàng có thông tin rõ ràng, khớp với đơn hàng trên hệ thống. Trong trường hợp thông tin trên kiện hàng không rõ ràng do người bán hoặc do bên chuyển phát Trung Quốc, chúng tôi sẽ phải mất nhiều thời gian hơn để tìm kiếm đơn hàng tương ứng.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Nếu NCC phát hàng thành nhiều lần cho các đơn hàng, chúng tôi sẽ kiểm hàng thành nhiều lần và mỗi lần kiểm hàng tuân theo nguyên tắc về thời gian nêu trên.</p>
                <h6>b. Phạm vi kiểm tra hàng hóa</h6>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Với một số đặc thù của giao dịch trực tuyến, chúng tôi khuyến khích Quý khách lựa chọn kỹ NCC trước khi đặt hàng để giảm thiểu rủi ro trong việc sai khác chất lượng hàng hóa. Quý khách vui lòng tham khảo hướng dẫn đánh giá uy tín NCC</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Chúng tôi thực hiện việc kiểm đếm số lượng sản phẩm thực nhận (theo các lần phát hàng), đối chiếu, so sánh các sản phẩm nhận được với sản phẩm đã đặt trên đơn theo các tiêu chí: </p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Theo các thuộc tính cơ bản phân loại hàng hóa mà Quý khách đã thao tác lựa chọn hoặc các thuộc tính tương ứng theo yêu cầu của Quý khách khi đưa vào giỏ hàng (đối với hàng thời trang thường là thuộc tính màu sắc, kích cỡ).</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Theo mẫu mã được hiển thị bởi ảnh đại diện của sản phẩm được lưu khi đặt hàng.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Chúng tôi không thực hiện việc kiểm tra các thông tin theo phần mô tả chi tiết sản phẩm.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Chúng tôi kiểm tra các lỗi phát hiện nhanh bằng mắt thường như rách/thủng/gãy các mảng lớn, nhưng không cam kết phát hiện các lỗi kỹ thuật như đường may không đẹp, hỏng cúc khóa, rút sợi, chất liệu vải, chất liệu da, hoặc các lỗi vải nhỏ khó phát hiện...</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. Chúng tôi không cam kết sẽ kiểm tra chất liệu, thông số kỹ thuật, chất lượng sản phẩm, hàng nhái (fake), thương hiệu sản phẩm. </p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6. Trừ khi được yêu cầu và trong khả năng cho phép, chúng tôi không cam kết kiểm tra chất lượng/tính năng, chi tiết sản phẩm, đặc biệt là các thiết bị điện tử, đồ gia dụng… Trong các tình huống gặp sự cố liên quan tới các yếu tố chúng tôi không kiểm tra được, chúng tôi sẽ hỗ trợ tối đa việc khiếu nại NCC hoặc đổi trả hàng nếu được chấp nhận.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Với kinh nghiệm làm việc với các NCC trực tuyến lâu năm, một số trường hợp sau rất khó có khả năng khiếu nại NCC thành công. Trong các tình huống này, chúng tôi sẽ hỗ trợ Quý khách khiếu nại NCC tối đa nhất:</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Đối với các sản phẩm phụ kiện và các sản phẩm mua theo dây với số lượng nhiều, chúng tôi sẽ kiểm tra đúng theo số lượng sản phẩm nhưng không cam kết tất cả các sản phẩm được giao đúng mẫu mã và đúng kích cỡ yêu cầu.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Chúng tôi sẽ kiểm tra, đảm bảo màu sắc của sản phẩm đặt mua được giao đúng yêu cầu nhưng không loại trừ trường hợp màu sắc sản phẩm thực tế có thể đậm/nhạt hơn so với màu sắc sản phẩm đặt mua.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Đối với hàng đắt tiền (trên 2000NDT/sản phẩm), Quý khách có thể yêu cầu kiểm tra thông tin nhãn mác, tem và tình trạng mốc/hoen gỉ. Nếu có nhu cầu này, Quý khách vui lòng ghi chú yêu cầu kiểm trực tiếp trên đơn.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Để kiểm tra hàng hóa, chúng tôi phải mở sản phẩm. Nếu có nhu cầu giữ nguyên hộp/tem/seal...của hàng hóa, Quý khách vui lòng ghi chú trên đơn để nhân viên kiểm hàng nắm thông tin. Khi đó, chúng tôi sẽ chỉ hỗ trợ khiếu nại NCC nếu hàng hóa bên trong có sự sai khác.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Đối với hàng không kiểm, chúng tôi sẽ không thực hiện mở kiện hàng để kiểm tra, mà chúng tôi sẽ chuyển nguyên kiện hàng về VN cho Quý khách.</p>
                <h6>c. Các lưu ý</h6>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Do đặc thù NCC thường xuyên phát nhiều lần đối với đơn hàng có nhiều sản phẩm, chúng tôichỉ xác nhận kiểm đủ số lượng sản phẩm tại khâu kiểm hàng đối với các link sản phẩm được Quý khách yêu cầu đặt mua theo bộ/combo (ghi chú trên đơn). Các trường hợp khác, chúng tôi sẽ phát hàng về theo mỗi lần nhận hàng từ NCC hoặc khiếu nại/hoàn tiền khi thiếu sản phẩm. Chúng tôi chưa hỗ trợ trợ việc gom hàng tại Quảng Châu hoặc chờ NCC phát đủ mới giao hàng về...</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Trường hợp NCC phát hàng sai khác (sai màu, sai size…) nhưng mức độ sai khác không nhiều (mua size S về size M; mua màu xanh tím than về màu đen…); trước khi khiếu nại đổi/trả hàng với NCC, chúng tôi sẽ liên hệ với Quý khách để nhờ hỗ trợ nhận hàng.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Trường hợp NCC phát hàng làm nhiều lần/phát thiếu hàng, chúng tôi buộc phải khiếu nại NCC. Trong suốt thời gian này, chúng tôi đề nghị Quý khách phối hợp cùng chúng tôi cho tới khi hoàn thành khiếu nại.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Những sai sót trong kiểm hàng được phát hiện sau khi giao hàng (nếu có) sẽ được chúng tôi tiếp nhận và xử lý trong khâu khiếu nại dịch vụ.</p>
                <p class="fw-bold">&nbsp;&nbsp;&nbsp;&nbsp;Trân trọng!</p>
            </div>
                    
    </div>
</section>

</main>
@endsection