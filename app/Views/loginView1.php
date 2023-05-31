<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/preview-equation/default/user_login_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Mar 2023 10:15:25 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Login-2 | Equation - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="public/assets_1/assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="public/assets_1/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="public/assets_1/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="public/assets_1/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="public/assets_1/assets/css/users/login-2.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->    
</head>
<body class="login">

    <div id="eq-loader">
      <div class="eq-loader-div">
          <div class="eq-loading dual-loader mx-auto mb-5"></div>
      </div>
    </div>

    

    <!-- < ?php form_open('create')?> -->
    <form class="form-login" action='<?php echo base_url();?>/login/auth'  method ="post">

        <div class="row"> 
            <div class="col-md-12 text-center mb-4">
                <img alt="logo" src="public/assets_1/assets/img/was_logo1.jpeg" class="theme-logo">
            </div>

            <?php if(session()->has('error')) : ?>
                  <div class="col-xl-12 alert alert-danger mb-4"><?=session('error')?></div> 
            <?php endif; ?>

            <div class="col-md-12">

                <label for="user_name" class="sr-only">Username</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-username"><i class="flaticon-user-7"></i> </span>
                    </div>
                    <input type="text" id="user_name" name="user_name" class="form-control" placeholder="Username" aria-describedby="username" required >
                </div>

                <label for="user_password" class="sr-only">Password</label>                
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-inputPassword"><i class="flaticon-key-2"></i> </span>
                    </div>
                    <input type="password" id="user_password" name="user_password" class="form-control" placeholder="Password" aria-describedby="inputPassword" required >
                </div>
                
                <div class="checkbox d-flex justify-content-center mt-3">
                    <div class="custom-control custom-checkbox mr-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" value="remember-me">
                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                    </div>
                </div>

                <button class="btn btn-lg btn-gradient-warning btn-block btn-rounded mb-4 mt-5" type="submit">Login</button>

                <div class="forgot-pass text-center">
                    <a href="user_pass_recovery_2.html">Forgot Password ?</a>
                </div>

            </div>

            <div class="col-md-12">
                <div class="login-text text-center">
                    <p class="mt-3 text-white">New Here? <a href="<?=base_url()?>/Register" class="">Register </a> a new user !</p>
                </div>
            </div>

        </div>
    </form>  
    <!-- < ?php form_close(); ?> -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="public/assets_1/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="public/assets_1/assets/js/loader.js"></script>
    <script src="public/assets_1/bootstrap/js/popper.min.js"></script>
    <script src="public/assets_1/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/preview-equation/default/user_login_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Mar 2023 10:15:26 GMT -->
</html>