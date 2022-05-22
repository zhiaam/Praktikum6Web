<?php
    require_once 'Koneksi.php';
	session_start();
	include("Koneksi.php");
	if(!isset($_SESSION['nomor_member'])){
		header('location:ErrorPage.php');
	} else {
		$id_buku = $_POST['id_buku'];
		$noUpdate=$id_buku;
		$query="select * from buku where id_buku='$noUpdate'";
		$exe=mysqli_query($koneksi,$query);
		$data=mysqli_fetch_row($exe);
	}
?>

<!DOCTYPE html>
<html lang="en">

	<?php include('Header.php'); ?>
	
		
    <center><h1>FORM EDIT BUKU</h1></center>
		
		<table align=center border='1'>
        <form action="Model.php" method="post" enctype="multipart/form-data">
		<tr>
            <td>ID Buku</td>
            <td></td>
            <td><input type="text" name="id_buku" value="<?php echo $data[0]; ?>" readonly</td>
        </tr>
        <tr>
            <td>Judul Buku</td>
            <td></td>
            <td><input type="text" name="judul_buku" value="<?php echo $data[1]; ?>" required></td>
        </tr>
		<tr>
            <td>Penulis</td>
            <td></td>
            <td><input type="text" name="penulis" value="<?php echo $data[2]; ?>" required></td>
        </tr>
		<tr>
            <td>Penerbit</td>
            <td></td>
            <td><input type="text" name="penerbit" value="<?php echo $data[3]; ?>" required></td>
        </tr>
		<tr>
            <td>Tahun Terbit</td>
            <td></td>
            <td><input type="text" name="tahun_terbit" value="<?php echo $data[4]; ?>" required></td>
        </tr>
        
        <tr>
            <td colspan="3"><button type="submit" name="editbuku">Perbarui</button></td>
        </tr>
		</form>
    </table>    

	<?php include('Footer.php'); ?>

</html> 

