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

    <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
        <a class="navbar-brand" href="/dashboard"><img src="img/lesaja.png" alt="Logo" style="width: 100px;"></a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item align-middle" align="center">
                <div class="kelasaya" align="center"> 
                    <a href="/kelas" align="center">Kelas Saya<span class="sr-only"></a>
                </div>
            </li>
        </ul>
        <div class="infotentor">
            <a href="/tentor" for="tentor">Temukan tentormu</a>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#"> <?=$this->session->get('AUTH_NAME');?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout">
                    <img src="/img/logout.png" alt="logout" style="width: 24px;">
                </a>
            </li>
        </ul>
    </nav>
        
    <!-- content -->
    <main>
        <div style="overflow-x:auto">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Tentor</th>
                        <th scope="col">Lulusan</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $v115041975242019603851iterator = $tentor; $v115041975242019603851incr = 0; $v115041975242019603851loop = new stdClass(); $v115041975242019603851loop->self = &$v115041975242019603851loop; $v115041975242019603851loop->length = count($v115041975242019603851iterator); $v115041975242019603851loop->index = 1; $v115041975242019603851loop->index0 = 1; $v115041975242019603851loop->revindex = $v115041975242019603851loop->length; $v115041975242019603851loop->revindex0 = $v115041975242019603851loop->length - 1; ?><?php foreach ($v115041975242019603851iterator as $item) { ?><?php $v115041975242019603851loop->first = ($v115041975242019603851incr == 0); $v115041975242019603851loop->index = $v115041975242019603851incr + 1; $v115041975242019603851loop->index0 = $v115041975242019603851incr; $v115041975242019603851loop->revindex = $v115041975242019603851loop->length - $v115041975242019603851incr; $v115041975242019603851loop->revindex0 = $v115041975242019603851loop->length - ($v115041975242019603851incr + 1); $v115041975242019603851loop->last = ($v115041975242019603851incr == ($v115041975242019603851loop->length - 1)); ?>
                    <tr>
                        <th scope="row"><?= $v115041975242019603851loop->index ?></th>
                        <td><?= $item['nama_tentor'] ?></td>
                        <td><?= $item['lulusan'] ?></td>
                        <td><?= $item['jkel'] ?></td>
                        <td><?= $item['email_tentor'] ?></td>
                    </tr>
                    <?php $v115041975242019603851incr++; } ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>