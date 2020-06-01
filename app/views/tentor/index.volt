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
    {{ flashSession.output() }}

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
                    {% for item in tentor %}
                    <tr>
                        <th scope="row">{{ loop.index }}</th>
                        <td>{{ item['nama_tentor']}}</td>
                        <td>{{ item['lulusan'] }}</td>
                        <td>{{ item['jkel']}}</td>
                        <td>{{ item['email_tentor'] }}</td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>