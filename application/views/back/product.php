

            <!-- Tables content -->
            <section class="tables-section">
              

                <!-- table7 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Products</h4>
                    <div class="table-responsive">
                         <form method="POST" action="<?php echo base_url('admin/edit_product'); ?>" enctype="multipart/form-data">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Product Id</th>
                                    <th scope="col">Product Category</th>
                                    <th scope="col">Product Parent Category</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Size</th>
                                    <th scope="col">Old Price</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php
                               
                                foreach($product as $p):
                                   
                                ?>
                                <tr>
                                    <td><?php echo $p['CP_Id']; ?></td>
                                    <td><?php echo $p['C_Id']; ?></td>
                                    <td><?php echo $p['C_Parent_Id']; ?></td>
                                    <td><?php echo $p['CP_Name']; ?></td>
                                    <td><?php echo $p['CP_Description']; ?></td>
                                    <td><?php echo $p['CP_Size']; ?></td>
                                    <td><?php echo $p['CP_Old_Prize']; ?></td>
                                    <td><?php echo $p['CP_Prize']; ?></td>
                                    <td><?php echo $p['CP_Display']; ?></td>
                                    <td><img height="50" width="50" src="<?php echo base_url(); ?>products_img/<?php echo $p['Product_Image']; ?>"></td>
                                    <td><div>
                                        <a href="<?php echo base_url('admin/edit_product/').$p['CP_Id']; ?>" type="submit" class="btn btn-primary">Edit</a>
                                    </div></td>
                                    <td><div>
                                        <button type="submit" class="btn btn-primary">Delete</button>
                                    </div></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </form>
                    </div>
                </div>
                <!--// table7 -->

            </section>

 