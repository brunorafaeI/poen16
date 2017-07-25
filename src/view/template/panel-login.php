<!-- Kapsayıcı -->
<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12 login-card">

    <!-- Login (giriş) Form Sayfası -->
    <form id="login-form" class="col-lg-12" method="post">

        <!-- Logo -->
        <div class="col-lg-12 logo-kapsul">
            <img width="100" class="logo" src="https://selimdoyranli.com/cdn/material-form/img/logo.png" alt="Logo" />
        </div>
        <!-- #Logo Bitiş -->

        <div class="clearfix"></div>
        <div id="msg-login"></div>
        <!-- Kullanıcı Adı Giriş İnput -->
        <div class="group">
            <input type="text" name="username" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label><i class="material-icons input-ikon">person_outline</i><span class="span-input">username</span></label>
        </div>
        <!-- #Kullanıcı Adı Giriş İnput Bitiş -->

        <!-- Şifre İnput Giriş-->
        <div class="group">
            <input type="password" name="password" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label><i class="material-icons input-sifre-ikon">lock</i><span class="span-input">password</span></label>
        </div>
        <!-- Şifre İnput Giriş Bitiş-->

        <!-- Giriş Yap Buton -->
        <button type="submit" id="btn-login"  class="giris-yap-buton btn btn-block">Login in</button>
        <!-- #Giriş Yap Buton Bitiş -->

        <!-- Şifremi Unuttum ve Kaydol Linkleri -->
        <div class="forgot-and-create tab-menu">
            <a class="sifre-hatirlat-link" href="javascript:void('sifre-hatirlat-link');">Forgot password ?</a>
            <a class="hesap-olustur-link" href="javascript:void('hesap-olustur-link');">Create account.</a>
        </div>
        <!-- Şifremi Unuttum ve Kaydol Linkleri Bitiş -->

    </form>
    <!-- #Login (giriş) Form Sayfası Bitiş -->

    <!-- Kayıt Form Sayfası -->
    <form id="kayit-form" class="col-lg-12" method="post">

        <div class="col-lg-12 logo-kapsul">
            <img width="100" class="logo" src="https://selimdoyranli.com/cdn/material-form/img/logo.png" alt="Logo" />
        </div>

        <div style="clear:both;"></div>

        <!-- Kayıt Form Kullanıcı Adı İnput -->
        <div class="group">
            <input type="text" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label><i class="material-icons input-ikon">person_outline</i><span class="span-input">Nom</span></label>
        </div>
        <!-- #Kayıt Form Kullanıcı Adı İnput Bitiş -->

        <!-- Kayıt Form Email İnput -->
        <div class="group">
            <input type="text" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label><i class="material-icons input-ikon">mail_outline</i><span class="span-input">E-Mail</span></label>
        </div>
        <!-- #Kayıt Form Email İnput Bitiş -->

        <!-- Kayıt Form Şifre İnput -->
        <div class="group">
            <input type="password" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label><i class="material-icons input-sifre-ikon">lock</i><span class="span-input">Password</span></label>
        </div>
        <!-- #Kayıt Form Şifre İnput Bitiş -->

        <!-- Kayıt Form Şifre-Tekrarı İnput -->
        <div class="group">
            <input type="password" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label><i class="material-icons input-sifre-ikon">lock</i><span class="span-input">Repeat password</span></label>
        </div>
        <!-- #Kayıt Form Şifre-Tekrarı İnput Bitiş -->

        <!-- Kayıt Ol Buton -->
        <a href="javascript:void(0);" class="kayit-ol-buton">Register</a>
        <!-- #Kayıt Ol Buton Bitiş -->

        <!-- Zaten Hesap Var Link -->
        <a class="zaten-hesap-var-link" href="javascript:void('zaten-hesap-var-link');">Have you an account ? Go to login.</a>
        <!--# Zaten Hesap Var Link Bitiş -->

    </form>
    <!-- ##Kayıt Form  Sayfası Bitis -->

    <!-- Sifre Hatirlat Form Sayfası -->
    <form id="sifre-hatirlat-form" class="col-lg-12" method="post">

        <div class="col-lg-12 logo-kapsul">
            <img width="100" class="logo" src="https://selimdoyranli.com/cdn/material-form/img/logo.png" alt="Logo" />
        </div>

        <div style="clear:both;"></div>

        <!-- Şifre Hatırlat Email İnput -->
        <div class="group">
            <input type="text" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label><i class="material-icons input-ikon">mail_outline</i><span class="span-input">E-Mail</span></label>
        </div>
        <!-- #Şifre Hatırlat Email İnput Bitiş -->

        <!-- Şifremi Hatırlat Buton -->
        <a href="javascript:void(0);" class="sifre-hatirlat-buton">Send my password</a>
        <!-- #Şifremi Hatırlat Buton Bitiş -->

        <!-- Zaten Hesap Var Link -->
        <a class="zaten-hesap-var-link" href="javascript:void('zaten-hesap-var-link');">Have you an account ? Go to login.</a>
        <!-- #Zaten Hesap Var Link Bitiş -->

    </form>
    <!-- ##Sifre Hatirlat Form Bitis -->

</div>
<!-- #Kapsayıcı Bitiş -->
<script type="text/javascript">
    requestAnimationFrame(function(){
        $('#msg-login').html('<?php session_destroy(); ?>');
    })

</script>
