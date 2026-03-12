
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
	
	array_replace()			: Birden fazla dizi içerisinde bulunan eleman/elemanların, ilk dizi içerisinde olanları baz alınarak, kendisinden sonra gelecek olan dizi veya diziler içerisinde bulunan eleman/elemanlarla güncelleyerek yeni bir dizi oluşturmak için kullanılır.
	
	array_replace_recursive(): Aynı mantıkla çalışır daha gelişmiştir. Özellikle çok gelişmiş dizilerde kullanılır. Birden fazla dizi içerisinde bulunan eleman/elemanların, ilk dizi içerisinde olanları baz alınarak, kendisinden sonra gelecek olan dizi veya diziler içerisinde bulunan eleman/elemanlarla güncelleyerek yeni bir dizi oluşturmak için kullanılır.

	array_filter()			: Dizinin içerisindeki boş eleman/elemanları filtre ederek yeni bir dizi oluşturmak için kullanılır.

	array_unique()			: Dizinin içinde tekrarlanan elemanları silerek yeni bir dizi oluşturu.

	range()					: Belirtilen değer aralıkları doğrultusunda doldurma işlemi yaparak yeni bir dizi oluşturmak için kullanılır. 

	array_fill()			: Belirtilecek olan değerler doğrultusunda doldurma işlemi yaparak yeni bir dizi oluşturmak için kullanılır.

	array_fill_keys()		: Dizi içerisinde bulunan eleman/elemanları anahtar gibi görerek, belirtilecek olan değerler doğrultusunda doldurma işlemi yaparak yeni bir dizi oluşturmak için kullanılır. 

	compact()				: Dizi içerisinde bulunan elemanı/elemanları daha önceden aynı isimle tanımlanmış olan değişkenlerden ilgili anahtarlara değer üretmek için kullanılır.

	array_keys()			: Dizinin anahtarlarını alıp yeni bir dizi oluşturmak için kullanılır. 
	
	array_values()			: Dizinin elemanlarını alıp yeni bir dizi oluşturmak için kullanılır. 

-->

<br><br>
<p>************************************************************************</p>
<h3>Replace İşlemi</h3>
<hr>

<?php 

$isimler1 = array("Mehmet","Arif","Hakkı", "Selim", "Kemal","Kadir");
$isimler2 = array("Aslı", "Hanife" , "Keriman", "Ummu", "Fahriye", "Hatice"); 

$sonuc = array_replace($isimler1, $isimler2);

echo "<pre>";
print_r($sonuc);
echo "</pre>";



echo "Değer İçinde Bir Dizi Varsa";
$isimler1 = array(array("Mehmet","Arif","Hakkı"), "Selim", "Kemal","Kadir");
$isimler2 = array("Aslı", "Hanife" , "Keriman", "Hatice"); 

echo "<pre>";
print_r($isimler1);
echo "</pre>";

echo "<pre>";
print_r($isimler2);
echo "</pre>";

$sonuc = array_replace($isimler1, $isimler2);

echo "<pre>";
print_r($sonuc);
echo "</pre>";


echo "*******************<br>";
$isimler1 = array(array("Mehmet","Arif","Hakkı"), "Selim", array("Kemal","Kadir"));
$isimler2 = array(array("Aslı", "Hanife" ), "Keriman", array("Hatice")); 

echo "Dizi-1<pre>";
print_r($isimler1);
echo "</pre>";

echo "Dizi-2<pre>";
print_r($isimler2);
echo "</pre>";

$sonuc = array_replace($isimler1, $isimler2);

echo "Sonuc<pre>";
print_r($sonuc);
echo "</pre>";



echo "Değer İçinde Bir Dizi Varsa Recursive (Önceki İle Aynı Şekilde Bir Sonuç Verir.Boyutta farklılıklar oluşur.)";

$isimler1 = array(array("Mehmet","Arif","Hakkı"), "Selim", "Kemal","Kadir");
$isimler2 = array("Aslı", "Hanife" , "Keriman", "Hatice"); 

echo "<pre>";
print_r($isimler1);
echo "</pre>";

echo "<pre>";
print_r($isimler2);
echo "</pre>";

$sonuc = array_replace_recursive($isimler1, $isimler2);

