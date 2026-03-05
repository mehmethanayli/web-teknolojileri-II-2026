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
	<h3>$_GET Örneği <br></h3><hr>

	

	<form method="GET" action="#" >
		<input type="text" name="ad">
		<input type="text" name="soyad">
		<input type="submit" name="gonder">
	</form>



	<?php 
	$gelenIsim		=	$_GET["ad"];
	$gelenSoyad		=	$_GET['soyad'];

	echo "Fomdan Gelenler <br>";
	echo "$gelenIsim $gelenSoyad ";

	?>

</body>
</html>