<?php
include("include/connection.php");
include("function/dbMySql.php");
 $id=$_GET['id'];
$sql="SELECT * FROM subsubcategory WHERE subsubcat_id = '".$id."' ";
$result=mysql_query($sql);
$row= mysql_fetch_array($result);
extract($row);

if(isset($_POST['update'])){
$subcat_id=$_POST['subcat_id'];
$cat_id=$_POST['cat_id'];
$subsubcat_name=$_POST['subsubcat_name'];
$subsubcat_id=$_POST['subsubcat_id'];
$subsubcat_details=$_POST['subsubcat_details'];
$subsubcat_date = date('d-m-Y');
$subsubcat_time = date('h:i:s');

$update = mysql_query("UPDATE subsubcategory SET cat_id = '".$cat_id."',subcat_name = '".$subcat_name."',subsubcat_name= '".$subsubcat_name."', subsubcat_details = '".$subsubcat_details."',subsubcat_date = '".$subcat_date."',subsubcat_time = '".$subcat_time."' WHERE subsubcat_id = '".$subsubcat_id."'"); 
if($update){?>
<script>
window.location='subsubcategory.php';
</script>
<?php            
}
}
?>
<!DOCTYPE html>
<html>
    

<head>
		<meta charset="UTF-8">
		<title>Job Protal</title>
        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

        <!-- bootstrap framework -->
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		
        <!-- icon sets -->
            <!-- elegant icons -->
                <link href="assets/icons/elegant/style.css" rel="stylesheet" media="screen">
            <!-- elusive icons -->
                <link href="assets/icons/elusive/css/elusive-webfont.css" rel="stylesheet" media="screen">
            <!-- flags -->
                <link rel="stylesheet" href="assets/icons/flags/flags.css">
            <!-- scrollbar -->
                <link rel="stylesheet" href="assets/lib/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">


        <!-- google webfonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

        <!-- main stylesheet -->
		<link href="assets/css/main.min.css" rel="stylesheet" media="screen" id="mainCss">

        <!-- moment.js (date library) -->
        <script src="assets/js/moment-with-langs.min.js"></script>
        
        
        <!--Editor-->
<script src="ckeditor/ckeditor.js"></script>
	
    </head>
    <body class="side_menu_active side_menu_expanded">
        <div id="page_wrapper">

            <!-- header -->
            <?php include("include/header.php");?>

            <!-- breadcrumbs -->
            <nav id="breadcrumbs">
                <ul>
                    <li><a href="dashboard.php">Subsubcategory</a></li>
		            <li><span>Update Subsubcategory</span></li>
		           
		        </ul>
            </nav>

            <!-- main content -->
            <div id="main_wrapper">
                <div class="container-fluid">
                   
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" role="form" action="" method="post">
                                <h3 class="heading_a"><span class="heading_text">Update Subsubcategory Information</span></h3>
                                <div class="form-group">
                                    <label for="profile_username" class="col-sm-2 control-label">Category Name</label>
                                    <div class="col-sm-10">
                                        <select name="cat_id" class="form-control">
                                       <?php 
									   $sql="SELECT * FROM category";
										$result=mysql_query($sql);
										while($row= mysql_fetch_array($result))
										{
									   ?>
                                        <option value="<?php echo $row['category_name'];?>"><?php echo $row['category_name'];?></option>
                                        <?php
										}
										?>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                <label for="profile_username" class="col-sm-2 control-label" >Subcategory Name</label>
                                    <div class="col-sm-10">
                                        <select name="cat_id" class="form-control">
                                       <?php 
                                       $sql1="SELECT * FROM subcategory";
                                        $result1=mysql_query($sql1);
                                        while($row= mysql_fetch_array($result1))
                                        {
                                       ?>
                                        <option value="<?php echo $row['subcat_name'];?>"><?php echo $row['subcat_name'];?></option>
                                        <?php
                                        }
                                        ?>
                                        </select>
                                    </div>
                                    </div>

                                <div class="form-group">
                                    <label for="profile_username" class="col-sm-2 control-label">Subsubcategory Name</label>
                                    <div class="col-sm-10">
                                        
                                        <input type="hidden" class="form-control" name="subsubcat_id" value="<?php echo $id; ?>" placeholder="Subsubcategory Name">
                                        <input type="text" class="form-control" name="subsubcat_name" value="<?php echo $subsubcat_name; ?>" placeholder="Subsubcategory Name">
                                    </div>
                                </div>
                    

                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Subsubcategory Details</label>
                                    <div class="col-sm-10">
                                        <textarea cols="80" name="subsubcat_details" rows="10"><?php echo $subsubcat_details; ?></textarea>
                                    </div>
                                </div>
                               
                               
                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-2">
                                        
                                       <input type="submit" name="update" value="Update" class="btn-primary btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>             
            </div>
            
            <!-- main menu -->
            <?php //include("include/left_menu.php");?>

        </div>

            <script>

			// This call can be placed at any point after the
			// <textarea>, or inside a <head><script> in a
			// window.onload event handler.

			// Replace the <textarea id="editor"> with an CKEditor
			// instance, using default configurations.

			CKEDITOR.replace( 'subsubcat_details' );

		</script>

 
 
        <!-- jQuery -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- jQuery Cookie -->
        <script src="assets/js/jqueryCookie.min.js"></script>
        <!-- Bootstrap Framework -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- retina images -->
        <script src="assets/js/retina.min.js"></script>
        <!-- switchery -->
        <script src="assets/lib/switchery/dist/switchery.min.js"></script>
        <!-- typeahead -->
        <script src="assets/lib/typeahead/typeahead.bundle.min.js"></script>
        <!-- fastclick -->
        <script src="assets/js/fastclick.min.js"></script>
        <!-- match height -->
        <script src="assets/lib/jquery-match-height/jquery.matchHeight-min.js"></script>
        <!-- scrollbar -->
        <script src="assets/lib/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

        <!-- Yukon Admin functions -->
        <script src="assets/js/yukon_all.js"></script>


        <!-- style switcher -->
        

    </body>


</html>
