@php
use App\Models\Product;
@endphp

@extends('website.master')
@section('title')
   Edit Cart
@endsection
@section('body')
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Order Details -->
                <div class="col-md-12 order-details">
                    <div class="section-title">
                        <h4 class="title">Your Collections</h4>
                    </div>
                    <table class="table table-striped table-bordered bootstrap-datatable datatable">
                        <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>PRODUCT</th>
                                <th>Size</th>
                                <th>Color</th>
                                <th>Price</th>
                                <th></th>
                                <th>Update [Size,Color,Qty] if need only</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php
                        $cartProducts=getCartData();
                        @endphp
                        @foreach($cartProducts as $cartproduct)
                            <tr>
                                <td>1</td>
                                <td class="center">{{$cartproduct['quantity']}}x {{$cartproduct['name']}}</td>
                                <td class="center">
                                    @php
                                     getSize($cartproduct['attributes']['size']);
                                    @endphp
                                </td>
                                <td class="center">
                                    @php
                                        getColor($cartproduct['attributes']['color']);
                                    @endphp
                                </td>
                                <td class="center">{{$cartproduct['price']}}</td>
                                <td></td>
                                <td class="center">
                                    <form action="{{route('product.cart.update',['id'=>$cartproduct['id']])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <table>
                                            <tr>
                                                <td>
                                                    @php
                                                        $product=Product::where('id',$cartproduct['id'])->first();
                                                    @endphp
                                                    <select name="product_size" class="input-select">
                                                        @foreach(json_decode($product->size->name) as $key => $size)
                                                            <option value="{{$product->size_id}}:{{$key}}">{{$size}}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="product_color" class="input-select">
                                                        @foreach(json_decode($product->color->name) as $key=>$color )
                                                            <option value="{{$product->color_id}}:{{$key}}">{{$color}}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="mycsd">
                                                        <input type="number" name="quantity" placeholder="+ or - quantity">
                                                    </div>
                                                </td>
                                                <td><button onclick="confirm('Are you Sure to update?')" class="btn btn-primary">Update</button></td>
                                            </tr>
                                        </table>
                                    </form>
                                </td>
                                <td class="center"><a href="{{route('product.deletefromcart',['id'=>$cartproduct['id']])}}" class="btn btn-danger" >Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="order-col">
                        <div class="col-md-10"><strong>TOTAL</strong></div>
                        <div><strong class="order-total">&#2547; {{\Cart::getSubTotal()}}</strong></div>
                    </div>
                    <a class="primary-btn order-submit" href="{{route('checkout.index')}}">Checkout</a>
                </div>
                <!-- /Order Details -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
@endsection

