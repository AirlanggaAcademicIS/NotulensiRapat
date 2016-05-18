<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<table width="100%" border="0">
  <tr>
    <td width="37"><img src="image/Graphic1.png" width="36" height="30" /></td>
    <td width="1056"><form id="form1" name="form1" method="post" action="">
      <label for="select2"></label>
      <select
     <span class="caret"></span></button>
    <ul class="dropdown-menu">
    <a href="?peserta=<?php echo $hasil['no_surat'];?>">
    <option value="---Pilihan Topik Rapat---"><em><strong>---Pilihan Topik Rapat---</strong></em></option>
    </a><strong>
    <option value="---Pilihan Topik Rapat---"></option>
    </strong>
    <option value="---Pilihan Topik Rapat---"></option>
  <?php
	$sql = mysql_query("SELECT * FROM rapat where status='1'");
	while($hasil = mysql_fetch_array($r)){
	?>
  <tr>
    <td width="66%"><table width="100%" border="0">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td width="34%"><div align="center">
      <p><img src="../notulensirapat_jadi/image/konfirmasi_button.png" width="100" height="32" /></p>
  <?php } ?>
      </select>
    </form>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><img src="image/Tanggal.png" width="36" height="30" /></td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td><img src="image/Time.png" width="36" height="30" /></td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td><img src="image/Location.png" alt="" width="36" height="30" /></td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="100%" border="1">
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
                          <h1>DaftarPeserta</h1>
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
    <td><form id="form5" name="form5" method="post" action="">
      <label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" />
    </form></td>
    <td><form id="form11" name="form11" method="post" action="">
      <label for="select2"></label>
    </form></td>
  </tr>
  <tr>
    <td><form id="form6" name="form6" method="post" action="">
      <label for="textfield2"></label>
      <input type="text" name="textfield5" id="textfield2" />
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><form id="form7" name="form7" method="post" action="">
      <label for="textfield3"></label>
      <input type="text" name="textfield6" id="textfield3" />
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><form id="form8" name="form8" method="post" action="">
      <label for="textfield4"></label>
      <input type="text" name="textfield7" id="textfield4" />
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><form id="form9" name="form9" method="post" action="">
      <label for="textfield5"></label>
      <input type="text" name="textfield8" id="textfield5" />
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><form id="form10" name="form10" method="post" action="">
      <label for="textfield6"></label>
      <input type="text" name="textfield9" id="textfield6" />
    </form></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>