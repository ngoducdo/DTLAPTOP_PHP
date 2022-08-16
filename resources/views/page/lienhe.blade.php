	@extends('master')
	@section('content')
	<div class="inner-header">
		<div class="container">
			 	@if(session('thongbao'))
	    		<div class="alert alert-success">
	    			{{session('thongbao')}}
	    		</div>
	    	@endif
			<div class="pull-left">
				<h6 class="inner-title">Liên hệ</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href={{route('trang-chu')}}>Trang chủ</a> / <span>Liên hệ</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div class="beta-map">

		<div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.640819290307!2d105.84094731538933!3d21.00703029389462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac76ccab6dd7%3A0x55e92a5b07a97d03!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBCw6FjaCBraG9hIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1620811660631!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></iframe></div>
		</div>
</div>
	<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>Mẫu liên hệ</h2>
					<div class="space20">&nbsp;</div>
					<p>Mọi thắc mắc hoặc góp ý, quý khách vui lòng liên hệ trực tiếp với bộ phận chăm sóc khách hàng của chúng tôi bằng cách điền đầy đủ thông tin vào form bên dưới</p>
					<div class="space20">&nbsp;</div>
					<form method="post" class="contact-form">	
						  <input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="form-group form-block">
							<input class="input" input name="name" type="text" placeholder="Họ và tên (required)">
						</div>
						<div class="form-group form-block">
								<input class="input" type="email" name="email" placeholder="expample@gmail.com" required="required" width="20px;">
							</div>
						<div class="form-group form-block">
							<input class="input" input name="phone" type="number" placeholder="Số điện thoại">
						</div>
						<div class="form-group form-block">
							<textarea name="message" cols="70" rows="5" placeholder="Nội dung"></textarea>
						</div>
						<div class="form-group form-block">
							<button type="submit" class="beta-btn primary">Gửi thư <i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4">
					<h2>Thông tin liên lạc</h2>
					<div class="space20">&nbsp;</div>

					<h6 class="contact-title">Địa chỉ</h6>
					<p>
					Số 1 Đại Cồ Việt, Bách Khoa, Hai Bà Trưng, Hà Nội <br>
					
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Giờ làm việc: 7h30 - 17h30</h6>
					<p>
						Thứ 2 đến Chủ nhật, <br>
						(trừ ngày Lễ/Tết) <br>
						ĐT: (024) 6666 666. <br>
						<!-- <a href="mailto:cuong.trac.phu@canhtoan.com">cuong.trac.phu@canhtoan.com</a> -->
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">HỖ TRỢ KỸ THUẬT</h6>
					<p>
						ĐT: 1900.8888 (Ext-122) <br>
						DĐ: 098 1450 708 (Mr. Huy) <br>
						<a href="mailto:adminhotro@gmail.com">adminhotro@gmail.com</a>
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">TRUNG TÂM BẢO HÀNH</h6>
					<p>
						ĐT: 1900.8888 (Ext-123) <br>
						DĐ: 033 7187 885 (Mr. Độ) <br>
						<a href="mailto:ngo2682@canhtoan.com">ngo2682@canhtoan.com</a>
					</p>
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
	@endsection