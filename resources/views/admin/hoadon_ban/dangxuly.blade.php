@extends('admin.layout.index')
@section('content')
    <section class="content-header">
      <h1>
        DANH SÁCH
        <small>Đơn hàng đang chờ xử lý</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Đơn hàng đang chờ xử lý</a></li>
        <li class="active">danh sách</li>
      </ol>
    </section>
    <br>
     <div class="col-md-6 col-xs-12">
    <!-- search form (Optional) -->
      <form action="{{route('search-admin')}}" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="key" class="form-control" placeholder="Tìm tên khách hàng">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
    </div>
			<!-- Main content -->
			<!-- <div class="content-wrapper"> -->
 <section class="content">
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
                  <!-- /.box-header -->
                  <div class="box-body">
                  		<div class="row">
                  			<div class="col-sm-12">
				<!-- Task manager table -->
				<div class="panel panel-flat" style="width: 100%; border: 1px solid grey;">
					@if(session('thongbao'))
	    		<div class="alert alert-success">
	    			{{session('thongbao')}}
	    		</div>
	    	@endif
					<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>STT</th>
									<th>ID</th>
									<th>Tên khách hàng</th>
									<th>Ngày đặt hàng</th>
									<th>Tổng tiền</th>
									<th>Hình thức thanh toán</th>
									<th>Ghi chú</th>
									<th>Xử lý</th>
									<th>Trạng thái</th>
									<th>Xử lý</th>
									<th>Hủy</th>
									<th>Chi tiết</th>
								</tr>
							</thead>
							<tbody>
								@foreach($bill as $bi )	
								<tr>
									<td align="center">{{$loop->iteration}}</td>
									<td>{{$bi->id}}</td>
									<td>{{$bi->customer['name']}}</td>
									<td>{{$bi->date_order}}</td>
									<td>{{number_format($bi->total)}} đồng</td>
									<td>{{$bi->payment}}</td>
									<td>{{$bi->note}}</td>
									<!--  -->
									<td>
										@if($bi->status === 'Đang xử lý')
										<a href="{{(route('xac.nhan.DH',$bi->id))}}" class="active styling-edit"  title="Đang xử lý" ui-toggle-class="">
               							 <i style="font-size: 30px"  class="fa fa-retweet text-success text-active"></i></a>
               							 @elseif($bi->status === 'Đã xác nhận')
               							 <a href="{{(route('lay.nhan.DH',$bi->id))}}" class="active styling-edit" title=" duyệt đơn hàng" ui-toggle-class="">
               							 <i  style="font-size: 30px" class="fa fa-check-circle-o text-success text-active"></i></a>
               							 @elseif($bi->status === 'Đã lấy hàng')
               							 <a href="{{(route('van.chuyen',$bi->id))}}" class="active styling-edit" title="Đang lấy hàng" ui-toggle-class="">
               							 <i style="font-size: 30px"  class="fa fa-retweet text-success text-active"></i></a>
               							 @elseif($bi->status === 'Đang vận chuyển')
               							 <a href="{{(route('hoan.tat.DH',$bi->id))}}" class=" ui-toggle-class=" title="Đang vận chuyển">
               							 <i style="font-size: 30px"  class="fa fa-truck text-success text-active"></i></a>

               							@else
               							 <a class="active styling-edit" ui-toggle-class="">
               							 <i style="font-size: 30px"  class="fa fa-money text-success text-active" title="Đã thu tiền"></i></a>
										@endif
									</td>
									<!--  -->

									<td>{{$bi->status}}</td>
									@if($bi->status === 'Hoàn tất đơn hàng')
									<td class="center">
										<form method="post" action="admin/bill/ban/{{$bi->id}}" onsubmit="return confirm('đã giao hàng')">
											{{csrf_field()}}
											<button class="btn btn-primary" type="submit">Đã Giao</button>
										</form>
										
									</td>
									@else
									<td class="center">
										
											<a href="{{route('kiemtra')}}"> <i class="btn btn-primary">Đã Giao</i> </a>

										
									</td>
									@endif
									<td class="center">
										<form method="post" action="admin/bill/huy/{{$bi->id}}" onsubmit="return confirm('bạn có chắc muốn hủy?')">
											{{csrf_field()}}
											<button class="btn btn-primary" type="submit">Hủy đơn</button>
										</form>
									</td>


									<td class="center"><a href="admin/bill/chitietdon/{{$bi->id}}"><i class="icon icon"></i> Chi tiết</a></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
              </div>
              <div class="row">
	      			<!-- <div class="col-sm-5">
	      				<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">showing 1 to 1 of 1 entries</div>
	      			</div> -->
	      			<div class="col-sm-7">{{$bill->links()}}</div>
               </div>
				<!-- /task manager table -->

			</div>
			<!-- /main content -->

		</div>
	</div>
</div>
</section>

@endsection