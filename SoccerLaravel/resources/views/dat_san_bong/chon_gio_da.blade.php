<!DOCTYPE html>
<html>
<head>

	<title>{{$meta_title}}</title>
	<meta name="description" content="{{$meta_desc}}">
    <meta name="keywords" content="chọn giờ đá {{$system_yard->yard_system_name}}, chon gio da, chọn giờ đá sân {{$yards->yard_mss}}, sân {{$yards->yard_mss}}"/>
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" type="image/x-icon" href="{{asset('../public/front-end/images/icon-play1.png')}}" />

	<link rel="stylesheet" href="{{asset('../public/front-end/css/bootstrap.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('../public/front-end/css/chonlichda.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('../public/front-end/css/footer.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/color.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/responsive.css')}}">
	<!-- <link rel="stylesheet" type="text/css" href="css/transitions.css"> -->
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

		<div class="cld">

			<div class="cld-img">
				<div class="text-cld-img">
					{{-- @foreach($system_yard as $key => $sys_yard) --}}
					<div class="text-cld-img-quan">
						@foreach($quan as $key => $q)
						@if($q->quan_id == $system_yard->quan_id)
						<p>Quận {{$q->quan_ten}}</p>
						@endif
						@endforeach
					</div>
					<h3 class="thts">{{$system_yard->yard_system_name}}</h3>
					<i class="fal fa-map-marker-alt"></i>
					<p class="text-cld-img-diachi" {{-- style="box-shadow: none;" --}}>{{$system_yard->yard_system_address}}</p>
					{{-- <ul>
						<li><i class="fas fa-star"></i></li>
						<li><i class="fas fa-star"></i></li>
						<li><i class="fas fa-star"></i></li>
						<li><i class="fas fa-star"></i></li>
						<li><i class="far fa-star"></i></li>
					</ul>
					<p class="text-cld-img-danhgia">71 đánh giá</p> --}}
					{{-- @endforeach --}}
				</div>
			</div>

			<div class="cld-top">
				<div class="cld-top-hinh-1">
					<i class="fal fa-futbol"></i>
					<h3 class="cld-top-text-1">Tìm <br> sân</h3>					
				</div>
				<div class="cld-top-duong-1">					
				</div>
				<div class="cld-top-duong-2">					
				</div>
				<div class="cld-top-hinh-2">
					<i class="fad fa-calendar-alt"></i>
					<h3 class="cld-top-text-2">Chọn lịch đá</h3>					
				</div>
				<div class="cld-top-duong-3">					
				</div>
				<div class="cld-top-hinh-3">
					<i class="fas fa-check-circle"></i>
					<h3 class="cld-top-text-3">Xác nhận</h3>
				</div>
			</div>

			<div class="cld-body">
				<div class="cld-body1-left">
					
					<div class="cld-body1-left-top">
						<h3>Chọn giờ đặt</h3>
						<div class="cld-body-giathuesan">
							<p>Giá thuê {{$yards->yard_limit}} người của sân {{$yards->yard_mss}}</p>
						</div>
						<ul>
							@foreach($time_and_price as $key => $time_price)
							<li>
								<div class="cld-body-left">
									<img src="{{asset('../public/front-end/img_tdt/clock.png')}}">
									<p>{{$time_price->time_price_hours}}</p>
								</div>

								<div class="cld-body-right">
									<sup><u>đ</u></sup>
									<p>{{number_format($time_price->time_price_pay)}}</p>
									<a class="cld-body-right-btn-dat-san" href="{{URL::TO('/xac-nhan-lich-da/'.$system_yard->yard_system_slug.'/'.$yards->yard_slug.'/'.$yards->yard_system_id.'/'.$yards->yard_id.'/'.$time_price->time_price_id)}}"><span>Đặt sân</span></a>
								</div>			
							</li>
							@endforeach	
						</ul>
					</div>

					<div class="cld-body-motagioithieusan">
						<div class="cld-body-motagioithieusan-top">
							<h3>Mô tả - giới thiệu về sân</h3>
						</div>
						<p>{{$yards->yard_desc}}</p>
					</div>

					<div class="cld-body-tienich">
						<div class="cld-body-tienich-top">
							<h3>Tiện ích</h3>
						</div>
						<i class="fa fa-chevron-circle-down" style="font-size: 20px;"></i>
						<p class="ktpn">{{$yards->yard_utilities}}</p>
					</div>

					<div class="cld-body-danhgiasan">
						<div class="cld-body-danhgiasan-top">
							<h3>Đánh giá</h3>
						</div>
						<div class="cld-body-danhgiasan-left">
							<p>Đánh giá trung bình</p>
							<h1>4/5</h1>
							<ul>
								<li><i class="fas fa-star" id="sao1"></i></li>
								<li><i class="fas fa-star" id="sao2"></i></li>
								<li><i class="fas fa-star" id="sao3"></i></li>
								<li><i class="fas fa-star" id="sao4"></i></li>
								<li><i class="far fa-star" id="sao5"></i></li>
							</ul>
							<p class="so-luot-danh-gia">(71 Đánh giá)</p>
						</div>
						<div class="cld-body-danhgiasan-right">
							<ul>
								<li>
									<p>5</p>
									<i class="fas fa-star" id="sao1"></i>
									<div>
										<div class="phan-tram-5"></div>
									</div>
									<p class="sophantram">50%</p>
								</li>
								<li>
									<p>4</p>
									<i class="fas fa-star" id="sao1"></i>
									<div>
										<div class="phan-tram-4"></div>
									</div>
									<p class="sophantram">25%</p>
								</li>
								<li>
									<p>3</p>
									<i class="fas fa-star" id="sao1"></i>
									<div>
										<div class="phan-tram-3"></div>
									</div>
									<p class="sophantram">15%</p>
								</li>
								<li>
									<p>2</p>
									<i class="fas fa-star" id="sao1"></i>
									<div>
										<div class="phan-tram-2"></div>
									</div>
									<p class="sophantram">5%</p>
								</li>
								<li>
									<p>1</p>
									<i class="fas fa-star" id="sao1"></i>
									<div>
										<div class="phan-tram-1"></div>
									</div>
									<p class="sophantram">5%</p>
								</li>
							</ul>
						</div>
					</div> 
					<div style="margin-top: 10px; display: flex;">
						<div class="fb-share-button" data-href="{{$url_canonical}}" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{$url_canonical}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div> 
						<div style="margin-left: 5px;" class="fb-like" data-href="{{$url_canonical}}" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="false"></div>
					</div>
					<div class="fb-comments" data-href="{{$url_canonical}}" data-width="" data-numposts="4"></div>
				</div>

				<div class="cld-body1-right">
					<iframe src="{{URL::TO('/ifr-recommend-yard')}}" scrolling="no"></iframe>
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
		<script src="{{asset('../public/front-end/js/customScrollbar.min.js')}}"></script> 
		<script src="{{asset('../public/front-end/js/owl.carousel.js')}}"></script>
		<script src="{{asset('../public/front-end/js/isotope.pkgd.js')}}"></script>
		<script src="{{asset('../public/front-end/js/prettyPhoto.js')}}"></script>
		<script src="{{asset('../public/front-end/js/swiper.min.js')}}"></script>
		<script src="{{asset('../public/front-end/js/jquery-ui.js')}}"></script>
		<script src="{{asset('../public/front-end/js/countTo.js')}}"></script>
		<script src="{{asset('../public/front-end/js/appear.js')}}"></script>
	{{-- LIKE SHARE COMMENT FB --}}
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0&appId=714139636150031&autoLogAppEvents=1" nonce="zjt7LrL2"></script>
	{{-- LIKE SHARE COMMENT FB --}}
</body>
</html>