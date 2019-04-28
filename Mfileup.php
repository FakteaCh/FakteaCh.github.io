<?php
session_start();
?>
<?php
include("header.php");
include("database.php");
//include("upload.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  max-height: 1000px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
#element1 {float:left;}
#element2 {float:right;}
.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
	<title></title>
</head>
<body>
<div style="margin: 50px 0;">
<form class="card" style="color: red" style="" action="Mupload.php " method="post" enctype="multipart/form-data">

<input class="title" type="file" name="file" size="800" />

<br />

<input class="title" type="submit" value="Upload" />

</form>
</div>
</body>
</html>