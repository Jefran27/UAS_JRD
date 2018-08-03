<?php
include('koneksi.php');
$a =$_POST ['nama'];
$b =$_POST ['email'];
$c =$_POST ['subject'];
$d =$_POST ['message'];
$query =mysql_query("insert into komentar values('$a','$b','$c','$d')") or die (mysql_error("Tidak Tersimpan"));

header("location:list.php?pesan=Selamat update anda sukses");
?>

