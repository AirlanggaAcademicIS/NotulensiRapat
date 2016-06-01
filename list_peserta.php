<?php include ("koneksi.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript">
	$(document).ready(function(){
		$("#cmbGate").change(function(){
		var ps = $("#cmbGate").val();
		$.ajax({
		url: "cetak.php",
		data: "ps="+ps,
		cache: false,
		success: function(msg){
		$("#list").html(msg);
		}
		});
		});
		});
</script>
</head>
<body>
<form action="" method="post" name="Form1">
<table width="100%" border="0">
  <tr>
    <td><img src="image/Graphic1.png" width="36" height="30" /></td>
    <td><select name="cmbGate" id="cmbGate" >
      <span class="caret"></span>
      <ul class="dropdown-menu">
      <?php 
  $result=mysql_query("SELECT * FROM rapat where status ='1'");
  while ($nama = mysql_fetch_array($result)){
	  echo "<option value=\"$nama[no_surat]\">$nama[hal]</option>\n";
  }
  ?>
    </select></td>
  </tr>
</table>
<div id="list">
<table width="100%" border="0">
  <tr>
    <td><img src="image/Tanggal.png" width="35" height="29" /></td>
    <td>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
    </td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td><img src="image/Location.png" width="35" height="30" /></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td><img src="image/Time.png" width="32" height="37" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="100%" border="0">
  <tr>
    <td><blockquote>
      <blockquote>
        <blockquote>
          <blockquote>
            <blockquote>
              <blockquote>
                <blockquote>
                  <blockquote>
                    <blockquote>
                      <blockquote>
                        <blockquote>
                          <p>Peserta yang Hadir </p>
                        </blockquote>
                      </blockquote>
                    </blockquote>
                  </blockquote>
                </blockquote>
              </blockquote>
            </blockquote>
          </blockquote>
        </blockquote>
      </blockquote>
    </blockquote></td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td>
      <label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" />
    </td>
    <td>
      <label for="select2"></label>
    </td>
  </tr>
  <tr>
    <td>
      <label for="textfield2"></label>
      <input type="text" name="textfield5" id="textfield2" />
   </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
      <label for="textfield3"></label>
      <input type="text" name="textfield6" id="textfield3" />
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
      <label for="textfield4"></label>
      <input type="text" name="textfield7" id="textfield4" />
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
      <label for="textfield5"></label>
      <input type="text" name="textfield8" id="textfield5" />
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
      <label for="textfield6"></label>
      <input type="text" name="textfield9" id="textfield6" />
   </td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
</form>
</body>
</html>