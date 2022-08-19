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
<article>

<div class="baslik" align="center">Makalelerim</div>
<?php
$baglanti_an = mysqli_connect("localhost","root","","furkan");	
$bilgi= mysqli_query($baglanti_an,"SELECT * FROM makale");
while ($satirlar=mysqli_fetch_array($bilgi))
	{	
		$makale_id = $satirlar['makale_id'];
		$makale_adi = $satirlar['makale_adi'];
		$yazar_adi = $satirlar['yazar_adi'];
		$dergi_adi = $satirlar['dergi_adi'];
		$makale_abstract = $satirlar['makale_abstract'];
		$makale_keywords = $satirlar['makale_keywords'];

		echo "
		<div class='listele'>
			<table border='0'>
				<tr>
					<td>$makale_id</td><td width='500'>$makale_adi</td>
					<td><a href='makale_guncelle.php?id=$makale_id' class='submit'>Güncelle</td>
					<td><a href='makale_sil.php?id=$makale_id' class='submit'>Sil</td>
				</tr>
			</table>
		<br>
		</div>
		  ";
	}
?>


<br>

<div class="baslik" align="center">Bildirilerim</div>
<?php
$baglanti_an = mysqli_connect("localhost","root","","furkan");	
$bilgi= mysqli_query($baglanti_an,"SELECT * FROM bildiri");
while ($satirlar=mysqli_fetch_array($bilgi))
	{	
		$makale_id = $satirlar['makale_id'];
		$makale_adi = $satirlar['makale_adi'];
		$yazar_adi = $satirlar['yazar_adi'];
		$dergi_adi = $satirlar['dergi_adi'];
		$makale_abstract = $satirlar['makale_abstract'];
		$makale_keywords = $satirlar['makale_keywords'];

		echo "
		<div class='listele'>
			<table border='0'>
				<tr>
					<td>$makale_id</td><td width='500'>$makale_adi</td>
					<td><a href='bildiri_guncelle.php?id=$makale_id' class='submit'>Güncelle</td>
					<td><a href='bildiri_sil.php?id=$makale_id' class='submit'>Sil</td>
				</tr>
			</table>
		<br>
		</div>
		  ";
	}
	  
	  

}
?>

</article>


</body>
</html>