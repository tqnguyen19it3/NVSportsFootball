@extends('admin_layout')
@section('admin_content')  
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tất cả <small>sân bóng thuộc hệ thống</small></h3>
              </div>
              <?php
                $admin_id = Session::get('admin_id');
              ?>
              
            </div>
            
            <div class="clearfix"></div>
                  <?php
                      $message = Session::get('message');
                      if($message){
                        echo "<div class='alert alert-success alert-dismissible fade show'>";
                          echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>" ;
                          echo "<strong>Thành Công! </strong>".$message;
                        echo "</div>";
                        Session::put('message', null);
                      }
                  ?>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Danh sách sân bóng</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <p>Bảng đơn giản với danh sách sân bóng với các tùy chọn mô tả và chỉnh sửa</p>
                    
                    <!-- start project list -->
                    <table class="table table-striped projects" id="myTable">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">MSS</th>
                          <th>ID hệ thống sân</th>
                          <th>Hình ảnh</th>
                          <th>Loại sân</th>
                          <th>Mặt sân</th>
                          <th>Hiển thị</th>
                          <th style="width: 20%">#Hành động</th>
                        </tr>
                      </thead>
                      @foreach($all_yard as $key => $list_yard)
                      @foreach($all_yard1 as $key1 => $list_yard1)
                        @if($admin_id == $list_yard1->admin_id && $list_yard1->yard_system_id == $list_yard->yard_system_id)
                      <tbody>
                        <tr>
                          <td>#</td>
                          <td>
                            {{$list_yard->yard_mss}}
                            <br />
                            <small>ID: {{$list_yard->yard_id}}</small>
                          </td>
                          <td>
                            {{$list_yard->yard_system_id}}
                          </td>
                          <td>
                            <img src="{{URL::TO('../public/uploads/YardImg/'.$list_yard->yard_img)}}" width="100" height="100" alt="IMG">
                          </td>
                          <td>
                            {{$list_yard->yard_limit}}
                          </td>
                          <td>
                            {{$list_yard->yard_surface}}
                          </td>
                          <td>
                            @if($list_yard->yard_status == 1)
                            <a href="{{URL::TO('/unactive-yard/'.$list_yard->yard_id)}}"><i class="fa fa-toggle-on" style="font-size: 25px; color: green;"> Hiện</i></a>
                            @else
                             <a href="{{URL::TO('/active-yard/'.$list_yard->yard_id)}}"><i class="fa fa-toggle-off" style="font-size: 25px; color: grey;"> Ẩn</i></a><br>
                             {{-- <span style="color: red;">ĐÃ HẾT</span> --}}
                            @endif
                          </td>
                          <td>
                            <a href="{{URL::TO('/edit-yard/'.$list_yard->yard_id)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Sửa </a>
                            <a href="{{URL::TO('/delete-yard/'.$list_yard->yard_id)}}" onclick="return confirm('Bạn có chắc muốn xóa sân này ra khỏi hệ thống?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Xóa </a>
                            <a href="{{URL::TO('/add-time-and-price/'.$list_yard->yard_system_id.'/'.$list_yard->yard_id)}}" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> Thêm giờ và giá</a>
                          </td>
                        </tr>
                      </tbody>
                      @endif
                      @endforeach
                      @endforeach
                    </table>
                    <!-- end project list -->
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection