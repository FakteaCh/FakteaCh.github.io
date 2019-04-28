<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<style>
div.gallery {
    border: 8px solid #ccc;

}

div.gallery:hover {
    border: 1px solid #777;

}

div.gallery img {
    width: 100%;
    height: 100%;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}
}

.pdf {
    vertical-align: center;
    padding: 0 6px;
    float: middle;
    width: 24.99999%;
}

@media only screen and (max-width: 700px) {
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px) {
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="sub.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#AAB7B8">

<?php
include("header.php");
include("database.php");
?>
<h1 align="center" style="color:#154360" ><font face = "Comic sans MS" size = "7">Image Gallery</font></h1>
<h4 align="center" style="color:#0000FF">Click on the Image to view</h4>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/1.jpg">
      <img src="images/1.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/2.jpg">
      <img src="images/2.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/3.jpg">
      <img src="images/3.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/4.jpg">
      <img src="images/4.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/a.jpg">
      <img src="images/a.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/b.jpg">
      <img src="images/b.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/c.jpg">
      <img src="images/c.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/d.jpg">
      <img src="images/d.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>
<div class="clearfix"></div>
<div class="pdf">
<table width="700" height="100" align="center" border="1" class="pdf">
    <tr>
        <td bgcolor="#F4AF60"><a href="pdf/New Doc 2018-10-13 16.55.22.pdf"><h2 align="center">Download PDF HERE</h2></a></td>
        
    </tr>
</table>
<div style="padding:6px;">

  <p> <font face ="Comic sans MS" size =" 5"  style="color:#154360"><h3 align="center">Hope you find what you are looking for.</h3></font></p>
  <p><font face ="WildWest" size =" 5"  style="color:#CCFF00"><h2><marquee behaviour="scroll" direction="left">Thank You!!</marquee></h2></font></p>
</div>
<div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright &copy; <a href="#">Question Banks</a>. All Rights Reserved</p>
      <p class="rf">Design by <a target="_blank" href="">Faktea Ch</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</body>
</html>