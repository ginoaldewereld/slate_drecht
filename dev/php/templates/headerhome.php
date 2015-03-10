<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/appletouchicon.png">

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >

    <div class="topbanner">
        <div class="u-gridContainer toptelefoon">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/phoneicon.svg" /> 078-6137444
        </div>
    </div>

  <nav class="header-midden">
    <nav class="Bot-Nav">
        <div class="u-gridContainer header-midden-nav">
            <div class="Nav-toggle u-cf">
                <a class="Navigation-menuToggle" id="js-navCollapse">
                    <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                        <use xlink:href="#icon-menu2"></use>
                    </svg>
                </a>
            </div>
            <div class="logo">
                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" />
            </div>
            <div class="navi">
                <?php include 'includes/navigation.php'; ?>
            </div>
            
        </nav>         
    </nav>

<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!-- BX-SLIDER -->
<!-- ------------------------------------------------------------------------------------------------------------------- -->
    <div class="slidercontainer">
        <div class="u-gridContainer">
            <div class="sloganslider1">Ja, wij zijn goed</div>
            <div class="sloganslider2">Tarieven op administratiekantoor-niveau</div>
        </div>

        <div class="welkombanner">
            Welkom bij Drechtaccount!
        </div>
            <div class="Slider"> <!-- Dit is de slider in de onderkant header -->
                    <img class="header-onderkant-slider-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sliderimage1.png" >
                    <img class="header-onderkant-slider-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sliderimage2.png" >
                    <img class="header-onderkant-slider-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sliderimage3.png" >
            </div>   <!-- einde slider van de onderkant header -->   
    </div>