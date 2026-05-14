<!DOCTYPE html>
<html>
<head>
	<title>Form Uygulaması</title>
</head>
<body>
	<p>Bu form uygulama örneği olması açısından tasarlanmıştır.</p>

	<form action="formUygulamaKod.php"  method="POST" enctype="multipart/form-data">

		İsim Giriniz: <input type="text" name="isim"><br>
		Soyisim Giriniz: <input type="text" name="soyad"><br>
		Profil Fotoğrafı: <input type="file" name="foto"><br>

		<input type="submit" name="SaveUser" value="Kullanıcı Ekle">


	</form>

</body>
</html>