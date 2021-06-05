@extends('admin_layout')
@section('admin_content')  
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Cập nhật sân bóng</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Cập nhật <small>Sân bóng</small></h2>
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
                  <form id="demo-form2" action="{{URL::TO('/update-yard/'.$yards->yard_id)}}" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="criteria Name">Mã số sân <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text"  name="yardMss" id="slug" onkeyup="ChangeToSlug()" value="{{$yards->yard_mss}}" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Slug <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="convert_slug" value="{{$yards->yard_slug}}" name="yardSlug" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Mặt sân <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                              <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                  <input type="radio" name="yardSurface" value="Sân cỏ thường" class="join-btn" required=""> &nbsp; Sân cỏ thường &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                  <input type="radio" name="yardSurface" value="Sân cỏ nhân tạo" class="join-btn" required=""> Sân cỏ nhân tạo
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Loại sân <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                              <select name="yardLimit" class="form-control">
                                @if($yards->yard_limit == 'Sân 5')
                                  <option selected value="Sân 5">Sân 5</option>
                                  <option value="Sân 6">Sân 6</option>
                                  <option value="Sân 7">Sân 7</option>
                                  <option value="Sân 11">Sân 11</option>
                                @elseif($yards->yard_limit == 'Sân 6')
                                  <option value="Sân 5">Sân 5</option>
                                  <option selected value="Sân 6">Sân 6</option>
                                  <option value="Sân 7">Sân 7</option>
                                  <option value="Sân 11">Sân 11</option>
                                @elseif($yards->yard_limit == 'Sân 7')
                                  <option value="Sân 5">Sân 5</option>
                                  <option value="Sân 6">Sân 6</option>
                                  <option selected value="Sân 7">Sân 7</option>
                                  <option value="Sân 11">Sân 11</option>
                                @elseif($yards->yard_limit == 'Sân 11')
                                  <option value="Sân 5">Sân 5</option>
                                  <option value="Sân 6">Sân 6</option>
                                  <option value="Sân 7">Sân 7</option>
                                  <option selected value="Sân 11">Sân 11</option>
                                @endif
                              </select>
                            </div>
                          </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="criteria img">Hình ảnh  <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="file" name="yardImg" class="form-control" id="exampleInputImage1" style="border: none;"> 
                        <img src="{{URL::TO('../public/uploads/YardImg/'.$yards->yard_img)}}" alt="IMG" style="margin-top: 10px;" height="100" width="100">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Mô tả sân <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <textarea class="form-control col" name="yardDesc">{{$yards->yard_desc}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Tiện ích <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" name="yardUtilities" value="{{$yards->yard_utilities}}" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 label-align">Trạng thái <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 ">
                        <select name="yardStatus" class="form-control">
                          @if($yards->yard_status == 1)
                            <option selected value="1">Hiển thị sân</option>
                            <option value="0">Ẩn sân</option>
                          @else
                            <option value="1">Hiển thị sân</option>
                            <option selected value="0">Ẩn sân</option>
                          @endif
                        </select>
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                      <div class="col-md-6 col-sm-6 offset-md-3">
                        <button class="btn btn-primary" type="reset">Hủy sân bóng</button>
                        <button type="submit" class="btn btn-success">Cập nhật sân bóng</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection