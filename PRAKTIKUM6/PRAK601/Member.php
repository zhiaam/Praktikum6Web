<!DOCTYPE html>
<html lang="en">

	<?php include('Header.php'); ?>
	
	<div class="konten">
		<center>
		<h1>MEMBER</h1>
		<hr>
		<table>
		<tr>
			<th>ID Member</th>
			<th>Nama Member</th>
			<th>Nomor Member</th>
			<th>Alamat</th>
			<th>Tgl Mendaftar</th>
			<th>Tgl Terakhir Membayar</th>
			<th>Aksi</th>
			</tr>
		<hr>
			<a href='FormMember.php'>Tambah Data</a> || 
			<a href="Member.php">Refresh</a>
		</center>
		<hr>

			
			<?php
				require_once 'Koneksi.php';
				$cari="select * from member";
				$jml_row=2;
				$halaman=isset($_GET['halaman']) ? (int)$_GET['halaman']:1;
				$rumus=($halaman > 1) ? ($halaman * $jml_row) - $jml_row: 0;
				$tampil1=mysqli_query($koneksi,$cari);
				$hasil=mysqli_num_rows($tampil1);
				$rumus_hal=ceil($hasil/$jml_row);
				$tampil2=mysqli_query($koneksi,"SELECT * FROM member LIMIT $rumus, $jml_row");
				$no=$rumus+1;
				if ($hasil == 0) {
					echo "<tr><td colspan=7 align=center>Data Kosong</td></tr>";
				}else{
					$query=$tampil2;
					while ($data=mysqli_fetch_assoc($query)) {
					
				echo"<tr>
						<td>".$data['id_member']."</td>
						<td>".$data['nama_member']."</td>
						<td>".$data['nomor_member']."</td>
						<td>".$data['alamat']."</td>
						<td>".$data['tgl_mendaftar']."</td>
						<td>".$data['tgl_terakhir_bayar']."</td>
						<td><form action='FormMember2.php' method='post' enctype='multipart/form-data'>
							<input type='text' name='id_member' value=".$data['id_member']." hidden>
							<button type='submit' name='gotoeditmember'>Edit Member</button>
							</form>
							<form action='Model.php' method='post' enctype='multipart/form-data'>
							<input type='text' name='id_member' value=".$data['id_member']." hidden>
							<button type='submit' name='hapusmember'>Hapus Member</button>
							</form>
						</td>
					</tr>";
					}					
				}									
			?>
				
				</table>
			<?php for($i=1; $i <= $rumus_hal; $i++){ ?>
		<a href="?halaman=<?php echo $i; ?>" class="page"><?php echo $i; ?></a>
		<?php } ?>
		
		<hr>
	</div>
	
	<?php include('Footer.php'); ?>

</html> 

