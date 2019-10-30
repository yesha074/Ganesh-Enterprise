            
            <!-- shop-page-wrapper start -->
            <div class="shop-page-wrapper">
                <div class="shop-category-area shop-category-bg">
                    <!-- shop-category-titel start-->
                    <div class="shop-category-titel">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Furniture</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop-category-titel end -->
                </div>
                <!-- breadcrumb-area start  -->
                <div class="breadcrumb-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="breadcrumb-list">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Shop</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- breadcrumb-area end  -->
                
                <!-- shop-page-main-content start -->
                <div class="shop-page-main-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 order-2 order-lg-1">
                                <!-- sidebar-shop start -->
                                <div class="sidebar-shop">
                                    <!-- sinlge-block-categories start -->
                                    <div class="sinlge-block-categories mb-30">
                                        <div class="secton-titel-three">
                                            <h3 class="has-sub"><a href="#">Lingerie</a></h3>
                                        </div>
                                        <!-- category-sub-menu start -->
                                        <div class="category-sub-menu">
                                            <ul>
                                                <li class="has-sub"><a href="<?php echo base_url('project/shop'); ?>">Beds</a>
                                                    <ul>
                                                        <?php
                                                        foreach($C_Id as $cate):
                                                        ?>
                                                        <li><a href="<?php echo base_url(''); ?>project/beds/<?php echo $cate['C_Id']; ?>"><?php echo $cate['C_Name']; ?></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </li>
                                                <li class="has-sub"><a href="#">Baking Mats</a>
                                                    <ul>
                                                        <li><a href="#">Accessories</a></li>
                                                        <li><a href="#">Aprons</a></li>
                                                        <li><a href="#">Tea Accessories</a></li>
                                                        <li><a href="#">Mandoline Slicers</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-sub"><a href="#">Aprons</a>
                                                    <ul>
                                                        <li><a href="#">Pants</a></li>
                                                        <li><a href="#"> Pastry Mats</a></li>
                                                        <li><a href="#"> Tableware</a></li>
                                                        <li><a href="#">Trousers</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-sub"><a href="#">Baking Cups</a>
                                                    <ul>
                                                        <li><a href="#">Trousers</a></li>
                                                        <li><a href="#">Tops</a></li>
                                                        <li><a href="#"> Baking</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- category-sub-menu end -->
                                    </div>
                                    <!-- sinlge-block-categories end -->
                                    <!-- sinlge-block-categories start -->
                                    <div class="sinlge-block-categories">
                                        <div class="secton-titel-three">
                                            <h3>Filter By</h3>
                                        </div>
                                        <button class="btn-clear-all">Clear all</button>
                                        <!-- filter-sub-area start -->
                                        <div class="filter-sub-area">
                                             <h5  class="filter-sub-titel">Price</h5>
                                             <div class="price-checkbox">
                                                 <form action="#">
                                                     <ul> 
                                                         <li><input type="radio" checked="" name="price-filter"><a href="#">$10.00 - $11.00 (1)</a></li>
                                                         <li><input type="radio" name="price-filter"><a href="#">$14.00 - $15.00 (2)</a></li>
                                                         <li><input type="radio" name="price-filter"><a href="#">$16.00 - $17.00 (2)</a></li>
                                                         <li><input type="radio" name="price-filter"><a href="#">$18.00 - $19.00 (1)</a></li>
                                                         <li><input type="radio" name="price-filter"><a href="#"> $24.00 - $28.00 (5)</a></li>
                                                         <li><input type="radio" name="price-filter"><a href="#"> $30.00 - $32.00 (1)</a></li>
                                                         <li><input type="radio" name="price-filter"><a href="#"> $50.00 - $53.00 (2) </a></li>
                                                     </ul>
                                                 </form>
                                             </div>
                                         </div>
                                        <!-- filter-sub-area end -->
                                        <!-- filter-sub-area start -->
                                        <div class="filter-sub-area">
                                             <h5 class="filter-sub-titel">Size</h5>
                                             <div class="size-checkbox">
                                                 <form action="#">
                                                     <ul>
                                                         <li><input type="checkbox" name="product-size"><a href="#">S (1)</a></li>
                                                         <li><input type="checkbox" name="product-size"><a href="#">M (4)</a></li>
                                                         <li><input type="checkbox" name="product-size"><a href="#">L (2)</a></li>
                                                     </ul>
                                                 </form>
                                             </div>
                                         </div>
                                        <!-- filter-sub-area end -->
                                        <!-- filter-sub-area start -->
                                        <div class="filter-sub-area">
                                             <h5 class="filter-sub-titel">Color</h5>
                                             <div class="color-categoriy">
                                                 <form action="#">
                                                     <ul>
                                                         <li><span class="white"></span><a href="#">White (1)</a></li>
                                                         <li><span class="black"></span><a href="#">Black (1)</a></li>
                                                         <li><span class="Orange"></span><a href="#">Orange (3) </a></li>
                                                         <li><span class="Blue"></span><a href="#">Blue  (2) </a></li>
                                                     </ul>
                                                 </form>
                                             </div>
                                         </div>
                                        <!-- filter-sub-area end -->
                                        <!-- filter-sub-area start -->
                                        <div class="filter-sub-area">
                                             <h5 class="filter-sub-titel">Compositions</h5>
                                             <div class="categori-checkbox">
                                                 <form action="#">
                                                     <ul>
                                                         <li><input type="checkbox" name="product-categori"><a href="#">Cotton (5)</a></li>
                                                         <li><input type="checkbox" name="product-categori"><a href="#">Polyester (4)</a></li>
                                                         <li><input type="checkbox" name="product-categori"><a href="#">Viscose (4)</a></li>
                                                     </ul>
                                                 </form>
                                             </div>
                                         </div>
                                        <!-- filter-sub-area end -->
                                    </div>
                                    <!-- sinlge-block-categories end -->
                                    <!-- sinlge-block-categories start -->
                                    <div class="sinlge-block-categories mt-30">
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
                                        </div>
                                        <!-- one-sale-area end -->
                                    </div>
                                    <!-- sinlge-block-categories end -->
                                </div>
                                <!-- sidebar-shop end -->
                            </div>
                            <div class="col-lg-9 order-1 order-lg-2">
                                <!-- archive-border-area start -->
                                <div class="archive-border-area">
                                    <!-- shop-item-filter start -->
                                    <div class="shop-item-filter">
                                        <!-- shop-item-filter-list start -->
                                        <ul role="tablist" class="nav shop-item-filter-list">
                                            <li role="presentation" class="active"><a href="#grid-view" aria-controls="grid-view" role="tab" data-toggle="tab" class="active show" aria-selected="true"><i class="fa fa-list-ul"></i></a></li>
                                            <li role="presentation"><a href="#list-view" aria-controls="list-view" role="tab" data-toggle="tab"><i class="fa fa-bars"></i></a></li>
                                        </ul>
                                        <!-- shop-item-filter-list end -->
                                        <p>There is 1 product.</p>
                                        <!-- filter-form start -->
                                        <form class="filter-form" action="#">
                                            <div class="orderby-wrapper">
                                                <label>Sort By : </label>
                                                <span class="orderby-select">
                                                    <select class="orderby nice-select right">
                                                        <option value="popularity">Sort by popularity</option>
                                                        <option value="rating">Sort by average rating</option>
                                                        <option value="date">Sort by newness</option>
                                                        <option value="price">Sort by price: low to high</option>
                                                        <option value="price-desc">Sort by price: high to low</option>
                                                    </select>
                                                </span>
                                            </div>
                                        </form>
                                        <!-- filter-form end -->
                                    </div>
                                    <!-- shop-item-filter start -->
                                    
                                    
                                    <!-- shop-products-wrapper start -->
                                    <div class="shop-products-wrapper">
                                        <div class="tab-content">
                                            <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                                <div class="shop-product-area">
                                                    <div class="row">
                                                        <?php 
                                                        
                                          foreach($brand as $i):

                                           
                                                            ?>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                           
                                                            <!-- single-product start -->
                                                            <div class="single-product">
                                                                <div class="product-image">
                                                                    <a href=" <?php echo base_url('project/singleproduct/'); ?><?php echo $i['CP_Id'];?>">
                                                                        <img src="<?php echo base_url(); ?>products_img/<?php echo $i['Product_Image']; ?>" alt="">
                                                                    </a>
                                                                    <span class="sale-sticker">New</span>
                                                                   
                                                                </div>
                                                                <div class="single-product-info">
                                                                    <h3><a href="<?php echo base_url('project/singleproduct/'); ?><?php echo $i['CP_Id'];?>"><?php echo $i['CP_Name'];?></a></h3>
                                                                    <div class="product-price-box">
                                                                        <span class="old-price"><?php echo $i['CP_Old_Prize'];?></span>
                                                                        <span class="new-price"><span><label>Rs/-</label><?php echo $i['CP_Prize'];?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- single-product end -->
                                         </div>
                                                             <?php endforeach;
                                                           
                                                           ?>

                                                    </div>
                                                </div>
                                            </div>
                                            <div id="list-view" class="tab-pane fade" role="tabpanel">
                                                <!-- list-view-areat start -->
                                                <div class="list-view-area mt-30">
                                                   <div class="row">
                                                       <div class="col-lg-4 col-md-6">
                                                           <div class="product-list">
                                                               <div class="product-image">
                                                                    <a href="single-product.php">
                                                                        <img src="img/product/7.jpg" alt="">
                                                                    </a>
                                                                    <span class="sale-sticker">New</span>
                                                                    <div class="product-action">
                                                                        <a href="#" class="quick-view" data-toggle="modal" data-target="#productModal">
                                                                            <i class="fa fa-search"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                           </div>
                                                       </div>
                                                       <div class="col-lg-8 col-md-6">
                                                           <div class="single-product-info">
                                                                <h3><a href="single-product.html">The new autumn and winter 2018 </a></h3>
                                                                <div class="rating-box">
                                                                   <i class="fa fa-star"></i>
                                                                   <i class="fa fa-star"></i>
                                                                   <i class="fa fa-star"></i>
                                                                   <i class="fa fa-star"></i>
                                                                   <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="product-price-box">
                                                                    <span class="new-price">$25.99</span>
                                                                </div>
                                                                <p>Video in your pocket. Its the small iPod with one very big idea: video. The worlds most popular music player now lets you enjoy movies, TV shows, and more on a two-inch display thats 65% brighter than before.
                                                                Cover Flow.Brow..</p>
                                                                <button class="button btn-cart">Add to Cart</button>
                                                            </div>
                                                       </div>    
                                                   </div>
                                                   </div>
                                                <!-- list-view-area end -->
                                                <!-- list-view-areat start -->
                                                <div class="list-view-area mt-30">
                                                   <div class="row">
                                                       <div class="col-lg-4 col-md-6">
                                                           <div class="product-list">
                                                               <div class="product-image">
                                                                    <a href="single-product.html">
                                                                        <img src="img/product/2.jpg" alt="">
                                                                    </a>
                                                                    <span class="sale-sticker">New</span>
                                                                    <div class="product-action">
                                                                        <a href="#" class="quick-view" data-toggle="modal" data-target="#productModal">
                                                                            <i class="fa fa-search"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                           </div>
                                                       </div>
                                                       <div class="col-lg-8 col-md-6">
                                                           <div class="single-product-info">
                                                                <h3><a href="single-product.html">The new autumn and winter 2018 </a></h3>
                                                                <div class="rating-box">
                                                                   <i class="fa fa-star"></i>
                                                                   <i class="fa fa-star"></i>
                                                                   <i class="fa fa-star"></i>
                                                                   <i class="fa fa-star"></i>
                                                                   <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="product-price-box">
                                                                    <span class="new-price">$25.99</span>
                                                                    <span class="old-price">$30.99</span>
                                                                    
                                                                </div>
                                                                <p>Video in your pocket. Its the small iPod with one very big idea: video. The worlds most popular music player now lets you enjoy movies, TV shows, and more on a two-inch display thats 65% brighter than before.
                                                                Cover Flow.Brow..</p>
                                                                <button class="button btn-cart">Add to Cart</button>
                                                            </div>
                                                       </div>    
                                                   </div>
                                                   </div>
                                                <!-- list-view-area end -->
                                                <!-- list-view-areat start -->
                                                <div class="list-view-area mt-30">
                                                   <div class="row">
                                                       <div class="col-lg-4 col-md-6">
                                                           <div class="product-list">
                                                               <div class="product-image">
                                                                    <a href="single-product.html">
                                                                        <img src="img/product/5.jpg" alt="">
                                                                    </a>
                                                                    <span class="sale-sticker">New</span>
                                                                    <div class="product-action">
                                                                        <a href="#" class="quick-view" data-toggle="modal" data-target="#productModal">
                                                                            <i class="fa fa-search"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                           </div>
                                                       </div>
                                                       <div class="col-lg-8 col-md-6">
                                                           <div class="single-product-info">
                                                                <h3><a href="single-product.html">The new autumn and winter 2018 </a></h3>
                                                                <div class="rating-box">
                                                                   <i class="fa fa-star"></i>
                                                                   <i class="fa fa-star"></i>
                                                                   <i class="fa fa-star"></i>
                                                                   <i class="fa fa-star"></i>
                                                                   <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="product-price-box">
                                                                    <span class="new-price">$27.99</span>
                                                                </div>
                                                                <p>Video in your pocket. Its the small iPod with one very big idea: video. The worlds most popular music player now lets you enjoy movies, TV shows, and more on a two-inch display thats 65% brighter than before.
                                                                Cover Flow.Brow..</p>
                                                                <button class="button btn-cart">Add to Cart</button>
                                                            </div>
                                                       </div>    
                                                   </div>
                                                   </div>
                                                <!-- list-view-area end -->
                                                <!-- list-view-areat start -->
                                                <div class="list-view-area mt-30">
                                                   <div class="row">
                                                       <div class="col-lg-4 col-md-6">
                                                           <div class="product-list">
                                                               <div class="product-image">
                                                                    <a href="single-product.html">
                                                                        <img src="img/product/9.jpg" alt="">
                                                                    </a>
                                                                    <span class="sale-sticker">New</span>
                                                                    <div class="product-action">
                                                                        <a href="#" class="quick-view" data-toggle="modal" data-target="#productModal">
                                                                            <i class="fa fa-search"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                           </div>
                                                       </div>
                                                       <div class="col-lg-8 col-md-6">
                                                           <div class="single-product-info">
                                                                <h3><a href="single-product.html">The new autumn and winter 2018 </a></h3>
                                                                <div class="rating-box">
                                                                   <i class="fa fa-star"></i>
                                                                   <i class="fa fa-star"></i>
                                                                   <i class="fa fa-star"></i>
                                                                   <i class="fa fa-star"></i>
                                                                   <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="product-price-box">
                                                                    <span class="new-price">$25.99</span>
                                                                </div>
                                                                <p>Video in your pocket. Its the small iPod with one very big idea: video. The worlds most popular music player now lets you enjoy movies, TV shows, and more on a two-inch display thats 65% brighter than before.
                                                                Cover Flow.Brow..</p>
                                                                <button class="button btn-cart">Add to Cart</button>
                                                            </div>
                                                       </div>    
                                                   </div>
                                                </div>
                                                <!-- list-view-area end -->
                                                <!-- list-view-areat start -->
                                                <div class="list-view-area mt-30">
                                                   <div class="row">
                                                       <div class="col-lg-4 col-md-6">
                                                           <div class="product-list">
                                                               <div class="product-image">
                                                                    <a href="single-product.html">
                                                                        <img src="img/product/10.jpg" alt="">
                                                                    </a>
                                                                    <span class="sale-sticker">New</span>
                                                                    <div class="product-action">
                                                                        <a href="#" class="quick-view" data-toggle="modal" data-target="#productModal">
                                                                            <i class="fa fa-search"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                           </div>
                                                       </div>
                                                       <div class="col-lg-8 col-md-6">
                                                           <div class="single-product-info">
                                                                <h3><a href="single-product.html">The new autumn and winter 2018 </a></h3>
                                                                <div class="rating-box">
                                                                   <i class="fa fa-star"></i>
                                                                   <i class="fa fa-star"></i>
                                                                   <i class="fa fa-star"></i>
                                                                   <i class="fa fa-star"></i>
                                                                   <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="product-price-box">
                                                                    <span class="new-price">$25.99</span>
                                                                </div>
                                                                <p>Video in your pocket. Its the small iPod with one very big idea: video. The worlds most popular music player now lets you enjoy movies, TV shows, and more on a two-inch display thats 65% brighter than before.
                                                                Cover Flow.Brow..</p>
                                                                <button class="button btn-cart">Add to Cart</button>
                                                            </div>
                                                       </div>    
                                                   </div>
                                                   </div>
                                                <!-- list-view-area end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- shop-products-wrapper end -->
                                    <!-- pagination-area start -->
                                    <div class="pagination-area">
                                        <div class="paginatoin-area">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <p>Showing 10-13 of 13 item(s) </p>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <ul class="pagination-box">
                                                        <li><a class="Previous"  href="#"><i class="zmdi zmdi-chevron-left"></i> Previous</a>
                                                        </li>
                                                        <li class="active"><a  href="#">1</a></li>
                                                        <li><a  href="#">2</a></li>
                                                        <li><a  href="#">3</a></li>
                                                        <li>
                                                          <a class="Next" href="#"> Next <i class="zmdi zmdi-chevron-right"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- pagination-area end -->
                                </div>
                                <!-- archive-border-area end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- shop-page-main-content end -->
            </div>
            <!-- shop-page-wrapper end -->
            
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
            
       