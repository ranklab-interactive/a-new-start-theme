<div class="wide-container footer-stretch clearfix">
    <div class="row">
        <footer class="large-18 columns">
            <div class="small-18 columns text-center pad">
                <h3><small>OUR PRINCIPLES</small></h3>
                <h4>Support, Transition, Action, Resolve, Transformation</h4>
            </div>
            <div class="small-18 columns footer-block" data-equalizer>
                <!-- logo -->
                <div class="large-4 columns logo-footer text-center pad">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/style/images/logo-footer.png" alt="Logo" class="logo-footer">
                    </a>
                    <div class="nav-cta text-center"><a href="tel:+18881234567"><h3>888-123-4567</h3></a></div>
                </div>
                <!-- /logo -->
                <div class="large-12 columns medium-offset-2 pad">
                <?php wp_nav_menu(array("menu" => "Footer Menu 1", 'container' => 'false', 'items_wrap' => '<div class="medium-9 large-4 columns"><h3>ABOUT US</h3><ul class="no-bullet">%3$s</ul></div>')); ?>
                <?php wp_nav_menu(array('menu' => 'Footer Menu 2', 'container' => 'false', 'items_wrap' => '<div class="medium-9 large-4 columns"><h3>WHAT WE TREAT</h3><ul class="no-bullet">%3$s</ul></div>')); ?>
                <?php wp_nav_menu(array("menu" => "Footer Menu 3", 'container' => 'false', 'items_wrap' => '<div class="medium-9 large-4 columns "><h3>TREATMENT</h3><ul class="no-bullet">%3$s</ul></div>')); ?>
                                <?php wp_nav_menu(array("menu" => "Footer Menu 4", 'container' => 'false', 'items_wrap' => '<div class="medium-9 large-4 columns end"><h3>QUICK LINKS</h3><ul class="no-bullet">%3$s</ul></div>')); ?>
                </div>
            </div>      
        </footer>
    </div>
    <div id="copyright">
        <div class="row text-center">
            A New Start Copyright
        </div>
    </div>
</div><!-- end footer-container -->

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/foundation.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/foundation.equalizer.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr.min.js"></script>
<script>
    $(document).foundation();
    /* TODO -  Customize Sidr menu if applicable*/       
    $(document).ready(function(){
        //        $('#device-menu').sidr({
        //            name: 'sidr-left',
        //            body: '.device-only',
        //            side: 'left',
        //            source: '.menu-nav-header'
        //        });
        //        $('#more-menu').sidr({
        //            name: 'sidr-inner',
        //            body: '.false-body',
        //            renaming: false,
        //            side: 'new',
        //            source: '.more-menu-nav-header'
        //        });
        /* TODO -  Customize Slick Slider */
        $('.home-block-2-slider-scroll').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            adaptiveHeight: true,
            useCSS: false
        });
    });
</script>
</body>
</html>
