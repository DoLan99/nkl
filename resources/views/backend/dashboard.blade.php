@extends('layouts.admin')
 
@section('title')
 
@section('sidebar')
    @@parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
      </div>
    </div>
</div>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"> Thống kê </h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label>Nhân viên</label>
                      <select class="select2bs4" multiple="multiple" data-placeholder="Chọn nhân viên"
                              style="width: 100%;">
                        <option>Lê Tân</option>
                        <option>Đinh Nhung</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-2">
                        <div class="form-group">
                          <label>Thời gian</label>

                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="far fa-calendar-alt"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control float-right" id="reservation">
                          </div>
                          <!-- /.input group -->
                        </div>
                  </div>
                  <div class="col-sm-1">
                    <label for="#">&nbsp;</label>
                    <a type="submit" class="btn btn-block btn-primary">Thống kê</a>
                  </div>
              </div>
              
              </div>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Thống kê tổng</h3>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                          Tổng các đơn hàng đã về kho VN : 848<br>
                          Tổng tiền các đơn hàng đã về kho VN : 10.100.100 VND<br>
                          Tổng tiền trả shop thực tế của các đơn hàng đã về kho VN : 10.000.000 VND <br>
                          Tổng phí mua hàng của đơn đã về kho VN : 100.100 VND <br>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  
                  </div>
              </div>
              <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                          <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Thống kê bộ phận mua hàng</h3>
                              <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                Tổng tiền mặc cả đã mua(chưa kiểm) : 1.000.000<br>
                                Tổng tiền mặc cả đã mua(đã kiểm) : 1.100.100 VND<br>
                                Tổng số đơn đã về đến kho của nhân viên <br>
                                Lê Tân : 10 <br>
                                Đinh Nhung : 10 <br>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                    </div>
                    <div class="col-md-4">
                      <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Thống kê bộ phận kinh doanh</h3>
                          <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            Tổng tiền hàng của các đơn đã về kho VN của nhân viên <br>
                            Lê Tân : 1.000.000 VND <br>
                            Đinh Nhung : 0 VND <br>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                    <div class="col-md-4">
                      <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Thống kê bộ phận kho</h3>
                          <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            Tổng cân nặng đã về kho VN : 1000 kg<br>
                            Tổng số tiền cân nặng : 1.000.000 VND
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                    

                </div>
              </div>
                
              
              
          </div>
      </div>
  <!-- /.card -->
 
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
</div>

</div>
@endsection