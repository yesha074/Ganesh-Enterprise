            
            <!-- login-register-page-wrapper start -->
            <div class="login-register-page-wrapper">
                <!-- breadcrumb-area start  -->
                <div class="breadcrumb-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="breadcrumb-list">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active">Login - Register</li>
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
                                    <h3>Login</h3>
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
                                    <div class="login-Register-info">
                                        <form method="POST" action="<?php echo base_url('project/login_user'); ?>"> 
                                            <p class="coupon-input form-row-first">
                                                <label>Username <span class="required">*</span></label>
                                                <input type="text" name="U_Username" required="">
                                            </p>
                                            <p class="coupon-input form-row-last">
                                                <label>password <span class="required">*</span></label>
                                                <input type="password" name="U_Password" required="">
                                            </p>
                                           <div class="clear"></div>
                                            <p>
                                                <button value="Login" name="login" class="button-login" type="submit">Login</button>
                                                
                                                <a href="<?php echo base_url('project/forgot_password'); ?>" class="lost-password">Lost your password?</a>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6  col-md-6 col-sm-12">
                                <div class="customer-login-register">
                                    <h3>Register</h3>
									<?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                   ?>

                                    <div class="login-Register-info">
                                        <form method="POST" action="<?php echo base_url('project/register_user'); ?>" enctype="multipart/form-data">
										
											<p class="coupon-input form-row-first">
                                                <label>Name<span class="required">*</span></label>
                                                <input type="text" name="U_Name" required="">
                                            </p>
											<p class="coupon-input form-row-second">
                                                <label>Address<span class="required">*</span></label>
                                                <textarea name="U_Address" rows="5" required=""
												style="border: 1px solid #e5e5e5;
													   padding: 0 0 0 10px;
													   width: 100%;
												"></textarea>
                                            </p>
											<p class="coupon-input form-row-third">
                                                <label>Phone Number<span class="required">*</span></label>
                                                <input type="text" name="U_Mobile" required="">
                                            </p>
											
                                            <p class="coupon-input form-row-fourth">
                                                <label>Email <span class="required">*</span></label>
                                                <input type="email" name="U_Email" required="">
                                            </p>
											<p class="coupon-input form-row-fifth">
                                                <label>Username<span class="required">*</span></label>
                                                <input type="text" name="U_Username" required="">
                                            </p>
                                            <p class="coupon-input form-row-sixth">
                                                <label>password <span class="required">*</span></label>
                                                <input type="password" name="U_Password" required="">
                                            </p>
											<p class="coupon-input form-row-seventh">
                                                <label>Confirm password <span class="required">*</span></label>
                                                <input type="password" name="cpassword" required="">
                                            </p>
											<p class="coupon-input form-row-eight">
                                                <label><span class="required"></span></label>
                                                <input type="hidden" name="U_Type" value="U">
                                            </p>
											 <p class="coupon-input form-row-nine">
                                                <label>Image<span class="required">*</span></label>
                                                <input type="file" name="U_Image" required>
                                            </p>
											<p class="coupon-input form-row-last">
                                                <label><span class="required"></span></label>
                                                <input type="hidden" name="U_Block" value="false">
                                            </p>
											
                                           <div class="clear"></div>
                                            <p>
                                                <button class="button-login" type="submit">Register</button>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            
       