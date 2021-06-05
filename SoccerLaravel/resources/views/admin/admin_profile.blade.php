@extends('admin_layout')
@section('admin_content')
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Hồ sơ cá nhân</h3>
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
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Chủ hệ thống sân <small>{{$admin_profile->admin_name}}</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <section class="content invoice">
                      <!-- title row -->
                      <div class="row">
                        <div class="  invoice-header">
                          <h1>
                            <i class="fa fa-globe"></i> Thông tin.
                            <div id="ngay-thang">
                              <script type="text/javascript">
                                var d = new Date();
                                var ngay = ["Chủ nhật", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy"];
                                var thang = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"]
                                document.getElementById("ngay-thang").innerHTML = "Date " + d.getDate() + "/" + thang[d.getMonth()] + "/" + d.getFullYear();
                              </script>
                            </div>
                          </h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                          *** Thông tin Admin ***
                          <address>
                            {{-- @foreach($admin_profile as $key => $ad_profile) --}}
                              <strong>Admin ID: {{$admin_profile->admin_id}}</strong>
                              <br>Họ và tên: {{$admin_profile->admin_name}}
                              <br>Số điện thoại: {{$admin_profile->admin_phone}}
                              <br>Email: {{$admin_profile->admin_email}}
                          </address>
                            {{-- @endforeach --}}
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6 invoice-col">
                          *** Hệ thống sân đang sở hữu ***
                          <address>
                            @foreach($system_yard as $key => $sys_yard)
                              <strong>ID hệ thống sân: {{$sys_yard->yard_system_id}}</strong>
                              <br><strong>Tên hệ thống sân: {{$sys_yard->yard_system_name}}</strong>
                              <br>
                            @endforeach
                          </address>
                        </div>
                      </div>
                      <!-- /.row -->

                      <div class="row">
                        <div class="col-md-6">
                          <p class="lead">Hệ thống sân đang sở hữu:</p>
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                @foreach($system_yard as $key => $sys_yard)
                                <tr>
                                  <th style="width:50%">ID hệ thống sân:</th>
                                  <td>{{$sys_yard->yard_system_id}}</td>
                                </tr>
                                <tr>
                                  <th>Tên hệ thống sân:</th>
                                  <td>{{$sys_yard->yard_system_name}}</td>
                                </tr>
                                <tr>
                                  <th>Địa chỉ:</th>
                                  <td>{{$sys_yard->yard_system_address}}</td>
                                </tr>
                                <tr>
                                  <th>-----------------</th>
                                  <td>-----------------</td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- accepted payments column -->
                        <div class="col-md-6">
                          <p class="lead">Phương thức thanh toán:</p>
                          <img src="{{asset('../public/back-end/production/images/visa.png')}}" alt="Visa">
                          <img src="{{asset('../public/back-end/production/images/mastercard.png')}}" alt="Mastercard">
                          <img src="{{asset('../public/back-end/production/images/american-express.png')}}" alt="American Express">
                          <img src="{{asset('../public/back-end/production/images/paypal.png')}}" alt="Paypal">
                          @foreach($admin_pay as $key => $ad_pay)
                          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                            Tài khoản số: {{$ad_pay->ad_pay_code}} tại ngân hàng {{$ad_pay->ad_pay_bank}} chi nhánh Đà Nẵng.<br>
                            Tên tài khoản: {{$ad_pay->ad_pay_account}}.
                          </p>
                          <div class="row no-print">
                        <div class=" ">
                          <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> In hồ sơ</button>
                          <a href="{{URL::TO('/edit-admin-pay/'.$ad_pay->ad_pay_id)}}"><button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Sửa thông tin giao dịch</button></a>
                          @endforeach
                         <a href="{{URL::TO('/add-admin-pay')}}"><button class="btn btn-primary pull-right"><i class="fa fa-plus-circle"></i> Thêm thông tin giao dịch</button></a>

                        </div>
                      </div>
                        </div>

                      </div>
                      <!-- /.row -->
                      
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection