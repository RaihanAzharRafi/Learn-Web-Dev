<!DOCTYPE html>
<html>
<head>
	<title>Booking Hotel</title>
</head>
<body>
<br>
<a href="logout.php">Logout</a>
<br>
<h2 align="center">Form Booking</h2>
	<table border="1" width="700px" align="center">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Check-in Date</th>
			<th>Check-out Date</th>
			<th>Guests</th>
		</tr>
			<?php
			include"koneksi.php";
			$no=1;
			$tampil=mysqli_query($conn,"select*from booking");
			while ($data=mysqli_fetch_array($tampil)) {

			?>
		<tr align="center">
			<td><?php echo $no;$no++;?></td>
			<td><?php echo $data['name']; ?></td>
			<td><?php echo $data['email']; ?></td>
			<td><?php echo $data['phone']; ?></td>
      <td><?php echo $data['check-out date']; ?></td>
      <td><?php echo $data['guests']; ?></td>
			<td><?php echo $data['check-in date']; ?></td>
			<td>
				<a href="edit_profil.php?id=<?php echo $data['tbl_id_profil']; ?>">edit</a> ||
				<a href="hapus_profil.php?id=<?php echo $data['tbl_id_profil']; ?> onclick="return confirm('Yakin data akan di hapus ?')>hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
	<br>
	<a href="booking_hotel">input profil</a>
</body>
</html>
