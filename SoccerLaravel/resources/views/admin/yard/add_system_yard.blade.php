@extends('admin_layout')
@section('admin_content')
        <?php
            $admin_id = Session::get('admin_id');
        ?>  
  <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Đăng ký hệ thống sân</h3>
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
                    <h2>Đăng ký <small>Hệ thống sân</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <p>Đăng ký hệ thống sân đầy đủ các bước theo chu trình sau.</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Step 1<br />
                                              <small>Step 1 Giới thiệu chung</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small>Step 2 Lời cảm ơn</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Step 3<br />
                                              <small>Step 3 Đăng ký hệ thống sân</small>
                                          </span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
                        <h2 class="StepTitle">Giới thiệu về chúng tôi</h2>
                        <p>
                          Phần mềm quản lý sân bóng mini là một công cụ hỗ trợ các doanh nghiệp hoạt động trong lĩnh vực cho thuê sân banh. Giúp người dùng quản lý sân banh của mình được chặt chẽ và chính xác hơn. Tránh được các trường hợp đặt sân trùng giờ hoặc để sân trống khi không kiểm soát được giờ đặt sân. Cùng với đó, phần mềm còn hỗ trợ nhiều mẫu báo cáo, giúp người dùng có cái tình tổng quan về hoạt động kinh doanh của mình.
                        </p>
                        <p>
                          Sự phát triển mạnh mẽ của việc kinh doanh sân cỏ nhân tạo đã dẫn đến đòi hỏi phải có một giải pháp quản lý dịch vụ này. Nắm được xu hướng thời đại NV Sports Football đã cho ra đời giải pháp tổng thể cho việc quản lý sân bóng, dựa trên các công nghệ mới nhất...
                        </p>
                      </div>

                      <div id="step-2">
                        <h2 class="text-center">Cảm ơn bạn đã sử dụng dịch vụ của NV SPORTS FOOTBALL!
                        </h2>
                        <h2 class="text-center">
                          Chúng tôi mong sẽ mang đến cho bạn sự tiện lợi nhất.
                        </h2>
                      </div>
                      <div id="step-3">
                        <form action="{{URL::TO('/save-system-yard/'.$admin_id)}}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" >Hệ thống sân <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="slug" onkeyup="ChangeToSlug()" name="yardsystem_name" required="required" class="form-control  ">
                            </div>
                          </div>
                          <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Slug <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="convert_slug" name="yardsystem_slug" required="required" class="form-control ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Mô tả hệ thống sân <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                              <textarea class="form-control col" name="yardsystem_desc"></textarea>
                            </div>
                          </div>
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 label-align" for="exampleInputImage1">Hình ảnh hệ thống sân <span class="required">*</span></label>
                            <input type="file" name="yardsystem_img" class="form-control" required="" id="exampleInputImage1" style="border: none;">
                          </div>
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 label-align">Quận - Huyện <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                              
                              <select name="yardsystem_quan" class="form-control">
                                @foreach($quan as $key => $q)
                               {{--  <option value="1">Quận Ngũ Hành Sơn</option>
                                <option value="2">Quận Sơn Trà</option>
                                <option value="3">Quận Cẩm Lệ</option>
                                <option value="4">Quận Hải Châu</option>
                                <option value="5">Quận Thanh Khê</option>
                                <option value="6">Quận Liên Chiểu</option>
                                <option value="7">Huyện Hòa Vang</option> --}}
                                <option value="{{$q->quan_id}}">{{$q->quan_ten}}</option>
                                @endforeach
                              </select>
                              
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Địa chỉ <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input class="date-picker form-control" name="yardsystem_address" required="required" type="text">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Thêm bản đồ <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input class="date-picker form-control" required="required" name="yardsystem_maps" type="text">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-12 col-sm-12 text-center label-align"><span style="color: #006666;">Lưu ý: </span>Bản đồ được thêm phải là đoạn mã HTML được lấy từ <a href="https://www.google.com/maps" target="_blank">Google Maps*</a><br><a type="button"  data-toggle="modal" href="#myModalmaps">Click vào đây để xem hướng dẫn</a></label>                          
                          </div>
                          <div class="col-form-label col-md-9 col-sm-9 label-align">
                            <button type="submit" class="btn btn-success">Gửi</button>
                          </div>
                            
                        </form>
                      </div>
                      <div class="modal fade" id="myModalmaps" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Hướng dẫn nhúng bản đồ</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                  <img width="100%" height="auto" src="{{URL::TO('../public/front-end/images/maps.jpg')}}">
                                </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                              </div>
                            </div>
                              
                          </div>
                      </div>
                    </div>
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection