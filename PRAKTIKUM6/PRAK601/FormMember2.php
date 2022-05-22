<?php
    require_once 'Koneksi.php';
	session_start();
	include("Koneksi.php");
	if(!isset($_SESSION['nomor_member'])){
		header('location:ErrorPage.php');
	} else {
		$id_member = $_POST['id_member'];
		$noUpdate=$id_member;
		$query="select * from member where id_member='$noUpdate'";
		$exe=mysqli_query($koneksi,$query);
		$data=mysqli_fetch_row($exe);
	}
?>

<!DOCTYPE html>
<html lang="en">

	<?php include('Header.php'); ?>
	
		
    <center><h1>FORM EDIT MEMBER</h1></center>
		
		<table align=center border='1'>
        <form action="Model.php" method="post" enctype="multipart/form-data">
		<tr>
            <td>ID Member</td>
            <td></td>
            <td><input type="text" name="id_member" value="<?php echo $data[0]; ?>" readonly></td>
        </tr>
        <tr>
            <td>Nama Member</td>
            <td></td>
            <td><input type="text" name="nama_member" value="<?php echo $data[1]; ?>" required></td>
        </tr>
		<tr>
            <td>Nomor Member</td>
            <td></td>
            <td><input type="text" name="nomor_member" value="<?php echo $data[2]; ?>" required></td>
        </tr>
		<tr>
            <td>Alamat</td>
            <td></td>
            <td><textarea name="alamat" cols="30" rows="10" value="<?php echo $data[3]; ?>" required></textarea></td>
        </tr>
		<tr>
            <td>Tgl mendaftar</td>
            <td></td>
            <td><input type="datetime-local" name="tgl_mendaftar" value="<?php echo $data[4]; ?>" required></td>
        </tr>
		<tr>
            <td>Tgl terakhir bayar</td>
            <td></td>
            <td><input type="date" name="tgl_terakhir_bayar" value="<?php echo $data[5]; ?>" required></td>
        </tr>
		<tr>
            <td>Password</td>
            <td></td>
            <td><input type="text" name="password" value="<?php echo $data[6]; ?>" required></td>
        </tr>
        
        <tr>
            <td colspan="3"><button type="submit" name="editmember">Perbarui</button></td>
        </tr>
		</form>
    </table>    

	<?php include('Footer.php'); ?>

</html> 

