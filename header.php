<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title(''); ?></title>
            
        <!-- dns prefetch -->
        <link href="//www.google-analytics.com" rel="dns-prefetch">
            
        <!-- meta -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
            
        <!-- icons -->
        <link href="<?php echo get_template_directory_uri(); ?>/style/images/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/style/images/icons/touch.png" rel="apple-touch-icon-precomposed">
            
        <!-- css + javascript -->
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style/css/normalize.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style/css/sidr/jquery.sidr.light.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style/css/slick.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style/css/dev-style.css"/>
<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        
        <!-- header -->
        <div class="wide-container clearfix">
            <header class="large-18 no-space columns" data-equalizer>
                <div class="small-4 medium-3 large-1 columns text-center pad" id="more-menu" data-equalizer-watch><a id="responsive-menu-button" href="#sidr-main"><img src="<?php echo get_template_directory_uri(); ?>/style/images/hamburger.png" alt="Menu" title=""></a></div>
                <div class="small-14 medium-5 large-3 columns valign-middle">
                    <!-- logo -->
                    <div class="logo centered" data-equalizer-watch>
                        <a href="<?php echo home_url(); ?>" title="">
                            <img src="<?php echo get_template_directory_uri(); ?>/style/images/logo-header.png" alt="Logo" title="">
                        </a>
                    </div><!-- /logo -->
                </div>
                <div class="large-10 columns hide-for-medium-down valign-middle no-space">
                    <nav id="main-nav" class="hide-for-medium-down centered" role="navigation">
                                <?php wp_nav_menu(array('menu' => 'Main Menu', 'menu_class' => 'main-nav-menu', 'depth' => 1, 'items_wrap' => '<div class="menu-nav-header"><ul class="small-text-center medium-text-left">%3$s<li id="menu-item" class="nav-menu-more menu-item menu-item-type-post_type menu-item-object-page page_item"><a href="#" id="menu-cta-link" style="">About Us</a></li><li id="menu-item" class="nav-menu-more menu-item menu-item-type-post_type menu-item-object-page page_item"><a href="#" id="menu-cta-link" style="">Contact Us</a></li></ul></div>')); ?>
                    </nav>
                </div>
                <div class="small-18 medium-5 large-4 columns valign-middle text-right nav-cta-block">
                    <div class="nav-cta centered text-center right">
                        <h2><small>Take that First Step</small></h2>
                        <h3>888-123-4567</h3>
                    </div>
                </div>
            </header>
        </div><!-- end header-container -->