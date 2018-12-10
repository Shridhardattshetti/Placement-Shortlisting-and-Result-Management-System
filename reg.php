<html>
<body background="pic1.jpg" align = "center">
	<h3><a href="first.html">Home</a>	<a href="rank.php">Ranking</a>	<a href="register.html">Register</a></h3>
<?php

$user='root';
$pass='';
$db='studentdb';
    $emaild=$_POST['email'];
    $fnamed=$_POST['fname'];
    $lnamed=$_POST['lname'];
	$usnd=$_POST['usn'];
	$SSLCd=$_POST['sslci'];
	$PUCd=$_POST['puci'];
	$CGPAd=$_POST['cgpai'];
    $backls =$_POST['backs'];
$db = new mysqli('localhost',$user,$pass,$db) or die();
$query = "INSERT INTO STUDENT(USN,F_NAME,L_NAME,SSLC_M,PUC_M,CGPA_M,EMAIL,backlogs) VALUES ('$usnd','$fnamed','$lnamed','$SSLCd','$PUCd','$CGPAd','$emaild','$backls')";
$response=@mysqli_query($db,$query);
if(!$response)
{
	echo "TRY AGAIN <br />";
	echo mysqli_error($db);
}
else
{
  
	$query1 = "Select company_name from company where sslc_cutoff<$SSLCd and puc_cutoff<$PUCd and cgpa_cutoff<$CGPAd";
$response1=@mysqli_query($db,$query1);
if($response1){
echo "<h2>You've been successfully registered. You'll be notified if you qualify any company's cut off. </h2><br>";

  echo "<h3> Here is a list of companies you are qualified for, based on last year's cut off scales.</h3><br>";
	echo '<table align="center" cellspacing="20" cellpadding="16">

<tr>

<td align="center"><b>Company Name</b></td>';


while($row = mysqli_fetch_array($response1))
{

	echo '<tr><td align="center">' .
	

$row['company_name'] . '</td><td align="center">';
echo '</tr>';


}

echo '</table>';
}
else
{
   echo "<h1>You've been successfully Registered </h1>";	
}
}	
mysqli_close($db);
?>

</body>
</html>