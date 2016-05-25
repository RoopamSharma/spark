<?php
include("include/connection.php");
include("function/dbMySql.php");
date_default_timezone_set('Asia/Kolkata');
$con = new DB_con();

// data insert code starts here.

if(isset($_POST['submit']))
{

$shiftarraycalc1 = array();
$subcat_id=$_POST['subcat_id'];

if ($subcat_id )
{
    foreach ($subcat_id as $value)
    {
        array_push($shiftarraycalc1,$value);
    }
}

$shiftarraycalc3 = array();
$difficulty_level=$_POST['difficulty_level'];

if ($difficulty_level )
{
    foreach ($difficulty_level as $value)
    {
        array_push($shiftarraycalc3,$value);
    }
}

$shiftarraycalc = array();
$cat_id=$_POST['cat_id'];

if ($cat_id )
{
    foreach ($cat_id as $value)
    {
        array_push($shiftarraycalc,$value);
    }
}
 


$shiftarraycalc2 = array();
$subsubcat_id=$_POST['subsubcat_id'];

if ($subsubcat_id )
{
    foreach ($subsubcat_id as $value)
    {
        array_push($shiftarraycalc2,$value);
    }
}

  $question=$_POST['question'];
  $ans1=$_POST['ans1'];
  $ans2=$_POST['ans2'];
  $ans3=$_POST['ans3'];
  $ans4=$_POST['ans4'];
  $correct_ans=$_POST['correct_ans'];
  $difficulty_level=$_POST['difficulty_level'];
  $test_date = date('d-m-Y');
  $test_time = date('h:i:s');
  $status = 0;
 $con->insertquestion($cat_id,$subcat_id,$subsubcat_id,$question,$ans1,$ans2,$ans3,$ans4,$correct_ans,$test_date,$test_time,$status,$difficulty_level,$test_date,$test_time );
 ?>
 <script type="application/javascript">
   window.location="test.php";
 </script>
 <?php
 //header("Location: category.php");
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
                    <li><a href="dashboard.php">Online Test</a></li>
		            <li><span>Add Online Test</span></li>
		           
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
                                    <label for="profile_username" class="col-sm-2 control-label">Experience Level</label>
                                    <div class="col-sm-10">
                                         <select name="difficulty_level[]" class="form-control" multiple="multiple" >
                                          
                                        
                                        <option value="1">Level 1</option>
                                        <option value="2">Level 2</option>
                                        <option value="3">Level 3</option>
                                        </select>
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label for="profile_username" class="col-sm-2 control-label">Category Name</label>
                                    <div class="col-sm-10">
                                        <select name="cat_id[]" class="form-control"  multiple="multiple" >
                                        
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
                                        <select name="subcat_id[]" id="txtHint" class="form-control"  multiple="multiple">
                                           <?php 


                   $sql1="SELECT * FROM subcategory";
                    $result1=mysql_query($sql1);
                    while($row1= mysql_fetch_array($result1))
                    {
                     ?>
                                        <option value="<?php echo $row1['subcat_name'];?>"><?php echo $row1['subcat_name'];?></option>
                                        
 
                                        <?php
                    }
                    ?>
	 						
     						 </select>


                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_username" class="col-sm-2 control-label">Subsubcategory Name</label>
                                    <div class="col-sm-10">
                                        <select name="subsubcat_id[]" id="txtHint" class="form-control" multiple="multiple">
              
             
                 <?php 


                   $sql="SELECT * FROM subsubcategory";
                    $result=mysql_query($sql);
                    while($row= mysql_fetch_array($result))
                    {
                     ?>
                                        <option value="<?php echo $row['subsubcat_name'];?>"><?php echo $row['subsubcat_name'];?></option>
                                        
 
                                        <?php
                    }
                    ?>
                        </select>                    
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Question</label>
                                    <div class="col-sm-10">
                                        <textarea cols="80" name="question" rows="10"></textarea>
                                    </div>
                                </div>
                               
                                
                                
                                 <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Answer 1</label>
                                    <div class="col-sm-10">
                                        <textarea cols="80" name="ans1" rows="10"></textarea>
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Answer 2</label>
                                    <div class="col-sm-10">
                                        <textarea cols="80" name="ans2" rows="10"></textarea>
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Answer 3</label>
                                    <div class="col-sm-10">
                                        <textarea cols="80" name="ans3" rows="10"></textarea>
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Answer 4</label>
                                    <div class="col-sm-10">
                                        <textarea cols="80" name="ans4" rows="10"></textarea>
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Correct Answer</label>
                                    <div class="col-sm-10">
                                        <select name="correct_ans" class="form-control">
                                        <option value="0">Select Answers</option>
                                        <option value="1">Answers 1</option>
                                        <option value="2">Answers 2</option>
                                        <option value="3">Answers 3</option>
                                        <option value="4">Answers 4</option>
                                        </select>
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-2">
                                        
                                       <input type="submit" name="submit" value="Submit" class="btn-primary btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>                </div>
            </div>
            
            <!-- main menu -->
            <?php include("include/left_menu.php");?>

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
