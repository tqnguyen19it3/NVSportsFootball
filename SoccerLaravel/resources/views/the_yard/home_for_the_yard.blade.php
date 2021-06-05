<!DOCTYPE html>
</body>
</html>
<head>
	
	<title>{{$meta_title}}</title>

    <meta name="description" content="{{$meta_desc}}">
    <meta name="keywords" content="{{$meta_keywords}}"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <link  rel="canonical" href="{{$url_canonical}}" />
    <meta name="author" content="">
    
    {{-- <meta property="og:image" content="{{$image_og}}" /> --}}
    <meta property="og:site_name" content="nvsportsfootball.com" />
    <meta property="og:description" content="{{$meta_desc}}" />
    <meta property="og:title" content="{{$meta_title}}" />
    <meta property="og:url" content="{{$url_canonical}}" />
    <meta property="og:type" content="website" />
    
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/x-icon" href="{{asset('../public/front-end/images/icon-play1.png')}}" />
	<link rel="stylesheet" href="{{asset('../public/front-end/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/swiper.min.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/main.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/color.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/responsive1.css')}}">
	<script src="{{asset('../public/front-end/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
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
                                                <li><a href="{{URL::TO('/profile-person/'.$user_id)}}">Tài khoản</a></li>
                                                <?php
                                                    }else{
                                                ?>
                                                <li><a href="{{URL::TO('/login')}}">Đăng Nhập</a></li>
                                                <?php
                                                    }
                                                ?>
												<li><a href="{{URL::TO('/registration')}}"">Đăng ký</a></li>
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
								<strong class="tg-logo" style="width: 150px;">
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
							<h1>dành cho chủ sân</h1>
						</div>
						<ol class="tg-breadcrumb">
							<li><a href="{{URL::TO('/home')}}">Trang chủ</a></li>
							<li class="active">dành cho chủ sân</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Banner End
		*************************************-->
		<!--************************************
					About Us Start
			*************************************-->
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="tg-section-name">
						<h2>Hợp tác với NV Sports Football</h2>
					</div>
					<div class="col-sm-11 col-xs-11 pull-right">
						<div class="row">
							<div class="tg-aboutussection">
								<div class="row">
									<div class="col-md-6 col-sm-12 col-xs-12">
										<figure>
											<img src="{{asset('../public/front-end/images/img-01.jpg')}}" alt="image description">
										</figure>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<div class="tg-contentbox">
											<div class="tg-section-heading"><h2>Bạn là chủ sân? Bạn lo lắng khi sân còn trống? </h2></div>
											<div class="tg-description">
												<p>
													NV Sports Football hỗ trợ bạn lấp đầy lịch đặt sân với chi phí thấp nhất!
													Kết nối với đồng đội và cộng đồng những người chơi bóng đá khắp thế giới.<br><br>
													Đăng thông tin trận đấu và bắt cặp/tìm đối dễ dàng. Nhận xét đối thủ sau mỗi trận. Với NV Sports Football, không còn tình trạng chênh lệch trình độ hay chơi xấu.<br>
												An toàn tin cậy đảm bảo hoạt động kinh doanh của bạn được thuận lợi là ưu tiên hàng đầu của chúng tôi.<br>
												Hỗ trợ 24/7 luôn luôn sẵn sàng hỗ trợ bạn bất cứ lúc nào ở đâu
												</p>
											</div>
											<div class="tg-btnbox">
												<?php
                                                    $admin_id = Session::get('admin_id');
                                                    if($admin_id != NULL){
                                                ?>
												<a class="tg-btn" href="{{URL::TO('/admin-dashboard')}}"><span>Tài khoản Admin</span></a>
												<?php
                                                    }else{
                                                ?>
                                                <a class="tg-btn" href="{{URL::TO('/login-admin')}}"><span>Đăng nhập</span></a>
                                                <?php
                                                    }
                                                ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					About Us End
			*************************************-->
			<hr style="width: 100%; background-color: black;">
			<!--************************************
					Testimonials Start
			*************************************-->
			<section class="tg-testimonial tg-haslayout tg-bgdark">
				<div class="container">
					<div class="row">
						<div id="tg-testimonial-slider" class="tg-testimonial-slider tg-haslayout">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<figure>
										<img src="{{asset('../public/front-end/images/trophy.png')}}" alt="image description">
									</figure>
									<div class="tg-contentbox">
										<div class="tg-section-heading">
											<h2>Đăng ký quản lý sân bóng với NV Sports Football trong 3 bước</h2>
										</div>
										<div class="tg-description">
											<p><img style="width: 40px; height: 40px;" src="https://www.sporta.vn/assets/business/1-73a1dd14f4a5fcf2c947551cd8e39f0586ffa108eabe6bcb0377310c7e63d85d.svg" alt="image description"> Điền thông tin đầy đủ và chính xác.</p>
											<p><img style="width: 40px; height: 40px;"  src="https://www.sporta.vn/assets/business/2-4ca4c686cf53ed12466a9c136dc64796f8c9af70dd300ef38ff157a68ae3095f.svg" alt="image description"> NV Sports Football liên hệ và xác nhận thông tin.</p>
											<p><img style="width: 40px; height: 40px;" src="https://www.sporta.vn/assets/business/3-29fdf0838ff93bfc4e7db22fba992021aec70861630a5f92b54b3afa8358ec7f.svg" alt="image description"> Vào cổng quản lý và bắt đầu quản lý sân bóng với NV Sports Football!</p>
										</div><br><br>
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
													<i class="fa fa-dribbble"></i>
												</a>
											</li>
										</ul>
										<div style="margin-top: 20px;" class="tg-btnbox">
												<?php
                                                    $admin_id = Session::get('admin_id');
                                                    if($admin_id != NULL){
                                                ?>
												<a class="tg-btn" href="{{URL::TO('/admin-dashboard')}}"><span>Tài khoản Admin</span></a>
												<?php
                                                    }else{
                                                ?>
                                                <a class="tg-btn" href="{{URL::TO('/register-admin')}}"><span>Đăng ký</span></a>
                                                <?php
                                                    }
                                                ?>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<figure>
										<img src="{{asset('../public/front-end/images/trophy.png')}}" alt="image description">
									</figure>
									<div class="tg-contentbox">
										<div class="tg-section-heading">
											<h2>QUẢN LÝ SÂN BÓNG VỚI NV Sports Football</h2>
										</div>
										<div class="tg-description">
											<p>Giải pháp quản lý sân đơn giản, dễ dàng mọi lúc mọi nơi trên mọi thiết bị.<br><br>
											Doanh thu tăng từ 10% trở lên! Cắt giảm chi phí, thời gian quản lý.<br><br>
										Trang thông tin sân bóng riêng biệt với hàng ngàn người truy cập hằng ngày!<br><br>
									Giao diện thân thiện, dễ dàng làm quen sử dụng.
											</p>
										</div><br>
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
													<i class="fa fa-dribbble"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="swiper-slide">
									<figure>
										<img src="{{asset('../public/front-end/images/trophy.png')}}" alt="image description">
									</figure>
									<div class="tg-contentbox">
										<div class="tg-section-heading">
											<h2>Tính năng mới mẻ</h2>
										</div>
										<div class="tg-description">
											<p>
												<i class="fa fa-star" style="font-size:20px; margin-right: 8px; color: #e3b837;"></i> Nhận lịch đặt sân online
											</p><br>
											<p>
												<i class="fa fa-star" style="font-size:20px; margin-right: 8px; color: #e3b837;"></i> Quản lý lịch đặt sân
											</p><br>
											<p>
												<i class="fa fa-star" style="font-size:20px; margin-right: 8px; color: #e3b837;"></i> Tùy chỉnh giá theo ngày giờ
											</p><br>
											<p>
												<i class="fa fa-star" style="font-size:20px; margin-right: 8px; color: #e3b837;"></i> Hỗ trợ tìm kiếm với người chơi mới
											</p><br>
											<p>
												<i class="fa fa-star" style="font-size:20px; margin-right: 8px; color: #e3b837;"></i> Miễn phí sử dụng
											</p><br>
										</div>
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
													<i class="fa fa-dribbble"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="tg-themebtnprev"><span class="fa fa-angle-left"></span></div>
							<div class="tg-themebtnnext"><span class="fa fa-angle-right"></span></div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Testimonials End
			*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-section-name">
							<h2>Câu hỏi thường gặp</h2>
						</div>
						<div class="col-sm-11 col-xs-11 pull-right">
							<div class="tg-blogpost tg-blogpostlist">
								<div class="row">
									<div class="col-sm-10 col-xs-12">
										<article class="tg-post">
											<div class="tg-posttitle"><h3><a data-toggle="collapse" href="#down1">Phầm mềm quản lý NV Sports Football hỗ trợ gì cho chủ sân?</a></h3></div>
											<div class="tg-description collapse public " id="down1">
												<p>Phần mềm quản lý sân bóng của NV Sports Football hỗ trợ chủ sân quản lý lịch đặt sân hiệu quả và chuyên nghiệp hơn. Ở đó chủ sân có thể biết được một ngày sân có bao nhiêu lịch, lịch đặt ở sân nào, giờ nào? Giờ nào còn sân trống một cách nhanh chóng, dễ dàng.<br>
												Dù chủ sân ở đâu và làm gì cũng có thể xem tình trạng hoạt động của sân bóng ngay lập tức. Từ đây chủ sân không còn phải lo lắng về việc quên lịch, nhầm đội hay sai giờ nữa. Ngoài ra, bạn chỉ cần xác nhận lịch đặt, không còn phải bận bịu trả lời điện thoại giờ này có sân trống không nữa hay đau đầu với hàng tá giấy tờ rắc rối.</p>
											</div>
										</article>
									</div>
									<div class="col-sm-10 col-xs-12">
										<article class="tg-post">	
											<div class="tg-posttitle"><h3><a data-toggle="collapse" href="#down2">NV Sports Football sẽ giúp tôi tăng doanh thu thế nào?</a></h3></div>
											<div class="tg-description collapse public " id="down2">
												<p>NV Sports Football hỗ trợ sân bóng của bạn quảng bá tới người chơi, giúp người chơi có thể xem được giờ nào có sân trống của sân của bạn nên đặt sân online dễ hơn và nhanh hơn.<br>
												Mặt khác chúng tôi còn phí bạn giảm chi phí và thời gian quản lý sân bóng một cách thủ công, giấy bút như trước giờ.</p>
											</div>
										</article>
									</div>
									<div class="col-sm-10 col-xs-12">
										<article class="tg-post">
											<div class="tg-posttitle"><h3><a data-toggle="collapse" href="#down3">Thông tin sân hiển thị ở đâu? Nó có được bảo vệ?</a></h3></div>
											<div class="tg-description collapse public " id="down3">
												<p>Sân bóng của bạn sau khi đăng ký hợp tác với NV Sports Football sẽ được sở hữu một link riêng. Mọi thông tin sân bóng cũng như giờ còn sân trống sẽ được hiện thị ở đó.<br>
												Đường dẫn này bạn có thể cài đặt ở phần quản lý của chủ sân. Ví dụ đường dẫn này có thể là “https://www.NV Sports Football.vn/tensancuaban”. NV Sports Football cam kết thông tin sân bóng của bạn được bảo vệ và hiện thị chính xác.</p>
											</div>
										</article>
									</div>
									<div class="col-sm-10 col-xs-12">
										<article class="tg-post">
											<div class="tg-posttitle"><h3><a data-toggle="collapse" href="#down4">Chức năng đặt sân online hoạt động ra sao?</a></h3></div>
											<div class="tg-description collapse public " id="down4">
												<p>Người chơi sẽ tìm kiếm sân trống trên NV Sports Football và tiến hành đặt sân thanh toán với chúng tôi hoặc thanh toán tại sân hoặc thanh toán online. Thông tin người đặt sẽ được thông báo và hiển thị trên trình quản lý của bạn.</p>
											</div>
										</article>
									</div>
								</div>
							</div>
