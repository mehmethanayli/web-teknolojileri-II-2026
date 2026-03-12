
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
	
	array_merge()			: Birden fazla diziyi birleştirmek için kullanılır.
	
	array_merge_recursive()	: Birden fazla diziyi birleştirmek için kullanılır.
	
	array_combine()			: İlk dizinin elemanları anahtar olarak kabul edilerek ikinci dizi ile birleştirir.
	
	array_slice()			: Dizinin belirli bölümlerini alarak yeni bir dizi oluşturur.
	
	array_splice()			: Dizi üzerinde gelişmiş işlemler yapabilir. Dizinin belirli bölümlerini alıp, belirli bölümlerini silip, eğer belirtilirse yeni elemenalar ekleyerek yeni bir dizi oluşturmak için kullanılır.

	array_chunk()			: Dizinin belirli bölümlerini alarak yeni bir çok boyutlu dizi oluşturmak için kullanılır.

	array_column()			: Çok boyutlu dizi içerisinde bulunan eleman veya elemanları belirtilecek olan anahtar koşullarına göre biçimlendirerek yeni bir dizi oluşturmak için kullanılır.

	array_intersect()		: Birden fazla dizi içerisinde bulunun ve aynı eleman değerlerinden oluşan iki diziden yeni bir dizi oluşturur.

	array_intersect_key()	: Birden fazla dizi içerisinde bulunun ve aynı anahtar isimlerine oluşan iki diziden yeni bir dizi oluşturur.


	array_intersect_assoc()	:Birden fazla dizi içerisinde bulunun, aynı eleman değerlerinden ve aynı anahtar isimlerinden oluşan iki diziden yeni bir dizi oluşturur.

	array_diff()			: Birden fazla dizi içerisinde bulunan ve farklı eleman değerlerine sahip elemanlardan yeni bir dizi oluşturmak için kullanılır.

	array_diff_key()		: Birden fazla dizi içerisinde bulunan ve farklı anahtar isimlerine sahip elemanlardan yeni bir dizi oluşturmak için kullanılır.

	array_diff_assoc()		: Birden fazla dizi içerisinde bulunan ve farklı anahtar/değer isimlerine sahip elemanlardan yeni bir dizi oluşturmak için kullanılır.



-->

<br><br>
<p>************************************************************************</p>
<h3>Dizi Birleştirmek</h3>
<hr>

<?php 

$dizi1=array("mehmet","Arif","Hakkı", "Selim", "Nurhan","Kadir");
$dizi2=array("ayşe","atiye","hanife");

$yeniDizi= array_merge($dizi1,$dizi2);
echo "<pre>";
print_r($yeniDizi);
echo "</pre>";

echo "Anahtarlı Birleştirme İşlemleri";

$dizi1=array("a1" => "mehmet", "a2" => "Arif", "a3" => "Hakkı", "Selim", "Nurhan","Kadir");
$dizi2=array("a1" => "ayşe", "atiye", "hanife");// aynı anahtarlı değerlerin sonuncusu kullanılır.
$yeniDizi= array_merge($dizi1,$dizi2);
echo "<pre>";
print_r($yeniDizi);
echo "</pre>";



echo "array_merge_recursive() Birleştirme İşlemleri";


$dizi1=array("mehmet","Arif","Hakkı", "Selim", "Nurhan","Kadir");
$dizi2=array("ayşe","atiye","hanife");

$yeniDizi= array_merge_recursive($dizi1,$dizi2);
echo "<pre>";
print_r($yeniDizi);
echo "</pre>";




$dizi1=array("a1" => "mehmet", "a2" => "Arif", "a3" => "Hakkı", "Selim", "Nurhan","Kadir");
$dizi2=array("a1" => "ayşe", "a2" => "atiye", "hanife");// aynı anahtarlı değerleri kullanıldığında çok boyutlu bir diziye çevirir.
$yeniDizi= array_merge_recursive($dizi1,$dizi2);
echo "<pre>";
print_r($yeniDizi);
echo "</pre>";

?>


<br><br>
<p>************************************************************************</p>
<h3>Dizi İlişkisel Olarak Birleştirmek</h3>
<hr>

<?php 
$dizi1= ["Mavi", "Yeşil", "Siyah" , "Kırmızı"];
$dizi2= ["araba", "Gemi", "motor", "Kamyon"];

$yeniDizi=array_combine($dizi1, $dizi2); //İlişkisel birleştirme gerçekleştirir.

echo "<pre>";
print_r($yeniDizi);
echo "</pre>";

echo "Anahtarlı İlişkisel Birleştirme İşlemleri"; //Dizinin kendi anahtarlarını önemsemez.

$dizi1= ["a1"=>"Mavi", "a2"=>"Yeşil","a3"=>"Siyah" ,"a4"=>"Kırmızı"];
$dizi2= ["a1"=>"araba", "a2"=>"Gemi","a3"=>"motor","a4"=>"Kamyon"];

