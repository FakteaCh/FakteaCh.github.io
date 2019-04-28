<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Question Banks</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<style>
body, html {
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image: url("12.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<div class="bg">
<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from mst_admin where loginid='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{
echo "<h1 class='style8' align=center>Question Banks</h1>";
		echo '<table width="28%"  border="0" align="center" cellspacing="2" cellpadding="5">
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="image/up.png" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="fileup.php" class="style4"><h3>Upload Question for BCA.</h3> </a></td>
  </tr>
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="image/up.png" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="Mfileup.php" class="style4"><h3>Upload Question for MCA.</h3> </a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="image/so.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="signout.php" class="style4">Sign Out </a></td>
  </tr>
</table>';
   
		exit;
		

}


?>

<table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td width="70%" height="25" >&nbsp;</td>
    <td width="1%" rowspan="2" bgcolor=""><span class="style6"></span></td>
    <td width="29%" bgcolor=""><div align="center" class="h2"><h1>Admin Login</h1> </div></td>
  </tr>
  <tr>
    <td height="296" valign="top"><div align="center">
        <h1 class="style8"></h1>
      <span class="style5"><span class="style7"></span>        </span>
        <param name="movie" value="english theams two brothers.dat">
        <param name="quality" value="high">
        <param name="movie" value="Drag to a file to choose it.">
        <param name="quality" value="high">
        <param name="BGCOLOR" value="#E6E6FA">
<p align="left" class="style5">&nbsp;</p>
     
    </div></td>
    <td valign="top"><form name="form1" method="post" action="">
      <table width="200" border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td bgcolor="white"><span class="style2">User ID</span></td>
          <td><input name="loginid" type="text" id="loginid2"></td>
        </tr>
        <tr>
          <td bgcolor="white"><span class="style2">Password</span></td>
          <td><input name="pass" type="password" id="pass2"></td>
        </tr>
        <tr>
          <td colspan="2"><span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span></td>
          </tr>
        <tr>
          <td colspan=2 align=center class="errors">
		  <input name="submit" type="submit" id="submit" value="Login">		  </td>
        </tr>
        
          <tr>
          <td colspan="2" bgcolor="white"><div align="center"><span class="style4">Here <a href="">Admin Login</a></span></div></td>
          </tr>
      </table>
      <div align="center">
        <p class="style5">          </p>
        </div>

    </form></td>
  </tr>

</table>
</div>
<div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright &copy; <a href="#">Question Banks</a>. All Rights Reserved</p>
      <p class="rf">Design by <a target="_blank" href="">Faktea Ch & Vimeno Dolie</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</body>
</html>
