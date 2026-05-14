<!DOCTYPE html>
<html>

<head>
	<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>
	<meta http-equiv='Content-Language' content='tr'>
	<meta charset='utf-8'>
	<title>Php Dersleri</title>
</head>

<body>
	Form İşlemleri :
	<hr>
<!-- 


-->

<br><br>
<p>************************************************************************</p>
<h3>Form İşlemleri </h3>
<hr>
<p>Get İsteği varsa formun değil sonucun gösterilmesi çalışması.</p>


<?php 

if (!$_GET) { ?>
	
	<form method="POST" action="ders33-Form-1b.php">

		Adınız Soyadınız: <input type="text" name="adsoyad"><br>

		Email Adresiniz: <input type="email" name="email"><br>

		Telefon: <input type="text" name="tel"><br>

		Cinsiyet: <input type="radio" name="cinsiyet" value="erkek"> Erkek <input type="radio" name="cinsiyet" value="kadın">Kadın<br>

		Yaşınız:<select name="yas"> 
			<option value="">Seçiniz...</option>
			<option value="33">33</option>
			<option value="34">34</option>
			<option value="35">35</option>
			<option value="36">36</option>
			<option value="37">37</option>

		</select><br>

		<input type="submit" value="GÖNDER" name="form1">

	</form>


	<?php  
} else {	

	$adsoyad	=$_POST["adsoyad"];
	$email		=$_POST["email"];
	$tel 		=$_POST["tel"];
	$cinsiyet	=$_POST['cinsiyet'];
	$yas		=$_POST["yas"];


	echo $adsoyad ."<br>";
	echo $email ."<br>";
	echo $tel ."<br>";
	echo $cinsiyet ."<br>";
	echo $yas ."<br>";

}


?>



</body>
</html>