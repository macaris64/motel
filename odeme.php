<?php
		include 'C:\xampp\htdocs\macarhoteltemplate\web\nedmin\netting\baglan.php';
		
			$id=$_POST['id'];
			$yetiskin=$_POST['yetiskin'];
			$cocuk=$_POST['cocuk'];
			$oda=$_POST['oda'];
			$giris=$_POST['giris'];
			$cikis=$_POST['cikis'];


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
<link rel="stylesheet" href="css/jquery-ui.css" />
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
<!--about-->
<div class="booking">
	<div class="container">
		<h2 class="tittle-one">ÖDEME : </h2>
			
		
		
			<div class="reservation-form">
				
				
				<div class="col-md-9 reservation-right">
					<form action="success.php" method="post">
					
						<input type="hidden" name="id" value="<?php echo $id ?>"/>
						<input type="hidden" name="yetiskin" value="<?php echo $yetiskin ?>"/>
						<input type="hidden" name="cocuk" value="<?php echo $cocuk ?>"/>
						<input type="hidden" name="oda" value="<?php echo $oda ?>"/>
						<input type="hidden" name="giris" value="<?php echo $giris ?>"/>
						<input type="hidden" name="cikis" value="<?php echo $cikis ?>"/>
						<h4>Fiyat</h4>
						<div class="dropdown-button">           			
			            	<input type="text" name="fiyat" disabled>
						</div>
						<h4>Kartın üzerindeki isim</h4>
						<div class="dropdown-button">           			
			            	<input type="text" name="isim" required>
						</div>
						<h4>Kart No</h4>
						<div class="dropdown-button">           			
			            	<input type="text" name="no" required>
						</div>
						<h4>CVV</h4>
						<div class="dropdown-button">           			
			            	<input type="text" name="cvv" required>
						</div>
						
						<h4>Son Kullanma Tarihi</h4>
						<div class="book-pag">
							<div class="book-pag-frm">
								<label>Tarih</label>
								<input class="date" id="datepicker1" name="skt" type="text" value="Tarih" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
							</div>
						</div>
						
							
							
							<div class="clearfix"></div>
						</div>	
						
						
						<button class="btn1 btn-1 btn-1e">ŞİMDİ ÖDEME YAP!</button>
					</form>
					<!--strat-date-piker-->
					
					<script src="js/jquery-ui.js"></script>
							  <script>
									  $(function() {
									    $( "#datepicker,#datepicker1,#datepicker2" ).datepicker();
									  });
							  </script>
					<!--//End-date-piker-->
				</div>
				<div class="clearfix"></div>
			</div>
	</div>
</div>
	
<?php
	include 'footer.php';
	?>