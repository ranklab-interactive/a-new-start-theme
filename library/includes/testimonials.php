<div class="row">
    <?php $args=array('post_type'=>'testimonials', 'orderby'=>'rand', 'posts_per_page'=>'1');
$testimonials=new WP_Query($args);
while ($testimonials->have_posts()) : $testimonials->the_post();?>
        <?php $testimonial_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full-size');
        $testimonial_img_url = $testimonial_img['0'];
        ?>
    <div class="small-14 medium-7 large-5 columns testimonial-block-photo small-centered medium-uncentered" style="background-image:url('<?php echo $testimonial_img_url ?>');">
    </div>
    <div class="medium-11 large-13 columns">
        <div class="medium-18 large-13 columns no-space">
            <div class="testimonial-block-quote">
                <p><?php echo get_the_content(); ?></p>
                <span>- <?php the_title(); ?></span>
            </div>
        </div>
        <div class="medium-18 large-5 columns small-text-center medium-text-left testimonial-block-more">
            <button class="testimonial-block-more-button"><a href="#">Testimonials</a></button>
        </div>
    </div>
        <?php
endwhile;
wp_reset_postdata(); ?>
</div>