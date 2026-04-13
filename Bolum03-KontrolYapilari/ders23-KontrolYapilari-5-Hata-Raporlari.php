
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>
	<meta http-equiv='Content-Language' content='tr'>
	<meta charset='utf-8'>
	<title>Php Dersleri</title>
</head>

<body>
	Hata Raporları Yapıları :
	<hr>
	<!-- 
	error_reporting: php.ini dosyasında bulunur. Hata raporlama işlemlerindeki tüm hata seviyelerinin ayarlama işlemleri için kullanılır. Hata Seviyeleri.
		
		E_ALL 		: Tüm Seviye Hataları- Diğer Yazım Şekli -1
		E_ERROR		: Önemli çalışma zamanı hataları, Fatal Error
		E_WARNING 	: Önemli olmayan çalışma zamanı hataları.
		E_PARSE     : Derleme zamanı ayrıştırma hataları.
		E_NOTICE	: Çalışma zamanı bildirimleri.
		0			: Tüm seviye hatalarının kapatılması.

	-->

	<br><br>
	<p>************************************************************************</p>
	<h3> Hata Yönetimi İşlemi</h3>
	<hr>
	<?php 
	// error_reporting(0) // logların kapatılması.

	//deneme(); //Olmayan fonksiyonun çalıştırılması Fatal Error.




	// error_reporting(E_ALL ^ E_WARNING) // Tüm Hataları Göster Warningler Hariç

	//trim(); //Warning



	// $ Derleme = "Merhbalar" ; //Yanlış Değişken tanımlama, Parse Error. Kritik hatadır devamı çalışmaz.

	// echo $Derleme2  ; //Olmayan Değişkeni yazdırma, Notice Error. Devamı çalışır.

	//Ölümcül ve kritik hataları @ işareti etkilemez.

	//@deneme();

	//echo @$Derleme2;

	// @ işareti notice ve warning'in işlenmesini engeller, fatal error ve parse error da etki etmez.
	?>


</body>
</html>