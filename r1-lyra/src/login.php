<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>
<meta name="robots" content="noindex,nofollow">

<title>SquirrelMail - Pøihlásit</title><script language="JavaScript" type="text/javascript">
<!--
  function squirrelmail_loginpage_onload() {
    document.forms[0].js_autodetect_results.value = '1';
    var textElements = 0;
    for (i = 0; i < document.forms[0].elements.length; i++) {
      if (document.forms[0].elements[i].type == "text" || document.forms[0].elements[i].type == "password") {
        textElements++;
        if (textElements == 1) {
          document.forms[0].elements[i].focus();
          break;
        }
      }
    }
  }
// -->
</script>

<!--[if IE 6]>
<style type="text/css">
/* avoid stupid IE6 bug with frames and scrollbars */
body {
    width: expression(document.documentElement.clientWidth - 30);
}
</style>
<![endif]-->

</head>

<body text="#000000" bgcolor="#ffffff" link="#0000cc" vlink="#0000cc" alink="#0000cc" onLoad="squirrelmail_loginpage_onload();">
<form action="redirect.php" method="post">
<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0" width="100%"><tr><td align="center"><center><img src="../images/sm_logo.png" alt="SquirrelMail Logo" width="308" height="111" /><br />
<small>SquirrelMail verze 1.4.9a<br />
  Vytvoøeno týmem SquirrelMail<br /></small>
<table bgcolor="#ffffff" border="0" width="350"><tr><td bgcolor="#dcdcdc" align="center"><b>SquirrelMail Pøihlásit</b>
</td>
</tr>
<tr><td bgcolor="#ffffff" align="left">
<table bgcolor="#ffffff" align="center" border="0" width="100%"><tr><td align="right" width="30%">Jméno:</td>
<td align="left" width="*"><input type="text" name="login_username" value="" />
</td>
</tr>

<tr><td align="right" width="30%">Heslo:</td>
<td align="left" width="*"><input type="password" name="secretkey" />
<input type="hidden" name="js_autodetect_results" value="0" />
<input type="hidden" name="just_logged_in" value="1" />
</td>
</tr>
</table>
</td>
</tr>
<tr><td align="left"><center><input type="submit" value="Pøihlásit" />
</center></td>
</tr>
</table>
</center></td>
</tr>
</table>
</form>
</body></html>
