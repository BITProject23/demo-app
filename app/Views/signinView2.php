<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Signin Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    
    

<link href="public/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

     
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }


      .bg{
        background-image: url('public/assets/brand/login_img03.jpg') ;
        background-repeat: no-repeat;
        background-size: cover;
        width:100%;
        height:100vh;
        /*color: #fff;*/
      }

      .form-conatiner{
        border:0px solid #fff; 
        padding: 5px 10px; 
        margin-top:20vh;
        background-color: #fff;
        -webkit-box-shadow: -1px 3px 20px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: -1px 3px 20px 0px rgba(0,0,0,0.75);
        box-shadow: -1px 3px 20px 0px rgba(0,0,0,0.75);
        border-radius: 0.5rem;
      }

      .img-fluid{
        max-width: 100%;
        height:auto;
      }

      img{
        vertical-align: middle;
        border-style:none;
      }




    </style>

    
    <!-- Custom styles for this template -->
    <link href="public/assets/dist/css/sign-in.css" rel="stylesheet">



  </head>
  <body class="text-center">

        <div class="container-fluid bg">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12"></div>
                <div class="col-md-4 col-sm-4 col-xs-12"> 
                    <main class="form-signin w-100 m-auto">

                        <!-- Background Image-->
                        <!-- <div style="height: 100vh">
                                <img class="img-fluid" src="public/assets/brand/login_img01.jpg">
                        </div> -->

                        <form class="form-conatiner">
                            <img class="mb-4" src="public/assets/brand/was_logo1.jpeg" class ="img-fluid" alt="">
                            <h1 class="h3 mb-3 fw-normal">Log in</h1>

                            <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Username</label>
                            </div>
                            <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            </div>

                            <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                            </div>
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
                            <p class="mt-5 mb-3 text-muted">&copy; WideAwakeSolutions</p>
                        </form>
                    </main>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12"></div>
            </div>
        </div>



    
  </body>
</html>
