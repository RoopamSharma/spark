<?php session_start();
include_once ("connect.php");
$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
 mysql_select_db(DB_NAME);
 //echo 'Hi';
 //image upload script
 if(isset($_POST['submitpic']))
{
     //echo "hi";
 $file = rand(1000,100000)."-".$_FILES['file']['name'];                                                      //rand(1000,100000)."-".$_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $temp = explode(".",$_FILES['file']['name']);
$newfilename = rand(1,99999) . '.' .end($temp);
//echo $newfilename;
 $folder="uploads/";
 if($file_type=="image/gif" || $file_type=="image/png" || $file_type=="image/jpeg" && $file_size>=0 && $file_size<=9485760)
 {
  //echo "bye";
  move_uploaded_file($_FILES['file']['tmp_name'],$folder . $newfilename);
 //move_uploaded_file($file_loc,$folder.$file);
 //$sql="UPDATE register_emp(picture,p_type,p_size) VALUES('$newfilename','$file_type','$file_size') WHERE ID='" . $_SESSION['ID'] . "'";
  $dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);
 $sql="UPDATE register_emp SET picture='$newfilename',p_type='$file_type',p_size='$file_size' WHERE ID='" . $_SESSION['ID'] . "'";
 mysql_query($sql) or die(mysql_error());
 //echo "File successfully uploaded";
 mysql_close();
}
else
{
// echo "Error occured";
}
}

//cv upload script
if(isset($_POST['uploadcv']))
{
     //echo "hi";
 $file = rand(1000,100000)."-".$_FILES['file']['name'];                                                      //rand(1000,100000)."-".$_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $temp = explode(".",$_FILES['file']['name']);
$newfilename = rand(1,99999) . '.' .end($temp);
echo $newfilename;
 $folder="cv/";
 if($file_type=="application/pdf" || $file_type=="application/vnd.openxmlformats-officedocument.wordprocessingml.document" && $file_size>=0 && $file_size<=9485760)
 {
  //echo "bye";
  move_uploaded_file($_FILES['file']['tmp_name'],$folder . $newfilename);
 //move_uploaded_file($file_loc,$folder.$file);
 //$sql="UPDATE register_emp(picture,p_type,p_size) VALUES('$newfilename','$file_type','$file_size') WHERE ID='" . $_SESSION['ID'] . "'";
  $dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);
 $sql="UPDATE register_emp SET cvname='$newfilename',cvtype='$file_type',cvsize='$file_size' WHERE ID='" . $_SESSION['ID'] . "'";
 mysql_query($sql) or die(mysql_error());
 echo "File successfully uploaded";
 mysql_close();
}
else
{
 echo "Error occured";
}
}

//XII personal details
if(isset($_POST['submit']))
{
$f=mysql_real_escape_string($_POST['fn']);
$l=mysql_real_escape_string($_POST['ln']);
$g=mysql_real_escape_string($_POST['g']);
$d=mysql_real_escape_string($_POST['d']);
$city=mysql_real_escape_string($_POST['city']);
$phone=mysql_real_escape_string($_POST['phone']);
$category=$_POST['category'];
$category   = mysql_real_escape_string($category);
$subcategory=$_POST['subcategory'];
$subcategory   = mysql_real_escape_string($subcategory);
$subsubcategory=$_POST['subsubcategory'];
$subsubcategory   = mysql_real_escape_string($subsubcategory);
$q=mysql_query("select * from register_emp where ID = '" . $_SESSION['ID'] . "'");
$count=mysql_num_rows($q);
if($count==1)
{
$query="UPDATE register_emp set firstname='$f',lastname='$l',gender='$g',birthdate='$d',city='$city',phone='$phone',category='$category',subcategory='$subcategory',subsubcategory='$subsubcategory' WHERE ID = '" . $_SESSION['ID'] . "'";
$data=mysql_query($query,$dbc) or die(mysql_error());
}
else
{
$query="insert into register_emp(ID,firstname,lastname,gender,birthdate,city,phone,category,subsubcatgory,subsubcategory) values ('" . $_SESSION['ID'] . "','$f','$l','$g','$d','$city','$phone','$category','$subcategory','subsubcategory')";
$data=mysql_query($query,$dbc) or die(mysql_error());
}
$_SESSION['category']=$category;
$_SESSION['subcategory']=$subcategory;
$_SESSION['subsubcategory']=$subsubcategory;
}


