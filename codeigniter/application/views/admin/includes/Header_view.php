<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="shortcut icon" href="<?= base_url('public/imagens/favicon.ico')?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('public/styles/style.css')?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="<?= base_url('public/styles/theme-rtl.min.css')?>" rel="stylesheet" id="style-rtl">
    <link href="<?= base_url('public/styles/theme-rtl.css')?>" rel="stylesheet" id="style-default">
</head>
<body>
    <header>
        <a href="<?= base_url('')?>"><img src="<?= base_url('public/imagens/logo.png')?>" alt="home-button"></a>
        <!-- <h1 id="main-title">Portifolio de estudo Durvaldo</h1> -->
    </header>
    <?= $this->ui->alert_flashdata() ?>