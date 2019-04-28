<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Subject List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="sub.css" rel="stylesheet" type="text/css">
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
    background-image: url("subj5.jpg");

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
?>
<h2 class='style8' align=center>Subject List</h2>";
		<table width="28%"  border="0" align="center">
    <div class="wrap">
  <tr>
    <td width="10%" height="70" valign="bottom"><img src="image/book.JPG" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="df.php" class="style4">Digital Computer Fundamental </a></td>
    
  </tr>
  <tr>
    <td height="70" valign="bottom"><img src="image/books-pencil-icon-clipart-117.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="beng.php" class="style4">Pesonality and Soft Skills Development </a></td>
  </tr><tr>
    <td height="70" valign="bottom"><img src="image/book.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="biit.php" class="style4">Introduction to Information Technology </a></td>
  </tr><tr>
    <td height="70" valign="bottom"><img src="image/books-pencil-icon-clipart-117.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="iitprac.php" class="style4">IIT Practical </a></td>
  </tr><tr>
    <td height="70" valign="bottom"><img src="image/book.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="bpc.php" class="style4">Programming Language Through C</a></td>
  </tr>
  <tr>
    <td height="70" valign="bottom"><img src="image/sm.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="subject2.php" class="style4">See More</a></td>
  </tr>
</table>
</div>
<div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright &copy; <a href="#">Question Banks</a>. All Rights Reserved</p>
      <p class="rf">Design by <a target="_blank" href="devloper.php">Faktea Ch & Vimeno Dolie</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>

</body>
</html>