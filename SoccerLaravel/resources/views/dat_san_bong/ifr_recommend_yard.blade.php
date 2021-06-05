<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">

	<link rel="stylesheet" href="{{asset('../public/front-end/css/style.css')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('../public/front-end/fontawesome-pro-5.13.0-web/css/all.css')}}">
	<style type="text/css">
		body {
			font-family: 'Oswald', Arial, Helvetica, sans-serif;
			font-size: 14px;
			background-color: #fff;
		}
		* {
			margin: 0px;
			padding: 0px;
		}
		.san1, .san2, .san3, .san4 {
			width: 100%;
			height: 492px;
		}

		.san-tieude {
			width: 92%;
			height: 45px;
			margin-left: 4%;
			margin-top: -20px;
			border-bottom: 1.5px solid #ffcc33;
		}

		.san-tieude i {
			float: left;
			font-size: 23px;
			line-height: 45px;
			padding-right: 7px;
		}

		.san-tieude h3 {
			margin-top: 20px;
			font-size: 18px;
			line-height: 45px;
		}

		.san-img {
			width: 92%;
			height: 210px;
			margin-left: 4%;
			margin-top: 15px;
			margin-bottom: 25px;
			border: 1.5px solid #ffcc33;	
			-webkit-box-shadow: 0 0 5px #ffcc33;
   			box-shadow: 0 0 5px #ffcc33;
		}

		.san-img img {
			width: 100%;
			height: 100%;
		}

		.carousel-item > h3 {
			padding-left: 4%;
			text-transform: uppercase;
			color: #ffcc33;
			padding-bottom: 5px;
		}
		
		.carousel-item > img {
			margin-left: 4%;
			float: left;
			margin-bottom: 7px;
			margin-right: 2%;
		}

		.carousel-item p {
			width: 92%;
			margin-left: 4%;
			padding-top: 3px;
			font-size: 16px;
		}

		.carousel-indicators {
			margin-left: 8.5%;
		}

		.carousel > .carousel-indicators > .active {
			background-color: #ffcc33;
		}

		.carousel > .carousel-indicators > .abc {
			border: 1px solid #373542;
		}

		.chi-tiet {
			width: 130px;
			height: 40px;
			position: relative;
			margin-left: 4%;
			margin-top: 20px;
			border: 1.5px solid #ffcc33;
			background-color: #373542;
			-webkit-box-shadow: 0 0 5px #ffcc33;
   			box-shadow: 0 0 5px #ffcc33;
		}

		.chi-tiet a {
			font-size: 17px;
			color: #28262c;
			text-decoration: none;
			line-height: 35px;
			padding-left: 20px;
			color: #ffcc33;
		}
		.chi-tiet #icon-chi-tiet-right {
			position: absolute;
			top: 10px;
			left: 85px;
			font-size: 18px;
			color: #ffcc33;
		}
		.chi-tiet:hover {
			background-color: #ffcc33;
			border: 2px solid #373542;
			-webkit-box-shadow: 0 0 5px #373542;
    		box-shadow: 0 0 5px #373542;
    		overflow: hidden;
		}
		.chi-tiet:hover a {
			padding-left: 50px;
			font-size: 17px;
			font-weight: 500;
			transition: all 0.3s;
			color: #373542;
		}
		.chi-tiet:hover #icon-chi-tiet-right {
			left: 115px;
			transition: all 0.2s;
			visibility: hidden;
		}
		.chi-tiet #icon-chi-tiet-left {
			position: absolute;
			top: 12px;
			left: -10px;
			visibility: hidden;
			font-size: 18px;
			color: #373542;
		}
		.chi-tiet:hover #icon-chi-tiet-left {
			visibility: visible;
			left: 18px;
			top: 10px;
			transition: 0.3s;
		}


	</style>
