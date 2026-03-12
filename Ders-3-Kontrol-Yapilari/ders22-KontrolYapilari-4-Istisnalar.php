
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

		try			= Hata oluşturabilecek kodlar için kullanılır. 

		catch		= Hata oluştuğunda çalıştırılacak kodlar için kullanılır.

		finally		= Hata oluşsada oluşmasada çalıştırılacak kodlar için kullanılır. 

		throw		= Hata oluşturabilecek kodlar için istisnai durumlarda kullanılır.

		Exception	= Tüm istisnalar için önceden tanımlı olan temel sınıfı çağırmak için kullanılırlar.

		getMessage	= Tüm istirnalar için oluşturulacak olan iletilerin atandığı veri tutuculardır.





	try {
		Kod Blokları
		throw new Exception("Hata iletisi", 1);
		
		
	} catch (Exception İleti Ataması) {
		
	}finally{

	}

-->

<br><br>
<p>************************************************************************</p>
<h3> İstisna İşlemi</h3>
<hr>
<?php 

$deger1=100;
$deger2=0;

try {
	if ($deger2==0) {
		throw new Exception("Sıfıra bölme işlemi gerçekleştirilemez.", 1);
		
	}else{

		echo "Bölme işleminizin Sonucu: " .$deger1/$deger2;

	}
	
} catch (Exception $sonuc) {
	echo $sonuc->getMessage();
}

?>

<br><br>
<p>************************************************************************</p>
<h3>Örnek</h3>
<hr>

<?php 

$isim="Ali";

try {
	if ($isim=="Mehmet") {
		echo "Merhaba $isim, nasılsın.";
		
	}elseif($isim=="Ali"){
		throw new Exception("Sen Ali'sin, Mehmet değilsin...", 1);
	}
	else{
		throw new Exception("Sen kimsin...", 1);
	}

	echo "Hata oluşursa burası çalışmaz. Throw tetiklendiğinde aşağısı kesinlikle çalışmaz...";
	
} catch (Exception $sonuc) {

	echo $sonuc->getMessage();

}finally{

	echo "<br>Burası Finally Hep Çalışır...";
	
}



?>


</body>
</html>