<body style="background-color: #FF7408;">
    {{ flashSession.output() }}
    {{ form('createclass/createClassSubmit', 'method': 'post') }}
        <div class="box-center">
            <center>
                {{ link_to('dashboard', image('img/lesaja.png', 'width': '200')) }}
                <h5><br>
                    <label style="font-size: medium; color:#FF7408" for="reset">Buat Kelas Baru</label>
                </h5>
            </center>
            <!-- <input class="form-control mr-sm-2" name="nama" type="text" placeholder="Nama" required style="margin: 20px 0 30px 0;">
            <input class="form-control mr-sm-2" name = "email" type="email" placeholder="Email" required style="margin: 30px 0;">
            <input class="form-control mr-sm-2" name = "password" type="password" placeholder="Sandi" required style="margin: 30px 0;">
            <input class="form-control mr-sm-2" name = "confirm" type="password" placeholder="Konfirmasi Sandi" required style="margin: 30px 0 30px 0;">  -->
            
            <select name="jenjang" class="form-control mr-sm-2" style="margin: 30px 0;">
                <option value="" disabled selected>Pilih jenjang pendidikan..</option>
                <option value="sd">SD</option>
                <option value="smp">SMP</option>
                <option value="sma">SMA</option>
            </select>

            <select name="mapel" class="form-control mr-sm-2" style="margin: 10px 0;">
                <option value="" disabled selected>Pilih mata pelajaran..</option>
                <option value="mat">Matematika</option>
                <option value="bindo">Bahasa Indonesia</option>
                <option value="bing">Bahasa Inggris</option>
                <option value="ipa">IPA</option>
                <option value="ips">IPS</option>
                <option value="tik">TIK</option>
            </select>
            <br>
            <div align="center">
                <a href='/index' class="btn btn-outline-success btn-sm" type="button" style="margin: 0 20px 0 0;">CANCEL</a>
                {{ submit_button('SUBMIT', 'class':'btn btn-md btn-success btn-sm') }}
            </div>
    {{ endform()}}
</body>


