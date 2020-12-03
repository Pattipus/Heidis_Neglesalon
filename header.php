<!DOCTYPE html>
<html lang="<?php bloginfo("language")?>">

<head>
    <meta charset="<?php bloginfo("charset")?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <title><?php bloginfo("title")?></title>
</head>

<body>
    <h2 class="menuBtn" onclick="menu()"> Menu</h2>
    <header id="header">
        <div class="logo">
            <a href="index.html"><img src="http://heidis-neglesalon.dk/wp-content/uploads/2020/12/logo.svg" alt="logo" class="logoSvg"></a>
        </div>
        
        <?php wp_nav_menu(array("theme_location" => "header-menu")) ?>
        
        <div class="social">
            <a href="mailto:heidisneglesalon@gmail.com" target="_blank"><img src="http://heidis-neglesalon.dk/wp-content/uploads/2020/12/Mail-Icon.svg" alt="mail link" class="socialIcon"></a>
            <a href="https://www.facebook.com/Heidis-Neglesalon-105601484740819" target="_blank"><img src="http://heidis-neglesalon.dk/wp-content/uploads/2020/12/Facebook-Icon.svg" alt="facebook link" class="socialIcon"></a>
            <a href="https://www.instagram.com/heidis_neglesalon/" target="_blank"><img src="http://heidis-neglesalon.dk/wp-content/uploads/2020/12/Instagram-Icon.svg" alt="instagram link" class="socialIcon"></a>
        </div>
    </header>