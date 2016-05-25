<?php
  session_start();
  // If the session vars aren't set, try to set them with a cookie
 
  if (!isset($_SESSION['ID'])) {
    //$_SESSION['difficulty_level']='1';
//$_SESSION['category']="LINUX DEBUGGING";
//$_SESSION['subcategory']="RED HAT";
//$_SESSION['subsubcategory']="open source";
    if (isset($_COOKIE['ID']) && isset($_COOKIE['email'])) {
      $_SESSION['ID'] = $_COOKIE['ID'];
      $_SESSION['email'] = $_COOKIE['email'];
	  //set cat subcat subsubcat in session
    }
  }
?>
<?php
//require_once('uploadvars.php');
 //require_once('connect.php');
require_once("function/dbMySql2.php");
require_once('user_header.php');

    // Make sure the user is logged in before going any further.
  if (!isset($_SESSION['ID'])) {
    //echo '<p class="login">Please <a href="index.html">log in</a> to access this page.</p>';
    exit();
  }
  //else {
    //echo('<p class="login">You are logged in as ' . $_SESSION['email'] . '</p>');
  //}
 
  //$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
//mysql_select_db(DB_NAME);
  // Grab the profile data from the database
 ?>
<html>
<head>
<title>View Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/modal-style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php if (!isset($_GET['ID'])) {
    $query = "SELECT * FROM register_emp WHERE ID = '" . $_SESSION['ID'] . "'";
  }
  else {
    $query = "SELECT * FROM register_emp WHERE ID = '" . $_GET['ID'] . "'";
  }
  $data = mysql_query($query,$dbc);	?>
