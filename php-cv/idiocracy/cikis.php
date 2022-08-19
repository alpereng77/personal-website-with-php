
<?php session_start();?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta charset="utf-8"/>
<title>furkan Işık'nin Kişisel Web Sayfası</title>
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body> 


<?php 

   
    session_destroy();
    unset($_SESSION);
	$_SESSION = array();
	$_SESSION["panel"]=false;
	header("Refresh: 5; url=gtk10vuu.php");
	
?>

</body>
