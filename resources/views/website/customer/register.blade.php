<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #17a2b8;
        height: 100vh;
    }
    #login .container #login-row #login-column #login-box {
        margin-top: 60px;
        max-width: 600px;
        height: 410px;
        border: 1px solid #9C9C9C;
        background-color: #EAEAEA;
    }
    #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
    }
    #login .container #login-row #login-column #login-box #login-form #register-link {
        margin-top: -85px;
    }
</style>
<!------ Include the above in your HEAD tag ---------->

<body>
<div id="login">
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-8">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="{{route('customer.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h3 class="text-center text-info">Registration Form</h3>
                        <h4>{{session('msg')}}</h4>
                        <div class="form-group">
                            <label for="name" class="text-info">Your Name:</label><br>
                            <input type="text" name="customer_name" id="customer_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-info">Email:</label><br>
                            <input type="email" name="customer_email" id="customer_email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="text-info">Mobile Number:</label><br>
                            <input type="number" name="customer_phone" id="customer_phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="text-info">Address</label><br>
                            <input type="text" name="customer_address" id="customer_address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="text" name="customer_password" id="customer_password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php
