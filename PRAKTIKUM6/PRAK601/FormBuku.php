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
	
		
    <center><h1>FORM BUKU</h1></center>
		
		<table align=center border='1'>
        <form action="Model.php" method="post" enctype="multipart/form-data">
		<tr>
            <td>ID Buku</td>
            <td></td>
            <td><input type="text" name="id_buku" required></td>
        </tr>
        <tr>
            <td>Judul Buku</td>
            <td></td>
            <td><input type="text" name="judul_buku" required></td>
        </tr>
		<tr>
            <td>Penulis</td>
            <td></td>
            <td><input type="text" name="penulis" required></td>
        </tr>
		<tr>
            <td>Penerbit</td>
            <td></td>
            <td><input type="text" name="penerbit" required></td>
        </tr>
		<tr>
            <td>Tahun Terbit</td>
            <td></td>
            <td><input type="text" name="tahun_terbit" required></td>
        </tr>
        
        <tr>
            <td colspan="3"><button type="submit" name="tambahbuku">Tambah</button></td>
        </tr>
		</form>
    </table>    

	<?php include('Footer.php'); ?>

</html> 

