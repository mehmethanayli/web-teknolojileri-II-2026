
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

		?:	= Ternary Operatörü 3'lü Operatör.

		Yapısı:
		(Koşul/Koşullar) ? Geçerli durum : Geçersiz durum; 


	-->

	<br><br>
	<p>************************************************************************</p>
	<h3> Ternary İşlemi</h3>
	<hr>

	<?php 
	echo "<br>";

	$deger="Mehmet";

	$sonuc = ($deger=="Mehmet")? "Doğru Bildiniz": "Malesef Yanlış";
	echo $sonuc;

	
	echo "<br><br><br>";

	$deger1=10;
	$deger2=20;
	$deger3=30;

	$dogru 	= "Tüm Değerler Eşleşiyor" ;
	$yanlis = "Değerler Eşleşmiyor....";

	$sonuc = (($deger1==10) and ($deger2==20) and ($deger3==30)) ? $dogru : $yanlis; 

	echo "$sonuc";
	?>












</body>
</html>