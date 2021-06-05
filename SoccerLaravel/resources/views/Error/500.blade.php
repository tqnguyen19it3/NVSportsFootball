@extends('Error.error')
@section('error_content')
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
							<h1>500 ERROR</h1>
						</div>
						<ol class="tg-breadcrumb">
							<li><a href="{{URL::TO('/home')}}">Trang chủ</a></li>
							<li class="active">500 ERROR</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-12 col-xs-12">
							<div class="tg-404">
								<h2>5<span></span>0</h2>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="tg-404-content">
								<div class="tg-section-heading"><h2>oops! có gì đó không ổn. Lỗi máy chủ nội bộ. Chúng tôi tự động theo dõi các lỗi này, nhưng nếu sự cố vẫn tiếp diễn, vui lòng liên hệ với chúng tôi. Trong thời gian chờ đợi, hãy thử làm mới.</h2></div>
								<div class="tg-description">
									<p>Nền tảng thể thao dành chung mọi đối tượng. Ở đây, bạn có thể dễ dàng tìm chỗ chơi, tìm đồng đội hay đối thủ để chơi một cách vui vẻ nhất, đặt sân một cách hiệu quả nhất. Hệ thống quản lý sân, lịch biểu thông minh giảm thiểu tối đa thời gian chi phí, tăng doanh thu cho chủ sân.</p>
								</div>
								<a href="{{URL::TO('/home')}}" class="tg-btn">Trở về an toàn!</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<!--************************************
				Main End
		*************************************-->
@endsection