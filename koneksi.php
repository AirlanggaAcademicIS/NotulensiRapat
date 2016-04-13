<?php 
mysql_connect("localhost","root","");
$find_db=mysql_select_db("notulensirapat"); 
if($find_db){
    echo "db ada";
}
else echo "db tidak ada";
?>