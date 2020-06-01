<body style="background-color: #FF7408;">
    {{ flashSession.output() }}
    {{ form('login/loginSubmit', 'method': 'post') }}
    <div class="box-center">
        <center>
            {{ link_to('dashboard', image('img/lesaja.png', 'width': '200')) }}
        </center>
        <input class="form-control" name="email" type="text" placeholder="Email" required style="margin: 30px 0;">
        <input class="form-control" name="password" type="password" placeholder="Sandi" required style="margin: 10px 0;">
       
        <h6 align="right" style="margin: 0 0 20px 0;">
            <a href="/reset" class="btn-link">Lupa Sandi?</a>
        </h6>
        <div align="center" style="margin: 0 0 20px 0;">
            {{ submit_button('MASUK', 'class':'btn btn-md btn-success') }}
        </div>
        <br>
        <div class="bottom-login" align="center">
            <label style="font-size: small;">Belum punya akun?</label>
            <a href='/register' class="btn-link" type="button">Daftar Sekarang</a>
        </div>
    </div>     
    {{ endform()}}
</body>