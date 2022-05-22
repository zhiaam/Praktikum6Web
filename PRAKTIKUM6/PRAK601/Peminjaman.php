<!DOCTYPE html>
<html lang="en">

	<?php include('Header.php'); ?>
	
	<div class="konten">
		<center>
		<h1>PEMINJAMAN</h1>
		<hr>
		<table>
		<tr>
			<th>ID Peminjaman</th>
			<th>Tgl Pinjam</th>
			<th>Tgl Kembali</th>
			<th>Aksi</th>
			</tr>
		<hr>
			<a href='FormPeminjaman.php'>Tambah Data</a> || 
			<a href="Peminjaman.php">Refresh</a>
		</center>
		<hr>

			
			<?php
				require_once 'Koneksi.php';
				$cari="select * from peminjaman";
				$jml_row=5;
				$halaman=isset($_GET['halaman']) ? (int)$_GET['halaman']:1;
				$rumus=($halaman > 1) ? ($halaman * $jml_row) - $jml_row: 0;
				$tampil1=mysqli_query($koneksi,$cari);
				$hasil=mysqli_num_rows($tampil1);
				$rumus_hal=ceil($hasil/$jml_row);
				$tampil2=mysqli_query($koneksi,"SELECT * FROM peminjaman LIMIT $rumus, $jml_row");
				$no=$rumus+1;
				if ($hasil == 0) {
					echo "<tr><td colspan=4 align=center>Data Kosong</td></tr>";
				}else{
					$query=$tampil2;
					while ($data=mysqli_fetch_assoc($query)) {
					
					echo"<tr>
						<td>".$data['id_peminjaman']."</td>
						<td>".$data['tgl_pinjam']."</td>
						<td>".$data['tgl_kembali']."</td>
						<td><form action='FormPeminjaman2.php' method='post' enctype='multipart/form-data'>
							<input type='text' name='id_peminjaman' value=".$data['id_peminjaman']." hidden>
							<button type='submit' name='gotoeditpeminjaman'>Edit Peminjaman</button>
							</form>
							<form action='Model.php' method='post' enctype='multipart/form-data'>
							<input type='text' name='id_peminjaman' value=".$data['id_peminjaman']." hidden>
							<button type='submit' name='hapuspeminjaman'>Hapus Peminjaman</button>
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

