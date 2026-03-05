<?php 	
namespace Projeler;
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
	Sihirli Sabitler:
	<hr>
	<ol>
		<li>__LINE__</li> <!-- Satır numarası Döndürür. -->
		<li>__DIR__</li><!-- Dosyanın bulunduğu dizini verir. (dosya ismini vermez) -->
		<li>__FILE__</li><!-- Dosya adını da belirterek dosyanın bulunduğu adresi verir. (tam olarak verir.)-->
		<li>__FUNCTION__</li> <!-- İlgili fonksiyonun adını verir. -->
		<li>__CLASS__</li> <!-- Sınıfların ismini yakalamak için kullanılır. -->
		<li>__METHOD__</li> <!-- Sınıf İçerisindeki Metodun/Fonksiyonun Adını Verir -->
		<li>__TRAIT__</li> <!-- Kalıtım ile gelen özellikleri alır. -->
		<li>__NAMESPACE__</li> <!-- İsim uzayları üstünde bir kod bulunamaz sayfanın en üstünde bulunmak zorundadır.-->
	</ol>

	<?php

	echo "Satır No: " . __LINE__;

	echo "<hr><br>";

	echo "Dir Name: " . __DIR__;

	echo "<hr><br>";

	echo "File Name: " . __FILE__;

	echo "<hr><br>";

	function Deger()
	{
		$deneme = __FUNCTION__;
		return $deneme;
	}

	echo "Function: " . Deger();

	echo "<hr><br>";

	class Sinif
	{
		function Deneme()
		{
			echo __CLASS__;
		}
	}

	$islem = new Sinif;
	$islem->Deneme();

	echo "<hr><br>";


	class Egitim
	{

		function ornek1()
		{
			echo __METHOD__;
		}

		function ornek2()
		{
			echo __METHOD__;
		}
	}

	$Egitim = new Egitim;
	$Egitim->ornek1();
	echo "<br>";
	$Egitim->ornek2();


	echo "<hr><br>";

	trait Ozellik1{
		function YazBir(){
			echo __TRAIT__;
		}
	}


	trait Ozellik2{
		function YazIki(){
			echo __TRAIT__;
		}
	}


	class Egitim2{
		use Ozellik1;
		use Ozellik2;
	}

	$islem=new Egitim2;
	$islem->YazBir();
	echo "<br>";
	$islem->YazIki();


	echo "<hr><br>";

	echo "İsim Uzayı: " . __NAMESPACE__;

	?>


</body>

</html>