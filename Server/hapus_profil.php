<?php
	include"koneksi.php";
$hapus="DELETE FROM profil where tbl_id_profil='?'";



if($hapus)
{
	echo"
	<script>
	alert('data berhasil dihapus');
	location.href='data_profil.php';
	</script>";
}
else
{
	echo"data gagal dihapus";
}
?>
