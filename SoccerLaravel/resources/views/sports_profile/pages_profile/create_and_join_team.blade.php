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
				      <p>H??? s?? th??? thao</p>
				   	</a>
				</div>
				
				<div class="container">
					<div class="chuacodoi">
						<div class="chuacodoi-top">
							<ul>
								<li><p class="tabLink-2 active_2" onclick="Opentab_2(event, 1)">THAM GIA 1 ?????I</p></li>
								<li><p  class="tabLink-2" onclick="Opentab_2(event, 2)">T???O 1 ?????I M???I</p></li>
							</ul>	
						</div>

						<div class="tab-2 tab-tham-gia-1-doi">
							<div class="tab-tham-gia-1-doi-top">
								<h3 class="text-shadow1">Danh s??ch nh???ng ?????i m?? b???n c?? th??? tham gia</h3>
							</div>
							<div role="tabpanel" class="tab-pane active" id="LevelA">
								@foreach($team_profile as $key => $list)
								<div class="tg-oldmatchresult" style="margin-left: 3%;">
									<img class="tg-matchLogo" src="{{URL::TO('../public/uploads/logo-team/'.$list->profile_team_logo)}}">
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">????? tu???i t??? {{ $list->profile_team_age }}</span>
										<h4>?????i <span>{{ $list->profile_team_name }}</span></h4>
										{{-- @foreach($count as $key => $c) --}}
										<address  style="font-size: 17px;"><i class='fa fa-clock-o'></i> <b>S??? l?????ng th??nh vi??n:</b> 1/7</address>
										{{-- @endforeach --}}
										<address  style="font-size: 17px;"><i class='fa fa-map-marker' style="margin-left: 2.5px;"></i><b style="margin-left: 5px;">Khu v???c: </b>{{ $list->profile_team_city }}, TP ???? N???ng</address>
										<div class="tg-btnsbox">
											<span class="tg-btn" data-toggle="collapse" data-target='#{{ $list->profile_team_id }}'>th??ng tin</span>
										</div>
									</div>
									<div id='{{ $list->profile_team_id }}' class="collapse public">
										<p><i class="fa fa-male" style="font-size:20px"></i> <i>"?????i b??ng ???? {{ $list->profile_team_gender }}"</i></p>
										@foreach($profile_person as $key => $profile1)
										@foreach($list_of_team as $key => $val)
		                                
										@if($val->clb_captain == '1' && $profile1->user_id == $val->user_id && $val->profile_team_id == $list->profile_team_id)

										<p><i class='fa fa-user'></i> <b>?????i Tr?????ng:</b> {{ $profile1->user_name }}</p>
										<p><i class="fa fa-phone"style="font-size:20px"></i> <b>Li??n H???:</b> <i>{{ $profile1->user_phone }}</i></p>

										@endif
										@endforeach
										@endforeach
										<p> <i class="fa fa-futbol-o"></i> <b>Tr??nh ?????:</b> {{ $list->profile_team_level }}</p>
										<p><i class="fa fa-spinner fa-spin"></i> <b> Tr???ng th??i:</b> Ch??a ????? s??? ng?????i t???i thi???u</p>
										<p><b><i>"{{ $list->profile_team_desc }}. C???n tuy???n nh???ng anh em ??? khu v???c {{ $list->profile_team_city }} ????? giao l??u vui v???."</i></b></p>
										<a class="tg-btn" href="{{URL::TO('/join-team/'.$user_id.'/'.$list->profile_team_id)}}" onclick="alert('Xin v??o ?????i th??nh c??ng!')"><span>Xin v??o ?????i</span></a>
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
							<h3 align="center">B???n ???? c?? ?????i r???i! B???n ph???i r???i ?????i b??ng c?? ????? c?? th??? t???o ?????i m???i!</h3>
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
											<td id="tendoitruong">T??n ?????i tr?????ng</td>
											<td><input type="text" value="{{ $profile1->user_name }}" name="tendoitruong" required="" size="10" id="ip_tendoitruong"></td>
										</tr>
										<tr>
											<td id="sodienthoai">S??? ??i???n tho???i</td>
											<td><input type="text" value="{{ $profile1->user_phone }}" name="sodienthoai" required="" id="ip_sodienthoai"></td>
										</tr>
										@endif
										@endforeach
										<tr>
											<td id="tendoitruong">T??n ?????i b??ng</td>
											<td><input type="text" name="name_clb" placeholder="Nh???p t??n CLB" required="" id="ip_tendoitruong"></td>
										</tr>
										<tr>
											<td id="tendoitruong">Logo ?????i b??ng</td>
											<td><input type="file" id="logodoi" name="logo_clb"  placeholder="Th??m logo ?????i b??ng"></td>
										</tr>
										<tr>
											<td id="tendoitruong">Gi???i t??nh ?????i</td>
											<td>
												<select class="select123" name="gender_clb" id="gender">
			                                        <option value="Nam">Nam</option>
			                                        <option value="N???">N???</option>
			                                    </select>
			                                </td>
										</tr>	
										<tr>
											<td id="dotuoi">????? tu???i ?????i</td>
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
											<td id="trinhdo">Tr??nh ????? ?????i</td>
											<td>
												<select name="level_clb" class="select123">
													<option value="???? Hay">???? hay</option>
			                                        <option value="???? V???a">???? v???a</option>
			                                        <option value="???? Y???u">???? y???u</option>
												</select>
											</td>
										</tr>						
										<tr>
											<td id="khuvuc">Khu v???c</td>
											<td>
												<select name="city_clb" class="select123">
													<option value="Qu???n S??n Tr??">Qu???n S??n Tr??</option>
			                                        <option value="Qu???n Thanh Kh??">Qu???n Thanh Kh??</option>
			                                        <option value="Qu???n Ng?? H??nh S??n">Qu???n Ng?? H??nh S??n</option>
			                                        <option value="Qu???n H???i Ch??u">Qu???n H???i Ch??u</option>
			                                        <option value="Qu???n Li??n Chi???u">Qu???n Li??n Chi???u</option>
			                                        <option value="Qu???n C???m L???">Qu???n C???m L???</option>
			                                        <option value="Huy???n Ho?? Vang">Huy???n Ho?? Vang</option>
												</select>
											</td>
										</tr>

										<tr>
											<td id="ghichu">M?? t??? ?????i</td>
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
			</div>
		{{-- </div> --}}
		<script type="text/javascript" src="{{asset('../public/front-end/js/opentab_chuacodoi.js')}}"></script>

		<script src="{{asset('../public/front-end/js/vendor/jquery-library.js')}}"></script>
		<script src="{{asset('../public/front-end/js/vendor/bootstrap.min.js')}}"></script>
		
	</body>
	</html>