<?php
	
	ob_start();
	session_start();
	include 'C:\xampp\htdocs\macarhoteltemplate\web\nedmin\netting\baglan.php';
	//include '../macarhotel/nedmin/production/fonksiyon.php';


if(isset($_POST['kullanicicikisyap']))
{
	
	session_destroy();
	$ayarsifirla=$db->prepare("UPDATE uye SET uye_online =:uye_online");
	$sifirla=$ayarsifirla->execute(array(
	"uye_online" => 0
	));
	header("Location:index.php");
	exit;
	
}

if(isset($_POST['oteluyeol']))
{	
	$sahip_adi=$_POST['sahip_adi'];
	$sahip_soyadi=$_POST['sahip_soyadi'];
	$sahip_mail= $_POST['sahip_mail'];
	$sahip_password=($_POST['sahip_password'	]);
	$sahipsor=$db->prepare("SELECT * FROM otelsahipleri WHERE sahip_mail=:mail");
	$sahipsor->execute(array(
	'mail' => $sahip_mail
		));
    $kayit=$sahipsor->rowCount();
	
	if($kayit!=0)
	{
		header("Location:sahipgiris.php?durum=no");
		exit;
	}
	else
	{
		$uyeekle=$db->prepare("INSERT INTO otelsahipleri SET
		sahip_adi=:sahip_adi,
		sahip_soyadi=:sahip_soyadi,
		sahip_mail=:sahip_mail,
		sahip_password=:sahip_password
		
		");
			
		$insert=$uyeekle->execute(array(
		'sahip_adi' => $_POST['sahip_adi'],
		'sahip_soyadi' => $_POST['sahip_soyadi'],
		'sahip_mail' => $_POST['sahip_mail'],
		'sahip_password' => $_POST['sahip_password']
		));	
		if($insert)
		{
		header("Location:index.php?durum=ok");//YÖNLENDİRME İŞLEMİ
		}
		else
		{
		header("Location:sahipgiris.php?durum=no");
		}
	}
}


if(isset($_POST['otelgirisyap']))
{
	
	
	//$uye_adi=$_POST['uye_adi'];
	//$uye_soyadi=$_POST['uye_soyadi'];
	$sahip_mail= $_POST['sahip_mail'];
	$sahip_password=($_POST['sahip_password']);
	
	$sahipsor=$db->prepare("SELECT * FROM otelsahipleri WHERE sahip_mail=:mail and sahip_password=:password");
	$sahipsor->execute(array(
	'mail' => $sahip_mail,
	'password' => $sahip_password
		
	));
	
	$say=$sahipsor->rowCount();
	if($say==1)
	{
		$_SESSION['sahip_mail']=$sahip_mail;
		header("Location:sahipindex.php");
		exit;
		
	}
	else
	{
		header("Location:sahipgiris.php?durum=no");
		exit;
	}
}

if(isset($_POST['kullanicigirisyap']))
{
	
	
	//$uye_adi=$_POST['uye_adi'];
	//$uye_soyadi=$_POST['uye_soyadi'];
	$uye_mail= $_POST['uye_mail'];
	$uye_password=($_POST['uye_password']);
	
	$uyesor=$db->prepare("SELECT * FROM uye WHERE uye_mail=:mail and uye_password=:password and uye_yetki=:yetki");
	$uyesor->execute(array(
	'mail' => $uye_mail,
	'password' => $uye_password,
	'yetki' => 3
	
	));
	
	$say=$uyesor->rowCount();
	if($say==1)
	{
		$_SESSION['uye_mail']=$uye_mail;
		$uye_online=1;
		$ayarsifirla=$db->prepare("UPDATE uye SET uye_online =:uye_online");
		$sifirla=$ayarsifirla->execute(array(
		"uye_online" => 0
		));
		$ayarkaydet=$db->prepare("UPDATE uye SET 
		uye_online=:uye_online WHERE
		uye_mail=:uye_mail");
		$update=$ayarkaydet->execute(array(
		"uye_online" => $uye_online,
		'uye_mail' => $uye_mail
		
	));
		
	
	header("Location:kullaniciindex.php");
	exit;
	}
	else
	{
		header("Location:uyegiris.php?durum=no");
		exit;
	}
}
if(isset($_POST['kullaniciuyeol']))
{
		
	
	$uye_adi=$_POST['uye_adi'];
	$uye_soyadi=$_POST['uye_soyadi'];
	$uye_mail= $_POST['uye_mail'];
	$uye_password=($_POST['uye_password']);
	$uyesor=$db->prepare("SELECT * FROM uye WHERE uye_mail=:mail");
	$uyesor->execute(array(
	'mail' => $uye_mail
		));
    $kayit=$uyesor->rowCount();
	
	if($kayit!=0)
	{
		header("Location:uyegiris.php?durum=no");
		exit;
	}
	else
	{
		$uyeekle=$db->prepare("INSERT INTO uye SET
		uye_adi=:uye_adi,
		uye_soyadi=:uye_soyadi,
		uye_mail=:uye_mail,
		uye_password=:uye_password,
		uye_yetki=3
		
		");
			
		$insert=$uyeekle->execute(array(
		'uye_adi' => $_POST['uye_adi'],
		'uye_soyadi' => $_POST['uye_soyadi'],
		'uye_mail' => $_POST['uye_mail'],
		'uye_password' => $_POST['uye_password']
		));	
		if($insert)
		{
		header("Location:index.php?durum=ok");//YÖNLENDİRME İŞLEMİ
		}
		else
		{
		header("Location:uyegiris.php?durum=no");
		}
	}
}
	/*
	$uye_adi=$_POST['uye_adi'];
	$uye_soyadi=$_POST['uye_soyadi'];
	$uye_mail= $_POST['uye_mail'];
	$uye_password=($_POST['uye_password']);
	$sonuc=mysqli_query("select * from uye where uye_mail='$uye_mail'");
    $kayit=mysqli_fetch_array($sonuc);
	
	if($kayit!=0)
	{
		header("Location:uyegiris.php?durum=no");
		exit;
	}
	else
	{
		
		$uyeekle=$db->prepare("INSERT INTO uye SET
		uye_adi=:uye_adi,
		uye_soyadi=:uye_soyadi,
		uye_mail=:uye_mail,
		uye_password=:uye_password
		uye_yetki=3;
		
		");
			
		$insert=$uyeekle->execute(array(
		'uye_adi' => $_POST['uye_adi'],
		'uye_soyadi' => $_POST['uye_soyadi'],
		'uye_mail' => $_POST['uye_mail'],
		'uye_password' => $_POST['uye_password'],
		));	
		if($insert)
		{
		header("Location:index.php?durum=ok");//YÖNLENDİRME İŞLEMİ
		}
		else
		{
		header("Location:uyegiris.php?durum=no");
		}
	}
	*/

?>