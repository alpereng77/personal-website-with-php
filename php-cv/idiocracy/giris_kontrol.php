
<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta charset="utf-8"/>
<title>Furkan IŞIK</title>
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>

<?php
ob_start();
session_start();
$retVal  = mysqli_connect("localhost","root","","furkan");


$kullaniciadi = mysqli_real_escape_string($retVal,$_POST["kullaniciadi"]);
$sifre = mysqli_real_escape_string($retVal,$_POST["sifre"]);

$sorgu = mysqli_query($retVal,"SELECT * FROM panel WHERE kullaniciadi='{$kullaniciadi}' and sifre='{$sifre}'") or die (mysqli_error());

$uye_varmi = mysqli_num_rows($sorgu);
if($uye_varmi > 0)
{
$_SESSION["panel"] = "true";
$_SESSION["kullaniciadi"] = $kullaniciadi;
$_SESSION["sifre"] = $sifre;

setcookie("kullaniciadi",$kullaniciadi,time()+60*60*24);
setcookie("sifre",$sifre,time()+60*60*24);
header("Refresh: 1; url=gtk10vuu.php");
}

else
{
	echo str_repeat("<br>", 8)."<center>Hatalı kullanıcı adı veya şifre</center>";
header("Refresh: 1; url=gtk10vuu.php");

}
mysqli_close($retVal);
ob_end_flush();
?>
</body>