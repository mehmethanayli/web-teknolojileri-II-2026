<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<meta http-equiv="Content-Language" content="tr">
	<meta charset="utf-8">
	<title>Php Dersleri</title>
</head>
<body>
<!-- 
	ceil		: Herhangi bir ondalıklı sayıyı yukarıya yuvarlayarak yuvarlama sonucunu geri döndürür.
	floor		: Herhangi bir ondalıklı sayıyı aşağı yuvarlayarak yuvarlama sonucunu geri döndürür.
	round		: Herhangi bir ondalıklı sayıyı en yakına yuvarlayarak yuvarlama sonucunu geri döndürür.

-->

<br><br>
<p>************************************************************************</p>
<h3>ceil-Floor-round</h3>
<hr>

<?php 
echo "ceil İşlemi:<br>";
$sayi=9.1;
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . ceil($sayi);

echo "<br><br>";
echo "floor İşlemi:<br>";
$sayi=9.9;
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . floor($sayi);


echo "<br><br>";
echo "round İşlemi:<br>";
$sayi=9.9;
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . round($sayi);

echo "<br><br>";
echo "round İşlemi:<br>";
$sayi=9.3;
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . round($sayi);


echo "<br><br>";
echo "round İşlemi:<br>";
$sayi=9.3556;
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . round($sayi,2);//İlk iki haneyi sabit tut 3. haneye göre aşağı yada yukarı yuvarla.


echo "<br><br>";
echo "round İşlemi:<br>";
$sayi=9.3536;
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . round($sayi, 2); 


echo "<br><br>";
echo "round İşlemi:<br>";
$sayi=8549;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . round($sayi, -2); //Son 2 haneyi 0 yapar,  sondan 3. haneyi 2. haneye göre aşağı yada yukarı yuvarlar.  

?>

<br><br>
<p>************************************************************************</p>
<h3>number_format</h3>
<hr>
<!-- number format: Herhangi bir sayıyı belirtilecek olan ayraçlar doğrultusunda biçimlendirerek biçimlendirdiği değeri döndürür. -->

<?php 

echo "number_format İşlemi:<br>";
$sayi=8549.5589;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . number_format($sayi); //Round gibi aşağı yukarı yuvarlama yapar.


echo "<br><br>";
echo "number_format İşlemi:<br>";
$sayi=8549.3589;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . number_format($sayi); //Round gibi aşağı yukarı yuvarlama yapar.

echo "<br><br>";
echo "number_format İşlemi:<br>";
$sayi=8549.3589;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . number_format($sayi,2); //Round gibi aşağı yukarı yuvarlama yapar.


echo "<br><br>";
echo "number_format İşlemi:<br>";
$sayi=8541239.3589;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . number_format($sayi,2,",","."); //3. Parametre Kuruş Ayracı ----- 4. parametre bindelik ayracı

echo "<br><br>";
echo "number_format İşlemi:<br>";
$sayi=8541239.3589;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . number_format($sayi,2," TL ","."); //3. Parametre Kuruş Ayracı ----- 4. parametre bindelik ayracı

echo "<br><br>";
echo "number_format İşlemi:<br>";
$sayi=8541239.3589;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . number_format($sayi,0," TL ","."); //2. paremetre 0 olursa kuruş ayracını göstermez.

 ?>

<br><br>
<p>************************************************************************</p>
<h3>min() - max()</h3>
<hr>

<?php 

echo "min() İşlemi:<br>";
$sayi=[1,2,5,99,87,45,23,0,2,6];  

echo "Sonuc: " . min($sayi); 


echo "<br><br>";
echo "max() İşlemi:<br>";
$sayi=[1,2,5,99,87,45,23,0,2,6];  

echo "Sonuc: " . max($sayi); 
 ?>



<br><br>
<p>************************************************************************</p>
<h3>lcg_value()</h3>
<hr>
<!-- 0-1 arasında rasgele sayı üreterek geri döndürür. -->


<?php 

echo "lcg_value() İşlemi:<br>";
$sayi=lcg_value();  

echo "Sonuc: " . $sayi; 



 ?>


<br><br>
<p>************************************************************************</p>
<h3>rand() - getrandmax()</h3>
<hr>
<!-- 
	rand()			: rasgele bir tam sayı üreterek geri döndürür.
	getrandmax() 	: rand() metodu kullanılarak üretilebilecek en büyük sayının değerini bularak değeri döndürür.
 -->
<?php 

echo "rand() İşlemi:<br>";
$sayi=rand();  
echo "Sonuc: " . $sayi; 



echo "<br><br>";
echo "rand() İşlemi:<br>";
$sayi=rand(1500,25000);  
echo "Sonuc(1500,25000): " . $sayi; 



echo "<br><br>";
echo "getrandmax() İşlemi:<br>";
$sayi=getrandmax();  
echo "Sonuc: " . $sayi; 


 ?>





