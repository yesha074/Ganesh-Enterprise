<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from demo.devitems.com/elly-v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Feb 2019 04:30:52 GMT -->
<head>
    <style>
        .center {
  display: block;
  margin-left: 10;
  margin-right: auto;
  margin-top:-40px;
}
.cen:hover 
{
    color:white;
    font-weight: bold;
   
}
.cen
{
    display: block;
    margin-left: 10;
  margin-right: auto;
  margin-top:15px;
  color:white;
  font-size: 20px;

}
    </style>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home || Ganesh Enterprise</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>img/favicon.ico">  
    <!-- all CSS hear -->   
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/nice-select.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/slick.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/mainmenu.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/combo.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/responsive.css">  
        <script src="<?php echo base_url(); ?>js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. Thanks</p>
        <![endif]-->
        <!-- Add your application content here -->
        
        <div class="wrapper home-1">
            <header>
                <!-- header-top start -->
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-8">
                                <!-- support-area start -->
                                <div class="support-area">
                                    <div class="single-support">
                                        <div class="support-icon">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                        <div class="support-description">
                                            <p>Free delivery guarantee</p>
                                        </div>
                                    </div>
                                    <div class="single-support">
                                        <div class="support-icon">
                                            <i class="fa fa-lock"></i>
                                        </div>
                                        <div class="support-description">
                                            <p>Secure Shopping</p>
                                        </div>
                                    </div>
                                    <div class="single-support">
                                        <div class="support-icon">
                                            <i class="fa fa-history"></i>
                                        </div>
                                        <div class="support-description">
                                            <p>14 Day Returns</p>
                                        </div>
                                    </div>
                                    <div class="single-support">
                                        <div class="support-icon">
                                            <i class="fa fa-file-text-o"></i>
                                        </div>
                                        <div class="support-description">
                                            <p>Track Your Order</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- support-area end -->
                            </div>
                            <div class="col-lg-5 col-md-4">
                                <div class="top-right-wrapper">
                                   
                                    <!-- shopping-cart start -->
                                    <div class="shopping-cart">
                                        
                                            
                                            <a  class="cen" href="<?php echo base_url('project/add_cart'); ?>"><span>Your bag</span><span>&nbsp;&nbsp;<i class="fa fa-cart-plus"></i></span>
                                            </a>
                                            
                                        
                                    </div>
                                    <!-- shopping-cart end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- header-top end -->
                <!-- header-mid-area start -->
                <div class="header-mid-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <!-- logo start -->
                                <div class="logo">
                                    <a href="<?php echo base_url('index.php');?>"><img src="<?php echo base_url(); ?>products_img/image.jpg" alt="" width="200" height="100" class="center"></a>
                                </div>
                                <!-- logo end -->
                            </div>
                            <div class="col-xs-12 col-md-8 col-lg-8">
                                <div class="mid-right-wrapper">
                                    <div class="user-info-top">
                                        <ul>
                                            <?php
                                            $U_Id=$this->session->userdata('U_Id');
                                            $U_Email=$this->session->userdata('U_Email');
                                            if($U_Id=="")
                                            {
                                            ?>
                                            <li><a href="<?php echo base_url('project/index'); ?>">Welcome, Guest</a></li>
                                        <?php }
                                        else { ?>
                                            <li><a href="<?php echo base_url('project/index'); ?>">Welcome,<b style="color:#c97178;"><?php echo $U_Email; ?></b></a></li>
                                       <?php } ?>
                                            <?php
                                            $U_Id=$this->session->userdata('U_Id');
                                            if($U_Id=="")
                                            {
                                            ?>
                                            <li><a href="<?php echo base_url('project/signin'); ?>">Sign in</a></li>
                                            <?php } else { ?>
                                            <li><a href="<?php echo base_url('project/myaccount'); ?>">My Account</a></li>
                                        <?php } ?>
                                            <li><a href="<?php echo base_url('project/checkout'); ?>" class="checkout">Checkout</a></li>
                                        </ul>
                                    </div>
                                    <div class="search-area">
                                        <form action="<?php echo base_url('project/search'); ?>"  method="post" enctype="multipart/form-data">
                                            <input type="search" name="search" placeholder="Search our catalog" required="">
                                            <button type="submit" name="searches"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- header-mid-area end -->
                <!-- menu-arae start -->
                <div id="stickymenu" class="main-menu-area solidblockmenu">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-menu display-none">
                                    <nav>
                                         <ul>
                                            <li class="active"><a href="<?php echo base_url(); ?>">Home</a>
                                            </li>
                                            <li>
                                             <?php  
        $db = mysqli_connect('localhost', 'root', '', 'ganesh_enterprise');
