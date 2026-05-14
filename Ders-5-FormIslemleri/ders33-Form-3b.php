<!DOCTYPE html>
<html>

<head>
	<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>
	<meta http-equiv='Content-Language' content='tr'>
	<meta charset='utf-8'>
	<title>Php Dersleri</title>
</head>

<body>

	<?php 

	if (isset($_POST['form1'])) {
/*		$adsoyad	=$_POST["adsoyad"];
		$email		=$_POST["email"];
		$tel 		=$_POST["tel"];
		$cinsiyet	=$_POST['cinsiyet'];
		$yas		=$_POST["yas"];


		echo $adsoyad ."<br>";
		echo $email ."<br>";
		echo $tel ."<br>";
		echo $cinsiyet ."<br>";
		echo $yas ."<br>";
*/



		$formVerileri = $_POST;
		echo "<pre>";
		print_r($formVerileri);
		echo "<pre>";


		foreach ($formVerileri as $key => $value) {
			echo "$key --- $value <br>";
		}

	}


	?>



</body>
</html>