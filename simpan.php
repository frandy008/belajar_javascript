<?php 
mysql_connect('localhost','root','') or die("Tidak Konek !!");
mysql_select_db('db_no_refresh') or die('Database tidak ditemukan !!');



$meja = $_POST['meja'];
foreach($_POST["minuman"] as $minuman1){
 	$minuman .= $minuman1.', ';
}
foreach($_POST["makanan"] as $makanan1){
 	$makanan .= $makanan1.', ';
}
$keterangan = $_POST['keterangan'];
 
mysql_query("INSERT INTO tbl_pesanan(meja,minuman,makanan,keterangan) VALUES('$meja','$minuman','$makanan','$keterangan')");
?>