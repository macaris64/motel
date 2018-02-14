<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Otel Girişi</title>
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="css/uyegirisstyle.css">

  
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Üye Ol</a></li>
        <li class="tab"><a href="#login">Giriş Yap</a></li>
      </ul>
      <?php 

             if (@$_GET['durum']=="no") {
             
              ?> <p style="background-color: red">"Kullanıcı Bulunamadı...";</p> <?php

             } elseif (@$_GET['durum']=="exit") {
             
             echo "Başarıyla Çıkış Yaptınız.";

             }

             ?>
      <div class="tab-content">
        <div id="signup">   
          <h1>Ücretsiz üye ol ve sen de Otelini kur</h1>
          
          <form action="islem.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Ad<span class="req">*</span>
              </label>
              <input type="text" name="sahip_adi" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Soyad<span class="req">*</span>
              </label>
              <input type="text" name="sahip_soyadi" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              E-mail adresi<span class="req">*</span>
            </label>
            <input type="email" name="sahip_mail" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Şifre<span class="req">*</span>
            </label>
            <input type="password" name="sahip_password" required autocomplete="off"/>
          </div>
          
          <button type="submit" name="oteluyeol" class="button button-block">Başla</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Tekrar Hoşgeldiniz</h1>
          
          <form action="islem.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email adresi<span class="req">*</span>
            </label>
            <input type="email" name="sahip_mail" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Şifre<span class="req">*</span>
            </label>
            <input type="password" name="sahip_password" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Şifremi Unuttum</a></p>
          
          <button type="submit" name="otelgirisyap" class="button button-block">Giriş yap</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script  src="js/uyegiris.js"></script>

</body>
</html>
