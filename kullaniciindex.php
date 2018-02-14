



<?php
	
	include 'C:\xampp\htdocs\macarhoteltemplate\web\nedmin\netting\baglan.php';
	
	
?>




<!DOCTYPE html>
<html>
<head>
<title>lumgoo</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classic Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/chocolat.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		
		
		
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Alex+Brush:regular:latin-ext">
              <style type='text/css'>
                     #warped {position: relative; display: block; width:282px; height:208px;}

                     #warped>span[class^=w]:nth-of-type(n+0){display:block; position:absolute;
                     -moz-transform-origin:50% 100%; -webkit-transform-origin:50% 100%; -o-transform-origin:50%
                     100%; -ms-transform-origin:50% 100%; transform-origin:50% 100%; }

                     #warped span{font-family:'Alex Brush';font-size:38px;font-weight:regular;font-style:normal;
                     line-height:0.65; white-space:pre; overflow:visible; padding:0px;}

                     #warped .w0 {-moz-transform: rotate(-6.29rad);-webkit-transform: rotate(-6.29rad);-o-transform:
                     rotate(-6.29rad);-ms-transform: rotate(-6.29rad); transform: rotate(-6.29rad);
                     width: 25px; height: 24px; left: 41.73px; top: 83.98px;}

                     #warped .w1 {-moz-transform: rotate(-6.3rad);-webkit-transform: rotate(-6.3rad);-o-transform:
                     rotate(-6.3rad);-ms-transform: rotate(-6.3rad); transform: rotate(-6.3rad);
                     width: 30px; height: 24px; left: 70.3px; top: 83.79px;}

                     #warped .w2 {-moz-transform: rotate(-6.3rad);-webkit-transform: rotate(-6.3rad);-o-transform:
                     rotate(-6.3rad);-ms-transform: rotate(-6.3rad); transform: rotate(-6.3rad);
                     width: 43px; height: 24px; left: 105.44px; top: 83.49px;}

                     #warped .w3 {-moz-transform: rotate(-6.29rad);-webkit-transform: rotate(-6.29rad);-o-transform:
                     rotate(-6.29rad);-ms-transform: rotate(-6.29rad); transform: rotate(-6.29rad);
                     width: 31px; height: 24px; left: 154.54px; top: 83.21px;}

                     #warped .w4 {-moz-transform: rotate(-6.29rad);-webkit-transform: rotate(-6.29rad);-o-transform:
                     rotate(-6.29rad);-ms-transform: rotate(-6.29rad); transform: rotate(-6.29rad);
                     width: 30px; height: 24px; left: 188.91px; top: 83.07px;}

                     #warped .w5 {-moz-transform: rotate(-6.29rad);-webkit-transform: rotate(-6.29rad);-o-transform:
                     rotate(-6.29rad);-ms-transform: rotate(-6.29rad); transform: rotate(-6.29rad);
                     width: 30px; height: 24px; left: 224.24px; top: 83.05px;}

              </style>
	<!-- start-smoth-scrolling -->
</head>
<body>
<!-- banner -->
<div class="banner">
	<div class="container">
		<div class="header-nav">
			<div class="logo">
				<h1><a href="kullaniciindex.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Lumgoo !</a></h1>
			</div>
			<div class="navigation">
				<span class="menu"><img src="images/menu.png" alt=""/></span>
				<nav class="cl-effect-11" id="cl-effect-11">
					<ul class="nav1">
						<li><a class="active" href="index.php" data-hover="ANASAYFA">ANASAYFA</a></li>
						
						<li><a href="profil.php" data-hover="PROFİLİM">PROFİLİM</a></li>
				
					</ul>
				</nav>
				<!-- script for menu -->
					<script> 
						$( "span.menu" ).click(function() {
						$( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						});
						});
					</script>
				<!-- //script for menu -->
				
			</div>
			<div class="social-icons">
				<ul>
					<li><a href="https://www.facebook.com/mhmtacar64" class="f1"></a></li>
					<li><a href="https://twitter.com/atsizyolu" class="f2"></a></li>
					<li><a href="https://plus.google.com/u/0/+MehmetAcar20" class="f3"></a></li>
					<li><a href="#" class="f4"></a></li>
				</ul>
			</div>
			<br>
			<br>
			<br>	
			<div class="clearfix"></div>
		</div>
	<div class="copy-right" style="background-color:darkgray">
	<div class="container">	
			<p>  Hoşgeldiniz  <a href="profile.php"> 
			<?php
				// kullanıcı adı burda
				$uyesor=$db->prepare("SELECT uye_adi FROM uye WHERE uye_online=:online");
				$uyesor->execute(array(
				'online' => 1
				));
				while(($sonuc=$uyesor -> fetch(PDO::FETCH_ASSOC))!==false)
				{
					echo $sonuc['uye_adi'];
				}
				?>
			</a></p>
			
				
	</div>
	</div>
	<div class="search">
		<form action="islem.php" method="post">
			<input type="submit" name="kullanicicikisyap" value="ÇIKIŞ YAP">
		</form>	
	</div>
<!-- //copy -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
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
		
		<div class="banner-bottom">
			<div class="droop-down">
				<form action="search.php" method="post">
				<div class="droop">
					<div class="sort-by">
						
						<!-- --><input type="text" name="otel"/>
						
						
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
								
								<h4>PROFİLİM</h4>
								<p>Kullanıcı bilgilerim ve genel bilgilerim</p>	
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
								<h4>GEÇMİŞİM</h4>
								<p>Rezervasyon Geçmişim</p>
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