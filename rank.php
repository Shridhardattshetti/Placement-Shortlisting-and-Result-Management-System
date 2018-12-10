<html>
<body background="pic13.png" text="white">
	<p><h3><a href="first.html">Home</a>	<a href="rank.php">Ranking</a>	<a href="register.html">Register</a></h3></p>
<div align="center">
	<h1> Rankings </h1> <br>
</div>
<?php
$i=1;
$user='root';
$pass='';
$db='studentdb';
$db = new mysqli('localhost',$user,$pass,$db) or die();
$query = "SELECT  USN,F_NAME,L_NAME,CGPA_M from STUDENT order by CGPA_M desc";
$response=@mysqli_query($db,$query);
if($response){
	echo '<table align="center" cellspacing="20" cellpadding="16">

<tr>
<td align="center"><b>Rank</b></td>

<td align="center"><b>USN</b></td>

<td align="center"><b>First Name</b></td>

<td align="center"><b>Last Name</b></td>

<td align="center"><b>CGPA</b></td></tr>';

while($row = mysqli_fetch_array($response))
{

	echo '<tr><td align="center">' .
	
$i . '</td><td align="center">' .
$row['USN'] . '</td><td align="center">' .
$row['F_NAME'] . '</td><td align="center">' .
$row['L_NAME'] .'</td><td align="center">' .
$row['CGPA_M'] . '</td><td align="center">';
echo '</tr>';
$i++;

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