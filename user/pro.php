<?php 
session_start();
include("include/config.php");
if (isset($_SESSION['email123']))
{
?>



<?php 
if(isset($_POST['submit'])) {

  extract($_POST);
 $file_name_all="";
              for($i=0; $i<count($_FILES['support_images']['name']); $i++) 
              {
                     $tmpFilePath = $_FILES['support_images']['tmp_name'][$i];    
                     if ($tmpFilePath != "")
                     {    
                         $path = "uploads/";
                         $name = $_FILES['support_images']['name'][$i];
                        $size = $_FILES['support_images']['size'][$i];
         
                         list($txt, $ext) = explode(".", $name);
                         $file= time().substr(str_replace(" ", "_", $txt), 0);
                         $info = pathinfo($file);
                         $filename = $file.".".$ext;
                         if(move_uploaded_file($_FILES['support_images']['tmp_name'][$i], $path.$filename)) 
                         { 
                            date_default_timezone_set ("Asia/Calcutta");
                            $currentdate=date("d M Y");
                            $file_name_all.=$filename.",";
                         }
                   }
              }
              $filepath = rtrim($file_name_all, '*'); //imagepath if it is present  
 //$query=mysql_query("update product set images = case when images is null then '".addslashes($filepath)."' else concat(images, ' ".addslashes($filepath)."') end "); 
$query= mysql_query("insert into product(mcid,proname,prodesc,images,uid) values ('$_POST[mcid]','$_POST[text1]','$_POST[text]','$filepath','$_SESSION[company]')");
}
?>


<!DOCTYPE html>
<html>
    
    <head>
        <title>Add Products</title>
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
		include('include/left_menu.php');?>
        
                     
                <div class="span10">
                    <div class="row-fluid">




                        <div class="span12" id="content">
                            <div class="row-fluid">
                                <!-- block -->
                                <div class="block">
                                    <div class="navbar navbar-inner block-header">
                                        <div class="muted pull-left">Add Product</div>
                                    </div></br></br>
                                    <form action="pro.php" method="POST" enctype="multipart/form-data">
                                <div class="control-group" style="margin-left:20px;">
                                          <div class="controls" style="margin-left: 20px;">
                                          <label class="control-label" for="focusedInput">Add Product</label></br>
                                          <select name ="mcid" ><option value="">Select Main-Category</option>
                                            <?php  
                                            $res = mysql_query("select * from maincat where uid='$_SESSION[company]';");
                                            while ($row= mysql_fetch_assoc($res)) {
                                            echo '<option value="'.$row["mcid"] .' ">'.$row["mcname"] .'</option>';
                                            }
                                            ?>
                                         </select>
                                           </div>
                                <div class="controls" style="margin-left: 20px;">
                                <input  type="text" name="text1" placeholder="Product Name" class="span6" style=" width: 800px;">
                            </div>
                                                                <div class="block-content collapse in">
                                       <textarea id="bootstrap-editor" name="text" placeholder="Product Description ..." style="width:98%;height:200px;">
                                        
                                       </textarea>
                                       <label class="control-label" >Upload Images</label>            
                                <input type="file" id="file" name="support_images[]" multiple accept="image/*"/>
                                    <div class="controls" style="margin-left: 20px;">
                                <input type="submit" name="submit" value="&#10003" style="float: right; margin-right:10px; border-radius:4px;"/>
                                        </div>
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
        <script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","gethnt.php?q="+str,true);
  xmlhttp.send();
}
</script>

<script>
function showUsered(str) {
  if (str=="") {
    document.getElementById("txtHinted").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHinted").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","sidpro.php?q="+str,true);
  xmlhttp.send();
}
</script>
<script>
function showUseredi(str) {
  if (str=="") {
    document.getElementById("txtHintedi").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHintedi").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","newpro.php?q="+str,true);
  xmlhttp.send();
}
</script>
    </body>

</html>
<?php
}
 else {
    header("Location: login.php");
 }
 ?>