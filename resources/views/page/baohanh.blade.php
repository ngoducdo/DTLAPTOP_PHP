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
				<h6 class="inner-title">Tra cứu thông tin bảo hành</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href={{route('trang-chu')}}>Trang chủ</a> / <span>Bảo hành</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>Tra cứu bảo hành</h2>
					<div class="space20">&nbsp;</div>
					
					<div class="space20">&nbsp;</div>
					<form method="post" class="contact-form">	
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="form-group form-block">
							<input class="input" name="sdt" type="text" placeholder="Số điện thoại">
						</div>
						
						<div class="form-group form-block">
							<button class="btn btn-primary">Gửi</button>
						</div>
					</form>
				</div>
				
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
	<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-10">
					<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>STT</th>
									<th>Tên khách hàng</th>
									<th>Số điện thoại</th>
									<th>Tên sản phẩm</th>
									<th>Giá</th>
									<th>ảnh sản phẩm</th>
									<th>Ngày mua</th>
									<th>Bảo hành</th>
									
								</tr>
							</thead>
							<?php $STT=1; ?>
							<tbody>
								@if(isset($baohanh))
								@foreach($baohanh as $data)
								<tr style="border: 1px">
									<td>{{$STT++}}</td>
									<td>{{$data->name}}</td>
									<td>{{$data->phone_number}}</td>
									<td>{{$data->product->name}}</td>
									<td>{{$data->total}}</td>
									<td><img src="images/product/{{$data->image}}" width="50px" height="50px;"></td>
									<td>{{$data->ngaymua}}</td>
									<td>
										{{$data->guarantee}}
									</td>
									
								</tr>
								@endforeach
								@endif
							</tbody>
						</table>
				</div>
				
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
	@endsection