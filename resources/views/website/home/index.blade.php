@extends('website.master')
@section('title')
    Home
@endsection
@section('body')

    <script language="JavaScript">
        function function1() {
            swal('Product removed Successfully');
        }
    </script>
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- shop -->
                @foreach($categories->take(3) as $category)
                    <div class="col-md-4 col-xs-6">
                        <div class="shop">
                            <div class="shop-img">
                                <img src="{{asset($category->image)}}" style="height: 200px;" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>{{$category->name}}<br>Collection</h3>
                                <a href="{{route('product.category',['id'=>$category->id])}}" class="cta-btn">Shop now
                                    <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- /shop -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">New Products</h3>
                        <div class="section-nav">
                            <ul class="section-tab-nav tab-nav">
                                @foreach($categories->take(4) as $key=> $category)
                                        <?php
                                    if ($key == 0){
                                        ?>
                                    <li><a data-toggle="tab" href="#tab1"><a
                                                href="{{route('product.category',['id'=>$category->id])}}">{{$category->name}}</a></a>
                                    </li>
                                        <?php
                                    }else{
                                        ?>
                                    <li><a data-toggle="tab" href="#tab1"><a
                                                href="{{route('product.category',['id'=>$category->id])}}">{{$category->name}}</a></a>
                                    </li>
                                        <?php
                                    }
                                        ?>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab1" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                    @foreach($products as $product)
                                        <div class="product">
                                            <div class="product-img">
                                                @foreach(explode('|',$product->image) as $key => $images)
                                                    @if($key==0)
                                                        <a href="{{route('product.single',['id'=>$product->id])}}"> <img
                                                                src="{{asset($images)}}"
                                                                style="height: 200px;width: 100%" alt="product.img"></a>
                                                    @endif
                                                @endforeach
                                                <div class="product-label">
                                                    <span class="sale">-30%</span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">{{$product->category->name}}</p>
                                                <h3 class="product-name"><a
                                                        href="{{route('product.single',['id'=>$product->id])}}">{{$product->name}}</a>
                                                </h3>
                                                <h4 class="product-price">{{$product->price}}
                                                    <del class="product-old-price">67</del>
                                                </h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                            class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                            class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i>
                                                        <span
                                                            class="tooltipp"><a
                                                                href="{{route('product.single',['id'=>$product->id])}}"
                                                                style="color: white;">quick view
                                                            </a>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a
                                                        href="{{route('product.single',['id'=>$product->id])}}">add to cart</a>
                                                </button>
                                            </div>
                                        </div>

                                    @endforeach

                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                                <!-- Modal -->
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- HOT DEAL SECTION -->
    <div id="hot-deal" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="hot-deal">
                        <ul class="hot-deal-countdown">
                            <li>
                                <div>
                                    <h3>02</h3>
                                    <span>Days</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3>10</h3>
                                    <span>Hours</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3>34</h3>
                                    <span>Mins</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3>60</h3>
                                    <span>Secs</span>
                                </div>
                            </li>
                        </ul>
                        <h2 class="text-uppercase">hot deal this week</h2>
                        <p>New Collection Up to 50% OFF</p>
                        <a class="primary-btn cta-btn" href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /HOT DEAL SECTION -->

    <!-- SECTION -->
{{--    <div class="section">--}}
{{--        <!-- container -->--}}
{{--        <div class="container">--}}
{{--            <!-- row -->--}}
{{--            <div class="row">--}}

{{--                <!-- section title -->--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="section-title">--}}
{{--                        <h3 class="title">Top selling</h3>--}}
{{--                        <div class="section-nav">--}}
{{--                            <ul class="section-tab-nav tab-nav">--}}
{{--                                @foreach($topSaleProducts as $topSaleProduct)--}}
{{--                                <li><a href="{{route('product.brand',['id'=>$topSaleProduct->br_id])}}">{{$topSaleProduct->brand->name}}</a></li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- /section title -->--}}

