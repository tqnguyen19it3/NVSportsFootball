@extends('admin_layout')
@section('admin_content')

          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Bài viết giới thiệu hệ thống sân</h3>
              </div>
            </div>
            <?php
                $admin_id = Session::get('admin_id');
              ?>
            
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
            @foreach($all_post_yardsys as $key => $apys)
              @foreach($all_yard_system as $key => $yard_sys)
              @if($admin_id == $yard_sys->admin_id && $yard_sys->yard_system_id == $apys->yard_system_id)
              <div class="row">
                <div class="col-md-12 col-sm-12 ">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2><strong>Bài giới thiệu {{$apys->post_yardsys_id}}:</strong> <small>{{$yard_sys->yard_system_name}}</small></h2>
                      
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <div class="col-md-7 col-sm-7 ">
                        <div class="product-image">
                          <img src="{{asset('../public/uploads/YardSystemImg/'.$yard_sys->yard_system_img)}}" alt="IMG" />
                        </div>
                        <div class="product_gallery">
                          <div class="">
                            <div class="product_price">
                              <h3 style="font-weight: 400; color: #26B99A; margin: 0;">Từ khóa chuẩn SEO</h3>
                              <span class="price-tax">{{$apys->post_yardsys_metakeyword}}</span>
                              <br>
                              <h3 style="font-weight: 400; color: #26B99A; margin: 0;">Meta Desc SEO</h3>
                              <span class="price-tax">{{$yard_sys->yard_system_desc}}</span>
                              <br>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">

                        <h3 class="prod_title">Tổng quan bài giới thiệu hệ thống sân</h3>
                        
                        <p>{!!$apys->post_yardsys_content!!}.</p>
                        <br />

                      </div>
                      <a href="{{URL::TO('/edit-post-yardsys/'.$apys->yard_system_id.'/'.$apys->post_yardsys_id)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Sửa Bài</a>
                      <a href="{{URL::TO('/delete-post-yardsys/'.$apys->post_yardsys_id)}}" onclick="return confirm('Bạn có chắc muốn xóa bài viết giới thiệu này?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Xóa Bài</a>

                      @if($apys->post_yardsys_status == 0)
                      <button type="button" class="btn btn-xs" disabled><i class="fa fa-toggle-off" style="font-size: 25px; color: grey;"> Đang bị ẩn</i></button>
                      @else
                      <button type="button" class="btn btn-xs" disabled><i class="fa fa-toggle-on" style="font-size: 25px; color: green;"> Đang hiển thị</i></button>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              @endif
              @endforeach
            @endforeach
        </div>
@endsection