$r1 = mysqli_query($db, "SELECT * FROM category_master where C_Parent_Id = 1 and C_Id != 1"); 
         while ($row1 = mysqli_fetch_array($r1))
          { 
                     ?>
                    <a href="#"><li>
                                     <?php echo $row1['C_Name']; ?><i class="fa fa-angle-down"></i></a>
                                    
                                        <ul class="dropdown-menu">
                                            <li>
                        <?php 
                 $r2 = mysqli_query($db, "SELECT * FROM category_master where C_Parent_Id = $row1[C_Id]"); 
                        while ($row2 = mysqli_fetch_array($r2)) 
                                 {?>
                                   
                                     <a href="<?php echo base_url(); ?>project/shop/<?php echo $row2['C_Id']; ?>"><?php echo $row2['C_Name']; ?></a>
                           
                                        
 
                             <?php  } ?>
                         </li>
</ul>
                         
    <?php } ?>
</li>
</li>
                                            <li><a href="<?php echo base_url('project/aboutus'); ?>">About Us</a></li>
                                            <li><a href="<?php echo base_url('project/contactus'); ?>">Contact Us</a></li>
                                            <li><a href="<?php echo base_url('project/contactus'); ?>">Our Services</a></li>
                                        </ul>
                                  
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Mobile Menu Area Start -->
                                <div class="mobile-menu-area hidden-md hidden-lg">
                                    <div class="mobile-menu">
                                        <nav id="mobile-menu-active">
                                            <ul>
                                                <li class="active"><a href="index.html">Home</a>
                                                    <ul>
                                                        <li><a href="index-2.html">Home Page 2</a></li>
                                                        <li><a href="index-3.html">Home Page 3</a></li>
                                                        <li><a href="index-4.html">Home Page 4</a></li>
                                                        <li><a href="index-5.html">Home Page 5</a></li>
                                                        <li><a href="index-6.html">Home Page 6</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">pages</a>
                                                    <ul>
                                                        <li><a href="#">Pages</a>
                                                            <ul>
                                                                <li><a href="about.html">About us</a></li>
                                                                <li><a href="frequently-question.html">FAQ</a></li>
                                                                <li><a href="my-account.html">my account</a></li>
                                                                <li><a href="error404.html">Error 404</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="blog.html">Blog</a>
                                                            <ul>
                                                                <li><a href="blog-fullwidth.html">None Sidebar </a></li>
                                                                <li><a href="blog-left.html">Sidebar Left </a></li>
                                                                <li><a href="blog.html">Sidebar Right </a></li>
                                                                <li><a href="blog-details.html">blog details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Shop</a>
                                                            <ul>
                                                                <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                                <li><a href="shop-right.html">Sidebar Right </a></li>
                                                                <li><a href="shop.html">List View </a></li>
                                                                <li><a href="shop.html">Trousers</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Baking Cups</a>
                                                            <ul>
                                                                <li><a href="cart.html">cart page</a></li>
                                                                <li><a href="wishlist.html">wishlist page</a></li>
                                                                <li><a href="checkout.html">checkout page</a></li>
                                                                <li><a href="login-register.html">login & register</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.html">Men</a>
                                                    <ul>
                                                        <li><a href="#">Blouse</a>
                                                            <ul>
                                                                <li><a href="shop-fullwidth.html">Aprons</a></li>
                                                                <li><a href="shop-right.html">Accessories</a></li>
                                                                <li><a href="shop.html">Cake Moulds</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="shop.html">Accessories</a>
                                                            <ul>
                                                                <li><a href="shop-fullwidth.html">Cake Moulds</a></li>
                                                                <li><a href="shop-right.html">Cake Pans</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="shop.html">Trousers</a>
                                                            <ul>
                                                                <li><a href="shop.html">Blouse</a></li>
                                                                <li><a href="shop.html">Bakeware</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.html">women</a></li>
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="contact.html">Contact Us</a></li>
                                            </ul>
                                        </nav>              
                                    </div>
                                </div>
                                <!-- Mobile Menu Area End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-arae end -->
            </header>