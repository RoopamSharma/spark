<?php
include("include/connection.php");
include("function/dbMySql.php");
$question_id=$_GET['question_id'];
$sql="SELECT * FROM question WHERE question_id = '".$question_id."' ";
$result=mysql_query($sql);
$row= mysql_fetch_array($result);
extract($row);
date_default_timezone_set('Asia/Kolkata');

if(isset($_POST['update'])){
	
$cat_id=$_POST['cat_id'];
$subcat_id=$_POST['subcat_id'];
$question=$_POST['question'];
$ans1=$_POST['ans1'];
$ans2=$_POST['ans2'];
$ans3=$_POST['ans3'];
$ans4=$_POST['ans4'];
$correct_ans=$_POST['correct_ans'];
$difficulty_level=$_POST['difficulty_level'];
$test_date = date('d-m-Y');
$test_time = date('h:i:s');


//UPDATES QUERY EVERYTIME USER INPUTS.(TAKES FORM DATA FROM POST METHOD AND CHANGES THE CELL CONTENTS.)
$update = mysql_query("UPDATE question SET cat_id = '".$cat_id."',subcat_id = '".$subcat_id."',question = '".$question."',ans1 = '".$ans1."',ans2 = '".$ans2."',ans3 = '".$ans3. "',ans4 = '".$ans4."',correct_ans = '".$correct_ans."',difficulty_level = '".$difficulty_level."' WHERE subcat_id = '".$subcat_id."'"); 
if($update){?>
<script>
window.location='test.php';dw
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


<script src="ckeditor/ckeditor.js"></script>
	
    
    <script type="text/javascript">

function showUser123(str)

{

if (str=="")

  {

  document.getElementById("txtHint").innerHTML="";

  return;

  }

if (window.XMLHttpRequest)

  {// code for IE7+, Firefox, Chrome, Opera, Safari

  xmlhttp=new XMLHttpRequest();

  }

else

  {// code for IE6, IE5

  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

  }

xmlhttp.onreadystatechange=function()

  {

  if (xmlhttp.readyState==4 && xmlhttp.status==200)

    {

    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;

    }

  }

xmlhttp.open("GET","getuser.php?q="+str,true);

xmlhttp.send();

}

</script>

	
    </head>
    <body class="side_menu_active side_menu_expanded">
        <div id="page_wrapper">

            <!-- header -->
            <?php include("include/header.php");?>

            <!-- breadcrumbs -->
            <nav id="breadcrumbs">
                <ul>
                    <li><a href="dashboard.php">Subcategory</a></li>
		            <li><span>Update Subcategory</span></li>
		           
		        </ul>
            </nav>

            <!-- main content -->
            <div id="main_wrapper">
                <div class="container-fluid">
                   
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" role="form" action="" method="post">
                                <h3 class="heading_a"><span class="heading_text">Add Online Test</span></h3>
                                
                                
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Difficulty Level</label>
                                    <div class="col-sm-10">
                                        <select name="difficulty_level" class="form-control">
                                        <?php
										$difficulty_level;
										if($difficulty_level==1)
										{
										?> 
                                        <option value="1">Level 1</option>
                                        <?php
										}
										elseif($difficulty_level==2)
										{
											?>
                                            <option value="2">Level 2</option>
                                            <?php
										}
										elseif($difficulty_level==3)
										{
											?>
                                            <option value="3">Level 3</option>
                                           
                                            <?php
										}
										
										?>
                                        
                                       <option value="1">Level 1</option>
                                        <option value="2">Level 2</option>
                                        <option value="3">Level 3</option>
                                        </select>
                                    </div>
                                </div>
                                
                                
                                
                                <div class="form-group">
                                    <label for="profile_username" class="col-sm-2 control-label">Category Name</label>
                                    <div class="col-sm-10">
                                        <select name="cat_id" class="form-control" onChange="showUser123(this.value)">
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
                                    <label for="profile_username" class="col-sm-2 control-label">Subcategory Name</label>
                                    <div class="col-sm-10">
                                        <select name="subcat_id" id="txtHint" class="form-control">
	 						<option value="<?php echo $subcat_id; ?>"><?php echo $subcat_id; ?></option>
     						 </select>
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Question</label>
                                    <div class="col-sm-10">
                                        <textarea cols="80" name="question" rows="10"><?php echo $question; ?></textarea>
                                    </div>
                                </div>
                               
                                
                                
                                 <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Answer 1</label>
                                    <div class="col-sm-10">
                                        <textarea cols="80" name="ans1" rows="10"><?php echo $ans1; ?></textarea>
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Answer 2</label>
                                    <div class="col-sm-10">
                                        <textarea cols="80" name="ans2" rows="10"><?php echo $ans2; ?></textarea>
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Answer 3</label>
                                    <div class="col-sm-10">
                                        <textarea cols="80" name="ans3" rows="10"><?php echo $ans3; ?></textarea>
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Answer 4</label>
                                    <div class="col-sm-10">
                                        <textarea cols="80" name="ans4" rows="10"><?php echo $ans4; ?></textarea>
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Correct Answer</label>
                                    <div class="col-sm-10">
                                        <select name="correct_ans" class="form-control">
                                        <?php
										$correct_ans;
										if($correct_ans==1)
										{
										?>
                                        <option value="1">Answers 1</option>
                                        <?php
										}
										elseif($correct_ans==2)
										{
											?>
                                            <option value="2">Answers 2</option>
                                            <?php
										}
										elseif($correct_ans==3)
										{
											?>
                                            <option value="3">Answers 3</option>
                                            <?php
										}
										elseif($correct_ans==4)
										{
											?>
                                            <option value="4">Answers 4</option>
                                            <?php
										}
										
										?>
                                        
                                        <option value="1">Answers 1</option>
                                        <option value="2">Answers 2</option>
                                        <option value="3">Answers 3</option>
                                        <option value="4">Answers 4</option>
                                        </select>
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-2">
                                        
                                       <input type="submit" name="update" value="Update" class="btn-primary btn">
                                    </div>
                                </div>
                            </form>
                            
                            
                        </div>
                    </div>                </div>
            </div>
            
            <!-- main menu -->
            <?php  include("include/left_menu.php");?>

        </div>

            <script>

			// This call can be placed at any point after the
			// <textarea>, or inside a <head><script> in a
			// window.onload event handler.

			// Replace the <textarea id="editor"> with an CKEditor
			// instance, using default configurations.

			CKEDITOR.replace( 'question' );

		</script>


    <script>

			// This call can be placed at any point after the
			// <textarea>, or inside a <head><script> in a
			// window.onload event handler.

			// Replace the <textarea id="editor"> with an CKEditor
			// instance, using default configurations.

			CKEDITOR.replace( 'ans1' );

		</script>
        
         <script>

			// This call can be placed at any point after the
			// <textarea>, or inside a <head><script> in a
			// window.onload event handler.

			// Replace the <textarea id="editor"> with an CKEditor
			// instance, using default configurations.

			CKEDITOR.replace( 'ans2' );

		</script>
        
         <script>

			// This call can be placed at any point after the
			// <textarea>, or inside a <head><script> in a
			// window.onload event handler.

			// Replace the <textarea id="editor"> with an CKEditor
			// instance, using default configurations.

			CKEDITOR.replace( 'ans3' );

		</script>
         <script>

			// This call can be placed at any point after the
			// <textarea>, or inside a <head><script> in a
			// window.onload event handler.

			// Replace the <textarea id="editor"> with an CKEditor
			// instance, using default configurations.

			CKEDITOR.replace( 'ans4' );

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
