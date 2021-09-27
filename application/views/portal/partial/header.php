<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa laksanamekar</title>

    <!-- css -->
    <!-- css core -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" type="text/css">

    <!-- optional css -->
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css">

    <!-- css font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body style="margin-top: 70px; background-color: #fff;">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?php echo base_url('assets/img/logo.png') ?>" width="45" height="45" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('overview') ?>">BERANDA </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('#') ?>">BERITA </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            INFORMASI
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= site_url('visimisi') ?>">VISI & MISI </a>
                            <a class="dropdown-item" href="<?= site_url('struktur') ?>">STRUKTUR ORGANISASI</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('hubungikami') ?>">HUBUNGI KAMI</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->