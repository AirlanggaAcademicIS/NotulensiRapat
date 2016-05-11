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

<?php include("koneksi.php");?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
</head>

<body>
<br><br/>
<?php
$r = mysql_query("SELECT * FROM rapat");

while($hasil = mysql_fetch_array($r)){
	?>
	<table width="100%"  border="1" >
  <tr>
    <td>
      <table width="100%"  border="0">
         <tr>
           <td width="64%"><table width="100%"  border="0">
		   
             <tr>
               <td><span class="style1">Nomor Surat : <?php echo $hasil['no_surat'];?></span></td>
             </tr>
             <tr>
               <td><span class="style1">Judul Pembahasan : <?php echo $hasil['pembahasan_rapat'];?></span></td>
             </tr>
             <tr>
               <td><span class="style1">Waktu Rapat : <?php echo $hasil['tanggal'];?></span></td>
             </tr>
			 <tr>
               <td><span class="style1">Tempat : <?php echo $hasil['tempat'];?></span></td>
			 </tr>
           </table></td>
		   
		   <td>
		   <img src= width="500" height="100">
		   </td>
           <td width="36%" align="center" valign="middle"><a href='hal_kaprodi.php?konf=<?php echo $hasil['no_surat'];?>'><img src="image/konfirmasi_button.png" width="100" height="32"></a></td>
         </tr>
       </table>
    </td>
  </tr>
</table>	
<?php   
}
?>
</body>
</html>
