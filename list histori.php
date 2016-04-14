<?php
   $conn =mysql_connect("localhost","root","");
   $db = mysql_select_db("rapat.sql",$conn);
   $sql = "select * from table hisori order by tahunrapat";
   $hasil = mysql_query($sql,$conn);
?>
<h1 align="center" >Histori Rapat Tahunan </h1> 
<br>
<table width="656" border="1" cellspacing="0" cellpadding="2">
   <tr>
      <td width="107">Judul</td>
   </tr>
<?php
   while ($rsbuku = mysql_fetch_row($hasil)){
   <tr>
      <td><?php echo $rsbuku[judulrapat]; ?></td>

   </tr>
<?php } ?>
</table>