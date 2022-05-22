<?php
session_start();
	include("Koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">

	<?php include('Header.php'); ?>
	
	<div class="konten">
		<center>
		<h1>BERANDA</h1>
		<hr>
		Halaman terdiri dari:
		<ul>
			<li><a href="index.php">Beranda</a></li>
			<li><a href="Member.php">Member</a></li>
			<li><a href="Buku.php">Buku</a></li>
			<li><a href="Peminjaman.php">Peminjaman</a></li>
		</ul>
	</div>
	
	<?php include('Footer.php'); ?>

</html> 

