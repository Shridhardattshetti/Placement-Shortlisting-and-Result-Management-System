<html>
<body>
	<div align="right">
	<a href="first.html">Logout</a></h3>
</div>
<?php
$us=$_POST['usn'];
$sg=$_POST['sgpa'];
$cg=$_POST['cgpa'];

$user='root';
$pass='';
$db='studentdb';

$db = new mysqli('localhost',$user,$pass,$db) or die();

$query = "INSERT INTO results(USN,sgpa,cgpa) VALUES ('$us','$sg','$cg')";
$response=@mysqli_query($db,$query);

if(!$response)
{
	echo "TRY AGAIN <br />";
	echo mysqli_error($db);
}
else
{
header("location:addresults.html?RESULT_ADDED");
}	
mysqli_close($db);
?>
</body>
</html>
