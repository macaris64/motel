<?php
		include 'C:\xampp\htdocs\macarhoteltemplate\web\nedmin\netting\baglan.php';
		if(isset($_POST['rezervasyon']))
		{
			$id=$_POST['id'];
			
		}
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

<!-- //banner -->
<!--about-->
<div class="booking">
	<div class="container">
		<h2 class="tittle-one">REZERVASYON : <?php
			
			$otelsor=$db->query("SELECT otel_adi FROM otel WHERE otel_id=$id") -> fetchAll(PDO::FETCH_ASSOC);
			foreach($otelsor as $row)
			{ 
				echo $row['otel_adi'];
			}
			 ?></h2>
			<div class="reservation-form">
				<div class="col-md-3 reservation-left">
					
					<ul>
						<li><img src="images/333.jpg" alt="" /></a></li>
						<li><img src="images/555.jpg" alt="" /></a></li>
						<li><img src="images/666.jpg" alt="" /></a></li>
						<li><img src="images/777.jpg" alt="" /></a></li>
					</ul>
				</div>
				
				
				
				<div class="col-md-9 reservation-right">
					<form action="odeme.php" method="post">
					<input type="hidden" name="id" value="<?php echo $id ?>"/>
						<h4>Yetişkin Sayısı</h4>
						<div class="dropdown-button">           			
			            	<select class="dropdown" name="yetiskin" tabindex="10" data-settings='{"wrapperClass":"flat"}'>
									<option value="1">1 Kişi</option>
									<option value="2">2 Kişi</option>
									<option value="3">3 Kişi</option>
									<option value="4">4 Kişi</option>
									<option value="5">5 Kişi</option>
									<option value="6">6 Kişi</option>
									<option value="7">7 Kişi</option>
									<option value="8">8 Kişi</option>
									<option value="9">9 Kişi</option>
									<option value="10">10 Kişi</option>
 							</select>
						</div>
						<h4>Çocuk Sayısı</h4>
						<div class="dropdown-button">           			
			            	<select class="dropdown" name="cocuk" tabindex="10" data-settings='{"wrapperClass":"flat"}'>
									<option value="1">1 Kişi</option>
									<option value="2">2 Kişi</option>
									<option value="3">3 Kişi</option>
									<option value="4">4 Kişi</option>
									<option value="5">5 Kişi</option>
									<option value="6">6 Kişi</option>
									<option value="7">7 Kişi</option>
									<option value="8">8 Kişi</option>
									<option value="9">9 Kişi</option>
									<option value="10">10 Kişi</option>
 							</select>
						</div>
						<h4>Oda Tipi</h4>
						<div class="dropdown-button">           			
			            	<select class="dropdown" name="oda" tabindex="10" data-settings='{"wrapperClass":"flat"}'>
									<?php
										$odasor=$db->query("SELECT oda_tipi FROM oda") -> fetchAll(PDO::FETCH_ASSOC);
											foreach($odasor as $row)
											{ 
											?>
												<option value="4"><?php echo $row['oda_tipi'] ?></option>
											<?php }
									?>
 							</select>
						</div>
						<h4>Ne zaman kalmayı planlıyorsunuz?</h4>
						<div class="book-pag">
							<div class="book-pag-frm">
								<label>Giriş</label>
								<input class="date" id="datepicker1" name="giris" type="text" value="Tarih" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
							</div>
							<div class="book-pag-frm">
								<label>Çıkış</label>
								<input class="date" id="datepicker2" name="cikis" type="text" value="Tarih" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
							</div>
							
							<div class="clearfix"></div>
						</div>	
						
						
						<button class="btn1 btn-1 btn-1e">ŞİMDİ REZERVASYON YAP!</button>
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