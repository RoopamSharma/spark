<?php
include("include/config.php");
include_once ('functions.php');
?>
<?php
        $con = new DB_con();
if (isset($_POST['submit']))
{
 $id = $_POST['id'];
 $title=$_POST['jobtitle'];
 $desc=$_POST['jobdesc'];
 $opening=$_POST['opening'];
 $indus=$_POST['indus'];
 $postdate=$_POST['postdate'];
 $deadline=$_POST['deadline'];
  $con->editjob($id,$title,$desc,$opening,$indus,$postdate,$deadline);
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
        $res=$con->showjob($id);
        while($row=mysql_fetch_assoc($res))
        {
            ?>
                <div class="container-fluid">
                    
                    <div class="row">
                        <div class="col-md-12"><?php
                            echo'<form class="form-horizontal" role="form"  action="edit_employer_jobpost.php?id='.$row['employerid'].'" method="post">';
                            ?>
                                <h3 class="heading_a"><span class="heading_text">Edit Job Info</span></h3>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Job Title:</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="jobtitle" class="form-control" id="jobtitle" value="'.$row['job_title'].'">';
                                        echo'<input type="hidden" name="id" value="'.$row['employerid'].'">';
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Job Description:</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="jobdesc" class="form-control" id="jobdesc" value="'.$row['job_description'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Opening</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="opening" class="form-control" id="opening" value="'.$row['opening'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Industry</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" name="indus" class="form-control" id="indus" value="'.$row['industry'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Post date:</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="date" name="postdate" class="form-control" id="postdate" value="'.$row['postdate'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Deadline:</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="date" name="deadline" class="form-control" id="deadline" value="'.$row['deadline'].'">';
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