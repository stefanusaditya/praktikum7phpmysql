<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

    <?php
    //menjalankan session dan cek session
        session_start();
        include "cek_session.php"
    ?>
	<!--menampilkan tulisan dengan format heading 2-->
	<h3>DAFTAR DATA MAHASISWA</h3>
	<!--membuat tabel untuk menampilkan data-->
	<table border="1">
		<tr>
			<td>NAMA</td>
			<td>GENDER</td>
			<td>EMAIL</td>
			<td>ALAMAT</td>
			<td>KOTA</td>
			<td>PESAN</td>
		</tr>
		<?php
			//mengeksekusi file koneksi.php
			include "koneksi.php";
			//menjalankan query pada database
			$sql="SELECT * from kontak";
			$mahasiswa=mysqli_query($conn,$sql);
			//menampilkan data
			foreach ($mahasiswa as $row) {
				$jenis_kelamin = $row['jenis_kel']=='P'?'PEREMPUAN':'Laki_Laki';
				echo "<tr>
				<td>".$row['nama']."</td>
				<td>".$jenis_kelamin."</td>
				<td>".$row['email']."</td>
				<td>".$row['alamat']."</td>
				<td>".$row['kota']."</td>
				<td>".$row['pesan']."</td>
				</tr>";
			}
		?>
	</table>
    <br>
    <button><a href="tambahkontak.php">Tambah Data</a></button>
	<button><a href="logout.php">Keluar</a></button>
</body>
</html>