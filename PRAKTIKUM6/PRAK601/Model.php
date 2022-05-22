<?php

    require_once 'Koneksi.php';
	session_start();
	include("Koneksi.php");
	if(!isset($_SESSION['nomor_member'])){
		header('location:ErrorPage.php');
	} else {
	/*====================================================================================================
	MEMBER
	====================================================================================================*/
    if (isset($_POST['tambahmember'])) {
        $id_member = $_POST['id_member'];
		$nama_member = $_POST['nama_member'];
		$nomor_member = $_POST['nomor_member'];
		$alamat = $_POST['alamat'];
		$tgl_mendaftar = $_POST['tgl_mendaftar'];
		$tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];
		$password = $_POST['password'];
		
		$tambah = mysqli_query($koneksi,"INSERT INTO member VALUES ('$id_member','$nama_member','$nomor_member','$alamat','$tgl_mendaftar','$tgl_terakhir_bayar','$password')");
		if($tambah){
			echo "<script>alert('Data berhasil ditambah!');
			window.location='Member.php';</script>";
		}else{
			echo "<script>alert('data gagal ditambah!');
			window.location='FormMember.php';</script>";
		}
	}
	
	if (isset($_POST['editmember'])) {
        $id_member = $_POST['id_member'];
		$nama_member = $_POST['nama_member'];
		$nomor_member = $_POST['nomor_member'];
		$alamat = $_POST['alamat'];
		$tgl_mendaftar = $_POST['tgl_mendaftar'];
		$tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];
		$password = $_POST['password'];
		
		$perbarui = mysqli_query($koneksi,"update member set id_member='$id_member', nama_member='$nama_member', nomor_member='$nomor_member', alamat='$alamat', tgl_mendaftar='$tgl_mendaftar', tgl_terakhir_bayar='$tgl_terakhir_bayar', password='$password' where id_member='$id_member'");
            if ($perbarui) {
               echo "<script>alert('Data berhasil diperbarui!');
                    window.location='Member.php';</script>";
            }else {
                echo "<script>alert('Data gagal diperbarui!');
                    window.location='FormMember2.php';</script>";
            }
	}
	
	if (isset($_POST['hapusmember'])) {
        $id_member = $_POST['id_member'];
		$hapus=mysqli_query($koneksi, "delete from member where id_member='$id_member'");
		if($hapus){
			echo "<script>alert('Data berhasil dihapus!');
			window.location='Member.php';</script>";
		}else{
			echo "<script>alert('data gagal dihapus!');
			window.location='Member.php';</script>";
		}
	}
	
	/*====================================================================================================
	BUKU
	====================================================================================================*/
    if (isset($_POST['tambahbuku'])) {
        $id_buku = $_POST['id_buku'];
		$judul_buku = $_POST['judul_buku'];
		$penulis = $_POST['penulis'];
		$penerbit = $_POST['penerbit'];
		$tahun_terbit = $_POST['tahun_terbit'];
		
		$tambah = mysqli_query($koneksi,"INSERT INTO buku VALUES ('$id_buku','$judul_buku','$penulis','$penerbit','$tahun_terbit')");
		if($tambah){
			echo "<script>alert('Data berhasil ditambah!');
			window.location='Buku.php';</script>";
		}else{
			echo "<script>alert('data gagal ditambah!');
			window.location='FormBuku.php';</script>";
		}
	}
	
	if (isset($_POST['editbuku'])) {
        $id_buku = $_POST['id_buku'];
		$judul_buku = $_POST['judul_buku'];
		$penulis = $_POST['penulis'];
		$penerbit = $_POST['penerbit'];
		$tahun_terbit = $_POST['tahun_terbit'];
		
		$perbarui = mysqli_query($koneksi,"update buku set id_buku='$id_buku', judul_buku='$judul_buku', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit' where id_buku='$id_buku'");
            if ($perbarui) {
               echo "<script>alert('Data berhasil diperbarui!');
                    window.location='Buku.php';</script>";
            }else {
                echo "<script>alert('Data gagal diperbarui!');
                    window.location='FormBuku2.php';</script>";
            }
	}
	
	if (isset($_POST['hapusbuku'])) {
        $id_buku = $_POST['id_buku'];
		$hapus=mysqli_query($koneksi, "delete from buku where id_buku='$id_buku'");
		if($hapus){
			echo "<script>alert('Data berhasil dihapus!');
			window.location='Buku.php';</script>";
		}else{
			echo "<script>alert('data gagal dihapus!');
			window.location='Buku.php';</script>";
		}
	}
	
	/*====================================================================================================
	PEMINJAMAN
	====================================================================================================*/
    if (isset($_POST['tambahpeminjaman'])) {
        $id_peminjaman = $_POST['id_peminjaman'];
		$tgl_pinjam = $_POST['tgl_pinjam'];
		$tgl_kembali = $_POST['tgl_kembali'];
		
		$tambah = mysqli_query($koneksi,"INSERT INTO peminjaman VALUES ('$id_peminjaman','$tgl_pinjam','$tgl_kembali')");
		if($tambah){
			echo "<script>alert('Data berhasil ditambah!');
			window.location='Peminjaman.php';</script>";
		}else{
			echo "<script>alert('data gagal ditambah!');
			window.location='FormPeminjaman.php';</script>";
		}
	}
	
	if (isset($_POST['editpeminjaman'])) {
        $id_peminjaman = $_POST['id_peminjaman'];
		$tgl_pinjam = $_POST['tgl_pinjam'];
		$tgl_kembali = $_POST['tgl_kembali'];
		
		$perbarui = mysqli_query($koneksi,"update peminjaman set id_peminjaman='$id_peminjaman', tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali' where id_peminjaman='$id_peminjaman'");
            if ($perbarui) {
               echo "<script>alert('Data berhasil diperbarui!');
                    window.location='Peminjaman.php';</script>";
            }else {
                echo "<script>alert('Data gagal diperbarui!');
                    window.location='FormPeminjaman2.php';</script>";
            }
	}
	
	if (isset($_POST['hapuspeminjaman'])) {
        $id_peminjaman = $_POST['id_peminjaman'];
		$hapus=mysqli_query($koneksi, "delete from peminjaman where id_peminjaman='$id_peminjaman'");
		if($hapus){
			echo "<script>alert('Data berhasil dihapus!');
			window.location='Peminjaman.php';</script>";
		}else{
			echo "<script>alert('data gagal dihapus!');
			window.location='Peminjaman.php';</script>";
		}
	}
	}
?>