<!--Warning Panel-->
<?php   if (mysql_num_rows($data) == 1) {
    // The user row was found so display the user data
    $row = mysql_fetch_array($data);
    if($row['no_test']== 0){	?>
    <div class="alert alert-dismissible alert-info">


      <!--do put a alert before test_display.php before test if user haven't haven filled the test information-->
  <strong>Oh snap!</strong>  You havent taken a test. <a href="test_display.php" class="alert-link" align='center'> Take one !!</div> 
  <?php }	?>
  <!--warning ends here-->
  <div class="container" style="padding-top:0px;">
  <h1 class="page-header">Your Profile</h1>
  <div class="row" style="padding-top:20px;">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12" style="height: 300px;">
      <div class="text-center" style="height: 290px;" >

        <?php
        echo '<img src="uploads/' . $row['picture'] . '" width="200" height="200" alt="Profile Picture" class="avatar img-square img-thumbnail"  alt="avatar" />';
        ?>
                    
                    <div class="edit" id="edit">

                         <a  href="#" data-toggle="modal" data-target="#img-upload" ><i class="fa fa-pencil fa-lg" ></i></a>


                    </div>
      </div>
    </div>
<?php
 if ($row['firstname']=="") {
}	else	{
	 $q="select * from register_emp where ID='".$_SESSION['ID']."'";
	 $data=mysql_query($q,$dbc) or die(mysql_error());
	 $emp=mysql_fetch_assoc($data); ?>     
<div>

<div style="float:right">
<a href="#" class="btn btn-default" data-toggle="modal" data-target="#cv-upload">Add your CV</a>&nbsp;&nbsp;
  <!--button to show cv-->
     <?php
         $sql="select * from register_emp where ID='" . $_SESSION['ID'] . "'";
         $result_set=mysql_query($sql);
 while($r=mysql_fetch_array($result_set))
 {?>
<a href="cv/<?php echo $r['cvname'] ?>" class="btn btn-default" target="_blank">View Your CV</a>
<?php } ?>
</div>
<div style="float:right; margin-right:20px">
          <a href="#" data-toggle="modal" data-target="#login-modal">Edit Your Personal Details </a>
        
 </div>

<div style="float:left;margin-left:20px">
        <h5><strong>Personal Details</strong></h5>
        <label>Name: </label><?php echo $emp['firstname']." ".$emp['lastname'];?>
        <br/>
        <label>Gender: </label><?php echo $emp['gender'];?>
        <br/>
        <label>Date of Birth: </label><?php echo $emp['birthdate'];?>
        <br/>
        <label>Current Location: </label><?php echo $emp['city'];?>
        <br/>
        <label>About me: </label><?php echo $emp['aboutme']; ?>

        <a href="#" style="float:right;" data-toggle="modal" data-target="#about-modal"><strong>Edit About </strong></a>
         </div>
        <?php } ?>





<?php $q="select * from education where ID='".$_SESSION['ID']."' and course='X'";
	 $data=mysql_query($q,$dbc) or die(mysql_error());
	 $abcd=mysql_num_rows($data);
	 $edu=mysql_fetch_assoc($data);
	 if ($abcd==0) { ?>
     <a href="#" data-toggle="modal" data-target="#ten-modal">Add Class X details</a>
     <?php } else { ?>     
		<div style="width:50%; float:left">
        <div>
        <h4><strong>Class X</strong></h4>
        <br/>
        <label>School(Board)</label><?php echo $edu['institution']."(".$edu['university'].")";?>
        <br/>
        <label>Year of Study</label><?php echo $edu['toyear'];?>
        <br/>
        <label>Percentage</label><?php echo $edu['marks'];?>
        </div>
        <div>
        <a href="#" data-toggle="modal" data-target="#ten-modal">Edit</a>
        </div>
         </div>
     <?php } ?>
     <?php
	 $q="select * from education where ID='".$_SESSION['ID']."' and course='XII'";
	 $data=mysql_query($q,$dbc) or die(mysql_error());
	 $abcd=mysql_num_rows($data);
	 $edu=mysql_fetch_assoc($data);
	 if ($abcd==0) { ?>
     <a href="#" data-toggle="modal" data-target="#twelve-modal">Add Class XII details</a>
     <?php } else { ?>     
		<div  style="width:50%;float:left">
        <div>
        <h4><strong>Class XII</strong></h4>
        <br/>
        <label>School(Board)</label><?php echo $edu['institution']."(".$edu['university'].")";?>
        <br/>
        <label>Field of Study (Year) </label><?php echo $edu['field']."(".$edu['toyear'].")";?>
        <br/>
        <label>Percentage</label><?php echo $edu['marks'];?>
        </div>
        <div>
     <div style="float:right";><a href="#" data-toggle="modal" data-target="#twelve-modal">Edit</a></div>
         </div>
         
         </div>
     <?php } ?>
          <?php 
		  $q="select * from education where ID='".$_SESSION['ID']."' and course='graduation'";
	 $data=mysql_query($q,$dbc) or die(mysql_error());
	 $abcd=mysql_num_rows($data);
	 $edu=mysql_fetch_assoc($data);
	 if ($abcd==0) { ?>
     <a href="#" data-toggle="modal" data-target="#grad-modal">Add Graduation details</a>
     <?php } else { ?>     
	
    	<div  style="width:50%;float:left">
        <div>
		<h4><strong>Graduation</strong></h4>
        <br/>
        <label>Institution (University)</label><?php echo $edu['institution']."(".$edu['university'].")";?>
        <br/>
        <label>Course (Field of Study)</label><?php echo $edu['cname']."(".$edu['field'].")";?>
        <br/>
        <label>Duration	:	</label><?php echo $edu['fromyear']."-".$edu['toyear'];?>
        <br/>
        <label>Percentage</label><?php echo $edu['marks'];?>
        </div>
        <div>
     <div style="float:right";><a href="#" data-toggle="modal" data-target="#grad-modal">Edit</a></div>
         </div>
         </div>
     <?php } ?>
     <?php 
	 $q="select * from education where ID='".$_SESSION['ID']."' and course='postgraduation'";
	 $data=mysql_query($q,$dbc) or die(mysql_error());
	 $abcd=mysql_num_rows($data);
	 
	 ?>
     
          
		<div  style="width:50%; float:left;">
        <div >
		<h4><strong>Post Graduation</strong></h4>
    <a href="#" data-toggle="modal" data-target="#pgadd-modal">Add Post Graduation details</a>
    <br
        <?php while($edu=mysql_fetch_assoc($data)) { ?>
        <label>Institution (University)</label><?php echo $edu['institution']."(".$edu['university'].")";?>
        <br/>
		<label>Course (Field of Study)</label><?php echo $edu['cname']."(".$edu['field'].")";?>
        <br/>
        <label>Duration	:	</label><?php echo $edu['fromyear']."-".$edu['toyear'];?>
        <br/>        <label>Percentage</label><?php echo $edu['marks'];?>
        </div>
        <div>
     <div style="float:right";><a href="#" class="pg" data-id=<?php echo $edu['edu_id']?> data-toggle="modal" data-target="#pg-modal">Edit</a></div>
        <?php } ?>
         </div>
         </div>
<div class="modal fade" id="pgadd-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
          <h1>Post Graduation</h1><br>
         <form id="pg-form" action="updatepersonal.php" method="post">
        <label>Name of Course</label>
        <input type='text' name='cname' id='cname' value=""></input> 
        <label>Field of Study</label>
        <input type="text" name='field' id='field' value=""></input>
        <label>Name of Institution</label>
        <input type='text' name='institution' id='institution' value=""></input>
        <label>Name of University</label>
        <input type='text' name='university' id='university' value=""></input>          
        <label>Years of Study</label>
        <br/>
         <label>From</label><input type="number" min="1950" max="2025" step="1" value="" name="fyear" id='fyear'></input>
         <label>To</label><input type="number" min="1950" max="2025" step="1" value="" name="tyear" id='toyear'></input>
        <br/>
        <label>Percentage</label>
        <input type="text" name='per' id='per' value=""></input>
        <div>
          </div>
        <button type="submit" class="btn btn-submit" id="pgaddsubmit" name='pgaddsubmit' value="save">Save</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
       <!--<input type="button" id="submit" name="submit" value="Submit"></input>-->
     <!--removed div-->
    </form> 
        </div>
      </div>
      </div> 
 
 <!--certifications-->
 <?php 
      $q="select * from education where ID='".$_SESSION['ID']."' and course='certification'";

   $data=mysql_query($q,$dbc) or die(mysql_error());
   $abcd=mysql_num_rows($data);
    $edu=mysql_fetch_assoc($data);
   ?>
      <a href="#" data-toggle="modal" data-target="#certi-modal">Add Certifications and Courses</a>
   <?php ?>

     <div  style="width:50%;float:left">
        <div>
    <h4><strong>Certifications and Courses</strong></h4>
        <br/>
        <label>Institution (University)</label><?php echo $edu['institution']."(".$edu['university'].")";?>
        <br/>
        <label>Course/Certification (Field of Study)</label><?php echo $edu['cname']."(".$edu['field'].")";?>
        <br/>
        <label>Duration : </label><?php echo $edu['fromyear']."-".$edu['toyear'];?>
        <br/>
        <label>Percentage/Score</label><?php  echo $data['marks'];?>
        
        
     <div style="float:right";><a href="#" class="anchor" data-id=<?php echo $edu['edu_id']?> data-toggle="modal" data-target="#editcerti-modal">Edit</a></div>
     
         </div>
         
         </div>
         <?php } ?>
        </div> 

      
   
  <div class="modal fade" id="certi-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
          <h1>Add Certifications and Courses</h1><br>
         <form id="certi-form" action="updatepersonal.php" method="post">
        <label>Name of Course/Certification</label>
        <input type='text' name='cname' id='cname' value=""></input> 
        <label>Field of Study</label>
        <input type="text" name='field' id='field' value=""></input>
        <label>Name of Institution</label>
        <input type='text' name='institution' id='institution' value=""></input>
        <label>Name of University</label>
        <input type='text' name='university' id='university' value=""></input>          
        <label>Years of Study</label>
        <br/>
         <label>From</label><input type="number" min="1950" max="2025" step="1" value="" name="fyear" id='fyear'></input>
         <label>To</label><input type="number" min="1950" max="2025" step="1" value="" name="tyear" id='toyear'></input>
        <br/>
        <label>Percentage/Score</label>
        <input type="text" name='per' id='per' value=""></input>
        <div>
          </div>
        <button type="submit" class="btn btn-submit" id="certiadd" name='certiadd' value="save">Save</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
       <!--<input type="button" id="submit" name="submit" value="Submit"></input>-->
     <!--removed div-->
    </form> 
        </div>
      </div>
      </div> 
