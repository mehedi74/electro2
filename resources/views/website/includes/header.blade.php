<!-- TOP HEADER -->
<div id="top-header">
    <div class="container">
        <ul class="header-links pull-left">
            <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
            <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
            <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
        </ul>
        <ul class="header-links pull-right">
            <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
            <?php

            use Illuminate\Support\Facades\Session;
            use App\Models\Customer;

            $data = Session::get('customer_id');
            $customer = Customer::where('id', $data)->first();
            if ($customer){
                ?>
            <li><a href="#"><i class="fa fa-user-o"></i>{{$customer->name}}</a></li>
            <li><a href="{{route('customer.logout')}}"><i class="fa fa-trash"></i>Logout</a></li>
                <?php
            }else{
                ?>
            <li><a href="{{route('customer.login')}}"><i class="fa fa-user-o"></i>Login</a></li>
                <?php
            }
            ?>
        </ul>
    </div>
</div>
<!-- /TOP HEADER -->

<!-- MAIN HEADER -->
<div id="header">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- LOGO -->
            <div class="col-md-3">
                <div class="header-logo">
                    <a href="#" class="logo">
                        <img src="{{asset('assets')}}/website/img/logo.png" alt="">
                    </a>
                </div>
            </div>
            <!-- /LOGO -->

            <!-- SEARCH BAR -->
            <div class="col-md-6">
                <div class="header-search">
                    <form action="{{route('product.search')}}" method="get">
                        <select class="input-select" name="category">
                            <option value="ALL" {{request('category')=='ALL' ? 'selected': ''}}>All Categories</option>
                            @foreach($categories as $category)
                                <option
                                    value="{{$category->id}}" {{request('category')==$category->id  ? 'selected': ''}}>{{$category->name}}
                                </option>
                            @endforeach
                        </select>
                        <input class="input" placeholder="Search here" name="product" value="{{request('product')}}">
                        <button type="submit" class="search-btn" style="display: inline-block;">Search</button>
                    </form>
                </div>
            </div>
            <!-- /SEARCH BAR -->

            <!-- ACCOUNT -->
            <div class="col-md-3 clearfix">
                <div class="header-ctn">
                    <!-- Wishlist -->
                    <div>
                        <a href="#">
                            <i class="fa fa-heart-o"></i>
                            <span>Your Wishlist</span>
                            <div class="qty">2</div>
                        </a>
                    </div>
                    <!-- /Wishlist -->

                    <!-- Cart -->
                    <div class="dropdown">
                        @php
                            $cartProducts=getCartData();
                        @endphp
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Your Cart</span>
                            <div class="qty">{{count($cartProducts)}}</div>
                        </a>
                        <div class="cart-dropdown">
                            <div class="cart-list">
                                @foreach($cartProducts as $cartProduct)
                                    <div class="product-widget">
                                        <div class="product-img">
                                            @foreach(explode('|',$cartProduct['attributes']['image']) as $key => $image)
                                                @if($key==0)
                                                    <img src="{{asset($image)}}" alt="product-img">
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">{{$cartProduct['name']}}</a></h3>
                                            <h4 class="product-price"><span class="qty">{{$cartProduct['attributes']['quantity']}}x</span>&#2547;{{$cartProduct['price']}}
                                            </h4>
                                        </div>
                                        <a onclick="function1()" class="delete"
                                           href="{{route('product.deletefromcart',['id'=>$cartProduct['id']])}}"><i
                                                class="fa fa-close"></i> </a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="cart-summary">
                                <small>{{count($cartProducts)}} Item(s) selected</small>
                                <h5>SUBTOTAL: &#2547;{{\Cart::getSubTotal()}}</h5>
                            </div>
                            <div class="cart-btns">
                                <a href="{{route('product.cart.edit')}}">View Cart</a>
                                <a href="{{route('checkout.index')}}">Checkout<i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /Cart -->

                    <!-- Menu Toogle -->
                    <div class="menu-toggle">
                        <a href="#">
                            <i class="fa fa-bars"></i>
                            <span>Menu</span>
                        </a>
                    </div>
                    <!-- /Menu Toogle -->
                </div>
            </div>
            <!-- /ACCOUNT -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</div>
<!-- /MAIN HEADER -->
