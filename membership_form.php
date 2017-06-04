





 


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>Fairi Dust</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(images/bg1.jpg);
	background-color: #001C31;
	background-repeat: repeat-x;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style>
<link href="css/stylesheet1.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
<!--
-->
</style>






<script language="javascript">

		function validate()
{


var x=document.forms["frm"]["textfield"].value;
if (x==null || x=="")
  {
  alert("Please Enter Your Name.");
  document.frm.textfield.focus();
  return false;
  
  }
 
 
 
  var x=document.forms["frm"]["textfield3"].value;
if (x==null || x=="")
  {
  alert("Please Enter Phone No.");
  document.frm.textfield3.focus();
  return false;
  }

  
  
var x=document.forms["frm"]["textfield4"].value;
if (x==null || x=="")
  {
  alert("Please Enter Your Email.");
  document.frm.textfield4.focus();
  return false;
  }
  
 
 var x=document.forms["frm"]["textfield4"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a Valid E-mail Address.");
  document.frm.textfield4.focus();
  return false;
  }
  
  
  
  var med = document.frm;
  if(med.answer.value==''){
   alert("Please Enter the Security Code");
   med.answer.focus();
   return false;
 }
 
  if(med.answer.value!=med.hdn.value){
   alert("Error! The Codes Do Not Match");
   med.answer.value="";
   med.answer.focus();
   return false;
 }
 
 
}
</script>



</head>

<body>
<form action="membership_form.php" method="post" name="frm" onsubmit="return validate();" enctype="multipart/form-data" name="form1" id="contactForm">

<!--<form name="frm" action="membership.php" method="post" onsubmit="return validate();">-->
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td height="153" align="center" valign="middle" background="images/top_bg1.jpg"><table width="950" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="620" align="left" valign="middle"><a href="index.php"><img src="images/logo1.png" width="445" height="138" border="0"/></a></td>
        <td width="330" align="right" valign="middle"><img src="images/fb1.png" width="274" height="118" border="0" usemap="#Map"/>
          <map name="Map" id="Map">
            <area shape="rect" coords="34,84,258,116" href="mailto:Fairidust@optonline.net" target="_blank"/>
          </map>
          </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="45" align="center" valign="middle" bgcolor="#3648B7" class="links1"><a href="index.php" class="links1">Home</a>&nbsp;&nbsp;      &nbsp;&nbsp;|      &nbsp;&nbsp;&nbsp;&nbsp;<a href="astrology.php" class="links1">Astrology</a>&nbsp;&nbsp;      &nbsp;&nbsp;|      &nbsp;&nbsp;&nbsp;&nbsp;<a href="palmistry.html" class="links1">Palmistry</a>&nbsp;&nbsp;&nbsp;      &nbsp;|      &nbsp;&nbsp;&nbsp;&nbsp;<a href="tea_leaf_herbs.html" class="links1">Tea Leaf &amp; Herbs</a>&nbsp;&nbsp;&nbsp;      &nbsp;|      &nbsp;&nbsp;&nbsp;&nbsp;<a href="https://fairidust.blogspot.com/" target="_blank" class="links1">Blog</a>&nbsp;&nbsp;&nbsp;      &nbsp;|      &nbsp;&nbsp;&nbsp;&nbsp;<a href="contactus.php" class="links1">Contact Us</a></td>
  </tr>
  <tr>
    <td height="177" align="center" valign="middle" background="images/titles_bg2.jpg"><table width="902" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="126" align="center" valign="middle" background="images/titles_bg1.jpg" class="titles1">Membership</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="middle">&nbsp;</td>
  </tr>
  
  
  <tr>
    <td align="center" valign="top"><table width="902" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top"><table width="452" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="400" align="center" valign="middle" background="images/box_bg2.jpg"><table width="412" border="0" align="center" cellpadding="7" cellspacing="5">
                  <tr>
                    <td width="107" align="right" valign="middle" class="form_text1">Name</td>
                    <td width="262" class="text1"><input name="textfield" type="text" class="text1" size="35" value=""/></td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="form_text1">Address </td>
                    <td class="text1"><input name="textfield2" type="text" class="text1" size="35" value=""/></td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="form_text1">Phone</td>
                    <td class="text1"><input name="textfield3" type="text" class="text1" size="35" value=""/></td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="form_text1">Email&nbsp;Address</td>
                    <td class="text1"><input name="textfield4" type="text" class="text1" size="35" value=""/></td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="text1"><span class="form_text1">Message Request </span></td>
                    <td class="text1"><textarea name="textarea" cols="32" rows="4" class="text1"></textarea></td>
                  </tr>
                  
                  
                  
   <tr><td valign="middle" class="text1">
                  <input type="hidden" value="23" name="hdn"/>
                 <span class="form_text1">  What's 6 + 17 =</span></td>
                  <td><input name="answer" type="text"/></td></tr>
                  
                  
                  <tr>
                    <td align="right" valign="middle" class="text1">&nbsp;</td>
                    <td class="text1"><a href="">
                    <input type="image" src="images/submit1.png"/>
                   </a></td>
                  </tr>
              </table></form>
              
              
      

<table style="width: 135px;" title="Click to Verify - This site chose Symantec SSL for secure e-commerce and confidential communications." border="0" cellpadding="2" cellspacing="0">
<tbody>
<tr>
<td align="center" valign="top" width="135"><table width="135" height="50" border="0" cellpadding="2" cellspacing="0" title="Click to Verify - This site chose Symantec SSL for secure e-commerce and confidential communications.">
<tr>
<td width="135" align="center" valign="top"><script type="text/javascript" src="https://seal.verisign.com/getseal?host_name=www.thesmartessay.com&amp;size=L&amp;use_flash=YES&amp;use_transparent=YES&amp;lang=en"></script><br/>
<a href="http://www.symantec.com/ssl-certificates" target="_blank" style="color:#000000; text-decoration:none; font:bold 7px verdana,sans-serif; letter-spacing:.5px; text-align:center; margin:0px; padding:0px;">ABOUT SSL CERTIFICATES</a></td>
</tr>
</table></td>
<td width="50%">
<!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tr></tr></table><!-- PayPal Logo --></td>
<td width="50%">
</td>
</tr>
</tbody>
</table>
</td>
</tr>

</table>
        
        
          
              
              
              </td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center" valign="top">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="65" align="center" valign="middle" bgcolor="#002552"><table width="890" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="464" align="left" valign="middle" class="form_text1"><strong>Copyright &copy; <script>document.write(new Date().getFullYear())</script>  Fairi Dust. All rights reserved.</strong></td>
        <td width="426" align="right" valign="middle" class="form_text1"></td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>
