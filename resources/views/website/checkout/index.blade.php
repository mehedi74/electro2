@extends('website.master')
@section('title')
   Checkout
@endsection
@section('body')
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                    <div class="col-md-6">
                        <div class="billing-details">
                            <div class="section-title">
                                <h4 class="title">Shipping address<sup style="color: red">*</sup></h4>
                            </div>
                            <form  method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Receiver Name:</label>
                                <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder=""
                                       value="John Doe" required>
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile:</label>
                                <input type="text" name="customer_mobile" class="form-control" id="mobile" placeholder="Mobile"
                                       value="01711xxxxxx" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="customer_email" class="form-control" id="email"
                                       placeholder="you@example.com" value="you@example.com" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Address:</label>
                                <input name="ship_add1" type="text" class="form-control" id="address" placeholder="1234 Main St"
                                       value="93 B, New Eskaton Road" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Country:</label>
                                <select name="cus_country"   class="custom-select d-block w-100 form-control" id="country" required>
                                    <option value="">Choose...</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">City:</label>
                                <select name="cus_city" class="custom-select d-block w-100 form-control" id="state" required>
                                    <option value="">Choose...</option>
                                    <option value="Dhaka">Dhaka</option>
                                </select>
                            </div>
                                <label for="name">Zip Code:</label>
                            <div class="form-group">
                                <input  name="cus_postcode" type="text" class="form-control" id="zip" placeholder="" required>
                            </div>
                            <button class="btn btn-primary btn-lg btn-block" id="sslczPayBtn"
                                    token="if you have any token validation"
                                    postdata="your javascript arrays or objects which requires in backend"
                                    order="If you already have the transaction generated for current order"
                                    endpoint="{{ url('/pay-via-ajax') }}"> Pay Now
                            </button>

                            </form>
                        </div>
                    </div>
                <div class="col-md-5 order-details">
                    <div class="section-title text-center">
                        <h3 class="title">Your Order</h3>
                    </div>
                    @php
                        $cartProducts=getCartData();
                    @endphp
                    <div class="order-summary">
                        <div class="order-col">
                            <div><strong>PRODUCT</strong></div>
                            <div><strong>TOTAL</strong></div>
                        </div>
                        <div class="order-products">
                            @foreach($cartProducts as $cartProduct)
                                <div class="order-col">
                                    <div>{{$cartProduct['quantity']}}x {{$cartProduct['name']}}</div>
                                    <div>{{$cartProduct['price']}}</div>
                                </div>
                            @endforeach
                        </div>
                        <div class="order-col">
                            <div>Shiping</div>
                            <div><strong>Free</strong></div>
                        </div>
                        <div class="order-col">
                            <div><strong>TOTAL</strong></div>
                            <div><strong class="order-total">{{\Cart::getSubTotal()}}</strong></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /container -->
        </div>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
           integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
           crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
           integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
           crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
           integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
           crossorigin="anonymous"></script>


   <!-- If you want to use the popup integration, -->
   <script>
       var obj = {};
       obj.cus_name = $('#customer_name').val();
       obj.cus_phone = $('#mobile').val();
       obj.cus_email = $('#email').val();
       obj.cus_addr1 = $('#address').val();
       obj.amount = $('#total_amount').val();

       $('#sslczPayBtn').prop('postdata', obj);

       (function (window, document) {
           var loader = function () {
               var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
               // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
               script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR SANDBOX
               tag.parentNode.insertBefore(script, tag);
           };

           window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
       })(window, document);
   </script>

@endsection

