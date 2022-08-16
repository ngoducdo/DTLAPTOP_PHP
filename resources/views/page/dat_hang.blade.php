@extends('master')
	@section('content')
	  <!--Checkout Area Strat-->
            <div class="checkout-area pt-60 pb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-accordion">
                            		
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <form  action="{{route('dathang')}}" method="post">
                            	<input type="hidden" name="_token" value="{{csrf_token()}}">
                            	<div class="alert alert-info"><h2>@if(Session::has('thongbao')){{Session::get('thongbao')}}@endif<h2></div>
                                <div class="checkbox-form">
                                    <h3>Chi tiết hóa đơn</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Họ và tên <span class="required">*</span></label>
                                                <input placeholder="Họ và tên" type="text" name="name" required="required"
                                                @if(Auth::check())
																								value="{{Auth::user()->full_name}}"
																								@endif>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
	                                        <div class="checkout-form-list">
																						<label>Giới tính</label>
																						<input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked" style="width: 5%"><span style="margin-right: 5%">Nam</span>
																						<input id="gender" type="radio" class="input-radio" name="gender" value="nữ" style="width: 5%"><span>Nữ</span>
																					</div>
																				</div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Địa chỉ <span class="required">*</span></label>
                                                <input placeholder="Địa chỉ" name="address" type="text" required="required"
                                                @if(Auth::check())
																								value="{{Auth::user()->address}}"
																								@endif>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Địa chỉ Email<span class="required">*</span></label>
                                                <input placeholder="Địa chỉ email" name="email" type="email" required="required"
                                                @if(Auth::check())
																								value="{{Auth::user()->email}}"
																								@endif>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Số điện thoại<span class="required">*</span></label>
                                                <input type="tel" placeholder="Số điện thoại" name="phone" required="required"
                                                @if(Auth::check())
																							value="{{Auth::user()->phone}}"
																							@endif>
                                            </div>
                                        </div>
                                         <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Ghi chú</label>
                                                <textarea id="notes" name="notes" cols="20" rows="6" placeholder="Ghi chú thêm"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="your-order">
                                <h3>Đơn Hàng Của Bạn</h3>
                                <div class="your-order-table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="cart-product-name">Sản phẩm</th>
                                                <th class="cart-product-name">Số lượng</th>
                                                <th class="cart-product-total">Tổng giá</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@if(Session::has('cart'))
																						@foreach($product_cart as $cart)
                                            <tr class="cart_item">
                                              <td class="cart-product-name" style="text-align: left;">
                                                    <img width="25%" src="images/product/{{$cart['item']['image']}}" alt="" class="pull-left" > &nbsp;&nbsp;{{$cart['item']['name']}}<strong class="product-quantity">  

                                                    </strong></td>  
                                                 
                                                 <td align="center">{{$cart['qty']}}</td> 
                                                 

                                              <td class="cart-product-total"><span class="amount">{{number_format($cart['price'])}} VND</span></td>  
                                            </tr>
                                            @endforeach
                                           @endif

                                        </tbody>

                                        <tfoot>


                                            <tr class="order-total">
                                               
                                                <th>Tổng tiền</th>
                                                <td><strong><span class="amount">@if(Session::has('cart')){{number_format($totalPrice)}}@else 0 @endif VND</span></strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <div id="accordion">
                                          <div class="card">
                                            <div class="card-header" id="#payment-1">
                                              <h5 class="panel-title">
                                              	<input type="radio" name="payment_method" id="payments-1" checked value="COD" style="width: auto;height: auto;">
                                                <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  Thanh Toán Khi Nhận Hàng
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                              <div class="card-body">
                                                <p>Cửa hàng sẽ gửi đến địa chỉ của bạn, bạn vui lòng xem hàng rồi thanh toán tiền cho nhân viên giao hàng.</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="card">
                                            <div class="card-header" id="#payment-2">
                                              <h5 class="panel-title">
                                              	<input type="radio" name="payment_method" id="payments-2" value="ATM" style="width: auto;height: auto;">
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                  Chuyển Khoản
                                                </a>
                                              </h5>
                                            </div>
                                            <div>
                                              <div class="card-body">
                                                <p>Chuyển tiền đến số tài khoản sau:
																								<br>-Số tài khoản: 12210001929708
																								<br>-Tài khoản: NGO DUC DO
																								<br>-Ngân Hàng BIDV, chi nhánh CN Hà Thành - Hà Nội.
																								<p>
                                              </div>
                                              <div class="card-body">
                                                <p>Hoặc chuyển tiền đến số tài khoản sau:
																								<br>-Số tài khoản: 1405206868888
																								<br>-Tài khoản: HOANG NGOC HUY
																								<br>-Ngân Hàng Vietcombank, chi nhánh CN Tràng An - Hà Nội.
																								<p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="order-button-payment">
                                            <input value="Đặt hàng" type="submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Checkout Area End-->
	@endsection