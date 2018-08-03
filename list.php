<?php include('koneksi.php'); ?> 
<html>
<head><title>BeeSite</title>
<link href="picture/1.png" rel="shortcut icon">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div id ="header">
<div class="menu">
	<ul>
		<li > <a href="index.php">Beranda</a></li>
		<li> <a href="profil.php">Pengetahuan</a></li>
		<li> <a href="gallery.php">Galeri</a></li>
		<li class="selected"> <a href="list.php">Komentar</a></li>
	</ul>
</div>
</div>

<div id ="view-menu1">
<h1 align="center"><br>Komentar</br></h1>
<form action="" method="post">
</form>

<table class="table-view">
<th>Email</th>
<th>Nama</th>
<th>Komentar</th>
<th>Opsi</th>
</tr>

<?php 

$input_cari = @$_POST['input_cari']; 
$cari = @$_POST['cari'];

// jika tombol cari di klik
if($cari) {

// jika kotak pencarian tidak sama dengan kosong
if($input_cari != "") {
// query mysql untuk mencari berdasarkan idjenisbiaya. .
$sql = mysql_query("select * from komentar where email like '%$input_cari%'") or die (mysql_error());   
} else {
$sql = mysql_query("select * from komentar") or die (mysql_error());
}
} else {
$sql = mysql_query("select * from komentar") or die (mysql_error());
}

// mengecek data
$cek = mysql_num_rows($sql);
// jika data kurang dari 1
if($cek < 1) {
?>

<?php
} else {

// mengulangi data agar tidak hanya 1 yang tampil
while($data = mysql_fetch_array($sql)) {

?>
<tr>
<td align="center"><?php echo $data['nama']; ?></td>
<td align="center"><?php echo $data['email']; ?></td>
<td align="center"><?php echo $data['komentar']; ?></td>

<!--Hanya pemanis tampilan-->
<td align="center">

<a href="delete.php?id=<?php echo $data['email']; ?>"onclick="return confirm('Anda yakin akan menghapus?')" 
style="text-decoration:none" class="button3">Delete</a>
</td>
  </tr>
 <?php 
}
}
?>

</table>
<br><br><br><br><br><p class="button"><a href="index.php"><center>Kembali</center></a></p>
</div>

</body>
</html>