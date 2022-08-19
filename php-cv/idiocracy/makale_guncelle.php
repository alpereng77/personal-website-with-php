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

<!DOCTYPE html>

<html lang="tr"> 

<head> 

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>furkan'nin Kişisel Web Sayfası</title> 
    <link type="text/css" href="css/style.css" rel="stylesheet" /> 
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/vtip.js"></script>
	<link rel="stylesheet" type="text/css" href="css/vtip.css" />
</head>

<div class="enust">
<a href="index.php?icerik=idiocracy_anasayfa">Anasayfa</a>
<a href="../index.php">Siteye Git</a>
</div>
</div>
</div>



<div class="ustmenu">
<li class="cikis">
<a class="vtip" title="Sistemden Çıkış Yap" href="cikis.php">ÇIKIŞ</a>
</div>

<body>

</div>


<div class="blok">
<div class="sol_blok">


<li class="navigasyon" action="" method="post">
<a class="vtip" title="Anasayfa Ayarları" href="index.php?icerik=idiocracy_anasayfa"><img src="images/icon/1.png"></a>
<p>Anasayfa</p>
</li>

<li class="navigasyon">
<a class="vtip" title="CV Güncelle" href="index.php?icerik=idiocracy_cv"><img  src="images/icon/8.png"></a>
<p>CV</p>
</li>

<li class="navigasyon">
<a class="vtip" title="Yayınları Düzenle" href="index.php?icerik=idiocracy_yayinlar"><img  src="images/icon/7.png"></a>
<p>Yayın Ekleme</p>
</li>

<li class="navigasyon">
<a class="vtip" title="Yayınları Düzenle" href="index.php?icerik=idiocracy_yayinlar_guncelleme"><img  src="images/icon/7.png"></a>
<p>Yayın Güncelleme</p>
</li>

<li class="navigasyon">
<a class="vtip" title="Doküman Ekle" href="index.php?icerik=idiocracy_dokuman"><img  src="images/icon/3.png"></a>
<p>Doküman</p>
</li>

<li class="navigasyon">
<a class="vtip" title="Şifre Güncelleme" href="index.php?icerik=idiocracy_sifre"><img  src="images/icon/14.png"></a>
<p>Şifre İşlemleri</p>
</li>



<div class="temizle">
</div>
</div>
</div>

<div class="sag_blok">

<div class="baslik" align="center">Makale Güncelleme</div>


<form action="" method= "post">

<?php
				$makale_id = $_GET["id"];
				$baglanti_an = 	mysqli_connect("localhost","root","","furkan");		
				$bilgi= mysqli_query($baglanti_an,"SELECT * FROM makale where makale_id  = $makale_id");
				while ($satirlar=mysqli_fetch_array($bilgi))
					{	
						$makale_adi = $satirlar['makale_adi'];
						$yazar_adi= $satirlar['yazar_adi'];
						$dergi_adi= $satirlar['dergi_adi'];
						$makale_abstract = $satirlar['makale_abstract'];
						$makale_keywords = $satirlar['makale_keywords'];
					} 	
?>

<div class="listele">
<li class="form_baslik">Yayın Adı</li>  <Textarea class="f_4" name="makale_adi"  type="textarea" ><?php echo "$makale_adi";?></textarea>
</div>

<div class="listele">
<li class="form_baslik">Yazarların Adları</li>  <Textarea class="f_4" name="yazar_adi"  type="textarea" ><?php echo "$yazar_adi";?></textarea>
</div>

<div class="listele">
<li class="form_baslik">Yayınlandığı Yer</li>  <Textarea class="f_4" name="dergi_adi"   type="textarea" ><?php echo "$dergi_adi";?></textarea>
</div>

<div class="listele">
<li class="form_baslik">Abstract</li>  <Textarea class="f_4" name="makale_abstract"  type="textarea" ><?php echo "$makale_abstract";?></textarea>
</div>

<div class="listele">
<li class="form_baslik">Keywords</li>  <Textarea class="f_4" name="makale_keywords" type="textarea" ><?php echo "$makale_keywords";?></textarea>
</div>


<div class="listele">
<li class="form_baslik"></li>  
<input type="submit" name="kaydet_makale" value="Güncelle" class="submit"  >
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
					
					mysqli_query(SqlBaglanti(),"UPDATE makale Set makale_adi='$makale_adi', yazar_adi= '$yazar_adi', dergi_adi='$dergi_adi', makale_abstract='$makale_abstract', makale_keywords='$makale_keywords' where makale_id = $makale_id"); 
					header("Refresh: 0");
					}
			}
			
			
				
?>


</div>
</div>
</div>
<div class="temizle">
</div>



<div class="footer" align="center">
</br>
Copyrigt &copy furkan ÖZKÖSE'nin Kişisel Web Sayfası
</div>
</br>
</br>
</body>
</html>
<?php

	  }
	  ?>