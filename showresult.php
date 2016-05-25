<?php
session_start();
$a1=$_SESSION['arrayans'];
$a2=$_SESSION['ans'];
print_r($a2);

$v=$_SESSION['questionarraysize'];
echo '<table width="50%" style="border:1px solid;">';
echo '<th>Your Answer</th>';
echo '<th>Correct Answer</th>';
echo '<th>Result</th>';
for($i=0;$i<$v;$i++)
{
	echo'<tr align="center">';
	if($a1[$i]==$a2[$i]){
	$c[$i]='Correct';
	}
	else{
	$c[$i]='Incorrect';
}
echo '<td>'.$a2[$i].'</td>';
	echo '<td>'.$a1[$i].'</td>';
echo'<td>'.$c[$i].'</td>';
	
echo'</tr>';
}
echo '</table>';

?>