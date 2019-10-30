            
            <!-- single-product-page-wrapper start -->
            <div class="single-product-page-wrapper">
                <!-- breadcrumb-area start  -->
                <div class="breadcrumb-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="breadcrumb-list">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">single product</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- breadcrumb-area end  -->
                
                <!-- single-product-content start -->
                <div class="single-product-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-md-8 col-xs-12">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="single-product-tab">
                                            <div class="zoomWrapper">
                                                <div id="img-1" class="zoomWrapper single-zoom">
                                                    <a href="#">
                                                        <img id="zoom1" src="<?php echo base_url(); ?>products_img/<?php echo $data['Product_Image']; ?>" data-zoom-image="<?php echo base_url(); ?>products_img/<?php echo $data['Product_Image']; ?>" alt="big-1">
                                                    </a>
                                                </div>
                                                
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="single-product-info-area">
                                            <h2 class="product-name"><?php echo $data['CP_Name'];?></h2>
                                            <div class="ratings">
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-desc">
                                                <p><?php echo $data['CP_Description'];?></p>
                                            </div>
                                            <div class="product-price-box">
                                               <span class="new-price"><span><label>Rs/-</label><?php echo $data['CP_Prize'];?></span>
                                               <span class="old-price"><?php echo $data['CP_Old_Prize'];?></span>
                                            </div>
                                            <div class="quick-add-to-cart">
                                                <div class="modal-cart">
                                                  <?php  $U_Id=$this->session->userdata('U_Id'); ?>
                                                    <form method="POST" action="<?php
                                                    if($U_Id=="")
                                            {
                                                    echo base_url('project/signin'); 
                                                }
                                                else {
                                                     echo base_url('project/addtocart');  } ?>">
                                                    <div class="quantity">
                                                        <label>Quantity</label>
                                                        <div class="cart-plus-minus">
                                                            <input type="text" name="Quantity" value="1" class="cart-plus-minus-box">
                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div><div class="inc qtybutton"><i class="fa fa-angle-up"></i></div></div>
                                                    </div>
                                                    <input type="hidden" name="CP_Id" value="<?php echo $this->uri->segment(3); ?>">
                                                    <button type="submit" class="add-to-cart">Add to cart</button>
                                                </form>
                                           </div>
                                            <div class="product-meta">
                                                <span class="posted-meta-inner">
                                                    Categories: 
                                                    <a href="<?php echo base_url('project/shop/5'); ?>">Chairs</a>,
                                                    <a href="<?php echo base_url('project/shop/10'); ?>">Tables</a>,
                                                    <a href="<?php echo base_url('project/shop/12'); ?>">Beds</a>,
                                                    <a href="<?php echo base_url('project/shop/11'); ?>">Wardrobes</a>,
                                                    <a href="<?php echo base_url('project/shop/9'); ?>">Stools</a>,
                                                    <a href="<?php echo base_url('project/shop/6'); ?>">Dining-sets</a>,
                                                    <a href="<?php echo base_url('project/shop/8'); ?>">Sofas</a>.
                                                </span>
                                            </div>
                                            <div class="single-product-sharing">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#" ><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="discription-tab">
                                            <!--discription-tab-menu start-->
                                            <div class="discription-tab-menu">
                                                <ul class="nav" role="tablist">
                                                    <li class="active"><a data-toggle="tab" href="#description">Description</a></li>
                                                    <li><a data-toggle="tab" href="#review">Reviews (1)</a></li>
                                                </ul>
                                            </div>
                                            <!--discription-tab-menu end-->
                                            <!--discription-tab-content start-->
                                            <div class="discription-tab-content">
                                                <div class="tab-content">
                                                    <div id="description" class="tab-pane fade in active">
                                                        <div class="description-content">
                                                            <p><?php echo $data['CP_Description'];?></p>
                                                                <p><?php echo nl2br($data['CP_Size']) ;?></p>
                                                        </div>
                                                    </div>
                                                    <div id="review" class="tab-pane fade">
                                                        <div class="review-comment">
                                                            <h2 class="reviews-title">1 review for <span>Headphone ipsum</span></h2>
                                                            <ul>
                                                                <li>
                                                                    <div class="product-comment">
                                                                        <img alt="" src="img/comment-author/author1.jpg">
                                                                        <div class="product-comment-content">
                                                                            <p><strong>admin</strong>
                                                                                -
                                                                                <span>July 19, 2018</span>
                                                                                <span class="product-comments-rating">
                                                                                    <i class="fa fa-star"></i>	
                                                                                    <i class="fa fa-star"></i>	
                                                                                    <i class="fa fa-star"></i>	
                                                                                    <i class="fa fa-star"></i>	
                                                                                    <i class="fa fa-star-o"></i>
                                                                                </span>
                                                                            </p>
                                                                            <div class="description">
                                                                                <p>roadthemes</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="review-form-wrapper">
                                                                <span class="comment-reply-title">Add a review </span>
                                                                <form class="review-form" action="#">
                                                                        <p class="comment-notes">
                                                                            <span id="email-notes">Your email address will not be published.</span>
                                                                            Required fields are marked
                                                                            <span class="required">*</span>
                                                                        </p>
                                                                        <div class="comment-form-rating">
                                                                            <p><label>Your rating</label></p>
                                                                            <div class="rating">
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="input-reviwer">
                                                                            <div class="comment-form-comment single-input-reviwer">
                                                                                <label>Your review <span class="required">*</span></label>
                                                                                <textarea rows="8" cols="40" name="message"></textarea>
                                                                            </div>
                                                                            <div class="review-comment-form-author single-input-reviwer">
                                                                                <label>Name <span class="required">*</span></label>
                                                                                <input type="text" required="required">
                                                                            </div>
                                                                            <div class="review-comment-form-email single-input-reviwer">
                                                                                <label>Email <span class="required">*</span></label>
                                                                                <input type="text" required="required">
                                                                            </div>
                                                                            <div class="comment-submit">
                                                                                <button class="form-button" type="submit">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <!--discription-tab-content end-->
                                        </div>
                                    </div>
                                </div>
                                
                                    
                                </div>
                                <div class="related-products-area mt-40">
                                    <!-- product-area start -->
                                    <div class="product-area pb-30">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="section-titel">
                                                    <h2>You might also like</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper">
                                            <div class="row">
                                                <div class="product-active owl-carousel">

                                                    
                                                        <?php 
                                                                foreach($related_product as $i):
                                                            ?>
                                                            <div class="col-lg-3">
                                                        <!-- single-product start -->
                                                        <div class="single-product">
                                                            <div class="product-image">
                                                                <a href="<?php echo base_url('project/singleproduct/'); ?><?php echo $i['CP_Id'];?>">
                                                                        <img src="<?php echo base_url(); ?>products_img/<?php echo $i['Product_Image']; ?>" alt="">
                                                                </a>
                                                                <span class="sale-sticker">New</span>
                                                                <div class="product-action">
                                    
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="single-product-info">
                                                                <h3><a href="<?php echo base_url('project/singleproduct/'); ?><?php echo $i['CP_Id'];?>"><?php echo $i['CP_Name'];?></a></h3>
                                                                <div class="product-price-box">
                                                                    <span class="old-price"><?php echo $i['CP_Old_Prize'];?></span>
                                                                    <span class="new-price"><span><label>Rs/-</label><?php echo $i['CP_Prize'];?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                      
                                                    </div>
                                                   
                                                      <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-area end -->
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-12">
                                <!-- one-sale-area start -->
                                <div class="one-sale-area">
                                    <div class="secton-titel-three">
                                        <h3> One sale</h3>
                                    </div>
                                    <div class="category-item-active owl-carousel">
                                        <div class="category-item-inner">
                                            <!-- category-item start -->
                                            <div class="category-item">
                                                <div class="product-img">
                                                    <a href="#"><img src="img/product/s1.jpg" alt=""></a>
                                                </div>
                                                <div class="single-product-info">
                                                    <h3><a href="shop.html">Autumn on the new middle-aged men's clothes hot V-neck long-sleeved sweater</a></h3>
                                                    <div class="product-price-box">
                                                        <span class="new-price">$50.99</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- category-item end -->
                                            <!-- category-item start -->
                                            <div class="category-item">
                                                <div class="product-img">
                                                    <a href="#"><img src="img/product/s2.jpg" alt=""></a>
                                                </div>
                                                <div class="single-product-info">
                                                    <h3><a href="shop.html">Comfortable casual Slim O neck long-sleeved sweater</a></h3>
                                                    <div class="product-price-box">
                                                        <span class="old-price">$20.50</span>
                                                        <span class="new-price">$10.99</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- category-item end -->
                                            <!-- category-item start -->
                                            <div class="category-item">
                                                <div class="product-img">
                                                    <a href="#"><img src="img/product/s3.jpg" alt=""></a>
                                                </div>
                                                <div class="single-product-info">
                                                    <h3><a href="shop.html">2018 Mens Turtleneck Sweaters Solid green Men's Jumpers Knitted Pullover </a></h3>
                                                    <div class="product-price-box">
                                                        <span class="old-price">$26.30</span>
                                                        <span class="discount">-10%</span>
                                                        <span class="new-price">$24.03</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- category-item end -->
                                        </div>
                                        <div class="category-item-inner">
                                            <!-- category-item start -->
                                            <div class="category-item">
                                                <div class="product-img">
                                                    <a href="#"><img src="img/product/s5.jpg" alt=""></a>
                                                </div>
                                                <div class="single-product-info">
                                                    <h3><a href="shop.html">Autumn on the new middle-aged men's clothes hot V-neck long-sleeved sweater</a></h3>
                                                    <div class="product-price-box">
                                                        <span class="new-price">$50.99</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- category-item end -->
                                            <!-- category-item start -->
                                            <div class="category-item">
                                                <div class="product-img">
                                                    <a href="#"><img src="img/product/s6.jpg" alt=""></a>
                                                </div>
                                                <div class="single-product-info">
                                                    <h3><a href="shop.html">Comfortable casual Slim O neck long-sleeved sweater</a></h3>
                                                    <div class="product-price-box">
                                                        <span class="old-price">$20.50</span>
                                                        <span class="new-price">$10.99</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- category-item end -->
                                        </div>
                                    </div>
                                    <!-- one-sale-area end -->
                                    <div class="single-categories-1 tag-area mt-30">
                                        <div class="secton-titel-three">
                                            <h3>Tags</h3>
                                        </div>
                                        <div class="tagcloud mt-30">
                                            <a href="#">asian</a>
                                            <a href="#">brown</a>
                                            <a href="#">euro</a>
                                            <a href="#">fashion</a>
                                            <a href="#">france</a>
                                            <a href="#">hat</a>
                                            <a href="#">t-shirt</a>
                                            <a href="#">teen</a>
                                            <a href="#">travel</a>
                                            <a href="#">white</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product-content end -->
            </div>
                
            </div>
            <!-- single-product-page-wrapper end -->
            

            
       