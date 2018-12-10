<html>
<body background="pic8.jpg">
	<div align="right">
	<a href="first.html">Logout</a></h3>
</div>
<br><br><br><br><br><br><br><br><br>
<?php
$us=$_POST['usn'];
$user='root';
$pass='';
$db='studentdb';

$db = new mysqli('localhost',$user,$pass,$db) or die();

$query = "Select * from results where usn='$us'";
$response=@mysqli_query($db,$query);
if($response){

	echo '<table align="center" cellspacing="20" cellpadding="16">

<tr>

<td align="center"><b>USN</b></td>

<td align="center"><b>SGPA</b></td>

<td align="center"><b>CGPA</b></td></tr>';


while($row = mysqli_fetch_array($response))
{

	echo '<tr><td align="center">' .
	

$row['usn'] . '</td><td align="center">' .
$row['sgpa'] . '</td><td align="center">' .
$row['cgpa'] . '</td><td align="center">';
echo '</tr>';


}

echo '</table>';
}
else 
{
	echo "Couldn't issue database query <br />";
	echo mysqli_error($db);
}
mysqli_close($db);
?>
</body>
</html>