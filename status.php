
<?php
include("function/dbMySql.php");

 $s=$_GET['s'];

    $con = new DB_con();
		if($s=='Unavailable')
		$r=$con->setstatus($_GET['question_id']) ;
		else
		$r=$con->unsetstatus($_GET['question_id']) ;

        
        header('Location:test.php');
        ?>
        <script type="application/javascript">
        //  window.location="test.php";
        //window.location("test.php");

        </script>
