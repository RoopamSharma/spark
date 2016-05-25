<?php 
session_start();
include("include/config.php");
if (isset($_SESSION['email123']))
{
$company=$_SESSION['company'];
if(isset($_POST["submit"])){
                            $getuploadfiles="";
                                $validExtensions = array(".gif", ".jpeg", ".jpg", ".png",".GIF",".JPEG",".JPG",".PNG", ".SWF", ".swf");
                                for($i=0;$i<=count($_FILES["file"]["name"])-1;$i++)
                                {
                                    $filename=$_FILES["file"]["tmp_name"][$i];
                                    $fileExtension = strrchr($_FILES['file']['name'][$i], ".");
                                    if (in_array($fileExtension, $validExtensions)) 
                                    {
                                            $newName = time() . '_' . $_FILES['file']['name'][$i];
                                         $destination = 'uploads/' . $newName;
                                          if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $destination)) 
                                        {
                                                $getuploadfiles=$getuploadfiles.$newName.',';
                                            }
                                       } 
                                }
								
								
								$file_name_all="";
              for($i=0; $i<count($_FILES['support_images']['name']); $i++) 
              {
                     $tmpFilePath = $_FILES['support_images']['tmp_name'][$i];    
                     if ($tmpFilePath != "")
                     {    
                         $path = "uploads/islider/";
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
			  
			  
								
		  $checkquery=mysql_query("select * from icons where uid='$company'");
		  $rows=mysql_num_rows($checkquery);
		  if(!(empty($filepath)))
		  {
			  $inputstring=$filepath;
			  $imgnames=explode(',',$inputstring);
			  $countimg=count($imgnames);
			  //echo $countimg;
			  for($i=0;$i<$countimg-1;$i++)
			  {
				  $j=$rows+$i+1;
				  $insertquery=mysql_query("insert into icons values('$j','$imgnames[$i]','$company')");
			  }
		  }
		  
$sql=mysql_query("select * from home where uid='$company'");
$num=mysql_num_rows($sql);
$result=mysql_fetch_assoc($sql);
if($result["uid"]!="")
{
  $query1 = mysql_query("update home set title='".$_POST["title"]."' where uid='$company'");
  $query1 = mysql_query("update home set text='".$_POST["text"]."' where uid='$company'");

  if(!(empty($getuploadfiles)))
  {
 $query=mysql_query("update home set img='$getuploadfiles' where uid='$company'"); 
 }
}
else
{
$i=$num+1;
$query1 = mysql_query("insert into home values('$i','','$_POST[title]','$_POST[text]','$company')");
  if(!(empty($getuploadfiles)))
  {
 $query=mysql_query("update home set img='$getuploadfiles' where uid='$company'"); 
 }
}
$sql1=mysql_query("select * from meta where uid='$_SESSION[company]' AND page='home'");
$result1=mysql_fetch_assoc($sql1);
if($result1["uid"]!="")
{
  $query1 =mysql_query("update meta set keywd='$_POST[text2]' where uid='$_SESSION[company]' AND page='home'");
  $query2=mysql_query("update meta set desp='$_POST[text3]' where uid='$_SESSION[company]' AND page='home'");
   if($_POST['text2']==""&&$_POST['text3']==""){
	   $sql1=mysql_query("delete from meta where uid='$_SESSION[company]' AND page='home'");
	   }
}
else{

$query1 = mysql_query("insert into meta(uid,page,keywd,desp) values('$_SESSION[company]','home','$_POST[text2]','$_POST[text3]')");
  
  }


}
?>


<!DOCTYPE html>
<html>
    
    <head>
        <title>Overview</title>
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
		                                <div class="muted pull-left">Home</div>
		                            </div>
		                            
                                    <form action="home.php" method="POST" enctype="multipart/form-data">
                                    <div class="block-content collapse in">
                     Current Image	:	
					<br/>
                    <?php 
                    $lquery=mysql_query("select * from home where uid='$company'");
					$row=mysql_fetch_array($lquery);
					$xyz1=mysql_query("select * from meta where page='home' AND uid='$_SESSION[company]'");
	                $wxy2=mysql_fetch_assoc($xyz1);	
										
					$inputstring=$row['img'];
					$str_explode=explode(",",$inputstring);
					$string1 = $str_explode[0];
					if(!$string1)
					{
					echo "No image added yet";
					}
					else
					{
					?>
					<img src="uploads/<?php echo $string1;?>"></img>
                    <?php 
					}
					?>
                    
                    <label></label> <input type="file" name="file[]" class="imageupload">
                    <br/>
                    Title
                    <input type="text" id="title" name="title" value="<?php echo $row['title'];?>">
                    <br/>
                    Text
                    <textarea id="bootstrap-editor" name="text" placeholder="Enter Text Here ..." style="width:98%;height:200px;">
					<?php echo $row['text'];?>
                    </textarea>
                    <br/>
                    Slider Icons
					<?php 
                    $queryi = mysql_query("SELECT * FROM icons where uid='$company'");
					$i=1;
					$total=mysql_num_rows($queryi);
                    while( $i<=$total)
					{
					$row = mysql_fetch_array($queryi);
					$string[$i]=$row['img'];
					$in[$i]=$row['id'];
					$i++;
					}
					echo "<div>";
					for($i=1;$i<=$total;$i++)
					{
					$delid=$in[$i];
					echo "<figure>";
					?>
					<img src="uploads/islider/<?php echo $string[$i];?>" width='25%' height='50%'></img>
					<a href="delicon.php?id=<?php echo $delid ?>">delete</a>
                    <?php
					echo "</figure>"; 
					}
					?>
					<br/>
					</div>
				    <label></label>
                    <input type="file" id="file" name="support_images[]" multiple accept="image/*"/>
                      <label class="control-label">Keywords</label> 
                                <?php
                                echo '<input type="text" class="span6" id="typeahead" data-provide="typeahead" name="text2" style=" width: 800px;" value="'.$wxy2['keywd'].'">';
                                ?>
                                <label class="control-label">Description</label> 
                                <?php
                                echo '<input type="text" class="span6" id="typeahead" data-provide="typeahead" name="text3" style=" width: 800px;" value="'.$wxy2['desp'].'">';
                                ?>
                    <input type="submit" name="submit" value="Update" style="float:right; margin-right: 20px;"/></br></br>
					</div> <!-- /widget -->
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