<?php
$con = mysqli_connect("localhost","root","","ganesh_enterprise");
							if(isset($_GET['search'])){
								
													$user_keyword= $_GET['user_query'];
													$get_products="select * from category_product_master,product_images,product_belongs where category_product_master.CP_Id=product_belongs.CP_Id AND product_images.CP_Id=product_belongs.CP_Id AND  category_product_master.CP_Name like '%$user_keyword%' || category_product_master.CP_Description like '%$user_keyword%' || category_product_master.CP_Prize like '%$user_keyword%'";
														
														$run_products=mysqli_query($con,$get_products);
															while($row_products=mysqli_fetch_array($run_products)){
															$pro_id=$row_products['category_product_master.CP_Id'];
															$pro_title=$row_products['category_product_master.CP_Name'];
															$pro_desc=$row_products['category_product_master.CP_Description'];
															$pro_price=$row_products['category_product_master.CP_Prize'];
															$pro_image=$row_products['product_images.Product_Image'];
															echo "
														<div class='agile_top_brands_grids'>
															<div class='col-md-4 top_brand_left'>
																<div class='hover14 column'>
																	<div class='agile_top_brand_left_grid'>
																		<div class='agile_top_brand_left_grid_pos'>
																			<img src='images/offer.png' alt=' ' class='img-responsive' />
																		</div>
																	<div class='agile_top_brand_left_grid1'>
																		<figure>
																			<div class='snipcart-item block' >
																				<div class='snipcart-thumb'>
																					<div>
																						<a href='single.php?pro_id=$pro_id'><img height='150' width='170' src='admin/product_images/$pro_image' /></a>	
																						<p>$pro_title</p>
																						<div class='stars'>
																							<i class='fa fa-star blue-star' aria-hidden='true'></i>
																							<i class='fa fa-star blue-star' aria-hidden='true'></i>
																							<i class='fa fa-star blue-star' aria-hidden='true'></i>
																							<i class='fa fa-star blue-star' aria-hidden='true'></i>
																							<i class='fa fa-star gray-star' aria-hidden='true'></i>
																						</div>
																					<h4>Rs$pro_price.00</h4>
																					</div>
																					
																					
																						<div class='snipcart-details top_brand_home_details'>
											<span><a href='login.php?buy=$pro_id'><input type='submit' name='submit' value='Buy Now' class='button' /></a></span>
																						</div>

													<div class='snipcart-details top_brand_home_details'>
													<span><a href='index.php?add_cart=$pro_id'><input type='submit' name='submit' value='Add to cart' class='button' /></a></span>
												
											</div>
																				</div>
																			</div>
																		</figure>
																	</div>
																	</div>
																</div>
															</div>
								
														</div>";
														}
														if(mysqli_num_rows($run_products)==0)
														{
															echo " <center><table height='10%' width='30%' border='2px'>.<tr>.<th><font color='red' size='5%'><center>No Match Found!!</center></font></th>.</tr>.</table></center>.<br>";
														}
							}
?>
