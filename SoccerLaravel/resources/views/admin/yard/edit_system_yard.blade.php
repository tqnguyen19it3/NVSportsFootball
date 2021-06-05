@extends('admin_layout')
@section('admin_content')  
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Cập nhật hệ thống sân bóng</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Cập nhật <small>Hệ thống sân bóng</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
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
                  <br />
                  <form id="demo-form2" action="{{URL::TO('/update-system-yard/'.$system_yard->yard_system_id)}}" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="criteria Name">Hệ thống sân <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text"  name="yardsystemName" id="slug" onkeyup="ChangeToSlug()" value="{{$system_yard->yard_system_name}}" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Slug <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="convert_slug" value="{{$system_yard->yard_system_slug}}" name="yardsystemSlug" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Mô tả hệ thống <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <textarea name="yardsystemDesc" required="required" class="form-control ">{{$system_yard->yard_system_desc}}</textarea>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="criteria img">Hình ảnh  <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="file" name="yardsystemImg" class="form-control" id="exampleInputImage1" style="border: none;"> 
                        <img src="{{URL::TO('../public/uploads/YardSystemImg/'.$system_yard->yard_system_img)}}" alt="IMG" style="margin-top: 10px;" height="100" width="100">
                      </div>
                    </div>
                    <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 label-align">Quận - Huyện <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                              
                              <select name="yardsystemQuan" class="form-control">
                                @foreach($quan as $key => $q)
                                @if($q->quan_id == $system_yard->quan_id)
                                <option selected="" value="{{$system_yard->quan_id}}">{{$q->quan_ten}}</option>
                                @endif
                                <option value="{{$q->quan_id}}">{{$q->quan_ten}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Địa chỉ <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" value="{{$system_yard->yard_system_address}}" name="yardsystemAddress" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Bản đồ <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <textarea name="yardsystemMaps" required="required" class="form-control ">{{$system_yard->yard_system_maps}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-form-label col-md-12 col-sm-12 text-center label-align"><span style="color: #006666;">Lưu ý: </span>Bản đồ được thêm phải là đoạn mã HTML được lấy từ <a href="https://www.google.com/maps" target="_blank">Google Maps*</a><br><a type="button"  data-toggle="modal" href="#myModalmaps1">Click vào đây để xem hướng dẫn</a></label>                          
                    </div>
                    <div class="modal fade" id="myModalmaps1" role="dialog">
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
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                      <div class="col-md-9 col-sm-9 offset-md-3">
                        <button class="btn btn-primary" type="reset">Hủy hệ thống sân</button>
                        <button type="submit" class="btn btn-success">Cập nhật hệ thống sân</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection