
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
	
	count()			: Dizi içerisindeki eleman sayısını bulmak için kullanılır.
	
	sizeof()		: Dizi içerisindeki eleman sayısını bulmak için kullanılır.
	
	COUNT_RECURSIVE	: Tüm boyutlar içerisindeki elemanlar da sayma işlemine dahil edilir.
	
	array_unshift()	: Dizinin en başına yeni eleman veya elemanlar eklemek için kullanılır.Aynı zamanda eklenecek olan eleman/elemanların dizye dahil edilmesiyle dizi içeriğinin toplam eleman sayısı değerini geriye döndürür.
	
	array_push()	: Dizinin en sonuna yeni eleman veya elemanlar eklemek için kullanılır.Aynı zamanda eklenecek olan eleman/elemanların dizye dahil edilmesiyle dizi içeriğinin toplam eleman sayısı değerini geriye döndürür.
	
	array_shift 	: Dizinin içerisindeki ilk elemanı siler ve sildiği elemanı geriye döndürebilir. Anahtrarlar yeniden sıralanır.

	array_pop 		: Dizinin içerisindeki son elemanı siler ve sildiği elemanı geriye döndürebilir. Sonran silindiğinde anahtar değerleri değiştirilmez.

	key()			: Dizinin göstericisi konumundaki elemanın anahtarını bulmak için kullanılır.

	current() / pos(): Dizinin göstericisi konumundaki elemanı bulmak için kullanılır.

	end()			: Dizi göstericisinin son konumundaki elemanı bulmak için kullanılır.

	next()			: Dizinin göstericisinin konumunu bir ileri alma işlemi yapar.

	prev()			: Dizinin göstericisinin konumunu bir geri alma işlemi yapar.

	reset()			: Dizinin göstericisinin konumunu varsayılan yerine alma işlemi yapar.


	explode()		: Düz bir metni belirtilecek olan ayraca göre parçalayarak yeni bir dizi oluşturmak için kullanılır.

	implode()		: Diziyi birleştirerek düz bir metin oluşturmak için kullanılır. 

	list()			: Dizi içerisindeki eleman veya elemanları değişkenlere atamak için kullanılır.
-->
<?php 

$isimler=array("mehmet","Arif","Hakkı","Selim",array("Ayşe","Fatma",array("Mavi","Yeşil","Kırmızı"),"Nurhan"),"Kadir");


echo "<pre>";
print_r($isimler);
echo "</pre>";
echo "<br><br>";

echo "Dizinin Eleman Sayısı:" . count($isimler) ."<br>";
echo "Dizinin Eleman Sayısı:" . sizeof($isimler) ."<br>";

echo "Dizinin Alt Boyutlarıyla Eleman Sayısı:" . count($isimler,COUNT_RECURSIVE)."<br>"; //Toplam eleman sayısını geri döndürür.

echo "Dizinin Alt Boyutlarıyla Eleman Sayısı:" . count($isimler[4]) ."<br>"; //Toplam eleman sayısını geri döndürür.

echo "Dizinin Alt Boyutlarıyla Eleman Sayısı:" . count($isimler[4],COUNT_RECURSIVE) ."<br>"; //Toplam eleman sayısını geri döndürür.



?>
<br><br>
<p>************************************************************************</p>
<h3>Diziye Eleman Eklemek</h3>
<hr>

<?php 
echo "<h4>Başına Eleman Eklemek</h4>";


$isimler=array("mehmet","Arif","Hakkı", "Selim", "Nurhan","Kadir");
$ToplamElemanSayisi=array_unshift($isimler, "Akif", "Serkan" ); //Dizinin başına eleman ekler.

echo "<pre>";
print_r($isimler);
echo "</pre>";
echo "Ekleme Sonrası Toplam Eleman Sayısı: " . $ToplamElemanSayisi;



echo "<hr>";
$isimler=array("mehmet","Arif","Hakkı", "Selim", "Nurhan",array("Ayşe","Halime", "Nurdan"),"Kadir");
$ToplamElemanSayisi=array_unshift($isimler[5], "Hale", "Handan" ); //Dizinin başına eleman ekler.
echo "<pre>";
print_r($isimler);
echo "</pre>";
echo "Ekleme Sonrası Toplam Eleman Sayısı: " . $ToplamElemanSayisi;



echo "<h4>Sonuna Eleman Eklemek</h4>";


$isimler=array("mehmet","Arif","Hakkı", "Selim", "Nurhan","Kadir");
$ToplamElemanSayisi=array_push($isimler, "Akif", "Serkan" ); //Dizinin başına eleman ekler.

echo "<pre>";
print_r($isimler);
echo "</pre>";
echo "Ekleme Sonrası Toplam Eleman Sayısı: " . $ToplamElemanSayisi;



