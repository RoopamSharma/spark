<?php
include("include/config.php");
?>
<head>
		<meta charset="UTF-8">
		<title>Details</title>
		<?php
        	include("include/css.php");
        	?>
        
</head>
    <body class="side_menu_active side_menu_expanded">
        <div id="page_wrapper">
        	<?php
        	include("include/header.php");
        	?>
            <div id="main_wrapper">
                       <div class="row">
                    <?php
        include_once ('functions.php');
        $con = new DB_con();
        $id=$_GET['id'];
        $res=$con->selectcompany($id);
        while($row=mysql_fetch_assoc($res))
        {
            ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <?php 
                            echo '<img src="uploads/"'.$row['emp_picture'].'" "width="76" height="76"alt="" class="user_profile_img" />';

                            ?>
                            <!--<img class="user_profile_img" src="" alt="" width="76" height="76" />-->
                            <h1 class="user_profile_name"><?php echo $row['co_name']; ?></h1>
                            <p class="user_profile_info"><?php echo $row['co_about']; ?></p>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-12">
                                <h3 class="heading_a"><span class="heading_text">General Info</span></h3>
                                <table class="table table-yuk2 toggle-arrow-tiny">
                                    <tr><td>Email</td>
                                    <td class="col-sm-10">
                                        <?php
                                        echo $row['co_email'] ;
                                        ?>
                                    
                                    </td></tr>
                                    <tr><td>Person to Contact</td>
                                    <td class="col-sm-10">
                                        <?php echo $row['name'] ; ?> 
                                        </td></tr>
                                    
                                    
                                    <tr><td>Status</td>
                                    <td class="col-sm-10">
                                        <?php
                                        echo $row['stat'] ;
                                        ?>
                                    
                                    </td></tr>
                                    </table>        
        <?php
        }
        ?>
        
            </div>
            <?php
            include("include/left_menu.php");
            ?>

        	</div>
        	<?php
        	include("include/footer.php");
        	?>
        </body>
        </html>