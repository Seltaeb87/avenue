<?php
/*
 * Theme homepage
 * @author bilal hassan <info@smartcatdesign.net>
 * 
 */
get_header();
?>
<?php if (of_get_option('sc_slider_bool', 'yes') == 'yes') echo sc_slider(); ?>
<?php if (of_get_option('sc_cta_bool', 'yes') == 'yes') echo sc_ctas(); ?>
<?php if (of_get_option('sc_banner_bool', 'yes') == 'yes') echo sc_banner(); ?>
<div class="site-content-wrapper">
    <div id="content" class="page-content row <?php echo of_get_option('sc_container_width'); ?>">
<<<<<<< HEAD
        <div class="col-md-9 page-container <?php echo of_get_option('sc_homepage_sidebar'); ?>">
=======
        <div class="col-md-12">
            <div class="col-md-9">
>>>>>>> 4ca6086ee6386f8a4e7674a64b2b2dac871d17d8
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    if ('posts' == get_option('show_on_front')) {
                        get_template_part('content', 'posts');
                    } else {
                        get_template_part('content', 'page');
                    }
                    // If comments are open or we have at least one comment, load up the comment template
                    if (comments_open() || '0' != get_comments_number()) :
                        comments_template();
                    endif;
                    ?>
                <?php endwhile; // end of the loop.   ?>
            </div>
<<<<<<< HEAD
            
            <?php if( 'sidebar-on' == of_get_option('sc_homepage_sidebar', 'sidebar-off')) : ?>
            <div class="col-md-3 avenue-sidebar">
                <?php get_sidebar(); ?>
            </div>
            <?php endif; ?>
=======
            <div class="col-md-3 avenue-sidebar">
                <?php get_sidebar('homepage'); ?>
            </div>
        </div>
>>>>>>> 4ca6086ee6386f8a4e7674a64b2b2dac871d17d8
    </div>
</div>
<?php get_footer(); ?>
