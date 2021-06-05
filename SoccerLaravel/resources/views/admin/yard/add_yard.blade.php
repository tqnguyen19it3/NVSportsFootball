@extends('admin_layout')
@section('admin_content')  
        <?php
            $admin_id = Session::get('admin_id');
        ?>
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Thêm sân bóng vào hệ thống</h3>
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
                  <h2>Thêm sân bóng</h2>
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
                        <form action="{{URL::TO('/save-yard')}}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" >Mã số sân <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="slug" onkeyup="ChangeToSlug()" name="yard_mss" required="required" class="form-control">
                            </div>
                          </div>
                          <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Slug <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="convert_slug" name="yard_slug" required="required" class="form-control ">
                            </div>
                          </div>
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 label-align">Thuộc hệ thống <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                              <select name="system_yard_id" class="form-control">
                                @foreach($system_yard as $key => $sysYard)
                                  @if($admin_id == $sysYard->admin_id)
                                    <option value="{{$sysYard->yard_system_id}}">{{$sysYard->yard_system_name}}</option>
                                  @endif
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Mặt sân <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                              <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                  <input type="radio" name="yard_surface" value="Sân cỏ thường" class="join-btn" required=""> &nbsp; Sân cỏ thường &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                  <input type="radio" name="yard_surface" value="Sân cỏ nhân tạo" class="join-btn" required=""> Sân cỏ nhân tạo
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Loại sân <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                              <select name="yard_limit" class="form-control">
                                <option value="Sân 5">Sân 5</option>
                                <option value="Sân 6">Sân 6</option>
                                <option value="Sân 7">Sân 7</option>
                                <option value="Sân 11">Sân 11</option>
                              </select>
                            </div>
                          </div>
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 label-align" for="exampleInputImage1">Hình ảnh sân <span class="required">*</span></label>
                            <input  type="file" name="yard_img" class="col-md-6 col-sm-6 form-control" style="border: none;">
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Mô tả sân <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <textarea class="form-control col" name="yard_desc"></textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tiện ích <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" name="yard_utilities" required="required" class="form-control ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Trạng thái sân <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                              <select name="yard_status" class="form-control">
                                <option value="1">Hiển thị sân</option>
                                <option value="0">Ẩn sân bóng</option>
                              </select>
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