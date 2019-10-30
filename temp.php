<!--  <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
 <li class="dropdown">
 <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="#">Action</a></li>

 -->



                                     <?php 
				$db = mysqli_connect('localhost', 'root', '', 'ganesh_enterprise');
$r1 = mysqli_query($db, "SELECT * FROM category_master where C_Parent_Id = 1 and C_Id != 1"); 
 while ($row1 = mysqli_fetch_array($r1)) { 
?>
		 <li class="dropdown">
		 <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $row1['C_Name']; ?></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                        	<?php 
                $r2 = mysqli_query($db, "SELECT * FROM category_master where C_Parent_Id = $row1[C_Id]"); 
                while ($row2 = mysqli_fetch_array($r2)) 
                    {?>
                    	<li class="dropdown">
		 <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" 		aria-haspopup="true" aria-expanded="false"><?php echo $row2['C_Name']; ?></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
	
                       <?php 
                            $r3 = mysqli_query($db, "SELECT * FROM category_master where C_Parent_Id = $row1[C_Id]"); 
                            while ($row3 = mysqli_fetch_array($r3)) 
                                {?>
                                		 <li><a href="#"><?php echo $row3['C_Name']; ?></a></li>
                           
<?php}?>
</ul></li>
<?php}?>
</ul></li>
<?php}?>
 mare aa code nakhvo 6 vachche 
 haen to nakho ne