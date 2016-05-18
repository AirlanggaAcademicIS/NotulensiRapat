<?php
mysql_connect("localhost","root","");
mysql_select_db('notulen');
?>
<?php
include 'kontek.php';
@$nama=$_POST[key];
@$tgl=$_POST[tgl];
@$cari=$_POST[cari];
@$cari2=$_POST[cari2];
@$per=$_POST[per];
else if($cari2=="CARI"){
	@$ambil2=mysql_query("select*from rapat where tgl_rapat like '%$tgl%'");
while($ray2=mysql_fetch_array($ambil2)){
?>
<ul id="accordion">
    <li><?php echo"$ray2[tema]"; ?></li>
    <ul>
        <li><a href="#"><?php echo"$ray2[kesimpulan]"; ?></a></li>
    </ul>
    </ul>
<?php
}
}
