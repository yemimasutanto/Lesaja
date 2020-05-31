<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/responsive.css">
</head>
<body style="background-color: #FF7408;">
    <?= $this->flashSession->output() ?>
    <?= $this->tag->form(['reset/resetSubmit', 'method' => 'post']) ?>
    <div class="box-center">
        <center>
            <?= $this->tag->linkTo(['dashboard', $this->tag->image(['img/lesaja.png', 'width' => '200'])]) ?>
            <h5><br>
                <label style="font-size: medium; color:#FF7408" for="reset">Reset Password</label>
            </h5>
        </center>
        
        <input class="form-control mr-sm-2" name="email" type="email" placeholder="Email" required style="margin: 20px 0 30px 0;">
        <input class="form-control mr-sm-2" name="name" type="name" placeholder="Nama" required style="margin: 30px 0;">
        <input class="form-control mr-sm-2" name="password" type="password" placeholder="Masukkan Sandi Baru" required style="margin: 30px 0 50px 0;">
        <div align="center">
            <a href='/' class="btn btn-outline-success btn-sm" type="button" style="margin: 0 20px 0 0;">CANCEL</a>
            <?= $this->tag->submitButton(['SUBMIT', 'class' => 'btn btn-success btn-sm']) ?>
        </div>
    <?= $this->tag->endform() ?>
</body>
</html>