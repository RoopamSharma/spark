<?php
session_start();
include 'include/connection.php';
$i=$_POST['q'];
$p=$_POST['p'];
$n=$_SESSION['email'];
if($p=='Choose an option'){
if($i==0){
$sql=mysql_query("select * from userresult where user_id='".$n."' order by date desc");
$i=1;
}
else{
$sql=mysql_query("select * from userresult where user_id='".$n."' order by date asc");
$i=0;
}
}
else{
if($i==0){
$sql=mysql_query("select * from userresult where category='$p' and user_id='".$n."' order by date desc");
$i=1;
}
else{
$sql=mysql_query("select * from userresult where category='$p' and user_id='".$n."' order by date asc");
$i=0;
}
}
if($re=mysql_fetch_assoc($sql)){
echo '<table class="table table-bordered table-hover form-control" style="width:60%;margin-top:180px"  align="center">';
echo '<th>Test Id</th>';
echo '<th>Category</th>';
echo '<th>Test Date</th>';
echo '<th>Result</th>';
echo '<th>Full Details</th>';
while($re=mysql_fetch_assoc($sql)){
    $sq=mysql_query("select * from register_emp where email='".$n."'");
    $result=mysql_fetch_assoc($sq);
    echo '<tr><td>'.$re['test_id'].'</td>';
    echo '<td>'.$re['category'].'</td>';
    echo '<td>'.$re['date'].'</td>';
    echo '<td>'.$re['score'].'</td>';
    echo '<td><a href="fulla.php?q='.$re['test_id'].'">Details</a></td></tr>';
}
}
else{
echo 'Not given any test;';
}
?>
</table>    
