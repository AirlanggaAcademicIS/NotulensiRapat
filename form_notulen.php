<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<script src='lib/tinymce/tinymce.min.js'></script>
  <script>
  tinymce.init({
    selector: '#bahas_rapat'
  });
  tinymce.init({
    selector: '#kesimpulan'
  });
  tinymce.init({
    selector: '#rekomendasi'
  });
  </script>
  <style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
.style2 {font-size: 18px}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 16px; }
-->
  </style>
</head>
<body>

 <style type="text/css">
  input[type="text"] {
    border: 0;
	font:Arial, Helvetica, sans-serif;
	font-size:20px;
	background-color: rgba(255, 255, 255, 0.5);
  }
</style>
<br><br/>
<form name="form1" id="form1" method="post" action="">
<table width="100%" >
  <tr>
  	<td width="30"><table width="100%" >
    </table></td>
    <td width="700"><table width="100%" >
      <tr>
        <td>
          <input name="pimpinrapat" type="text" placeholder=" Pimpinan Rapat" size="30" />
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>
          <input name="haritgl" type="text" placeholder=" Hari, Tanggal" size="30" />
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>
          <input name="tempatrapat" type="text" placeholder=" Tempat Rapat" size="30" />
        </td>
      </tr>
    </table></td>
    <td width="605"><table width="100%" >
      <tr>
        <td>
          <input name="wakturapat" type="text" placeholder=" Waktu Rapat" size="30" />
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>
          <input name="penanggungjawab" type="text" placeholder=" Penanggung Jawab" size="30" />
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>
          <input name="hadirpeserta" type="text" placeholder=" Kehadiran Peserta" size="30" />
        </td>
      </tr>
    </table></td>
  </tr>
</table>
<br><br />
<table width="100%" >
  <tr>
  <td width="24" valign="top"></td>
    <td width="256" valign="top"><div align="right" class="style1 style2" >
      <div align="left">Pembahasan Rapat </div>
    </div></td>
	<td width="35" valign="top"><div align="right" class="style1 style2" >
	  <div align="center">:</div>
	</div></td>
    <td width="979" valign="top"><textarea id="bahas_rapat" name="bahas_rapat"></textarea></td>
  </tr>
  <tr>
  	<td width="24" valign="top"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  	<td width="24" valign="top"></td>
    <td width="256" valign="top"><div align="right" class="style1 style2" >
      <div align="left">Kesimpulan</div>
    </div></td>
	<td width="35" valign="top"><div align="right" class="style1 style2" >
	  <div align="center">:</div>
	</div></td>
    <td width="979" valign="top"><textarea id="kesimpulan" name="kesimpulan"></textarea></td>
  </tr>
  <tr>
  	<td width="24" valign="top"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  	<td width="24" valign="top"></td>
    <td width="256" valign="top"><div align="right" class="style1 style2" >
      <div align="left">Rekomendasi</div>
    </div></td>
	<td width="35" valign="top"><div align="right" class="style1 style2" >
	  <div align="center">:</div>
	</div></td>
    <td width="979" valign="top"><textarea id="rekomendasi" name="rekomendasi"></textarea></td>
  </tr>
</table>
<br><br />
<table width="100%" >
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" >
      <tr>
        <td width="33%"><div align="right">
          <input type="checkbox" name="checkbox" value="checkbox" />
        </div></td>
        <td width="67%"><span class="style4">Saya menyetujui sesuai dengan isi rapat di atas </span></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><div align="right">
      <input type="submit" name="Submit" value="Submit" />
</div></td>
  </tr>
</table>
</form>
<?php
if($_POST[Submit]){
	if($_POST[pimpinrapat] and $_POST[haritgl] and $_POST[tempatrapat] and $_POST[wakturapat] and $_POST[penanggungjawab] and $_POST[hadirpeserta]){
		if($_POST[checkbox]){
			?>
		<script>alert("Data Berhasil Tersimpan")
		window.location="menu_petugas.php";
		</script>
		<?php
		}
		else{
			?>
		<script>alert("Anda Belum Verifikasi Notulen!")</script>
		<?php
		}
		
	}
	else{
		?>
		<script>alert("Lengkapi Form")
		</script>
		<?php
	}
}
?>
</body>
</html>