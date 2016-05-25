<?php 
session_start();
include("include/config.php");
if (isset($_SESSION['email123']))
{
?>



<?php 
if(isset($_POST['submit'])) {
$query= mysql_query("insert into maincat(mcname,uid) values ('$_POST[text]','$_SESSION[company]')"); 
}

?>
<?php 
if(isset($_POST['esubmit'])) { 
  $query = mysql_query("update maincat set mcname='$_POST[text]' where mcid='$_POST[vi]' AND uid='$_SESSION[company]' ");
}

?>


<!DOCTYPE html>
<html>
    
    <head>
        <title>Main Category</title>
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
                                        <div class="muted pull-left">Manage Main Category</div>
                                    </div></br></br>
                                    <form action="main_cat.php" method="POST" enctype="multipart/form-data">
                                <div class="control-group" style="margin-left:20px;">
                                          <div class="controls">
                                            <?php
                                            if (isset($_GET['id']))
                                            {
                                                                             echo' <label class="control-label" for="typeahead">Edit Main-Category </label>';
                                                  $xyz= mysql_query("select * from maincat where mcid='".$_GET['id']."' AND uid='$_SESSION[company]'");
                                                $wxy= mysql_fetch_array ($xyz);
                                                 $vi=$wxy['mcid']; 
											
                                                echo' <input type="hidden" name="vi" value="'.$vi.'"/>';
                                                 echo '<input  type="text" value="'.$wxy["mcname"].'" class="span6" id="typeahead" data-provide="typeahead" name="text" style=" width: 800px;" ">';                                         
                                          echo '<input type="submit" name="esubmit" value="&#10003" style="float: right; margin-right:80px; border-radius:4px;"/></br></br>';
                                         
                                            }
                                            else{
                                                                             echo' <label class="control-label" for="typeahead">Add New Main-Category </label>';
                                                 echo '<input  type="text" class="span6" id="typeahead" data-provide="typeahead" name="text" style=" width: 800px;" ">'; 
                                              echo ' <input type="submit" name="submit" value="&#10003" style="float: right; margin-right:80px; border-radius:4px;"/></br></br>';
                                         
                                            }
                                            //<input type="text" class="span6" id="typeahead" data-provide="typeahead" name="text" style="margin-left: 20px; width: 800px;" data-items="4" data-source="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]">                                            
                                          ?>
                                           </div>
                                        <div class="control-group">
                                          <label class="control-label" for="focusedInput" style="margin-left: 20px;">Main-Categories</label>
                                          <?php
                                               $res = mysql_query("select * from maincat where uid='$_SESSION[company]'");
                                                          while ($row= mysql_fetch_assoc($res)) {
                                                  echo'  <div class="alert alert-success" style="margin-right: 20px;">';
                                              echo'<button type="button" class="close"  name="del"><a href="main_cat_del.php?id='. $row["mcid"] .'" style="text-decoration:none;">&times;</a></button>';
                                              echo'<button type="button" class="close" name="edit"><a href="main_cat.php?id='. $row["mcid"] .'" style="text-decoration:none; margin-right:5px;">&#9997;</a></button>';
                                                            echo $row['mcname'] ;
                                                            echo '</div>';
                                                          }
                                            ?>
                                        </div>
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