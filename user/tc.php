<?php 
session_start();
include("include/config.php");
if (isset($_SESSION['email123']))
{
?>
<?php 
if(isset($_POST['submit'])) { 
$sql=mysql_query("select * from tandc where uid='$_SESSION[company]'");
$result=mysql_fetch_assoc($sql);
if($result["uid"]!="")
{
$query1 = mysql_query("update tandc set terms='$_POST[text]' where uid='$_SESSION[company]';");
}
else{
$query1 = mysql_query("insert into tandc values('$_POST[text]','$_SESSION[company]')");
}
$sql1=mysql_query("select * from meta where uid='$_SESSION[company]' AND page='tc'");
$result1=mysql_fetch_assoc($sql1);
if($result1["uid"]!="")
{
  $query1 =mysql_query("update meta set keywd='$_POST[text2]' where uid='$_SESSION[company]' AND page='tc'");
  $query2=mysql_query("update meta set desp='$_POST[text3]' where uid='$_SESSION[company]' AND page='tc'");
if($_POST['text2']==""&&$_POST['text3']==""){
	   $sql1=mysql_query("delete from meta where uid='$_SESSION[company]' AND page='over'");
	   }

}
else{

$query1 = mysql_query("insert into meta(uid,page,keywd,desp) values('$_SESSION[company]','tc','$_POST[text2]','$_POST[text3]')");
}

}

?>


<!DOCTYPE html>
<html>
    
    <head>
        <title>Terms & Conditions</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
        <?php include('include/header.php');?>
        
        <div class="container-fluid">
            <div class="row-fluid">
               <?php include('include/left_menu.php'); 
			   $xyz1=mysql_query("select * from meta where page='tc' AND uid='$_SESSION[company]'");
									    $wxy2=mysql_fetch_assoc($xyz1);	
		
			   ?>
                <!--/span-->
                
                <div class="span10">
                    <div class="row-fluid">




                        <div class="span12" id="content">
                            <div class="row-fluid">
                                <!-- block -->
                                <div class="block">
                                    <div class="navbar navbar-inner block-header">
                                        <div class="muted pull-left">Terms & Conditions</div>
                                    </div>
                                    <form action="tc.php" method="POST" enctype="multipart/form-data">
                                    <div class="block-content collapse in">
                                    
                                       <textarea id="bootstrap-editor" name="text" placeholder="Enter Text Here ..." style="width:98%;height:200px;">
                                        <?php
                                        $xyz= mysql_query("select * from tandc where uid='$_SESSION[company]'");
                                        $wxy= mysql_fetch_array ($xyz);
                                        echo $wxy['terms'];
                                        ?>
                                        
                                       </textarea>
                                         <label class="control-label">Keywords</label> 
									<?php
                                echo '<input type="text" class="span6" id="typeahead" data-provide="typeahead" name="text2" style=" width: 800px;" value="'.$wxy2['keywd'].'">';
                                ?>
                                <label class="control-label">Description</label> 
                                <?php
                                echo '<input type="text" class="span6" id="typeahead" data-provide="typeahead" name="text3" style=" width: 800px;" value="'.$wxy2['desp'].'">';
                                ?>
                                        <input type="submit" name="submit" value="Update" style="float:right; margin-right: 20px;"/></br></br>
                                    </div>                             
                                </br></br>
                                </form>
                                </div>
                                <!-- /block -->
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <hr>
            
        </div>

        <!--/.fluid-container-->
        <script src="vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>

        <script src="vendors/ckeditor/ckeditor.js"></script>
        <script src="vendors/ckeditor/adapters/jquery.js"></script>

        <script type="text/javascript" src="vendors/tinymce/js/tinymce/tinymce.min.js"></script>

        <script src="assets/scripts.js"></script>
        <script>
        $(function() {
            // Bootstrap
            $('#bootstrap-editor').wysihtml5();

            // Ckeditor standard
            $( 'textarea#ckeditor_standard' ).ckeditor({width:'98%', height: '150px', toolbar: [
                { name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] }, // Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
                [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],          // Defines toolbar group without name.
                { name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
            ]});
            $( 'textarea#ckeditor_full' ).ckeditor({width:'98%', height: '150px'});
        });

        // Tiny MCE
        tinymce.init({
            selector: "#tinymce_basic",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });

        // Tiny MCE
        tinymce.init({
            selector: "#tinymce_full",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor"
            ],
            toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            toolbar2: "print preview media | forecolor backcolor emoticons",
            image_advtab: true,
            templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
            ]
        });

        </script>
    </body>

</html>
<?php
}
 else {
    header("Location: login.php");
 }
 ?>