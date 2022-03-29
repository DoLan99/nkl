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
                                <h1 class="display-5 fw-bolder text-white mb-2">Bảng giá</h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <section class="content">
                <div class="container">
                    <div class="row my-5 justify-content-center">
                            <div class="col-lg-8">
                                <div class="text-center">
                                    <h2 class="fw-bolder mb-5">CÔNG TY TNHH ĐẦU TƯ VÀ THƯƠNG MẠI NAM KIÊN</h2>
                                        <p class="lead fw-normal "> Văn phòng: Tòa nhà FLC Star Tower 418 Quang Trung, Hà Đông, Hà Nội </p>
                                        <p class="lead fw-normal">Hotline: 0385.222.891</p>
                                        <p class="lead fw-normal ">Website: <a href="#" class="text-reset">Namkienlogistics.com</a></p>
                                        <p class="lead fw-normal ">Kho:   <a>&nbsp;&nbsp;&nbsp;&nbsp;-C17 Nguyễn Quý Đức, Thanh Xuân</a> <br>
                                                                                    <a>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -Ngõ 121 Nguyễn An Ninh, Giáp Bát</a><br>
                                                                                    <a>&nbsp;-418 Quang Trung, Hà Đông</a>
                                        </p>
                                </div>
                            </div>
                            
                    </div>
                    <div class="justify-content-center">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th colspan="2">PHÍ DỊCH VỤ</th>
                                </tr>
                            </tdead>
                            <tdead>
                                <tr>
                                <th colspan="2" class="text-center">BẢNG GIÁ DỊCH VỤ MUA HÀNG</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>>50 triệu</td>
                                <td>1%</td>
                                </tr>
                                <tr>
                                <td>>5tr đến 50 triệu</td>
                                <td>1.5%</td>
                                </tr>
                                <tr>
                                <td><= 5 triệu</td>
                                <td>2%</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered">
                            <tdead>
                                <tr>
                                <th colspan="2">PHÍ VẬN CHUYỂN</th>
                                </tr>
                            </tdead>
                            <tdead>
                                <tr>
                                <th colspan="2" class="text-center">BẢNG GIÁ DỊCH VỤ VẬN CHUYỂN</th>
                                </tr>
                            </tdead>
                            <tbody>
                                <tr>
                                <td>Trọng lượng (tính/kg)</td>
                                <td>Hà Nội</td>
                                </tr>
                                <tr>
                                <td>> 50kg</td>
                                <td>19,000</td>
                                </tr>
                                <tr>
                                <td>> 10 → 50kg</td>
                                <td>22,000</td>
                                </tr>
                                <tr>
                                <td>0 → 10kg</td>
                                <td>25,000</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <div class="my-5 text">
                            <p class="fw-bolder">*HÀNG KÝ GỬI VUI LÒNG LIÊN HỆ 0385.222.891</p>
                            <p class="fw-bolder">*ĐỀN BÙ 100% GIÁ TRỊ HÀNG HÓA NẾU XẢY RA TRƯỜNG HỢP MẤT HOẶC THẤT LẠC HÀNG.</p>
                        </div>

                </div>

            </section>
            
        </main>
@endsection