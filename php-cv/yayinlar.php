
<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  text-align: justify;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
   text-align: justify;
}
</style>

<article>

<h1>Makaleler</h1>

<?php
												$baglanti_an = mysqli_connect("localhost","root","","furkan");	
												$bilgi= mysqli_query($baglanti_an,"SELECT * FROM makale");
												while ($satirlar=mysqli_fetch_array($bilgi))
													{	
														$makale_adi = $satirlar['makale_adi'];
														$yazar_adi = $satirlar['yazar_adi'];
														$dergi_adi = $satirlar['dergi_adi'];
														$makale_abstract = $satirlar['makale_abstract'];
														$makale_keywords = $satirlar['makale_keywords'];
														
															
														echo "		 <button class='accordion'>$makale_adi</button>
																			<div class='panel'>
																			<br>
																				<p><font color ='red'>AUTHORS : <font/><font color ='black'>$yazar_adi <font/></br></br><p><font color ='red'>JOURNAL NAME: <font/><font color ='black'> <em><strong>$dergi_adi</strong></em><font/><p></br> 
																				<strong>ABSTRACT</strong> </br>$makale_abstract</p>
																				<strong>Keywords:</strong>$makale_keywords														
																			</div>
																			<br>
																	
															 ";
													 }
												?>
												<br>
												
												<h1>Bildiriler</h1>

<?php
												$baglanti_an = mysqli_connect("localhost","root","","furkan");	
												$bilgi= mysqli_query($baglanti_an,"SELECT * FROM bildiri");
												while ($satirlar=mysqli_fetch_array($bilgi))
													{	
														$makale_adi = $satirlar['makale_adi'];
														$yazar_adi = $satirlar['yazar_adi'];
														$dergi_adi = $satirlar['dergi_adi'];
														$makale_abstract = $satirlar['makale_abstract'];
														$makale_keywords = $satirlar['makale_keywords'];
														
															
														echo "		 <button class='accordion'>$makale_adi</button>
																			<div class='panel'>
																			<br>
																				<p><font color ='red'>AUTHORS : <font/><font color ='black'>$yazar_adi <font/></br></br><p><font color ='red'>JOURNAL NAME: <font/><font color ='black'> <em><strong>$dergi_adi</strong></em><font/><p></br> 
																				<strong>ABSTRACT</strong> </br>$makale_abstract</p>
																				<strong>Keywords:</strong>$makale_keywords														
																			</div>
																			<br>
																	
															 ";
													 }
												?>


</article>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
