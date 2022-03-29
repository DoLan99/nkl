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
                    <h1 class="display-5 fw-bolder text-white mb-2">Chính sách khiếu nại và bồi thường</h1>
                    
                </div>
            </div>
        </div>
    </div>
</header>
<section class="content">
    <div class="container">
            <div class="row my-5 justify-content">
                <h5>1. Chính sách khiếu nại</h5>
                <h6>a. Thời gian thực hiện, tiếp nhận và xử lý khiếu nại</h6>
                <p class="fw-bold">&nbsp;&nbsp;&nbsp;&nbsp; Thời gian khách hàng gửi khiếu nại: Trong vòng 48h kể từ khi nhận hàng.</p>
                <p class="fw-bold">&nbsp;&nbsp;&nbsp;&nbsp; Cách thức gửi thông tin: Quý khách sử dụng chức năng khiếu nại trên website</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Quý khách đăng nhập tài khoản, lựa chọn đơn hàng cần khiếu nại, lựa chọn trạng thái khiếu nại, lựa chọn link hàng cần khiếu nại sau đó điền thông tin, hình ảnh hàng bị hỏng, gãy, vỡ…, mã vận đơn, hóa đơn của nhà cung cấp dán trên bao gì hàng hóa…</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Quý khách cung cấp thông tin chính xác là cơ sở để chúng tôi hỗ trợ Quý khách khiếu nại với shop đạt hiệu quả cao.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Hình thức liên lạc: Chúng tôi sẽ trao đổi với Quý khách thông qua điện thoại hoặc trao đổi trực tiếp trên phần khiếu nại của đơn hàng</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Thời gian chúng tôi tiếp nhận và xử lý khiếu nại: Khiếu nại của Quý khách sẽ được phản hồi trong vòng 1 ngày nếu khiếu nại của Quý khách liên quan tới các bộ phận nghiệp vụ của công ty.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Nếu khiếu nại của Quý khách liên quan tới nhà cung cấp, phản hồi của chúng tôi sẽ gửi tới Quý khách trong vòng 3-4 ngày phụ thuộc vào sự hợp tác của nhà cung cấp.</p>
                <h6>b. Thời gian xử lý khiếu nại dịch vụ phụ thuộc vào các yếu tố sau:</h6>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Đối với các khiếu nại cần xác nhận thông tin hoặc làm việc với bên thứ ba gồm (nhà cung cấp, đơn vị vận chuyển…): chúng tôi sẽ phải làm việc với các đơn vị này để có thông tin và xử lý khiếu nại.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Đối với các khiếu nại phát sinh từ lỗi dịch vụ của chính chúng tôi , chúng tôi sẽ xử lý trong vòng 03 ngày trong trường hợp không bị gián đoạn trong quá trình trao đổi & liên lạc với Quý khách về các phương án xử lý.</p>
                <h5>2. Chính sách bồi thường</h5>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Bồi thường 100% giá trị đơn hàng đối với khách hàng order (không bao gồm phí dịch vụ) </p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Trong trường hợp chúng tôi thực hiện không đúng cam kết dịch vụ mua hàng:</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Chúng tôi bồi thường 100% giá trị tiền hàng & phí mua hàng đối với các sản phẩm thiếu.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Hoặc thỏa thuận bồi thường với các sản phẩm mua sai yêu cầu. </p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Trong trường hợp chúng tôi thực hiện không đúng cam kết dịch vụ kiểm hàng: </p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Chúng tôi bồi thường 100% giá trị tiền hàng & phí kiểm hàng đối với các sản phẩm thiếu.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Hoặc thỏa thuận bồi thường đối với các sản phẩm kiểm hàng không phát hiện được các lỗi sai theo quy định.</p>
                <p class="fw-bold">&nbsp;&nbsp;&nbsp;&nbsp;- Trường hợp hàng hóa bị thất lạc do các nguyên nhân chủ quan của chúng tôi hoặc đơn vị vận chuyển bồi thường 100% giá trị hàng hóa và các phí dịch vụ liên quan</p>
                <p class="fw-bold">&nbsp;&nbsp;&nbsp;&nbsp;- Trường hợp hàng hóa bị hư hỏng trong quá trình vận chuyển và Quý khách có sử dụng dịch vụ đóng kiện gỗ:</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Chúng tôi hoàn 100% giá trị thiệt hại và phí đóng gói nếu lỗi phát sinh do chúng tôi không thực hiện đúng các yêu cầu đóng gói hợp lý của Quý khách.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Chúng tôi hoàn 100% giá trị thiệt hại và phí vận chuyển chênh lệch nếu lỗi phát sinh do chúng tôi không thực hiện đúng các yêu cầu vận chuyển hợp lý của Quý khách.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Hoặc thương lượng mức bồi thường/chia sẻ trong các trường hợp hỏng hóc không đáng có và không kiểm soát được trong quá trình vận chuyển.</p>
                <p class="fw-bold">&nbsp;&nbsp;&nbsp;&nbsp;- Trường hợp hàng hóa bị hư hỏng trong quá trình vận chuyển do Quý khách không sử dụng dịch vụ đóng kiện gỗ:</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Chúng tôi thương lượng mức bồi thường/ chia sẻ với Quý khách đối với những trường hợp hỏng hóc không kiểm soát được trong quá trình vận chuyển.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Đối với những trường hợp hàng hóa dễ vỡ mà chúng tôi đã cảnh báo Quý khách, nếu hàng hóa của Quý khách vẫn bị hỏng hóc vì những lý do không kiểm soát được, Quý khách vui lòng chịu mọi tổn thất.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Đối với các đơn hàng ký gửi</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Trường hợp hàng bị thu giữ do Hải quan trong quá trình vận chuyển từ Kho TQ về Việt Nam công ty hỗ trợ khách hàng bồi thường gấp 10 lần cân nặng- tính theo cân nặng kiện hàng thực tế quý khách ký gửi .</p>
                <p class="fw-bold">&nbsp;&nbsp;&nbsp;&nbsp;Chính sách hỗ trợ đối với các khiếu nại không nằm trong phạm vi cam kết dịch vụ</p>
                <p class="fw-bold">&nbsp;&nbsp;&nbsp;&nbsp;- Hỗ trợ khiếu nại không nằm trong phạm vi cam kết dịch vụ của chúng tôi: </p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Đối với các khiếu nại liên quan đến NCC khi NCC vi phạm điều khoản giao dịch hàng hóa (điều khoản giao dịch trên các website bán hàng); hoặc khiếu nại các đơn không sử dụng dịch vụ kiểm hàng, chúng tôi sẽ trực tiếp xử lý hoặc hỗ trợ Quý khách xử lý.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Chúng tôi yêu cầu Quý khách hợp tác cùng chúng tôi trong suốt thời gian xử lý khiếu nại NCC</p>
                <p class="fw-bold">&nbsp;&nbsp;&nbsp;&nbsp;- Đối với các sản phẩm/hàng hóa là đồ điện tử:</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Chúng tôi sẽ tiếp nhận xử lý các khiếu nại liên quan nứt, gãy sản phẩm. Chúng tôi không tiếp nhận và xử lý các khiếu nại liên quan đến hoạt động, chi tiết các bộ phận, bảo hành và chất lượng sản phẩm.</p>
                <p class="fw-bold">&nbsp;&nbsp;&nbsp;&nbsp;- Trong một số trường hợp:</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Chúng tôi sẽ yêu cầu Quý khách chủ động thực hiện khiếu nại với NCC, ví dụ như: Quý khác đã có thỏa thuận trước với NCC về sản phẩm, chúng tôi chỉ thanh toán tiền theo yêu cầu; Quý khách không đăng ký sử dụng dịch vụ kiểm hàng,…</p>
                <h5>3. Các lưu ý cần thiết</h5>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Chúng tôi thiết lập các mức phí trên cơ sở giảm thiểu tối đa chi phí nhập hàng đối với Quý khách hàng để tạo ra những lợi thế cạnh tranh. Với đặc thù có nhiều rủi ro khó kiểm soát trong hoạt động kiểm hàng số lượng lớn & vận chuyển đường bộ theo các bao hàng như dễ móp méo hộp, chèn ép sản phẩm… Chúng tôi khuyến khích Quý khách lựa chọn hàng hóa, cách thức đóng gói/vận chuyển phù hợp và chia sẻ rủi ro với chúng tôi khi xảy ra thiệt hại ngoài mong muốn.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Việc đổi/trả hàng luôn chứa đựng nhiều rủi ro, chúng tôi không khuyến khích xử lý khiếu nại dịch vụ theo phương án đổi/trả hàng.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Trong quá trình xử lý các khiếu nại dịch vụ có liên quan đến NCC, Chúng tôi sẽ yêu cầu sự hợp tác từ Quý khách để việc thực hiện khiếu nại được giải quyết nhanh chóng và chính xác.</p>
                <h5>4. Từ chối hoặc ngừng cung cấp dịch vụ</h5>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- Trong các trường hợp sau, chúng tôicó quyền đơn phương từ chối cung cấp dịch vụ, bằng cách khóa tài khoản của Quý khách trên hệ thống mà không cần có sự đồng ý trước của Quý khách:</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Đặt hàng với những thông tin giả mạo, thông tin liên hệ, địa chỉ, số điện thoại không đúng.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Có những yêu cầu không chính đáng, vượt ra ngoài phạm vi quản lý của chúng tôi và sai lệch về bản chất của dịch vụ Nhập hàng hộ. </p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Đăng tải hoặc cung cấp thông tin sai sự thật, với mục đích làm giảm uy tín của chúng tôi cho bên thứ ba. </p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Có hành vi gian lận khi nhận hàng hóa như: nhận đủ hàng nhưng lại kê khai thiếu để đòi bồi thường.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Khách hàng hoàn toàn có thể chủ động ngừng sử dụng dịch vụ của chúng tôi và rút nốt số tiền còn lại ra khỏi hệ thống.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;Trong trường hợp số dư trong tài khoản của Quý khách vẫn còn, chúng tôi sẽ hoàn trả lại cho Quý khách trước khi chấm dứt dịch vụ.</p>
                <p class="fw-bold">&nbsp;&nbsp;&nbsp;&nbsp;Trân trọng!</p>
            </div>
                    
    </div>
</section>

</main>
@endsection