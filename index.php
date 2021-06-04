<?php 

$baglanti = mysqli_connect("localhost","root","","v-u-a-p");

if(isset($_POST['submit']))
{
	$name = $_FILES['file']['name'];
	$temp = $_FILES['file']['tmp_name'];
	
	move_uploaded_file($temp,"uploaded/".$name);
	$url = "http://localhost/uploaded/$name";
	mysqli_query($baglanti,"INSERT INTO videos VALUE('','$name','$url') ");	
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Video Yükleme</title>
</head>
<body>

<a href="videos.php">Videos</a>


<form action="index.php" method="POST" enctype="multipart/form-data">

<input type="file" name="file" />
<input type="submit" name="submit" value="Upload!" />
</form>


<?php
if(isset($_POST['submit']))
{
	echo "<br />".$name." yüklendi";
}
?>	


	



</body>
</html>