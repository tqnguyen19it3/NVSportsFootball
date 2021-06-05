@extends('admin_layout')
@section('admin_content')  
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Thêm giờ và giá sân</h3>
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
                  <h2>Thêm <small>Giờ & Giá sân</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br/>
                  <form id="demo-form2" action="{{URL::TO('/save-time-and-price/'.$system_yards->yard_system_id.'/'.$system_yards->yard_id)}}" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="Name">Mã số sân <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="Name" value="{{$system_yards->yard_mss}}" required="required" disabled="" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 label-align">Giờ đặt <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 ">
                        <select name="time_price_hours" class="form-control">
                          <option value="05:30 - 06:30">05:30 - 06:30</option>
                          <option value="06:30 - 07:30">06:30 - 07:30</option>
                          <option value="15:30 - 16:30">15:30 - 16:30</option>
                          <option value="16:30 - 17:30">16:30 - 17:30</option>
                          <option value="17:30 - 18:30">17:30 - 18:30</option>
                          <option value="18:30 - 19:30">18:30 - 19:30</option>
                          <option value="19:30 - 20:30">19:30 - 20:30</option>
                          <option value="20:30 - 21:30">20:30 - 21:30</option>
                          <option value="21:30 - 22:30">21:30 - 22:30</option>
                        </select>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Giá sân <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" required="required" name="time_price_pay" class="form-control ">
                      </div><span style="color: red;">VNĐ</span>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 label-align">Trạng thái <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 ">
                        <select name="time_price_status" class="form-control">
                          <option value="1">HIỆN</option>
                          <option value="0">ẨN</option>
                        </select>
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                      <div class="col-md-6 col-sm-6 offset-md-3">
                        <button class="btn btn-primary" type="reset">Hủy giờ đặt</button>
                        <button type="submit" class="btn btn-success">Tạo giờ đặt</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Bảng giờ và giá sân {{$system_yards->yard_mss}}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <p>Bảng đơn giản danh sách giờ và giá sân với các tùy chọn mô tả và chỉnh sửa</p>
                    
                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">MSS</th>
                          <th style="width: 20%">Giờ đặt</th>
                          <th>Giá sân</th>
                          <th>Trạng thái</th>
                          <th style="width: 20%">#Hành động</th>
                        </tr>
                      </thead>
                      {{-- @foreach($category_service as $key => $list_service) --}}
                      <tbody>
                        @foreach($time_and_price as $key => $time_price)
                        <tr>
                          <td>#</td>
                          <td>
                            {{$system_yards->yard_mss}}
                            <br />
                            <small>ID sân: {{$system_yards->yard_id}}</small>
                          </td>
                          <td>
                            {{$time_price->time_price_hours}}
                          </td>
                          <td>
                            {{number_format($time_price->time_price_pay)}} Đ
                          </td>
                          <td>
                            
                            @if($time_price->time_price_status == 1)
                            <a href="{{URL::TO('/unactive-time-and-price/'.$time_price->time_price_id)}}"><i class="fa fa-toggle-on" style="font-size: 25px; color: green;"> Hiện</i></a>
                            <span class="badge bg-green pull-right">Chưa được đặt</span>
                            @elseif($time_price->time_price_status == 0)
                            <a href="{{URL::TO('/active-time-and-price/'.$time_price->time_price_id)}}"><i class="fa fa-toggle-off" style="font-size: 25px; color: grey;"> Ẩn</i></a>
                            <span class="badge bg-red pull-right">Bị ẩn bởi admin</span>
                            @elseif($time_price->time_price_status == 2)
                            <a><i class="fa fa-toggle-off" style="font-size: 25px; color: grey;"> Ẩn</i></a>
                            <span class="badge bg-red pull-right">Đã được đặt</span>
                            @endif
                          </td>
                          <td>
                            <a href="{{URL::TO('/delete-time-and-price/'.$time_price->time_price_id)}}" onclick="return confirm('Bạn có chắc muốn xóa khung giờ và giá này?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Xóa </a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                      {{-- @endforeach --}}
                    </table>
                    <!-- end project list -->
                  </div>
                </div>
              </div>
            </div>
          
        </div>
@endsection