
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>
	<meta http-equiv='Content-Language' content='tr'>
	<meta charset='utf-8'>
	<title>Php Dersleri</title>
</head>

<body>
	Dizilerde Metotlar:
	<hr>
	<!-- 
	Metotlar:
	
	array_pad()			: Dizinin eleman/elemanlar sayısını baz alarak belirtilecek olan değerler doğrultusunda baştan veya sondan doldurma işlemi yaparak yeni bir dizi oluşturmak için kullanılır.
	
	array_search()		: Dizi içerisinde bulunan eleman/elemanlar dahilinde belirtilecek olan elemanı aramak ve ilgili elemanın anahtarını bulmak için kullanılır.

	array_key_exist()	: Dizi içerisinde bulunan anahtar/anahtarlar dahilinde belirtilecek olan anahtarın olup olmadığını kontrol etmek için kullanılır.

	in_array()			: Dizi içerisinde bulunan eleman/elemanlar dahilinde, belirtilecek olan elemanın olup olup olmadığını kontrol etmek için kullanılır.

	min()				: Dizi içerisinde bulunan en küçük rakamı bulur. 

	max()				: Dizi içerisinde bulunan en büyük rakamı bulur.

	array_count_values	: Dizi içerisindeki elemanların kaç defa tekrar ettiğini bulmak için kullanılır.

	array_flip()		: Dizi içerisinde bulunan anahtar ve elemanların yerlerini değiştirmek için kullanılır.

	array_change_key_case(): Dizi içerisindeki anahtarları büyük/küçük harf dönüşümünü yapar.

	array_sum()			: Tüm elemanların toplamını alır.

	array_product()		: Tüm elemanların çarpımını alır.

	array_rand()		: Dizi içerisindeki elemanlardan belirtilecek eleman sayısı kadar rasgele eleman döndürmek için kullanılır.

	array_reverse()		: Dizinin tersten sıralanmasını sağlar.

	shuffle()			: Dizi içerisindeki elemanların sıralamasını karıştırılır. Anahtarlar gözardı edilir.

	ksort()				: Dizinin anahtarlarını büyük harf küçük harf duyarlı olacak şekilde a-z veya küçükten büyüğe sıralamak için kullanılır.
	
	krsort()			: Dizinin anahtarlarını büyük harf küçük harf duyarlı olacak şekilde z-a veya büyükten küçüğe sıralamak için kullanılır.

	sort()				: Dizinin elemanlarını büyük harf küçük harf duyarlı olacak şekilde a-z veya küçükten büyüğe sıralamak için kullanılır.

	rsort()				: Dizinin elemanlarını büyük harf küçük harf duyarlı olacak şekilde z-a veya büyükten küçüğe sıralamak için kullanılır.

	asort()				: Anahtarları bozmadan, dizinin elemanlarını büyük harf küçük harf duyarlı olacak şekilde a-z veya küçükten büyüğe sıralamak için kullanılır.

	arsort()			: Anahtarları bozmadan, dizinin elemanlarını büyük harf küçük harf duyarlı olacak şekilde z-a veya büyükten küçüğe sıralamak için kullanılır.


	natsort()			: Dizinin elemanlarını büyük küçük harf duyarlı olacak ve doğal sıralama şşekilnde a'dan z'ye yada küçükten büyüğe sıralamak için kullanılır.

	natcasesort()		: Dizinin elemanlarını doğal sıralama şşekilnde a'dan z'ye yada küçükten büyüğe sıralamak için kullanılır.

	multisort()			: Bir veya birden fazla dizinin elemanlarını gelişmiş olarak çok yönlü sıralamak için kullanılır.
		SORT_ASC		: a-z küçükten büyüğe sıralama yapar.
		SORT_DESC		: a-z küçükten büyüğe sıralama yapar.
		SORT_REGULAR	: Standart sıralama varsayılan.
		SORT_NUMERIC	: Rakamsal sıralam yapar.
		SORT_NATURAL	: Alfanumerik sıralama yapar.(doğal)

-->

<br><br>
<p>************************************************************************</p>
<h3>pad İşlemi</h3>
<hr>