//add X details
if(isset($_POST['tensubmit']))
{
$a=mysql_real_escape_string($_POST['institution']);
$b=mysql_real_escape_string($_POST['board']);
$c=mysql_real_escape_string($_POST['year']);
$d=mysql_real_escape_string($_POST['per']);
$q=mysql_query("select * from education where ID = '" . $_SESSION['ID'] . "' and course='X'");
$count=mysql_num_rows($q);
if($count==1)
{
$query="UPDATE education set institution='$a',university='$b',toyear='$c',marks='$d',field='$e' WHERE ID = '" . $_SESSION['ID'] . "' and course='X'";
$data=mysql_query($query,$dbc) or die(mysql_error());
}
else
{
$query="insert into education(ID,course,institution,university,toyear,marks,field) values ('".$_SESSION['ID']."','X','$a','$b','$c','$d','$e')";
$data=mysql_query($query,$dbc) or die(mysql_error());
}
}

//add XII details
if(isset($_POST['twelvesubmit']))
{
$a=mysql_real_escape_string($_POST['institution']);
$b=mysql_real_escape_string($_POST['board']);
$c=mysql_real_escape_string($_POST['year']);
$d=mysql_real_escape_string($_POST['per']);
$e=mysql_real_escape_string($_POST['field']);
$q=mysql_query("select * from education where ID = '" . $_SESSION['ID'] . "' and course='XII'");
$count=mysql_num_rows($q);
if($count==1)
{
$query="UPDATE education set institution='$a',university='$b',toyear='$c',marks='$d',field='$e' WHERE ID = '" . $_SESSION['ID'] . "' and course='XII'";
$data=mysql_query($query,$dbc) or die(mysql_error());
}
else
{
$query="insert into education(ID,course,institution,university,toyear,marks,field) values ('".$_SESSION['ID']."','XII','$a','$b','$c','$d','$e')";
$data=mysql_query($query,$dbc) or die(mysql_error());
}
}

//grad
if(isset($_POST['gradsubmit']))
{
$cn=mysql_real_escape_string($_POST['cname']);
$a=mysql_real_escape_string($_POST['institution']);
$b=mysql_real_escape_string($_POST['university']);
$c=mysql_real_escape_string($_POST['fyear']);
$d=mysql_real_escape_string($_POST['tyear']);
$e=mysql_real_escape_string($_POST['per']);
$f=mysql_real_escape_string($_POST['field']);
$q=mysql_query("select * from education where ID = '" . $_SESSION['ID'] . "' and course='graduation'");
$count=mysql_num_rows($q);
if($count==1)
{
$query="UPDATE education set cname='$cn',institution='$a',university='$b',fromyear='$c',toyear='$d',marks='$e',field='$f' WHERE ID = '" . $_SESSION['ID'] . "' and course='graduation'";
$data=mysql_query($query,$dbc) or die(mysql_error());
}
else
{
$query="insert into education(ID,course,cname,institution,university,fromyear,toyear,marks,field) values ('".$_SESSION['ID']."','graduation','$cn','$a','$b','$c','$d','$e','$f')";
$data=mysql_query($query,$dbc) or die(mysql_error());
}
}

//post-graduation insertion
if(isset($_POST['pgaddsubmit']))
{
$cn=mysql_real_escape_string($_POST['cname']);
$a=mysql_real_escape_string($_POST['institution']);
$b=mysql_real_escape_string($_POST['university']);
$c=mysql_real_escape_string($_POST['fyear']);
$d=mysql_real_escape_string($_POST['tyear']);
$e=mysql_real_escape_string($_POST['per']);
$f=mysql_real_escape_string($_POST['field']);
$q=mysql_query("select * from education where ID = '" . $_SESSION['ID'] . "' and course='postgraduation'");

$query="insert into education(ID,course,cname,institution,university,fromyear,toyear,marks,field) values ('".$_SESSION['ID']."','postgraduation','$cn','$a','$b','$c','$d','$e','$f')";
$data=mysql_query($query,$dbc) or die(mysql_error());

}

