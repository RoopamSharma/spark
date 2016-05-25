<?php 
session_start();
include("include/config.php");
if (isset($_SESSION['email123']))
{
?>
<?php 
if(isset($_POST['submit'])) 
{
  $query1 = mysql_query("insert into blogs(title,content,author) values('$_POST[text1]','$_POST[text2]','$_SESSION[company]')");
}
?>
<!DOCTYPE html>
<html>
    
    <head>
        <title>Blogs</title>
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
        <?php include('include/header.php');
		include('include/left_menu.php');
		?>
        
                
                <div class="span10">
                	<div class="row-fluid">




		                <div class="span12" id="content">
		                    <div class="row-fluid">
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Blogs</div>
		                            </div>
		                            
                                    <form action="blogs1.php" method="POST" enctype="multipart/form-data">
                                    <div class="block-content collapse in" style="margin-left: 20px;">
                                       
                                <label class="control-label">Title</label> 
                                <?php
                                echo '<input type="text" class="span6" id="typeahead" data-provide="typeahead" name="text1" style=" width: 800px;" value="">';
                                ?>
                                <label class="control-label">Content</label> 
                                       <textarea id="bootstrap-editor" name="text2" placeholder="Enter Text Here ..." style="width:98%;height:200px;">
                                       
                                       </textarea>
                                        <input type="submit" name="submit" value="Update" style="float:right; margin-right: 20px;"/></br></br>
                                    
		                        </form>
		                        </div>
		                       </div> <!-- /block -->
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