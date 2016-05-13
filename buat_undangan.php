<?php include("koneksi.php");?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="datepicker/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="timepicker/jquery.timepicker.min.css" />
<script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="combo_bertingkat/jquery.js"></script>
<script src="datepicker/jquery-ui.js"></script>
<script type="text/javascript" src="timepicker/jquery.timepicker.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tanggal').datepicker({
			dateFormat : "dd/mm/yy",
			changeMonth : true,
			changeYear : true
			});
		$('#waktu_mulai').timepicker({ timeFormat: 'HH:mm', interval: 15 });
		$('#waktu_selesai').timepicker({ timeFormat: 'HH:mm', interval: 15 });
		$("#penanggungjawab").change(function(){
		var penanggungjawab = $("#penanggungjawab").val();
		$.ajax({
		url: "combo_bertingkat/ambilnotulen.php",
		data: "penanggungjawab="+penanggungjawab,
		cache: false,
		success: function(msg){
		$("#notulen").html(msg);
		}
		});
		});
		$("#notulen").change(function(){
		var penanggungjawab = $("#penanggungjawab").val();
		var notulen = $("#notulen").val();
		$.ajax({
		url: "combo_bertingkat/ambilpeserta.php",
		data: {penanggungjawab,notulen},
		cache: false,
		success: function(msg){
		$("#psrapat").html(msg);
		}
		});
		});
		});
		function validator(){
			if (form1.penanggungjawab.value == 'Penanggung Jawab'){
			   alert("Pilih Penanggungjawab Rapat");
			   form1.penanggungjawab.focus();
			   return (false);
			}
			if (form1.notulen.value == 'Notulen'){
			   alert("Pilih Notulen Rapat");
			   form1.notulen.focus();
			   return (false);
			}
			var checkboxs=document.getElementsByName("peserta[]");
    		var okay=false;
    		for(var i=0,l=checkboxs.length;i<l;i++){
		        if(checkboxs[i].checked){
		            okay=true;
            		break;
        		}
    		}
    		if(!okay){
				alert("Pilih Peserta Rapat");
				return (false);
			}
        	return (true);
        }
</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
}
.combobackground { background-color: rgba(255, 255, 255, 0.5); }
.style2 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
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
</head>
<body>
<style type="text/css">
  input[type="text"] {
    border: 0;
	padding-left: 10px;
	font:Arial, Helvetica, sans-serif;
	font-size:20px;
	background-color: rgba(255, 255, 255, 0.5);
  }
</style>
<style>
/**
 * Facebook - Special Edition
 */
