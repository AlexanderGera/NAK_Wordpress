<!doctype html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="image/x-icon" rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/assets/img/' ?>icons/favicons/favicon.ico">
    <link type="image/png" sizes="16x16" rel="icon" href="<?php echo get_template_directory_uri() . '/assets/img/' ?>icons/favicons/favicon-16x16.png">
    <link type="image/png" sizes="32x32" rel="icon" href="<?php echo get_template_directory_uri() . '/assets/img/' ?>icons/favicons/favicon-32x32.png">
    <title>Новоапостольська Церква України</title>
    <meta name="description" content="Офіційний сайт Новоапостольської Церкви України. Інформація про вірування, служіння, спільноту та новини Церкви.">
    <meta name="keywords" content="Новоапостольська Церква, Україна, вірування, служіння, спільнота, новини, богослужіння, громади">
    <?php
    wp_head();
    ?>
</head>

<body>
    <!--<div class="header__wrapper">-->
    <!--header start-->
    <header class="header">
        <div class="header__top-content_wrapper">
            <div class="header__logo-wrapper">
                <?php get_template_part('template-parts/logo'); ?>
                <span class="header__logo_title"><?php the_field('seit_name'); ?></span>
            </div>
            <!-- submenu on top -->
            <div class="header__submenu_wrapper">
                <nav class="header__submenu">
                    <a class="header__submenu_link submenu-font-style" href="#">Катехизис</a>
                    <a class="header__submenu_link submenu-font-style" href="#">Трасляції</a>
                    <a class="header__submenu_link submenu-font-style" href="#">Події</a>
                    <a class="header__submenu_link submenu-font-style" href="#">Пожертвування</a>
                    <a class="header__submenu_link submenu-font-style" href="#">Контакти</a>
                </nav>
                <form class="header__search">
                    <label for="header_search-input" class="visually-hidden">Пошук</label>
                    <input id="header_search-input" class="header__search_input" type="text" placeholder="Пошук">
                    <button class="header__search_button" type="submit">Пошук</button>
                </form>
            </div>
            <!--  burger menu for mobile version -->
            <div class="burger-menu">
                <div class="burger-menu__line"></div>
                <div class="burger-menu__line"></div>
                <div class="burger-menu__line"></div>
            </div>
        </div>
        <!--  main menu -->
        <nav class="header__menu">
            <a href="#" class="header__menu_link title-font-style">Про Церкву</a>
            <a href="#" class="header__menu_link title-font-style">Вірування</a>
            <a href="#" class="header__menu_link title-font-style">Служіння</a>
            <a href="#" class="header__menu_link title-font-style">Спільнота</a>
            <a href="#" class="header__menu_link title-font-style">Новини</a>
            <a href="#" class="header__menu_link title-font-style">Для читання</a>
        </nav>
        <!--    mobile menu-->
        <nav class="header__menu-mobile">
            <a href="#" class="title-font-style header__menu-mobile_link">Про Церкву</a>
            <a href="#" class="title-font-style header__menu-mobile_link">Вірування</a>
            <a href="#" class="title-font-style header__menu-mobile_link">Служіння</a>
            <a href="#" class="title-font-style header__menu-mobile_link">Спільнота</a>
            <a href="#" class="title-font-style header__menu-mobile_link">Новини</a>
            <a href="#" class="title-font-style header__menu-mobile_link">Для читання</a>
            <span class="header__menu-mobile_divider"></span>
            <a href="#" class="title-font-style header__menu-mobile_link">Катехизис</a>
            <a href="#" class="title-font-style header__menu-mobile_link">Трасляції</a>
            <a href="#" class="title-font-style header__menu-mobile_link">Події</a>
            <a href="#" class="title-font-style header__menu-mobile_link">Пожертвування</a>
            <a href="#" class="title-font-style header__menu-mobile_link">Контакти</a>
        </nav>
    </header>