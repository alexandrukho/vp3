<!DOCTYPE HTML>
<html>
<head>
    <title>Imperfect</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--[if lte IE 8]>
    <script src="<?php bloginfo('template_url') ;?>/js/ie/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css"/>
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php bloginfo('template_url') ;?>/css/ie9.css"/>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="<?php bloginfo('template_url') ;?>/css/ie8.css"/>
    <![endif]-->
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <nav class="links">
            <?php wp_nav_menu([
                'menu' => 'Главное',
                'container' => false,
                'menu_class' => 'nav-links'
            ]); ?>
        </nav>
        <nav class="main">
            <ul>
                <li class="search">
                    <a class="fa-search" href="#search">Search</a>
                    <form id="search" method="post" action="/">
                        <input type="text" name="s" placeholder="Search"/>
                    </form>
                </li>
                <li class="menu">
                    <a class="fa-bars" href="#menu">Menu</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Menu -->
    <section id="menu">

        <!-- Search -->
        <section>
            <form class="search" method="post" action="/">
                <input type="text" name="s" placeholder="Search"/>
            </form>
        </section>

        <!-- Links -->
        <section>
                <?php wp_nav_menu([
                    'menu' => 'Боковое',
                    'container' => false,
                    'menu_class' => 'links'
                ]); ?>
        </section>

        <!-- Actions -->
        <section>
            <ul class="actions vertical">
                <li><a href="#" class="button big fit">Log In</a></li>
            </ul>
        </section>

    </section>

    <!-- Main -->
    <div id="main">