
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>
	<meta http-equiv='Content-Language' content='tr'>
	<meta charset='utf-8'>
	<title>Php Dersleri</title>
</head>

<body>
	Kontrol Yapıları :
	<hr>
	<!-- 

		??	= Null koşul ifadesi 


	-->

	<br><br>
	<p>************************************************************************</p>
	<h3> _NULL İşlemi</h3>
	<hr>

	<form action="" method="GET">
		<input type="text" placeholder="İsim Giriniz..." name="ad"><br>
		<input type="text" placeholder="Soyisim Giriniz..." name="soyad"><br>
		<input type="submit" value="Verileri Gönder">

	</form>





	<?php 

	echo $gelenAd=$_GET['ad'] ?? "Hata" ;
	echo $gelenSoyad=$_GET['soyad'] ?? "Hata";


	echo "<br><br><br>";
	?>






</body>
</html>