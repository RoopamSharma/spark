<?php
include 'include/connection.php';
$a=$_POST['q'];
$n=$_POST['email'];
session_start();
$sql=mysql_query("select * from userresult where user_id='".$n."' and category ='$a'");
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
echo 'Not given any test';
}
?>
</table>    
