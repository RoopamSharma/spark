<html>
<head>
 <script type="application/javascript">
    window.location.href="sliderimages.php";
    </script>
    </head>
    <body>
	<?php   
include "includes/connection.php";
                          if(isset($_POST["isubmit"]))
                          {
						 /* echo '<pre>';
						  print_r($_POST);
						  die();*/
                            $getuploadfiles="";
                                $validExtensions = array(".gif", ".jpeg", ".jpg", ".png",".GIF",".JPEG",".JPG",".PNG", ".SWF", ".swf");
                                for($i=0;$i<=count($_FILES["file"]["name"])-1;$i++)
                                {
                                    $filename=$_FILES["file"]["tmp_name"][$i];
                                    $fileExtension = strrchr($_FILES['file']['name'][$i], ".");
                                    if (in_array($fileExtension, $validExtensions)) 
                                    {
                                            $newName = time() . '_' . $_FILES['file']['name'][$i];
                                         $destination = 'uploads/slider/' . $newName;
                                          if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $destination)) 
                                        {
                                                $getuploadfiles=$getuploadfiles.$newName.',';
                                            }
                                       } 
                                }
								$checkquery=mysql_query("select * from images");
		  $rows=mysql_num_rows($checkquery);
		  if(!(empty($getuploadfiles)))
		  {
		  $inputstring=$getuploadfiles;
		  $imgnames=explode(',',$inputstring);
		  $countimg=count($imgnames);
		  //echo $countimg;
		  for($i=0;$i<$countimg-1;$i++)
		  {
		  $index=$rows+$i+1;
		  $insertquery=mysql_query("insert into images values('$index','$imgnames[$i]')");
		  }
		  }
                            }
							unset($_POST);
							
                          ?>
						  </body>
                          </html>