<br><br>
<p>************************************************************************</p>
<h3>mt_rand() - mt_getrandmax()</h3>
<hr>
<!-- 
	mt_rand()			: Mersenne Twister algoritması kullanarak rasgele bir tam sayı üreterek geri döndürür.
	mt_getrandmax() 	: mt_rand() metodu kullanılarak üretilebilecek en büyük sayının değerini bularak değeri döndürür.

 -->

<?php 
echo "mt_rand() İşlemi:<br>";
$sayi=mt_rand();  
echo "Sonuc: " . $sayi; 


echo "<br><br>";
echo "mt_rand() İşlemi:<br>";
$sayi=mt_rand(1000,12564);  
echo "Sonuc(1000,12564): " . $sayi; 


echo "<br><br>";
echo "mt_getrandmax() İşlemi:<br>";
$sayi=mt_getrandmax();  
echo "Sonuc: " . $sayi; 


 ?>


<br><br>
<p>************************************************************************</p>
<h3>abs() </h3>
<hr>
<!-- 
	abs()			: Herhangi bir sayının mutlak değerini geri döndürür. Pozitif sayıların tamamı mutlaktır. Negatif sayıların mutlak karşılığı pozitif tam sayısıdır.

 -->

<?php 
echo "abs İşlemi:<br>";
$sayi=-8549;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . abs($sayi);   

 ?>

 <br><br>
<p>************************************************************************</p>
<h3>sqrt() </h3>
<hr>
<!-- 
	sqrt()			: Herhangi bir sayının karekökünü geri döndürür. 

 -->

<?php 
echo "sqrt İşlemi:<br>";
$sayi=312;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . sqrt($sayi);   

 ?>

  <br><br>
<p>************************************************************************</p>
<h3>pow() </h3>
<hr>
<!-- 
	pow()			: Herhangi bir sayının belirtilen değer kadar üstünü alarak geri döndürür. 

 -->

<?php 
echo "pow İşlemi:<br>";
$sayi=312;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . pow($sayi,2);   //üstünü alır.

 ?>


<br><br>
<p>************************************************************************</p>
<h3>fmod() </h3>
<hr>
<!-- 
	fmod()			: Herhangi bir sayının belirtilen değere göre modunu alarak geri döndürür. 

 -->

<?php 
echo "fmod İşlemi:<br>";
$sayi=312;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . fmod($sayi,10);   //Mod alır.

 ?>

<br><br>
<p>************************************************************************</p>
<h3>intdiv() </h3>
<hr>
<!-- 
	intdiv()			: Herhangi bir sayının belirtilen belirtilen sayıya kaç defa tam olarak bölünebildiğini geri döndürür. 

 -->

<?php 
echo "intdiv İşlemi:<br>";
$sayi=312;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . intdiv($sayi,30);   //Kaç defa tam bölündüğünü gösterir.

 ?>


  <br><br>
<p>************************************************************************</p>
<h3>hypot() </h3>
<hr>
<!-- 
	hypot()			: Belirtilen dik kenarların hipotenüsünü hesaplar.

 -->

<?php 
echo "hypot İşlemi:<br>";
$kenar1=3; 
$kenar2=4; 
echo "Kenar1: " . $kenar1 . "<br>";
echo "Kenar2: " . $kenar2 . "<br>";

echo "Hipotenüs ($kenar1 - $kenar2): " . hypot($kenar1,$kenar2);  

 ?>


 <br><br>
<p>************************************************************************</p>
<h3>rad2deg() - deg2rad()  </h3>
<hr>
<!-- 
	rad2deg()			: Radyan değerini dereceye çevirir. 
	deg2rad()			: Derece değerini radyana çevirir. 
 -->

<?php 
echo "rad2deg İşlemi:<br>";
$sayi=1.5;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . rad2deg($sayi);  


echo "<br><br>";
echo "deg2rad İşlemi:<br>";
$sayi=180;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . deg2rad($sayi);  

 ?>

  <br><br>
<p>************************************************************************</p>
<h3>sin() - sinh() - asin() - asinh()  </h3>
<hr>
<!-- 
	sin()			: Sinus bulur. 
	sinh()			: Hiperbolik Sinus bulur. 
	asin()			: -1 ile 1 arasındaki sayının ark Sinusünü radyan cinsinden bulur. 
	asinh()			: Herhangi bir sayının hiperbolik ark sinusünü bulur.

 -->

<?php 
echo "sin İşlemi:<br>";
$sayi=-14.25;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . sin($sayi);  


echo "<br><br>";
echo "sinh İşlemi:<br>";
$sayi=3.4;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . sinh($sayi);  


echo "<br><br>";
echo "asin İşlemi:<br>";
$sayi=0.5;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . asin($sayi);  


echo "<br><br>";
echo "asinh İşlemi:<br>";
$sayi=0.5;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . asinh($sayi);  

 ?>


   <br><br>
<p>************************************************************************</p>
<h3>cos() - cosh() - acos() - acosh()  </h3>
<hr>
<!-- 
	cos()			: Cosinus bulur. 
	cosh()			: Hiperbolik Cosinus bulur. 
	acos()			: -1 ile 1 arasındaki sayının ark Cosinusünü radyan cinsinden bulur. 
	acosh()			: Herhangi bir sayının hiperbolik ark Cosinusünü bulur.

 -->

