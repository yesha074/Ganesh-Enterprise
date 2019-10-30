

            <!-- Tables content -->
            <section class="tables-section">
              

                <!-- table7 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Customers</h4>
                    <div class="table-responsive">
                         <form method="POST" action="<?php echo base_url('admin/edit_status'); ?>" enctype="multipart/form-data">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">User Id</th>
                                     <th scope="col">Full Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Mobile No</th>
                                     <th scope="col">Email Id</th>
                                     <th scope="col">UserName</th>
                                    <th scope="col">User Type</th>
                                     <th scope="col">User Image</th>
                                    <th scope="col">User Status</th>
                                    <th scope="col">Change Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php
                               
                                foreach($user as $p):
                                   
                                ?>
                                <tr>
                                    <td><?php echo $p['U_Id']; ?></td>
                                     <td><?php echo $p['U_Name']; ?></td>
                                    <td><?php echo $p['U_Address']; ?></td>
                                    <td><?php echo $p['U_Mobile']; ?></td>
                                    <td><?php echo $p['U_Email']; ?></td>
                                     <td><?php echo $p['U_Username']; ?></td>
                                    <td><?php echo $p['U_Type']; ?></td>
                                    <td><?php echo $p['U_Image']; ?></td>
                                     <td>
                                     <?php if($p['U_Block']=='0')
                                     {
                                        echo "Unblocked";
                                     }
                                     else
                                     {
                                        echo "Blocked";
                                     }
                                     ?>
                                     </td>
                                   
                                      <td>
                                   <div>
                                        <a href="<?php echo base_url('admin/edit_status/').$p['U_Id']; ?>" type="submit" class="btn btn-primary">Change</a>
                                    </div></td>
                                    <td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </form>
                    </div>
                </div>
                <!--// table7 -->

            </section>

 