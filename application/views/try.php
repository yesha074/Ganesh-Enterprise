<!doctype html>
<html>
<head>

<!--Bootstrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!--Animate CSS-->
<link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">

<!--jQuery-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<!--Popper Js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!--Bootstrap 4 Js-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!--BootNavbar CSS-->
<link rel="stylesheet" href="css/bootnavbar.css">

<!--BootNavbar Js-->
<script src="js/bootnavbar.js"></script>
  </head>
 
<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light" id="main_navbar">
   <a class="navbar-brand" href="#">Navbar</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
         </li>
 

                <?php  
        $db = mysqli_connect('localhost', 'root', '', 'ganesh_enterprise');
$r1 = mysqli_query($db, "SELECT * FROM category_master where C_Parent_Id = 1 and C_Id != 1"); 
 while ($row1 = mysqli_fetch_array($r1)) { 
  ?>

    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $row1['C_Name']; ?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php 
                $r2 = mysqli_query($db, "SELECT * FROM category_master where C_Parent_Id = $row1[C_Id]"); 
                while ($row2 = mysqli_fetch_array($r2)) 
                    {?>
                         <li><a href="#"><?php echo $row2['C_Name']; ?></a></li>
                
                      <?php } ?>
                  </ul>
               </li>
                <?php } ?>
            </ul>
         </li>

         <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
         </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
         <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
   </div>
</nav>

 </body>
 </html>
<!--BootNavbar CSS-->
