<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="jsplug/multifilter.js"></script>
    <link rel="stylesheet" href="assets/icons/elusive-icons-2.0.0/css/elusive-icons.min.css">
    <link rel="stylesheet" href="assets/icons/font-awesome/css/font-awesome.min.css">
    <?php
		include("include/css.php");
    ?>
</head>
<body class="side_menu_active side_menu_expanded">
<div id="page_wrapper">
<!-- header -->
<?php
include("include/header.php");
$sid=$_GET['sid'];
?>
<div id="main_wrapper">
<div class='container'>
<div class="container-fluid">
<div class="row">
    <?php
		include_once ('functions.php');
		$con = new DB_con();
		$re=$con->selectseeker($sid);
		while($r=mysql_fetch_assoc($re))
		{	
		if($r['picture']!="")	{ ?>
		<img width="180" height="140" style="float:right; margin-right:150px;" src="uploads/<?php echo $r['picture']; ?>"/>
		<?php 
		} else { echo ""; }
		echo "Name	:	".$r['firstname']." ".$r['lastname'];
		echo '<br/>';
		echo "Birthdate	:	".$r['birthdate'];
		echo '<br/>';
		echo "Location	:	".$r['city'];
		echo '<br/>';
		echo "Experience	:	".$r['experience']."years";
		echo '<br/>';
		echo "Grade	:	";
		?>
        <input type="hidden" value="<?php echo $sid;?>" id="hid">
        <select name="grade" id="gradeset">
        <option value="0"></option>
        <option value="1" <?php if ($r['userlevel']=='1') echo "selected";?>>A1</option>
        <option value="2" <?php if ($r['userlevel']=='2') echo "selected";?>>A2</option>
        <option value="3"  <?php if ($r['userlevel']=='3') echo "selected";?>>A3</option>
        </select>
		<?php echo '<br/>';
		}
	?>
    
    <div class="col-md-11">
        Educational Qualifications
        <table class="table table-yuk2 toggle-arrow-tiny" id="footable_demo" data-filter="#textFilter" data-page-size="9">
            <thead>
                <th>Qualification</th>    
                <th>Institution</th>
                <th>Duration</th>
                <th>Marks</th>
            </thead>
            <tbody>
            <?php
            $res=$con->selectedu($sid);
            while($row=mysql_fetch_assoc($res))
            {
            ?>
            <tr>
                <td><?php if($row['course']=='graduation') { echo $row['cname'] .'<br/>'. $row['field']; } else { echo $row['course'].'<br/>'.$row['field']; } ?></td>
                <td><?php echo $row['institution']."<br/>".$row['university'];?></td>
                <td><?php if ($row['fromyear']!=0000) { echo $row['fromyear'] . ' - '.$row['toyear']; } else { echo $row['toyear']; }?></td>
                <td><?php echo $row['marks'];?></td>                                  
            </tr>
            <?php } ?>
            </tbody>
            <tfoot class="hide-if-no-paging">
                <tr>
                    <td colspan="5">
                        <ul class="pagination pagination-sm"></ul>
                    </td>
                </tr>
            </tfoot>
        </table>
        Job Experience
        <table class="table table-yuk2 toggle-arrow-tiny" id="footable_demo" data-filter="#textFilter" data-page-size="9">
            <thead>
                <th>Job Title</th>    
                <th>Company</th>
                <th>Duration</th>
                <th>Description</th>
            </thead>
            <tbody>
            <?php
            $res=$con->selectpro($sid);
            while($row=mysql_fetch_assoc($res))
            {
            ?>
            <tr>
                <td><?php echo $row['designation'];?></td>
                <td><?php echo $row['company']."<br/>".$row['university'];?></td>
                <td><?php if ($row['from_job']!=0000) { if ($row['to_job']!=0000) { echo $row['from_job'] . ' - '.$row['to_job']; } else { echo $row['from_job']."- present"; }  }else { echo "---- -".$row['to_job']; }?></td>
                <td><?php echo $row['description'];?></td>                                  
            </tr>
            <?php } ?>
            </tbody>
            <tfoot class="hide-if-no-paging">
                <tr>
                    <td colspan="5">
                        <ul class="pagination pagination-sm"></ul>
                    </td>
                </tr>
            </tfoot>
        </table>
        <?php include("include/left_menu.php");?>
        <?php include("include/footer.php");?>
    </div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
$( '#gradeset' ).change(function(){
var g=$(this).val();
var hid=$('#hid').val();
//alert(g+hid);
    $.ajax({
    type:'POST',
    url:'changegrade.php',
    data:{'g':g,'hid':hid},
    success: function(b){alert(b);}
    });
  /*alert( "Handler for .change() called." );*/
});
</script>
</body>    
</html>