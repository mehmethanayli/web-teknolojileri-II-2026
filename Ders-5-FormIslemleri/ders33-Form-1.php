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
Aynı sayfada birden fazla form gönderilecek ise mutlaka formdaki butona name değeri verilmelidir. Name üzerinden forma ulaşmak en güzelidir.


-->

<br><br>
<p>************************************************************************</p>
<h3>Form İşlemleri </h3>
<hr>

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


<br><br>
<p>************************************************************************</p>
<h3>Formlarda Dizi Kullanımı </h3>
<hr>

<form method="POST" action="ders33-Form-1b.php">

	Adınız Soyadınız: <input type="text" name="adsoyad"><br>

	Hobileriniz:	
	<input type="checkbox" name="hobiler[]" value="kitap">Kitap Okumak <br>
	<input type="checkbox" name="hobiler[]" value="resim">Resim Yapmak <br>
	<input type="checkbox" name="hobiler[]" value="muzik">Müzik Dinlemek <br>	
	<input type="checkbox" name="hobiler[]" value="gezi">Gezmek <br>

	<input type="submit" value="GÖNDER" name="form2">

</form>


<br><br>
<p>************************************************************************</p>
<h3>Formlarda Dosya Gönderimi İşlemi </h3>
<hr>
<!-- 
	move_uploaded_file(): 	Herhangi bir dosyayı belirtilecek olan dizine yüklemek için kullanılır.	

	Not : Dosya yüklerken GET metodu KULLANILAMAZ.
	Not : Dosya gönderilecekse mutlaka enctype="multipart/form-data" özelliği eklenmelidir.
-->

<form method="POST" action="ders33-Form-1b.php"  enctype="multipart/form-data"> 


	Dosyanızı Seçiniz : <input type="file" name="dosya"><br>


	<input type="submit" value="GÖNDER" name="form3">
	<img src="" style="" width="250px">
</form>


<br><br>
<p>************************************************************************</p>
<h3>Formlarda Çoklu Dosya Gönderimi İşlemi </h3>
<hr>

<form method="POST" action="ders33-Form-1b.php"  enctype="multipart/form-data"> 


	Dosyalarınızı Seçiniz : <input type="file" name="dosyalar[]" multiple><br>


	<input type="submit" value="GÖNDER" name="form4">

	<img src="" style="" width="250px">
</form>


</body>
</html>