@extends('master')
@section('content')
 <!-- Begin Slider With Category Menu Area -->
            <div class="slider-with-banner">
                <div class="container">
                    <div class="row">
                        <!-- Begin Category Menu Area -->
                        <div class="col-lg-3">
                            <!--Category Menu Start-->
                            <div class="category-menu">
                                <div class="category-heading">
                                    <h2 class="categories-toggle"><span>Danh mục</span></h2>
                                </div>
                                <div id="cate-toggle" class="category-menu-list">
                                    <ul>

                                        @foreach($loaisp as $lsp)
                                        <li class="right-menu"><a href="{{route('loaisanpham',$lsp->id)}}" style="background: url(images/menu/flag-icon/{{$lsp->image}}) 7px center no-repeat;filter: brightness(0); " >{{$lsp->name}}</a>
                                            @if(count($lsp->category)>0)
                                            <ul class="cat-mega-menu" style="width: 650px;">
                                                @foreach($lsp->category as $ct )
                                                <li class="right-menu cat-mega-title"><a href="{{route('danhmucsp',$ct->id)}}">{{$ct->name}}</a></li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </li>
                                        <style type="text/css">
                                            .right-menu a:hover{
                                                filter: brightness(1)!important;
                                                color: #dc3333!important;
                                            }
                                        </style>
                                        
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!--Category Menu End-->
                        </div>
                        <!-- Category Menu Area End Here -->
                        <!-- Begin Slider Area -->
                        <div class="col-lg-7" style="padding-left: 0">
                            <div class="slider-area pt-sm-30 pt-xs-30">
                                <div class="slider-active owl-carousel">
                                    @foreach($slide as $sl)
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left animation-style-02 bg-4" style="background-image: url(images/slider/{{$sl->image}}); background-size: cover; ">
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Slider Area End Here -->
                        <!-- ----chú thích-- -->
                        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs sidebar_slider" style="padding-left:0px;">
                            <div class="sidebar_service">
                                <div class="services">
                                    <div class="dichvu_image">
                                        <img src="//bizweb.dktcdn.net/100/361/873/themes/731055/assets/service_home_1.png?1587357484410" data-lazyload="//bizweb.dktcdn.net/100/361/873/themes/731055/assets/service_home_1.png?1587357484410" alt="Mua hàng nhanh gọn lẹ">
                                    </div>
                                    <div class="dichvu_content">
                                        <span>Mua hàng nhanh gọn lẹ</span>
                                    </div>
                                </div>
                                <div class="services">
                                    <div class="dichvu_image">
                                        <img src="//bizweb.dktcdn.net/100/361/873/themes/731055/assets/service_home_2.png?1587357484410" data-lazyload="//bizweb.dktcdn.net/100/361/873/themes/731055/assets/service_home_2.png?1587357484410" alt="Tiện kiệm thời gian và nhanh chóng">
                                    </div>
                                    <div class="dichvu_content">
                                        <span>Tiện kiệm thời gian và nhanh chóng</span>
                                    </div>
                                </div>
                                <div class="services">
                                    <div class="dichvu_image">
                                        <img src="//bizweb.dktcdn.net/100/361/873/themes/731055/assets/service_home_3.png?1587357484410" data-lazyload="//bizweb.dktcdn.net/100/361/873/themes/731055/assets/service_home_3.png?1587357484410" alt="Nhiều quà tặng hấp dẫn">
                                    </div>
                                    <div class="dichvu_content">
                                        <span>Nhiều quà tặng hấp dẫn</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end chú thích -->
                    </div>
                </div>
            </div>
            <!-- Slider With Category Menu Area End Here -->
              <section class="product-area li-laptop-product Special-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Sản phẩm mới</span>
                                </h2>
                            </div>
                            <div class="row">
                                <div class="special-product-active owl-carousel">
                                    @foreach($new_product as $new)
                                        <div class="col-lg-12">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="{{route('chitietsanpham',$new->id)}}">
                                                        <img src="images/product/{{$new->image}}" alt="Li's Product Image">
                                                    </a>
                                                    <span class="sticker" style="background: red;">NEW</span>
                                                </div>
                                                <div class="product_desc">
                                                    <div class="product_desc_info">
                                                        <h4><a class="product_name" href="{{route('chitietsanpham',$new->id)}}"><?php echo substr($new['name'],0,25) ?>...</a></h4>
                                                        <div class="price-box">
                                                            @if($new->promotion_price==0)
                                                            <span class="new-price">{{number_format($new->unit_price)}} VND</span>
                                                            @else
                                                            <span class="new-price new-price-2">{{number_format($new->promotion_price)}} VND</span>
                                                            <span class="old-price">{{number_format($new->unit_price)}} VND</span>
                                                            
                                                            @endif
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="add-actions">
                                                        <ul class="add-actions-link">
                                                            <li class="add-cart active"><a href="{{route('themgiohang',$new->id)}}">Thêm giỏ hàng</a></li>
                                                           <!--  <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li> -->
                                                            <li><a href="{{route('chitietsanpham',$new->id)}}" title="xem chi tiết" class="quick-view-btn"><i class="fa fa-eye"></i></a></li>
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
            <!-- Begin Li's Special Product Area -->
            <section class="product-area li-laptop-product Special-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Sản phẩm khuyến mãi</span>
                                </h2>
                            </div>
                            <div class="row">
                                <div class="special-product-active owl-carousel">
                                    @foreach($sanpham_khuyenmai as $spkm)
                                        <div class="col-lg-12">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="{{route('chitietsanpham',$spkm->id)}}">
                                                        <img src="images/product/{{$spkm->image}}" alt="Li's Product Image">
                                                    </a>
                                                    <span class="sticker">SALE</span>
                                                </div>
                                                <div class="product_desc">
                                                    <div class="product_desc_info">
                                                        <h4><a class="product_name" href="{{route('chitietsanpham',$spkm->id)}}"><?php echo substr($spkm['name'],0,25) ?>...</a></h4>
                                                        <div class="price-box">
                                                            @if($spkm->promotion_price==0)
                                                            <span class="new-price">{{number_format($spkm->unit_price)}} VND</span>
                                                            @else
                                                            <span class="new-price new-price-2">{{number_format($spkm->promotion_price)}} VND</span>
                                                            <span class="old-price">{{number_format($spkm->unit_price)}} VND</span>
                                                            
                                                            @endif
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="add-actions">
                                                        <ul class="add-actions-link">
                                                            <li class="add-cart active"><a href="{{route('themgiohang',$spkm->id)}}">Thêm giỏ hàng</a></li>
                                                           <!--  <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li> -->
                                                            <li><a href="{{route('chitietsanpham',$spkm->id)}}" title="xem chi tiết" class="quick-view-btn"><i class="fa fa-eye"></i></a></li>
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
            <!-- Li's Special Product Area End Here -->
            <!-- Begin Li's Laptops Product | Home V2 Area -->
            <section class="product-area li-laptop-product li-laptop-product-2 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Điện thoại </span>
                                </h2>
                            </div>
                            <div class="li-banner-2 pt-15">
                                <div class="row">
                                    <!-- Begin Single Banner Area -->
                                    <div class="col-lg-12 col-md-12">
                                        
                                    </div>
                                    <!-- Single Banner Area End Here -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    @foreach($banthinghiem as $lt)
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
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a style="white-space: nowrap;" href="{{route('danhmucsp',$lt->category->id)}}"><?php echo substr($lt['category']['name'],0,20)?>...</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" style="white-space: nowrap; href="{{route('chitietsanpham',$lt->id)}}"><?php echo substr($lt['name'],0,25) ?>...</a></h4>
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
            <!-- Li's Laptops Product | Home V2 Area End Here -->
            <!-- Begin Li's TV & Audio Product Area -->
            <section class="product-area li-laptop-product li-tv-audio-product-2 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span> Laptop </span>
                                </h2>
                            </div>
                            <div class="li-banner-2 pt-15">
                                <div class="row">
                                    <!-- Begin Single Banner Area -->
                                    <div class="col-lg-12 col-md-12">
                                       
                                    </div>
                                    <!-- Single Banner Area End Here -->
                                </div>
                            </div>
                            <div class="row">
                                 <div class="product-active owl-carousel">
                                    @foreach($tbntth as $lt)
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
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                              <a style="white-space: nowrap;" href="{{route('danhmucsp',$lt->category->id)}}"><?php echo substr($lt['category']['name'],0,20)?>...</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a style="white-space: nowrap;" class="product_name" href="{{route('chitietsanpham',$lt->id)}}"><?php echo substr($lt['name'],0,25) ?>...</a></h4>
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
            <!-- Li's TV & Audio Product Area End Here -->
            <!-- Begin Li's TV & Audio Product Area -->
            
            
            <!-- Li's Smart Phone Product Area End Here -->
             <!-- Begin Li's Smart Phone Product Area -->
            
           
            <!-- Li's Static Home Area End Here -->
            <!-- Begin Li's Trending Product | Home V2 Area -->
           
         <style type="text/css">
             .right-menu.cat-mega-title{
                width: 50%!important;
             }
             .right-menu a{
                padding-left: 33px;
                display: block;
                color: #3d465a;
                font-family: Arial,sans-serif;
             }
             .category-menu-list > ul > li{
                padding: 3.2px 20px 3.2px 20px;
             }
             .sidebar_slider .sidebar_service .services {
                padding: 0px 15px;
                min-height: 158px;
                text-align: center;
            }
            .sidebar_slider .sidebar_service .services .dichvu_image {
                padding: 25px 0 15px 0;
            }
            .sidebar_slider .sidebar_service .services .dichvu_content {
                padding-bottom: 25px;
            }
            .sidebar_slider .sidebar_service .services .dichvu_content span {
                font-size: 14px;
                font-family: Arial,sans-serif;
                line-height: 20px;
                color: #898989;
                text-align: center;
            }
            .sidebar_service{
                border: 1px solid #ebebeb;
            }
            .li-static-home-image{
                height: 200px;
            }
         </style>
			
@endsection