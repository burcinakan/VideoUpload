<?php 

$baglanti=mysqli_connect("localhost","root","","v-u-a-p");

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Videolar</title>
</head>
<body>




<?php

$baglanti= mysqli_connect("localhost","root","","v-u-a-p");
$query = mysqli_query($baglanti,"SELECT * FROM videos");
while($row = mysqli_fetch_assoc($query))
{
	$id = $row['id'];
	$name = $row['name'];
	
	echo"<a href='watch.php?id=$id'>$name</a><br\>";
	
}
?>



</body>
</html>