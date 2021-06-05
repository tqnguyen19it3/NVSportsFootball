<!DOCTYPE html>
<html>
<head>

	<title>{{$meta_title}}</title>

    <meta name="description" content="{{$meta_desc}}">
    <meta name="keywords" content="chọn giờ đá sân {{$system_yard->yard_system_name}}, xac nhan lich dat, xác nhận lịch đặt, xác nhận lịch đá sân {{$yards->yard_mss}}, chọn ngày đá sân {{$yards->yard_mss}}, chon ngay da"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <link  rel="canonical" href="{{$url_canonical}}" />
    <meta name="author" content="">
    
    <meta property="og:image" content="{{$image_og}}" />
    <meta property="og:site_name" content="nvsportsfootball.com" />
    <meta property="og:description" content="{{$meta_desc}}" />
    <meta property="og:title" content="{{$meta_title}}" />
    <meta property="og:url" content="{{$url_canonical}}" />
    <meta property="og:type" content="website" />

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('../public/front-end/images/icon-play1.png')}}" />
	
	<link rel="stylesheet" type="text/css" href="{{asset('../public/front-end/css/xacnhanlichda.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('../public/front-end/css/footer_xnld.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/color.')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/responsive.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('../public/front-end/css/transitions.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('../public/front-end/fontawesome-pro-5.13.0-web/css/all.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script src="{{asset('../public/front-end/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>
<body> 
    
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
												<?php
                                                    $user_id = Session::get('user_id');
                                                    if($user_id != NULL){
                                                ?>
                                                <li><a href="{{URL::TO('/profile-person/'.$user_id)}}">Tài khoản</a></li>
                                                <?php
                                                    }else{
                                                ?>
                                                <li><a href="{{URL::TO('/login')}}">Đăng Nhập</a></li>
                                                <?php
                                                    }
                                                ?>
												<li><a href="{{URL::TO('/registration')}}">Đăng ký</a></li>
												<li><a href="{{URL::TO('/home-for-the-yard')}}">Dành cho chủ sân</a></li>
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
									<img  src="{{asset('../public/front-end/images/logo5.png')}}" style="margin-top: 12px;" alt="image">
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

	<div>
		<div class="xnld">
			<div class="xnld-ban-do">
				{!!$system_yard->yard_system_maps!!}
			</div>
			<div class="xnld-body">
				<div class="xnld-body-left">
					<img src="{{URL::TO('../public/uploads/YardImg/'.$yards->yard_img)}}">
					<h3>Sân bóng {{$yards->yard_mss}}</h3>
					<div class="xnld-body-left-text">
						<div class="xnld-body-left-text-top">
							<div class="xnld-body-left-text-top-left">
								<img src="{{asset('../public/front-end/img_tdt/stadium2.png')}}">
								<h3>Mặt sân</h3>
								<h2>{{$yards->yard_surface}}</h2>
							</div>
							<div class="xnld-body-left-text-top-right">
								<img src="{{asset('../public/front-end/img_tdt/size.png')}}">
								<h3>Loại sân</h3>
								<h2>{{$yards->yard_limit}}</h2>	
							</div>
						</div>
						<div class="xnld-body-left-text-bottom">
							<div class="xnld-body-left-text-bottom">
							<div class="xnld-body-left-text-bottom-left">
								<img src="{{asset('../public/front-end/img_tdt/price.png')}}">
								<h3>Giá</h3>
								<h2>{{number_format($time_and_price->time_price_pay)}} VNĐ</h2>
							</div>
							<div class="xnld-body-left-text-bottom-right">
								<img src="{{asset('../public/front-end/img_tdt/location2.png')}}">
								<h3>Thành Phố</h3>
								<h2>Đà Nẵng</h2>	
							</div>
						</div>
						</div>
					</div>
					<div class="xnld-body-left-diachi">
						<i class="far fa-globe-americas"></i>
						<h3>Địa chỉ: </h3>
						<h2>{{$system_yard->yard_system_address}}</h2>
					</div>
				</div>
				<div class="xnld-body-right">
					<div class="xnld-top">
						<div class="xnld-top-hinh-1">
							<i class="fal fa-futbol"></i>
							<h3 class="xnld-top-text-1">Tìm <br> sân</h3>

						</div>
						<div class="xnld-top-duong-1">

						</div>
						<div class="xnld-top-duong-2">

						</div>
						<div class="xnld-top-hinh-2">
							<i class="fad fa-calendar-alt"></i>
							<h3 class="xnld-top-text-2">Chọn lịch đá</h3>

						</div>
						<div class="xnld-top-duong-3">

						</div>
						<div class="xnld-top-hinh-3">
							<i class="fas fa-check-circle"></i>
							<h3 class="xnld-top-text-3">Xác nhận</h3>
						</div>
					</div>
					<div class="xnld-calendar">
						<h3>Chọn ngày đặt</h3>
						<div class="xnld-calendar-cacgiokhac">
							{{-- <ul>
								<li>
									<div class="xnld-calendar-cacgiokhac-khac">
										<select  class="tab-lich active_4" onclick="OpenCalendar(event, 1)">
											<option>06:00-07:00</option>
											<option>07:00-08:00</option>
											<option>08:00-09:00</option>
											<option>09:00-10:00</option>
											<option>15:00-16:00</option>
											<option selected="selected">16:00-17:00</option>
										</select>
									</div>
								</li>
    							<li><div class="tab-lich" onclick="OpenCalendar(event, 2)"><p>17:00-18:00</p></div></li>
    							<li><div class="tab-lich" onclick="OpenCalendar(event, 3)"><p>18:00-19:00</p></div></li>
    							<li><div class="tab-lich" onclick="OpenCalendar(event, 4)"><p>19:00-20:00</p></div></li>
    							<li><div class="tab-lich" onclick="OpenCalendar(event, 5)"><p>20:00-21:00</p></div></li>
							</ul> --}}
							<ul>
								<li><div class="tab-lich"><p>{{$time_and_price->time_price_hours}}</p></div></li>
							</ul>
							<div class="xnld-calendar-loaisan"><p>{{$yards->yard_limit}}</p></div>
						</div>
						
						<div class="tab-gio gio-1">
							<div class="calendar">
								<iframe src="{{URL::TO('/ifr-calendar/'.$yards->yard_system_id.'/'.$yards->yard_id.'/'.$time_and_price->time_price_id.'/'.$user_id)}}"></iframe>
							</div>
						</div>
					</div>
					<script type="text/javascript" src="{{asset('../public/front-end/js/opencalendar.js')}}"></script>

				</div>
			</div>
			
		</div>		
	</div>

			<div class="footer">
                <div class="abcd1">
                    <div class="footer-left">
                    <div class="footer-left-top">
                        <h3>Về nv sports football</h3>              
                    </div>
                    <div class="footer-left-center">
                        <p align="justify">Nền tảng thể thao dành chung mọi đối tượng. Ở đây, bạn có thể dễ dàng tìm chỗ chơi, tìm đồng đội hay đối thủ để chơi một cách vui vẻ nhất, đặt sân một cách hiệu quả nhất. Hệ thống quản lý sân, lịch biểu thông minh giảm thiểu tối đa thời gian chi phí, tăng doanh thu cho chủ sân.</p>
                    </div>
                </div>

                <div class="footer-center">
                    <div class="footer-center-top">
                        <h3>LIÊN KẾT NHANH</h3>
                    </div>
                    <div class="footer-center-center">
                        <ul class="footer-center-cot-1">
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="{{URL::TO('/home')}}#FindOpponents">Tìm đối thủ</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="{{URL::TO('/home')}}#NEXTMATCH">Trận tiếp theo</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="#">Điều khoản và sử dụng</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="#">Chính sách bảo mật</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="#">Hỗ trợ</a>
                            </li>                   
                        </ul>
                        <ul class="footer-center-cot-2">
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="{{URL::TO('/home')}}#BOOK">Đặt sân nhanh</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="{{URL::TO('/home')}}#lastResult">Kết quả gần đây</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="{{URL::TO('/home')}}#ContactUs">Phản hồi</a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="footer-right">
                    <div class="footer-right-top">
                        <h3>THÔNG TIN LIÊN HỆ</h3>
                    </div>
                    <div class="footer-right-center">
                        <p>Khu A3, Đô thị Đại học Đà Nẵng, Đường Nam Kỳ Khởi Nghĩa, Quận Ngũ Hành Sơn, Tp. Đà Nẵng</p>
                        <p>Tel.<font id="sdtlh">+84 819682325</font></p>
                    </div>

                    <div  class="footer-right-bottom">
                        <div class="khoi-footer-right-bottom">
                            <h3>LIÊN HỆ</h3>
                        </div> 
                        <ul class="social-agileinfo">
				            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
				            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
				            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				        </ul>
                    </div>

                </div>
                </div>
            </div>

			<script src="{{asset('../public/front-end/js/vendor/jquery-library.js')}}"></script>
			<script src="{{asset('../public/front-end/js/vendor/bootstrap.min.js')}}"></script>
			<script src="{{asset('../public/front-end/js/main.js')}}"></script>
			<!-- từ đây trở xuống ko cần cũng đc nghe văn -->
			<script src="{{asset('../public/front-end/js/customScrollbar.min.js')}}"></script> 
			<script src="{{asset('../public/front-end/js/owl.carousel.js')}}"></script>
			<script src="{{asset('../public/front-end/js/isotope.pkgd.js')}}"></script>
			<script src="{{asset('../public/front-end/js/prettyPhoto.js')}}"></script>
			<script src="{{asset('../public/front-end/js/swiper.min.js')}}"></script>
			<script src="{{asset('../public/front-end/js/jquery-ui.js')}}"></script>
			<script src="{{asset('../public/front-end/js/countTo.js')}}"></script>
			<script src="{{asset('../public/front-end/js/appear.js')}}"></script>
</body>
</html>