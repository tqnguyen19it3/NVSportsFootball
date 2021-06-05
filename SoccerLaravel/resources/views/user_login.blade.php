<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập - NV Sports Football</title>

    <meta name="description" content="{{$meta_desc}}">
    <meta name="keywords" content="{{$meta_keywords}}"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <link  rel="canonical" href="{{$url_canonical}}" />
    <meta name="author" content="">
    
    {{-- <meta property="og:image" content="{{$image_og}}" /> --}}
    <meta property="og:site_name" content="nvsportsfootball.com" />
    <meta property="og:description" content="{{$meta_desc}}" />
    <meta property="og:title" content="Đăng nhập NV Sports Football" />
    <meta property="og:url" content="{{$url_canonical}}" />
    <meta property="og:type" content="website" />

  <link rel="icon" type="image/x-icon" href="{{asset('../public/front-end/images/icon-play1.png')}}" />

  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="{{asset('../public/front-end/css/stylelogin1.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('../public/front-end/bootstrap-4.0.0-dist/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/color.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">  <!--ANIMATION ON SCROLL-->
  <link rel="stylesheet" href="{{asset('../public/front-end/css/style.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  {{-- <base href="{{asset('../public/front-end/')}}/"> --}}
</head>
<body>
  <img class="wave" src="{{asset('../public/front-end/img/background01.jpg')}}">
  <div class="back-to-menu">
   <a href="{{URL::TO('/home')}}">
      <i class="fa fa-chevron-left" aria-hidden="true"></i>
      <p>về Trang Chủ</p>
   </a>
  </div>
	<div class="container">
		<div class="img" data-aos="fade-up-right" data-aos-delay="0" data-aos-duration="1500">
			<img src="{{asset('../public/front-end/img/image1-02.png')}}">
		</div>
		<div class="login-content" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="1500">
			<form action="{{URL::TO('/login-user')}}" method="post">
        {{ csrf_field() }}
				<img src="{{asset('../public/front-end/img/avatar.svg')}}">
				<h2 class="title">Welcome</h2>
        <?php
          $message = Session::get('message');
          if($message){
          echo "<div class='text-center' style='margin-bottom:12px;'>";
                  echo "<strong style='color:red;'>" ;
              echo $message;
              Session::put('message', null);
            echo "</strong>";
          echo "</div>";
          }
        ?>
        <p id="text">WARNING! Caps lock is ON.</p>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fa fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Tài Khoản</h5>
           		   		<input id="myInput" type="email" class="input" required="" name="userEmail">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fa fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Mật Khẩu</h5>
           		    	<input id="myInput1" type="password" class="input" required="" name="userPassword">
            	   </div>
            	</div>
            	<a href="{{URL::TO('/registration')}}" class="rgt">Tạo Tài Khoản!</a>
            	<p class="text-black text-left" style="margin-top: -20px;"><input type="checkbox" name="">  Lưu Mật Khẩu</p>
              <ul class="social-agileinfo">
                <li><a href="{{url('/login-facebook')}}"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="{{url('/login-google')}}"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            		<button style="margin-top: -10px;" class="tg-btn" type="submit" data-toggle="tooltip" title="Click!"><span>Đăng Nhập</span></button>
                <a href="{{URL::TO('/home')}}" class="rgt-thong-tin">© 2020 Website NV Sprorts Football</a> 
      </form>
    </div>
  </div>
    <script>
  		$(document).ready(function(){
  		  $('[data-toggle="tooltip"]').tooltip({placement: "right"});   
  		});
    </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script type="text/javascript" src="{{asset('../public/front-end/js/mainlogin1.js')}}"></script>  <!--Hiệu ứng chỗ input-->
  <script>
    var input = document.getElementById("myInput");
    var input1 = document.getElementById("myInput1");
    var text = document.getElementById("text");
    input.addEventListener("keyup", function(event) {

    if (event.getModifierState("CapsLock")) {
        text.style.display = "block";
      } else {
        text.style.display = "none"
      }
    });
    input1.addEventListener("keyup", function(event) {

    if (event.getModifierState("CapsLock")) {
        text.style.display = "block";
      } else {
        text.style.display = "none"
      }
    });
  </script>
</body>
</html>