<!--certi edit modal-->

     <?php 
$q="select * from professional where ID='" . $_SESSION['ID'] . "' order by to_job desc";
$data=mysql_query($q,$dbc) or die(mysql_error());
$abcd=mysql_num_rows($data);

 ?>

<h4><strong>Professional Details</strong></h4>
<a href="#" style="float:right;" data-toggle="modal" data-target="#job-modal"><strong>Add Previous Job details</strong></a>
<?php while($job=mysql_fetch_assoc($data)) { ?>
<div  style="width:50%;float:left">
        <div>
          
          
          <br/>
          <label>Company Name:</label><?php echo $job['company']; ?>
          <br/>
          <label>Designation:</label><?php echo $job['designation']; ?>
          <br/>
          <label>Location:</label><?php echo $job['location']; ?>
          <br/>
          <label>Description:</label><?php echo $job['description']; ?>
          <br/>
          <label>From:</label><?php echo $job['from_job']; ?><label>To</label><?php echo $job['to_job']; ?>
          <br/>
          <div style="float:right";><a href="#" class="anchor" data-id=<?php echo $job['proid']?> data-toggle="modal" data-target="#job1-modal">Edit</a></div>
          
        </div>

      </div>
       <?php } ?>
<div>
</div>

      
      
      
      
      
      
