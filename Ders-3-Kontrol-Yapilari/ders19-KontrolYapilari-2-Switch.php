
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
	switch 	: Koşul başlat.
	chase 	: Koşul Kontrol et.
	break	: Koşul kontrolünü sonlandır.
	default	: Koşul olumsuzlukları sonucu.

Kullanım-1
switch (variable) {
	case 'value':
		# code...
		break;
	
	default:
		# code...
		break;
}



Kullanım-2
switch (variable):
	case 'value':
		# code...
		break;
	
	default:
		# code...
		break;
endswitch;


-->

<br><br>
<p>************************************************************************</p>
<h3> Switch Case İşlemi</h3>
<hr>

<?php 


echo "<br>";

$deger=10;

switch ($deger) {
	case ($deger<10):
	echo "Değer 10'dan küçük";
	break;
	
	case ($deger<20):
	echo "Değer 20'den küçük";
	break;
	
	case ($deger<30):
	echo "Değer 30'dan küçük";
	break;
	
	default:
	echo "Yapacak Birşey Yokk....";
	break;
}


echo "<br><br>";

$ay="Ocak";

switch ($ay) {
	case $ay=="Ocak":
	echo "$ay 1. Aydır.";
	break;
	
	case $ay=="Şubat":
	echo "$ay 2. Aydır.";
	break;

	case $ay=="Mart":
	echo "$ay 3. Aydır.";
	break;

	case $ay=="Nisan":
	echo "$ay 4. Aydır.";
	break;

	case $ay=="Mayıs":
	echo "$ay 5. Aydır.";
	break;


	default:
	echo "Bu ayların dışında....";
	break;
}



echo "<br<br>>Saat Örneği:<br><br> ";
$saat=3;
switch ($saat) {
	case ($saat>=0) and ($saat<=6):
		switch ($saat) {
			case ($saat==1):
			echo "Saat Şuanda: $saat";
			break;

			case ($saat==1):
			echo "Saat Şuanda: $saat";
			break;

			case ($saat==2):
			echo "Saat Şuanda: $saat";
			break;

			case ($saat==3):
			echo "Saat Şuanda: $saat";
			break;

			case ($saat==4):
			echo "Saat Şuanda: $saat";
			break;

			case ($saat==5):
			echo "Saat Şuanda: $saat";
			break;

			case ($saat==6):
			echo "Saat Şuanda: $saat";
			break;

			default:
			echo "Yanlış Değer Girildi....";
			break;
		}
	break;


	case ($saat>6) and ($saat<=12):

	break;


	case ($saat>12) and ($saat<=17):


	break;
	
	case ($saat>17) and ($saat<23):

	break;

	default:
		echo "Lütfen saat giriniz";
	break;
}






//Switch case ile mesai saatlerine göre mesaj veren kod bloğunu switch ile gerçekleştiriniz.


?>












</body>
</html>