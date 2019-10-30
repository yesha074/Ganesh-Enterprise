    
                              
                        <div class="outer-w3-agile col-xl mt-3">
                            <h4 class="tittle-w3-agileits mb-4">Insert Category</h4>
                            <form method="POST" action="<?php echo base_url('admin/insert_categories'); ?>" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Category Name</label>
                                    <input type="text" name="C_Name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Category Name Here!" required=""> 
                                </div> 
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Category Description</label>
                                    <textarea class="form-control" name="C_Description" id="exampleFormControlTextarea1" rows="3" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Product Category</label>
                                    <select class="form-control" name="C_Parent_Id" id="exampleFormControlSelect1">
                                        <option value="">Select Parent Category</option>
                                        <?php
                                        foreach ($cat as $cata):
                                        ?>
                                        <option value="<?php echo $cata['C_Id']; ?>"><?php echo $cata['C_Name']; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                </div>  
                                  <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Insert Category</button>
                                    </div> 
                           
                             </form>
                        </div>
                       