<!--modals-->
  <!-- modal for img upload-->
<div class="modal fade" id='img-upload' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
          <h1>Upload your Image</h1><br>
          <form id="login-form" action="updatepersonal.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" >
            <button type="submit" id="upload" name='submitpic'>Upload</button>
          </form>
         </div>
        </div>
    </div>
    <!--modal-->
      <!--modal for cv upload-->
  <div class="modal fade" id='cv-upload' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
          <h1>Upload your CV</h1><br>
          <form id="login-form" action="updatepersonal.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" />
            <br/>
            <button type="submit" id="uploadcv" name='uploadcv'>Upload</button>
          </form>
         </div>
        </div>
        </div>
        <!--modal-->
<!---personal details-->
     <?php $curryear=date("Y");?>
     <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
          <h3>Edit your Personal Details</h3><br>
          <form id="login-form" action="updatepersonal.php" method="post">
        <label>First Name</label>
        <input type='text' name='fn' value="<?php echo $row['firstname'];  ?>"></input>
        <label>Last Name</label>
        <input type="text" name='ln' value="<?php echo $row['lastname'];  ?>"></input>
        <label>Gender</label>
        <!--<input type="text" name='g'></input>-->
        <label><input type="radio" <?php if ($row['gender']=='male') {echo "checked";}?> value="male" name="g">Male</label>
        <label><input type="radio" value="female" name="g">Female</label>
        <br/>
        <label>Contact No.</label>
        <input type="text" name='phone' value="<?php echo $row['phone']; ?>"></input>
        <label>Date of Birth</label>
        <input type="date" name='d' value="<?php echo $row['birthdate'];  ?>"></input>
        <label>Current Location</label>
        <select class="form-control" id="city" name="city">
            <option value="Delhi-NCR" selected="<?php if ($row['city']=='Delhi-NCR') echo "selected";?>">Delhi-NCR</option>
            <option value="Mumbai" selected="<?php if ($row['city']=='Mumbai') echo "selected";?>">Mumbai</option>
            <option value="Chennai" selected="<?php if ($row['city']=='Chennai') echo "selected";?>">Chennai</option>
            <option value="Kolkata" selected="<?php if ($row['city']=='Kolkata') echo "selected";?>">Kolkata</option>
            <option value="Hyderabad" selected="<?php if ($row['city']=='Hyderabad') echo "selected";?>">Hyderabad</option>
            <option value="Pune" selected="<?php if ($row['city']=='Pune') echo "selected";?>">Pune</option>
            </select>
         <label>Category Skills</label> 
         <select name="category">
<?php $sql= "SELECT DISTINCT `category_name`,`category_id` FROM `category`";
$result=mysql_query($sql) or die();
while ($row=mysql_fetch_array($result)) 
{ echo $row['category_name'];
?>               
<option value="<?php echo $row['category_name'];?>"><?php echo $row['category_name']; ?></option>
<?php	}	?>
</select> 
<label>Sub Category Skills</label> 
<select name="subcategory">
<?php
$sql="SELECT DISTINCT `subcat_name` FROM `subcategory`";
$result=mysql_query($sql) or die();
while ($row=mysql_fetch_array($result))
{
?>
<option value="<?php echo $row['subcat_name'];?>"><?php echo $row['subcat_name'];?></option>
<?php	}	?>
</select> 
         <label>Sub Sub Category Skills</label> 
         <select name="subsubcategory">
<?php
  $sql="SELECT DISTINCT `subsubcat_name` FROM `subsubcategory`";
        $result=mysql_query($sql) or die();
         while ($row=mysql_fetch_array($result))
          { 
		  echo $row['subsubcat_name'];
		  ?>
 <option value="<?php echo $row['subsubcat_name'];?>"><?php echo $row['subsubcat_name']; ?></option>
<?php               }
    ?>
