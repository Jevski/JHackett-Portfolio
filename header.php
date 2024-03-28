<!doctype html>
<html lang ="en-GB">
    <head>
        <meta charset ="utf-8"/> <!-- Set character encoding to UTF-8 -->
        <meta name ="viewport" content ="width=device-width, initIal-scale=1" /> <!-- Configure viewport for responsive design -->
        <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Preconnect to Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Preconnect to Google Fonts server -->
        <!-- Import Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:wght@200..700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet"> 
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>       
        <title>Jakes Portfolio</title> <!-- Set the title of the page -->
        <?php wp_head(); ?> 
    </head>
<body>



    <div>

</div>
<header class="header-navigation">
<img class="logo-navigation" href="<?php echo home_url(); ?>" src="<?php echo get_template_directory_uri(); ?>\Assets\logo.jpg">



<div class="menu-navigation">

    <div class="menu-item">
        <a href="http://portfolio.local/" class="home-button-menu">Accueil</a>
    </div>

    <div class="menu-item">
        <a href="http://portfolio.local/#portfolio" >Portfolio</a>
    </div>

    <div class="menu-item">
        <a href="http://portfolio.local/#skills">Compétences</a>
    </div>

    <div class="menu-item ">
        <a class="contact-menu" >Contact</a>
    </div>
</div>


</div>
<div class="mobile-header">
    <img class="burger-icon" src="<?php echo get_template_directory_uri(); ?>\Assets\menu.png">

    <?php get_template_part('/template-parts/open-menu'); ?>

</div>

</header>

<!-- 
<div class="language-menu">
<?php 
    wp_nav_menu(
        array(
            'menu'=> 'Language',
            'container' => '',
        )
    );
?>
</div> -->


</body>