<?php 
session_start();
?>
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
	<h3>$_SESSION  <br></h3><hr>
	<?php 
	$_SESSION["Extra"] = "Mehmet Can Hanaylı";
	$_SESSION["E-mail"] = "mehmetcanhanayli@gmail.com";


	echo "Extra Adıyla Tanımlı Değeriniz: " . $_SESSION["Extra"] . "<br>";
	echo "E-mail Adıyla Tanımlı Değeriniz: " . $_SESSION["E-mail"]. "<br>";

	?>

</body>
</html>