.button.facebook {
	font:Arial, Helvetica, sans-serif;
	padding-right: 10px;
	padding-left: 10px;
	font-size:18px;
    background: #99b6df;
    background: -webkit-gradient(linear, 0 0, 0 bottom, from(#99b6df), to(#638ec8));
    background: -moz-linear-gradient(#99b6df, #638ec8);
    background: linear-gradient(#99b6df, #638ec8);
    border: solid 1px #6d94ce;
    border-bottom: solid 3px #3867ac;
    color: #fff;
    text-shadow: 0 1px 0 #3c61ab; }
    
.button.facebook:hover {
    background: #638ec8;
    background: -webkit-gradient(linear, 0 0, 0 bottom, from(#638ec8), to(#99b6df));
    background: -moz-linear-gradient(#638ec8, #99b6df);
    background: linear-gradient(#638ec8, #99b6df);
    border: solid 1px #6d94ce;
    border-bottom: solid 3px #3867ac;}
    
.button.facebook:active {
    background: #638ec8;
    background: -webkit-gradient(linear, 0 0, 0 bottom, from(#638ec8), to(#99b6df));
    background: -moz-linear-gradient(#638ec8, #99b6df);
    background: linear-gradient(#638ec8, #99b6df);
    border: solid 1px #6d94ce;
    box-shadow: inset 0 10px 15px 0 #4176c4; }
</style>
<style>
select {
	margin-left: 8px;
    background-color: rgba(255, 255, 255, 0.5);
    width: 312px;
    padding-left: 5px;
    font-size: 18px;
    border: 0px solid #ccc;
    height: 30px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
select:invalid { color: #6B7373; }
</style>
<br />
<br />
<form name="form1" id="form1" method="post" action="" onsubmit="return validator()">
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="49%" rowspan="2" valign="top"><table width="378" border="0" cellspacing="0" cellpadding="0">
      <tr height="30">
        <td width="10">&nbsp;</td>
        <td>&nbsp;
            <input name="nosurat" type="text" placeholder="Nomor Surat" size="30" oninvalid="this.setCustomValidity('Isikan Nomor Surat')" oninput="setCustomValidity('')" required/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr height="30">
        <td width="10">&nbsp;</td>
        <td>&nbsp;
            <input name="hal" type="text" placeholder="Hal" size="30" oninvalid="this.setCustomValidity('Isikan Hal Surat')" oninput="setCustomValidity('')" required/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr height="30">
        <td width="10">&nbsp;</td>
        <td>&nbsp;
            <input name="tanggal" type="text" placeholder="Hari Tanggal" size="30" id="tanggal" oninvalid="this.setCustomValidity('Pilih Tanggal Rapat')" onchange="setCustomValidity('')" required/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr height="30">
        <td width="10">&nbsp;</td>
        <td>&nbsp;
            <input name="tempat" type="text" placeholder="Tempat Rapat" size="30" oninvalid="this.setCustomValidity('Isikan Tempat Rapat')" oninput="setCustomValidity('')" required/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr height="30">
        <td width="10">&nbsp;</td>
        <td>&nbsp;
            <input name="waktu_mulai" type="text" placeholder="Waktu Mulai Rapat" size="30" id="waktu_mulai" required/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
	  <tr height="30">
        <td width="10">&nbsp;</td>
        <td>&nbsp;
            <input name="waktu_selesai" type="text" placeholder="Waktu Selesai Rapat" size="30" id="waktu_selesai" required/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr height="30">
        <td width="10">&nbsp;</td>
        <td>
            <select name="penanggungjawab" id="penanggungjawab" oninvalid="this.setCustomValidity('Pilih Penanggungjawab Rapat')" onchange="setCustomValidity('')" required>
			<optgroup style="max-height: 80px;">
    			<option disabled selected hidden>Penanggung Jawab</option>
			<?php
			$result=mysql_query("SELECT * FROM user where otoritas != '1'");
			while($nama = mysql_fetch_array($result)){
				echo "<option value=\"$nama[nomor_induk]\">$nama[nm_lengkap]</option>\n";
			}
			?>
			</optgroup>
			</select>
	   </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr height="30">
        <td width="10">&nbsp;</td>
        <td>
            <select id="notulen" name="notulen" oninvalid="this.setCustomValidity('Pilih Notulen Rapat')" onchange="setCustomValidity('')" required>
			<optgroup style="max-height: 80px;">
    			<option disabled selected hidden>Notulen</option>
			</optgroup>
			</select>
	   </td>
      </tr>
    </table></td>
    <td valign="top"><table width="100%" >
      <tr>
        <td>
          <table width="100%" >
            <tr>
              <td width="54%"><input name="input_bahas" type="text" placeholder="Pembahasan Rapat" id="input_bahas" size="27"/></td>
              <td width="46%"><div id='plus_bahas' style="cursor: pointer"><img src="image/plus.png"/></div></td>
			  <script>
				$(document).ready(function(){
					$('#input_bahas').keypress(function(e){
					  if(e.keyCode==13)
					  $('#plus_bahas').click();
					});
				});
			  </script>
            </tr>
          </table></td>
      </tr>
	   <tr>
        <td><textarea name="list_bahas" id="list_bahas" style="width: 310px; height: 100px; border: 0; padding-left: 10px; font-family: Arial, Helvetica, sans-serif; font-size: 18px;background-color: rgba(255, 255, 255, 0.5); resize:none;" readonly></textarea>
		<script>
			var x=1;
			$(document).ready(function(){
				$("#plus_bahas").click(function(){
					if ($('#input_bahas').val() != '') {
						$('#list_bahas').append(x+". "+$("#input_bahas").val()+"\n");
						$("#input_bahas").val("");
						x++;
					}
				});
			});
		</script>
		</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top"><table width="100%" >
      <tr>
        <td><input type="text" placeholder="Peserta Rapat" size="31" onfocus="blur()"/>
		<div id="peserta_icon" style="position:relative; width:0px; height:0px; z-index:1; left: 285px; top: -28px;"><img src="image/peserta.png" width="30" height="30" /></div>
		</td>
      </tr>
      <tr>
        <td>
		<div id="psrapat" class="combobackground" style="height: 8em; width: 20em; overflow: auto;"></div>
		</td>
      </tr>
    </table>    
      
  </tr>
</table>
<table width="100%" >
  <tr><td width="100%">&nbsp;</td>
  </tr>
</table>
<table width="100%" >
  <tr>
    <td width="88%">
		<div align="right">
        	<input type="submit" name="Submit" value="Submit" class="button facebook"/>
      	</div>
	 </td>
    <td width="12%"></td>
  </tr>
</table>
<table width="100%" >
  <tr><td width="100%">&nbsp;</td>
  </tr>
</table>
</form>
<script>
$('form input').on('keypress', function(e) {
    return e.which !== 13;
});
</script>
<?php
if(isset($_POST['Submit'])){
$berhasil=true;
$query="insert into peserta_rapat values ('$_POST[nosurat]','1','$_POST[penanggungjawab]')";
mysql_query($query);
if(mysql_errno()){
	$berhasil=false;
}
$query="insert into peserta_rapat values ('$_POST[nosurat]','2','$_POST[notulen]')";
mysql_query($query);
if(mysql_errno()){
	$berhasil=false;
}
$peserta = $_POST['peserta'];
$length = count($peserta);
   for($x = 0; $x < $length; $x++) {
	   $query="insert into peserta_rapat values ('$_POST[nosurat]','3','$peserta[$x]')";
	   mysql_query($query);
	   if(mysql_errno()){
       		$berhasil=false;
	   }
   }
$query="insert into rapat values ('$_POST[nosurat]','$_POST[hal]','$_POST[tanggal]','$_POST[tempat]','$_POST[waktu_mulai]','$_POST[waktu_selesai]','$_POST[list_bahas]', '0')";
mysql_query($query);
if(mysql_errno()){
	$berhasil=false;
}
if($berhasil){
?>
	<script>alert("Berhasil Membuat Undangan dan Dikirim ke Ketua Prodi");</script>
<?php
}
}
?>
</body>
</html>