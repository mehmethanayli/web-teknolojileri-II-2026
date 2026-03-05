<!DOCTYPE html>
<html>

<head>
	<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>
	<meta http-equiv='Content-Language' content='tr'>
	<meta charset='utf-8'>
	<title>Php Dersleri</title>
</head>

<body>
	Global Değişkenler:
	<h3>$_COOKIE Örneği <br></h3><hr>
	<?php 

	setcookie("Deneme","mehmet"); //Tarayıcı oturumu kapanana kadar saklanır.

	$cerez= $_COOKIE['Deneme'];
	echo "$cerez";

	?>

</body>
</html>