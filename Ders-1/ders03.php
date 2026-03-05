<!DOCTYPE html>
<html>

<head>
	<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>
	<meta http-equiv='Content-Language' content='tr'>
	<meta charset='utf-8'>
	<title>Php Dersleri</title>
</head>

<body>
	Global Değişkenler:
	<h3>$_SERVER Örneği <br></h3><hr>

	

	<?php 

//Sunucuyada aşağıdaki değerlerden değişiklikler olabilir veya bazıları kapalı olabilir.

echo '$_SERVER["PHP_SELF"] --> ' . $_SERVER['PHP_SELF'].'<br/><br/>'; //Çalışma dosyanın yolunu Verir.Domain dahil değildir.
echo '$_SERVER["GATEWAY_INTERFACE"] --> ' 	. $_SERVER['GATEWAY_INTERFACE'].'<br/><br/>';
echo '$_SERVER["SERVER_ADDR"] --> ' 		. $_SERVER['SERVER_ADDR'].'<br/><br/>'; //Server ıp localde :: gösterir
echo '$_SERVER["SERVER_NAME"] --> ' 		. $_SERVER['SERVER_NAME'].'<br/><br/>';
echo '$_SERVER["SERVER_SOFTWARE"] --> ' 	. $_SERVER['SERVER_SOFTWARE'].'<br/><br/>';
echo '$_SERVER["SERVER_PROTOCOL"] --> ' 	. $_SERVER['SERVER_PROTOCOL'].'<br/><br/>';
echo '$_SERVER["REQUEST_METHOD"] --> ' 		. $_SERVER['REQUEST_METHOD'].'<br/><br/>';
echo '$_SERVER["REQUEST_TIME"] --> ' 		. $_SERVER['REQUEST_TIME'].'<br/><br/>';
echo '$_SERVER["REQUEST_TIME_FLOAT"] --> ' 	. $_SERVER['REQUEST_TIME_FLOAT'].'<br/><br/>';
echo '$_SERVER["QUERY_STRING"] --> ' 		. $_SERVER['QUERY_STRING'].'<br/><br/>'; //Sorgu dizesini görüntüler
echo '$_SERVER["DOCUMENT_ROOT"] --> ' 		. $_SERVER['DOCUMENT_ROOT'].'<br/><br/>'; //Kök dizin bilgisini verir.
echo '$_SERVER["HTTP_ACCEPT"] --> ' 		. $_SERVER['HTTP_ACCEPT'].'<br/><br/>'; //Başlık içeriğini gönderir.
echo '$_SERVER["HTTP_ACCEPT_ENCODING"] --> '. $_SERVER['HTTP_ACCEPT_ENCODING'].'<br/><br/>'; //Kodlama 
echo '$_SERVER["HTTP_ACCEPT_LANGUAGE"] --> '. $_SERVER['HTTP_ACCEPT_LANGUAGE'].'<br/><br/>';//Lisan bilgisi
echo '$_SERVER["HTTP_CONNECTION"] --> ' 	. $_SERVER['HTTP_CONNECTION'].'<br/><br/>'; //Keep alive sürekli bağlı kal
echo '$_SERVER["HTTP_HOST"] --> ' 			. $_SERVER['HTTP_HOST'].'<br/><br/>';//Host başlığı bilgisini döndürür. Domain ismini gösterir.
echo '$_SERVER["HTTP_REFERER"] --> ' 		. $_SERVER['HTTP_REFERER'].'<br/><br/>'; //kişinin geldiği yerin takip edilmesini sağlar.
echo '$_SERVER["HTTP_USER_AGENT"] --> ' 	. $_SERVER['HTTP_USER_AGENT'].'<br/><br/>';//Kullanıcı tarayıcısı bilgisini döner 
echo '$_SERVER["HTTPS"] --> ' 				. $_SERVER['HTTPS'].'<br/><br/>';
echo '$_SERVER["REMOTE_ADDR"] --> ' 		. $_SERVER['REMOTE_ADDR'].'<br/><br/>';//Kullanıcını Ip adresini Verir
echo '$_SERVER["REMOTE_HOST"] --> ' 		. $_SERVER['REMOTE_HOST'].'<br/><br/>'; // Siteye giriş yapan bilgisayarın ismini almak için kullanılır. Httpd.conf dosyası içerisinde HostnameLookups on ifadesi mutlaka eklenmelidir.
echo '$_SERVER["REMOTE_PORT"] --> ' 		. $_SERVER['REMOTE_PORT'].'<br/><br/>';//Kullanılan port
echo '$_SERVER["SCRIPT_FILENAME"] --> ' 	. $_SERVER['SCRIPT_FILENAME'].'<br/><br/>';
echo '$_SERVER["SERVER_ADMIN"] --> ' 		. $_SERVER['SERVER_ADMIN'].'<br/><br/>';
echo '$_SERVER["SERVER_PORT"] --> ' 		. $_SERVER['SERVER_PORT'].'<br/><br/>';
echo '$_SERVER["SERVER_SIGNATURE"] --> ' 	. $_SERVER['SERVER_SIGNATURE'].'<br/><br/>';
echo '$_SERVER["SCRIPT_NAME"] --> ' 		. $_SERVER['SCRIPT_NAME'].'<br/><br/>';
echo '$_SERVER["REQUEST_URI"] --> ' 		. $_SERVER['REQUEST_URI'].'<br/><br/>';

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

?>



</body>
</html>