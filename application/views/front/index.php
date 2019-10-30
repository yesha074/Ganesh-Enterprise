
            <!-- slider-area start -->
            <head>
                <style>
                .s
                {
                    color:white; 
                    font-weight: bold;  
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
            </head>
            <div class="slider-area">
                <div class="slider-active owl-carousel">
                    <div class="slider-wrapper" style="background-image:url(<?php echo base_url(); ?>img/slider/113.jpg)">
                       <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                   
                                    <div class="slider-text style1 style2 slider-text-animation">
                                        <div class="slider-bg-text">
                                            <h1>-50%</h1>
                                        </div>
                                        <div class="slider-text-info">
                                            <h3>Collection</h3>
                                            <h2>of furniture</h2>
                                            <p>valid on all our store items</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!--slider-wrapper end-->
                    <!--slider-wrapper start-->
                    <div class="slider-wrapper" style="background-image:url(<?php echo base_url(); ?>img/slider/112.jpg)">
                       <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-text style1 style2 slider-text-animation">
                                        <div class="slider-bg-text">
                                            <h1>2018</h1>
                                        </div>
                                        <div class="slider-text-info">
                                            <h3>New models</h3>
                                            <h2>& trends</h2>
                                            <p>in manly collections</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="slider-wrapper" style="background-image:url(<?php echo base_url(); ?>img/slider/114.jpg)">
                       <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-text style1 slider-text-animation">
                                        <div class="slider-bg-text">
                                            <h1>2018</h1>
                                        </div>
                                        <div class="slider-text-info">
                                            <h3>New models</h3>
                                            <h2>& trends</h2>
                                            <p>in manly collections</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!--slider-wrapper end-->
                </div>
            </div>
            <!-- slider-area end -->
            
            <!-- benner-area start -->
			<div class="benner-area pb-90">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="hello-word-title mb-90">
								<h3>Say hello to the brand new <span>E-comerce</span>Online <span>Furniture</span> Shopping Website.</h3>
							</div>
						</div>
					</div>
					<div class="row">
                        <?php 

                        $a=0;
                             foreach($data as $i):
                        
                            if($a == 145)
                                break;

                            $a=$a+1;

                            if($a > 142 )
                            {
                        ?>

						<div class="col-lg-4 col-md-4" style="padding-top: 15px; ">
							<div class="single-benner">
								 <a href="<?php echo base_url('project/singleproduct/'); ?><?php echo $i['CP_Id'];?>">
                                               <img src="<?php echo base_url(); ?>products_img/<?php echo $i['Product_Image']; ?>" alt="product">
                                            </a>
								<div class="single-benner-info">
									<h6><a class="s" href="<?php echo base_url('project/singleproduct/'); ?><?php echo $i['CP_Id'];?>"><?php echo $i['CP_Name'];?></a></h6>
									<p class="s">OUR LATEST PRODUCTS</p>
									<a href="<?php echo base_url('project/singleproduct/'); ?><?php echo $i['CP_Id'];?>" class="btn-one">Our Collection</a>
								</div>
							</div>
						</div>
                        <?php  }
                            endforeach;
                        ?>
					</div>
				</div>
				
			</div>
            <!-- benner-area end -->
             <!-- daily-deals-area start -->
            <div class="daily-deals-area pb-90">
                <div class="container">
                    
                    <div class="row">
                <div class="daily-deats-active owl-carousel">
                        <?php 
                             foreach($data as $i):
                        ?>
                <div>
                        <div class="col-lg-7 col-md-6"  style="float: left;">
                            <div class="sale-off-image">
                                <a href=""<?php echo base_url('project/singleproduct/'); ?><?php echo $i['CP_Id'];?>">
                                                <img src="<?php echo base_url(); ?>products_img/<?php echo $i['Product_Image']; ?>" alt="product"></a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6" style="float: left;">
                            <div class="daily-deals">
                                <div class="daily-deals-title">
                                    <h3>Daily deals</h3>
                                </div>
                                
                                
                                   
                                    <div class="daily-deals-info">
                                        <!-- countdown start -->
                                        <div class="countdown-deals" data-countdown="2020/05/01"></div>
                                        <!-- countdown end -->
                                        <h1><a href="<?php echo base_url('project/singleproduct/'); ?><?php echo $i['CP_Id'];?>"><?php echo $i['CP_Name'];?></a></h1>
                                        <p><?php echo $i['CP_Description'];?></p>
                                        <div class="product-price-box">
                                            <span class="old-price"><?php echo $i['CP_Old_Prize'];?></span>
                                            <span class="new-price"><?php echo $i['CP_Prize'];?></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                      </div>
                    <?php endforeach; ?>  
                    </div>
                </div>
            </div>
        </div>
            <!-- daily-deals-area end -->
            
           
            <!-- daily-deals-area start -->
            
            <!-- product-area start -->
			<div class="product-area pb-90">
               
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-titel">
								<h2>Featured products</h2>
							</div>
						</div>
					</div>
					<div class="product-wrapper">
                        <div class="row">
                            <div class="product-active owl-carousel">
                                    <!-- single-product start -->
                                     <?php 
                                      foreach($data as $i):
                                      ?>
                                        <div class="col-lg-3">
                              
                                    <div class="single-product">
                                        <div class="product-image">
                                            <a href="<?php echo base_url('project/singleproduct/'); ?><?php echo $i['CP_Id'];?>">
                                                <img src="<?php echo base_url(); ?>products_img/<?php echo $i['Product_Image']; ?>" alt="product">
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
                                    <!-- single-product end -->
                                     </div>
                                <?php endforeach ?>
                            
                               
                                
                            </div>
                        </div>
					</div>
				</div>
			</div>
            <!-- product-area end -->
            
            <!-- benner-area start -->
			<div class="benner-area-two pb-90">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-0">
							<div class="single-benner">
								<a href="<?php echo base_url('project/singleproduct/'); ?><?php echo $i['CP_Id'];?>">
                                                <img src="<?php echo base_url(); ?>products_img/<?php echo $i['Product_Image']; ?>" alt="product" width="1500" height="auto"></a>
								<div class="single-benner-info">
									<h3>Extra Discount</h3>
									<h2><a class="cen" href="<?php echo base_url('project/singleproduct/'); ?><?php echo $i['CP_Id'];?>"><?php echo $i['CP_Name'];?></a></h2>
									<a href="<?php echo base_url('project/singleproduct/'); ?><?php echo $i['CP_Id'];?>" class="btn-one">Shop now!</a>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
            <!-- benner-area end -->
            
            
            
       