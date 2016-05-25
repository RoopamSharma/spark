<?php
$gr=$_POST['g'];
$id=$_POST['hid'];
        include_once ('functions.php');
        $con = new DB_con();
		$r=$con->setgrade($id,$gr);
		echo "Updated";		
		?>