</select>
        <button type="submit" class="btn btn-submit" id="submit" name='submit'>Save</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
    </form> 
    </div>
      </div>
      </div>
      
      
      <!--modal ends here-->
<!--X-->
<?php
	 $q="select * from education where ID='".$_SESSION['ID']."' and course='X'";
	 $data=mysql_query($q,$dbc) or die(mysql_error());
	 $edu=mysql_fetch_assoc($data); ?> 
  <div class="modal fade" id="ten-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
          <h1>Class X</h1><br>
          <form id="ten-form" action="updatepersonal.php" method="post">
        <label>Name of Institution</label>
        <input type='text' name='institution' value="<?php echo $edu['institution'];  ?>"></input>
        <label>Name of Board</label>
            <select class="form-control" id="board" name="board" selected="<?php echo $edu['university'];?>">
            <option>CBSE</option>
            <option>ICSE</option>
            <option>Others</option>
            </select>
            <br/>
        <label>Year of Study</label>
        <input type="number" min="1950" max="2025" step="1" value="<?php echo $edu['toyear'];?>" name="year"></input>
        <br/>
        <label>Percentage</label>
        <input type="text" name='per' value="<?php echo $edu['marks']; ?>"></input>
        <button type="submit" class="btn btn-submit" id="tensubmit" name='tensubmit' value="save">Save</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
       <!--<input type="button" id="submit" name="submit" value="Submit"></input>-->
     <!--removed div-->
     </form> 
          
        </div>
      </div>
      </div> 
      <!--modal ends here-->
<!-----------------------------------------------XII------------------------------------->
<?php
	 $q="select * from education where ID='".$_SESSION['ID']."' and course='XII'";
	 $data=mysql_query($q,$dbc) or die(mysql_error());
	 $edu=mysql_fetch_assoc($data); ?> 
  <div class="modal fade" id="twelve-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
          <h1>Class XII</h1><br>
          <form id="twelve-form" action="updatepersonal.php" method="post">
        <label>Name of Institution</label>
        <input type='text' name='institution' value="<?php echo $edu['institution'];  ?>"></input>
        <label>Name of Board</label>
            <select class="form-control" id="board" name="board" selected="<?php echo $edu['university'];?>">
            <option>CBSE</option>
            <option>ICSE</option>
            <option>Others</option>
            </select>
            <br/>
        <label>Year of Study</label>
         <input type="number" min="1950" max="2025" step="1" value="<?php echo $edu['toyear'];?>" name="year"></input>
         <br/>
        <label>Field of Study</label>
        <input type="text" name='field' value="<?php echo $edu['field'];?>"></input>
        <label>Percentage</label>
        <input type="text" name='per' value="<?php echo $edu['marks'];?>"></input>
        <button type="submit" class="btn btn-submit" id="twelvesubmit" name='twelvesubmit' value="save">Save</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
       <!--<input type="button" id="submit" name="submit" value="Submit"></input>-->
     <!--removed div-->

    </form> 
</div>
      </div>
      </div> 
      <!--modal ends here-->
<!-----------------------------------------grad------------------------------------>
<?php
	 $q="select * from education where ID='".$_SESSION['ID']."' and course='graduation'";
	 $data=mysql_query($q,$dbc) or die(mysql_error());
	 $edu=mysql_fetch_assoc($data); ?>
  <div class="modal fade" id="grad-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
          <h4><strong>Graduation</strong></h4><br>
         <form id="grad-form" action="updatepersonal.php" method="post">
        <label>Name of Course</label>
        <input type='text' name='cname' value="<?php echo $edu['cname'];  ?>"></input> 
        <label>Field of Study</label>
        <input type="text" name='field' value="<?php echo $edu['field'];?>"></input>
        <label>Name of Institution</label>
        <input type='text' name='institution' value="<?php echo $edu['institution']; ?>"></input>
        <label>Name of University</label>
        <input type='text' name='university' value="<?php echo $edu['university'];  ?>"></input>          
        <label>Years of Study</label>
        <br/>
         <label>From</label><input type="number" min="1950" max="2025" step="1" value="<?php echo $edu['fromyear'];?>" name="fyear"></input>
         <label>To</label><input type="number" min="1950" max="2025" step="1" value="<?php echo $edu['toyear'];?>" name="tyear"></input>
        <br/>
        <label>Percentage</label>
        <input type="text" name='per' value="<?php echo $edu['marks'];?>"></input>
        <div>
          </div>
        <button type="submit" class="btn btn-submit" id="gradsubmit" name='gradsubmit' value="save">Save</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
       <!--<input type="button" id="submit" name="submit" value="Submit"></input>-->
     <!--removed div-->

    </form> 
          
        </div>
      </div>
      </div> 
      <!--modal ends here-->