//pg-upfdation
if(isset($_POST['pgsubmit']))
{
 $cn=mysql_real_escape_string($_POST['cname']);
$a=mysql_real_escape_string($_POST['institution']);
$b=mysql_real_escape_string($_POST['university']);
$c=mysql_real_escape_string($_POST['fyear']);
$d=mysql_real_escape_string($_POST['tyear']);
$e=mysql_real_escape_string($_POST['per']);
$f=mysql_real_escape_string($_POST['field']);
$q=mysql_query("select * from education where ID = '" . $_SESSION['ID'] . "' and course='postgraduation'");
$count=mysql_num_rows($q);
$id=$_SESSION['ID'];
$hd=$_POST['hd'];
//echo "<pre>";
//print_r($_POST);
$query="UPDATE education set cname='$cn',institution='$a',university='$b',fromyear='$c',toyear='$d',marks='$e',field='$f' WHERE ID = '" . $_SESSION['ID'] . "' and course='postgraduation' and edu_id='$hd'";
//echo $query;
//die();
$data=mysql_query($query,$dbc) or die(mysql_error());

}

//add certifications
if(isset($_POST['certiadd']))
{
  $cn=mysql_real_escape_string($_POST['cname']);
$a=mysql_real_escape_string($_POST['institution']);
$b=mysql_real_escape_string($_POST['university']);
$c=mysql_real_escape_string($_POST['fyear']);
$d=mysql_real_escape_string($_POST['tyear']);
$e=mysql_real_escape_string($_POST['per']);
$f=mysql_real_escape_string($_POST['field']);
$query="insert into education(ID,course,cname,institution,university,fromyear,toyear,marks,field) values ('".$_SESSION['ID']."','certification','$cn','$a','$b','$c','$d','$e','$f')";
$data=mysql_query($query,$dbc) or die(mysql_error());

}

//add job details
if(isset($_POST['submitjob']))
{
$coname=mysql_real_escape_string($_POST['coname']);
$desig=mysql_real_escape_string($_POST['designation']);
$location=mysql_real_escape_string($_POST['location']);
$from=mysql_real_escape_string($_POST['from']);
$to=mysql_real_escape_string($_POST['to']);
$present=mysql_real_escape_string($_POST['pr']); //checkbox

$desc=mysql_real_escape_string($_POST['description']);
//check for currrent job
if(!empty($present))
{
	$to=date('Y/m/d');
}
    date_default_timezone_set("Asia/Kolkata"); 
$fromdate=new DateTime($from);
$todate=new DateTime($to);
$interval = $fromdate->diff($todate);
$duration=$interval->format('%R%a');
$mq="insert into professional(ID,company,designation,location,description,from_job,to_job,time_period)values ('".$_SESSION['ID']."','$coname','$desig','$location','$desc','$from','$to','$duration')";
$data=mysql_query($mq,$dbc) or die(mysql_error());
//find sum of days
$result = mysql_query("SELECT SUM(time_period) AS value_sum FROM professional where ID='" . $_SESSION['ID'] . "'");
echo $result;
$row = mysql_fetch_assoc($result);
//echo '<pre>';
//print_r($row);
//die();
$sum = round($row['value_sum']/365,2);
$m="update professional set sum_time='$sum' where ID='" . $_SESSION['ID'] . "' ";
$datu=mysql_query($m,$dbc) or die(mysql_error());
$sel="select * from professional where ID='" . $_SESSION['ID'] . "'";
$dat=mysql_query($sel,$dbc) or die(mysql_error());

$exp=mysql_fetch_assoc($dat);
if($exp['sum_time']<2.50)
{
	$level='1';
}
else if ($exp['sum_time']>=2.50 && $exp['sum_time']<9.00)
{
$level='2';

}
else if($exp['sum_time']>=9.00)
{
$level='3';
}

$q="update register_emp set experience='$sum',experience_level='$level' where ID='" . $_SESSION['ID'] . "'";
$_SESSION['difficulty_level']=$level;
$data=mysql_query($q,$dbc) or die(mysql_error());
//$time="update register_emp set experience='$m' where ID='" . $_SESSION['ID'] . "'";
//$exp=mysql_query($time,$dbc)or die(mysql_error());
}

