<?php 
session_start();
include("include/config.php");
if (isset($_SESSION['email123']))
{
?>



<?php 
if(isset($_POST['submit'])) {
	$sql1=mysql_query("select * from meta where uid='$_SESSION[company]' AND page='pro'");
$result1=mysql_fetch_assoc($sql1);
if($result1["uid"]!="")
{
  $query1 =mysql_query("update meta set keywd='$_POST[text2]' where uid='$_SESSION[company]' AND page='pro'");
  $query2=mysql_query("update meta set desp='$_POST[text3]' where uid='$_SESSION[company]' AND page='pro'");
 if($_POST['text2']==""&&$_POST['text3']==""){
	   $sql1=mysql_query("delete from meta where uid='$_SESSION[company]' AND page='over'");
	   }

}
else{

$query1 = mysql_query("insert into meta values('$_SESSION[company]','pro','$_POST[text2]','$_POST[text3]')");
  
  }

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
              $filepath = rtrim($file_name_all, '*');

if($filepath!=""){
  $query = mysql_query("update product set proname='$_POST[text]',images='$filepath' where proid='$_POST[vi]' AND uid='$_SESSION[company]'");
  $query = mysql_query("update product set prodesc='$_POST[text1]' where proid='$_POST[vi]' AND uid='$_SESSION[company]'");
}
else{
	$query = mysql_query("update product set proname='$_POST[text]' where proid='$_POST[vi]' AND uid='$_SESSION[company]'");
  $query = mysql_query("update product set prodesc='$_POST[text1]' where proid='$_POST[vi]' AND uid='$_SESSION[company]'");
	}
?>
<script>  //window.location.href="all_pro.php";
</script>
<?php
}
?>
<?php 
if(isset($_POST['esubmit'])) { 
 // $query = mysql_query("update subsubcat set sscname='$_POST[text1]' where sscid='$_POST[sid]' ");
}

?>


<!DOCTYPE html>
<html>
    
    <head>
        <title>Edit Product</title>
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
						  $xyz1=mysql_query("select * from meta where page='pro' AND uid='$_SESSION[company]'");
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
                                        <div class="muted pull-left">Edit Product</div>
                                    </div>
                                    <form method="POST"  enctype="multipart/form-data">
                                    <div class="block-content collapse in">
                                        <div class="control-group">   
                                  <table class="table table-bordered">
                                  <thead>
                                  <tr>
                                  <th>Product Name</th>
                                  <th>Main-Category</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $sql="SELECT * FROM product where proid =".$_GET['id']."";
                                    $res=mysql_query($sql);
                                      echo '<tr>';
                                    while ($row= mysql_fetch_assoc($res)) {
                                      echo '<td>';
                                      echo $row['proname'];
                                      echo '</td>';
                                      echo '</br>';
                                    $sql1="SELECT * FROM maincat where mcid = '".$row['mcid']."'";
                                    $res1=mysql_query($sql1);
                                    if($row['mcid']== 0){
                                      echo '<td>';
                                      echo "--NIL--";
                                      echo '</td>';
                                    }
                                    else{
                                    while ($row1= mysql_fetch_assoc($res1)) {
                                      echo '<td>';
                                      echo $row1['mcname'];
                                      echo '</td>';
                                    }
                                  }
                                      echo '</br>';
                            
                                     echo '</br>';
                                     echo '</br>';

                                      echo '</tr>';
                                      echo '</tbody>';
                                      echo '</table>';
                                      echo '</br>';



                                    echo' <input type="hidden" name="vi" value="'.$row['proid'].'"/>';
                                    echo'<label class="control-label" for="focusedInput" >Edit Product Name</label>';
                                    echo '<input  type="text" value="'.$row["proname"].'" class="span6" id="typeahead" data-provide="typeahead" name="text" style=" width: 800px;" ">';  
                                    
                                   echo '</br>';
                                   echo '</br>';
                                    echo'<label class="control-label" for="focusedInput" >Edit Product Description</label>';
                                   echo'<textarea id="bootstrap-editor" name="text1" placeholder="Enter text ..." style="width:98%;height:200px;">';
								   $inputstring=$row['images'];
					$str_explode=explode(",",$inputstring);
					$string1 = $str_explode[0];
                                   
                                        echo $row['prodesc'];
                                     
                                   echo'</textarea>';
								echo'   <label class="control-label" >Upload Images</label><label>Current Image</label>                                 <img src=uploads/'.$string1.'></img><br/><br/>
                                <input type="file" id="file" name="support_images[]" multiple accept="image/*"/>
                                ';
                                   echo '</br>';
                                   echo '<input type="submit" name="submit" value="&#10003" style="float: right; margin-right:80px; border-radius:4px;"/></br></br>';
                                    }




                                    ?>                                
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
            <footer>
                
            </footer>
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
function showUserssc(str) {
  if (str=="") {
    document.getElementById("txtHint1").innerHTML="";
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
      document.getElementById("txtHintssc").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","midpro.php?q="+str,true);
  xmlhttp.send();
}
</script>
<script>
function showUsere(str) {
  if (str=="") {
    document.getElementById("txtHinte").innerHTML="";
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
      document.getElementById("txtHinte").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","s2s.php?q="+str,true);
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