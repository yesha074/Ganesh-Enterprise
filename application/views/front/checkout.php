
            <!-- checkout-wrapper start -->
            <div class="checkout-wrapper">
                <!-- breadcrumb-area start  -->
                <div class="breadcrumb-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="breadcrumb-list">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active">Checkout</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- breadcrumb-area end  -->
                
                <!-- checkout-content start -->
                <div class="checkout-content">
                    <div class="container">
                         
                        <!-- checkout-area start -->
                        <div class="checkout-area">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="POST" action="<?php echo base_url('project/addtoorder'); ?>" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-12">
                                                <div class="checkbox-form">
                                                    <h3 class="shoping-checkboxt-title">Billing Details</h3>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <p class="single-form-row">
                                                                <label>First name <span class="required">*</span></label>
                                                                <input type="text" name="Fname">
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <p class="single-form-row">
                                                                <label>Username<span class="required">*</span></label>
                                                                <input type="text" name="Uname">
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <p class="single-form-row">
                                                                <label>Company name</label>
                                                                <input type="text" name="Cname">
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <p class="single-form-row">
                                                                <label>Country</label>
                                                                <input type="text" name="Country">
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <p class="single-form-row">
                                                                <label>Street address <span class="required">*</span></label>
                                                                <input type="text" name="Address" placeholder="House number and street name">
                                                            </p>
                                                        </div>
                                                        
                                                        <div class="col-lg-12">
                                                            <p class="single-form-row">
                                                                <label>Town / City <span class="required">*</span></label>
                                                                <input type="text" name="City">
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <p class="single-form-row">
                                                                <label>State / Country</label>
                                                                <input type="text" name="State">
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <p class="single-form-row">
                                                                <label>Postcode / ZIP <span class="required">*</span></label>
                                                                <input type="text" name="code">
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <p class="single-form-row">
                                                                <label>Phone</label>
                                                                <input type="text" name="Phone">
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <p class="single-form-row">
                                                                <label>Email address <span class="required">*</span></label>
                                                                <input type="text" name="Email">
                                                            </p>
                                                        </div>        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-12">
                                                <div class="checkout-review-order">
                                                     <form method="POST" action="<?php echo base_url('project/addtoorder'); ?>" enctype="multipart/form-data">
                                                        <h3 style="color:#c97178;" class="shoping-checkboxt-title">Your order</h3>
                                                        <table class="checkout-review-order-table">
                                                            <thead>
                                                                <tr>
                                                                    
                                                                    <th class="product-name">Product</th>
                                                                    <th class="product-total">Total</th>
                                                                </tr>
                                                            </thead>
                                                            <?php 

                                                 $total=0;   
                                                foreach($category_product_master as $i):
                                                    ?>
                                                            <tbody>
                                                                <tr class="cart_item">
                                                                    
                                                                    <td class="product-name"><?php echo $i['CP_Name']; ?><strong class="product-quantity">×<?php echo $i['Quantity']; ?></strong></td>
                                                                     <?php 
                                                                     $c=(int)$i['CP_Prize']; 
                                                                     $tot=$c*$i['Quantity']; 
                                                                     $subtot=array($tot);

                                                                     $values=array_sum($subtot);

                                                                        $total += $values;
                                                                     ?>
                                                                     <td class="product-name"><span><?php echo $tot; ?></span></td>
                                                                </tr>
                                                            </tbody>
                                                            <tfoot>
                                                                <?php endforeach; ?>
                                                               
                                                                <tr class="cart-subtotal">
                                                                    <th>Subtotal</th>
                                                                    <td><span><label>Rs/-</label><?php echo $total; ?></span></td>
                                                                </tr>
                                                                <tr class="shipping">
                                                                    <th>Shipping</th>
                                                                    <td>Free shipping</td>
                                                                </tr>
                                                                <tr class="order-total">
                                                                    <th>Total</th>
                                                                    <td><strong><span><label>Rs/-</label><?php echo $total; ?></span></strong></td>
                                                                </tr>
                                                            </tfoot>
                                                            
                                                        </table>
                                                    </br>
                                                        <div class="checkout-payment">
                                                            
                                                            <button class="button-continue-payment" onclick="<?php echo "alert('Your Order has been Successfully Placed.')"; ?>" type="submit">Place Order</button>
                                                        </div>
                                                        <?php 

                                                 
                                                 $qty=0;   
                                                foreach($category_product_master as $i):
                                                    ?>
                                                        <input type="hidden" name="pid[]" value="<?php echo $i['CP_Id']; ?>">
                                                        <input type="hidden" name="qty[]" value="<?php echo $i['Quantity']; ?>">
                                                        <input type="hidden" name="price[]" value="<?php echo $i['CP_Prize']; ?>">
                                                        <input type="hidden" name="famt[]" value="<?php echo $i['CP_Prize']*$i['Quantity']; ?>">

                                                        

                                                        <?php $qty=$qty+$i['Quantity']; endforeach; ?>
                                                        <input type="hidden" name="total" value="<?php echo $total; ?>">
                                                        <input type="hidden" name="qtyt" value="<?php echo $qty; ?>">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <!-- checkout-area end -->
                       
                    </div>
                </div>
                <!-- checkout-content end -->
            </div>
            <!-- checkout-wrapper end -->
            
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
       