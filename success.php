<div class="copy-right" style="background-color:darkgray">
	<div class="container">	
			<p>  Hoşgeldiniz  <a href="profile.php"> 
			<?php
				include 'C:\xampp\htdocs\macarhoteltemplate\web\nedmin\netting\baglan.php';
				// kullanıcı adı burda
				$uyesor=$db->prepare("SELECT uye_id FROM uye WHERE uye_online=:online");
				$uyesor->execute(array(
				'online' => 1
				));
				while(($sonuc=$uyesor -> fetch(PDO::FETCH_ASSOC))!==false)
				{
					$uyeid= $sonuc['uye_id'];
				}
				?>
			</a></p>
			
				
	</div>
</div>

<?php

	
$id=$_POST['id'];
$yetiskin=$_POST['yetiskin'];
$cocuk=$_POST['cocuk'];
$giris=$_POST['giris'];
$cikis=$_POST['cikis'];
$tip="internet";
$fiyat=0;




$giris = date("Y-m-d", strtotime($giris));
$cikis = date("Y-m-d", strtotime($cikis));


$insert= $db->prepare("INSERT INTO rezervasyon (rz_giris , rz_cikis , rz_tipi , rz_yetiskin , rz_cocuk , rz_fiyat , otel_id , uye_id , guest_id) 
VALUES(:rz_giris , :rz_cikis , :rz_tipi , :rz_yetiskin , :rz_cocuk , :rz_fiyat , :otel_id , :uye_id , :guest_id)");
$insert->execute(array(

	"rz_giris" => $giris ,
	"rz_cikis" => $cikis ,
	"rz_tipi" => $tip ,
	"rz_yetiskin" => $yetiskin ,
	"rz_cocuk" => $cocuk ,
	"rz_fiyat" => $fiyat ,
	"otel_id" => $id ,
	"uye_id" => $uyeid ,
	"guest_id" => 0

));


?>

<h1>Odeme tamamlandı.Anasayfaya donmek icin <a href="kullaniciindex.php">Tikla</a></h1>