{{--                <!-- Products tab & slick -->--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="row">--}}
{{--                        <div class="products-tabs">--}}
{{--                            <!-- tab -->--}}
{{--                            <div id="tab1" class="tab-pane active">--}}
{{--                                <div class="products-slick" data-nav="#slick-nav-1">--}}
{{--                                    @foreach($topSaleProducts as $topSaleProduct)--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                @foreach(explode('|',$topSaleProduct->image) as $key => $images)--}}
{{--                                                    @if($key==0)--}}
{{--                                                        <a href="{{route('product.single',['id'=>$topSaleProduct->id])}}"> <img--}}
{{--                                                                src="{{asset($images)}}"--}}
{{--                                                                style="height: 200px;width: 100%" alt="product.img"></a>--}}
{{--                                                    @endif--}}
{{--                                                @endforeach--}}
{{--                                                <div class="product-label">--}}
{{--                                                    <span class="sale">-30%</span>--}}
{{--                                                    <span class="new">NEW</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-body">--}}
{{--                                                <p class="product-category">{{$topSaleProduct->category->name}}</p>--}}
{{--                                                <h3 class="product-name"><a--}}
{{--                                                        href="{{route('product.single',['id'=>$topSaleProduct->id])}}">{{$topSaleProduct->name}}</a>--}}
{{--                                                </h3>--}}
{{--                                                <h4 class="product-price">{{$topSaleProduct->price}}--}}
{{--                                                    <del class="product-old-price">67</del>--}}
{{--                                                </h4>--}}
{{--                                                <div class="product-rating">--}}
{{--                                                    <i class="fa fa-star"></i>--}}
{{--                                                    <i class="fa fa-star"></i>--}}
{{--                                                    <i class="fa fa-star"></i>--}}
{{--                                                    <i class="fa fa-star"></i>--}}
{{--                                                    <i class="fa fa-star"></i>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-btns">--}}
{{--                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span--}}
{{--                                                            class="tooltipp">add to wishlist</span></button>--}}
{{--                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span--}}
{{--                                                            class="tooltipp">add to compare</span></button>--}}
{{--                                                    <button class="quick-view"><i class="fa fa-eye"></i>--}}
{{--                                                        <span--}}
{{--                                                            class="tooltipp"><a--}}
{{--                                                                href="{{route('product.single',['id'=>$topSaleProduct->id])}}"--}}
{{--                                                                style="color: white;">quick view--}}
{{--                                                            </a>--}}
{{--                                                        </span>--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="add-to-cart">--}}
{{--                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a--}}
{{--                                                        href="{{route('product.single',['id'=>$topSaleProduct->id])}}">add to cart</a>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    @endforeach--}}

{{--                                </div>--}}
{{--                                <div id="slick-nav-1" class="products-slick-nav"></div>--}}
{{--                                <!-- Modal -->--}}
{{--                            </div>--}}
{{--                            <!-- /tab -->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- /Products tab & slick -->--}}
{{--            </div>--}}
{{--            <!-- /row -->--}}
{{--        </div>--}}
{{--        <!-- /container -->--}}
{{--    </div>--}}
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-4 col-xs-6">
                    <div class="section-title">
                        <h4 class="title">Top selling</h4>
                        <div class="section-nav">
                            <div id="slick-nav-3" class="products-slick-nav"></div>
                        </div>
                    </div>

                    <div class="products-widget-slick" data-nav="#slick-nav-3">
                        <div>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="{{asset('assets')}}/website/img/product07.png" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="{{asset('assets')}}/website/img/product08.png" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="{{asset('assets')}}/website/img/product09.png" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                            <!-- product widget -->
                        </div>

                        <div>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="{{asset('assets')}}/website/img/product01.png" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="{{asset('assets')}}/website/img/product02.png" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="{{asset('assets')}}/website/img/product03.png" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                            <!-- product widget -->
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-6">
                    <div class="section-title">
                        <h4 class="title">Top selling</h4>
                        <div class="section-nav">
                            <div id="slick-nav-4" class="products-slick-nav"></div>
                        </div>
                    </div>

                    <div class="products-widget-slick" data-nav="#slick-nav-4">
                        <div>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="{{asset('assets')}}/website/img/product04.png" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="{{asset('assets')}}/website/img/product05.png" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="{{asset('assets')}}/website/img/product06.png" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                            <!-- product widget -->
                        </div>

                        <div>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="{{asset('assets')}}/website/img/product07.png" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="{{asset('assets')}}/website/img/product08.png" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="{{asset('assets')}}/website/img/product09.png" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                            <!-- product widget -->
                        </div>
                    </div>
                </div>

                <div class="clearfix visible-sm visible-xs"></div>

                <div class="col-md-4 col-xs-6">
                    <div class="section-title">
                        <h4 class="title">Top selling</h4>
                        <div class="section-nav">
                            <div id="slick-nav-5" class="products-slick-nav"></div>
                        </div>
                    </div>

                    <div class="products-widget-slick" data-nav="#slick-nav-5">
                        <div>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="{{asset('assets')}}/website/img/product01.png" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="{{asset('assets')}}/website/img/product02.png" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="{{asset('assets')}}/website/img/product03.png" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                            <!-- product widget -->
                        </div>

                        <div>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="{{asset('assets')}}/website/img/product04.png" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="{{asset('assets')}}/website/img/product05.png" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="{{asset('assets')}}/website/img/product06.png" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                            <!-- product widget -->
                        </div>
                    </div>
                </div>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

@endsection
