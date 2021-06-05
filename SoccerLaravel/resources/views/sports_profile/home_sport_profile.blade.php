<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hồ sơ thể thao</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="{{asset('../public/front-end/images/icon-play1.png')}}" />

	<link rel="stylesheet" href="{{asset('../public/front-end/css/profile.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/swiper.min.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/main.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/color.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/responsive1.css')}}">
	<script src="{{asset('../public/front-end/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Mobile Menu Start
		*************************************-->
		<div id="tg-navigationm-mobile" class="tg-navigationm-mobile tg-navigation collapse navbar-collapse">
			<span id="tg-close" class="tg-close fa fa-close"></span>
			<div class="tg-colhalf">
				<ul>
					<li class="active">
						<a href="{{URL::TO('/home')}}">Trang chủ</a>
					</li>
					<li>
						<a href="{{URL::TO('/home')}}#NEXTMATCH">Trận Tiếp Theo</a>
					</li>
					<li><a href="{{URL::TO('/home')}}#BOOK">Đặt Sân Nhanh</a></li>
				</ul>
			</div>
			<div class="tg-colhalf">
				<ul>
					<li>
						<a href="{{URL::TO('/home')}}#FindOpponents">Tìm đối thủ</a>
					</li>
					<li>
						<a href="{{URL::TO('/home')}}#lastResult">Kết quả gần đây</a>
					</li>
					<li><a href="{{URL::TO('/home')}}#ContactUs">Phản Hồi</a></li>
				</ul>
			</div>
		</div>
		<!--************************************
				Mobile Menu End
		*************************************-->
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="container">
				<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
					<div class="row">
						<nav class="navbar">
						<div class="tg-topbar tg-haslayout">
							<nav id="tg-topaddnav" class="tg-topaddnav">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-addnavigationm-mobile">
										<i class="fa fa-arrow-right"></i>
									</button>
								</div>
								<div id="tg-addnavigationm-mobile" class="tg-addnavigationm-mobile collapse navbar-collapse">
									<div class="tg-colhalf pull-right">
										<nav class="tg-addnav">
											<ul>
												<li></li>
												<?php
                                                    $user_id = Session::get('user_id');
                                                    if($user_id != NULL){
                                                ?>
                                                <li><a href="{{URL::TO('/logout-user')}}">Đăng xuất</a></li>
                                                <?php
                                                    }else{
                                                ?>
                                                <li><a href="{{URL::TO('/login')}}">Đăng Nhập</a></li>
                                                <?php
                                                    }
                                                ?>
												<li><a href="{{URL::TO('/registration')}}">Đăng ký</a></li>
												<li><a href="{{URL::TO('/home-for-the-yard')}}">Dành cho chủ sân</a></li>
												<li></li>
											</ul>
										</nav>
									</div>
									<div class="tg-colhalf">
										<ul class="tg-socialicons">
											<li>
												<a href="#">
													<i class="fa fa-facebook"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-linkedin"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-google-plus"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-dribbble"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</nav>
						</div>
						<nav id="tg-nav" class="tg-nav brand-center">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigationm-mobile">
									<i class="fa fa-bars"></i>
								</button> <!-- Dấu icon 3 sọc trong moblie  -->
								<strong class="tg-logo">
									<img src="{{asset('../public/front-end/images/logo5.png')}}" style="height: 180px;" alt="image">
								</strong> <!--cái logo -->
							</div>
							<div id="tg-navigation" class="tg-navigation">
								<div class="tg-colhalf">
                                    <ul>
                                        <li class="active">
                                            <a href="{{URL::TO('/home')}}">Trang chủ</a>
                                        </li>
                                        <li>
                                            <a href="{{URL::TO('/home')}}#NEXTMATCH">Trận Tiếp theo</a>
                                        </li>
                                        <li><a href="{{URL::TO('/home')}}#BOOK">Đặt Sân Nhanh</a></li>
                                    </ul>
                                </div>
                                <div class="tg-colhalf">
                                    <ul>
                                    	<li>
											<a href="{{URL::TO('/home')}}#FindOpponents">Tìm đối thủ</a>
										</li>
                                        <li>
                                            <a href="{{URL::TO('/home')}}#lastResult">Kết quả gần đây</a>
                                        </li>
                                        <li><a href="{{URL::TO('/home')}}#ContactUs">Phản hồi</a></li>
                                    </ul>
                                </div>
							</div>
						</nav>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Banner Start
		*************************************-->
		<div class="tg-banner tg-haslayout">
			<div class="tg-imglayer">
				<img src="{{asset('../public/front-end/images/bg-pattran.png')}}" alt="image desctription">
			</div>
			<div class="container">
				<div class="row">
					<div class="tg-banner-content tg-haslayout">
						<div class="tg-pagetitle">
							<h1>Hồ sơ thể thao</h1>
						</div>
						<ol class="tg-breadcrumb">
							<li><a href="{{URL::TO('/home')}}">Trang chủ</a></li>
							<li class="active">Hồ sơ thể thao</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Banner End
		*************************************-->
		<main class="tg-haslayout">
			<div class="container">
				<div class="row">
					<div  class="tg-main-section tg-haslayout">
						<section class="wrapper">			
							<div class="col-sm-9 col-xs-12 pull-left">
                            <div class="tg-player-detail tg-haslayout">
                                <div class="tg-player-data tg-haslayout">
                                    <div class="tg-player-info tg-haslayout">
                                        <div class="row">
                                            <div class="col-sm-4 col-xs-12">
                                                <div class="tg-widget tg-imagewidget">
                                                    <figure>
                                                        <img src="{{asset('../public/front-end/images/LogoDoi/logo-01.png')}}" alt="image description">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-xs-12">
                                                <div class="tg-playcontent">
                                                    <strong href="#" class="tg-theme-tag">Người đặt</strong>
                                                    <h3>Trần Quốc Nguyên</h3>
                                                </div>
                                                <ul>
                                                    <li>Đội bóng :</li>
                                                    <li>SHB. Đà Nẵng</li>
                                                    <li>Trình độ :</li>
                                                    <li>Đá hay</li>
                                                    <li>Độ Tuổi :</li>
                                                    <li>U20</li>
                                                    <li>Vị trí sở trường trong đội :</li>
                                                    <li>Tiền vệ cánh trái / phải, tiền đạo / tiền đạo</li>
                                                    <li>Mô tả đội của bạn :</li>
                                                    <li>"Đội học sinh, sinh viên, tìm đội giao lưu nâng cao sức khỏe"</li>
                                                </ul>
                                                <div class="tg-btnbox">
                                                    <button class="tg-btn" data-toggle="modal" data-target="#myModal" type="button" style="top: 20px;">Cập Nhật Lại</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="section-form">
                            <div class="container1">
                              <!-- Modal -->
                              <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog modal-md">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Form cập nhật</h4>
                                    </div>
                                    <div class="modal-body">
                                      <main class="main123">
                                        <div class="container1">
                                            <div class="register-form">
                                                <form action="" method="post">
                                                    <h1 class="h123">Cập nhật hồ sơ thể thao</h1>
                                                    <div class="input-box">
                                                        <input type="text" placeholder="Cập nhật tên đội">
                                                    </div>
                                                    <div class="input-box">
                                                        <label for="logo">Cập nhật logo đội</label>
                                                        <input type="file" id="logo" name="logo_image"  placeholder="Cập nhật logo">
                                                        <img src="" alt="Product" height="100" width="100">
                                                    </div>
                                                    <div class="input-box">
                                                        <div class="col-6">
                                                            <label for="trinhdo">Trình độ</label>
                                                            <select id="level">
                                                                <option value="yeu">Đá hay</option>
                                                                <option value="vua">Đá vừa</option>
                                                                <option value="hay">Đá yếu</option>
                                                            </select>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="input-box">
                                                        <div class="col-6">
                                                            <label for="tuoi">Độ tuổi</label>
                                                            <select id="tuoi">
                                                                <option value="u11">U15-u20</option>
                                                                <option value="u20">U20-u30</option>
                                                                <option value="u30">U30-U35</option>
                                                                <option value="u40">U35-U40</option>
                                                            </select>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="input-box">
                                                        <div class="col-6">
                                                            <label for="vtst">Vị trí sở trường</label>
                                                            <select id="vtst">
                                                                <option value="st">Tiền đạo</option>
                                                                <option value="rlm">Tiền vệ cánh</option>
                                                                <option value="cdm">Tiền vệ trung tâm</option>
                                                                <option value="cb">Hậu vệ</option>
                                                                <option value="gk">Thủ môn</option>
                                                            </select>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="input-box">
                                                        <label for="gioithieu">Giới thiệu đội</label>
                                                        <textarea id="gioithieu"></textarea>
                                                    </div>
                                                    
                                                    <div class="btn-box">
                                                        <button type="submit">
                                                            Cập nhật
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </main>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </section>
						</section>
						<div class="col-sm-3 col-xs-12">
							<aside  class="tg-sidebar">
								<div class="tg-widget">
									<h3>Hồ sơ thể thao</h3>
									<ul>
										<li>
											<a href="{{URL::TO('/profile1')}}"><em>Thông tin cá nhân</em><i>19</i></a>
										</li>
										
										<li>
											<a href="#"><em>Hồ sơ đội</em><i>10</i></a>
										</li>
										<li>
											<a href="#"><em>Lịch đặt sân</em><i>2</i></a>
										</li>
									</ul>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</div>
		</main>
		<div class="tg-footerbar">
			<div class="container">
				<span class="tg-copyright">&copy; 2020  |  All Rights Reserved</span>
				<nav class="tg-footernav">
					<ul>
						<li><a href="{{URL::TO('/home')}}">Trang chủ</a></li>
						<li><a href="{{URL::TO('/registration')}}">Đăng ký</a></li>
						<li><a href="{{URL::TO('/login')}}">Đăng nhập</a></li>
						<li><a href="{{URL::TO('/home')}}">Cập nhật</a></li>
					</ul>
				</nav>
			</div>
		</div>
		
</div>
	<script src="{{asset('../public/front-end/js/vendor/jquery-library.js')}}"></script>
	<script src="{{asset('../public/front-end/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{asset('../public/front-end/js/customScrollbar.min.js')}}"></script>
	<script src="{{asset('../public/front-end/js/owl.carousel.js')}}"></script>
	<script src="{{asset('../public/front-end/js/isotope.pkgd.js')}}"></script>
	<script src="{{asset('../public/front-end/js/prettyPhoto.js')}}"></script>
	<script src="{{asset('../public/front-end/js/swiper.min.js')}}"></script>
	<script src="{{asset('../public/front-end/js/jquery-ui.js')}}"></script>
	<script src="{{asset('../public/front-end/js/countTo.js')}}"></script>
	<script src="{{asset('../public/front-end/js/appear.js')}}"></script>
	<script src="{{asset('../public/front-end/js/main.js')}}"></script>
</body>
</html>