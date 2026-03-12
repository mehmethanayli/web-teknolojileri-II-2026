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
	<h3>$_POST Örneği <br></h3><hr>

	

	<form method="POST" action="#" >
		<input type="text" name="ad">
		<input type="text" name="soyad">
		<input type="submit" name="gonder">
	</form>



	<?php 
	$gelenIsim	=@$_POST["ad"];
	$gelenSoyad	=@$_POST['soyad'];

	echo "Fomdan Gelenler <br>";
	echo "$gelenIsim $gelenSoyad ";

	?>

</body>
</html>