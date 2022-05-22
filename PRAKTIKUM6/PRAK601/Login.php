<?php
	include("Koneksi.php");
	if(isset($_POST['login'])){
		$nomor_member=$_POST['nomor_member'];
		$password=$_POST['password'];
		$query="select * from member where nomor_member='$nomor_member' and password='$password'";
		$exe=mysqli_query($koneksi,$query);
		if(mysqli_num_rows($exe)>=1){
			$data=mysqli_fetch_assoc($exe);
			session_start();
			$_SESSION['nomor_member'] =$data['nomor_member'];
			echo "<script>alert('Login berhasil!');
			window.location='index.php';</script>";
		}else{
			echo "<script>alert('Login gagal!');
			window.location='FormLogin.php';</script>";
		}
	}else{
		echo "<script>window.location='index.php';</script>";
	}
	
		
?>
