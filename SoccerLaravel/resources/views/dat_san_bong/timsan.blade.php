<!DOCTYPE html>
<html>
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
	<link rel="stylesheet" type="text/css" href="{{asset('../public/front-end/css/timdoithu.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('../public/front-end/css/footer.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/color.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/responsive.css')}}">
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
												<li><a href="{{URL::TO('/registration')}}">????ng k??</a></li>
												<li><a href="{{URL::TO('/home-for-the-yard')}}">D??nh cho ch??? s??n</a></li>
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
								<strong class="tg-logo">
									<img  src="{{asset('../public/front-end/images/logo5.png')}}" style="margin-top: 12px;" alt="image">
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
		
			<div id="myDIV" class="ts-image-top">
				<img src="{{asset('../public/front-end/images/slider/img-04.jpg')}}">
				<h3>??ang t??m s??n...</h3>
				<p>Ch???n m???t s??n b???n mu???n thi ?????u</p>
			</div>
			<div class="tdt">
					<div class="tdt-top">
						<div class="tdt-top-hinh-1">
							<i class="fal fa-futbol"></i>
							<h3 class="tdt-top-text-1">T??m <br> s??n</h3>

						</div>
						<div class="tdt-top-duong-1">

						</div>
						<div class="tdt-top-duong-2">

						</div>
						<div class="tdt-top-hinh-2">
							<i class="fad fa-calendar-alt"></i>
							<h3 class="tdt-top-text-2">Ch???n l???ch ????</h3>

						</div>
						<div class="tdt-top-duong-3">

						</div>
						<div class="tdt-top-hinh-3">
							<i class="fas fa-check-circle"></i>
							<h3 class="tdt-top-text-3">X??c nh???n</h3>
						</div>
					</div>

					<div class="tdt-body">
						<div class="tdt-body-top">
							<div id="ngay-thang">
								<script type="text/javascript">
									var d = new Date();
									var ngay = ["Ch??? nh???t", "Th??? hai", "Th??? ba", "Th??? t??", "Th??? n??m", "Th??? s??u", "Th??? b???y"];
									var thang = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"]
									document.getElementById("ngay-thang").innerHTML = "Danh s??ch c??c s??n ng??y " + d.getDate() + "/" + thang[d.getMonth()] + "/" + d.getFullYear(); 
								</script>	
							</div>

							<div class="dropdown" id="chon-quan">
							  <button type="button" class="ass btn dropdown-toggle" data-toggle="dropdown" style="color: #ffcc33;">
							    CH???N QU???N
							  </button>
							  <div class="dropdown-menu ads">
							  	@foreach($quan as $key => $qh)
							    <a class="dropdown-item" href="{{URL::TO('/tim-san-quan'.$qh->quan_id)}}"><p class="a">Qu???n {{$qh->quan_ten}}</p></a>
							    @endforeach
							  </div>
							</div>
						</div>
						
						<div class="tab-1 san-quan-hai-chau">
							<div class="tab-quan tab-quan-1">
								<ul>
									@foreach($yards as $key => $yard)
									@foreach($system_yard as $key => $sys_yard)
									@if($yard->yard_system_id == $sys_yard->yard_system_id && $yard->yard_status == 1)
									<li>
										<div class="cac-san-quan">
											<div class="cac-san-quan-left">
												<a href="{{URL::TO('/chon-gio-da/'.$sys_yard->yard_system_slug.'/'.$yard->yard_slug.'/'.$yard->yard_system_id.'/'.$yard->yard_id)}}"><img src="{{URL::TO('../public/uploads/YardImg/'.$yard->yard_img)}}" class="img"></a>
											</div>
											<div class="cac-san-quan-right">
												<div class="text-can-san-quan-left">
													@foreach($post_yardsys as $key => $post_ys)
													@if($post_ys->yard_system_id == $sys_yard->yard_system_id && $post_ys->post_yardsys_status == 1)
													<h3><a href="{{URL::TO('/gioi-thieu/'.$sys_yard->yard_system_slug.'/'.$sys_yard->yard_system_id.'/'.$post_ys->post_yardsys_id)}}">{{$sys_yard->yard_system_name}}</a></h3>
													@elseif($post_ys->yard_system_id == $sys_yard->yard_system_id && $post_ys->post_yardsys_status == 0)
													<h3><a href="{{URL::TO('/404')}}">{{$sys_yard->yard_system_name}}</a></h3>
													@endif
													@endforeach
													<h4>M?? s??? s??n: <a href="{{URL::TO('/chon-gio-da/'.$sys_yard->yard_system_slug.'/'.$yard->yard_slug.'/'.$yard->yard_system_id.'/'.$yard->yard_id)}}">{{$yard->yard_mss}}</a></h4>
													<img src="{{asset('../public/front-end/img_tdt/location2.png')}}">
													<p class="text-can-san-quan-left-dia-chi"> {{$sys_yard->yard_system_address}}</p>
													<img src="{{asset('../public/front-end/img_tdt/stadium.png')}}" class="text-can-san-quan-left-img-stadium">
													<p class="loaisan">Lo???i s??n: </p>
													<p class="loaisan7">{{$yard->yard_limit}}</p>
												</div>
												<div class="text-can-san-quan-right">
													<a class="cac-san-quan-btn-dat-san" href="{{URL::TO('/chon-gio-da/'.$sys_yard->yard_system_slug.'/'.$yard->yard_slug.'/'.$yard->yard_system_id.'/'.$yard->yard_id)}}"><span>?????t s??n</span></a>
												</div>
												<div class="text-cac-san-quan-bottom">
													<ul>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="far fa-star"></i></li>
													</ul>													
												</div>
											</div>
										</div>
									</li>
									@elseif(!$yard)
										<h1 style="color: black;">kh??ng c??</h1>
									@endif
									
									@endforeach
									@endforeach
								</ul>

							</div>
							<div class="phan-trang" style="text-align: center;">
								<span><?php echo $yards->render(); ?></span>
							</div>

						</div>

					</div>

			</div>

            <div class="footer">
                <div class="abcd1">
                    <div class="footer-left">
                    <div class="footer-left-top">
                        <h3>V??? nv sports football</h3>              
                    </div>
                    <div class="footer-left-center">
                        <p align="justify">N???n t???ng th??? thao d??nh chung m???i ?????i t?????ng. ??? ????y, b???n c?? th??? d??? d??ng t??m ch??? ch??i, t??m ?????ng ?????i hay ?????i th??? ????? ch??i m???t c??ch vui v??? nh???t, ?????t s??n m???t c??ch hi???u qu??? nh???t. H??? th???ng qu???n l?? s??n, l???ch bi???u th??ng minh gi???m thi???u t???i ??a th???i gian chi ph??, t??ng doanh thu cho ch??? s??n.</p>
                    </div>
                </div>

                <div class="footer-center">
                    <div class="footer-center-top">
                        <h3>LI??N K???T NHANH</h3>
                    </div>
                    <div class="footer-center-center">
                        <ul class="footer-center-cot-1">
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="{{URL::TO('/home')}}#FindOpponents">T??m ?????i th???</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="{{URL::TO('/home')}}#NEXTMATCH">Tr???n ti???p theo</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="#">??i???u kho???n v?? s??? d???ng</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="#">Ch??nh s??ch b???o m???t</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="#">H??? tr???</a>
                            </li>                   
                        </ul>
                        <ul class="footer-center-cot-2">
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="{{URL::TO('/home')}}#BOOK">?????t s??n nhanh</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="{{URL::TO('/home')}}#lastResult">K???t qu??? g???n ????y</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="{{URL::TO('/home')}}#ContactUs">Ph???n h???i</a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="footer-right">
                    <div class="footer-right-top">
                        <h3>TH??NG TIN LI??N H???</h3>
                    </div>
                    <div class="footer-right-center">
                        <p>Khu A3, ???? th??? ?????i h???c ???? N???ng, ???????ng Nam K??? Kh???i Ngh??a, Qu???n Ng?? H??nh S??n, Tp. ???? N???ng</p>
                        <p>Tel.<font id="sdtlh">+84 819682325</font></p>
                    </div>

                    <div  class="footer-right-bottom">
                        <div class="khoi-footer-right-bottom">
                            <h3>LI??N H???</h3>
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

			<!-- <script type="text/javascript" src="js/co_dinh_menu.js"></script> -->

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

</body>
</html>