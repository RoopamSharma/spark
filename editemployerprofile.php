<html>
<head>
<title>Edit Profile</title>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>
  <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="#">Brand</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="finaluserprofile.php">View Profile</a>
                </li>
                <li><a href="viewuserprofile.php">Edit Profile</a>
                </li>
                <li><a href="test.php">Take test</a>
                </li>
                <li><a href="fbfcvxcv">Account</a>
                </li>
                <li><a href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container" style="padding-top: 60px;">
  <h1 class="page-header">Edit Employer Profile</h1>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <form method="post" enctype="multipart/form-data" action="employerpic.php">
      <div class="text-center">
        <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
        <img src="http://lorempixel.com/200/200/people/9/" class="avatar img-circle img-thumbnail" width="160" height="160" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block well well-sm" id="userfile" name="userfile">
        <input name="upload" type="submit" id="upload" value="upload">
      </div>
    </form>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <h3>Personal info</h3>
      <form class="form-horizontal" role="form" action="modifyemployerprofile.php" method="post">

        <div class="form-group">
          <label class="col-lg-3 control-label">Company name:</label>
          <div class="col-lg-8">
            <input class="form-control" name="coname" id="coname" type="text">
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
            <input class="form-control" name="about" id="about" type="text">
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