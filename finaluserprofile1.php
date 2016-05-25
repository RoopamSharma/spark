<?php
  session_start();

  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['ID'])) {
    if (isset($_COOKIE['ID']) && isset($_COOKIE['email'])) {
      $_SESSION['ID'] = $_COOKIE['ID'];
      $_SESSION['email'] = $_COOKIE['email'];
    }
  }
?>
<?php
  require_once('uploadvars.php');
  require_once('connect.php');
  
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
<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Roboto);

/****** LOGIN MODAL ******/
.loginmodal-container {
  padding: 30px;
  max-width: 350px;
  width: 100% !important;
  background-color: #F7F7F7;
  margin: 0 auto;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  font-family: roboto;
}

.loginmodal-container h1 {
  text-align: center;
  font-size: 1.8em;
  font-family: roboto;
}

.loginmodal-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.loginmodal-container input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.loginmodal-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.loginmodal {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.loginmodal-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #4d90fe;
  padding: 17px 0px;
  font-family: roboto;
  font-size: 14px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.loginmodal-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.loginmodal-container a {
  text-decoration: none;
  color: #666;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
} 

.login-help{
  font-size: 12px;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--""-->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cosmo/bootstrap.min.css" rel="stylesheet">
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

</head>
<body>
  
  <?php  ?>

<div class="container" style="padding-top: 0px;">
<?php
if (!isset($_GET['ID'])) {
    $query = "SELECT * FROM register_emp WHERE ID = '" . $_SESSION['ID'] . "'";
    
  }
  else {
    $query = "SELECT * FROM register_emp WHERE ID = '" . $_GET['ID'] . "'";
  }
  $data = mysql_query($query,$dbc);
 if (mysql_num_rows($data) == 1) {
    // The user row was found so display the user data
    $row = mysql_fetch_array($data);
    
    if($row['no_test']== 0){
       echo '<div class="alert alert-dismissible alert-danger">
  
  <strong>Oh snap!</strong> <a href="#" class="alert-link">You havent taken a test</a>Take one !!
</div>';
}
?>

<!--Warning Panel-->

  <!--warning ends here-->
  <h2 class="page-header">Your Profile</h2>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
     <div class="text-left" id='photo'>
      <div class="edit" id="edit"><a href="" data-toggle="modal" data-target="#img-upload" ><i class="fa fa-pencil fa-lg" ></i></a></div>
        <?php
         //echo '<img src="' . MM_UPLOADPATH . $row['picture'] .
        //'" alt="Profile Picture" class="avatar img-circle img-thumbnail" alt="avatar" />';
        echo '<img src="uploads/' . $row['picture'] . '"width="160" height="200"alt="Profile Picture" class="avatar img-square img-thumbnail" alt="avatar" />';
        ?>
        <div class="text-right" id='about'>
          <div class='about' id='about'><label>About me:</label><?php echo $row['aboutme']; ?></div>
          <div>
          <a href="#" data-toggle="modal" data-target="#about-modal">About Me </a>
         
        </div>
          </div> 
          <!--Panel demo-->  
          <div class="panel panel-primary" style="align:center;">
  <div class="panel-heading">
    <h3 class="panel-title">About Me</h3>
    <?php echo $row['aboutme']; ?>

  </div>
  <div class="panel-body">
    jzfsvnjhfnjajhnd
  </div>
</div>     
<!--panel demo-->
      <!--/div-->
    
    <!--/div-->
   
    <!-- form column -->
    <!--div class="col-md-8 col-sm-6 col-xs-12 personal-info"-->
      <h3>Personal info</h3>
       <a style="float:left;" href="#" data-toggle="modal" data-target="#cv-upload">Add your CV</a>
        
        <!--<div class="ff">-->
        <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <!--details begin-->

	  <?php if ($row['firstname']=="") { ?>
     
     <?php } else {
	 $q="select * from register_emp where ID='".$_SESSION['ID']."'";
	 $data=mysql_query($q,$dbc) or die(mysql_error());
	 $emp=mysql_fetch_assoc($data); ?>     
		<div style="width:auto;float:center;">
        <div >
        Personal Details
        <br/>
        <label>Name</label><?php echo $emp['firstname']." ".$emp['lastname'];?>
        <br/>
        <label>Gender</label><?php echo $emp['gender'];?>
        <br/>
        <label>Date of Birth</label><?php echo $emp['birthdate'];?>
        <br/>
        <label>Current Location</label><?php echo $emp['city'];?>
        <br/>
        <label>Contact No:</label><?php echo $emp['phone']; ?>
        <br/>
        <label>Category:</label><?php echo $emp['category']; ?>
        <br/>
        <label>Subcategory:</label><?php echo $emp['subcategory']; ?>
        <br/>
        <label>Sub sub category:</label><?php echo $emp['subsubcategory']; ?>
        <br/>
        </div>
        <div>
          <a href="#" data-toggle="modal" data-target="#login-modal">Edit Your Personal Details </a>
         
        </div>
         </div>
     <?php } ?>
	 <?php $q="select * from education where ID='".$_SESSION['ID']."' and course='X'";
	 $data=mysql_query($q,$dbc) or die(mysql_error());
	 $abcd=mysql_num_rows($data);
	 $edu=mysql_fetch_assoc($data);
	 if ($abcd==0) { ?>
     <a href="#" data-toggle="modal" data-target="#ten-modal">Add Class X details</a>
     <?php } else { ?>     
		<div  style="width:auto;">
        <div >
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

     <!--Job Details-->
<?php 
$q="select * from professional where ID='" . $_SESSION['ID'] . "' order by to_job desc";
$data=mysql_query($q,$dbc) or die(mysql_error());
$abcd=mysql_num_rows($data);

 ?>
<a href="#" data-toggle="modal" data-target="#job-modal">Add Previous Job details</a>
<div  style="width:auto">
        <div>
          <h4>Professional Details</h4>
          <?php while($job=mysql_fetch_assoc($data)) { ?>
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
                    <a href="#" data-toggle="modal" data-target="#job1-modal">Edit</a>
          <?php } ?>
        </div>
      </div>



     <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
     <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
     <!--modals begin-->
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
            <br/>
         <label>Category Skills</label> 
         <select class="form-control" id="category" name="category">
          <option value="Category 1" selected="<?php if ($row['category']=='Category 1') echo "selected";?>">Category 1</option>
          <option value="Category 2" selected="<?php if ($row['category']=='Category 2') echo "selected";?>">Category 2</option>
          <option value="Category 3" selected="<?php if ($row['category']=='Category 3') echo "selected";?>">Category 3</option>
         </select> 
        <br/>
        <label>SubCategory Skills</label> 
         <select class="form-control" id="subcategory" name="subcategory">
          <option value="Category 1" selected="<?php if ($row['subcategory']=='Category 1') echo "selected";?>">Category 1</option>
          <option value="Category 2" selected="<?php if ($row['subcategory']=='Category 2') echo "selected";?>">Category 2</option>
          <option value="Category 3" selected="<?php if ($row['subcategory']=='Category 3') echo "selected";?>">Category 3</option>
         </select> 
         <br/>
         <label>SubCategory Skills</label> 
         <select class="form-control" id="subsubcategory" name="subsubcategory">
          <option value="Category 1" selected="<?php if ($row['subsubcategory']=='Category 1') echo "selected";?>">Category 1</option>
          <option value="Category 2" selected="<?php if ($row['subsubcategory']=='Category 2') echo "selected";?>">Category 2</option>
          <option value="Category 3" selected="<?php if ($row['subsubcategory']=='Category 3') echo "selected";?>">Category 3</option>
         </select> 
         <br/>
        <div>
          </div>
        <button type="submit" class="btn btn-submit" id="submit" name='submit'>Save</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
       <!--<input type="button" id="submit" name="submit" value="Submit"></input>-->
     <!--removed div-->
    
    </form> 
          
        </div>
      </div>
      </div> 
      <!--modal ends here-->
  </div>
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
  <!--button to show cv-->
   <?php
         $sql="select * from register_emp where ID='" . $_SESSION['ID'] . "'";
         $result_set=mysql_query($sql);
 while($row=mysql_fetch_array($result_set))
 {
        ?>
<a href="cv/<?php echo $row['cvname'] ?>" class="btn btn-default" target="_blank">View Your CV</a>
<?php } ?>
 <!--modal to show cv-->
 <div class="modal fade" id='cv-modal' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
       
         </div>
        </div>
    </div>


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
        <div>
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
  </div>
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
        <div>
          </div>
        <button type="submit" class="btn btn-submit" id="twelvesubmit" name='twelvesubmit' value="save">Save</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
       <!--<input type="button" id="submit" name="submit" value="Submit"></input>-->
     <!--removed div-->

    </form> 
          
        </div>
      </div>
      </div> 
      <!--modal ends here-->
  </div>
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
  </div>
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
       <!--<input type="button" id="submit" name="submit" value="Submit"></input>-->
     <!--removed div-->

    </form> 
          
        </div>
      </div>
      </div> 
 <!--job edit modal-->
 <? php 
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
       <!--<input type="button" id="submit" name="submit" value="Submit"></input>-->
     <!--removed div-->

    </form> 
          
        </div>
      </div>
      </div>  
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
        <input type='text' name='about' value="<?php echo $edu['aboutme']; ?>"></input>
        
        <button type="submit" class="btn btn-submit" id="aboutsubmit" name='aboutsubmit' value="save">Save</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
       <!--<input type="button" id="submit" name="submit" value="Submit"></input>-->
     <!--removed div-->
     </form> 
          
        </div>
      </div>
      </div>      
      <!--modal ends here-->
  </div>
  
  <!--<div id="ff" style:"float:left" onmouseover="func()" onmouseout="func1()">-->
  <div id="ff">



  </div>
   <?php 
echo '<br/>';
  
  ?>
     
     
        <div>
        </div>
      
    <!--</div>-->
  </div>
</div>
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
</body>
<?php } ?>
</html>