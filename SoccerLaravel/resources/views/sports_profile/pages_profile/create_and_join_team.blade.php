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
		<link rel="stylesheet" href="{{asset('../public/front-end/css/transitions.css')}}"> <!--css hover luot -->
		<link rel="stylesheet" href="{{asset('../public/front-end/css/swiper.min.css')}}">
		{{-- <link rel="stylesheet" href="{{asset('../public/front-end/css/style-trangchu.css')}}"> --}}
		<link rel="stylesheet" href="{{asset('../public/front-end/css/color.css')}}">
		<link rel="stylesheet" href="{{asset('../public/front-end/css/main.css')}}">
		<link rel="stylesheet" href="{{asset('../public/front-end/css/create_and_join_team.css')}}">
		<link rel="stylesheet" href="{{asset('../public/front-end/css/responsive1.css')}}">
	</head>
	<body>
		<?php
            $user_id = Session::get('user_id');
        ?>
        {{-- <div class="body1"> --}}
			<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
				<div class="back-to-menu">
				   	<a href="{{URL::TO('/profile-person/'.$user_id)}}">
				      <i class="fa fa-chevron-left" aria-hidden="true"></i>
				      <p>Hồ sơ thể thao</p>
				   	</a>
				</div>
				
				<div class="container">
					<div class="chuacodoi">
						<div class="chuacodoi-top">
							<ul>
								<li><p class="tabLink-2 active_2" onclick="Opentab_2(event, 1)">THAM GIA 1 ĐỘI</p></li>
								<li><p  class="tabLink-2" onclick="Opentab_2(event, 2)">TẠO 1 ĐỘI MỚI</p></li>
							</ul>	
						</div>

						<div class="tab-2 tab-tham-gia-1-doi">
							<div class="tab-tham-gia-1-doi-top">
								<h3 class="text-shadow1">Danh sách những đội mà bạn có thể tham gia</h3>
							</div>
							<div role="tabpanel" class="tab-pane active" id="LevelA">
								@foreach($team_profile as $key => $list)
								<div class="tg-oldmatchresult" style="margin-left: 3%;">
									<img class="tg-matchLogo" src="{{URL::TO('../public/uploads/logo-team/'.$list->profile_team_logo)}}">
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">Độ tuổi từ {{ $list->profile_team_age }}</span>
										<h4>Đội <span>{{ $list->profile_team_name }}</span></h4>
										{{-- @foreach($count as $key => $c) --}}
										<address  style="font-size: 17px;"><i class='fa fa-clock-o'></i> <b>Số lượng thành viên:</b> 1/7</address>
										{{-- @endforeach --}}
										<address  style="font-size: 17px;"><i class='fa fa-map-marker' style="margin-left: 2.5px;"></i><b style="margin-left: 5px;">Khu vực: </b>{{ $list->profile_team_city }}, TP Đà Nẵng</address>
										<div class="tg-btnsbox">
											<span class="tg-btn" data-toggle="collapse" data-target='#{{ $list->profile_team_id }}'>thông tin</span>
										</div>
									</div>
									<div id='{{ $list->profile_team_id }}' class="collapse public">
										<p><i class="fa fa-male" style="font-size:20px"></i> <i>"Đội bóng đá {{ $list->profile_team_gender }}"</i></p>
										@foreach($profile_person as $key => $profile1)
										@foreach($list_of_team as $key => $val)
		                                
										@if($val->clb_captain == '1' && $profile1->user_id == $val->user_id && $val->profile_team_id == $list->profile_team_id)

										<p><i class='fa fa-user'></i> <b>Đội Trưởng:</b> {{ $profile1->user_name }}</p>
										<p><i class="fa fa-phone"style="font-size:20px"></i> <b>Liên Hệ:</b> <i>{{ $profile1->user_phone }}</i></p>

										@endif
										@endforeach
										@endforeach
										<p> <i class="fa fa-futbol-o"></i> <b>Trình độ:</b> {{ $list->profile_team_level }}</p>
										<p><i class="fa fa-spinner fa-spin"></i> <b> Trạng thái:</b> Chưa đủ số người tối thiểu</p>
										<p><b><i>"{{ $list->profile_team_desc }}. Cần tuyển những anh em ở khu vực {{ $list->profile_team_city }} để giao lưu vui vẻ."</i></b></p>
										<a class="tg-btn" href="{{URL::TO('/join-team/'.$user_id.'/'.$list->profile_team_id)}}" onclick="alert('Xin vào đội thành công!')"><span>Xin vào đội</span></a>
									</div>
								</div>
								@endforeach
							</div>
						</div>
						{{-- @foreach($team_profile as $key => $list) --}}
						@foreach($list_of_team as $key => $val)
						{{-- @foreach($profile_person as $key => $profile) --}}
						<?php
							if($val->profile_team_id && $val->user_id == $user_id){
						?>
						<div class="tab-2 tab-tao-1-doi-moi">
							<h3 align="center">Bạn đã có đội rồi! Bạn phải rời đội bóng cũ để có thể tạo đội mới!</h3>
							<img src="{{asset('../public/front-end/images/big-1.jpg')}}" >
						</div>
						<?php
							}else{
						?>
						
						
						<div class="tab-2 tab-tao-1-doi-moi">
							<div class="col-md-12 col-sm-12">
								<form action="{{URL::TO('/insert-profile-team/'.$user_id)}}" enctype="multipart/form-data" method="post">
									{{ csrf_field() }}
									<table style="width: 100%;">
										@foreach($profile_person as $key => $profile1)
										@if($profile1->user_id == $user_id)
										<tr>
											<td id="tendoitruong">Tên đội trưởng</td>
											<td><input type="text" value="{{ $profile1->user_name }}" name="tendoitruong" required="" size="10" id="ip_tendoitruong"></td>
										</tr>
										<tr>
											<td id="sodienthoai">Số điện thoại</td>
											<td><input type="text" value="{{ $profile1->user_phone }}" name="sodienthoai" required="" id="ip_sodienthoai"></td>
										</tr>
										@endif
										@endforeach
										<tr>
											<td id="tendoitruong">Tên đội bóng</td>
											<td><input type="text" name="name_clb" placeholder="Nhập tên CLB" required="" id="ip_tendoitruong"></td>
										</tr>
										<tr>
											<td id="tendoitruong">Logo đội bóng</td>
											<td><input type="file" id="logodoi" name="logo_clb"  placeholder="Thêm logo đội bóng"></td>
										</tr>
										<tr>
											<td id="tendoitruong">Giới tính đội</td>
											<td>
												<select class="select123" name="gender_clb" id="gender">
			                                        <option value="Nam">Nam</option>
			                                        <option value="Nữ">Nữ</option>
			                                    </select>
			                                </td>
										</tr>	
										<tr>
											<td id="dotuoi">Độ tuổi đội</td>
											<td >
												<select name="age_clb" class="select123">
													<option value="U15-U20">U15-U20</option>
			                                        <option value="U20-U30">U20-U30</option>
			                                        <option value="U30-U35">U30-U35</option>
			                                        <option value="U35-U40">U35-U40</option>
												</select>
											</td>
										</tr>
										<tr>
											<td id="trinhdo">Trình độ đội</td>
											<td>
												<select name="level_clb" class="select123">
													<option value="Đá Hay">Đá hay</option>
			                                        <option value="Đá Vừa">Đá vừa</option>
			                                        <option value="Đá Yếu">Đá yếu</option>
												</select>
											</td>
										</tr>						
										<tr>
											<td id="khuvuc">Khu vực</td>
											<td>
												<select name="city_clb" class="select123">
													<option value="Quận Sơn Trà">Quận Sơn Trà</option>
			                                        <option value="Quận Thanh Khê">Quận Thanh Khê</option>
			                                        <option value="Quận Ngũ Hành Sơn">Quận Ngũ Hành Sơn</option>
			                                        <option value="Quận Hải Châu">Quận Hải Châu</option>
			                                        <option value="Quận Liên Chiểu">Quận Liên Chiểu</option>
			                                        <option value="Quận Cẩm Lệ">Quận Cẩm Lệ</option>
			                                        <option value="Huyện Hoà Vang">Huyện Hoà Vang</option>
												</select>
											</td>
										</tr>

										<tr>
											<td id="ghichu">Mô tả đội</td>
											<td>
												<textarea name="desc_clb"></textarea>
											</td>
										</tr>
										<tr>
											<td style="border: none;"></td>
											<td style="border: none; float: right;"><input type="submit" class="tg-btn"></td>
										</tr>
									</table>
								</form>
							</div>
						</div>
						<?php
							}
						?>
						{{-- @endif --}}
						@endforeach
						{{-- @endforeach --}}
						{{-- @endforeach --}}
					</div>
				</div>
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
			</div>
		{{-- </div> --}}
		<script type="text/javascript" src="{{asset('../public/front-end/js/opentab_chuacodoi.js')}}"></script>

		<script src="{{asset('../public/front-end/js/vendor/jquery-library.js')}}"></script>
		<script src="{{asset('../public/front-end/js/vendor/bootstrap.min.js')}}"></script>
		
	</body>
	</html>