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
	<h3>$_REQUEST Örneği <br></h3><hr>
	<p>Veri POST veya GET ile gönderilebilir ikiniside REQUEST ile de alabiliriz.</p>
	<p>Önerilen gönderilen metot ile karşılamaktır. Bazı durumlarda gönderilen metot bilinmiyorsa farklı bir kaynaktan geliyorsa  o zaman request kullanılır. </p>

	<form method="GET" action="#" >
		<input type="text" name="ad">
		<input type="text" name="soyad">
		<input type="submit" name="gonder">
	</form>



	<?php 
	$gelenIsim	=$_REQUEST["ad"];
	$gelenSoyad	=$_REQUEST['soyad'];

	echo "Fomdan Gelenler <br>";
	echo "$gelenIsim $gelenSoyad ";

	?>

</body>
</html>