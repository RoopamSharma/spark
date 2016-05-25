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
        $res=$con->selectperson($id);
        while($row=mysql_fetch_assoc($res))
        {
            ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                        <?php //echo ' <img class="user_profile_img"  src="uploads/' . $row['picture'] .'" alt="" width="76" height="76" />'?>
                            <h1 class="user_profile_name"><?php echo $row['firstname'] .' '.$row['lastname']; ?></h1>
                            <!--<p class="user_profile_info"><?php echo $row['seeker_natjob']; ?></p>-->
                            <!--<?php echo'<a href="showfile.php"';?><p class="user_profile_info">View More Details</p></a>-->
                        </div>
                    </div>
                    <div style="float: right;"><?php echo'<a href="edit_seeker_profile.php?id='.$row['ID'].'">'; ?> <span class="el-icon-pencil bs_ttip" title="" ></span></a></div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" role="form">
                                <h3 class="heading_a"><span class="heading_text">General Info</span></h3>

                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" class="form-control" id="profile_name" value="'.$row['email'].'">';
                                        ?>
                                    </div>
                                </div>
                               <!-- <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Contact No.</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" class="form-control" id="profile_name" value="'.$row['seeker_cont'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" class="form-control" id="profile_name" value="'.$row['seeker_add'].'">';
                                        ?>
                                    </div>
                                </div>-->
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Location</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" class="form-control" id="profile_name" value="'.$row['city'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Experience</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" class="form-control" id="profile_name" value="'.$row['prevjobs'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Education</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" class="form-control" id="profile_name" value="'.$row['colg'].'">';
                                        ?>
                                    </div>
                                </div>
                                <!--<div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Relocate</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" class="form-control" id="profile_name" value="'.$row['seeker_relo'].'">';
                                        ?>
                                    </div>
                                </div>-->
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Looking For</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" class="form-control" id="profile_name" value="'.$row['category'].'">';
                                        ?>
                                    </div>
                                </div>
                                <!--<div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Nature of Job</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" class="form-control" id="profile_name" value="'.$row['seeker_natjob'].'">';
                                        ?>
                                    </div>
                                </div>-->
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">No. of Test Taken</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" class="form-control" id="profile_name" value="'.$row['no_test'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Job Ready</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" class="form-control" id="profile_name" value="'.$row['jobready'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Status</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" class="form-control" id="profile_name" value="'.$row['jobready'].'">';
                                        ?>
                                    </div>
                                </div>
        <hr/>
        <?php
        }
        ?>
        
    </div>
</div>
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