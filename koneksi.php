<?php
//buka koneksi ke engine MySQL
	$Open = mysql_connect("localhost","root","");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
//koneksi ke database
	$Koneksi = mysql_select_db("web_1");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}
?>