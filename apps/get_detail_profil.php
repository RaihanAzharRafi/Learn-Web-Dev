<?php
include "koneksi.php";

$id_get=$_GET['idphp'];

$lihat=mysqli_query($conn,"select*from profil where tbl_id_profil='$id_get'");

while($data=mysqli_fetch_assoc($lihat))
{
  $json[]=$data;

}


echo json_encode($json);


?>
