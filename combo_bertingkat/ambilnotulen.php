<?php
include("../koneksi.php");
$penanggungjawab = $_GET['penanggungjawab'];
$notulen = mysql_query("SELECT * FROM user WHERE nomor_induk != '$penanggungjawab' and otoritas != '1'");
echo "<option disabled selected hidden>Notulen</option>";
while($k = mysql_fetch_array($notulen)){
echo "<option value=\"".$k['nomor_induk']."\">".$k['nm_lengkap']."</option>\n";
}
?>