$yeniDizi=array_combine($dizi1, $dizi2); //İlişkisel birleştirme gerçekleştirir.

echo "<pre>";
print_r($yeniDizi);
echo "</pre>";




echo "Çok Boyutlu Dizilerde İlişkisel Birleştirme İşlemleri"; //Dizinin kendi anahtarlarını önemsemez.

$dizi1=["Araçlar", "Eşyalar", "İsimler"];
$dizi2=[["a1" => "araba", "a2" => "ucak", "a2" => "gemi"], "b1" => "masa", ["c1" =>"ali", "c2" => "Ahmet", "c3" => "Ayşe"]]; //iç dizilerdeki anahtar değerleri korunur.

$yeniDizi=array_combine($dizi1, $dizi2);
echo "<pre>";
print_r($yeniDizi);
echo "</pre>";
?>


<br><br>
<p>************************************************************************</p>
<h3>Dizinin Belirli  Elemanlarını Almak </h3>
<hr>

<?php 
$dizi1=array("mehmet","Arif","Hakkı", "Selim", "Nurhan","Kadir");

$yeniDizi=array_slice($dizi1, 3); //3'ten başlayarak sona kadar alır. Anahttarlar 0'dan başlar.

echo "<pre>";
print_r($yeniDizi);
echo "</pre>";

echo "Anahtarlı Belirlenen Kısmın Alınması";
$dizi1=array("a1" => "mehmet", "a2" => "Arif", "a3" => "Hakkı", "a4" => "Selim", "a5" => "Nurhan", "a6" => "Kadir");

$yeniDizi=array_slice($dizi1, 3, 2); //3'ten başlayarak 2 tane alır.
$yeniDizi=array_slice($dizi1, -3, 2); //Sondan 3.'den başlayarak 2 tane al.

echo "<pre>";
print_r($yeniDizi);
echo "</pre>";


echo "Anahtarların Korunarak Belirlenen Kısmın Alınması";
$dizi1=array("mehmet","Arif","Hakkı", "Selim", "Nurhan","Kadir");

$yeniDizi=array_slice($dizi1, 3,2, true); //3'ten başlayarak 2 tane alır. Anahttarlar korunur.
$yeniDizi=array_slice($dizi1, 3,count($dizi1), true); //3'ten başlayarak sona kadar alır. Anahttarlar korunur.

echo "<pre>";
print_r($yeniDizi);
echo "</pre>";

?>

<br><br>
<p>************************************************************************</p>
<h3>array_splice Gelişmiş İşlemler </h3>
<hr>

<?php 
$dizi1=array("Mehmet", "Arif", "Hakkı", "Selim", "Nurhan", "Kadir");

echo "<pre>";
print_r($dizi1);
echo "</pre>";

array_splice($dizi1, 4); //Dizi 1'in yapısı Değişir. geriye almadığı elemanları döndürür.

echo "<pre>";
print_r($dizi1);
echo "</pre>";



echo "Değişkene Almak <br>";
$dizi1=array("Mehmet", "Arif", "Hakkı", "Selim", "Nurhan", "Kadir");


$alinmayanDegerler= array_splice($dizi1, 4); 

echo "Alınmayan Değerler:";
echo "<pre>";
print_r($alinmayanDegerler);
echo "</pre>";

echo "Alınan Değerler:";
echo "<pre>";
print_r($dizi1);
echo "</pre>";



echo "Belirli Elemanları Almak veya Eklemek <br>";
$dizi1=array("Mehmet", "Arif", "Hakkı", "Selim", "Fatih", "Kadir");

//array_splice($dizi1, 1,-1); //Baştan bir eleman sondan bir eleman.
//array_splice($dizi1, 1,-2); //Baştan bir eleman sondan iki eleman.
//array_splice($dizi1, 2, count($dizi1), "AHMET"); // Baştan 2 değer al sona Ahmet ekle
//array_splice($dizi1,2,2,"AHMET");
$dizi2=array("Ayşe", "Hatice", "Fatma");
array_splice($dizi1,3,0,$dizi2);//ilk 3 ünü al içinden birşey silme yeni diziyi ekle sonra kaldığın yerden devam et.


echo "<pre>";
print_r($dizi1);
echo "</pre>";
?>


<br><br>
<p>************************************************************************</p>
<h3>array_chunk İşlemleri </h3>
<hr>
<?php 
$dizi1=array("Mehmet", "Arif", "Hakkı", "Selim", "Fatih", "Kadir", "Hale", "Aslı", "Aynur", "Kerim");

echo "<pre>";
print_r($dizi1);
echo "</pre>";

$sonuc= array_chunk($dizi1, 3); //3 er elemanlı boyutlar oluşturur.

echo "<pre>";
print_r($sonuc);
echo "</pre>";

echo "Anahtarlı İşlem <br>";
$dizi1=array("A1" => "Mehmet","A2" =>  "Arif","A3" => "Hakkı","A4" => "Selim","A5" => "Fatih","A6" => "Kadir","A6" => "Hale","A7" => "Aslı", "A8" => "Aynur", "A9" => "Kerim");


