<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <!-- WARNING: for iOS 7, remove the width=device-width and height=device-height attributes. See https://issues.apache.org/jira/browse/CB-4323 -->
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <title>MascotaApp <?= $Hola; ?></title>
        <script type="text/javascript">
    var url = window.location.pathname;var filename = url.substring(url.lastIndexOf('/')+1);
    if(localStorage.login=="true" && filename == 'login.html'){window.location.href = "index.html";}
    else if(localStorage.login=="false" && filename != 'login.html'){window.location.href = "login.html";}
  </script>
</head>
<body>
    <div class="bar bar-header">
        <h1 class="title">Inicie Sesión</h1>
        <a href="signup.html" class="button button-clear button-royal">Registro</a>
    </div>
    <div class="padding" style="margin-top:55px;">
        <label class="item-input">
            <span class="input-label">Email</span>
            <input type="email" placeholder="email@domain.com" id="email">
        </label>
        <label class="item-input">
            <span class="input-label">Contrasena</span>
            <input type="password" placeholder="password" id="password">
        </label>
        <label class="item-input">
            <span class="input-label"></span>
            <a href="forget-password.html" class="button button-clear button-royal">Olvido su contrasena ?</a>
        </label>
        <label class="item-input">
            <button class="button button-block button-positive" id="login">Login</button>
        </label>
    </div>
    <script src="<?=SCRIPTS['jQuery']?>"></script>
    <script src="<?=SCRIPTS['bootstrap']?>"></script>
    <script src="<?= js('auth'); ?>"></script>
    
</body>

</html>