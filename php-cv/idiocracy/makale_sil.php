<?php
			include ("dbbaglantisi.php");
			 
			$makale_id = $_GET["id"];


			$baglanti_an = mysqli_connect("localhost","root","","furkan");	
			$delete = mysqli_query($baglanti_an,"DELETE FROM makale where makale_id=$makale_id"); 
			 
			if ($delete)
			{
				header('Location: ../idiocracy/index.php?icerik=idiocracy_yayinlar_guncelleme');
			}
			else
			{
				echo "Hata";
			}
	  
?>


