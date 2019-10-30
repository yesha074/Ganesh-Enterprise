
<html>
<head>

<style href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"/>
<style href="my.css" rel="stylesheet" id="bootstrap-css"/>

<script src="my1.js"/>
  </head>
<body>

<div class="text-center"><h2>Bootstrap 4 Multilevel Dropdown Menu</h2></div>

<div id="menu_area" class="menu-area">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-light navbar-expand-lg mainmenu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a>
                                
     <li class="dropdown">
       <?php  
        $db = mysqli_connect('localhost', 'root', '', 'ganesh_enterprise');
$r1 = mysqli_query($db, "SELECT * FROM category_master where C_Parent_Id = 1 and C_Id != 1"); 
 while ($row1 = mysqli_fetch_array($r1)) { 
  ?>
     <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $row1['C_Name']; ?></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                          
                      <li class="dropdown">
                        <?php 
                $r2 = mysqli_query($db, "SELECT * FROM category_master where C_Parent_Id = $row1[C_Id]"); 
                while ($row2 = mysqli_fetch_array($r2)) 
                    {?>
     <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"     aria-haspopup="true" aria-expanded="false"><?php echo $row2['C_Name']; ?></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
  
                       
                                     <li><?php 
                            $r3 = mysqli_query($db, "SELECT * FROM category_master where C_Parent_Id = $row1[C_Id]"); 
                            while ($row3 = mysqli_fetch_array($r3)) 
                                {?><a href="#"><?php echo $row3['C_Name']; ?></a></li>
                           
<?php }  ?>
</li></ul> 
<?php  } ?>
</li></ul>
<?php } ?>
</li> 
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown3</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                </ul>
                            </li>
                            </ul>
                        </li>
                        <li><a href="#">Service</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>


<br>
   <div class="text-center"><span><a href="https://bootsnipp.com/snippets/m1d5N">Bootstrap 3 Multilevel Dropdown Menu >></a></span></div>

 </body></html>
