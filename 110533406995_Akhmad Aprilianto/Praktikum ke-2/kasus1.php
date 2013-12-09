<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transition//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Kasus 1</title>
</head>
<body>
<?php
$j = 7;
if($j >= 6 && $j <=12){
	echo "Sekarang jam :" . $j;
	echo "<h2>Selamat Pagi</h2>";
}
elseif($j >= 12 && $j <=18){
	echo "Sekarang jam :" . $j;
	echo "<h2>Selamat Siang</h2>";
}
elseif($j >= 18 && $j <=24){
	echo "Sekarang jam :" . $j;
	echo "<h2>Selamat Malam</h2>";
}
?>
</body>
</html>