
<?php
    include("../config/database.php");
    echo 'hiii';
    if(isset($_GET['uid'])) {
    	echo $uid;
        $sql = "select U_Image from user_master where U_Id=$uid";
		$result = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($conn));
		$row = mysqli_fetch_array($result);
		$img=$row['U_Image'];
		header("Content-type: " . "image/jpeg");
        echo $img;
	}
	mysqli_close($conn);
?>


