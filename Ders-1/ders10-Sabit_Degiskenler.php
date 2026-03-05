
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>
	<meta http-equiv='Content-Language' content='tr'>
	<meta charset='utf-8'>
	<title>Php Dersleri</title>
</head>

<body>
	Sabit Değişkenler:
	<hr>
<!-- 	Sabit Değişkenler:
	Kapsama ALANINA TABİ DEĞİLDİRLER....
	Sabit girilen değerleri alan veya programın çalışması ile bazı değerlerin atandığı veri tutuculardır.Sabitlerde büyük harf kullanılması önerilir.
	1-Sabitler ve içerikleri define() fonksiyonu veya const ile oluşturulabilir.
	2-Mutlaka bir harf veya _ ile başlayabilir.
	3.Rakamlar ile başlayamaz.
	4.Değişken içerisinde boşluk türkçe karakterler ve özel karakterler bulunamaz.
	5.Değişken isimleri tanımlanırken php tarafından kullanılmakta olan isimler kullanılamaz.
	6.Büyük harf küçük harf duyarlılığı vardır. İstenirse iptal edilebilir.
	7.Değişken isimleri birden fazla kullanılamaz.
	8.Değişkenler etki alanı kurallarına tabidir.
	9.Sabitlerdeki değerler sonradan değiştirilemez veya tanımsız duruma getirilemez.
	10.Kapsama alanı kurallarına tabi değildir. Her alandan erişilebilirdir. -->



	<?php 

	$isim="Mehmet"; //Normal değişken


	define("ISIM", "Mehmet Can ");
	echo ISIM;

	echo "<br>";

	define("ISIM33", "Mehmet Can ", TRUE); //Değişkene erişirkenki büyük küçük harf duyarlılığını kaldırır.
	echo isim33;

	echo "<br>";

	const ISIM2="Denemeeeeee.....";
	echo ISIM2;

	echo "<br>";

	echo "Fonksiyon içerisinde sabit kullanımı: <br";

	function Ornek(){
		define("OKUL", "Adnan Menderes Üniversitesi"); //Define ile tanımlanırsa çalışır. fakat local alanda const ile yapılan tanımlamalar çalışmaz.
		//const OKUL2="ADU";   Local üzerinde tanımlanan çalışmaz Global alanda oluşturulursa kullanılır.

	}

	Ornek(); //Fonksiyonu çalıştırmak gereklidir.
	echo OKUL;
	echo OKUL2;




	echo "<br>";
	echo "Sabitlerin İçerisinde Değişken Kullanımı:";
	echo "<br>";

	$ozellikler= "ram - disk ";
	define("PC", "$ozellikler"); //Define içerisinde değişken kullanılabilir. Const içerisinde değişken kullanılamaz.
	echo "PC";



	echo "<br>";
	echo "Sabitlerin İçerisinde Sabit Kullanımı:";
	echo "<br>";

	define("ICERIK", "Php Eğitimi"); 
	define("VERI", ICERIK);
	
	echo VERI;



	?>





</body>
</html>