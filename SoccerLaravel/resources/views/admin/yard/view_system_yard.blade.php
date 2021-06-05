@extends('admin_layout')
@section('admin_content')  
        <?php
          $admin_id = Session::get('admin_id');
        ?>
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Quản lý <small>hệ thống sân</small></h3>
              </div>
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
                    <h2>Hệ thống sân</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <p>Bảng đơn giản hệ thống sân với các tùy chọn mô tả và chỉnh sửa</p>
                    
                    <!-- start project list -->
                    <table class="table table-striped projects" id="myTable">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">Hệ thống sân</th>
                          <th>ID Chủ sân</th>
                          <th>Mô tả hệ thống sân</th>
                          <th>Hình ảnh</th>
                          <th>Địa chỉ</th>
                          <th style="width: 20%">#Hành động</th>
                        </tr>
                      </thead>
                      @foreach($view_system_yard as $key => $view_sysYard)
                      @if($admin_id == $view_sysYard->admin_id)
                      <tbody>
                        <tr>
                          <td>#</td>
                          <td>
                            {{$view_sysYard->yard_system_name}}
                            <br />
                            <small>ID: {{$view_sysYard->yard_system_id}}</small>
                          </td>
                          <td>
                            {{$view_sysYard->admin_id}}
                          </td>
                          <td class="project_progress">
                            {{$view_sysYard->yard_system_desc}}
                          </td>
                          <td>
                            <img src="{{URL::TO('../public/uploads/YardSystemImg/'.$view_sysYard->yard_system_img)}}" width="100" height="100" alt="IMG">
                          </td>
                          <td class="project_progress">
                            {{$view_sysYard->yard_system_address}}
                          </td>
                          <td>
                            <a href="{{URL::TO('/edit-system-yard/'.$view_sysYard->yard_system_id)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Sửa </a>
                            <a href="{{URL::TO('/delete-system-yard/'.$view_sysYard->yard_system_id)}}" onclick="return confirm('Bạn có chắc muốn xóa hệ thống sân này?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Xóa </a>
                          </td>
                        </tr>
                      </tbody>
                      @endif
                      @endforeach
                    </table>
                    <!-- end project list -->
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection