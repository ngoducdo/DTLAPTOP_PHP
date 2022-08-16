@extends('admin.layout.index')
@section('content')
    <section class="content-header">
      <h1>
        THỐNG KÊ DOANH THU
     
				

 <section class="content">
   
   <div>
	
	<!-- <h3 style="text-align: center; margin-top: 0px; padding-top: 20px">BÁO CÁO THÁNG: 
	
	</h3> -->
	
</div>
<div style="margin-top: 50px; margin-left: 20px">
	<div style="margin-top: 30px">
					<ul class="nav nav-tabs">
						<li class="active" ><a data-toggle="tab" href="#home">Thống kê doanh thu </a></li>
						<!-- <li ><a data-toggle="tab" href="#menu1">Top sản phẩm bán chạy</a></li> -->
						<!-- <li ><a data-toggle="tab" href="#menu2">Dữ liệu nhập hàng</a></li> -->
						<!-- <li><a data-toggle="tab" href="#menu3">Dữ liệu quảng cáo </a></li> -->
					<!-- 	<li><a data-toggle="tab" href="#menu4">Thống kê doanh thu tháng </a></li> -->
					</ul>

					<div class="tab-content">
						<div id="home" class="tab-pane fade in active">
							<br>
							<!-- <button class="btn btn-danger float-right" style="margin-right: 7px"><a href="thembh.php" target="_blank" style="color: white;text-decoration: none;">Thêm</a></button> -->
							<br><br>
							<table class="table table-bordered  table-hover "  id="bangbh">
								
							<tr class="bg-danger ">
									
									<!-- <th  align="center"> Stt</th>
									<th  align="center">ID</th> -->
									<th  align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doanh thu ngày</th>
									<th  align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doanh thu tháng</th>
									<th  align="center">Doanh thu năm</th>
									
									
							</tr>
							
							<tbody class="danhsach">
								<!--  -->
								 <th>{{$doanhthu}}</th>


							</tbody>
							</table>
							<br>
							<hr>

							 <h3>Tổng doanh thu : {{number_format($doanhthu)}} VND</h3>

							<div class="row">
                             <div class="col-sm-7"></div>
                  		</div>
						</div>
						<!-- <div id="menu1" class="tab-pane fade">
							<br>
							<br>
							<table class="table table-bordered  table-hover" id="bangcs">
								<tr class="bg-danger text-white">
									<th >Stt</th>
									<th>Mã Sản Phẩm</th>
									<th >Tên Sản phẩm</th>
									<th>Số Lượng Bán ra</th>	          		
									
								</tr>
								
							</table>

						</div> -->
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