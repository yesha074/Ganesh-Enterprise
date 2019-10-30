
            <!-- cart-wrapper start -->
            <div class="cart-wrapper">
                <!-- breadcrumb-area start  -->
                <div class="breadcrumb-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="breadcrumb-list">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('project/cart'); ?>">Home</a></li>
                                    <li class="breadcrumb-item active">cart</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- breadcrumb-area end  -->
                
                <!-- cart-content start -->
                <div class="cart-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                
                                <form method="POST" action="<?php echo base_url('project/addtocart'); ?>" enctype="multipart/form-data">
                                    <div class="cart-table table-responsive">
                                        <table class="table-hover table-min-content shop-table">
                                            <thead>
                                                <tr>
                                                    
                                                    <th class="c-product-thumbnail">Image</th>
                                                    <th class="c-product-name">Product</th>
                                                    <th class="product-price">Price</th>
                                                    <th class="product-quantity">Quantity</th>
                                                    <th class="product-subtotal">Total</th>
                                                    <th class="product-remove">Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 

                                                 $total=0;   
                                                foreach($category_product_master as $i):
                                                    ?>
                                                <tr>
                                                    <td class="c-product-thumbnail"><a href="<?php echo base_url('project/singleproduct/'.$i['CP_Id']); ?>"><img alt="" src="<?php echo base_url(); ?>products_img/<?php echo $i['Product_Image']; ?>"></a></td>
                                                    <td class="c-product-name"><a href="<?php echo base_url('project/singleproduct/'.$i['CP_Id']); ?>"><?php echo $i['CP_Name']; ?></a></td>
                                                    <td class="c-price"><span class="amount"><span><label>Rs/-</label><?php echo $i['CP_Prize']; ?></span></td>
                                                    <td class="product-stock-status"><span><label>Quantity</label>
                                                    <input type="text" size="4" value="<?php echo $i['Quantity']; ?>"  min="0" step="1" class="c-input-text qty text">
                                                    </span></td>
                                                   
                                                 <?php 



                                                  $c=(int)$i['CP_Prize']; 
                                                 $tot=$c*$i['Quantity']; 
                                                 $subtot=array($tot);

                                                 $values=array_sum($subtot);

                                                    $total += $values;
                                                 ?>

                                                    <td class="product-add-to-cart"><span class="total-amount"><span><label>Rs/-</label><?php echo $tot; ?></span></td>
                                                    <td class="product-remove"><a href="<?php echo base_url('project/deleted/'.$i['CP_Id']); ?>" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o"></i></a></td>
                                                </tr>
                                                
                                            <?php endforeach; ?>
                                            </tbody>
                                            <tfoot>
                                                <tr class="table-bottom">
                                                    <td class="actions" colspan="6">
                                                         <a class="checkout-button button alt wc-forward" href="<?php echo base_url('project/index'); ?>">Continue Shopping</a>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>	
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cart-collaterals">
                                    <div class="cart-totals">
                                        <h2>Cart totals</h2>
                                        <table class="cart-totals-table">
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td><span class="amount"><span><label>Rs/- &nbsp;</label><?php echo $total; ?></span></span></td>
                                                </tr>
                                                <tr class="shipping">
                                                    <th> Shipping </th>
                                                    <td>
                                                        Free shipping
                                                        <form action="#">
                                                            <p><a href="#">Calculate shipping</a></p>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th> Total </th>
                                                    <td>
                                                        <strong><span><label>Rs/- &nbsp;</label><?php echo $total; ?></strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            <?php
                                            $U_Id=$this->session->userdata('U_Id');
                                            if($U_Id=="")
                                            {
                                            ?>
                                            <a class="checkout-button button alt wc-forward" href="<?php echo base_url('project/signin'); ?>">
                                            <?php }
                                            else
                                            {?>
                                                <a class="checkout-button button alt wc-forward" href="<?php echo base_url('project/checkout'); ?>">

                                          <?php  }
                                            ?>
                                            Continue to payment</a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- cart-content end -->
            </div>
            <!-- cart-wrapper end -->
            
           
            
            <!-- brand-logo-area start -->
            <div class="brand-logo-area mt-90">
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
       