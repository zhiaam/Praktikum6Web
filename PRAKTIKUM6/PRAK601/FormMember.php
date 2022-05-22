<?php
session_start();
	include("Koneksi.php");
	if(!isset($_SESSION['nomor_member'])){
		header('location:ErrorPage.php');
	}
?>

<!DOCTYPE html>
<html lang="en">

	<?php include('Header.php'); ?>
	
		
    <center><h1>FORM MEMBER</h1></center>
		
		<table align=center border='1'>
        <form action="Model.php" method="post" enctype="multipart/form-data">
		<tr>
            <td>ID Member</td>
            <td></td>
            <td><input type="text" name="id_member" required></td>
        </tr>
        <tr>
            <td>Nama Member</td>
            <td></td>
            <td><input type="text" name="nama_member" required></td>
        </tr>
		<tr>
            <td>Nomor Member</td>
            <td></td>
            <td><input type="text" name="nomor_member" required></td>
        </tr>
		<tr>
            <td>Alamat</td>
            <td></td>
            <td><textarea name="alamat" cols="30" rows="10" required></textarea></td>
        </tr>
		<tr>
            <td>Tgl mendaftar</td>
            <td></td>
            <td><input type="datetime-local" name="tgl_mendaftar" required></td>
        </tr>
		<tr>
            <td>Tgl terakhir bayar</td>
            <td></td>
            <td><input type="date" name="tgl_terakhir_bayar" required></td>
        </tr>
		
		<tr>
            <td>Password</td>
            <td></td>
            <td><input type="text" name="password" required></td>
        </tr>
        
        <tr>
            <td colspan="3"><button type="submit" name="tambahmember">Tambah</button></td>
        </tr>
		</form>
    </table>    

	<?php include('Footer.php'); ?>

</html> 

