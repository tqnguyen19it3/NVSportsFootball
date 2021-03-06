<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('../public/front-end/images/logometa.jpg')}}" />

    <title>Admin | NV Sports Football</title>

    <!-- Bootstrap -->
    <link href="{{asset('../public/back-end/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('../public/back-end/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('../public/back-end/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
   <link href="{{asset('../public/back-end/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('../public/back-end/build/css/custom.min.css')}}" rel="stylesheet">
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{URL::TO('/admin-dashboard')}}" class="site_title"><i class="fa fa-soccer-ball-o"></i> <span>Sports Football</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('../public/back-end/production/images/img.jpg')}}" alt="avatar" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Chào mừng</span>
                <h2><?php
                        $name = Session::get('admin_name');
                        $id = Session::get('admin_id');
                        if($name){
                            echo $name;
                        }
                    ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Trang chủ <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL::TO('/admin-dashboard')}}">Dashboard</a></li>
                    </ul>
                  </li>
{{--                   <li><a><i class="fa fa-tags"></i> Dịch vụ chủ sân <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL::TO('/add-system-yard')}}">Đăng ký hệ thống sân</a></li>
                      <li><a href="{{URL::TO('/view-system-yard')}}">Quản lý hệ thống sân</a></li>
                      <li><a href="{{URL::TO('/add-yard')}}">Thêm sân bóng </a></li>
                      <li><a href="{{URL::TO('/all-yard')}}">Quản lý sân bóng</a></li>
                    </ul>
                  </li> --}}
                  <li><a><i class="fa fa-sitemap"></i> Dịch vụ chủ sân <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a>Hệ thống sân<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li><a href="{{URL::TO('/add-system-yard')}}">Đăng ký hệ thống sân</a></li>
                            <li><a href="{{URL::TO('/view-system-yard')}}">Quản lý hệ thống sân</a></li>
                            <li><a href="{{URL::TO('/add-post-yardsys')}}">Thêm bài viết hệ thống sân</a></li>
                            <li><a href="{{URL::TO('/all-post-yardsys')}}">Quản lý bài viết hệ thống sân</a></li>
                          </ul>
                        </li>
                        <li><a>Sân bóng<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li><a href="{{URL::TO('/add-yard')}}">Thêm sân bóng </a></li>
                            <li><a href="{{URL::TO('/all-yard')}}">Quản lý sân bóng</a></li>
                          </ul>
                        </li>
                    </ul>
                  </li>  
                  <li><a><i class="fa fa-desktop"></i> Quản lý sân đặt <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL::TO('/manager-booked-yard/'.$id)}}">Thông tin sân - người đặt</a></li>
                    </ul>
                  </li>
                  {{-- <li><a><i class="fa fa-edit"></i> Bài đăng <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Viết bài</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Bảng thống kê <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="#">Tables</a></li>
                      </ul>
                  </li> --}}
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL::TO('/403')}}">403 Error</a></li>
                      <li><a href="{{URL::TO('/404')}}">404 Error</a></li>
                      <li><a href="{{URL::TO('/500')}}">500 Error</a></li>
                      <li><a href="{{URL::TO('/admin-profile/'.$id)}}">Hồ sơ cá nhân</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{URL::TO('/admin-logout')}}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="{{asset('../public/back-end/production/images/img.jpg')}}" alt="avatar"><?php
                        $name = Session::get('admin_name');
                        if($name){
                            echo $name;
                        }
                    ?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="{{URL::TO('/admin-profile/'.$id)}}"> Hồ sơ admin</a>
                      <a class="dropdown-item"  href="{{URL::TO('/admin-account/'.$id)}}"><span class="badge bg-red pull-right">admin</span>Thay đổi tài khoản</a>
                      <a class="dropdown-item"  href="{{URL::TO('/admin-logout')}}"><i class="fa fa-sign-out pull-right"></i> Đăng xuất</a>
                    </div>
                  </li>
  
                  <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">6</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="{{asset('../public/back-end/production/images/img.jpg')}}" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="{{asset('../public/back-end/production/images/img.jpg')}}" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="{{asset('../public/back-end/production/images/img.jpg')}}" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="{{asset('../public/back-end/production/images/img.jpg')}}" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->

        <div class="right_col" role="main">
            @yield('admin_content')
        </div>

        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            NV Sports Football - <a href="{{URL::TO('/home')}}">Nền tảng thể thao đặt sân & tìm đối hàng đầu khu vực.</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('../public/back-end/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('../public/back-end/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('../public/back-end/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('../public/back-end/vendors/nprogress/nprogress.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('../public/back-end/vendors/iCheck/icheck.min.js')}}"></script>
    <script src="{{asset('../public/back-end/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <script src="{{asset('../public/back-end/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>
    <script src="{{asset('../public/back-end/vendors/switchery/dist/switchery.min.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('../public/back-end/build/js/custom.min.js')}}"></script>
    <script src="{{asset('../public/back-end/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript">
      CKEDITOR.replace('ckeditor',{

        filebrowserImageUploadUrl : "{{url('upload-ckeditor?_token='.csrf_token())}}",
        filebrowserBrowseUrl : "{{url('file-browser?_token='.csrf_token())}}",
        filebrowserUploadMethod : 'form' 

      });
      CKEDITOR.replace('ckeditor1',{

        filebrowserImageUploadUrl : "{{URL('upload-ckeditor1?_token='.csrf_token())}}",
        filebrowserBrowseUrl : "{{URL('file-browser1?_token='.csrf_token())}}",
        filebrowserUploadMethod : 'form' 

      });
      CKEDITOR.replace('ckeditor2',{

        filebrowserImageUploadUrl : "{{url('upload-ckeditor2?_token='.csrf_token())}}",
        filebrowserBrowseUrl : "{{url('file-browser2?_token='.csrf_token())}}",
        filebrowserUploadMethod : 'form' 
        
      });

    </script>

    <script type="text/javascript">
 
    function ChangeToSlug()
        {
            var slug;
         
            //Lấy text từ thẻ input title 
            slug = document.getElementById("slug").value;
            slug = slug.toLowerCase();
            //Đổi ký tự có dấu thành không dấu
                slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ|ä/gi, 'a');
                slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ö|ợ/gi, 'o');
                slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|ü/gi, 'u');
                slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                slug = slug.replace(/đ/gi, 'd');

                slug = slug.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ|Ä/gi, 'A');
                slug = slug.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/gi, 'E');
                slug = slug.replace(/Ì|Í|Ị|Ỉ|Ĩ/gi, 'I');
                slug = slug.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|Ö/gi, 'O');
                slug = slug.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ|Ü/gi, 'U');
                slug = slug.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/gi, 'Y');
                slug = slug.replace(/Đ/gi, 'D');
                //Xóa các ký tự đặt biệt
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                //Đổi khoảng trắng thành ký tự gạch ngang
                slug = slug.replace(/ /gi, "-");
                //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                slug = slug.replace(/\-\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-/gi, '-');
                slug = slug.replace(/\-\-/gi, '-');
                //Xóa các ký tự gạch ngang ở đầu và cuối
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                //In slug ra textbox có id “slug”
            document.getElementById('convert_slug').value = slug;
        }
   
  </script>
  
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
  
  <script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
  </script>
  </body>
</html>
