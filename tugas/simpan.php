<?php 
	include "koneksi.php";
	//menyimpan data kedalam variabel
	$nama=$_POST['nama'];
	$jenis_kelamin=$_POST['jenis_kel'];
	$email=$_POST['email'];
	$alamat=$_POST['alamat'];
	$kota=$_POST['kota'];
	$pesan=$_POST['pesan'];

	//menjalankan query pada database
	$query="INSERT INTO kontak (nama,jenis_kel,email,alamat,kota,pesan) VALUES ('$nama','$jenis_kelamin','$email','$alamat','$kota','$pesan')";
	mysqli_query($conn,$query);
	echo "<script>alert('Data Berhasil Dimasukkan!);</script>";
	header("location:tampilkontak.php");
?>