<?php
  session_start();

  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['ID'])) {
    if (isset($_COOKIE['ID']) && isset($_COOKIE['email'])) {
     // $_SESSION['user_id'] = $_COOKIE['user_id'];
      //$_SESSION['username'] = $_COOKIE['username'];
    }
  }
?>
<?php
  require_once('uploadvars.php');
  require_once('connect.php');
  
    // Make sure the user is logged in before going any further.
  if (!isset($_SESSION['ID'])) {
    echo '<p class="login">Please <a href="index.html">log in</a> to access this page.</p>';
    exit();
  }
  //else {
    //echo('<p class="login">You are logged in as ' . $_SESSION['email'] . '</p>');
  //}
  $dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);
  // Grab the profile data from the database
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
       echo "It seems you havent given a test till now! Attempt a <a href='test_credentials.php'>test</a> to increase your chances ";
}

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
<!--<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cosmo/bootstrap.min.css" rel="stylesheet">-->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript">
/*function func()
{
document.getElementsByClassName("y")[0].style.display="block";
}
function func1()
{
  document.getElementsByClassName("y")[0].style.display="none";

}*/

</script>
</head>
<body>
  
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#exampleModal">Brand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Profile<span class="sr-only">(current)</span></a></li>
        <li><a href="userprofile3.html">Edit</a></li>
        <li><a href="test_credentials.php">Fill Details and Begin Test</a></li>
        <li><a href="notifications.php"><div class="notify">Notifications<?php $q=mysql_query("select * from recommend where ID='".$_SESSION['ID']."'",$dbc) or die(mysql_error()); $r=mysql_num_rows($q); echo '('.$r.')';?> </div></a></li>
       <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>-->
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container" style="padding-top: 60px;">
  <h1 class="page-header">Your Profile</h1>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <?php
         //echo '<img src="' . MM_UPLOADPATH . $row['picture'] .
        //'" alt="Profile Picture" class="avatar img-circle img-thumbnail" alt="avatar" />';
        echo '<img src="uploads/' . $row['picture'] . '"width="160" height="160"alt="Profile Picture" class="avatar img-circle img-thumbnail" alt="avatar" />';
        ?>
      </div>
    </form>
    </div>
   
    <!-- form column -->
    <!--<div class="col-md-8 col-sm-6 col-xs-12 personal-info">-->
      <h3>Personal info</h3>
       
        
        <div class="ff">

      <?php if (!empty($row['firstname']) && !empty($row['lastname'])) {
      echo '<label>Name :</label>' . $row['firstname'].' '.$row['lastname'];
      } 
      else echo 'Name';
      ?>
  </br>
   <?php  
     echo '<label>Gender:</label>';
      if ($row['gender'] == 'M') {
        echo 'Male';
      }
      else if ($row['gender'] == 'F') {
        echo 'Female';
      }
      else {
        echo '';
      }
      echo '</br>';
      if (!empty($row['birthdate'])) {
      if (!isset($_GET['ID']) || ($_SESSION['ID'] == $_GET['ID'])) {
        // Show the user their own birthdate
        echo 'Birthdate :' . $row['birthdate'];
      }
  }
      ?>
     <!--<a href="#" data-toggle="modal" data-target="#exampleModal">Edit</a>-->
     <a href="#" data-toggle="modal" data-target="#login-modal">Edit</a>
     <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
          <h1>Login to Your Account</h1><br>
          <form action="updatepersonal.php" method="post">
        <label>First Name</label>
        <input type="text" name="fn"></input>
        <label>Last Name</label>
        <input type="text" name="ln"></input>
        <label>Gender</label>
        <input type="gender" name="g"></input>
        <label>Date of Birth</label>
        <input type="date" name="d"></input>
        <input type="button" id="sub" name="persubmit" value="Submit"></input>
    </form> 
          
          <div class="login-help">
          <a href="#">Register</a> - <a href="#">Forgot Password</a>
          </div>
        </div>
      </div>
      </div> 
      <!--modal ends here-->
  </div>  
  <!--<div id="ff" style:"float:left" onmouseover="func()" onmouseout="func1()">-->
   
   <?php 
echo '<br/>';
  if (!empty($row['city'])) {
      echo 'Current Location:';
      if ($row['city'] == 'Delhi-NCR') {
        echo 'Delhi-NCR';
      }
      else if ($row['city'] == 'Mumbai') {
        echo 'Mumbai';
      }
      else if($row['city'] == 'Chennai') {
        echo 'Chennai';
      }
      else if($row['city'] == 'Kolkata') {
        echo 'Kolkata';
      }
      else if($row['city'] == 'Hyderabad') {
        echo 'Hyderabad';
      }
      else if($row['city'] == 'Pune') {
        echo 'Pune';
      }
      echo '';
    }
  ?>
   
  <?
     if (!empty($row['expyear']) && !empty($row['expmonth'])) {
      echo 'Experience : ' . $row['expyear'] .' years '.$row['expmonth'] .' months';
    }
    if (!empty($row['category'])) {
      echo 'Skills Category : ' . $row['category'];
    }
    if (!empty($row['subcategory'])) {
      echo 'Skills Sub-Category : ' . $row['subcategory'] ;
    }
     if (!empty($row['subsubcategory'])) {
      echo 'Skills subsubcategory : ' . $row['subsubcategory'] ;
    }
    if (!empty($row['prevjobs'])) {
      echo 'Professional Experience : ' . $row['prevjobs'] ;
    }
    if (!empty($row['certification'])) {
      echo 'Certification : ' . $row['certification'] ;
    }
}
 
      ?> 
     
        <div>
            <input class="btn btn-primary" value="Edit Profile" type="button" name="button" onClick="window.location.href='userprofile3.html'">
        </div>
      
    <!--</div>-->
  </div>
</div>
</body>
<?php } ?>
</html>