<style type="text/css">
<!--
body {
	margin-left: 10px;
	margin-top: 0px;
  margin-right: 10px;
  margin-bottom: 10px
}
-->
</style>
<table border="1" width="100%" cellspacing="2" cellpadding="5" background="image/22.jpg">
  <tr>
    <td width="200%" valign="top">
<!--You can modify the text, color, size, number of loops and more on the flash header by editing the text file (fence.txt) included in the zip file.-->

</object></div></td>
    <td width="10%">
     <img border="1" src="image/Qb2.jpg" width="203" height="68" align="right"></td>
  </tr>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#000000" background="img/topleft.jpg">
  <tr>
    <td width="100%" align="right"><img border="1" src="image/bg.jpg" width="100" height="10"></td>
  </tr>
  </Table>
  <Table width="100%">
  <tr>
  <td>
  <?php @$_SESSION['login']; 
  error_reporting(1);
  ?>
  </td>
    <td>
	<?php
	if(isset($_SESSION['login']))
	{
	 echo "<div align=\"right\"><strong><a href=\"index.php\"> Home </a>|<a href=\"signout.php\">Signout</a></strong></div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	</td>
	
  </tr>
  
</table>
