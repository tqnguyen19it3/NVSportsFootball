@extends('admin_layout')
@section('admin_content')  
        <?php
            $admin_id = Session::get('admin_id');
        ?>
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Thêm bài viết cho hệ thống</h3>
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
                  <h2>Thêm bài viết</h2>
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
                        <form action="{{URL::TO('/save-post-yardsys')}}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 label-align">Thuộc hệ thống <span class="required">*</span></label>
                            <div class="col-md-8 col-sm-8 ">
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
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Từ khóa hệ thống <span class="required">*</span>
                            </label>
                            <div class="col-md-8 col-sm-8 ">
                              <input type="text" name="post_sys_metakeyword" required="required" class="form-control">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Bài viết hệ thống <span class="required">*</span>
                            </label>
                            <div class="col-md-8 col-sm-8 ">
                              <textarea class="form-control col" id="ckeditor" name="post_sys_content"></textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Trạng thái <span class="required">*</span></label>
                            <div class="col-md-8 col-sm-8 ">
                              <select name="post_sys_status" class="form-control">
                                <option value="1">Hiển thị bài viết</option>
                                <option value="0">Ẩn bài viết</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-form-label col-md-11 col-sm-11 label-align">
                            <button type="submit" class="btn btn-success">Gửi</button>
                          </div>
                      </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection