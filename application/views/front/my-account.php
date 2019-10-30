
            
            <!-- my-account-page-wrapper start -->
            <div class="my-account-page-wrapper">
                <!-- breadcrumb-area start  -->
                <div class="breadcrumb-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="breadcrumb-list">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active">My Account</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- breadcrumb-area end  -->

                
                <!--My Account Area Strat-->
                <div class="my-account mb-90">
                    <div class="container">
                        <div class="account-dashboard">
                           <div class="dashboard-upper-info">
                               <div class="row align-items-center no-gutters">
                                   <div class="col-lg-3 col-md-12">
                                       <div class="d-single-info">
                                           <p class="user-name">Hello <span>yourmail@info</span></p>
                                           <p>(not yourmail@info? <a href="<?php echo base_url('project/user_logout');?>">Log Out</a>)</p>
                                       </div>
                                   </div>
                                   <div class="col-lg-4 col-md-12">
                                       <div class="d-single-info">
                                           <p>Need Assistance? Customer service at.</p>
                                           <p>admin@devitems.com.</p>
                                       </div>
                                   </div>
                                   <div class="col-lg-3 col-md-12">
                                       <div class="d-single-info">
                                           <p>E-mail them at </p>
                                           <p>support@yoursite.com</p>
                                       </div>
                                   </div>
                                   <div class="col-lg-2 col-md-12">
                                       <div class="d-single-info text-lg-center">
                                           <a class="view-cart" href="<?php echo base_url('project/add_cart'); ?>"><i class="fa fa-cart-plus"></i>view cart</a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-2">
                                  <form>
                                         <table> 
                                         <tr>
    
                                         <td><img style="border:3px solid black; width:150 !important; height:200 !important; " src="<?php echo base_url(); ?>uploads/<?php echo $i['U_Image']; ?>"></td></tr>
                                         <tr>
                                            <td align='center' colspan='8'><input type='submit' name='update_image' class='view' value='Change Profile'></td>
                                         </tr>
                                       </table>
                                     </form>
                                                    <?php

if(isset($_GET['update_image'])){ ?>
  <form action='<?php echo base_url('project/updateimg'); ?>' method='post' enctype='multipart/form-data'>
  <table> 
  <tr>
  
  <td>
  <input type='file' name='U_Image' size='60'></td>
</tr>
<tr><td align='center' colspan='8'><input type='submit' name='update_image' value='Update Now'></td>
  </tr>

</table>
</form>
<?php }
  ?>
                                         </table>
                                         </form>
                                </div>
                                <div class="col-md-12 col-lg-2">
                                    <!-- Nav tabs -->
                                    <ul class="nav flex-column dashboard-list" role="tablist">
                                        <li><a class="nav-link active" data-toggle="tab" href="#dashboard">Dashboard</a></li>
                                        <li> <a class="nav-link" data-toggle="tab" href="#orders">Orders</a></li>
                                        <li><a class="nav-link" data-toggle="tab" href="#Edit-Account">Edit Account</a></li>
                                        <li><a class="nav-link" data-toggle="tab" href="#changepassword">Change Password</a></li>
                                        <li><a class="nav-link" href="<?php echo base_url('project/user_logout');?>">logout</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <!-- Tab panes -->
                                    <div class="tab-content dashboard-content">
                                      <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                   ?>
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
                                        <div id="dashboard" class="tab-pane fade show active">
                                            <h3>Dashboard </h3>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Address</th>
                                                            <th>Email</th>
                                                            <th>Username</th>
                                                            <th>Phone-Number</th>    
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><?php echo $i['U_Name']; ?></td>
                                                            <td><?php echo $i['U_Address']; ?> </td>
                                                            <td><?php echo $i['U_Email']; ?></td>
                                                            <td><?php echo $i['U_Username']; ?></td>
                                                            <td><?php echo $i['U_Mobile']; ?> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                          </div>
                                            
                                        <div id="orders" class="tab-pane fade">
                                            <h3>Orders</h3>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Order</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <th>Actions</th>	 	 	 	
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>May 10, 2018</td>
                                                            <td>Processing</td>
                                                            <td>$25.00 for 1 item </td>
                                                            <td><a class="view" href="cart.html">view</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>May 10, 2018</td>
                                                            <td>Processing</td>
                                                            <td>$17.00 for 1 item </td>
                                                            <td><a class="view" href="cart.html">view</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div id="Edit-Account" class="tab-pane fade">
                                            <h3>Edit Account</h3>
                                            <div class="customer-login-register">
                                    <div class="login-Register-info">
                                        <form method="POST" action="<?php echo base_url('project/updateimg'); ?>" enctype="multipart/form-data">
                                        
                                            <p class="coupon-input form-row-first">
                                                <label>Name<span class="required">*</span></label>
                                                <input type="text" name="U_Name" value="<?php echo $i['U_Name']; ?>" required="">
                                            </p>
                                            <p class="coupon-input form-row-second">
                                                <label>Address<span class="required">*</span></label>
                                                <textarea name="U_Address" rows="5" required=""
                                                style="border: 1px solid #e5e5e5;
                                                       padding: 0 0 0 10px;
                                                       width: 100%;
                                                "><?php echo $i['U_Address']; ?></textarea>
                                            </p>
                                            <p class="coupon-input form-row-third">
                                                <label>Phone Number<span class="required">*</span></label>
                                                <input type="text" name="U_Mobile" value="<?php echo $i['U_Mobile']; ?>" required="">
                                            </p>
                                            
                                            <p class="coupon-input form-row-fourth">
                                                <label>Email <span class="required">*</span></label>
                                                <input type="email" name="U_Email" value="<?php echo $i['U_Email']; ?>" required="">
                                            </p>
                                            <p class="coupon-input form-row-fifth">
                                                <label>Username<span class="required">*</span></label>
                                                <input type="text" name="U_Username" value="<?php echo $i['U_Username']; ?>" required="">
                                            </p>
                                           <div class="clear"></div>
                                            <p>
                                                <button class="button-login" type="submit">UPDATE</button>
                                            </p>
                                        </form>
                                    </div>
                             
                                </div>
                                        </div>
                                        
                                        <div id="changepassword" class="tab-pane fade">
                                            <h3>Change Password </h3>
                                                       <div class="login">
                                                <div class="login-form-container">
                                                    <div class="account-login-form">
                                                        <form method="POST" action="<?php echo base_url('project/updatepass'); ?>">
                                                
                                                            <label>Old Password</label>
                                                            <input name="oldpassword" type="password">
                                                            <label>New Password</label>
                                                            <input name="newpassword" type="password">
                                                            <label>Confirm Password</label>
                                                            <input name="confirmpassword" type="password">
                                                            
                                                            <div class="button-box">
                                                                <button type="submit" class="default-btn">save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                        
                                        
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!--My Account Area End-->
            </div>
            <!-- my-account-page-wrapper end -->
            
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
            
       