if(isset($_POST['aboutsubmit']))
 {
 $about=mysql_real_escape_string($_POST['about']);
 $q="update register_emp set aboutme='$about' where ID='" . $_SESSION['ID'] . "'";
 mysql_query($q) or die(mysql_error());
mysql_close();
 }


//$fromdate=new DateTime("2008-01-03");
//$todate=new DateTime("2009-09-02");
//$diff=$fromdate->diff($todate);

//echo "difference " . $diff->y . " years, " . $diff->m." months, ".$diff->d." days ";
if(isset($_POST['submitjob1']))
{
  //echo "<pre>";
 // print_r($_POST);
$coname=mysql_real_escape_string($_POST['coname']);
$desig=mysql_real_escape_string($_POST['designation']);
$location=mysql_real_escape_string($_POST['location']);
$from=mysql_real_escape_string($_POST['from']);
$to=mysql_real_escape_string($_POST['to']);
$present=mysql_real_escape_string($_POST['pr']); //checkbox

$desc=mysql_real_escape_string($_POST['description']);
//check for currrent job
if(!empty($present))
{
  $to=date('Y/m/d');
}
$fromdate=new DateTime($from);
$todate=new DateTime($to);
$interval = $fromdate->diff($todate);
$duration=$interval->format('%R%a');
//$mq="insert into professional(ID,company,designation,location,description,from_job,to_job,time_period)values ('".$_SESSION['ID']."','$coname','$desig','$location','$desc','$from','$to','$duration')";
//$mq="update professional set company='$coname',designation='$desig',location='$location',description='$desc',from_job='$from',to_job='$to' where ID='".$_SESSION['ID']."' and proid='".$_POST['hd']."'";
//echo $mq;
$id=$_SESSION['ID'];
$hd=$_POST['hd'];

$mq="UPDATE professional SET company='$coname',designation='$desig',location='$location',description='$desc',from_job='$from',to_job='$to' where ID='$id'and proid='$hd'";

//echo $mq;
$data=mysql_query($mq,$dbc) or die(mysql_error());
//print_r($data);
//die();//find sum of days
$result = mysql_query("SELECT SUM(time_period) AS value_sum FROM professional where ID='" . $_SESSION['ID'] . "'");
$row = mysql_fetch_assoc($result);
$sum = round($row['value_sum']/365,2);
$m="update professional set sum_time='$sum' where ID='" . $_SESSION['ID'] . "' ";
$datu=mysql_query($m,$dbc) or die(mysql_error());
$sel="select * from professional where ID='" . $_SESSION['ID'] . "'";
$dat=mysql_query($sel,$dbc) or die(mysql_error());

$exp=mysql_fetch_assoc($dat);
if($exp['sum_time']<2.50)
{
  $level='1';
}
else if ($exp['sum_time']>=2.50 && $exp['sum_time']<9.00)
{
$level='2';

}
else if($exp['sum_time']>=9.00)
{
$level='3';
}

$q="update register_emp set experience='$sum',experience_level='$level' where ID='" . $_SESSION['ID'] . "'";
$_SESSION['difficulty_level']=$level;
$data=mysql_query($q,$dbc) or die(mysql_error());
//$time="update register_emp set experience='$m' where ID='" . $_SESSION['ID'] . "'";
//$exp=mysql_query($time,$dbc)or die(mysql_error());

}
header('Location:finaluserprofile44.php');
?>