echo "<hr>";
$isimler=array("mehmet","Arif","Hakkı", "Selim", "Nurhan",array("Ayşe","Halime", "Nurdan"),"Kadir");
$ToplamElemanSayisi=array_push($isimler[5], "Hale", "Handan" ); //Dizinin başına eleman ekler.
echo "<pre>";
print_r($isimler);
echo "</pre>";
echo "Ekleme Sonrası Toplam Eleman Sayısı: " . $ToplamElemanSayisi;

?>


<br><br>
<p>************************************************************************</p>
<h3>Diziden Eleman Çıkarmak</h3>
<hr>

<?php 

echo "<h4>Baştan Eleman Silmek</h4>";

$isimler=array("Mehmet","Arif","Hakkı", "Selim", "Nurhan",array("Ayşe","Halime", "Nurdan"),"Kadir");
echo "<pre>";
print_r($isimler);
echo "</pre>";

$sil1=array_shift($isimler);
$sil2=array_shift($isimler);
$sil3=array_shift($isimler);
$sil4=array_shift($isimler[2]);

echo "<pre>";
print_r($isimler);
echo "</pre>";

echo "Silinen Elemanlar: $sil1  - $sil2 - $sil3 -sil4 ";


/******************************************************************************************/
echo "<hr><h4>Sondan Eleman Silmek</h4>";

$isimler=array(3=>"Mehmet","Arif","Hakkı", "Selim", 5=>"Nurhan",5=>array("Ayşe","Halime", "Nurdan"),6=>"Kadir");
echo "<pre>";
print_r($isimler);
echo "</pre>";

$sil1=array_pop($isimler);
$sil4=array_pop($isimler[5]);

echo "<pre>";
print_r($isimler);
echo "</pre>";

echo "Silinen Elemanlar: $sil1 - $sil4 ";


?>

<br><br>
<p>************************************************************************</p>
<h3>Dizilerde Key Metodu</h3>
<hr>

<?php 
$isimler=array("a1"=>"mehmet", "a2" => "Arif","Hakkı","Selim","b1"=>array("Ayşe","Fatma",array("Mavi","Yeşil","Kırmızı"),"Nurhan"),"Kadir");

echo "<pre>";
print_r($isimler);
echo "</pre>";

$sonuc= key($isimler);
echo "Dizinin Göstericisi Konumundaki Elemanın Anahtar Değeri: " . $sonuc . "<br>";
$sonuc= key($isimler["b1"]);
echo "Dizinin Göstericisi Konumundaki Elemanın Anahtar Değeri: " . $sonuc . "<br>";

?>




<br><br>
<p>************************************************************************</p>
<h3>Dizilerde Current-Pos Metodu</h3>
<hr>
<?php 
$isimler=array("mehmet","Arif","Hakkı","Selim",array("Ayşe","Fatma",array("Mavi","Yeşil","Kırmızı"),"Nurhan"),"Kadir");


echo "<pre>";
print_r($isimler);
echo "</pre>";
echo "<br><br>";

$sonuc= current($isimler);
echo "Dizinin Göstericisi Konumundaki Elemanın Değeri: " . $sonuc . "<br>";



$isimler=array(array("Ayşe","Fatma",array("Mavi","Yeşil","Kırmızı"),"mehmet","Arif","Hakkı","Selim","Nurhan"),"Kadir");

$sonuc= current($isimler[0]);
echo "Çok boyutlu dizide Dizinin Göstericisi Konumundaki Elemanın Değeri: " . $sonuc . "<br>";

?>


<br><br>
<p>************************************************************************</p>
<h3>Dizilerde End Metodu</h3>
<hr>
<?php 
$isimler=array("mehmet","Arif","Hakkı","Selim","Nurhan","Kadir");

echo "<pre>";
print_r($isimler);
echo "</pre>";
echo "<br><br>";

$sonuc= end($isimler);
echo "Dizinin son konumundaki göstericisi elemanın değeri: " . $sonuc . "<br>";


$isimler=array("mehmet","Arif","Hakkı","Selim","Nurhan","Kadir",array("Mavi","Yeşil","Kırmızı"));

$sonuc= end($isimler);
echo "Çok Boyutlu dizinin son konumundaki göstericisi elemanın değeri: ";
print_r($sonuc);

?>
<br><br>
<p>************************************************************************</p>
<h3>Dizilerde Next-Prev-Reset Metodu</h3>
<hr>
<?php 
$isimler=array("mehmet","Arif","Hakkı","Selim","Nurhan","Kadir");

echo "<pre>";
print_r($isimler);
echo "</pre>";
echo "<br><br>";

$varsayilanGosterici= key($isimler);
echo "Dizinn Varsayılan Gösterici Konumunundaki Anahtar Değeri " . $varsayilanGosterici ."<br>";

$varsayilanGostericiElemani= current($isimler);
echo "Dizinn Varsayılan Gösterici Konumunundaki Eleman Değeri " . $varsayilanGostericiElemani . "<br>";


