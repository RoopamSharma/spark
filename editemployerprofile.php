<?php
  session_start();

  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['employerid'])) {
    if (isset($_COOKIE['employerid']) && isset($_COOKIE['co_email'])) {
     // $_SESSION['user_id'] = $_COOKIE['user_id'];
      //$_SESSION['username'] = $_COOKIE['username'];
    }
  }
?>
<html>
<head>
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
<title>Edit Profile</title>
 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cosmo/bootstrap.min.css" rel="stylesheet">
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

</head>
<body>
 
  <?php if (!isset($_SESSION['employerid'])) {
    echo '<p class="login">Please <a href="employerstart.html">log in</a> to access this page.</p>';
    exit();
  }
  else {
    //echo('<p class="login">You are logged in as ' . $_SESSION['employerid'] . '. <a href="logoutemployer.php">Log out</a>.</p>');
  }    
  
 ?>     
 <?php include('employer_header.php'); ?>
<div class="container" style="padding-top: 0px;">
  <h1 class="page-header">Edit Employer Profile</h1>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <form method="post" enctype="multipart/form-data" action="employerpic.php">
      <div class="text-center">
        <!--<input type="hidden" name="MAX_FILE_SIZE" value="2000000">-->

       <?php 
       require_once('uploadvars.php');
  require_once('connect.php');

       $dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);
       if (!isset($_GET['employerid'])) {
    $query = "SELECT name, co_name,co_email,co_type,co_about,emp_picture FROM employer WHERE employerid = '" . $_SESSION['employerid'] . "'";
  }
  else {
    $query = "SELECT name, co_name,co_email,co_type,co_about,emp_picture FROM employer WHERE employerid = '" . $_GET['employerid'] . "'";
  }
  $data = mysql_query($query,$dbc) or die(mysql_error());
 if (mysql_num_rows($data) == 1) {
    // The user row was found so display the user data
    $row = mysql_fetch_array($data);
  echo '<img src="uploads/' . $row['emp_picture'] . '"width="160" height="160"alt="Profile Picture" class="avatar img-square img-thumbnail" alt="avatar" />';
}
        ?>
        <h6>Upload a different photo...</h6>
        <!--<input type="file" class="text-center center-block well well-sm" id="userfile" name="userfile">-->
        <!--<button type="button" class="btn btn-sm btn-border" id="upload" name="upload" data-toggle="modal" data-target="#img-uploader">Upload</button>-->
      <div class="edit" id="edit"><a href="" data-toggle="modal" data-target="#imgupload" ><i class="fa fa-pencil fa-lg" ></i></a></div>
    </form>
    </div>
    
      </div>
    <!--img uploader modal-->
    <div class="modal fade" id='imgupload' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
          <h1>Upload your Image</h1><br>
          <form id="login-form" action="imguploader2.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" >
            <button type="submit" id="submitpic" name='submitpic'>Upload</button>
          </form>
         </div>
        </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <form class="form-horizontal" role="form" action="modifyemployerprofile.php" method="post">

        <div class="form-group">
          <label class="col-lg-3 control-label">Company name:</label>
          <div class="col-lg-8">
            <input class="form-control" name="coname" id="coname" value="<?php echo $row['co_name']; ?>" type="text">
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-lg-3 control-label">Company Type:</label>
          <div class="col-lg-8">
            <div class="ui-select">
              <select id="cotype" name="cotype" class="form-control">
                <option value="MNC" selected="selected">MNC</option>
                <option value="StartUp">StartUp</option>
                <option value="Government">Government</option>
                <option value="Own Business">Own Business</option>
              </select>
              </div>
        </div>
      </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">About Company:</label>
          <div class="col-lg-8">
            <input class="form-control" name="about" id="about" value="<?php echo $row['co_about']; ?>"type="text">
          </div>
        </div>
         
        
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-disabled" value="submit" type="submit" name="submit">
            <span></span>
            <input class="btn btn-default" value="Cancel" type="reset">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function () {
$("input#submitpic").click(function(){
$.ajax({
  type:"POST",
  url:'imguploader2.php',
  data:$('form.imgupload').serialize(),
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