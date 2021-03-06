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
						<a href="{{URL::TO('/home')}}">Trang ch???</a>
					</li>
					<li>
						<a href="{{URL::TO('/home')}}#NEXTMATCH">Tr???n Ti???p Theo</a>
					</li>
					<li><a href="{{URL::TO('/home')}}#BOOK">?????t S??n Nhanh</a></li>
				</ul>
			</div>
			<div class="tg-colhalf">
				<ul>
					<li>
						<a href="{{URL::TO('/home')}}#FindOpponents">T??m ?????i th???</a>
					</li>
					<li>
						<a href="{{URL::TO('/home')}}#lastResult">K???t qu??? g???n ????y</a>
					</li>
					<li><a href="{{URL::TO('/home')}}#ContactUs">Ph???n H???i</a></li>
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
                                                <li><a href="{{URL::TO('/profile-person/'.$user_id)}}">T??i kho???n</a></li>
                                                <?php
                                                    }else{
                                                ?>
                                                <li><a href="{{URL::TO('/login')}}">????ng Nh???p</a></li>
                                                <?php
                                                    }
                                                ?>
												<li><a href="{{URL::TO('/registration')}}"">????ng k??</a></li>
												<li><a href="{{URL::TO('/home-for-the-yard')}}">D??nh cho ch??? s??n</a></li>
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
								</button> <!-- D???u icon 3 s???c trong moblie  -->
								<strong class="tg-logo" style="width: 150px;">
									<img src="{{asset('../public/front-end/images/logo5.png')}}" style="height: 180px;" alt="image">
								</strong> <!--c??i logo -->
							</div>
							<div id="tg-navigation" class="tg-navigation">
								<div class="tg-colhalf">
                                    <ul>
                                        <li class="active">
                                            <a href="{{URL::TO('/home')}}">Trang ch???</a>
                                        </li>
                                        <li>
                                            <a href="{{URL::TO('/home')}}#NEXTMATCH">Tr???n Ti???p theo</a>
                                        </li>
                                        <li><a href="{{URL::TO('/home')}}#BOOK">?????t S??n Nhanh</a></li>
                                    </ul>
                                </div>
                                <div class="tg-colhalf">
                                    <ul>
                                    	<li>
											<a href="{{URL::TO('/home')}}#FindOpponents">T??m ?????i th???</a>
										</li>
                                        <li>
                                            <a href="{{URL::TO('/home')}}#lastResult">K???t qu??? g???n ????y</a>
                                        </li>
                                        <li><a href="{{URL::TO('/home')}}#ContactUs">Ph???n h???i</a></li>
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
							<h1>d??nh cho ch??? s??n</h1>
						</div>
						<ol class="tg-breadcrumb">
							<li><a href="{{URL::TO('/home')}}">Trang ch???</a></li>
							<li class="active">d??nh cho ch??? s??n</li>
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
						<h2>H???p t??c v???i NV Sports Football</h2>
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
											<div class="tg-section-heading"><h2>B???n l?? ch??? s??n? B???n lo l???ng khi s??n c??n tr???ng? </h2></div>
											<div class="tg-description">
												<p>
													NV Sports Football h??? tr??? b???n l???p ?????y l???ch ?????t s??n v???i chi ph?? th???p nh???t!
													K???t n???i v???i ?????ng ?????i v?? c???ng ?????ng nh???ng ng?????i ch??i b??ng ???? kh???p th??? gi???i.<br><br>
													????ng th??ng tin tr???n ?????u v?? b???t c???p/t??m ?????i d??? d??ng. Nh???n x??t ?????i th??? sau m???i tr???n. V???i NV Sports Football, kh??ng c??n t??nh tr???ng ch??nh l???ch tr??nh ????? hay ch??i x???u.<br>
												An to??n tin c???y ?????m b???o ho???t ?????ng kinh doanh c???a b???n ???????c thu???n l???i l?? ??u ti??n h??ng ?????u c???a ch??ng t??i.<br>
												H??? tr??? 24/7 lu??n lu??n s???n s??ng h??? tr??? b???n b???t c??? l??c n??o ??? ????u
												</p>
											</div>
											<div class="tg-btnbox">
												<?php
                                                    $admin_id = Session::get('admin_id');
                                                    if($admin_id != NULL){
                                                ?>
												<a class="tg-btn" href="{{URL::TO('/admin-dashboard')}}"><span>T??i kho???n Admin</span></a>
												<?php
                                                    }else{
                                                ?>
                                                <a class="tg-btn" href="{{URL::TO('/login-admin')}}"><span>????ng nh???p</span></a>
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
											<h2>????ng k?? qu???n l?? s??n b??ng v???i NV Sports Football trong 3 b?????c</h2>
										</div>
										<div class="tg-description">
											<p><img style="width: 40px; height: 40px;" src="https://www.sporta.vn/assets/business/1-73a1dd14f4a5fcf2c947551cd8e39f0586ffa108eabe6bcb0377310c7e63d85d.svg" alt="image description"> ??i???n th??ng tin ?????y ????? v?? ch??nh x??c.</p>
											<p><img style="width: 40px; height: 40px;"  src="https://www.sporta.vn/assets/business/2-4ca4c686cf53ed12466a9c136dc64796f8c9af70dd300ef38ff157a68ae3095f.svg" alt="image description"> NV Sports Football li??n h??? v?? x??c nh???n th??ng tin.</p>
											<p><img style="width: 40px; height: 40px;" src="https://www.sporta.vn/assets/business/3-29fdf0838ff93bfc4e7db22fba992021aec70861630a5f92b54b3afa8358ec7f.svg" alt="image description"> V??o c???ng qu???n l?? v?? b???t ?????u qu???n l?? s??n b??ng v???i NV Sports Football!</p>
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
												<a class="tg-btn" href="{{URL::TO('/admin-dashboard')}}"><span>T??i kho???n Admin</span></a>
												<?php
                                                    }else{
                                                ?>
                                                <a class="tg-btn" href="{{URL::TO('/register-admin')}}"><span>????ng k??</span></a>
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
											<h2>QU???N L?? S??N B??NG V???I NV Sports Football</h2>
										</div>
										<div class="tg-description">
											<p>Gi???i ph??p qu???n l?? s??n ????n gi???n, d??? d??ng m???i l??c m???i n??i tr??n m???i thi???t b???.<br><br>
											Doanh thu t??ng t??? 10% tr??? l??n! C???t gi???m chi ph??, th???i gian qu???n l??.<br><br>
										Trang th??ng tin s??n b??ng ri??ng bi???t v???i h??ng ng??n ng?????i truy c???p h???ng ng??y!<br><br>
									Giao di???n th??n thi???n, d??? d??ng l??m quen s??? d???ng.
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
											<h2>T??nh n??ng m???i m???</h2>
										</div>
										<div class="tg-description">
											<p>
												<i class="fa fa-star" style="font-size:20px; margin-right: 8px; color: #e3b837;"></i> Nh???n l???ch ?????t s??n online
											</p><br>
											<p>
												<i class="fa fa-star" style="font-size:20px; margin-right: 8px; color: #e3b837;"></i> Qu???n l?? l???ch ?????t s??n
											</p><br>
											<p>
												<i class="fa fa-star" style="font-size:20px; margin-right: 8px; color: #e3b837;"></i> T??y ch???nh gi?? theo ng??y gi???
											</p><br>
											<p>
												<i class="fa fa-star" style="font-size:20px; margin-right: 8px; color: #e3b837;"></i> H??? tr??? t??m ki???m v???i ng?????i ch??i m???i
											</p><br>
											<p>
												<i class="fa fa-star" style="font-size:20px; margin-right: 8px; color: #e3b837;"></i> Mi???n ph?? s??? d???ng
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
							<h2>C??u h???i th?????ng g???p</h2>
						</div>
						<div class="col-sm-11 col-xs-11 pull-right">
							<div class="tg-blogpost tg-blogpostlist">
								<div class="row">
									<div class="col-sm-10 col-xs-12">
										<article class="tg-post">
											<div class="tg-posttitle"><h3><a data-toggle="collapse" href="#down1">Ph???m m???m qu???n l?? NV Sports Football h??? tr??? g?? cho ch??? s??n?</a></h3></div>
											<div class="tg-description collapse public " id="down1">
												<p>Ph???n m???m qu???n l?? s??n b??ng c???a NV Sports Football h??? tr??? ch??? s??n qu???n l?? l???ch ?????t s??n hi???u qu??? v?? chuy??n nghi???p h??n. ??? ???? ch??? s??n c?? th??? bi???t ???????c m???t ng??y s??n c?? bao nhi??u l???ch, l???ch ?????t ??? s??n n??o, gi??? n??o? Gi??? n??o c??n s??n tr???ng m???t c??ch nhanh ch??ng, d??? d??ng.<br>
												D?? ch??? s??n ??? ????u v?? l??m g?? c??ng c?? th??? xem t??nh tr???ng ho???t ?????ng c???a s??n b??ng ngay l???p t???c. T??? ????y ch??? s??n kh??ng c??n ph???i lo l???ng v??? vi???c qu??n l???ch, nh???m ?????i hay sai gi??? n???a. Ngo??i ra, b???n ch??? c???n x??c nh???n l???ch ?????t, kh??ng c??n ph???i b???n b???u tr??? l???i ??i???n tho???i gi??? n??y c?? s??n tr???ng kh??ng n???a hay ??au ?????u v???i h??ng t?? gi???y t??? r???c r???i.</p>
											</div>
										</article>
									</div>
									<div class="col-sm-10 col-xs-12">
										<article class="tg-post">	
											<div class="tg-posttitle"><h3><a data-toggle="collapse" href="#down2">NV Sports Football s??? gi??p t??i t??ng doanh thu th??? n??o?</a></h3></div>
											<div class="tg-description collapse public " id="down2">
												<p>NV Sports Football h??? tr??? s??n b??ng c???a b???n qu???ng b?? t???i ng?????i ch??i, gi??p ng?????i ch??i c?? th??? xem ???????c gi??? n??o c?? s??n tr???ng c???a s??n c???a b???n n??n ?????t s??n online d??? h??n v?? nhanh h??n.<br>
												M???t kh??c ch??ng t??i c??n ph?? b???n gi???m chi ph?? v?? th???i gian qu???n l?? s??n b??ng m???t c??ch th??? c??ng, gi???y b??t nh?? tr?????c gi???.</p>
											</div>
										</article>
									</div>
									<div class="col-sm-10 col-xs-12">
										<article class="tg-post">
											<div class="tg-posttitle"><h3><a data-toggle="collapse" href="#down3">Th??ng tin s??n hi???n th??? ??? ????u? N?? c?? ???????c b???o v????</a></h3></div>
											<div class="tg-description collapse public " id="down3">
												<p>S??n b??ng c???a b???n sau khi ????ng k?? h???p t??c v???i NV Sports Football s??? ???????c s??? h???u m???t link ri??ng. M???i th??ng tin s??n b??ng c??ng nh?? gi??? c??n s??n tr???ng s??? ???????c hi???n th??? ??? ????.<br>
												???????ng d???n n??y b???n c?? th??? c??i ?????t ??? ph???n qu???n l?? c???a ch??? s??n. V?? d??? ???????ng d???n n??y c?? th??? l?? ???https://www.NV Sports Football.vn/tensancuaban???. NV Sports Football cam k???t th??ng tin s??n b??ng c???a b???n ???????c b???o v??? v?? hi???n th??? ch??nh x??c.</p>
											</div>
										</article>
									</div>
									<div class="col-sm-10 col-xs-12">
										<article class="tg-post">
											<div class="tg-posttitle"><h3><a data-toggle="collapse" href="#down4">Ch???c n??ng ?????t s??n online ho???t ?????ng ra sao?</a></h3></div>
											<div class="tg-description collapse public " id="down4">
												<p>Ng?????i ch??i s??? t??m ki???m s??n tr???ng tr??n NV Sports Football v?? ti???n h??nh ?????t s??n thanh to??n v???i ch??ng t??i ho???c thanh to??n t???i s??n ho???c thanh to??n online. Th??ng tin ng?????i ?????t s??? ???????c th??ng b??o v?? hi???n th??? tr??n tr??nh qu???n l?? c???a b???n.</p>
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
                                        <h3>V??? NV SPORTS FOOTBALL</h3>
                                    </div>
                                    <div class="tg-description">
                                        <p>N???n t???ng th??? thao d??nh chung m???i ?????i t?????ng. ??? ????y, b???n c?? th??? d??? d??ng t??m ch??? ch??i, t??m ?????ng ?????i hay ?????i th??? ????? ch??i m???t c??ch vui v??? nh???t, ?????t s??n m???t c??ch hi???u qu??? nh???t. H??? th???ng qu???n l?? s??n, l???ch bi???u th??ng minh gi???m thi???u t???i ??a th???i gian chi ph??, t??ng doanh thu cho ch??? s??n.</p>
                                    </div>
                                    <div class="tg-form-newsletter">
                                        <fieldset>
                                            <a class="tg-btn" href="{{URL::TO('/registration')}}">Tham gia ngay</a>
                                        </fieldset>
                                    </div>
                                    <div class="tg-posttitle">
                                        <h3>Li??n k???t nhanh</h3>
                                    </div>
                                    <div class="tg-tags">
                                        <a class="tg-tag" href="{{URL::TO('/home-for-the-yard')}}">D??nh cho ch??? s??n</a>
                                        <a class="tg-tag" href="{{URL::TO('/home')}}#BOOK">?????t s??n nhanh</a>
                                        <a class="tg-tag" href="{{URL::TO('/home')}}#FindOpponents">T??m ?????i th???</a>
                                        <a class="tg-tag" href="{{URL::TO('/home')}}#NEXTMATCH">Tr???n ti???p theo</a>
                                        <a class="tg-tag" href="{{URL::TO('/home')}}#lastResult">K???t qu??? g???n ????y</a>
                                        <a class="tg-tag" href="{{URL::TO('/home')}}#ContactUs"">Ph???n h???i</a>
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
                                            <address>Khu A3, ???? th??? ?????i h???c ???? N???ng, ???????ng Nam K??? Kh???i Ngh??a, Qu???n Ng?? H??nh S??n, Tp. ???? N???ng</address>
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
                            <li><a href="{{URL::TO('/home')}}">Trang ch???</a></li>
                            <li><a href="{{URL::TO('/registration')}}">????ng k??</a></li>
                            <li><a href="{{URL::TO('/login')}}">????ng nh???p</a></li>
                            <li><a href="{{URL::TO('/home')}}">C???p nh???t</a></li>
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