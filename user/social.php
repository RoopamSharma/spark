<?php 
session_start();
include("include/config.php");
if (isset($_SESSION['email123']))
{
$email=$_SESSION["email123"];
$company=$_SESSION["company"];
?>



<?php 
if(isset($_POST["submit"])){
$f=$_POST['f'];
$g=$_POST['g'];
$t=$_POST['t'];
$p=$_POST['p'];
$d=$_POST['d'];
$v=$_POST['v'];
$sql=mysql_query("select * from social where admin='$company'");
$result=mysql_fetch_assoc($sql);
if($result["admin"]!="")
{
$query1 = mysql_query("update `social` set `facebook`='$f', `googleplus`='$g', `twitter`='$t',`pinterest`='$p', `dribbble`='$d', `vimeo`='$v' where `admin`='$company'");
}
else{
$query1 = mysql_query("insert into social values('$company','$f','$g','$t','$p','$d','$v')");
}
}

?>


<!DOCTYPE html>
<html>
    
    <head>
        <title>Social</title>
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
        
<?php include('include/left_menu.php'); ?>
                <!--/span-->
                
                <div class="span10">
                	<div class="row-fluid">




		                <div class="span12" id="content">
		                    <div class="row-fluid">
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Social Media Links</div>
		                            </div>
		                            
                                    <form action="social.php" method="POST" enctype="multipart/form-data">
                                    <div class="block-content collapse in">
                                     <?php $query=mysql_query("select * from social where admin='$company'");
                                     $row=mysql_fetch_array($query); ?>
	<table cellpadding="5px" cellspacing="5px"><tr><td>						Facebook	:	</td><td><input type="text" id="f" name="f" value="<?php echo $row['facebook'];?>">
                            
                        </td></tr><tr><td>    Google+		:	</td><td><input type="text" id="g" name="g" value="<?php echo $row['googleplus'];?>"></td></tr><tr><td>
                            
                            Twitter		:</td><td>	<input type="text" id="t" name="t" value="<?php echo $row['twitter'];?>">
                            
                          </td></tr><tr><td>  Pinterest	:</td><td>	<input type="text" id="p" name="p" value="<?php echo $row['pinterest'];?>"></td></tr><tr><td>
                            
                            Dribbble	:</td><td>	<input type="text" id="d" name="d" value="<?php echo $row['dribbble'];?>">
                            
                         </td></tr><tr><td>   Vimeo		:	</td><td><input type="text" id="v" name="v" value="<?php echo $row['vimeo'];?>">
                                      
							</td></tr></table>
                                        <input type="submit" name="submit" value="Update" style="float:right; margin-right: 20px;"/></br></br>
                                    </div>  
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
				{ name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },	// Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
				[ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],			// Defines toolbar group without name.
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