<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman <?= $data['judul'] ?></title>
    <link href="<?= BASEURL; ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?= BASEURL; ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= BASEURL ?> ">Grasia Mvc</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="<?= BASEURL ?>">Home</a>
                    <a class="nav-link" href="<?= BASEURL ?>/about">About</a>
                    <a class="nav-link" href="<?= BASEURL ?>/mahasiswa">Mahasiswa</a>
                </div>
            </div>
        </div>
    </nav>