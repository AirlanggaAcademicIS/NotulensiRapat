<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Peserta</title>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:718px;
	height:394px;
	z-index:1;
	left: 265px;
	top: 290px;
}
-->
</style>

<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
<table width="1032" height="169" border="1">
  <tr>
    <td height="163"><img src="image/header.png" width="1022" height="150" alt="header" /></td>
  </tr>
</table>

<table width="1032" height="543" border="1">
  <tr>
    <td width="198" height="67"><img src="image/menu_kiri_r2_c2.png" width="164" height="58" alt="judul" /></td>
    <td width="818"><form id="form1" name="form1" method="post" action="">
      <label>Masukkan keyword:
      <input type="nama" name="keyword" />
      </label>
      <label>
      <input type="submit" name="cari" value="cari" />
      </label>
    </form> </td>
  </tr>
  <tr>
 
    <td height="468"><p>
      <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','191','height','45','src','button1','quality','high','pluginspage','http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#FFFFFF','scale','exactfit','movie','button1' ); //end AC code
    </script>
      <noscript>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="191" height="45">
          <param name="movie" value="button1.swf" />
          <param name="quality" value="high" />
          <param name="bgcolor" value="#FFFFFF" />
          <param name="SCALE" value="exactfit" />
          <embed src="button1.swf" width="191" height="45" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" bgcolor="#FFFFFF" scale="exactfit"></embed>
        </object>
        </noscript>
    </p>
    <p>
      <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','190','height','44','src','button2','quality','high','pluginspage','http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#FFFFFF','scale','exactfit','movie','button2' ); //end AC code
      </script>
      <noscript>
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="190" height="44">
        <param name="movie" value="button2.swf" />
        <param name="quality" value="high" />
        <param name="bgcolor" value="#FFFFFF" />
        <param name="SCALE" value="exactfit" />
        <embed src="button2.swf" width="190" height="44" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" bgcolor="#FFFFFF" scale="exactfit"></embed>
      </object>
      </noscript>
    </p></td>
    <td><img src="image/latar.png" width="817" height="448" alt="latar" longdesc="file:///C|/xampp/htdocs/keyword/image/latar.xcf" />
      <div id="Layer1">
	  
	   <?php
include 'koneksi.php';
@$nama=$_POST[keyword];
@$tgl=$_POST[tgl];
@$cari=$_POST[cari];
@$cari2=$_POST[cari2];
@$per=$_POST[per];
if($cari=="cari"){
		@$ambil=mysql_query("select * from table rapat where hal like '%$nama%'");
while($ray=mysql_fetch_array($ambil)){
?>

<ul id="accordion">
    <li><?php echo"$ray[hal]"; ?></li>
    <ul>
        <li><a href="#"><?php echo"$ray[pembahasan_rapat]"; ?></a></li>
    </ul>
</ul>
	 
	    
  </div>  </tr>
</table>


</body>
</html>
