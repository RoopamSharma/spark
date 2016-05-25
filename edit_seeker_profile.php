<?php
include("include/config.php");
include_once ('functions.php');
?>
<?php
        $con = new DB_con();
if (isset($_POST['submit']))
{
 $id = $_POST['id'];
 $name = $_POST['name'];
 $email = $_POST['email'];
 //$cont = $_POST['cont'];
 //$add = $_POST['add'];
 $loc = $_POST['loc'];
 $exp = $_POST['exp'];
 $edu = $_POST['edu'];
 //$relo = $_POST['relo'];
// $look = $_POST['look'];
// $natjob = $_POST['natjob'];
 //$test = $_POST['test'];
 $jobrdy = $_POST['jobrdy'];
 $stat = $_POST['stat'];

  $con->editperson($id,$name,$email,$loc,$exp,$edu,$jobrdy,$stat);
}
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
        $con = new DB_con();
        $id=$_GET['id'];
        $res=$con->selectperson($id);
        while($row=mysql_fetch_assoc($res))
        {
            ?>
                <div class="container-fluid">
                    
                    <div class="row">
                        <div class="col-md-12"><?php
                            echo'<form class="form-horizontal" role="form"  action="edit_seeker_profile.php?id='.$row['ID'].'" method="post">';
                            ?>
                                <h3 class="heading_a"><span class="heading_text">Edit Info</span></h3>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="name" class="form-control" id="profile_name" value="'.$row['firstname'].$row['lastname'].'">';
                                        echo'<input type="hidden" name="id" value="'.$row['ID'].'">';
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="email" class="form-control" id="profile_name" value="'.$row['email'].'">';
                                        ?>
                                    </div>
                                </div>
                                <!--<div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Contact No.</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="cont" class="form-control" id="profile_name" value="'.$row['seeker_cont'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="add" class="form-control" id="profile_name" value="'.$row['seeker_add'].'">';
                                        ?>
                                    </div>
                                </div>-->
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Location</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="loc" class="form-control" id="profile_name" value="'.$row['city'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Experience</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="exp" class="form-control" id="profile_name" value="'.$row['expyear'].' years">';
                                        ?>




















                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Education</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="edu" class="form-control" id="profile_name" value="'.$row['colg'].'">';
                                        ?>
                                    </div>
                                </div>
                                <!--<div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Relocate</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="relo" class="form-control" id="profile_name" value="'.$row['seeker_relo'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Looking For</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="look" class="form-control" id="profile_name" value="'.$row['seeker_look'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Nature of Job</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="natjob" class="form-control" id="profile_name" value="'.$row['seeker_natjob'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Test Taken</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="test" class="form-control" id="profile_name" value="'.$row['seeker_test'].'">';
                                        ?>
                                    </div>
                                </div>-->
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Job Ready</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="jobrdy" class="form-control" id="profile_name" value="'.$row['jobready'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Status</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="stat" class="form-control" id="profile_name" value="'.$row['jobready'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="submit" name="submit" value="Update" style="float:right;">';
                                        ?>
                                    </div>
                                </div>
                            </form>
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