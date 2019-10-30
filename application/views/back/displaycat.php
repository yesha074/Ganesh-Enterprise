

            <!-- Tables content -->
            <section class="tables-section">
              

                <!-- table7 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Categories</h4>
                    <div class="table-responsive">
                         <form method="POST" action="<?php echo base_url('admin/edit_cat'); ?>" enctype="multipart/form-data">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Category Id</th>
                                     <th scope="col">Category Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Product Parent Category</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php
                               
                                foreach($cat as $p):
                                   
                                ?>
                                <tr>
                                    <td><?php echo $p['C_Id']; ?></td>
                                     <td><?php echo $p['C_Name']; ?></td>
                                    <td><?php echo $p['C_Description']; ?></td>
                                    <td><?php echo $p['C_Parent_Id']; ?></td>
                                    <td>
                                   <div>
                                        <a href="<?php echo base_url('admin/edit_cat/').$p['C_Id']; ?>" type="submit" class="btn btn-primary">Edit</a>
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

 