<?php
   ob_start();
   //session_start();
   include_once("dbbaglantisi.php");

   if(!sqlConnect())
   {
		
		echo "HATA! - Database Bağlantısını Kontrol ediniz.";
		exit();
		
   }
   if(!isset($_SESSION["panel"]))
       {
	   echo "Yetkisiz Giriş..."; ?> </br>
	   <?php echo "Anasayfaya Yönlendiriliyorsunuz...";?></br>
	   <?php echo "Lütfen bekleyiniz...";
		header("Refresh: 3; url=../index.php?anasayfa=anasayfa");
		//session_destroy();
       }
	  else
	  {
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="tr" lang="tr"> 
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>furkan'nin Kişisel Web Sayfası</title> 
    <link type="text/css" href="css/style.css" rel="stylesheet" /> 
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/vtip.js"></script>
	<link rel="stylesheet" type="text/css" href="css/vtip.css" />
</head>

<body>
<div class="baslik" align="center">Şifre Değiştirme</div>

<div class="listele">
<li class="form_baslik">Mevcut Kullanıcı Adı</li>  <input class="f_4" name="baslik" type="txt" >
</div>

<div class="listele">
<li class="form_baslik">Şifre</li>  <input class="f_4" name="baslik" type="txt" >
</div>

<div class="listele">
<li class="form_baslik">Yeni Kullanıcı Adı</li>  <input class="f_4" name="baslik" type="txt" >
</div>

<div class="listele">
<li class="form_baslik">Şifre Güncelleme</li>  <input class="f_4" name="baslik" type="txt" >
</div>

<div class="listele">
<li class="form_baslik">Şifre Doğrulama</li>  <input class="f_4" name="baslik" type="txt" >
</div>


<div class="listele">
<li class="form_baslik"></li>  
<input type="reset" class="reset"  >
<input type="submit" class="submit"  >
</div>
<?php

	  }
 ?>
</body>
</html>