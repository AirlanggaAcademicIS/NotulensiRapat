<?php
session_start();
if($_SESSION[username]==''){
?>
		<script>alert("Halaman Tidak Tersedia")
		window.location="index.php";
		</script>
		<?php
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="cssmenu/styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
<title>menu petugas</title>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
}
.style2 {font-size: 18px; font-family: Arial, Helvetica, sans-serif;}
-->
</style>
</head>

<body>
<table  border="1" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCDC7B">
    <td colspan="2" valign="top"><div align="center"><img src="image/header.png"></div></td>
  </tr>
  <tr>
    <td width="211" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center"><img src="image/menu_kiri_r2_c2.png" width="160" height="54"></div></td>
      </tr>
      <tr>
        <td valign="top"><div align="center"><img src="image.php?path=image/foto.jpg" width="100" height="100"></td>
      </tr>
	  <tr>
        <td>&nbsp;</td>
      </tr>
	  <tr>
        <td align="center" valign="middle">
        <div align="center">
          <label><span class="style1"><?php echo $_SESSION[namaprofil] ?></span></label>
        </div></td>
      </tr>
	  <tr>
        <td align="center" valign="middle">
        <div align="center">
          <label><span class="style2"><?php echo $_SESSION[nomorinduk] ?></span></label>
        </div></td>
      </tr>
	   <tr>
        <td>&nbsp;</td>
      </tr>
	  <tr>
        <td>
		    <div id='cssmenu'>
				<ul>
				   <li class='<?php if($_SESSION[menuawal]){echo 'active';}else{if($_GET[id]==1){ echo 'active';}} ?>'><a href='?id=1'><span>Buat Undangan</span></a></li>
				   <li class='<?php if($_GET[id]==2){ echo 'active';} ?>'><a href='?id=2'><span>Sebar Undangan</span></a></li>
				   <li class='<?php if($_GET[id]==3){ echo 'active';} ?>'><a href='?id=3'><span>Notulen Rapat</span></a></li>
				   <li class='last'><a href='index.php?logout=1'><span>Logout</span></a></li>
				</ul>
			</div>
		</td>
      </tr>
      <tr>
        <td>&nbsp; </td>
      </tr>
    </table></td>
    <td width="830" valign="top">
	  <table width="830" height="532" border="0" cellpadding="0" cellspacing="0" background="image/latar.png" >
        <tr>
          <td valign="top">&nbsp;
		  <div id="Layer1" style="background-color:#FFFFCC;position:relative; text-align:center; width:180px; height:20px; z-index:1; left: 630px; top: -10px;"><span style="font-family: Arial, Helvetica, sans-serif"><strong><?php echo $_SESSION[petugas] ?></strong></b></span></div>
		  <div id="Layer2" style="position:relative; text-align:center; width:180px; height:20px; z-index:1; left: 630px; top: 5px;"><b>Date : <?php $sekarang = date('d-m-Y'); echo $sekarang ?></b></div>
		  <?php
		  if($_SESSION[menuawal]){
		  	include('buat_undangan.php');
		  }
		  else{
		  	switch ($_GET[id]){
				case 1:$proses="buat_undangan.php";break;
				case 2:$proses="surat.php";break;
				case 3:$proses="form_notulen.php";break;
		  	}
		  	if ($proses){
			 include($proses);
		  	}
		  }
		  ?>
		  </td>
        </tr>
    </table>
    </td>
  </tr>
</table>
</body>
</html>
<?php unset($_SESSION[menuawal]); ?>