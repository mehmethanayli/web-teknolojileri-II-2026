<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<meta http-equiv="Content-Language" content="tr">
	<meta charset="utf-8">
	<title>Php Dersleri</title>
</head>

<body>
	Global Değişkenler:
	<hr>$_Global Örneği <br>
	

	<?php 

	function Deneme(){
		//$isim = "mehmet can hanaylı";
		$GLOBALS["isim"]="Mehmet Can Hanaylı";
	}

	Deneme();
	echo $isim;

	function merhaba(){
		echo "Merhaba";
	}
	merhaba();
	
	?>



</body>
</html>