<!-- 							<ul class="tg-pagination">
								<li class="tg-prevpage"><a href="#"><i class="fa fa-angle-left"></i></a></li>
								<li class="active"><a href="#">4</a></li>
								<li><a href="#">6</a></li>
								<li class="tg-nextpage"><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul> -->
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--************************************
				Main End
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
            <div class="tg-haslayout tg-footerinfobox">
                <div class="tg-bgboxone"></div>
                <div class="tg-bgboxtwo"></div>
                <div class="tg-footerinfo">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="tg-footercol">
                                    <div class="tg-posttitle">
                                        <h3>VỀ NV SPORTS FOOTBALL</h3>
                                    </div>
                                    <div class="tg-description">
                                        <p>Nền tảng thể thao dành chung mọi đối tượng. Ở đây, bạn có thể dễ dàng tìm chỗ chơi, tìm đồng đội hay đối thủ để chơi một cách vui vẻ nhất, đặt sân một cách hiệu quả nhất. Hệ thống quản lý sân, lịch biểu thông minh giảm thiểu tối đa thời gian chi phí, tăng doanh thu cho chủ sân.</p>
                                    </div>
                                    <div class="tg-form-newsletter">
                                        <fieldset>
                                            <a class="tg-btn" href="{{URL::TO('/registration')}}">Tham gia ngay</a>
                                        </fieldset>
                                    </div>
                                    <div class="tg-posttitle">
                                        <h3>Liên kết nhanh</h3>
                                    </div>
                                    <div class="tg-tags">
                                        <a class="tg-tag" href="{{URL::TO('/home-for-the-yard')}}">Dành cho chủ sân</a>
                                        <a class="tg-tag" href="{{URL::TO('/home')}}#BOOK">Đặt sân nhanh</a>
                                        <a class="tg-tag" href="{{URL::TO('/home')}}#FindOpponents">Tìm đối thủ</a>
                                        <a class="tg-tag" href="{{URL::TO('/home')}}#NEXTMATCH">Trận tiếp theo</a>
                                        <a class="tg-tag" href="{{URL::TO('/home')}}#lastResult">Kết quả gần đây</a>
                                        <a class="tg-tag" href="{{URL::TO('/home')}}#ContactUs"">Phản hồi</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="tg-footercol">
                                    <div class="tg-haslayout">
                                        <strong class="tg-logo">
                                            <a href="{{URL::TO('/home')}}">
                                                <img src="{{asset('../public/front-end/images/bia.png')}}" alt="image description">
                                            </a>
                                        </strong>
                                    </div>
                                    <ul class="tg-contactinfo">
                                        <li>
                                            <i class="fa fa-home"></i>
                                            <address>Khu A3, Đô thị Đại học Đà Nẵng, Đường Nam Kỳ Khởi Nghĩa, Quận Ngũ Hành Sơn, Tp. Đà Nẵng</address>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope-o"></i>
                                            <span>tqnguyen.19it3@vku.udn.vn</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            <span>+84 819682325</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-skype"></i>
                                            <a href="#">NV Sports Football</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-facebook-f"></i>
                                            <a href="#">facebook.com/NVSportsFootball201</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-twitter"></i>
                                            <a href="#">twitter.com/NVSportsFootball201</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-laptop"></i>
                                            <a href="{{URL::TO('/home')}}">www.NVSportsFootball.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        </footer>
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