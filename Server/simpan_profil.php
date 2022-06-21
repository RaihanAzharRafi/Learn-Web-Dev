<?php
	include"koneksi.php";
$nama=$_POST['nama'];
$jekel=$_POST['jekel'];
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];
$upload=$_FILES['upload_file']['name'];
$ukuran=$_FILES['upload_file']['size'];
$jekar=$_POST['jekar'];

$max=100000;

    if(empty($upload))
{
	   echo"
	   <script>
	   alert('Silahkan pilih file');
	   location.href='input_profl_php';
	   </script>
	";
}
else
{
    if($ukuran > $max)
     {
     	echo"
	    <script>
	    alert('Maksimum ukuran file 100 kb');
	    location.href='input_profl_php';
	    </script>
	";
	}
	else
	{
			$simpan=mysqli_query($conn,"insert into profil(tbl_id_profil,tbl_nama,tbl_jenis_kelamin,tbl_alamat,tbl_no_telp,tbl_file,tbl_jenis_kamar) values('','$nama','$jekel','$alamat','$no_telp','$upload','$jekar')");
			move_uploaded_file($_FILES['upload_file']['tmp_name'],"folder_file/".$upload);

			if($simpan)
			{
				    echo "<meta http-equiv='refresh' content='0; url=data_profil.php'>";
			}
			else
			{

				    echo "gagal tersimpan";
			}
	}
}
?>
