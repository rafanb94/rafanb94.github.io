<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta  name="description" content="<?= $description?>">
    <title><?= $title?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="images/oxira-brasil-logo.ico" type="image/x-icon">
    <link rel="icon" href="images/oxira-brasil-logo.ico" type="image/x-icon">
</head>

<body>
    <header class="header">
        <div class="container d-flex d-flex-wrap align-items-center justify-center">
            <div class="logo">
                <a href="/"><img src="images/oxira-brasil-logo.png" alt="Logo da Oxira Brasil"></a>
            </div>
            <div class="menu-section">
                <div class="menu-toggle" onclick="menuToggle()">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>
                <nav class="menu">
                    <ul class="d-flex d-flex-wrap align-items-center justify-center">
                        <li><a href="#o-que-e" onclick="menuToggle()">O que é?</a></li>
                        <li><a href="#onde-usar" onclick="menuToggle()">Onde Usar?</a></li>
                        <li><a href="#nossos-produtos" onclick="menuToggle()">Nossos Produtos</a></li>
                        <li><a href="https://www.instagram.com/oxira.brasil/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> OXIRA BRASIL </a></li>
                        <li><a href="tel:+551136026260"><span>(11)3602-6260</span></a></li>
                        <li><a href="https://wa.me/11964629481"  target="_blank"><span class="menu__call-to-action"> FALE CONOSCO</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
