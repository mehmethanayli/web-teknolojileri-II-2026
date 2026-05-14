<?php 


if (isset($_POST["SaveUser"])) {
	$ad			=	$_POST["isim"];
	$soyad 		= 	$_POST["soyad"];
	$resim		=	$_FILES["foto"];

	echo "<pre>";
	print_r($resim);
	echo "</pre>";

	$isim		=	$resim["name"];
	$tmp_name	=	$resim["tmp_name"];

	$saveFullPath	=	"formUygulamaResim/".$isim;

	$save=move_uploaded_file($tmp_name, $saveFullPath);


	
	if ($save==1) {
		echo "Dosya Kaydedildi.";
	}else{
		echo "Dosya Kaydedilirken Bir  Hata Oluştu....";
	}

}


?>