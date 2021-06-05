@extends('admin_layout')
@section('admin_content')  
        <?php
            $admin_id = Session::get('admin_id');
        ?>
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Thêm thông tin giao dịch</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <?php
                      $message = Session::get('message');
                      $messageError = Session::get('messageError');
                      if($message){
                        echo "<div class='alert alert-success alert-dismissible fade show'>";
                          echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>" ;
                          echo "<strong>Thành Công! </strong>".$message;
                        echo "</div>";
                        Session::put('message', null);
                      }elseif($messageError){
                         echo "<div class='alert alert-warning alert-dismissible fade show'>";
                          echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>" ;
                          echo "<strong>Lỗi! </strong>".$messageError;
                        echo "</div>";
                        Session::put('messageError', null);
                      }
                  ?>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Thêm thông tin giao dịch</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                        <form action="{{URL::TO('/insert-admin-pay/'.$admin_id)}}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tên ngân hàng<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" name="admin_pay_bank" required="required" class="form-control ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tên tài khoản <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" name="admin_pay_account" required="required" class="form-control ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Số tài khoản <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" name="admin_pay_code" required="required" class="form-control ">
                            </div>
                          </div>
                          <div class="col-form-label col-md-9 col-sm-9 label-align">
                            <button type="submit" class="btn btn-success">Gửi</button>
                          </div>
                      </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection