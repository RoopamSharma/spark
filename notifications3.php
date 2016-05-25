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
  else {
    //echo('<p class="login">You are logged in as ' . $_SESSION['email'] . '</p>');
  }
  $dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);
  // Grab the profile data from the database
  if (!isset($_GET['ID'])) {
  }
  else {
    $_SESSION['ID']=$_GET['ID'];
  }
 ?>
 <html>
<head>
<title>View Notifications</title>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cosmo/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="jsplug/multifilter.js"></script>
<link href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select style="width:50%;"><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );
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
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="finaluserprofile.php">Profile<span class="sr-only">(current)</span></a></li>
        <li><a href="finaluserprofile.php">Edit</a></li>
        <li><a href="#">Take Test</a></li>
        <li><a href="notifications.php"><div class="notify">Notifications <?php $q=mysql_query("select * from recommend where ID='".$_SESSION['ID']."'",$dbc) or die(mysql_error()); $r=mysql_num_rows($q);
    echo '('.$r.')';?> </div></a></li>
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
<div id="main_wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-md-2">
<div class="list-group">
</div>
</div>
<div class='container'>
<div class="container-fluid">
  <h1>Notifications</h1>
<div class="row">
<div class="col-md-11">
<table id="example" class="display table table-yuk2 toggle-arrow-tiny">
<thead>
<tr>
<th>Job Title</th>    
<th>Employer</th>

<th>Status</th>
<th>Date/Time</th>

</tr>
</thead>
<tfoot>
<tr>
<th>Job Title</th>    
<th>Employer</th>

<th>Status</th>
<th>Date/Time</th>
</tr>
</tfoot>
<tbody>
<?php $q="select jobstatus,job_title,co_name,time from recommend,job,employer where recommend.jobid=job.jobid and job.employerid=employer.employerid and recommend.ID='".$_SESSION['ID']."' order by time desc";
  $data=mysql_query($q,$dbc) or die(mysql_error());
  while($r=mysql_fetch_assoc($data))  { 
  ?>
    <tr><td><?php echo $r['job_title'];?></td><td><?php echo $r['co_name'];?></td><td><?php echo $r['jobstatus'];?></td><td><?php echo $r['time'];?></td></tr>
    <?php } ?>


   ?>
 </tbody>
</div>
</div>
</div>
</div>