<?php 

$isimler = array("Mehmet","Arif","Hakkı", "Selim", "Kemal","Kadir");

$sonuc = array_pad($isimler, 10, "php egitimi");

echo "<pre>";
print_r($sonuc);
echo "</pre>";


$isimler = array("a1" => "Mehmet", "a2" => "Arif", "a3" => "Hakkı", "a4" =>  "Selim", "a5" =>  "Kemal", "a6" => "Kadir");
$sonuc = array_pad($isimler, 10, "php egitimi");

echo "<pre>";
print_r($sonuc);
echo "</pre>";



$isimler = array("a1" => "Mehmet", "a2" => "Arif", "a3" => "Hakkı", "a4" =>  "Selim", "a5" =>  "Kemal", "a6" => "Kadir");
$sonuc = array_pad($isimler, -10, "php egitimi"); //Baştan doldurur.

echo "<pre>";
print_r($sonuc);
echo "</pre>";
?>





<br><br>
<p>************************************************************************</p>
<h3>array_search(), array_key_exist(), in_array() İşlemi</h3>
<hr>

<?php 

$isimler = array("a1" => "Mehmet", "a2" => "Arif", "a3" => "Hakkı", "a4" =>  "Selim", "a5" =>  "Kemal", "a6" => "Kadir");

echo "<pre>";
print_r($isimler);
echo "</pre>";

$key = array_search("Mehmet", $isimler);
echo "Aranılan Değer: " . $key ."<br>";


$sayilar = array("a1" => "5", "a2" => 5, "a3" => "10", "a4" =>  10);
$key = array_search(5, $sayilar , true); // True ile belirtmezsek string 5'i alır, true dersek aynı tipteki değeri alır.
echo "Aranılan Değer: " . $key  ."<br>";


echo "<br><br><br>Key Var Mı_? <br>";
$isimler = array("a1" => "Mehmet", "a2" => "Arif", "a3" => "Hakkı", "a4" =>  "Selim", "a5" =>  "Kemal", "a6" => "Kadir");

$key = array_key_exists("a1", $isimler);
echo "Aranılan Değer: " . $key ."<br>";


echo "<br><br><br>Eleman Var Mı_? <br>";
$isimler = array("a1" => "Mehmet", "a2" => "Arif", "a3" => "Hakkı", "a4" =>  "Selim", "a5" =>  "Kemal", "a6" => "Kadir");

$key = in_array("Mehmet", $isimler);
echo "Aranılan Değer: " . $key ."<br>";

?>



<br><br>
<p>************************************************************************</p>
<h3>min() - max() İşlemi</h3>
<hr>
<?php 

$sayilar=[50,688,98,88,78,65,45,88];

echo "En küçük değer: ".min($sayilar);
echo "En büyük değer: ".max($sayilar);

?>


<br><br>
<p>************************************************************************</p>
<h3>array_count_values() İşlemi</h3>
<hr>

<?php 

$isimler = array("Mehmet","Arif","Hakkı", "Selim", "Kemal","Kadir", "Mehmet" ,"Arif" , "Kemal" , "Hakkı" , "Selim");

$sonuc= array_count_values($isimler);

echo "<pre>";
print_r($sonuc);
echo "</pre>";


?>

<br><br>
<p>************************************************************************</p>
<h3>array_flip() İşlemi</h3>
<hr>


<?php 
$isimler = array("a1" => "Mehmet", "a2" => "Arif", "a3" => "Hakkı", "a4" =>  "Selim", "a5" =>  "Kemal", "a6" => "Kadir");

$sonuc= array_flip($isimler);
echo "<pre>";
print_r($sonuc);
echo "</pre>";
?>

<br><br>
<p>************************************************************************</p>
<h3>array_change_key_case() İşlemi</h3>
<hr>


<?php 
$isimler = array("a1" => "Mehmet", "a2" => "Arif", "a3" => "Hakkı", "a4" =>  "Selim", "a5" =>  "Kemal", "a6" => "Kadir");

$sonuc= array_change_key_case($isimler, CASE_LOWER);
$sonuc= array_change_key_case($isimler, CASE_UPPER);