echo "<pre>";
print_r($sonuc);
echo "</pre>";



echo "*******************<br>";
$isimler1 = array(array("Mehmet","Arif","Hakkı"), "Selim", "Kemal","Kadir");
$isimler2 = array(array("Aslı", "Hanife" ), "Keriman", array("Hatice")); 

echo "Dizi-1<pre>";
print_r($isimler1);
echo "</pre>";

echo "Dizi-2<pre>";
print_r($isimler2);
echo "</pre>";

$sonuc = array_replace_recursive($isimler1, $isimler2); //Örnekte Hakkı silinmedi ve korunarak yeni dizi içerisine yerleştirildi.

echo "Sonuc <pre>";
print_r($sonuc);
echo "</pre>";
?>




<br><br>
<p>************************************************************************</p>
<h3>Filter İşlemi</h3>
<hr>

<?php 

$renkler = ["Mavi", "", "Yeşil", "Siyah", "", "Mor"]; //Boş Değerler silinir.

echo "<pre>";
print_r($renkler);
echo "</pre>";

$sonuc= array_filter($renkler);
echo "<pre>";
print_r($sonuc);
echo "</pre>";
?>


<br><br>
<p>************************************************************************</p>
<h3>array_unique() İşlemi</h3>
<hr>

<?php 

$renkler = ["Mavi", "Mor", "Yeşil", "Siyah", "Siyah", "Mor"];

$sonuc= array_unique($renkler);

echo "<pre>";
print_r($sonuc);
echo "</pre>";

?>


<br><br>
<p>************************************************************************</p>
<h3>range() İşlemi</h3>
<hr>


<?php 
$sayilar= array(1,2,3,4,5,6,7,8,9);

echo "<pre>";
print_r($sayilar);
echo "</pre>";


$islem=range(1, 100);
echo "<pre>";
print_r($islem);
echo "</pre>";


$islem=range(1, 100,5); //5er 5 er oluşturur.
echo "<pre>";
print_r($islem);
echo "</pre>";


$islem=range("a","z"); //Alfabetik oluşturur.
echo "<pre>";
print_r($islem);
echo "</pre>";

?>

<br><br>
<p>************************************************************************</p>
<h3>array_fill() array_fill_key İşlemi</h3>
<hr>


<?php 

$degerler=array_fill(0, 10, "Mehmet"); //Diziyi Mehmet ile doldur.
echo "<pre>";
print_r($degerler);
echo "</pre>";



$degerler=array_fill(77, 5, "Mehmet"); //Diziyi 77'den başla Mehmet ile doldur.
echo "<pre>";
print_r($degerler);
echo "</pre>";


echo "array_fill_keys() Kullanımı";

$isimler  = array("Aslı", "Hanife" , "Keriman", "Ummu", "Fahriye", "Hatice");  //Anahtara dönüşecek dizi
$degerler = array_fill_keys($isimler, "isim");

echo "<pre>";
print_r($degerler);
echo "</pre>";

?>

<br><br>
<p>************************************************************************</p>
<h3>compact() İşlemi</h3>
<hr>

<?php 
//Değişken isimlerinin dizi içindeki eleman adıyla aynı olması zorunludur.
$isim="Mehmet";
$soyisim="Hanaylı";
$tarih=1989;

$bilgiler = ["isim","soyisim","tarih"];

$sonuc=compact($bilgiler);
echo "<pre>";
print_r($sonuc);
echo "</pre>";

?>

<br><br>
<p>************************************************************************</p>
<h3>array_keys() - array_values() İşlemi</h3>
<hr>


<?php 

$isimler  = array(	"Aslı" 		=> "php", 
					"Hanife" 	=> "asp",
					"Keriman"	=> "Js", 
					"Ummu"		=> "Html",
					"Kadir" 	=> "php");  

echo "<pre>";
print_r($isimler);
echo "</pre>";


$keys = array_keys($isimler);

echo "<pre>";
print_r($keys);
echo "</pre>";


$keys = array_keys($isimler,"php");

echo "<pre>";
print_r($keys);
echo "</pre>";



$values= array_values($isimler);
echo "<pre>";
print_r($values);
echo "</pre>";
 ?>








































</body>
</html>