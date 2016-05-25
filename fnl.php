<?php
$proid=$_GET['id'];
include_once("connect.php");
$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);
$q1=mysql_query("select * from professional where proid='$proid'");
$fetch=mysql_fetch_assoc($q1);
$r=$fetch;
echo json_encode($r);
//new data onwards
if(isset($_POST['submitjob1']))
{
  echo "<pre>";
  print_r($_POST);
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

echo $mq;
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

?>