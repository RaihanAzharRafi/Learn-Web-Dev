<!DOCTYPE html>
<html>
<head>
	<title>data profil</title>
</head>
<body>
<br>
<a href="logout.php">Logout</a>
<br>
<h2 align="center">Profil Tamu</h2>
<br>
<a href="logout.php">Booking Hotel</a>
	<table border="1" width="700px" align="center">
		<tr>
			<th>no</th>
			<th>nama</th>
			<th>jenis kelamin</th>
			<th>alamat</th>
			<th>no telp</th>
			<th>jenis kamar</th>
			<th>aksi</th>
		</tr>
			<?php
			include"koneksi.php";
			$no=1;
			$tampil=mysqli_query($conn,"select*from profil");
			while ($data=mysqli_fetch_array($tampil)) {

			?>
		<tr align="center">
			<td><?php echo $no;$no++;?></td>
			<td><?php echo $data['tbl_nama']; ?></td>
			<td><?php echo $data['tbl_jenis_kelamin']; ?></td>
			<td><?php echo $data['tbl_alamat']; ?></td>
			<td><?php echo $data['tbl_no_telp']; ?></td>
			<td><?php echo $data['tbl_jenis_kamar']; ?></td>
			<td>
				<a href="edit_profil.php?id=<?php echo $data['tbl_id_profil']; ?>">edit</a> ||
				<a href="hapus_profil.php?id=<?php echo $data['tbl_id_profil']; ?> onclick="return confirm('Yakin data akan di hapus ?')>hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
	<br>
	<a href="input_profil.php">input profil</a>
</body>
</html>
