<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="/adminAssets/plugins/images/favicon.png">
    <title>Elite Admin - University Admin Dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="/adminAssets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/adminAssets/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="/adminAssets/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/adminAssets/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="/adminAssets/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
    <div class="row">
        <div class="col-md-12">
            <div class="login-top-content text-center"><img src="/adminAssets/image/login-top-img.jpg" class="img-responsive" alt="image"></div>
        </div>
    </div>
    <div class="login-box">
        <div class="single-white-box">
            <form class="form-horizontal form-material" id="" method="POST" action="{{ route('login') }}">
                @csrf
                <div style="color: red; clear: both;">
                    @if ($errors->all())
                        <div class="invalid-feedback" role="alert" style="padding-bottom: 10px;">
                            <strong>{{ $errors->first() }}</strong></div>
                    @else
                        <h5>
                            <br>
                        </h5>
                    @endif
                </div>

                <div class="single-box-heading">
                    <img src="/adminAssets/image/lase-shadow-top.jpg" class="shadow-1" alt="">
                    <h3 class="box-title m-b-20">Please Login</h3>
                    <img src="/adminAssets/image/lase-shadow-bottom.jpg" class="shadow-2" alt="">
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" name="email" type="text" required="" placeholder="Username">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" name="password" type="password" required="" placeholder="Password">
                    </div>
                </div>

                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-login text-uppercase waves-effect waves-light" type="submit">LogIn</button>
                    </div>
                </div>


            </form>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="login-bottom-content text-center">
                <img src="/adminAssets/image/login-bottom-img.jpg" class="img-responsive" alt="image">
            </div>
        </div>
    </div>
</section>
<!-- jQuery -->
<script src="/adminAssets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/adminAssets/bootstrap/dist/js/tether.min.js"></script>
<script src="/adminAssets/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/adminAssets/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="/adminAssets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="/adminAssets/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="/adminAssets/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="/adminAssets/js/custom.min.js"></script>
<!--Style Switcher -->
<script src="/adminAssets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
