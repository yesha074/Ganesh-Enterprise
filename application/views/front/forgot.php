            
            <!-- login-register-page-wrapper start -->
            <div class="login-register-page-wrapper">
                <!-- breadcrumb-area start  -->
                <div class="breadcrumb-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="breadcrumb-list">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active">Forgot Password</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- breadcrumb-area end  -->
                
                <!-- login-register-content start -->
                <div class="login-register-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="customer-login-register">
                                    <h3>Forgot Password</h3>
									<?php
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');

                  if($success_msg){
                    ?>
                    <div class="alert alert-success">
                      <?php echo $success_msg; ?>
                    </div>
                  <?php
                  }
                  if($error_msg){
                    ?>
                    <div class="alert alert-danger">
                      <?php echo $error_msg; ?>
                    </div>
                    <?php
                  }
                  ?>
                                    <div class="login-Register-info">
                                        <form method="POST" action="<?php echo base_url('project/forgot'); ?>"> 
                                            <p class="coupon-input form-row-first">
                                                <label>Email Id <span class="required">*</span></label>
                                                <input type="text" name="Email" required="">
                                            </p>
                                            
                                           <div class="clear"></div>
                                            <p>
                                                <button value="Login" name="login" class="button-login" type="submit">Change Password</button>
                                                <a href="<?php echo base_url('project/signin'); ?>" class="lost-password">Remember Login Now?</a>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>                        </div>
                    </div>
                </div>
                <!-- shop-page-main-content end -->
            </div>
            <!-- login-register-page-wrapper end -->
            
            <!-- brand-logo-area start -->
            <div class="brand-logo-area mt-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="brand-logo-active owl-carousel">
                                <div class="single-brand-logo">
                                    <a href="#"><img src="img/brand/1.png" alt=""></a>
                                </div>
                                <div class="single-brand-logo">
                                    <a href="#"><img src="img/brand/2.png" alt=""></a>
                                </div>
                                <div class="single-brand-logo">
                                    <a href="#"><img src="img/brand/3.png" alt=""></a>
                                </div>
                                <div class="single-brand-logo">
                                    <a href="#"><img src="img/brand/4.png" alt=""></a>
                                </div>
                                <div class="single-brand-logo">
                                    <a href="#"><img src="img/brand/5.png" alt=""></a>
                                </div>
                                <div class="single-brand-logo">
                                    <a href="#"><img src="img/brand/6.png" alt=""></a>
                                </div>
                                <div class="single-brand-logo">
                                    <a href="#"><img src="img/brand/5.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-logo-area end -->
            
       