<!--post grad-->
<?php
	 $q="select * from education where ID='".$_SESSION['ID']."' and course='postgraduation'";
	 $data=mysql_query($q,$dbc) or die(mysql_error());
	 $edu=mysql_fetch_assoc($data); ?>
  <div class="modal fade" id="pg-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
          <h1>Post Graduation</h1><br>
         <form id="pg-form" action="updatepersonal.php" method="post">
        <label>Name of Course</label>
        <input type='text' name='cname' id='cname' value="<?php echo $edu['cname'];  ?>"></input> 
        <label>Field of Study</label>
        <input type="text" name='field' id='field' value="<?php echo $edu['field'];?>"></input>
        <label>Name of Institution</label>
        <input type='text' name='institution' id='institution' value="<?php echo $edu['institution']; ?>"></input>
        <label>Name of University</label>
        <input type='text' name='university' id='university' value="<?php echo $edu['university'];  ?>"></input>          
        <label>Years of Study</label>
        <br/>
         <label>From</label><input type="number" min="1950" max="2025" step="1" value="<?php echo $edu['fromyear'];?>" name="fyear" id='fyear'></input>
         <label>To</label><input type="number" min="1950" max="2025" step="1" value="<?php echo $edu['toyear'];?>" name="tyear" id='toyear'></input>
        <br/>
        <label>Percentage</label>
        <input type="text" name='per' id='per' value="<?php echo $edu['marks'];?>"></input>
        <div>
          </div>
        <button type="submit" class="btn btn-submit" id="pgsubmit" name='' value="save">Save</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
       <!--<input type="button" id="submit" name="submit" value="Submit"></input>-->
     <!--removed div-->
     <input type='hidden' name="hd" id="hd" value=""/>
    </form> 
        </div>
      </div>
      </div> 
      <!--modal ends here-->
  
 <!---------job modal-------------------------------------------------------------------------------------->
 <?php 
 $q="select * from professional where ID= '".$_SESSION['ID']."'";
 $data=mysql_query($q,$dbc) or die(mysql_error());
  $pro=mysql_fetch_assoc($data);
 ?>
  <div class="modal fade" id="job1-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
          <h1>Edit your Professional Details</h1><br>
          <form id="login-form" action="updatepersonal.php" method="post">
        <label>Company Name</label>
        <input type='text' name='coname' id='coname' value="<?php echo $pro['company']; ?>"></input>
        <label>Designation</label>
        <input type="text" name='designation'id='designation' value="<?php echo $pro['designation']; ?>">
      </input>
        <br/>
        <label>Location</label>
        <select class="form-control" id='location' name='location'>
            <option></option>
            <option>Delhi-NCR</option>
            <option>Mumbai</option>
            <option>Chennai</option>
            <option>Kolkata</option>
            <option>Hyderabad</option>
            <option>Pune</option>
            <option>Jaipur</option>
            <option>Bhopal</option>
            <option>Noida</option>
            <option>Gurgaon</option>
            </select>
            <br/>
        <label>From</label>
        <input type="date" id='from' name='from' style="width: 100px;" value="<?php echo $pro['from_job']; ?>"/>
        <label>To</label>
        <input type="date" id='to' name='to' style="width: 100px;" value="<?php if($pro['to_job']==max($pro['to_job'])) { echo 'Present'; }
        else
        { echo $pro['to_job']; } ?>"/>
        <br/>
        <input type="checkbox" name="pr">Currently working here
        <br/>
        <label>Description</label>
        <input type="text" name='description' id='description' value="<?php $pro['description']; ?>">
        <button type="submit" class="btn btn-submit" id="submitjob1" name='submitjob1'>Submit</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Exit</button>
         <input type='hidden' name="hd" id="hd" value=""/>
    </form> 
         
        </div>
      </div>
      </div>
            <!--modal ends here-->
    <!--->
    <!-Job detail modal-->
  <?php 
  $q="select * from professional where ID='".$_SESSION['ID']."'";
   $data=mysql_query($q,$dbc) or die(mysql_error());
   $edu=mysql_fetch_assoc($data); 
   ?>
   <div class="modal fade" id="job-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
          <h1>Add your Professional Details</h1><br>
          <form id="login-form" action="updatepersonal.php" method="post">
        <label>Company Name</label>

        <input type='text' name='coname' id='coname' value=""></input>
        <label>Designation</label>
        <input type="text" name='designation'id='designation' value="">
      </input>
        <br/>
        <label>Location</label>
        <select class="form-control" id='location' name='location'>
            <option></option>
            <option>Delhi-NCR</option>
            <option>Mumbai</option>
            <option>Chennai</option>
            <option>Kolkata</option>
            <option>Hyderabad</option>
            <option>Pune</option>
            <option>Jaipur</option>
            <option>Bhopal</option>
            <option>Noida</option>
            <option>Gurgaon</option>
            </select>
            <br/>
        <label>From</label>
        <input type="date" id='from' name='from' style="width: 100px;">
        <label>To</label>
        <input type="date" id='to' name='to' style="width: 100px;">
        <br/> 
        <input type="checkbox" name="pr">Currently working here</input>
        <br/>
        <label>Description</label>
        <input type="text" name='description' id='description' value="">
        <button type="submit" class="btn btn-submit" id="submitjob" name='submitjob'>Submit</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Exit</button>
    </form> 
        </div>
      </div>
      </div>
      <!--modal-->
      
      <!--About me Modal-->
 <?php 
 $que="select aboutme from register_emp where ID = '" . $_SESSION['ID'] . "'";
 $data=mysql_query($que,$dbc) or die(mysql_error());
   $edu=mysql_fetch_assoc($data);
 ?>

  <div class="modal fade" id="about-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
          <h1>About me</h1><br>
          <form id="about-form" action="updatepersonal.php" method="post">
        <label>Write a brief summary about yourself</label>
        <input class="" type='text' name='about' value="<?php echo $edu['aboutme']; ?>"></input>
        
        <button type="submit" class="btn btn-submit" id="aboutsubmit" name='aboutsubmit' value="save">Save</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
       <!--<input type="button" id="submit" name="submit" value="Submit"></input>-->
     <!--removed div-->
     </form> 
          
        </div>
      </div>
      </div>      
      <!--modal ends here-->
      
      
      
	<script type="text/javascript">
