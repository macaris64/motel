<?php
	include 'header.php';
	include 'C:\xampp\htdocs\macarhoteltemplate\web\nedmin\netting\baglan.php';
	
	
?>
		<div class="banner-info">
			<script src="js/responsiveslides.min.js"></script>
			<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: false,
										nav: false,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
			</script>
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-text">
							<h3>HOŞGELDİNİZ</h3>
							<h4>EN UYGUN FİYATLARLA MÜKEMMEL HİZMET</h4>
						</div>
					</li>
					<li>
						<div class="banner-text">
							<h3>HOŞGELDİNİZ</h3>
							<h4>GÜZEL BİR TATİLİ <br>HAKETMEDİNİZ Mİ?</h4>
						</div>
					</li>
					<li>
						<div class="banner-text">
							<h3>HOŞGELDİNİZ</h3>
							<h4>HAYDİ OTELLERİ <br> 'LUMGOO'LA' ! </h4>
						</div>
					</li>
				</ul>
			</div>
		</div>
		
		<<div class="banner-bottom">
			<div class="droop-down">
			 <form action="search.php" method="post">
				<div class="droop">
					<div class="sort-by">
						<select class="sel" name="otel">
						
							<option value="">OTELİNİZİ SEÇİN</option>
								<?php
									$otelsor=$db->query("SELECT otel_adi FROM otel") -> fetchAll(PDO::FETCH_ASSOC);
									foreach($otelsor as $row)
									{ 
								?>
									<option value="<?php echo $row['otel_adi'] ?>"><?php echo $row['otel_adi'] ?></option>
									
								<?php	
									
									}
							
								?>
							
						</select>
					</div>
				</div>
				<div class="radio-btns">
					<div class="bars">		
                       	 			    
					</div>
				</div>
				<div class="search">
							<input type="submit" value="LUMGOO'LA">
				</div>
				</form>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->
<!-- banner-pos -->
<br><br><br><br><br><br>	
<div class="banner-pos" style="background-color:darkgray">
	<div class="container">
		<div class="banner-pos-grids">
			
			<div class="ban-pos-gridone l-grids">
				<div class="ban-pos-info l-grids">
					<figure class="effect-bubba">
							<a href="uyegiris.php"><img src="images/6.jpg" alt=""/>
							<figcaption>
								
								<h4>KULLANICI GİRİŞİ</h4>
								<p>Sizi çok özledik. Giriş yapın ve ayrıcalıklardan faydalanmaya devam edin.</p>	
							</figcaption></a>			
					</figure>
				</div>
			</div>
			
			<div class="ban-pos-gridone l-grids">
				<div class="ban-pos-info l-grids">
					<figure class="effect-bubba">
							<img src="images/5.jpg" alt=""/>
							<a href="sahipgiris.php">
							<figcaption>
								<h4>İŞLETME GİRİŞİ</h4>
								<p>İşletme sahibiyseniz ve otelinizi takip etmek istiyorsanız , sizi buraya alalım !</p>
								</figcaption></a>	
					</figure>
				</div>	
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php
	include 'footer.php';
?>