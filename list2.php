<?php
include 'include/connection.php';
include 'func.php';
$a=new seeker();
$i=$_POST['q'];
$p=$_POST['p'];
if($p=='Choose an option'){
if($i==0){
$sql=mysql_query("select * from userresult order by date desc");
$i=1;
}
else{
$sql=mysql_query("select * from userresult order by date asc");
$i=0;
}
}
else{
if($i==0){
$sql=mysql_query("select * from userresult where category='$p' order by date desc");
$i=1;
}
else{
$sql=mysql_query("select * from userresult where category='$p' order by date asc");
$i=0;
}
}
echo '<table class="table table-bordered table-hover form-control" style="width:60%;margin-top:180px"  align="center">';
echo '<th>Email Id</th>';
echo '<th>Job Seeker</th>';
echo '<th>Category</th>';
echo '<th>Test Date</th>';
echo '<th>Result</th>';
echo '<th>Full Details</th>';
while($re=mysql_fetch_assoc($sql)){
    $sq=mysql_query("select * from register_emp where email='".$re['user_id']."'");
    $result=mysql_fetch_assoc($sq);
    echo '<tr><td>'.$re['user_id'].'</td>';
    echo '<td> <a href="seeker.php?q='.$re['user_id'].'" class="thickbox" >'.$result['firstname'].'  '.$result['lastname'].'</a>  </td>';  
    echo '<td>'.$re['category'].'</td>';
    echo '<td>'.$re['date'].'</td>';
    echo '<td>'.$re['score'].'</td>';
    echo '<td><a href="fulla.php?q='.$re['test_id'].'">Details</a></td></tr>';
}
?>
</table>    
