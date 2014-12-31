<?php
/*
Template Name: Homepage template
*/
?>
<?php get_header(); ?>
<div id="home-featured-image-container" class="clearfix">
        <?php $featuredimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full-size');
        $url = $featuredimg['0'];
        ?>
    
    <div class="wide-featured-image clearfix" style="background-image:url('<?php echo $url ?>');">
        <div class="featured-image-text">
            <div class="large-17 columns large-offset-1">
                <span>Lorem ipsum dolor sit amit</span><button>Get Started</button>
            </div>
        </div>
    </div>
</div>
<div class="wide-container clearfix">
    <div class="small-18 columns">
        <div class="row">
            <div class="small-14 medium-7 large-5 columns testimonial-block-photo small-centered medium-uncentered" style="background-image: url('<?php echo get_template_directory_uri(); ?>/style/images/home-testm-1.jpg');">
            </div>
            <div class="medium-11 large-13 columns">
                <div class="medium-18 large-13 columns no-space">
                    <div class="testimonial-block-quote">
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                        <span>- Craig</span>
                    </div>
                </div>
                <div class="medium-18 large-5 columns small-text-center medium-text-left testimonial-block-more">
                    <button class="testimonial-block-more-button">Testimonials</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wide-container home-block-2 clearfix">
    <div class="row valign-middle-absolute">
        <div class="small-18 columns pad">
            <div class="small-18 columns text-center">
                <h2>Experience A New Start</h2>
            </div>
            <div class="home-block-2-2">
                <div class="medium-9 columns small-text-center medium-text-right">
                    <button class="home-block-2-lbutton">Tour Our Facilities</button>
                </div>
                <div class="medium-9 columns small-text-center medium-text-left no-space">
                    <button class="home-block-2-rbutton">Meet Our Staff</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wide-container home-block-3 clearfix">
    <div class="small-18 columns pad">
        <div class="row pad" data-equalizer>
            <div class="medium-6 columns text-center home-block-3-1">
                <div class="row">
                    <div class="small-18 columns small-centered">
                        <div  class="small-18 columns text-left" data-equalizer-watch>
                            <h4>Treatment Programs</h4>
                            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non metus auctor fringilla. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                        <button class="home-block-button button-blue">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="medium-6 columns text-center home-block-3-2">
                <div class="row">
                    <div class="small-18 columns small-centered">
                        <div  class="small-18 columns text-left" data-equalizer-watch>
                            <h4>What's Next?</h4>
                            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                        <button class="home-block-button button-blue">Insurance</button>
                    </div>
                </div>
            </div>
            <div class="medium-6 columns text-center home-block-3-3">
                <div class="row valign-middle-all">
                    <div class="small-18 columns text-center nav-cta">
                        <h2><small>Take that First Step</small></h2>
                        <h3>888-123-4567</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>