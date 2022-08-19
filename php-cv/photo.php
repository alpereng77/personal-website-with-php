<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="justifiedGallery/justifiedGallery.min.css" />
	<script src="justifiedGallery/jquery.justifiedGallery.min.js"></script>

	<script src="swipebox/src/js/jquery.swipebox.js"></script>
	<link rel="stylesheet" href="swipebox/src/css/swipebox.css">
</head>
<article>
<div id="gallery">

	<?php
	
//$sayfa = $_GET['page'];
//$sayfa_limiti  = 25;
//if($sayfa == '' || $sayfa == 1){
// $sayfa1 = 0;
//}else{
 //$sayfa1 = ($sayfa * $sayfa_limiti) - $sayfa_limiti;
//}

$apiKey = "2e5a02acbc78b57e3e0ea33986233d36";
$userId = "162540232@N05";
$feedUrl = "https://api.flickr.com/services/rest/?method=flickr.people.getPublicPhotos&api_key={$apiKey}&user_id={$userId}&format=json&nojsoncallback=1";

$feed = file_get_contents($feedUrl);
$feed = json_decode($feed);

$photoStream = $feed->photos->photo;

foreach ($photoStream as $photo) {
	$photoUrl = "https://farm{$photo->farm}.static.flickr.com/{$photo->server}/{$photo->id}_{$photo->secret}_b.jpg";
	//echo "<a href="' . $photoUrl . '" class="swipebox" title="' . $title . '"><img src='{$photoUrl}' alt='{$photo->title}'></a>";
	$title = $photo->title;
	echo '<a href="' . $photoUrl . '"  title="' . $title . '"><img alt="' . $title . '" src="' . $photoUrl . '"></a>';	}

?>

</div>
</article>
<script>
	$('#gallery').justifiedGallery( {
		rowHeight: 100,
		lastRow: 'nojustify',
		rel: 'Portfolio',
		margins: 2
	});
	$(".swipebox").swipebox({
		loopAtEnd: false
	});
</script>

<style>
	body {
		margin: 0;
	}
	#gallery {
		background-color: white;
	}
</style>
