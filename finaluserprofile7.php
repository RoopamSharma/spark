<?php
  session_start();
  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['ID'])) {
    if (isset($_COOKIE['ID']) && isset($_COOKIE['email'])) {
      $_SESSION['ID'] = $_COOKIE['ID'];
      $_SESSION['email'] = $_COOKIE['email'];
	  $_SESSION['difficulty_level']='1';
	  //set cat subcat subsubcat in session
    }
  }
?>
<?php
  require_once('uploadvars.php');
  require_once('connect.php');
  include("include/connection.php");
include("function/dbMySql.php");
  
    // Make sure the user is logged in before going any further.
  if (!isset($_SESSION['ID'])) {
    //echo '<p class="login">Please <a href="index.html">log in</a> to access this page.</p>';
    exit();
  }
  //else {
    //echo('<p class="login">You are logged in as ' . $_SESSION['email'] . '</p>');
  //}
  include('user_header.php');
  $dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);
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
    <div class="alert alert-dismissible alert-danger">
  <strong>Oh snap!</strong> <a href="#" class="alert-link">You havent taken a test</a>Take one !!</div> 
  <?php }	?>
  <!--warning ends here-->
<div class="container" style="padding-top:0px;">
  <h1 class="page-header">Your Profile</h1>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
            <div class="edit" id="edit"><a href="" data-toggle="modal" data-target="#img-upload" ><i class="fa fa-pencil fa-lg" ></i></a></div>
        <?php
        echo '<img src="uploads/' . $row['picture'] . '" width="160" height="200" alt="Profile Picture" class="avatar img-square img-thumbnail" alt="avatar" />';
        ?>
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
</div style="float:left">
        Personal Details
        <br/>
        <label>Name</label><?php echo $emp['firstname']." ".$emp['lastname'];?>
        <br/>
        <label>Gender</label><?php echo $emp['gender'];?>
        <br/>
        <label>Date of Birth</label><?php echo $emp['birthdate'];?>
        <br/>
        <label>Current Location</label><?php echo $emp['city'];?>
        </div>
             <?php } ?>
<div class='about' id='about'><label>About me:</label><?php echo $row['aboutme']?></div>



<?php $q="select * from education where ID='".$_SESSION['ID']."' and course='X'";
	 $data=mysql_query($q,$dbc) or die(mysql_error());
	 $abcd=mysql_num_rows($data);
	 $edu=mysql_fetch_assoc($data);
	 if ($abcd==0) { ?>
     <a href="#" data-toggle="modal" data-target="#ten-modal">Add Class X details</a>
     <?php } else { ?>     
		<div style="width:50%;">
        <div>
        Class X
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
		<div  style="width:auto;">
        <div>
        Class XII
        <br/>
        <label>School(Board)</label><?php echo $edu['institution']."(".$edu['university'].")";?>
        <br/>
        <label>Field of Study (Year) </label><?php echo $edu['field']."(".$edu['toyear'].")";?>
        <br/>
        <label>Percentage</label><?php echo $edu['marks'];?>
        </div>
        <div>
     <a href="#" data-toggle="modal" data-target="#twelve-modal">Edit</a>
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
		<div  style="width:auto">
        <div>
		Graduation
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
     <a href="#" data-toggle="modal" data-target="#grad-modal">Edit</a>
         </div>
         </div>
     <?php } ?>
     <?php 
	 $q="select * from education where ID='".$_SESSION['ID']."' and course='postgraduation'";
	 $data=mysql_query($q,$dbc) or die(mysql_error());
	 $abcd=mysql_num_rows($data);
	 $edu=mysql_fetch_assoc($data);
	 if($abcd==0) { ?>
     <a href="#" data-toggle="modal" data-target="#pg-modal">Add Post Graduation details</a>
     <?php } else { ?>     
		<div  style="width:auto">
        <div >
		Post Graduation
        <br/>
        <label>Institution (University)</label><?php echo $edu['institution']."(".$edu['university'].")";?>
        <br/>
		<label>Course (Field of Study)</label><?php echo $edu['cname']."(".$edu['field'].")";?>
        <br/>
        <label>Duration	:	</label><?php echo $edu['fromyear']."-".$edu['toyear'];?>
        <br/>        <label>Percentage</label><?php echo $edu['marks'];?>
        </div>
        <div>
     <a href="#"  data-toggle="modal" data-target="#pg-modal">Edit</a>
         </div>
         </div>
     <?php } ?>     
     

      
      
      
      
      
      
<!-----------------------------------------------------modals----------------------------------------------------------------->
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
<!-----------------------------------------------personal details-------------------------->
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
      </div>
      sdfghjkl;
      <!--modal ends here-->
<!-----------------------------------------------X--------------------------------------->
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
          </div>
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
          <h1>Graduation</h1><br>
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
<!------------------------------------post grad--------------------------------------->
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
        <button type="submit" class="btn btn-submit" id="pgsubmit" name='pgsubmit' value="save">Save</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
       <!--<input type="button" id="submit" name="submit" value="Submit"></input>-->
     <!--removed div-->
    </form> 
        </div>
      </div>
      </div> 
      <!--modal ends here-->
  </div>
  
 <!---------job modal-------------------------------------------------------------------------------------->
 <?php 
 $q="select * from professional where ID= '".$_SESSION['ID']."' and proid='".$_GET['proid']."'";
 $data=mysql_query($q,$dbc) or die(mysql_error());
  $pro=mysql_fetch_assoc($data);
 ?>
  <div class="modal fade" id="job1-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
          <h1>Edit your Professional Details</h1><br>
          <form id="login-form" action="" method="post">
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
        <input type="date" id='to' name='to' style="width: 100px;" value="<?php echo $pro['to_job']; ?>"/>
        <br/>
        <input type="checkbox" name="pr">Currently working here
        <br/>
        <label>Description</label>
        <input type="text" name='description' id='description' value="<?php $pro['description']; ?>">
        <button type="submit" class="btn btn-success" id="submitjob" name='submitjob'>Submit</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Exit</button>
    </form> 
          
        </div>
      </div>
      </div>
            <!--modal ends here-->
    <!------------------------------------------------------------------------------------------------------------->
    <!--Job detail modal-->
  <?php 
  $q="select * from professional where ID='".$_SESSION['ID']."'";
   $data=mysql_query($q,$dbc) or die(mysql_error());
   $edu=mysql_fetch_assoc($data); ?>
   <div class="modal fade" id="job-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
          <h1>Edit your Professional Details</h1><br>
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
        <button type="submit" class="btn btn-success" id="submitjob" name='submitjob'>Submit</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Exit</button>
    </form> 
        </div>
      </div>
      </div>
      <!--modal-->
      
      
      
      
      
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
</body>
<?php	}	?>
</html>