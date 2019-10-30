<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modernize an Admin Panel Category Bootstrap Responsive Web Template | Login :: w3layouts</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="<?php echo base_url(); ?>admin/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="<?php echo base_url(); ?>admin/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Fontawesome Css -->
    <link href="<?php echo base_url(); ?>admin/css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <div class="bg-page py-5">
        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-white">Login</h2>
            <!--// main-heading -->
			<?php
              $success_msg= $this->session->flashdata('success_msg');
              $error_msga= $this->session->flashdata('error_msga');

                  if($success_msg){
                    ?>
                    <div class="alert alert-success">
                      <?php echo $success_msg; ?>
                    </div>
                  <?php
                  }
                  if($error_msga){
                    ?>
                    <div class="alert alert-danger">
                      <?php echo $error_msga; ?>
                    </div>
                    <?php
                  }
                  ?>
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                <form action="<?php echo base_url('admin/login_user'); ?>" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="name" class="form-control" name="U_Username" placeholder="Enter Username" required="">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="U_Password" placeholder="Password" required="">
                    </div>
                    <div class="d-sm-flex justify-content-between">
                        <div class="form-check col-md-6 text-sm-left text-center">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <div class="forgot col-md-6 text-sm-right text-center">
                            <a href="forgot.html">forgot password?</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Login</button>
                </form>
                <p class="paragraph-agileits-w3layouts mt-4">Don't have an account
                    <a href="register.html">Create an account</a>
                </p>
                <h1 class="paragraph-agileits-w3layouts mt-2">
                    <a href="index.html">Back to Home</a>
                </h1>
            </div>

            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018 Modernize . All Rights Reserved | Design by
                    <a href="http://w3layouts.com/"> W3layouts </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='<?php echo base_url(); ?>admin/js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Js for bootstrap working-->
    <script src="<?php echo base_url(); ?>admin/js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>