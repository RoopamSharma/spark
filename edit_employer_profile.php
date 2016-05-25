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
 $contp = $_POST['contp'];
 $contn = $_POST['contn'];
 $add = $_POST['add'];
 $indus = $_POST['indus'];
 $stat = $_POST['stat'];
  $con->editcompany($id,$name,$email,$contp,$contn,$add,$indus,$stat);
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
        $res=$con->selectcompany($id);
        while($row=mysql_fetch_assoc($res))
        {
            ?>
                <div class="container-fluid">
                    
                    <div class="row">
                        <div class="col-md-12"><?php
                            echo'<form class="form-horizontal" role="form"  action="edit_employer_profile.php?id='.$row['employerid'].'" method="post">';
                            ?>
                                <h3 class="heading_a"><span class="heading_text">Edit Info</span></h3>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="name" class="form-control" id="profile_name" value="'.$row['co_name'].'">';
                                        echo'<input type="hidden" name="id" value="'.$row['employerid'].'">';
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="email" class="form-control" id="profile_name" value="'.$row['co_email'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Person to Contact</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="contp" class="form-control" id="profile_name" value="'.$row['name'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Contact No.</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="contn" class="form-control" id="profile_name" value="'.$row['contactno'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="add" class="form-control" id="profile_name" value="'.$row['address'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">About</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="indus" class="form-control" id="profile_name" value="'.$row['co_about'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Status</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="stat" class="form-control" id="profile_name" value="'.$row['stat'].'">';
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