/*İleri Kaydırma*/
echo " <br><br><br>İleri Kaydırma<br>";
next($isimler);
next($isimler);
next($isimler);

$varsayilanGosterici= key($isimler);
echo "Dizinin Varsayılan Gösterici Konumunundaki Anahtar Değeri " . $varsayilanGosterici ."<br>";

$varsayilanGostericiElemani= current($isimler);
echo "Dizinin Varsayılan Gösterici Konumunundaki Eleman Değeri " . $varsayilanGostericiElemani . "<br>";



/*Geri Kaydırma*/
echo " <br><br><br>Geri Kaydırma<br>";
prev($isimler);

$varsayilanGosterici= key($isimler);
echo "Dizinin Varsayılan Gösterici Konumunundaki Anahtar Değeri " . $varsayilanGosterici ."<br>";

$varsayilanGostericiElemani= current($isimler);
echo "Dizinin Varsayılan Gösterici Konumunundaki Eleman Değeri " . $varsayilanGostericiElemani . "<br>";



/*Reset */
echo " <br><br><br>Reset<br>";
reset($isimler);

$varsayilanGosterici= key($isimler);
echo "Dizinin Varsayılan Gösterici Konumunundaki Anahtar Değeri " . $varsayilanGosterici ."<br>";

$varsayilanGostericiElemani= current($isimler);
echo "Dizinin Varsayılan Gösterici Konumunundaki Eleman Değeri " . $varsayilanGostericiElemani . "<br>";

?>


<br><br>
<p>************************************************************************</p>
<h3>Dizilerde Explode</h3>
<hr>
<?php 
echo $metin="parça1,parça2,parça3,parça4";

$yenidizi=explode(",", $metin); //String parçalama işlemi

echo "<pre>";
print_r($yenidizi);
echo "</pre>";
echo "<br><br>";


/*Şartlı diziye dönüştürme*/

echo $takimlar= "Fener,Galata,Beşiktaş,Ankara Gücü, Eskişehir Spor, Akhisar Spor";
$yeniDizi= explode(",", $takimlar,3); //Toplamda 3 eleman olacak şekilde böler.

echo "<pre>";
print_r($yeniDizi);
echo "</pre>";
echo "<br><br>";


/*Şartlı diziye dönüştürme*/

echo $takimlar= "Fener,Galata,Beşiktaş,Ankara Gücü, Eskişehir Spor, Akhisar Spor";
$yeniDizi= explode(",", $takimlar,-3); //Belirtilen sayı kadar sondan elemanı siler.

echo "<pre>";
print_r($yeniDizi);
echo "</pre>";
echo "<br><br>";
?>



<br><br>
<p>************************************************************************</p>
<h3>Dizilerde Implode</h3>
<hr>
<?php 

$isimler=array("Mehmet","Arif","Hakkı","Selim","Kadir");

echo "<pre>";
print_r($isimler);
echo "</pre>";

echo $metin=implode(" , ", $isimler);

?>


<br><br>
<p>************************************************************************</p>
<h3>Dizilerde List</h3>
<hr>
<?php 

$renkler=array("yesil","mavi", "gri", "pembe", "eflatun");
echo "<pre>";
print_r($renkler);
echo "</pre>";

list($bir,$iki,$uc,$dort,$bes)= $renkler;
echo $bir ."<br>";
echo $iki ."<br>";
echo $uc ."<br>";
echo $dort ."<br>";
echo $bes ."<br>";


/*Kullanılmayacak Değerler Boş Geçilebilir.*/
$renkler=array("yesil","mavi", "gri", "pembe", "eflatun");
echo "<pre>";
print_r($renkler);
echo "</pre>";

list($bir, , ,$dort,$bes)= $renkler;
echo $bir ."<br>";
echo $dort ."<br>";
echo $bes ."<br>";

/*Çok boyutlu dizilerde değişkene atama.*/
$renkler=array("yesil","mavi",array( "gri", "pembe"), "eflatun");
echo "<pre>";
print_r($renkler);
echo "</pre>";

list($bir, ,$dizi,$son)= $renkler;
echo $bir ."<br>";
print_r($dizi);
echo "<br>";
echo $son ."<br>";

/*Çok boyutlu dizilerde değişkene atama. yol -2*/
$renkler=array("yesil","mavi",array( "gri", "pembe",array("roman","hikaye")), "eflatun");
echo "<pre>";
print_r($renkler);
echo "</pre>";

list($a1,$a2,list($b1,$b2,list($c1,$c2)),$a3)= $renkler;
echo $a1 ."<br>";
echo $a2 ."<br>";
echo $b1 ."<br>";
echo $b2 ."<br>";
echo $c1 ."<br>";
echo $c2 ."<br>";
echo $a3 ."<br>";

?>


















</body>
</html>