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
	
		
    <center><h1>FORM PEMINJAMAN</h1></center>
		
		<table align=center border='1'>
        <form action="Model.php" method="post" enctype="multipart/form-data">
		<tr>
            <td>ID Peminjaman</td>
            <td></td>
            <td><input type="text" name="id_peminjaman" required></td>
        </tr>
        <tr>
            <td>Tgl Pinjam</td>
            <td></td>
            <td><input type="date" name="tgl_pinjam" required></td>
        </tr>
		<tr>
            <td>Tgl Kembali</td>
            <td></td>
            <td><input type="date" name="tgl_kembali" required></td>
        </tr>
        
        <tr>
            <td colspan="3"><button type="submit" name="tambahpeminjaman">Tambah</button></td>
        </tr>
		</form>
    </table>    

	<?php include('Footer.php'); ?>

</html> 