</head>
<body>

	
	<div id="myCarousel" class="carousel slide border" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active abc"></li>
			<li data-target="#myCarousel" data-slide-to="1" class="abc"></li>
			<li data-target="#myCarousel" data-slide-to="2" class="abc"></li>
			<li data-target="#myCarousel" data-slide-to="3" class="abc"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active san1">
				<div class="san-tieude">
					<i class="far fa-map-marked-alt"></i>
					<h3>Giới thiệu các sân ở Đà Nẵng</h3>
				</div>
				<div class="san-img">
					<img src="{{asset('../public/front-end/img_timsan/san-bong-duy-tan.jpg')}}">
				</div>
				<h3>Sân bóng Duy Tân</h3>
				<img src="{{asset('../public/front-end/img_tdt/location2.png')}}">
				<p>Số 7 Duy Tân, Quận Hải Châu, Thành Phố Đà Nẵng</p>
				{{-- <div class="chi-tiet">
					<i class="fas fa-angle-double-right" id="icon-chi-tiet-left"></i>
					<a href="chonlichda.html" target="_blank">CHI TIẾT</a>
					<i class="fas fa-angle-double-right" id="icon-chi-tiet-right"></i>
				</div> --}}
			</div>
			<div class="carousel-item san2">
				<div class="san-tieude">
					<i class="far fa-map-marked-alt"></i>
					<h3>Giới thiệu các sân ở Đà Nẵng</h3>
				</div>
				<div class="san-img">
					<img src="{{asset('../public/front-end/img_timsan/san-bong-tuyen-son.jpg')}}">
				</div>
				<h3>Sân bóng Tuyên Sơn</h3>
				<img src="{{asset('../public/front-end/img_tdt/location2.png')}}">
				<p>22 Đường 2/9, Quận Hải Châu, Thành Phố Đà Nẵng</p>
				{{-- <div class="chi-tiet">
					<i class="fas fa-angle-double-right" id="icon-chi-tiet-left"></i>
					<a href="chonlichda.html" target="_blank">CHI TIẾT</a>
					<i class="fas fa-angle-double-right" id="icon-chi-tiet-right"></i>
				</div> --}}
			</div>
			<div class="carousel-item san3">
				<div class="san-tieude">
					<i class="far fa-map-marked-alt"></i>
					<h3>Giới thiệu các sân ở Đà Nẵng</h3>
				</div>
				<div class="san-img">
					<img src="{{asset('../public/front-end/img_timsan/sanbong-trang-hoang.jpg')}}">
				</div>
				<h3>Sân bóng Trang Hoàng</h3>
				<img src="{{asset('../public/front-end/img_tdt/location2.png')}}">
				<p>Số 86 Duy Tân, Quận Hải Châu, Thành Phố Đà Nẵng</p>
				{{-- <div class="chi-tiet">
					<i class="fas fa-angle-double-right" id="icon-chi-tiet-left"></i>
					<a href="chonlichda.html" target="_blank">CHI TIẾT</a>
					<i class="fas fa-angle-double-right" id="icon-chi-tiet-right"></i>
				</div> --}}
			</div>
			<div class="carousel-item san4">
				<div class="san-tieude">
					<i class="far fa-map-marked-alt"></i>
					<h3>Giới thiệu các sân ở Đà Nẵng</h3>
				</div>
				<div class="san-img">
					<img src="{{asset('../public/front-end/img_timsan/san-bong-tieu-la.jpg')}}">
				</div>
				<h3>Sân bóng Tiểu La</h3>
				<img src="{{asset('../public/front-end/img_tdt/location2.png')}}">
				<p>100 Tiểu La, Quận Hải Châu, Thành Phố Đà Nẵng</p>
				{{-- <div class="chi-tiet">
					<i class="fas fa-angle-double-right" id="icon-chi-tiet-left"></i>
					<a href="chonlichda.html" target="_blank">CHI TIẾT</a>
					<i class="fas fa-angle-double-right" id="icon-chi-tiet-right"></i>
				</div> --}}
			</div>
		</div>

	</div>
	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</body>
</html>