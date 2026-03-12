<!DOCTYPE html>
<html>

<head>
	<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>
	<meta http-equiv='Content-Language' content='tr'>
	<meta charset='utf-8'>
	<title>Php Dersleri</title>
</head>

<body>
	Diziler:
	<hr>

	<!-- Dizi: Gİrilen değerleri alan veya programın çalışması ile bazı sıralı değerlerin atandığı veri tutuculardır.
	print_r(): Fonksiyonu ile okunabilir.
	
	Kurallar:
	1. Diziler array() ve [] ile tanımlanabilir.
	2. Dizi elemanlarına tanımlanacak olan anahtar isimleri içerisinde alfanumerik değerler (a-z A-Z 0-9) ve _ kullanılabilir.
	3. Dizi elemanlarına tanımlanacak olan anahtar isimleri içerisinde hiçbir zaman boşluk, türkçe karakterler veya özel karakterler kullanılamaz.
	4. Dizi elemanlarına anahtar isimleri tanımlarken, Php tarafından kullanılan isimler kullanılamaz.
	5. Dizi elemanlarına tanımlanacak olan anahtar isimleri büyük/küçük harf duyarlıdır.
	6. Dizi elemanlarına tanımlanacak olan anahtar isimleri aynı dizi içerisinde tekrar kullanılamaz.
	7. Dizi elemanlarına anahtar isimleri tanımlanmazsa, dizi elemanları için anahtar isimleri otomatik olarak 0'dan başlayarak oluşturulur.

	Yapısı:
	$dizi= array(Anahtar=> Eleman,Anahtar=> Eleman,Anahtar=> Eleman);
	$dizi= array(Eleman,Eleman,Eleman);
	
	$dizi= [Anahtar=> Eleman,Anahtar=> Eleman,Anahtar=> Eleman];
	$dizi= [Anahtar=> Eleman,Anahtar=> Eleman,Anahtar=> Eleman];


-->
	<?php


	$isimler = array("Mehmet", "Can", "Hanaylı");

	echo "<pre>";
	print_r($isimler);
	echo "</pre>";
	echo "Dizi içerisindeki 0. Eleman: " . $isimler[0];

	$dizi = [1, 2, 3, 4, 5, 6];

	echo "<pre>";
	print_r($dizi);
	echo "</pre>";

	/*Anahtarlı Dizi Tanımlama*/

	$bilgiler = array(
		'isim' => "Mehmet",
		'soyisim' => 'Hanaylı',
		'yas' => 30
	);

	echo "<pre>";
	print_r($bilgiler);
	echo "</pre>";


	echo $bilgiler['isim'];

	echo "<br>Foreach İle Dizinin İçeriğinin Yazdırılması: <br>";

	foreach ($bilgiler as $key => $value) {
		echo " $key $value " . "<br>";
	}

	?>


	<br><br>
	Değişken Yapısıyla Oluşturulan Diziler:
	<hr>

	<?php
	$isimler1[] = "Mehmet";
	$isimler1[] = "Hakkı";
	$isimler1[] = "Arif";

	echo "<pre>";
	print_r($isimler1);
	echo "</pre>";


	$isimler2["isim1"] = "Mehmet";
	$isimler2["isim2"] = "Hakkı";
	$isimler2["isim3"] = "Arif";

	echo "<pre>";
	print_r($isimler2);
	echo "</pre>";


	?>




	<br><br>
	Dizinin Önceden Tanımlanıp Sonradan İçerisinin Doldurulması:
	<hr>
	<?php

	$degerler = array();
	$degerler[] = "ali";
	$degerler["isim2"] = "asd";
	$degerler[] = "aasdd";
	$degerler[] = "asfds";

	echo "<pre>";
	print_r($degerler);
	echo "</pre>";

	?>

	<br><br>
	Diziye Sonradan Veri Eklenmesi:
	<hr>
	<?php

	$bilgiler = array(
		'isim' => "Mehmet",
		'soyisim' => 'Hanaylı',
		'yas' => 30
	);

	$bilgiler[] = "hakkı";

	echo "<pre>";
	print_r($bilgiler);
	echo "</pre>";

	$bilgiler2 = [
		'isim' => "Mehmet", 
		'soyisim' => 'Hanaylı', 
		'yas' => 30
		];

	$bilgiler2[] = "hakkı";

	echo "<pre>";
	print_r($bilgiler2);
	echo "</pre>";

	?>


	<br><br>
	Dizinin İçerisindeki Bir Değerin Değiştirilmesi:
	<hr>

	<?php

	$isimler = array("Ahmet", "Arif", "Hakkı", "Erkan");
	$isimler[0] = "Ahmet Bican";

	echo "<pre>";
	print_r($isimler);
	echo "</pre>";

	?>




	<br><br>
	Dizileri tek bir değişkende birleştirme :
	<hr>
	<?php
	//Anahtar değeri tekrar edenler birleştirilmez.
//$isimler=array("Mehmet", "Arif","Hakkı");
	
	$isimler = array(
		"isim1" => "Mehmet", 
		"isim2" => "Arif", 
		"isim3" => "Hakkı"
		);


	$renkler = array(
		"renk1" => "Mavi",
		"renk2" => "Yeşil", 
		"renk3" => "Kırmızı", 
		"renk4" => "Pembe"
		);

	$araclar = array(
		"arac1" => "araba", 
		"arac2" => "gemi", 
		"arac3" => "tren"
		);

	$sonuc = $isimler + $renkler + $araclar;  //Dizilerin birleştirilmesi
	
	echo "<pre>";
	print_r($sonuc);
	echo "</pre>";




	?>



</body>

</html>