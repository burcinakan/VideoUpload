<?php 

$baglanti=mysqli_connect("localhost","root","","v-u-a-p");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Video İzle</title>
</head>
<body>




<?php
$baglanti=mysqli_connect("localhost","root","","v-u-a-p");

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$query = mysqli_query($baglanti,"SELECT * FROM videos WHERE id='$id'");
	while($row=mysqli_fetch_assoc($query))
	{
		$name = $row['name'];
		$url = $row['url'];
	}
	echo "You are watching ".$name."<br/>";
	echo "<embed src='$url' width='560' height='315'></embed>";
	
}
else
{
	echo "Hata";
}



?>	



</body>
</html>