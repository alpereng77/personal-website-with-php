<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yönetim Paneli</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
	
session_start();
ob_start();

if(!isset($_SESSION["panel"]))
{
?>
<form action="giris_kontrol.php" method="post" name="giris_formu" class="giris_formu" id="giris_formu">
<div id="site">
<div id="sitebosluk"></div>
<div id="ortainput">
<div id="kullaniciadi"><label>Kullanıcı Adı</label>
<div id="kullaniciadiinput"><input name="kullaniciadi" size="20px" type="text" /></div>
</div>

<div id="sifre">
<label>Şifre</label>
<div id="sifreinput"><input type="password" name="sifre" size="20px" /></div>
</div>
<div id="alt">
<div id="hata"><img src="images/hata.png" alt="" /> <a>Hata :</a> lütfen kullanıcı adı ve şifrenizi kontol edin</div>
<div id="girisyap"><input type="submit" /></div>
<?php
   }
else
{ 
 ?>  
          
  		<font bgcolor=white color=red><b><center><?php echo str_repeat("<br>", 8); echo "Hoşgeldin ".$_SESSION["kullaniciadi"]; ?></center></b> </font>	
		
		<?php 
		echo str_repeat("<br>", 2)."<center>Anasayfaya Yönlendiriliyorsunuz... Lütfen bekleyiniz.</center>";
		header("Refresh: 5; url= index.php?icerik=idiocracy_anasayfa");?>
 
    <?php } ?>
</div>
</div>
</div>
</form>
</body>
</html>
