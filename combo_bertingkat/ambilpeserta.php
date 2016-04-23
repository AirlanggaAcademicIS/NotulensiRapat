<?php
include("../koneksi.php");
$penanggungjawab = $_GET['penanggungjawab'];
$notulen = $_GET['notulen'];
$result=mysql_query("SELECT * FROM user WHERE nomor_induk != '$penanggungjawab' and nomor_induk != '$notulen' and otoritas != '1'");
		while($nama = mysql_fetch_array($result)){
			echo '<input id="'.$nama[nm_lengkap].'" type="checkbox" name="peserta[]" value="'.$nama[nomor_induk].'" />
				<label for="'.$nama[nm_lengkap].'"><span class="style2">'.$nama[nm_lengkap].'</span></label>
				<br/>';
		}
?>