echo "<pre>";
print_r($sonuc);
echo "</pre>";
?>



<br><br>
<p>************************************************************************</p>
<h3>array_sum() - array_product() İşlemi</h3>
<hr>
<?php 

$sayilar=[50,688,98,88,78,65,45,88];

echo "Toplamı : ".array_sum($sayilar) ."<br>";

echo "Çarpımı : ".array_product($sayilar) ."<br>";

?>



<br><br>
<p>************************************************************************</p>
<h3>array_rand() İşlemi</h3>
<hr>
<?php 
$isimler = array("Mehmet","Arif","Hakkı", "Selim", "Kemal","Kadir", "Mehmet" ,"Arif" , "Kemal" , "Hakkı" , "Selim");

$degerler= array_rand($isimler,3);

echo "<pre>";
print_r($degerler);
echo "</pre>";


?>

<br><br>
<p>************************************************************************</p>
<h3>array_reverse() İşlemi</h3>
<hr>
<?php 
$isimler = array("Mehmet","Arif","Hakkı", "Selim", "Kemal","Kadir", "Mehmet" ,"Arif" , "Kemal" , "Hakkı" , "Selim");

$tersten= array_reverse($isimler,true); //True ile anahtar değerleri korunur.

echo "<pre>";
print_r($tersten);
echo "</pre>";


?>



<br><br>
<p>************************************************************************</p>
<h3>array_shuffle() İşlemi</h3>
<hr>

<?php 

//$isimler = array("Mehmet","Arif","Hakkı", "Selim", "Kemal","Kadir", "Mehmet" ,"Arif" , "Kemal" , "Hakkı" , "Selim");

//anahtarlar gözardı edilir.

$isimler = array("a1" => "Mehmet", "a2" => "Arif", "a3" => "Hakkı", "a4" =>  "Selim", "a5" =>  "Kemal", "a6" => "Kadir");

//Herseferinde dizi karıştırılır.
shuffle($isimler);

echo "<pre>";
print_r($isimler);
echo "</pre>";




$isimler = array("Mehmet","Arif","Hakkı", "Selim", "Kemal","Kadir", "Mehmet" ,array("Arif" , "Kemal" , "Hakkı") , "Selim");


shuffle($isimler[7]);
shuffle($isimler);


echo "<pre>";
print_r($isimler);
echo "</pre>";


?>

<br><br>
<p>************************************************************************</p>
<h3>ksort() - krsort() İşlemi</h3>
<hr>
<?php 

$isimler = array("bir" => "Mehmet", "iki" => "Arif", "uc" => "Hakkı", "dort" => "Selim", "bes" => "Kemal", "on" => "Kadir");

ksort($isimler);

echo "A-Z Sıralama: <pre>";
print_r($isimler);
echo "</pre>";



krsort($isimler);

echo "Z-A Sıralama: <pre>";
print_r($isimler);
echo "</pre>";




$isimler = array(5 => "Mehmet", 6 => "Arif", 8 => "Hakkı", 25 => "Selim", 55 => "Kemal", 85 => "Kadir", 12 => "Mehmet", 9 => array("Arif" , "Kemal" , "Hakkı") , 13 => "Selim");
ksort($isimler);

echo "Sayıları Sıralama: <pre>";
print_r($isimler);
echo "</pre>";
?>






<br><br>
<p>************************************************************************</p>
<h3>sort()	 - rsort() - asort() - arsort()	İşlemi</h3>
<hr>
<?php 
$isimler = array("Mehmet","Arif","Hakkı", "Selim", "Kemal","Kadir", "Mehmet" ,"Arif" , "Kemal" , "Hakkı" , "Selim");

$anahtarliIsimler = array("bir" => "Mehmet", "iki" => "Arif", "uc" => "Hakkı", "dort" => "Selim", "bes" => "Kemal", "on" => "Kadir");

sort($isimler);
echo "A-Z Sıralaması: <pre>";
print_r($isimler);
echo "</pre>";

rsort($isimler);
echo "Z-A Sıralaması: <pre>";
print_r($isimler);
echo "</pre>";


