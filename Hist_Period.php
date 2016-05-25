+<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 +<html>
 +<head>
 +<meta charset="utf-8">
 +
 +<link href="style_accord.css" rel="stylesheet" type="text/css" />
 +<title>Untitled Document</title>
 +</head>
 +
 +<body background="gambar/latar.png">
 +<div align="center" style="margin-bottom:20px; max-width:960px; margin-left:12.2%;">
 +<img src="gambar/header.png" width="960" height="108" style="border-radius:7px; box-shadow:5px 5px 5px #000000;">
 +</div>
 +<table align="center" width="960" height="491">
 +  <tbody>
 +    <tr>
 +      <td width="281" height="88" valign="bottom"><img src="gambar/head2.png" width="281" height="70"></td>
 +      <td width="667" valign="top" style="padding:20px;">
 +      
 +      <form method="post" action="" enctype="multipart/form-data">
 +     
 +      <div class="bb">
 +<ul id="accordion2">
 +    <li>Periode Rapat</li>
 +    <ul>
 +        <li><input type="text" name="period" placeholder="Masukkan periode..." style="width:150px; height:24px; border:0px;"><input class="btn" type="submit" name="cari" value="CARI"></li>
 +
 +    </ul>
 +    </ul>
 +    </div>
 +    
 +      </form></td>
 +    </tr>
 +    <tr>
 +    <td height="349" style="padding:20px;background:rgba(255,255,255,0.6); border-radius:7px 0px 0px 7px; border-right:2px dashed #05249C;" align="center" valign="top">
 +    <img src="gambar/user_icon.png" width="150" height="150" style="border-radius:300px;">
 +    <p>Ardina Sovitasari</p>
 +    021352567
 +    <div align="center" class="nama">
 +    <p>Konfirmasi Kehadiran</p>
 +    <p>HISTORI RAPAT</p>
 +    </div>
 +    </td>
 +    <td valign="top" style="padding:20px;background:rgba(255,255,255,0.6); border-radius:0px 7px 7px 0px; border-left:2px dashed #05249C;">
 +    <?php
 +include 'kontek.php';
 +@$nama=$_POST[key];
 +@$cari=$_POST[cari];
 +@$per=$_POST[per];
 +
 +if($cari=="CARI"){
 +	if($nama==""){
 +		echo"Kotak Pencarian Harap Diisi";
 +	}else{
 +		@$ambil=mysql_query("select*from rapat where periode like '%$nama%'");
 +while($ray=mysql_fetch_array($ambil)){
 +?>
 +
 +<ul id="accordion">
 +    <li><?php echo"$ray[tema], $ray[tgl_rapat]"; ?></li>
 +    <ul>
 +        <li><a href="#"><?php echo"$ray[kesimpulan]"; ?></a></li>
 +    </ul>
 +    </ul>
 +    
 +<?php
 +}
 +}
 +}
 +?>
 +    </td>
 +    </tr>
 +    <tr>
 +      <td height="44" colspan="2">&nbsp;</td>
 +    </tr>
 +  </tbody>
 +</table>
 +</body>
 +<script type="text/javascript" src="jquery-latest.js"></script>
 +<script type="text/javascript" src="accord.js"></script>
 +</html> 