<html>
<head>
<title>Edit Profile</title>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cosmo/bootstrap.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
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
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="finaluserprofile.php">Profile</a></li>
        <li class="active"><a href="viewuserprofile.php">Edit<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Take Test</a></li>
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
  <h1 class="page-header">Edit Profile</h1>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <form method="post" enctype="multipart/form-data" action="upload_pic.php">
      <div class="text-center">
        <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
        <img src="http://lorempixel.com/200/200/people/9/" class="avatar img-circle img-thumbnail" width="160" height="160" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block well well-sm" id="userfile" name="userfile">
        <input name="upload" type="submit" id="upload" class="btn btn-default btn-sm"  value="upload">
      </div>
    </form>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <h3>Personal info</h3>
      <form class="form-horizontal" role="form" action="edituserprofile.php" method="post">

        <div class="form-group">
          <label class="col-lg-3 control-label">First name:</label>
          <div class="col-lg-8">
            <input class="form-control" name="firstname" id="firstname" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Last name:</label>
          <div class="col-lg-8">
            <input class="form-control" name="lastname" id="lastname" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Gender:</label>
          <div class="col-lg-8">
            <div class="ui-select">
              <select id="gender" name="gender" class="form-control">
                <option value="Female" selected="selected">Female</option>
                <option value="Male">Male</option>
              </select>
              </div>
        </div>
      </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Experience:</label>
          <div class="col-lg-8">
            <div class="ui-select">
              <select id="experience" class="form-control" name="experience">
                <option value="Fresher">Fresher</option>
                <option value="Experienced(1-2 yr)" selected="selected">Experienced(1-2 yr)</option>
                <option value="Experienced(2+ yr)">Experienced(2+ yr)</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Date of Birth:</label>
          <div class="col-md-8">
            <input class="form-control" type="date" id="dob" name="dob">
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-primary" value="submit" type="submit" name="submit">
            <span></span>
            <input class="btn btn-default" value="Cancel" type="reset">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>