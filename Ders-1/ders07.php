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
	<h3>$_FILES Örneği <br></h3><hr>
	

	<form method="POST" action="ders07-form.php"  enctype="multipart/form-data"> <!-- Dosya Get ile gönderilemez -->
		Seçiniz: <input type="file" name="Dosya">

		<input type="submit" name="gonder">

	</form>


</body>
</html>