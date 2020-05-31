<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/responsive.css">
</head>
<body style="background-color: #FF7408;">
    <?= $this->flashSession->output() ?>
    <?= $this->tag->form(['login/loginSubmit', 'method' => 'post']) ?>
    <div class="box-center">
        <center>
            <?= $this->tag->linkTo(['dashboard', $this->tag->image(['img/lesaja.png', 'width' => '200'])]) ?>
        </center>
        <input class="form-control" name="email" type="text" placeholder="Email" required style="margin: 30px 0;">
        <input class="form-control" name="password" type="password" placeholder="Sandi" required style="margin: 10px 0;">
       
        <h6 align="right" style="margin: 0 0 20px 0;">
            <a href="/reset" class="btn-link">Lupa Sandi?</a>
        </h6>
        <div align="center" style="margin: 0 0 20px 0;">
            <?= $this->tag->submitButton(['MASUK', 'class' => 'btn btn-md btn-success']) ?>
        </div>
        <br>
        <div class="bottom-login" align="center">
            <label style="font-size: small;">Belum punya akun?</label>
            <a href='/register' class="btn-link" type="button">Daftar Sekarang</a>
        </div>
    </div>     
    <?= $this->tag->endform() ?>
</body>
</html>