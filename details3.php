<?php 
session_start();
if (!isset($_SESSION['username'])) {
    echo '<p class="login">Please <a href="index.php">log in</a> to access this page.</p>';
    exit();
  }
  else {
    echo('<p class="login">You are logged in as ' . $_SESSION['username'] . '</p>');
  }
?>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="jsplug/multifilter.js"></script>
<link rel="stylesheet" href="assets/icons/elusive-icons-2.0.0/css/elusive-icons.min.css">
        <link rel="stylesheet" href="assets/icons/font-awesome/css/font-awesome.min.css">
        <link href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
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

<?php
            include("include/css.php");
            ?>
</head>    
<script type='text/javascript'>
$(document).ready(function() {
$('.filter').multifilter()
})
</script>
<body class="side_menu_active side_menu_expanded">
<div id="page_wrapper">

            <!-- header -->
            <?php
            include("include/header.php");
            ?>
<div id="main_wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-md-2">
<div class="list-group">
<a href="javascript:void(0)" class="active list-group-item">Job Seekers</a>
</div>
</div>
<div class='container'>
<div class="container-fluid">
<div class="row">
<div class="col-md-11">
<table id="example" class="display table table-yuk2 toggle-arrow-tiny">
<thead>
<tr>
<th>Name</th>    
<th>Category</th>
<th>Experience</th>
<th>Grade</th>
<th>Job Ready</th>
<th> Manage</th>
</tr>
</thead>

<tbody>
     <?php
        include_once ('functions.php');
        $con = new DB_con();
        $res=$con->select();
        while($row=mysql_fetch_assoc($res))
        {
            ?>
                                            <tr>
                                                <td><?php  echo $row['firstname'] .' '. $row['lastname'] ?></td>
                                                <td><?php echo $row['category'].">".$row['subcategory'].">".$row['subsubcategory'] ?></td>
                                                <td><?php echo $row['experience']."years";?></td>
                                                <td><?php echo $row['userlevel'];?></td>
                                                <td><?php echo $row['jobready'];echo '&nbsp;&nbsp';if($row['jobready']=='0') echo '<a href="changejr.php?id='.$row['ID'].'&j=0">'; else if($row['jobready']=='1') echo '<a href="changejr.php?id='.$row['ID'].'&j=1">'; else echo '<a href="changejr.php?id='.$row['ID'].'">';
                                                    echo '<span class="el-icon-pencil bs_ttip" title="" style="margin-right: 8px;" ></span></a>'; ?>
                                                </td>
            
                                             <td> <?php
                                                    echo '<a href="viewseeker.php?sid='.$row['ID'].'">';
                                                    echo '<span class="el-icon-eye-open bs_ttip" title="View profile" style="margin-right: 8px;" ></span></a>';
                                                    if ($row['cvname']!="") { ?>
                                                    <a href="cv/<?php echo $row['cvname'];?>" target="blank">
                                                    <?php 
                                                    echo '<i class="fa fa-file-pdf-o" title="View CV" style="margin-right: 8px;" ></i></a>'; }
                                                    else {echo ""; }
                                                    echo '<a href="atestdetails.php?id='.$row['ID'].'">';
                                                    echo '<span class="el-icon-pencil bs_ttip" title="" style="margin-right: 8px;" ></span></a>';
                                                    ?>
                                                    <a href="assign.php?id=<?php echo $row['ID'];?>"><span title="Assign Jobseeker" class="glyphicons glyphicons-new-window"></span></a>
                                                </td>                                  

</tr>
<?php } ?> 
</tbody>
</table>
 <?php
            include("include/left_menu.php");
            ?>
        </div>
        <?php
            //include("include/footer.php");
            ?>
    </body>   
</html>