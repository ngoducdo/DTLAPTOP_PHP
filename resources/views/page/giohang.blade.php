@extends('master')
@section('content')
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Giỏ hàng</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
     <!--Shopping Cart Area Strat-->
     <div class="Shopping-cart-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">

                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="li-product-thumbnail">Hình ảnh</th>
                                                <th class="cart-product-name">Tên sản phẩm</th>
                                                <th class="li-product-price">Đơn giá</th>
                                                <th class="li-product-quantity">Số lượng</th>
                                                <th class="li-product-subtotal">Tổng tiền</th>
                                                <th class="li-product-remove">Xóa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if(Session::has('cart'))
								            @foreach($product_cart as $product)
                                            <tr>
                                                <td class="li-product-thumbnail"><a href="{{route('chitietsanpham',$product['item']->id)}}"><img src="images/product/{{$product['item']['image']}}"  width="150px" height="150px" alt="Li's Product Image"></a></td>
                                                <td class="li-product-name"><a href="{{route('chitietsanpham',$product['item']->id)}}">{{$product['item']['name']}}</a></td>
                                                <td class="li-product-price">
                                                    <span class="amount">
                                                    @if($product['item']['promotion_price']==0)
                                                        {{number_format($product['item']['unit_price'])}}
                                                    @else {{number_format($product['item']['promotion_price'])}}
                                                    @endif
                                                    </span>
                                                </td>
                                                <td class="quantity">
                                                    <label>Số lượng</label>
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" value="{{$product['qty']}}" type="number" id="quanty-item-{{$product['item']['id']}}" onchange="SaveListItemCart({{$product['item']['id']}})" name="product_numb">
                                                        <div class="dec qtybutton" style="display: none;"><i class="fa fa-angle-down"></i></div>
                                                        <div class="inc qtybutton" style="display: none;"><i class="fa fa-angle-up"></i></div>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal"><span class="amount">{{number_format($product['price'])}}</span></td>
                                                <td class="li-product-remove"><a href="{{route('xoagiohang',$product['item']['id'])}}"><i class="fa fa-times"></i></a></td>
                                            </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="coupon-all">
                                            <div class="coupon">
                                                <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                                <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                            </div>
                                            <div class="coupon2" style="display:none;">
                                                <a href="{{route('giohang')}}" class="udc"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                        @if(Session::has('cart'))
                                            <h2>Tổng số giỏ hàng</h2>
                                            <ul>
                                                <li>Tổng số phụ <span>{{number_format(Session('cart')->totalPrice)}} VND</span></li>
                                                <li>Tổng tiền <span>{{number_format(Session('cart')->totalPrice)}} VND</span></li>
                                            </ul>
                                            <a href="{{route('dathang')}}">Đặt hàng</a>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Shopping Cart Area End-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.js"></script>
            <script type="text/javascript">
                    function SaveListItemCart(id){
                        $.ajax({
                            url: 'Save-Item-List-Cart/'+id+'/'+$("#quanty-item-"+id).val(),
                            type: 'GET',
                        }).done(function(){
                            alertify.success('cập nhật giỏ hàng thành công!!');
                            setTimeout(function() { 
                                window.location.href = $(".udc")[0].href; 
                            }, 1000);
                        });
                    }
                // function RenderListCart(response){
                //     $("#list-cart").empty();
                //     $("#list-cart").html(response);
                // }
            </script>
            <style>
                .dec.qtybutton,.inc.qtybutton{
                    display:none;
                }
                .cart-plus-minus-box{
                    width: 100%!important;
                }
            </style>
@endsection