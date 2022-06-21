<?php

include"koneksi.php";

$id=$_GET["id"];
$nama=$_POST["nama"];
$jekel=$_POST["jekel"];
$alamat=$_POST["alamat"];
$no_telp=$_POST["no_telp"];
$upload=$_FILES["update_file"]['name'];

if(empty($upload))
{

    $update=mysqli_query("update profil set tbl_nama='$nama',tbl_jekel='$jenis_kelamin',tbl_alamat='$alamat',tbl_no_telp='$no_telp' where tbl_id_profil='$id'");
}
else
{
	$update=mysqli_query("update profil set tbl_nama='$nama',tbl_jekel='$jenis_kelamin',tbl_alamat='$alamat',tbl_no_telp='$no_telp',tbl_file='$upload' where tbl_id_profil='$id'");
	move_uploaded_file($_FILES['update_file']['tmp_name'],"folder_file/" .$upload);

}


if($update)
{
	echo"
	<script>
	alert.('Data berhasil di update');
	location.href='data_profil.php';
	</script>
	";
}
else
{
	echo"Data gagal di update";
}

?>