asort($anahtarliIsimler);
echo "A-Z Sıralaması Anahtar Korumalı: <pre>";
print_r($anahtarliIsimler);
echo "</pre>";


arsort($anahtarliIsimler);
echo "Z-A Sıralaması Anahtar Korumalı: <pre>";
print_r($anahtarliIsimler);
echo "</pre>";

?>



<br><br>
<p>************************************************************************</p>
<h3>natsort()	 - notcasesort() </h3>
<hr>
<?php 
$resimler1 = array("A1" => "resim3", "A2" =>"resim17", "A3" => "resim12", "A4" => "resim175", "A5" =>  "resim2","A6" => "resim18","A7" => "resim22","A8" => "resim11" );

sort($resimler1);
echo "Normal Sıralama - Karakterlere Göre Sıralama - Sort: <pre>";
print_r($resimler1);
echo "</pre>";



$resimler1 = array("A1" => "resim3", "A2" =>"resim17", "A3" => "resim12", "A4" => "resim175", "A5" =>  "resim2","A6" => "resim18","A7" => "resim22","A8" => "resim11" );
natsort($resimler1);
echo "Doğal Sıralama - Gerçek Hayattaki Sıralama - Anahtarlar Varsa Bozulmaz -  natsort: <pre>";
print_r($resimler1);
echo "</pre>";



$resimler1 = array("A1" => "REsim3", "A2" =>"REsim17", "A3" => "resim12", "A4" => "resim175", "A5" =>  "resim2","A6" => "resim18","A7" => "resim22","A8" => "resim11" );


natcasesort($resimler1);
echo "Doğal Sıralama - Gerçek Hayattaki Sıralama - Anahtarlar Varsa Bozulmaz -  natcasesort: <pre>";
print_r($resimler1);
echo "</pre>";
?>



<br><br>
<p>************************************************************************</p>
<h3>multisort() </h3>
<hr>

<?php 
$isimler = array("Mehmet","Arif","Hakkı", "Selim", "Kemal","Kadir", "Mehmet" ,"Arif" , "Kemal" , "Hakkı" , "Selim");
$sayilar = [1,44,5,65,2,5,6,60,13,55];

echo "Dizinin Varsayılan Hali <pre>";
print_r($isimler);
echo "</pre>";

array_multisort($isimler);

echo "Dizinin Varsayılan Sıralaması multisort - Tümünde Anahtarlar korunur. <pre>";
print_r($isimler);
echo "</pre>";


array_multisort($sayilar);

echo "Dizinin Varsayılan Sıralaması multisort - Tümünde Anahtarlar korunur. <pre>";
print_r($sayilar);
echo "</pre>";


array_multisort($isimler, SORT_ASC);

echo "Dizinin Varsayılan Sıralaması multisort - Tümünde Anahtarlar korunur. SORT_ASC <pre>";
print_r($isimler);
echo "</pre>";
 

array_multisort($isimler, SORT_DESC);

echo "Dizinin Varsayılan Sıralaması multisort - Tümünde Anahtarlar korunur. SORT_DESC <pre>";
print_r($isimler);
echo "</pre>";



$isimler = array("Mehmet","Arif","Hakkı", "Selim",55, "Kemal",1,"Kadir",5, "Mehmet" ,"Arif" ,3, "Kemal" , "Hakkı" , "Selim");
array_multisort($isimler, SORT_NUMERIC);

echo "Dizinin Varsayılan Sıralaması multisort - Tümünde Anahtarlar korunur. String ifadelere dokunmaz. Sadece int değerleri.  SORT_NUMERIC <pre>";
print_r($isimler);
echo "</pre>";


$isimler = array("Mehmet","Arif","Hakkı", "Selim",55, "Kemal",1,"Kadir",5, "Mehmet" ,"Arif" ,3, "Kemal" , "Hakkı" , "Selim");
array_multisort($isimler, SORT_STRING);

echo "Dizinin Varsayılan Sıralaması multisort - Tümünde Anahtarlar korunur. String ifadelere dokunmaz. Sadece int değerleri.  SORT_STRING <pre>";
print_r($isimler);
echo "</pre>";









 ?>












</body>
</html>