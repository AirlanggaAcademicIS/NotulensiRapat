<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <html>
  <head>
 +<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
 
$("#accordion > li").click(function(){

    if(false == $(this).next().is(':visible')) {
        $('#accordion > ul').slideUp(300);
    }
    $(this).next().slideToggle(300);
});

$('#accordion > ul:eq(0)').show();

$("#accordion2 > li").click(function(){

    if(false == $(this).next().is(':visible')) {
        $('#accordion2 > ul').slideUp(300);
    }
    $(this).next().slideToggle(300);
});

$('#accordion2 > ul:eq(0)').show();

</script>
 -<?php
 -	}
 -}	
 +}
 +}
 +}
  ?>
 +    </td>
 +    </tr>
 +    <tr>
 +      <td height="44" colspan="2">&nbsp;</td>
 +    </tr>
 +  </tbody>
 +</table>
  </body>
 -</html>
 +<script type="text/javascript" src="jquery-latest.js"></script>
 +<script type="text/javascript" src="accord.js"></script>
 +</html> 
