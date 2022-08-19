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

<div class="baslik" align="center">Yayın Ekleme</div>


<form action="" method= "post">


<div class="listele">
<li class="form_baslik">Yayın Adı</li>  <Textarea class="f_4" name="makale_adi" type="textarea" ></textarea>
</div>

<div class="listele">
<li class="form_baslik">Yazarların Adları</li>  <Textarea class="f_4" name="yazar_adi" type="textarea" ></textarea>
</div>

<div class="listele">
<li class="form_baslik">Yayınlandığı Yer</li>  <Textarea class="f_4" name="dergi_adi" type="textarea" ></textarea>
</div>

<div class="listele">
<li class="form_baslik">Abstract</li>  <Textarea class="f_4" name="makale_abstract" type="textarea" ></textarea>
</div>

<div class="listele">
<li class="form_baslik">Keywords</li>  <Textarea class="f_4" name="makale_keywords" type="textarea" ></textarea>
</div>


<div class="listele">
<li class="form_baslik"></li>  
<input type="submit" name="kaydet_makale" value="Makale Ekle" class="submit"  >
<input type="submit" name="kaydet_bildiri" value="Bildiri Ekle" class="submit"  >
</div>
</form>
<?php

if(isset($_POST["kaydet_makale"]))
			{
				//$baglanti = $_POST['baglanti'];
				$makale_adi = $_POST['makale_adi'];
				$yazar_adi = $_POST['yazar_adi'];
				$dergi_adi = $_POST['dergi_adi'];
				$makale_abstract = $_POST['makale_abstract'];
				$makale_keywords = $_POST['makale_keywords'];
			function SqlBaglanti()
			{ 
				$baglanti = mysqli_connect("localhost","root","","furkan");
				return $baglanti;
			} 
			if (SqlBaglanti())
				{ 	
				
				mysqli_query(SqlBaglanti(),"Insert INTO makale
						   (makale_adi , yazar_adi , dergi_adi, makale_abstract, makale_keywords) 
					VALUES ('$makale_adi' , '$yazar_adi' , '$dergi_adi', '$makale_abstract', '$makale_keywords' )"); 
			}
			}
			

				
		if(isset($_POST["kaydet_bildiri"]))
			{
				//$baglanti = $_POST['baglanti'];
				$makale_adi = $_POST['makale_adi'];
				$yazar_adi = $_POST['yazar_adi'];
				$dergi_adi = $_POST['dergi_adi'];
				$makale_abstract = $_POST['makale_abstract'];
				$makale_keywords = $_POST['makale_keywords'];
				
				
			function SqlBaglanti()
			{ 
				$baglanti = mysqli_connect("localhost","root","","furkan");
				return $baglanti;
			} 
			if (SqlBaglanti())
				{ 	
				
				mysqli_query(SqlBaglanti(),"Insert INTO bildiri
						   (makale_adi , yazar_adi , dergi_adi, makale_abstract, makale_keywords) 
					VALUES ('$makale_adi' , '$yazar_adi' , '$dergi_adi', '$makale_abstract', '$makale_keywords' )"); 
			}
			}
			

		}	
				
?>


	  

</body>
</html>