$(document).ready(function () {
$("input#submit").click(function(){
	$.ajax({
	  type:"POST",
	  url:'updatepersonal.php',
	  data:$('form.login-form').serialize(),
	  success: alert('Success'),
	  error: function(){
		alert("failure");
	  }
	});
  });
});
</script>
<script type="text/javascript">
$(document).ready(function () {
$("input#tensubmit").click(function(){
alert("ten here");
	$.ajax({
	  type:"POST",
	  url:'updatepersonal.php',
	  data:$('form.ten-form').serialize(),
	  success: alert('Success'),
	  error: function(){
		alert("failure");
	  }
	});
  });
});
</script>
<script type="text/javascript">
$(document).ready(function () {
$("input#twelvesubmit").click(function(){
	$.ajax({
	  type:"POST",
	  url:'updatepersonal.php',
	  data:$('form.twelve-form').serialize(),
	  success: alert('Success'),
	  error: function(){
		alert("failure");
	  }
	});
  });
});
</script>
<script type="text/javascript">
$(document).ready(function () {
$("input#gradsubmit").click(function(){
	$.ajax({
	  type:"POST",
	  url:'updatepersonal.php',
	  data:$('form.grad-form').serialize(),
	  success: alert('Success'),
	  error: function(){
		alert("failure");
	  }
	});
  });
});
</script>
<script type="text/javascript">
$(document).ready(function () {
$("input#pgsubmit").click(function(){
	$.ajax({
	  type:"POST",
	  url:'updatepersonal.php',
	  data:$('form.pg-form').serialize(),
	  success: alert('Success'),
	  error: function(){
		alert("failure");
	  }
	});
  });
});
</script>
<script type="text/javascript">
$(document).ready(function () {
$("input#upload").click(function(){
$.ajax({
  type:"POST",
  url:'updatepersonal.php',
  data:$('form.img-upload').serialize(),
  success: alert('Succesas'),
  error: function(){
                alert("failure");
            }
});
  });
});
</script>
<script type="text/javascript">
$(document).ready(function () {
$("input#uploadcv").click(function(){
$.ajax({
  type:"POST",
  url:'updatepersonal.php',
  data:$('form.cv-upload').serialize(),
  success: alert('Succesas'),
  error: function(){
                alert("failure");
            }
});
  });
});
</script>
<script type="text/javascript">
$(document).ready(function () {
$("input#aboutsubmit").click(function(){
$.ajax({
  type:"POST",
  url:'updatepersonal.php',
  data:$('form.about-submit').serialize(),
  success: alert('Succesas'),
  error: function(){
                alert("failure");
            }
});
  });
});
</script>
<!--for job edit modal-->
<script type="text/javascript">
$(document).ready(function () {
$("input#submitjob1").click(function(){
$.ajax({
  type:"POST",
  url:'updatepersonal.php',
  data:$('form.job1-modal').serialize(),
  success: alert('Succesas'),
  error: function(){
                alert("failure");
            }
});
  });
});
</script>
<!--for job edit modal display-->
<script type="text/javascript">
$(document).ready(function () {
  //alert("here1");
$(document).on("click", ".anchor", function (e) {
 //alert("here2");
    e.preventDefault();
    var myBookId = $(this).attr('data-id');
    $.ajax({
      url:'fnl.php',
      type:'GET',
      data:{'id':myBookId},
      success:function(response){
        var a=response;
        var json = JSON.parse(a);
        //var company = json["company"];
        //alert(a);
       $("#job1-modal #hd").val(myBookId);
       $("#job1-modal #coname").val(json["company"]);
       $("#job1-modal #designation").val(json["designation"]);
       $("#job1-modal #location").val(json["location"]);
       $("#job1-modal #description").val(json["description"]);
       //location.reload(true);
        //$("#job1-modal").show();
        /*$("#job1-modal ").val(myBookId);
        $("#job1-modal ").val(myBookId);*/
      }

     });
     //alert(myBookId);
     
     
     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
});
    </script>
    <!--for adding pg info-->
<script type="text/javascript">
$(document).ready(function () {
$("input#pgaddsubmit").click(function(){
$.ajax({
  type:"POST",
  url:'updatepersonal.php',
  data:$('form.pgadd-modal').serialize(),
  success: alert('Succesas'),
  error: function(){
                alert("failure");
            }
});
  });
});
</script>
<!--for editing pg info-->
<script type="text/javascript">
$(document).ready(function () {
$("input#pgaddsubmit").click(function(){
$.ajax({
  type:"POST",
  url:'updatepersonal.php',
  data:$('form.pgadd-modal').serialize(),
  success: alert('Succesas'),
  error: function(){
                alert("failure");
            }
});
  });
});
</script>
<script type="text/javascript">
$(document).ready(function () {
  //alert("here1");
$(document).on("click", ".pg", function (e) {
 //alert("here2");
    e.preventDefault();
    var myBookId = $(this).attr('data-id');
    $.ajax({
      url:'fnlpg.php',
      type:'GET',
      data:{'id':myBookId},
      success:function(response){
        var a=response;
        var json = JSON.parse(a);
        //var company = json["company"];
        //alert(a);
       $("#pg-modal #hd").val(myBookId);
       $("#pg-modal #cname").val(json["cname"]);
       $("#pg-modal #field").val(json["field"]);
       $("#pg-modal #institution").val(json["institution"]);
       $("#pg-modal #university").val(json["university"]);
       $("#pg-modal #fromyear").val(json["fromyear"]);
       $("#pg-modal #toyear").val(json["toyear"]);
       $("#pg-modal #per").val(json["per"]);

        //$("#job1-modal").show();
        /*$("#job1-modal ").val(myBookId);
        $("#job1-modal ").val(myBookId);*/
      }

     });
     //alert(myBookId);
     
     
     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
});
    </script>  
    <!--certification add-->
<script type="text/javascript">
$(document).ready(function () {
$("input#certiadd").click(function(){
$.ajax({
  type:"POST",
  url:'updatepersonal.php',
  data:$('form.certi-modal').serialize(),
  success: alert('Succesas'),
  error: function(){
                alert("failure");
            }
});
  });
});
</script> 

<script type="text/javascript">
$(document).ready(function () {
$("input#certiedit").click(function(){
$.ajax({
  type:"POST",
  url:'updatepersonal.php',
  data:$('form.certi-modal').serialize(),
  success: alert('Succesas'),
  error: function(){
                alert("failure");
            }
});
  });
});
</script>  

</body>

</html>

