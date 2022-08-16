	@extends('master')
	@section('content')
		<!-- BREADCRUMB -->
	    <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="{{route('trang-chu')}}">Trang chủ</a></li>
                            <li class="active">{{$sanpham->name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- content-wraper start -->
            <div class="content-wraper">
                <div class="container">
                    <div class="row single-product-area">
                        <div class="col-lg-5 col-md-6">
                           <!-- Product Details Left -->
                            <div class="product-details-left">
                                <div class="product-details-images slider-navigation-1">
                                    <div class="lg-image">
                                        <img src="images/product/{{$sanpham->image}}" alt="product image">
                                    </div>
                                </div>
                                <div class="product-details-thumbs slider-thumbs-1">
                                    <div class="sm-image"><img src="images/product/{{$sanpham->image}}" alt="product image thumb"></div>
                                </div>
                            </div>
                            <!--// Product Details Left -->
                        </div>

                        <div class="col-lg-7 col-md-6">
                            <div class="product-details-view-content sp-normal-content pt-60">
                                <div class="product-info">
                                    <h2>{{$sanpham->name}}</h2>
                                   <!--  <span class="product-details-ref">Reference: demo_15</span> -->
                                    <div class="rating-box pt-20">
                                        <ul class="rating rating-with-review-item">
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                           <!--  <li class="review-item"><a href="#">Read Review</a></li>
                                            <li class="review-item"><a href="#">Write Review</a></li> -->
                                        </ul>
                                    </div>
                                    <div class="price-box pt-20">
                                        	@if($sanpham->promotion_price==0)
                                            <span class="new-price">{{number_format($sanpham->unit_price)}} VND</span>
                                            @else
                                            <span class="new-price new-price-2">{{number_format($sanpham->promotion_price)}} VND</span>
                                            <span class="old-price">{{number_format($sanpham->unit_price)}} VND</span>  
                                          @endif
                                    </div>
                                    <div class="product-desc">
                                        <p>
                                            <span><?php echo $sanpham['description'] ?>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="single-add-to-cart">
                                        <form action="{{route('themgiohang',$sanpham->id)}}" class="cart-quantity">
                                            <div class="quantity">
                                                <!-- <label>Số lượng</label> -->
                                                <div class="cart-plus-minus" style="display: none">
                                                    <input class="cart-plus-minus-box" value="1 " type="text">
                                                    <div class="dec qtybutton" style="display: none"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton" style="display: none"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </div>
                                            <button class="add-to-cart" type="submit">Thêm vào giỏ hàng</button>
                                        </form>
                                    </div>
                                    <div class="product-additional-info">
                                        <div class="product-social-sharing">
                                            <ul>
                                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                                <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- content-wraper end -->
            <!-- Begin Product Area -->
            <div class="product-area pt-40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <ul class="nav li-product-menu">
                                   <li><a class="active" data-toggle="tab" href="#description"><span>Mô tả</span></a></li>
                                   <li><a data-toggle="tab" href="#product-details"><span>Chi tiết sản phẩm</span></a></li>
                                   <li><a data-toggle="tab" href="#reviews"><span>Đánh giá</span></a></li>
                                </ul>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="description" class="tab-pane active show" role="tabpanel">
                            <div class="product-description">
                                <span><?php echo $sanpham['description'] ?></span>
                            </div>
                        </div>
                        <div id="product-details" class="tab-pane" role="tabpanel">
                            <div class="product-details-manufacturer">
                                <div class="mota" style="width: 50%;">
                                    <p><span><?php echo $sanpham['description1'] ?></span></p>
                                </div>
                                
                                <div class="thongso" style="width: 50%;">
                                    <style type="text/css">
                                        .product-description .attribute-item{
                                            display: flex;
                                            font-size: 13px;
                                            padding: 12px 0;
                                            border-bottom: 1px solid #ececec;
                                        }
                                        .attribute-content::before{
                                            content: 'THÔNG SỐ KỸ THUẬT';
                                            font-weight: bold;
                                            font-size: 32px;
                                        }
                                        .mota::before{
                                            content: 'CHI TIẾT SẢN PHẨM';
                                            font-weight: bold;
                                            font-size: 32px;
                                        }
                                        .py10 {
                                            padding-top: 10px !important;
                                            padding-bottom: 10px !important;
                                        }
                                        .mx20 {
                                           /* margin-left: 20px !important;*/
                                            margin-right: 20px !important;
                                        }
                                        .mx20 p:first-child {
                                            width: 40% !important;
                                             margin-left: 10px !important;
                                             float: left;
                                             border-bottom: 1px dashed #000;
                                        }
                                         .mx20 p:last-child {
                                            width: 58% !important;
                                            float:right;
                                            border-bottom: 1px dashed #000;
                                        }
                                    </style>
                                    <?php echo $sanpham['Parameter'] ?>
                                </div>
                                
                            </div>
                        </div>
                        <div class="clearfix" ></div>
                        <div id="reviews" class="tab-pane" role="tabpanel">
                            <div class="product-reviews">
                                <div class="product-details-comment-block">
                                    <div class="review-btn">
                                        <a class="review-links" href="#" data-toggle="modal" data-target="#mymodal">Viết đánh giá!</a>
                                    </div>
                                    @foreach($comment as $cmt)
                                     <div class="comment-author-infos pt-25">
                                        <span>{{$cmt->name}}</span>
                                        <em>{{$cmt->created_at}}</em>
                                        <p>{{$cmt->content}}</p>
                                    </div>
                                    @endforeach
                                    <!-- Begin Quick View | Modal Area -->
                                    <div class="modal fade modal-wrapper" id="mymodal" >
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <h3 class="review-page-title">Viết đánh giá của bạn</h3>
                                                    <div class="modal-inner-area row">
                                                        <div class="col-lg-6">
                                                           <div class="li-review-product">
                                                               <img src="images/product/{{$sanpham->image}}" alt="Li's Product" width="150px;">
                                                               <div class="li-review-product-desc">
                                                                   <p class="li-product-name">{{$sanpham->name}}</p>
                                                                   <p>
                                                                       <span><?php echo $sanpham['description'] ?> </span>
                                                                   </p>
                                                               </div>
                                                           </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="li-review-content">
                                                                <!-- Begin Feedback Area -->
                                                                <div class="feedback-area">
                                                                    <div class="feedback">
                                                                        <h3 class="feedback-title">Phản hồi của bạn</h3>
                                                                        <form method="post">
                                                                          <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                            <p class="your-opinion">
                                                                                <label>Xếp hạng</label>
                                                                                <span>
                                                                                    <select class="star-rating">
                                                                                      <option value="1">1</option>
                                                                                      <option value="2">2</option>
                                                                                      <option value="3">3</option>
                                                                                      <option value="4">4</option>
                                                                                      <option value="5">5</option>
                                                                                    </select>
                                                                                </span>
                                                                            </p>
                                                                            <p class="feedback-form">
                                                                                <label for="feedback">Đánh giá</label>
                                                                                <textarea id="feedback" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                                                            </p>
                                                                            <div class="feedback-input">
                                                                                <p class="feedback-form-author">
                                                                                    <label for="author">Tên<span class="required">*</span>
                                                                                    </label>
                                                                                    <input id="author" name="author" value="" size="30" aria-required="true" type="text">
                                                                                </p>
                                                                                <p class="feedback-form-author feedback-form-email">
                                                                                    <label for="email">Email<span class="required">*</span>
                                                                                    </label>
                                                                                    <input id="email" name="email" value="" size="30" aria-required="true" type="text">
                                                                                    <span class="required"><sub>*</sub> Required fields</span>
                                                                                </p>
                                                                                <div class="feedback-btn pb-15">
                                                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">Đóng</a>
                                                                                    <button>Gửi</button> 
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <!-- Feedback Area End Here -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                    <!-- Quick View | Modal Area End Here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Area End Here -->
            <!-- Begin Li's Laptop Product Area -->
            <section class="product-area li-laptop-product pt-30 pb-50">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Sản phẩm tương tự:</span>
                                </h2>
                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">
                                     @foreach($sp_tuongtu as $lt)
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="{{route('chitietsanpham',$lt->id)}}">
                                                    <img src="images/product/{{$lt->image}}" alt="Li's Product Image">
                                                </a>
                                                @if($lt->new==1)
                                                <span class="sticker" style="background: red;">New</span>
                                                @endif
                                                @if($lt->promotion_price > 0)
                                                <span class="sticker">SALE</span>
                                                @endif
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <h4><a class="product_name" href="{{route('chitietsanpham',$lt->id)}}"><?php echo substr($lt['name'],0,25) ?>...</a></h4>
                                                    <div class="price-box">
                                                        @if($lt->promotion_price==0)
                                                            <span class="new-price">{{number_format($lt->unit_price)}} đ</span>
                                                            @else
                                                            <span class="new-price new-price-2">{{number_format($lt->promotion_price)}} đ</span>
                                                            <span class="old-price">{{number_format($lt->unit_price)}} đ</span>
                                                        @endif
                                                    </div>
                                                </div>
                                               <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="{{route('themgiohang',$lt->id)}}">Thêm giỏ hàng</a></li>
                                                       <!--  <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li> -->
                                                        <li><a href="{{route('chitietsanpham',$lt->id)}}" title="xem chi tiết"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Laptop Product Area End Here -->

	@endsection