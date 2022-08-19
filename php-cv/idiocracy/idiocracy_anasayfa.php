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
<?php
$baglanti_an = 	mysqli_connect("localhost","root","","furkan");		
				$bilgi= mysqli_query($baglanti_an,"SELECT * FROM anasayfa");
				while ($satirlar=mysqli_fetch_array($bilgi))
					{	//baglanti=furkan
						$ana_web_ismi = $satirlar['web_ismi'];
						$ana_baslik= $satirlar['baslik'];
						$ana_hakkimizda= $satirlar['hakkimizda'];
						$ana_kullanici_ismi = $satirlar['kullanici_ismi'];
						$ana_kendimiz= $satirlar['kisacakendimiz'];
						$ana_twitter= $satirlar['twitter'];
						$ana_scholar= $satirlar['scholar'];
						$ana_linkedin= $satirlar['linkedin'];
						$ana_google= $satirlar['google'];
						$ana_instagram= $satirlar['instagram']; 
					} 
?>

<body>

<div class="baslik" align="center">Genel Ayarlar Penceresi</div>
<div class="listele">
<li class="form_baslik">Banner Fotosu</li> <form action="gonder4.php" method="post" enctype="multipart/form-data">
   <input type="file" name="dosya" />
   <input type="submit" value="Gönder" />
</form>

<div class="listele">
<li class="form_baslik">Biografi Fotosu</li> <form action="gonder2.php" method="post" enctype="multipart/form-data">
   <input type="file" name="dosya" />
   <input type="submit" value="Gönder" />
</form>
</div>

<form action="" method= "post">
<div class="listele">
<li class="form_baslik">Web Sayfası ismi</li>  <input class="f_4" name="web_ismi" value="<?php echo "$ana_web_ismi";?>" type="txt" >
</div>

<div class="listele">
<li class="form_baslik">Başlık</li>  <input class="f_4" name="baslik" value="<?php echo "$ana_baslik";?>" type="txt" >
</div>

<div class="listele">
<li class="form_baslik">Hakkınızda</li>  <Textarea class="f_6" name="hakkimizda" type="txt" ><?php echo "$ana_hakkimizda";?></textarea>
</div>

<div class="listele">
<li class="form_baslik">Kullanıcı İsmi</li>  <Textarea class="f_5" name="kullanici_ismi" type="txt" ><?php echo "$ana_kullanici_ismi";?></textarea>
</div>

<div class="listele">
<li class="form_baslik">Kısaca Kendiniz</li>  <Textarea class="f_5" name="kisacakendimiz" type="txt" ><?php echo "$ana_kendimiz";?></textarea>
</div>

<div class="listele">
<li class="form_baslik">Twitter Hesabınız</li>  <Textarea class="f_4" name="twitter" type="textarea" ><?php echo "$ana_twitter";?></textarea>
</div>

<div class="listele">
<li class="form_baslik">G.Scholar Hesabınız</li>  <Textarea class="f_4" name="scholar" type="textarea" ><?php echo "$ana_scholar";?></textarea>
</div>

<div class="listele">
<li class="form_baslik">LinkedIn Hesabınız</li>  <Textarea class="f_4" name="linkedin" type="textarea" ><?php echo "$ana_linkedin";?></textarea>
</div>

<div class="listele">
<li class="form_baslik">Google+ Hesabınız</li>  <Textarea class="f_4" name="google" type="textarea" ><?php echo "$ana_google";?></textarea>
</div>

<div class="listele">
<li class="form_baslik">Instagram Hesabınız</li>  <Textarea class="f_4" name="instagram" type="textarea" ><?php echo "$ana_instagram";?></textarea>
</div>


<div class="listele">
<li class="form_baslik"></li>  
<input type="submit" name="kaydet_anasayfa" class="submit"  >
</div>
</form>
<?php

if(isset($_POST["kaydet_anasayfa"]))
			{
				//$baglanti = $_POST['baglanti'];
				$ana_web_ismi = $_POST['web_ismi'];
				$ana_baslik= $_POST['baslik'];
				$ana_hakkimizda= $_POST['hakkimizda'];
				$ana_kullanici_ismi = $_POST['kullanici_ismi'];
				$ana_kendimiz= $_POST['kisacakendimiz'];
				$ana_twitter= $_POST['twitter'];
				$ana_scholar= $_POST['scholar'];
				$ana_linkedin= $_POST['linkedin'];
				$ana_google= $_POST['google'];
				$ana_instagram= $_POST['instagram']; 
				//echo $ana_baslik;
				
			function SqlBaglanti()
			{ 
				$baglanti = mysqli_connect("localhost","root","","furkan");
				return $baglanti;
			} 
			if (SqlBaglanti())
				{ 	
				
				mysqli_query(SqlBaglanti(),"UPDATE anasayfa Set web_ismi='$ana_web_ismi', kullanici_ismi= '$ana_kullanici_ismi', baslik='$ana_baslik', linkedin='$ana_linkedin', hakkimizda='$ana_hakkimizda', kisacakendimiz='$ana_kendimiz', twitter='$ana_twitter', scholar='$ana_scholar', google='$ana_google', instagram='$ana_instagram'"); 
			    header("Refresh: 0");
			}
			}
			
			

		}	
				
?>
	  

</body>
</html>