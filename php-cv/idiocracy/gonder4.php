<?php
    ob_start();
   session_start();
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

<?php
if(isset($_FILES['dosya']))
{
	$hata = $_FILES['dosya']['error'];
	if($hata != 0) 
		{
			  echo 'Lütfen yükleyeceğiniz dosyayı seçiniz.';
			  header("Refresh: 1; url=index.php?icerik=idiocracy_anasayfa");
		} 
	else 
		{
			$boyut = $_FILES['dosya']['size'];
			if($boyut > (1024*1024*15))
			{
				echo 'Dosya 15MB den büyük olamaz.';
				header("Refresh: 1; url=index.php?icerik=idiocracy_anasayfa");
			} 
			else 
				{
					$tip = $_FILES['dosya']['type'];
					$isim = $_FILES['dosya']['name'];
					$uzanti = explode('.', $isim);
					$uzanti = $uzanti[count($uzanti)-1];
					if($uzanti != 'jpg' and $uzanti != 'jpeg') 
						{
							echo 'Yanlızca JPG dosyaları gönderebilirsiniz.';
							header("Refresh: 1; url=index.php?icerik=idiocracy_anasayfa");
						} 
					else 
						{
							$dosya = $_FILES['dosya']['tmp_name'];
							copy($dosya, "jpeg/trees.jpg");
							
							echo 'Dosyanız upload edildi!';
							header("Refresh: 1; url=index.php?icerik=idiocracy_anasayfa");
						}
				}
		}
}

?>
<?php

	  }
 ?>
</body>