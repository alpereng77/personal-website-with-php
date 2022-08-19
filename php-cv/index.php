<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"><!--<![endif]-->

<!-- Mirrored from jponttuset.cat/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 09:41:18 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<title>Furkan Işık</title>
<meta name="description" content="Furkan IŞIk's website">
<!-- Twitter Cards -->
	
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:image" content=
			
				"idiocracy/jpeg/trees.jpg"
			
		>
	
	<meta name="twitter:title" content="furkan ışık">
	<meta name="twitter:description" content="furkan ışık's website">
	<meta name="twitter:creator" content="@furkanozkose74">


<!-- Open Graph -->
<meta property="og:locale" content="en_US">
<meta property="og:type" content="article">
<meta property="og:title" content="furkan ışık">
<meta property="og:description" content="furkan ışık's website">
<meta property="og:site_name" content="furkan ışık's website">



<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google Webfonts -->
<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700|PT+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
<link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet' type='text/css'>
<!-- For all browsers -->
<link rel="stylesheet" href="assets/css/mainmin.css" />
<link rel="stylesheet" href="assets/academicons.css" />

<meta http-equiv="cleartype" content="on">



<!-- Modernizr -->
<script src="assets/js/vendor/modernizr-2.7.1.custom.min.js"></script>

<!-- Icons -->
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">

<link rel="shortcut icon" href="images/favicon-16x16.png">
<link rel="shortcut icon" href="favicon.html">

<!-- 144x144 (precomposed) for iPad 3rd and 4th generation -->
<link rel="furkan" sizes="192x192" href="images/furkan.png">

</head>

<body class="page">
<?php 			
				$baglanti_an = mysqli_connect("localhost","root","","furkan");	
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
<div class="navigation-wrapper">
	<div class="site-name">
		<a href="index.php?anasayfa=anasayfa"><?php echo "$ana_web_ismi";?></a>
	</div><!-- /.site-name -->
	<div class="top-navigation">
		<nav role="navigation" id="site-nav" class="nav">
		    <ul>
		        
				<li><a href="index.php?anasayfa=cv" >Curriculum</a></li>
		        
				<li><a href="index.php?anasayfa=yayinlar" >Publications</a></li>
		        
				<li><a href="index.php?anasayfa=egitim" >Teaching</a></li>
		        
				<li><a href="index.php?anasayfa=photo" >Photography</a></li>
				<li><a href="idiocracy/gtk10vuu.php" >Login</a></li>
		        
		    </ul>
		</nav>
	</div><!-- /.top-navigation -->
</div><!-- /.navigation-wrapper -->


  <div class="image-wrap">
  <img src=
    
      "idiocracy/jpeg/trees.jpg"
    
  alt="DENEME">
  
  </div><!-- /.image-wrap -->


<div id="main" role="main">
  <div class="article-author-side">
    
	<img src="idiocracy/jpeg/furkan.jpg" class="bio-photo" alt="furkan ışık biography photo"></a>
	<h3>
			 
			<?php
				echo "<h3>".$ana_kullanici_ismi."</h3>"; 
				echo "<p>" . $ana_kendimiz . "</p>";
				mysqli_close($baglanti_an);
			?>

	</h3>
<a href="<?php echo $ana_twitter; ?>" class="author-social" target="_blank"><i class="fab fa-twitter-square"></i> Twitter</a>
<a href="<?php echo $ana_scholar; ?>" class="author-social" target="_blank"><i class="ai ai-google-scholar-square"></i> G. Scholar</a>
<a href="<?php echo $ana_linkedin; ?>" class="author-social" target="_blank"><i class="fab fa-linkedin-square"></i> LinkedIn</a>


  </div>
    
  <?php

		if(isset($_GET["anasayfa"]))
					{
						switch($_GET['anasayfa'])
							{     
								case 'anasayfa': 
										include('anasayfa.php');    
									break;
								case 'cv': 
										include('cv.php');    
									break;
								case 'yayinlar': 
										include('yayinlar.php');    
									break;
								case 'egitim': 
										include('egitim.php');    
									break;
								case 'photo': 
										include('photo.php');    
									break;
								
								default: 
										include('anasayfa.php');
									break;
							}
					}
					else
					{
						include('anasayfa.php');
					}
		?>
  
  

</div><!-- /#index -->

<div class="footer-wrap">
  <footer>
    <span align="center">&copy; 2022 furkan ışık. Bartın University</span>

  </footer>
</div><!-- /.footer-wrap -->

<script src="../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="assets/js/scripts.min.js"></script>

<!-- Asynchronous Google Analytics snippet -->
<script>
  var _gaq = _gaq || [];
  var pluginUrl = 
 '../www.google-analytics.com/plugins/ga/inpage_linkid.js';
  _gaq.push(['_require', 'inpage_linkid', pluginUrl]);
  _gaq.push(['_setAccount', 'UA-52736040-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

          

</body>

</html>