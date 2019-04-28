<?php
include("header.php");
include("database.php");
//include("upload.php");
?>
<?php
$cn= @mysql_connect("localhost","root","");
mysql_select_db("quiz_new",$cn);
if(isset($_POST["submit"])){
$filename = addslashes($_FILES['img']['name']);
$tmpname = addslashes(file_get_contents($_FILES['img']['tmp_name']));
$filetype = addslashes($_FILES['img']['type']);
$filesize = addslashes($_FILES['img']['size']);
$array = array('jpg','jpeg');
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if(!empty($filename)){
if(in_array($ext, $array)){
mysql_query("Insert into upload(name,image) values('$filename','$tmpname')");
echo "Uploaded";
}
else{
echo "failed";
}
}
}

//display
$res = mysql_query("SELECT * FROM upload");
while($row = mysql_fetch_array($res)){
//$displ = $row['image'];

// please place the&nbsp;
//single quotation ' instead '


echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="300" height="400">';
//echo "<br />";
}
?>

