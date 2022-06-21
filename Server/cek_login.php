<?php
include"koneksi.php";

echo $user_post = $_POST['user'];
echo $pass_post = $_POST['pass'];

$cek=mysqli_query($conn,"SELECT * FROM admin where username='".$user_post."' AND password='".$pass_post."'");

$jumlah=mysqli_num_rows($cek);
$data=mysqli_fetch_array($cek);

if($jumlah > 0)
{
	session_start();
	$_SESSION['s_user']=$data['username'];
	$_SESSION['s_pass']=$data['password'];

	echo"
	<script>
	alert('Berhasil Login');
	location.href='data_profil.php';
	</script>
	";

}
else{
	echo"
	<script>
	alert('Periksa Kembali Username dan Password Kamu');
	location.href='data_profil.php';
	</script>
	";
}
?>
