<!DOCTYPE html>
<html lang="en">

	<?php include('Header.php'); ?>
	
	<div class="konten">
		<center>
		<h1>BUKU</h1>
		<hr>
		<table>
		<tr>
			<th>ID Buku</th>
			<th>Judul Buku</th>
			<th>Penulis</th>
			<th>Penerbit</th>
			<th>Tahun Terbit</th>
			<th>Aksi</th>
			</tr>
		<hr>
			<a href='FormBuku.php'>Tambah Data</a> || 
			<a href="Buku.php">Refresh</a>
		</center>
		<hr>

			
			<?php
				require_once 'Koneksi.php';
				$cari="select * from buku";
				$jml_row=5;
				$halaman=isset($_GET['halaman']) ? (int)$_GET['halaman']:1;
				$rumus=($halaman > 1) ? ($halaman * $jml_row) - $jml_row: 0;
				$tampil1=mysqli_query($koneksi,$cari);
				$hasil=mysqli_num_rows($tampil1);
				$rumus_hal=ceil($hasil/$jml_row);
				$tampil2=mysqli_query($koneksi,"SELECT * FROM buku LIMIT $rumus, $jml_row");
				$no=$rumus+1;
				if ($hasil == 0) {
					echo "<tr><td colspan=6 align=center>Data Kosong</td></tr>";
				}else{
					$query=$tampil2;
					while ($data=mysqli_fetch_assoc($query)) {
					
				echo"<tr>
						<td>".$data['id_buku']."</td>
						<td>".$data['judul_buku']."</td>
						<td>".$data['penulis']."</td>
						<td>".$data['penerbit']."</td>
						<td>".$data['tahun_terbit']."</td>
						<td><form action='FormBuku2.php' method='post' enctype='multipart/form-data'>
							<input type='text' name='id_buku' value=".$data['id_buku']." hidden>
							<button type='submit' name='gotoeditbuku'>Edit Buku</button>
							</form>
							<form action='Model.php' method='post' enctype='multipart/form-data'>
							<input type='text' name='id_buku' value=".$data['id_buku']." hidden>
							<button type='submit' name='hapusbuku'>Hapus Buku</button>
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

