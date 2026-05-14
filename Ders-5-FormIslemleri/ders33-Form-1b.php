<!DOCTYPE html>
<html>

<head>
	<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>
	<meta http-equiv='Content-Language' content='tr'>
	<meta charset='utf-8'>
	<title>Php Dersleri</title>
</head>

<body>

	<?php 

	if (isset($_POST['form1'])) {
		$adsoyad	=$_POST["adsoyad"];
		$email		=$_POST["email"];
		$tel 		=$_POST["tel"];
		$cinsiyet	=$_POST['cinsiyet'];
		$yas		=$_POST["yas"];


		echo $adsoyad ."<br>";
		echo $email ."<br>";
		echo $tel ."<br>";
		echo $cinsiyet ."<br>";
		echo $yas ."<br>";

	}

	if (isset($_POST['form2'])) {
		$adsoyad	=$_POST["adsoyad"];
		$hobiler 	=$_POST["hobiler"];

		echo "Hobileriniz: <br>";

		foreach ($hobiler as  $hobi) {
			echo $hobi ."<br>";
		}
	}



	if (isset($_POST['form3'])) {

		$gelenDosya	= $_FILES["dosya"];  //Dizi olarak gelir

		echo "<pre>";
		print_r($gelenDosya);
		echo "</pre>";

		/*Dosyanın Özelliklerini Alalım*/

		$dosyaAdi 	= $gelenDosya["name"];  //= $_FILES["dosya"]["name"]

		$dosyaTuru	= $gelenDosya["type"];

		$dosyaTemp	= $gelenDosya["tmp_name"];

		$dosyaErr	= $gelenDosya["error"];

		$dosyaSize	= $gelenDosya["size"];

		$yol= "ders33-Form-Resimler/";

		$dosyaYoluVeAdi= $yol.$dosyaAdi;

		



		if (move_uploaded_file($dosyaTemp, $dosyaYoluVeAdi)) {
			echo "Dosya Yükleme Başarılı...";
			echo "Dosyanın Adı: ". $dosyaAdi . "<br>";
			echo "Dosyanın Türü: ". $dosyaTuru . "<br>";
			echo "Dosyanın Geçici Dizini ve Adı : ". $dosyaTemp . "<br>";
			echo "<img width='250px' src='{$dosyaYoluVeAdi}' > </img>";

		}else{
			echo "Dosya Yükleme Sırasında Hata Oluştu...";
		}





	}




	if (isset($_POST['form4'])) {

		$gelenDosyalar	= $_FILES["dosyalar"];  //Dizi olarak gelir

		echo "<pre>";
		print_r($gelenDosyalar);
		echo "</pre>";


		/*Dosyanın Özelliklerini Alalım*/
		foreach ($gelenDosyalar["tmp_name"] as $key => $tmp_name) {
			//echo "$key = $tmp_name .<br>";
			$anahtar 				= $key;
			$dosyaAdi 	 			= $gelenDosyalar["name"][$key];
			$dosyaTuru 				= $gelenDosyalar["type"][$key];
			$dosyaGeciciDiziniVeAdi	= $gelenDosyalar["tmp_name"][$key];
			$dosyaHataDegeri		= $gelenDosyalar["error"][$key];
			$dosyaBoyutu			= $gelenDosyalar["size"][$key];

			$dosyalarinYuklemeDiziniveAdi = "ders33-Form-Resimler/$dosyaAdi";	



			echo "Anahtar: $anahtar <br>";
			echo "Dosya Adı: $dosyaAdi <br>";
			echo "Dosya Türü: $dosyaTuru <br>";
			echo "Dosyanın Geçici Dizini ve Adı: $dosyaGeciciDiziniVeAdi <br>";
			echo "Hata Durumu: $dosyaHataDegeri <br>";
			echo "Dosya Boyutu: $dosyaBoyutu <br><br><br>";





			if (move_uploaded_file($dosyaGeciciDiziniVeAdi, $dosyalarinYuklemeDiziniveAdi)) {
				echo "Dosya yükleme işlemi başarılı...";

				echo "<img width='250px' src='{$dosyalarinYuklemeDiziniveAdi}' > </img> <br><br>";

			}else{
				echo "Dosya yükleme işlemi gerçekleşmedi.....";
			}
		}


	}



	?>



</body>
</html>