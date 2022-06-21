<!DOCTYPE html>
<html>
<head>
	<title>form input profil</title>
</head>
<body>
	<a href="index.php">Kembali Ke Halaman Utama</a>
<h2 align="center">Booking Tamu</h2>
	<form action="simpan_profil.php" method="post" enctype="multipart/form-data">
		<table align="center" width="500px">
			<tr>
				<td>name</td>
				<td>:</td>
				<td>
					<input type="text" name="nama" placeholder="masukan nama">
				</td>
			</tr>
			<tr>
				<td>jenis kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jekel" value="laki-laki"> laki-laki
					<input type="radio" name="jekel" value="perempuan"> perempuan
				</td>
			</tr>
			<tr>
				<td>alamat</td>
				<td>:</td>
				<td>
					<textarea name="alamat"></textarea>
				</td>
			</tr>
			<tr>
				<td>no telp</td>
				<td>:</td>
				<td>
					<input type="text" name="no_telp" placeholder="masukan no telp">
				</td>
			</tr>
			<tr>
			     <td>Upload File</td>
				<td>:</td>
				<td>
					<input type="file" name="upload_file">
				</td>
			</tr>
			<td>Pilih Kamar</td>
	 <td>:</td>
	 <td>
		 <input type="radio" name="jekar" value="standar"> standar
		 <input type="radio" name="jekar" value="deluxe"> deluxe
	 </td>
 </tr>
			<tr>
				<td colspan="3">
					<input type="submit"a href="index.php" name="" value="simpan">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