<?php 
echo "cos İşlemi:<br>";
$sayi=-14.25;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . cos($sayi);  


echo "<br><br>";
echo "cosh İşlemi:<br>";
$sayi=3.4;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . cosh($sayi);  


echo "<br><br>";
echo "acos İşlemi:<br>";
$sayi=0.5;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . acos($sayi);  


echo "<br><br>";
echo "acosh İşlemi:<br>";
$sayi=0.5;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . acosh($sayi);  

 ?>


    <br><br>
<p>************************************************************************</p>
<h3>tan() - tanh() - atan() - atanh() - atan2() </h3>
<hr>
<!-- 
	tan()			: Tanjant bulur. 
	tanh()			: Hiperbolik Tanjant bulur. 
	atan()			: Herhangi bir sayının ark Tanjantını radyan cinsinden bulur. 
	atanh()			: -1 ile 1 arasındaki herhangi bir sayının hiberbolik ark Tanjantını bulur.
	atan2()			: Herhangi iki sayının ark tanjantını radyan değeri cinsinden bulur.

 -->

<?php 
echo "tan İşlemi:<br>";
$sayi=-14.25;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . tan($sayi);  


echo "<br><br>";
echo "tanh İşlemi:<br>";
$sayi=3.4;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . tanh($sayi);  


echo "<br><br>";
echo "atan İşlemi:<br>";
$sayi=0.5;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . atan($sayi);  


echo "<br><br>";
echo "atanh İşlemi:<br>";
$sayi=0.5;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . atanh($sayi);  


echo "<br><br>";
echo "atan2 İşlemi:<br>";
$sayi1=0.5;  
$sayi2=27;  

echo "sayi1: " . $sayi1 . "<br>";
echo "sayi2: " . $sayi2 . "<br>";

echo "Sonuc: " . atan2($sayi1,$sayi2);  

 ?>


     <br><br>
<p>************************************************************************</p>
<h3>bindec() - octdec() - hexdec()  </h3>
<hr>
<!-- 
	bindec()			: Binary Decimal dönüşümü yapar.
	octdec()			: Octal Decimal  dönüşümü yapar.
	hexdec()			: Hexadecimal Decimal dönüşümü yapar.. 

 -->

<?php 
echo "bindec İşlemi:<br>";
$sayi=100001101;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . bindec($sayi);  


echo "<br><br>";
echo "octdec İşlemi:<br>";
$sayi=7754;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . octdec($sayi);  


echo "<br><br>";
echo "hexdec İşlemi:<br>";
$sayi="EF61";  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . hexdec($sayi);  

?>

<br><br>
<p>************************************************************************</p>
<h3>bindec() - octdec() - hexdec()  </h3>
<hr>
<!-- 
	decbin()			: Decimal - Binary dönüşümü yapar.
	decoct()			: Decimal - Octal  dönüşümü yapar.
	dechex()			: Decimal - Hexadecimal  dönüşümü yapar.. 

 -->

<?php 
echo "decbin İşlemi:<br>";
$sayi=1453;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . decbin($sayi);  


echo "<br><br>";
echo "decoct İşlemi:<br>";
$sayi=1453;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . decoct($sayi);  


echo "<br><br>";
echo "dechex İşlemi:<br>";
$sayi=1453;  
echo "Sayi: " . $sayi . "<br>";
echo "Sonuc: " . dechex($sayi);  

?>

<br><br>
<p>************************************************************************</p>
<h3>base_convert() </h3>
<hr>
<!-- 
	base_convert()		: Hexadecimal - Octal Decimal - Binary sayı sistemleri karşılığını bularak dönüşümü yapar.

 -->

 <?php 
echo "base_convert İşlemi:<br>";
$sayi=1453;  
echo "Sayi: " . $sayi . "<br>";
echo "Binary: " . base_convert($sayi,10,2);  //10'luk sayıyı 2'lik sayıya çevir


echo "<br><br>";
echo "base_convert İşlemi:<br>";
$sayi=1453;  
echo "Sayi: " . $sayi . "<br>";
echo "Octal: " . base_convert($sayi,10,8);  //10'luk sayıyı 8'lik sayıya çevir


echo "<br><br>";
echo "base_convert İşlemi:<br>";
$sayi=1453;  
echo "Sayi: " . $sayi . "<br>";
echo "Hexadecimal: " . base_convert($sayi,10,16);  //10'luk sayıyı 16'lik sayıya çevir


echo "<br><br>";
echo "base_convert İşlemi:<br>";
$sayi=2655;  
echo "Sayi: " . $sayi . "<br>";
echo "Hexadecimal: " . base_convert($sayi,8,16);  //8'lik sayıyı 16'lik sayıya çevir


echo "<br><br>";
echo "base_convert İşlemi:<br>";
$sayi="5ad";  
echo "Sayi: " . $sayi . "<br>";
echo "Hexadecimal: " . base_convert($sayi,16,2);  //16'luk sayıyı 2'lik sayıya çevir

?>
</body>
</html>