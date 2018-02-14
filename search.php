
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

	include 'C:\xampp\htdocs\macarhoteltemplate\web\nedmin\netting\baglan.php';
//	$otel_adi=$_POST['otel'];
	$otel_adi=$_POST['otel'];

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
<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
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
	<!-- start-smoth-scrolling -->
</head>
<body>
<!-- banner -->
<div class="banner page-head">
	<div class="container">
		<div class="header-nav">
			<div class="logo">
				<h1><a href="kullaniciindex.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>lumgoo</a></h1>
			</div>
			<div class="navigation">
				<span class="menu"><img src="images/menu.png" alt=""/></span>
				<nav class="cl-effect-11" id="cl-effect-11">
					<ul class="nav1">
						
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
					<li><a href="#" class="f1"></a></li>
					<li><a href="#" class="f2"></a></li>
					<li><a href="#" class="f3"></a></li>
					<li><a href="#" class="f4"></a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //banner -->
<!--search-->
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
<div class="search-page">
	<div class="container">	
		<div class="search-grids">
			<div class="col-md-3 search-grid-left">
				<div class="search-hotel">
					<h3 class="sear-head">Otel Adı : <?php echo $otel_adi ?></h3>
					<form action="search.php" method="post">
					<select class="sel" name="otel">
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
						
						<input type="submit" value=" ">
					</form>
				</div>
				
				
				<div class="range-two">
					<h3 class="sear-head">Oda</h3>
						<select class="sel" name="oda">
							<option value="">Oda Tipi</option>
							<option value="">Park View Center</option>
							<option value="">E Park Road</option>
							<option value="">Silver City</option>   
						</select>

							
				</div>
				
				<div class="range-two">
					<h3 class="sear-head">Yıldız</h3>
						<select class="sel">
							<option value="">Yıldız Sayısı</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
						</select>

							
				</div>
				
				<div class="range-two" >
					<h3 class="sear-head">Günlük Fiyat Minimum</h3>
						<select class="sel">
							<option value="">50 TL</option>
							<option value="">50 TL</option>
							<option value="">50 TL</option>
							<option value="">50 TL</option>
							<option value="">50 TL</option>
							<option value="">50 TL</option>
							<option value="">50 TL</option>
							<option value="">50 TL</option>
							<option value="">50 TL</option>
							<option value="">50 TL</option>
							<option value="">Park View Center</option>
							<option value="">E Park Road</option>
							<option value="">Silver City</option>   
						</select>

							
				</div>
				<div class="range-two" >
					<h3 class="sear-head">Günlük Fiyat Maksimum</h3>
						<select class="sel">
							<option value="">Enter City Center</option>
							<option value="">Park View Center</option>
							<option value="">E Park Road</option>
							<option value="">Silver City</option>   
						</select>

							
				</div>
				
				
			</div>
			<div class="col-md-9 search-grid-right">
			<?php 
				
				foreach($db->query("SELECT * FROM otel WHERE otel_adi like '%$otel_adi%' ") as $row)
				{
					?>
					<form action="rezervasyon.php" method="post">
					<input type="hidden" name="id" value="<?php echo $row['otel_id']; ?>"/>
					

					<div class="hotel-rooms">
					<div class="hotel-left">
						<a href="single.html"><span class="glyphicon glyphicon-bed" aria-hidden="true"></span> <?php echo $row['otel_adi']; ?></a>
						<p>  <?php echo $row['otel_adres']; ?> </p>
						<div class="hotel-left-grids">
							<div class="hotel-left-one">
								<a href="single.html"><img src="images/21.jpg" alt="" /></a>
							</div>
							<div class="hotel-left-two">
								<div class="rating text-left">
									<p><?php echo $row['otel_yildiz'];  ?> : YILDIZ SAYISI</p>
								</div>
									
								
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="hotel-right text-right">
						<h4><span> <?php echo ($row['otel_fiyat']+200).' TL';  ?></span> <?php echo $row['otel_fiyat'].' TL';  ?></h4>
						<p>En uygun seçim</p>
						</div>
						<div class="hotel-right text-right">
						<input type="hidden" name="otel_adi" value="<?php echo $row['otel_adi']; ?>"/>
						<input type="submit" name="rezervasyon" value="DEVAM">
					</div>
					<div class="clearfix"></div>
				</div>
				</form>
				
					<?php
					
				}
				
				?>
				
				
				
				
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--//search-->
<!-- copy -->
<?php
		include 'footer.php';
	?>