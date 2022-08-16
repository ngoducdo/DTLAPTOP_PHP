@extends('admin.layout.index')
@section('content')
    <section class="content-header">
      <h1>
        THỐNG KÊ DOANH THU THEO SẢN PHẨM
     
				

 <section class="content">
   
   <div>
	
	<!-- <h3 style="text-align: center; margin-top: 0px; padding-top: 20px">BÁO CÁO THÁNG: 
	
	</h3> -->
	
</div>
<div style="margin-top: 50px; margin-left: 20px">
	<div style="margin-top: 30px">
					<ul class="nav nav-tabs">
						<li class="active" ><a data-toggle="tab" href="#home">Dữ liệu bán hàng</a></li>
						<li ><a data-toggle="tab" href="#menu1">Top sản phẩm bán chạy</a></li>
						<!-- <li ><a data-toggle="tab" href="#menu2">Dữ liệu nhập hàng</a></li> -->
						<!-- <li><a data-toggle="tab" href="#menu3">Dữ liệu quảng cáo </a></li> -->
						<li><a data-toggle="tab" href="#menu4">Thống kê doanh thu tháng </a></li>
					</ul>

					<div class="tab-content">
						<div id="home" class="tab-pane fade in active">
							<br>
							<!-- <button class="btn btn-danger float-right" style="margin-right: 7px"><a href="thembh.php" target="_blank" style="color: white;text-decoration: none;">Thêm</a></button> -->
							<br><br>
							<table class="table table-bordered  table-hover "  id="bangbh">
								
							<tr class="bg-danger ">
									
									<th width="5%" align="center"> Stt</th>
									<th width="5%" align="center">ID</th>
									<th width="35%" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tên Sản Phẩm</th>
									<th width="20%" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Đơn giá</th>
									<th width="15%" align="center">Số lượng bán ra</th>
									<th width="20%" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tổng tiền</th>
									
							</tr>
							
							<tbody class="danhsach">
								@foreach($thongke_sanpham as $data)
									<tr>
										<td align="center">{{$loop->iteration}}</td>
										<td align="center">{{$data->id}}</td>
										<td>{{$data->name}}</td>
										<td align="center">{{number_format($data->unit_price)}}</td>
										<?php $count = ($test->where('id_product',$data->idproduct)->sum('quantity')); ?>
										<td align="center">
											{{$count}}
										</td>

										<td align="center">
											{{number_format($data->unit_price * $count)}}
										</td>
									</tr>
									@endforeach


							</tbody>
							</table>
							<br>
							<hr>

							 <h3>Tổng tiền của sản phẩm : {{number_format($doanhthu)}} VND</h3>
							<div class="row">
                             <div class="col-sm-7">{{$thongke_sanpham->links()}}</div>
                  		</div>
						</div>
						<div id="menu1" class="tab-pane fade">
							<br>
							<br>
							<table class="table table-bordered  table-hover" id="bangcs">
								<tr class="bg-danger text-white">
									<th >Stt</th>
									<th >Hình ảnh</th>
									<th>Tên Sản Phẩm</th>
									<th>Số Lượng Bán ra</th>	          		
									
								</tr>
								
								<tbody class="danhsach">
								@foreach($thongke_top_sold as $data)
									<tr>
										<td align="center">{{$loop->iteration}}</td>
										<td ><img style="width: 50px;" src="images/product/{{$data->image}}"></td>
										<td align="center">{{$data->name}}</td>
										<?php $sum = ($test->where('id_product',$data->idproduct)->sum('quantity')); ?>
										<td align="center">{{$sum}}</td>
										
										

										
									</tr>
									@endforeach


							</tbody>
							</table>

						</div>
					<!-- 	<div id="menu2" class="tab-pane fade">
							<br>
							<br>
							<table class="table table-bordered  table-hover" id="bangns">
								<tr class="bg-danger text-white">
									<th >Stt</th>
									<th>Mã Sản Phẩm</th>
									<th >Tên Sản Phẩm</th>
									<th>Đơn Giá Nhập</th>
									<th>Số Lượng Nhập</th>
									<th>Tổng tiền</th>
									
								</tr>
								
							</table>
						</div> -->
						<!-- <div id="menu3" class="tab-pane fade">
							<br>
							<br>
							<table class="table table-bordered  table-hover" id="bangtl">
								<tr class="bg-danger text-white">
									<th >Stt</th>
									<th >Tên Người Quảng Cáo</th>
									<th>Vị Trí</th>
									<th>Giá Tiền</th>	          		
									
								</tr>
								
							</table>
						</div> -->
						<div id="menu4" class="tab-pane fade">
							<br>
							
							<table class="table table-bordered  table-hover" id="bangtk">
								<tr class="bg-danger text-white">
									<th >Tiền Bán Hàng</th>
									
									<th>...</th> 		
									
								</tr>
								<tbody class="danhsach">
								
							  </tbody>
							</table>
						</div>
					</div>
				</div>
</div>

</section>






			<!-- <div class="content-wrapper"> -->

@endsection