<?php
include"koneksi.php";

$tampil=mysqli_query($conn,"select*from profil");
while($data=mysqli_fetch_assoc($tampil))
{
  $array[]=$data;

}

echo json_encode($array);
?>
