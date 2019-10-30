<ul>
                                            <?php  
                                                $db = mysqli_connect('localhost', 'root', '', 'ganesh_enterprise');
                                        $r1 = mysqli_query($db, "SELECT * FROM main_category"); 
                                         while ($row1 = mysqli_fetch_array($r1)) { 
                                             $mid=$row1['C_Main_Id'];
                                            $rc = mysqli_query($db, "SELECT * FROM sub_categories WHERE C_Sub_Parent_Id='$mid'"); 
                                            $count = mysqli_num_rows($rc);
                                            if($count==0)
                                            {
                                          ?>
                                        <li><a href="<?php echo base_url(); ?>"><?php echo $row1['C_Main_Name']; ?></a></li>
                                      <?php } else { ?>
                                            <li><a href="<?php echo base_url(); ?>"><?php echo $row1['C_Main_Name']; ?> <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <?php
                                                    $mid=$row1['C_Main_Id'];
                                                    $r12 = mysqli_query($db, "SELECT * FROM sub_categories WHERE C_Sub_Parent_Id='$mid'"); 
                                         while ($row12 = mysqli_fetch_array($r12)) { 
                                          ?>
                                                    <li><a href="index-2.html"><?php echo $row12['C_Sub_Name']; ?> <i class="fa fa-angle-down"></i></a>
                                                            <ul class="dropdown-menu">
                                                                <?php
                                                                $sid=$row12['C_Sub_Id'];
                                                                $r123 = mysqli_query($db, "SELECT * FROM sub_subcategories WHERE C_Sub_Sub_Parent_Id='$sid'"); 
                                                     while ($row123 = mysqli_fetch_array($r123)) { 
                                                      ?>
                                                                <li><a href="index-2.html"><?php echo $row123['C_Sub_Sub_Name']; ?> </a>
                                                                </li>
                                                               <?php } ?>
                                                            </ul>
                                                    </li>
                                                   <?php } ?>
                                                </ul>
                                            </li>
                                            <?php } } ?>
                                        </ul>