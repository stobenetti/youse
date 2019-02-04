<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/main.css"/>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <script src="<?php echo bloginfo('template_url') ?>/assets/js/plugins.js"></script>
    <script src="<?php echo bloginfo('template_url') ?>/assets/js/app.js"></script>

    <title>
        Home - Youse
    </title>
</head>

<body class="home">
<header>
    <div class="header">
        <div class="header-wrapper">
            <div class="container header-container">
                <div class="header-logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/youse-logo-header.png" alt="Youse - Caixa seguradora"/>
                    </a>
                </div>
                <nav class="header-menu-links">
                    <a href="#">
                        Seguros
                    </a>
                    <a href="#">
                        Youse Friends
                    </a>
                    <a href="#">
                        Sobre a Youse
                    </a>
                    <a href="#">
                        Sinistro
                    </a>
                    <a href="#">
                        Minha conta
                    </a>
                    <a href="#">
                        Clube de parceiros
                    </a>
                </nav>
            </div>
        </div>
    </div>

    <div class="header-mobile-menu-trigger">
        <button type="button" class="header-mobile-menu-button menu-toggle">
            <span class="sr-only">Abrir menu</span>
            <div></div>
            <div></div>
            <div></div>
        </button>
    </div>

    <nav class="mobile-menu-wrapper">
        <ul class="menu-list">
            <li>
                <a href="#">
                    Seguros
                </a>
            </li>
            <li>
                <a href="#">
                    Youse Friends
                </a>
            </li>
            <li>
                <a href="#">
                    Sobre a Youse
                </a>
            </li>
            <li>
                <a href="#">
                    Sinistro
                </a>
            </li>
            <li>
                <a href="#">
                    Minha conta
                </a>
            </li>
            <li>
                <a href="#">
                    Clube de parceiros
                </a>
            </li>
        </ul>
    </nav>
</header>

<main>