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
</head>
<body>

<h2 style="text-align:center">Developer Profile Card</h2>
<div class="card" id="element1">
  <img src="images/fak.jpg" alt="Fak" style="width:100%">
  <h1>Lalfakzuala</h1>
  <p class="title">MCA 6th Semester</p>
  <p>NIELIT,AIZAWL</p>
  <div style="margin: 24px 0;">
    <a href="https://www.instagram.com/fak_tea/"><i class="fa fa-instagram"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-envelope"></i></a>  
    <a href="https://www.facebook.com/faek.trill"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button>Contact</button></p>
</div>
<div class="card" id="element2">
  <img src="images/vime.jpeg" alt="Fak" style="width:100%">
  <h1>K. Vimeno Dolie</h1>
  <p class="title">MCA 6th Semester</p>
  <p>NIELIT,AIZAWL</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-instagram"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-envelope"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button>Contact</button></p>
</div>

</body>
</html>
