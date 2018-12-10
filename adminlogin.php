<html>
<body background="admin.jpg">
<div align="center">
	<form action="" method="post">
		<table border="0">
		<br><br><br><br><br><br>
			<h1>LOGIN</h1>
			<tr>
				<td>USERNAME   |</td>
				<td align="center"><input type="text" name="user" size="10" placeholder=" Enter username " />
				<br></td>
				</tr>
				<tr> <td> <br> </td> </tr>
				<tr>
				<td>PASSWORD   |</td>
				<td align="center"><input type="password" name="pass" size="10" placeholder="Password"/>
				<br></td>
				</tr>
				<tr> <td> <br> </td> </tr>
				<td colspan="2" align="center"><input type="submit" name="sub" value="  Login  "/>
					<br><br><br><br><br>			
					</td>
				</tr>
			</table>
		</form>
		<?php 
		$user='root';
$pass='';
$db='studentdb';
$db = new mysqli('localhost',$user,$pass,$db) or die();
		if(isset($_POST['sub']))
		{
			$una = $_POST['user'];
			$psa = $_POST['pass'];
			$q = "Select un,ps from admin where un='$una' and ps='$psa'";
			$run=mysqli_query($db,$q);
			$row=mysqli_fetch_array($run);
			$u = $row['un'];
			$p = $row['ps'];
			if($una==$u and $psa=$p)
			{
				header("location:inadmins.html");
			}
			else
			{
				echo("Wrong Username or Password");
			header("location:adminlogin.php?WRONG USER");

			}		
		} ?>
	</div>
</body>
</html>

	</div>
	</body>
	</html>

