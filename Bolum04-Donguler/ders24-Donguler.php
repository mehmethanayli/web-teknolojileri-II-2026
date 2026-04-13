
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>
	<meta http-equiv='Content-Language' content='tr'>
	<meta charset='utf-8'>
	<title>Php Dersleri</title>
</head>

<body>
	Döngüler:
	<hr>
	<!-- 
	
	while ( 5<= 10) {

	
	}

-->

<br><br>
<p>************************************************************************</p>
<h3> While Döngüsü</h3>
<hr>
<?php 
$basla=1;

while ($basla <= 10) {
	echo " - $basla. Tur -  <br>";
	$basla ++;
}





?>




<br><br>
<p>************************************************************************</p>
<h3> Do-While Döngüsü</h3>
<hr>

<?php 

$basla=1;

do{
	echo "Tur: $basla";
	$basla ++;
}
while ($basla <= 10);

?>





<br><br>
<p>************************************************************************</p>
<h3> For Döngüsü</h3>
<hr>

<?php 

$basla=1;

while ($basla <= 10) {
	echo "While Tur: $basla <br>";
	$basla ++;
}



for ($i=1; $i <= 10; $i++) { 
	echo "For Tur: $i <br>";
}

?>

<br><br>
<p>************************************************************************</p>
<h3> Foreach Döngüsü</h3>
<hr>


<?php 

$dizi1=["mavi", "yesil", "mor", "sarı", "siyah", "beyaz", "mavi"];

foreach ($dizi1 as $key => $value) {
	echo "anahtar: $key --- değer: $value <br>";
}

foreach ($dizi1 as $value) {
	echo "değer: $value <br>";
}



?>



<br><br>
<p>************************************************************************</p>
<h3> Çok Boyutlu Foreach Döngüsü</h3>
<hr>


<?php 

$isimler=["Ali", "Ahmet", "Mert", "Mehmet", "Aliye", "Aslı", "Kerem", 
			["Hulusi", "Kerim", "Ferhat", "Selim"], 
		"Hatice"];

print_r($isimler);

echo "<br><br><br>";
if (is_array($isimler)) {

	echo "Evet bu bir dizi.";

}else{
	echo "Hayır bu bir dizi değildir.";
}



echo "<br><br><br>";
foreach ($isimler as $key => $value) {

	if (is_array($value)) {

		//echo "Burada bir dizi buldum.";	

		foreach ($value as $key => $val) {
			echo "İçerdeki Dizi:$key - $val <br>";
		}

	}
	
	else{
		echo $key . " - " . $value . "<br>";
	}

}

?>


<br><br>
<p>************************************************************************</p>
<h3> Break İfadesi</h3>
<hr>

<?php 
echo "While-Break<br>";
$baslangic=1;

while ( $baslangic<= 10) {

	echo "$baslangic";

	//Doğru alanda durdurmak gereklidir. Önerilen arttırma azaltma işleminden hemen önce kullanılır.
	if ($baslangic==5) {
		break;
	}
	$baslangic++;
}


echo "<br><br><br>Do While-Break<br>";

$sayac=0;

do{
	echo $sayac;

	if ($sayac==5) {
		break;
	}

	$sayac ++;

}while ( $sayac <= 10); 




echo "<br><br><br>For-Break<br>";

for ($i=0; $i <100 ; $i++) { 
	echo "$i";
	if ($i==5) {
		break;
	}
}


echo "<br><br><br>ForEach-Break<br>";

$isimler=["Ali", "Ahmet", "Mert", "Mehmet", "Aliye", "Aslı", "Kerem", ["Hulusi", "Kerim", "Ferhat", "Selim"], "Hatice"];

echo "<pre>";
print_r($isimler);
echo "</pre>";

foreach ($isimler as $key => $value) {

	echo $value . "<br>";

	if ($key==3) {
		break;
	}
}

?>




<br><br>
<p>************************************************************************</p>
<h3> Continue İfadesi</h3>
<hr>
<!-- Döngünün belli bir kısmının atlanarak, çalışmakta olan döngünün bir sonraki işleme devam etmesi için kullanılır. Continue sonrasındaki komutların hiçbiri çalışmaz. -->

<?php 

echo "<br><br><br>While-Continue<br>";

$sayi=0;
while ($sayi < 50) {
	$sayi++;
	
	if ($sayi>10 and $sayi< 30) {
		continue; 
	}

	echo $sayi ."<br>" ;

}

echo "<br><br><br>Do-While-Continue<br>";


$sayi=0;

do {
	$sayi++;
	
	if ($sayi>10 and $sayi< 30) {
		continue; 
	}

	echo $sayi ."<br>" ;

}while ($sayi < 50);



echo "<br><br><br>For-Continue<br>";
/*En çok for döngüsünde kullanılır.*/
for ($sayi=0; $sayi < 50 ; $sayi++) { 

	if ($sayi>10 and $sayi< 30) {
		continue; 
	}
	echo $sayi ."<br>" ;

}






echo "<br><br><br>ForEach-Continue<br>";

$isimler=["Ali", "Ahmet", "Mert", "Mehmet", "Aliye", "Aslı", "Kerem", "Hatice"];

echo "<pre>";
print_r($isimler);
echo "</pre>";


foreach ($isimler as  $value) {
	

	if (($value=="Mehmet" )OR ($value=="Aslı")) { // mehmet veya Aslıyı gördüğünde atlayacak.
		continue;
	}

	echo $value . " <br> " ;
}

?>



</body>
</html>