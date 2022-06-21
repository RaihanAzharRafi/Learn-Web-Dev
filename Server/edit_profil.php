<!DOCTYPE html>
<html>
<head>

	<title>Form Edit Profil</title>
</head>
<body>
	<?php
	include"koneksi.php";
	$id=$_GET['id'];
	$tampil=mysql_query("select*from profil where tbl_id_profil='$id'");
	$data=mysql_fetch_array($tampil);
	$id_profil=$data['tbl_id_profil'];
	$nama=$data['tbl_nama'];
	$jekel=$data['tbl_jenis_kelamin'];
	$alamat=$data['tbl_alamat'];
	$no_telp=['tbl_no_telp'];
	?>
<h2 align="center">Form Edit Profil</h2>
	<form action="update_profil.php?id=<?php echo $id_profil; ?>" method="post" enctype="multipart/form-data">
		<table align="center" width="500px">
			<tr>
				<td>name</td>
				<td>:</td>
				<td>
					<input type="text" name="nama" value="<?php echo $nama;" ?>">
				</td>
			</tr>
			<tr>
				<td>jenis kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jakel" value="laki-laki" <?php if ($jekel=='laki-laki') echo "checked"; ?>> laki-laki
					<input type="radio" name="jakel" value="perempuan"> <?php if ($jekel=='perempuan') echo "checked"; ?>> perempuan
				</td>
			</tr>
			<tr>
				<td>alamat</td>
				<td>:</td>
				<td>
					<textarea name="alamat"><?php echo $alamat; ?></textarea>
				</td>
			</tr>
			<tr>
				<td>no telp</td>
				<td>:</td>
				<td>
					<input type="text" name="no_telp" value="<?php echo $no_telp; ?>">
				</td>
			</tr>
			<tr>
      <tr>
				<td>File Upload</td>
				<td>:</td>
				<td>
					<embed src="folder_file/<?php echo $data['tbl_file'];?>" width="300px"></embed>
					<img src="folder_file/<?php echo $data['tbl_file'];?>" width="300px">
			  </td>
			</tr>

			    <td>Update Files</td>
			    <td>:</td>
			    <td>
			    	<input type="file" name="update_file">
			    </td>
			<tr>
			</tr>

				<td colspan="3">
					<input type="submit" name="" value="simpan">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
