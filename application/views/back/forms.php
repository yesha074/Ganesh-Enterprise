    
                              
                        <div class="outer-w3-agile col-xl mt-3">
                            <h4 class="tittle-w3-agileits mb-4">Insert Product</h4>
                            <form method="POST" action="<?php echo base_url('admin/insert_products'); ?>" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Product Name</label>
                                    <input type="text" name="CP_Name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Product Name Here!" required=""> 
                                </div> 
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Product Description</label>
                                    <textarea class="form-control" name="CP_Description" id="exampleFormControlTextarea1" rows="3" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Product Size</label>
                                    <input type="text" name="CP_Size" class="form-control" id="exampleFormControlInput1" placeholder="Enter Product Size Here!" required=""> 
                                </div> 
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Product Old Prize</label>
                                    <input type="text" name="CP_Old_Prize" class="form-control" id="exampleFormControlInput1" placeholder="Enter Product Old Prize Here!" required=""> 
                                </div> 
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Product New Prize</label>
                                    <input type="text" name="CP_Prize" class="form-control" id="exampleFormControlInput1" placeholder="Enter Product New Prize Here!" required=""> 
                                </div> 
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Product Display</label>
                                    <select class="form-control" name="CP_Display" id="exampleFormControlSelect1">
                                        <option value="1">True</option>
                                        <option value="0">False</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Product Category</label>
                                    <select class="form-control" name="C_Parent_Id" id="exampleFormControlSelect1">
                                        <option value="">Select Main Category</option>
                                        <?php
                                        foreach ($cat as $cata):
                                        ?>
                                        <option value="<?php echo $cata['C_Id']; ?>"><?php echo $cata['C_Name']; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                </div> 
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Product Category</label>
                                    <select class="form-control" name="C_Id" id="exampleFormControlSelect1">
                                        <option value="">Select Sub Category</option>
                                        <?php
                                        foreach ($cat as $cata):
                                        ?>
                                        <option value="<?php echo $cata['C_Id']; ?>"><?php echo $cata['C_Name']; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                </div> 
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Product Image</label>
                                    <input type="file" name="Product_Image" class="form-control" id="exampleFormControlInput1" required=""> 
                                </div> 
                               
                                  <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Insert Products</button>
                                    </div> 
                           
                             </form>
                        </div>
                       