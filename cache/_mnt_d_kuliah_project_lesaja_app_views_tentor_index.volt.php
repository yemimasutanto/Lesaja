<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lesaja</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/responsive.css">
</head>
<body class="full">
    <?= $this->flashSession->output() ?>

    <header class="headerapi" align="center">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href = /dashboard class="navbar-brand"><img src="img/lesaja.png" width=120></a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto align-middle">
                    <li class="nav-item align-middle" align="center">
                        <div class="kelasaya" align="center"> 
                            <a href="/kelas" align="center">Kelas Saya<span class="sr-only"></a>
                        </div>
                    </li>
                    <div class="tengah">
                        <form name="form" action="/dashboard/search" method="post">
                            <div class="align-middle">
                                <input class="search-bar1 mr-sm-2 " type="text" name = "cari" placeholder="Kelas apa yang kamu ingin ikuti hari ini?" width=100>
                            </div>
                            <div class="search-btn1">
                                <button class="btn" name = "submit" type="submit">
                                    <img src="img/search.png" width=20>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="infotentor">
                        <a href="/tentor" for="tentor">Temukan tentormu</a>
                    </div>
                    <li>
                        <label class="nama1" for="nama_murid"><?php $hasil=explode(' ',$this->session->get('AUTH_NAME'),2); echo $hasil[0]; ?></label>
                    </li>
                    <li class="rightnav">
                        <button class="btn dropdwon-toggle" id="nama_murid" data-toggle="dropdown">
                            <img src="img/user.png">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="/editprofil">Edit Profile</a>
                            <a class="dropdown-item" href="/logout">Keluar</a>
                        </div>
                    </li>
            </div>
        </nav>
    </header>
        
        <!-- content -->
    <main>
        <div style="overflow-x:auto">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Tentor</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tanggal Lahir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $v164420053106882020741iterator = $tentor; $v164420053106882020741incr = 0; $v164420053106882020741loop = new stdClass(); $v164420053106882020741loop->self = &$v164420053106882020741loop; $v164420053106882020741loop->length = count($v164420053106882020741iterator); $v164420053106882020741loop->index = 1; $v164420053106882020741loop->index0 = 1; $v164420053106882020741loop->revindex = $v164420053106882020741loop->length; $v164420053106882020741loop->revindex0 = $v164420053106882020741loop->length - 1; ?><?php foreach ($v164420053106882020741iterator as $item) { ?><?php $v164420053106882020741loop->first = ($v164420053106882020741incr == 0); $v164420053106882020741loop->index = $v164420053106882020741incr + 1; $v164420053106882020741loop->index0 = $v164420053106882020741incr; $v164420053106882020741loop->revindex = $v164420053106882020741loop->length - $v164420053106882020741incr; $v164420053106882020741loop->revindex0 = $v164420053106882020741loop->length - ($v164420053106882020741incr + 1); $v164420053106882020741loop->last = ($v164420053106882020741incr == ($v164420053106882020741loop->length - 1)); ?>
                    <tr>
                        <th scope="row"><?= $v164420053106882020741loop->index ?></th>
                        <td><?= $item['nama_tentor'] ?></td>
                        <td><?= $item['email'] ?></td>
                        <td><?= $item['jkel'] ?></td>
                        <td><?= $item['tgl_lahir'] ?></td>
                    </tr>
                    <?php $v164420053106882020741incr++; } ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>