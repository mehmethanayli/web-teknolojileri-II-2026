
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>
	<meta http-equiv='Content-Language' content='tr'>
	<meta charset='utf-8'>
	<title>Php Dersleri</title>
</head>

<body>
	Çok Boyutlu Diziler:
	<hr>

	<?php 

	$degerler= array("Volkan", "Mehmet" , array("Mavi","Yeşil","Mavi","Siyah", array("masa","sıra","sehpa") ),"Ahmet", "Arif");

	echo "<pre>";
	print_r($degerler);
	echo "</pre>";

	echo "1.Boyuttaki Elemana Erişim: " . $degerler[0] . "<br>" ;
	echo "1.Boyuttaki Elemana Erişim: " . $degerler[4] . "<br>";
	echo "2.Boyuttaki Elemana Erişim: " . $degerler[2][0] . "<br>";
	echo "2.Boyuttaki Elemana Erişim: " . $degerler[2][2] . "<br>";
	echo "3.Boyuttaki Elemana Erişim: " . $degerler[2][4][0] . "<br>";
	echo "3.Boyuttaki Elemana Erişim: " . $degerler[2][4][1] . "<br>";

	echo "<pre>";
	print_r($degerler[2][4]);
	echo "</pre>";


	?>

	Çok Boyutlu Anahtarlı Diziler:
	<hr>
	<?php 

	$degerler2= array("Dizi1a" => "Volkan", "Dizi1b" => "Mehmet" , "Dizi2"=> array("Mavi","Yeşil","Mavi","Siyah", "Dizi3" => array("masa","sıra","sehpa") ),"Ahmet", "Arif");
	echo "<pre>";
	print_r($degerler2);
	echo "</pre>";

	echo $degerler2["Dizi1a"] . "<br>";
	echo $degerler2["Dizi2"][0] . "<br>";
	echo $degerler2["Dizi2"]["Dizi3"][0];

	?>


	Çok Boyutlu Anahtarlı Karmaşık Diziler:
	<hr>
	<?php 
	$market= array(	"bim"=> "BİM", 
						"BimSubeler"=> array(
							"İzmir",
							"Manisa", 
								"ilce"=> array("Akhisar"),

							"Aydın", 
								"ilce" => array(
											"Efeler", 
												"semt1" => array(
													"Girne" => array(1,2,3,4),
													"Zafer"=>array(1,2,3,4)),	
											"Nazilli",
												"semt2"=>array(
													"uzuncarsi",
													"yesil"))), 
				 	"A101"=> "A101", 
				 		"A101Subeler"=> array(
							"İzmir",
							"Manisa", 
								"ilce"=> array("UluCami"),

							"Aydın", 
								"ilce" => array(
											"Girne",	
											"MimarSinan")), 
				 	"Pekdemir"=> "Pekdemir", 
				 		"PekdemirSubeler"=> array(
							"İzmir",
							"Manisa", 
								"ilce"=> array("UluCami"),

							"Aydın", 
								"ilce" => array(
											"Girne",	
											"MimarSinan")));

	echo "<pre>";
	print_r($market);
	echo "</pre>";

	echo $market["BimSubeler"]["ilce"]["semt1"]["Girne"][3];
	?>

</body>
</html>