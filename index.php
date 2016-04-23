<?php
session_start();
if($_GET[logout]==1){
	unset($_SESSION[username]);
}
?>
<html>
<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html;">
<!--Fireworks MX 2004 Dreamweaver MX 2004 target.  Created Fri Mar 25 12:39:42 GMT+0700 (SE Asia Standard Time) 2016-->
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
  input[type="text"] {
    border: 0;
	font:Arial, Helvetica, sans-serif;
	font-size:15px;
    background: transparent;
/*    background-color:#FFFFCC;*/
  }
</style>
<style type="text/css">
  input[type="password"] {
    border: 0;
	font:Arial, Helvetica, sans-serif;
	font-size:15px;
    background: transparent;
/*    background-color:#FFFFCC;*/
  }
</style>
<style type="text/css">
  input[type="submit"] {
    border: 0;
	font:Arial, Helvetica, sans-serif;
	font-size:20px;
    background: transparent;
  }
</style>
</head>
<body bgcolor="#CEF2F2">
<br>
<p>&nbsp;</p>	
<table width="636" height="333" border="0" align="center" cellpadding="0" cellspacing="0" background="image/login.png">
<!-- fwtable fwsrc="login.png" fwbase="index.png" fwstyle="Dreamweaver" fwdocid = "1276832135" fwnested="0" -->
  <form name="form1" method="post" action="">
  <tr>
   <td width="397">
   	<div id="Layer1" style="position:relative; width:100px; height:20px; z-index:1; left: 360px; top: 9px;"><input name="username" type="text" size="20" maxlength="25" placeholder="Username">
   	</div>
	<div id="Layer2" style="position:relative; width:100px; height:20px; z-index:1; left: 360px; top: 34px;"><input name="password" type="password" size="20" maxlength="13" placeholder="Password">
	</div>   
	<div id="Layer3" style="position:relative; width:166px; height:20px; z-index:1; left: 515px; top: -45px;"><input type="image" name="submit" src="image/login_button.png" border="0" alt="Submit" /></div>   
   </td>
   </tr>
</form>
</table>
<?php
if ($_POST[username])
{
	include("koneksi.php");
	$query="select * from user where username='$_POST[username]' and password='$_POST[password]'";
	$hasil=mysql_query($query);
	$r=mysql_fetch_array($hasil);
	if ($r[username])
	{
		$_SESSION[username]=$_POST[username];
		$_SESSION[namaprofil]=$r['nm_lengkap'];
		$_SESSION[nomorinduk]=$r['nomor_induk'];
		switch($r[otoritas]){
			case 1 : $_SESSION[petugas]="Administrator"; $_SESSION[menuawal]=true;?><script>window.location="hal_admin.php";</script><?php break;
			case 2 : $_SESSION[petugas]="Ketua Prodi"; $_SESSION[menuawal]=true;?><script>window.location="hal_kaprodi.php";</script><?php break;
			case 3 : $_SESSION[petugas]="Tata Usaha"; $_SESSION[menuawal]=true;?><script>window.location="hal_tu.php";</script><?php break;
		}
	}
	else
	{
		?>
		<script>alert("Maaf Anda Tidak Boleh Login..")
		</script>
		<?php
	}
}	
?>
</body>
</html>
