<?php
    require_once 'Koneksi.php';
	session_start();
	include("Koneksi.php");
	if(!isset($_SESSION['nomor_member'])){
		header('location:ErrorPage.php');
	} else {
		$id_peminjaman = $_POST['id_peminjaman'];
		$noUpdate=$id_peminjaman;
		$query="select * from peminjaman where id_peminjaman='$noUpdate'";
		$exe=mysqli_query($koneksi,$query);
		$data=mysqli_fetch_row($exe);
	}
?>

<!DOCTYPE html>
<html lang="en">

	<?php include('Header.php'); ?>
	
		
    <center><h1>FORM EDIT PEMINJAMAN</h1></center>
		
		<table align=center border='1'>
        <form action="Model.php" method="post" enctype="multipart/form-data">
		<tr>
            <td>ID Peminjaman</td>
            <td></td>
            <td><input type="text" name="id_peminjaman" value="<?php echo $data[0]; ?>" readonly></td>
        </tr>
        <tr>
            <td>Tgl Pinjam</td>
            <td></td>
            <td><input type="date" name="tgl_pinjam" value="<?php echo $data[1]; ?>" required></td>
        </tr>
		<tr>
            <td>Tgl Kembali</td>
            <td></td>
            <td><input type="date" name="tgl_kembali" value="<?php echo $data[2]; ?>" required></td>
        </tr>
        
        <tr>
            <td colspan="3"><button type="submit" name="editpeminjaman">Perbarui</button></td>
        </tr>
		</form>
    </table>    

	<?php include('Footer.php'); ?>

</html> 