echo "<pre>";
print_r($dizi1);
echo "</pre>";

$sonuc= array_chunk($dizi1, 2,true); //2'şer elemanlı boyutlar oluşturur. Anahtarlar korunur.

echo "<pre>";
print_r($sonuc);
echo "</pre>";


?>

<br><br>
<p>************************************************************************</p>
<h3>array_column İşlemleri </h3>
<hr>

<?php 

$takimlar= array(
	array("KurulusYili" => "1907", "TakimAdi" => "Fenerbahçe"),
	array("KurulusYili" => "1903", "TakimAdi" => "Beşiktaş"),
	array("KurulusYili" => "1905", "TakimAdi" => "Galatasaray"));

echo "<pre>";
print_r($takimlar);
echo "</pre>";

$sonuc= array_column($takimlar, "TakimAdi"); //Sonuç içerisine Takim adlarının dizisi oluşturuldu.
echo "<pre>";
print_r($sonuc);
echo "</pre>";



$sonuc2= array_column($takimlar, "TakimAdi", "KurulusYili"); //Sonuç2 içerisine takim adi değer olarak , kuruluş yili anahtar olarak atanır.
echo "<pre>";
print_r($sonuc2);
echo "</pre>";

?>

<br><br>
<p>************************************************************************</p>
<h3>array_intersect, array_intersect_key, array_intersect_assoc  İşlemleri </h3>
<hr>
<?php 
echo "Değerlerden Yeni Bir Dizi Oluşturma";
$deger1 = ["Volkan", "Hakan", "Umut", "Erdem"];
$deger2 = ["Arif", "Murat", "Mustafa", "Volkan", "Erdem"];

$sonuc = array_intersect($deger1,$deger2); // ilk dizideki anahtar değerleri baz alınır.

echo "<pre>";
print_r($sonuc);
echo "</pre>";

echo "Anahtarlardan Yeni Bir Dizi Oluşturma";
$deger1 = ["Volkan", "A1" => "Hakan", "Umut","A2" =>  "Erdem"];
$deger2 = ["Arif", "Murat", "A1" =>  "Mustafa","A2" =>  "Volkan", "Erdem"];

$sonuc = array_intersect_key($deger1,$deger2); // ilk dizideki anahtar değerleri baz alınır.

echo "<pre>";
print_r($sonuc);
echo "</pre>";



echo "Anahtarlar ve Değerlerden Yeni Bir Dizi Oluşturma";
$deger1 = ["Volkan", "Hakan", "Umut", "Erdem"];
$deger2 = ["Volkan", "Arif", "Murat", "Mustafa", "Erdem"];

$sonuc = array_intersect_assoc($deger1,$deger2); // İki dizideki eleman ve anahtar eşleşecektir.

echo "<pre>";
print_r($sonuc);
echo "</pre>";

?>

<br><br>
<p>************************************************************************</p>
<h3>array_diff, array_diff_key, array_dif_assoc  İşlemleri </h3>
<hr>

<?php 

$renkler1= array("Kırmızı", "Mavi", "Mor", "Bordo", "Gri");
$renkler2= array("Pembe", "Eflatun", "Yeşil", "Kırmızı");

$sonuc= array_diff($renkler1, $renkler2); //dizi1 de dizi2 den farklı değerlerin olduğu yeni bir dizi oluşturur.

echo "<pre>";
print_r($sonuc);
echo "</pre>";





echo "Anahtarların Farkından Yeni Bir Dizi Oluşturma";

$renkler1= array("Kırmızı", "Mavi", "Mor", "Bordo", "Gri");
$renkler2= array("Pembe", "Eflatun", "Yeşil", "Kırmızı");

$sonuc= array_diff_key($renkler1, $renkler2); //dizi1 de dizi2 den farklı değerlerin olduğu yeni bir dizi oluşturur.

echo "<pre>";
print_r($sonuc);
echo "</pre>";





echo "Anahtarların ve Elemanların Farkından Yeni Bir Dizi Oluşturma";

$renkler1= array("Kırmızı", "Mavi", "Mor", "Bordo", "Gri");
$renkler2= array("Pembe", "Eflatun", "Yeşil", "Kırmızı");

$sonuc= array_diff_assoc($renkler1, $renkler2); //dizi1 de dizi2 den farklı değerlerin olduğu yeni bir dizi oluşturur.

echo "<pre>";
print_r($sonuc);
echo "</pre>";



$renkler1= array("A3" => "Kırmızı","A2" => "Mavi","A1" => "Mor","A0" => "Bordo", "Gri");
$renkler2= array("Pembe", "Eflatun", "Yeşil", "A3" =>"Kırmızı");

$sonuc= array_diff_assoc($renkler1, $renkler2); //dizi1 de dizi2 den farklı değerlerin olduğu yeni bir dizi oluşturur.

echo "<pre>";
print_r($sonuc);
echo "</pre>";






?>

</body>
</html>