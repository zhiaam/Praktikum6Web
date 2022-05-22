<?php
session_start();
	include("Koneksi.php");
	if(isset($_SESSION['nomor_member'])){
		echo "<script>alert('Anda sudah login!');
			window.location='index.php';</script>";
	}
?>

<!DOCTYPE html>
<html lang="en">

	<?php include('Header.php'); ?>
	
	<center><h1>FORM LOGIN</h1>
		
		<table align=center border='1'>
			<form action="Login.php" method="post" enctype="multipart/form-data">
			<tr>
				<td>Nomor Member</td>
				<td></td>
				<td><input type="text" name="nomor_member" required></td>
			</tr>
			<tr>
				<td>password</td>
				<td></td>
				<td><input type="password" name="password" required></td>
			</tr>
			
			<tr>
				<td colspan="3"><button type="submit" name="login">Login</button></td>
			</tr>
			</form>
		</table>  
	</center>	
	
	<?php include('Footer.php'); ?>

</html> 

