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
Değişkenler:
1-Değişkenler $ ile başlar
2-Mutlaka bir harf veya _ ile başlayabilir.
3.Rakamlar ile başlayamaz.
4.Değişken içerisinde boşluk türkçe karakterler ve özel karakterler bulunamaz.
5.Değişken isimleri tanımlanırken php tarafından kullanılmakta olan isimler kullanılamaz.
6.Büyük harf küçük harf duyarlılığı vardır.
7.Değişken isimleri birden fazla kullanılabilir, fakat son değer gerçek değer olarak kabul edilir.
8.Değişkenler etki alanı kurallarına tabidir.
-->

<br><br>
<p>************************************************************************</p>
<h3>Matematiksel İşlemler</h3>
<hr>

<?php 
echo "Toplama İşlemi:<br>";

$sonuc=10+20;
echo "Toplama İşlemi: 10+20 = $sonuc";

echo "<br>";

echo "Toplama İşlemi: 10+20 =". (10+20);


echo "<br><br><br>";
echo "Atamalı Toplama:";

$deger=10;
$ekdeger=30;
echo "<br>";
echo $deger +=$ekdeger;
echo "<br>";
echo $deger +=100;

?>




<?php 
echo "<br><br><br>";
echo "Çıkarma İşlemi:<br>";
$sonuc=10-20;
echo "Çıkarma İşlemi: 10-20 = $sonuc";

echo "<br>";

echo "Çıkarma İşlemi: 10-20 =". (10-20);


echo "<br><br><br>";
echo "Atamalı Çıkarma:";

$deger=10;
$ekdeger=30;
echo "<br>";
echo $deger -=$ekdeger;
echo "<br>";
echo $deger -=100;

?>





<?php 
echo "<br><br><br>";
echo "Çarpma İşlemi:<br>";
$sonuc=10*20;
echo "Çarpma İşlemi: 10*20 = $sonuc";

echo "<br>";

echo "Çarpma İşlemi: 10*20 =". (10*20);


echo "<br><br><br>";
echo "Atamalı Çarpma:";

$deger=10;
$ekdeger=30;
echo "<br>";
echo $deger *=$ekdeger;
echo "<br>";
echo $deger *=100;

?>




<?php 
echo "<br><br><br>";
echo "Bölme İşlemi:<br>";
$sonuc=10/20;
echo "Bölme İşlemi: 10/20 = $sonuc";

echo "<br>";

echo "Bölme İşlemi: 10/20 =". (10/20);


echo "<br><br><br>";
echo "Atamalı Bölme:";

$deger=10;
$ekdeger=30;
echo "<br>";
echo $deger /=$ekdeger;
echo "<br>";
echo $deger /=100;

?>




<?php 
echo "<br><br><br>";
echo "Mod İşlemi:<br>";
$sonuc=25%10;
echo "Mod İşlemi: 25%10 = $sonuc";

echo "<br>";

echo "Mod İşlemi: 25%10 =". (25%10);


echo "<br><br><br>";
echo "Atamalı Mod:";

$deger=120;
$ekdeger=33;

echo "<br>";
echo $deger %=$ekdeger;

echo "<br>";
echo $deger %=8;

?>

<?php 
echo "<br><br><br>";
echo "Arttırma İşlemi:<br>";

$sayi=5;
echo "Sayi= $sayi <br>";

echo "Arrtırma işlemi yapıldı: " . $sayi++ ."<br>"; //Arttırma satırından sonraki satırda görülebilir.
echo "Sayının son hali: " . $sayi ."<br>";
?>


<?php 
echo "<br><br><br>";
echo "Öncesinde Arttırma İşlemi:<br>";

$sayi=5;
echo "Sayi= $sayi <br>";

echo "Arrtırma işlemi yapıldı: " . ++$sayi ."<br>"; //Arttırma  görülebilir.
echo "Sayının son hali: " . $sayi ."<br>";
?>





<?php 
echo "<br><br><br>";
echo "Azaltma İşlemi:<br>";

$sayi=15;
echo "Sayi= $sayi <br>";

echo "Azaltma işlemi yapıldı: " . $sayi-- ."<br>"; //Arttırma satırından sonraki satırda görülebilir.
echo "Azaltma işlemi yapıldı: " . $sayi-- ."<br>"; //Arttırma satırından sonraki satırda görülebilir.
echo "Azaltma işlemi yapıldı: " . $sayi-- ."<br>"; //Arttırma satırından sonraki satırda görülebilir.

echo "Sayının son hali: " . $sayi ."<br>";
?>


<?php 
echo "<br><br><br>";
echo "Öncesinde Azaltma İşlemi:<br>";

$sayi=15;
echo "Sayi= $sayi <br>";

echo "Azaltma işlemi yapıldı: " . --$sayi ."<br>"; //Arttırma satırından sonraki satırda görülebilir.
echo "Azaltma işlemi yapıldı: " . --$sayi ."<br>"; //Arttırma satırından sonraki satırda görülebilir.
echo "Azaltma işlemi yapıldı: " . --$sayi ."<br>"; //Arttırma satırından sonraki satırda görülebilir.

echo "Sayının son hali: " . $sayi ."<br>";
?>
</body>
</html>