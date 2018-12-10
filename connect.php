<html>
<body background="admin.jpg">
	<h3><a href="first.html">Home</a> </h3>
	<div align="right">
	<a href="first.html">Logout</a></h3>
</div>
	<div align="center">
		<h2>Qualified List </h2>
	</div>
<?php

$user='root';
$pass='';
$db='studentdb';
	$SSLC=$_POST['sslc'];
	$PUC=$_POST['puc'];
	$CGPA=$_POST['cgpa'];
    $baks=$_POST['back'];
$db = new mysqli('localhost',$user,$pass,$db) or die();
$query = "SELECT USN,F_NAME,L_NAME,EMAIL from STUDENT where SSLC_M>=$SSLC AND PUC_M>=$PUC AND CGPA_M>=$CGPA AND backlogs<=$baks";
$response=@mysqli_query($db,$query);
if($response){
	echo '<table align="center"

cellspacing="20" cellpadding="16">

 
<tr><td align="left"><b>USN</b></td>

<td align="left"><b>First Name</b></td>

<td align="left"><b>Last Name</b></td>

<td align="left"><b>Email</b></td></tr>';

while($row = mysqli_fetch_array($response))
{
	
	echo '<tr><td align="left">' .

$row['USN'] . '</td><td align="left">' .
$row['F_NAME'] . '</td><td align="left">' . 
$row['L_NAME'] .'</td><td align="left">' .
$row['EMAIL'] . '</td><td align="left">';
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