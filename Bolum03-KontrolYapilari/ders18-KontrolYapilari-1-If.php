
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
	IF			:Eğer
	ELSE IF		:Değilse Eğer
	ELSE		:Değilse

	if (Koşul veya Koşullar Geçerliyse){
	
	}elseif (Değilse Eğer){
	
	}else{ Değilse...
	
	}
-->

<br><br>
<p>************************************************************************</p>
<h3> IF İşlemi</h3>
<hr>

<?php 
echo "Standart Kullanım <br>";

if (5>2) {
	echo "Koşul Doğru";
}else{
	echo "Koşul Yanlış";
}

echo "<br> <br> Benzer Kullanım <br>";
if (5>2):
	echo "Koşul Doğru";

else:
echo "Koşul Yanlış";

endif;



echo "<br><br>";

if (5 < 2) {
	echo "İf Koşul Doğru";

}elseif(10 > 5){

	echo "Elseİf Koşul Doğru";

}
else{
	echo "Else Koşul Yanlış";
}




echo "<br><br>";
$saat=5;
if (($saat>=0) and ($saat<=6)) {
	echo "iyi Geceler";
}else{
	echo "Günaydın";
}




echo "<br><br>";

$saat=3;
if ($saat>=0 or $saat<=6) {
	if($saat==1){
		echo "İyi Geceler. Saat {$saat}";
	}elseif ($saat==1){
		echo "İyi Geceler. Saat {$saat}";
	}elseif($saat==2){
		echo "İyi Geceler. Saat {$saat}";
	}elseif($saat==3){
		echo "İyi Geceler. Saat {$saat}";
	}elseif($saat==4){
		echo "İyi Geceler. Saat {$saat}";
	}elseif($saat==5){
		echo "İyi Geceler. Saat {$saat}";
	}elseif($saat==6){
		echo "İyi Geceler. Saat {$saat}";
	}
	
}elseif ($saat>6 or $saat<=9) {
	echo "Günaydın";
}elseif ($saat>9 or $saat<=17) {
	echo "İyi Günler";
}elseif ($saat>17 or $saat<=23) {
	echo "İyi Geceler";
}else{
	echo "İyi Akşamlar";
}


?>












</body>
</html>