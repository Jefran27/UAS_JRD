<?php

    $host		=	"localhost";
	$username	=	"root";
	$password	=	"";
	$database	=	"sel";
	
	$koneksi_mysql = mysql_connect($host,$username,$password,$database) or die ("gagal terhubung !");
	mysql_select_db($database,$koneksi_mysql) or die ("gagal memilih database !");

?>
