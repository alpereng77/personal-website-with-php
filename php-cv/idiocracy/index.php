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

<?php

if(isset($_GET["icerik"]))
			{
				switch($_GET['icerik'])
					{     
						case 'idiocracy_anasayfa': 
								include('idiocracy_anasayfa.php');    
							break;
						case 'idiocracy_cv': 
								include('idiocracy_cv.php');    
							break;
						case 'idiocracy_yayinlar': 
								include('idiocracy_yayinlar.php');    
							break;
						case 'idiocracy_yayinlar_guncelleme': 
								include('idiocracy_yayinlar_guncelleme.php');    
							break;
						case 'idiocracy_dokuman': 
								include('idiocracy_dokuman.php');    
							break;
						case 'idiocracy_sifre': 
								include('idiocracy_sifre.php');    
							break;
						case 'makale_guncelle': 
								include('makale_guncelle.php');    
							break;
						
						default: 
								echo "Lütfen geçerli bir menü seçiniz!";
							break;
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

</div>
</br>
</br>
</body>
</html>
<?php

	  }
	  ?>