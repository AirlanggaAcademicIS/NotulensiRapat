<?php
//$my['host'] = "210.57.208.2";
$my['host'] = "localhost";
$my['user'] = "root";
$my['pass'] = "";
$my['dbs'] = "belajarphp";

$koneksi=mysql_connect($my['host'],$my['user'],$my['pass']);
if (! $koneksi){
  echo "Gagal Koneksi..!".mysql_error();
  }
mysql_select_db($my['dbs'])
or die ("Database not Found".mysql_error());
?>
