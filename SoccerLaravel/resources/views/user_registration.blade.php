<!DOCTYPE html>
<html>
<head>
	<title>Đăng ký - NV Sports Football</title>

    <meta name="description" content="{{$meta_desc}}">
    <meta name="keywords" content="{{$meta_keywords}}"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <link rel="canonical" href="{{$url_canonical}}" />
    <meta name="author" content="">
    
    {{-- <meta property="og:image" content="{{$image_og}}" /> --}}
    <meta property="og:site_name" content="nvsportsfootball.com" />
    <meta property="og:description" content="{{$meta_desc}}" />
    <meta property="og:title" content="Đăng ký NV Sports Football" />
    <meta property="og:url" content="{{$url_canonical}}" />
    <meta property="og:type" content="website" />

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="{{asset('../public/front-end/images/icon-play1.png')}}" />

	<link rel="stylesheet" href="{{asset('../public/front-end/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/bootstrap-4.0.0-dist/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('../public/front-end/bootstrap-4.0.0-dist/js/bootstrap.js')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/style-register.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">  <!--ANIMATION ON SCROLL-->
</head>
<body>
	<!-- <div class="back-to-menu">
   		<a href="index.html">
      		<i class="fa fa-chevron-left" aria-hidden="true"></i>
      		<p>về Trang Chủ</p>
  		 </a>
  	</div> --> 
	<div class="container">
		<div class="row">
			<div class="col-md-7" data-aos="zoom-in" data-aos-delay="0" data-aos-duration="1500">
				<h1 class="text-left">Tham Gia Với Chúng Tôi!</h1>
				<p class="text-left">Bạn có muốn trở thành một phần của NV Sport Football?<br>
				Đăng ký vào trang web này, bạn chấp nhận Điều khoản sử dụng và Chính sách bảo mật của chúng tôi.<br>
				Bạn có thể nhận được thông báo của chúng tôi qua SMS và hủy nhận bất kỳ lúc nào.</p>
				<a href="{{URL::TO('/home')}}"><p align="center" class="rgt-thong-tin">© 2020 Website đặt sân bóng NV Sprorts Football</p></a>
			</div>
			<form class="col-md-5" action="{{URL::TO('/add-user')}}" method="post" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="2000">
				{{csrf_field()}}	
					<h3 class="text-left">Đăng Ký</h3>
					<p id="text">WARNING! Caps lock is ON.</p>
				<hr>
				<div class="row">
					<div class="i"> 
           		    	<i class="fa fa-envelope" style="font-size: 25px;"></i>
           		   	</div>
					<div class="col-md-10">
						<input id="myInput" type="Email" class="form-control" placeholder="E-mail" required="" name="user_email">
					</div>
				</div>
				<div class="row">
					<div class="i">
           		   		<i class="fa fa-user" style="font-size: 25px;"></i>
           		   	</div>
					<div class="col-md-10">
						<input id="myInput" type="input" class="form-control" placeholder="Tên người dùng" name="user_name" required="">
					</div>
				</div>
				<div class="row">
					<div class="i"> 
           		    	<i class="fa fa-lock" style="font-size: 25px;"></i>
           		   	</div>
					<div class="col-md-10">
						<input id="myInput" type="Password" class="form-control" placeholder="Mật Khẩu" name="user_password" required="">
						<!-- <input type="checkbox" name="check1"><small>  Lưu Mật Khẩu</small> -->
					</div>
				</div>
				<div class="row">
					<div class="i"> 
           		    	<i class="fa fa-phone" style="font-size: 25px;"></i>
           		   	</div>
					<div class="col-md-10">
						<input type="input" class="form-control" pattern="[0-9]{10}" placeholder="Số Điện Thoại" required name="user_phonenumber">
					</div>
				</div>
				<div class="row">
					<div class="i"> 
           		    	<i class="fa fa-venus-mars" style="font-size: 25px;"></i>
           		   	</div>
					<div class="col-md-10">
						<input type="radio" name="user_gender" value="Nam" style="margin-left: 12px;"><small> Nam</small>
						<input type="radio" name="user_gender" value="Nữ"><small> Nữ</small>
		 			</div>
				</div>
				<div class="row">
					<div class="i"> 
           		    	<i class="fa fa-map" style="font-size: 25px;"></i>
           		   	</div>
					<div class="col-md-10">
						<select class="form-control" name="user_city">
							<option value="Quận Sơn Trà">Quận Sơn Trà</option>
							<option value="Quận Thanh Khê">Quận Thanh Khê</option>
							<option value="Quận Ngũ Hành Sơn">Quận Ngũ Hành Sơn</option>
							<option value="Quận Hải Châu">Quận Hải Châu</option>
							<option value="Quận Liên Chiểu">Quận Liên Chiểu</option>
							<option value="Quận Cẩm Lệ">Quận Cẩm Lệ</option>
							<option value="Huyện Hoà Vang">Huyện Hoà Vang</option>
						</select>
					</div>
					<div class="col-md-12" style="top: 15px;">
						<ul class="social-agileinfo">
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-linkedin"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
				<button class="btn btn-info" type="submit" onclick="myFunction()">Đăng ký</button>
				<button class="btn btn-warning" type="reset">Hủy</button>
			</form>
		</div>
	</div>
	<script>
		function myFunction() {
		  alert("Đăng kí thành công! Chào mừng bạn đến với website của chúng tôi");
		}
	</script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
	  AOS.init();
	</script>
	<script>
		var input = document.getElementById("myInput");
		var text = document.getElementById("text");
		input.addEventListener("keyup", function(event) {

		if (event.getModifierState("CapsLock")) {
		    text.style.display = "block";
		  } else {
		    text.style.display = "none"
		  }
		});
	</script>
</body>
</html>