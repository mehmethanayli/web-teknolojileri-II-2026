<!DOCTYPE html>
<html>

<head>
	<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>
	<meta http-equiv='Content-Language' content='tr'>
	<meta charset='utf-8'>
	<title>Php Dersleri</title>
</head>

<body>

	<?php 
	$gelenDosya	=$_FILES["Dosya"];

	echo "<pre>";
	print_r($gelenDosya);
	echo "</pre>";
	


	echo "Gelen Dosyanın Adı: " . $gelenDosya["name"]."<br/>";
	echo "Gelen Dosyanın MıME Türü: " . $gelenDosya["type"]."<br/>";
	echo "Gelen Dosyanın Temp Dizini: " . $gelenDosya["tmp_name"]."<br/>";
	echo "Gelen Dosyanın Boyutu: " . $gelenDosya["size"]."<br/>";
	echo "Gelen Dosyanın Hata Kodu: " . $gelenDosya["error"]."<br/>";

	?>

</body>
</html>