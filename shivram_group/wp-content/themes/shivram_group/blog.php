<?php
/**
 * The main template file
 * Template Name: Blog
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shivram_group
 */

 get_header();
 ?>
<?php 
                    
     $blog_background_banner_image = get_field('blog_background_banner_image', get_the_ID());
          
 ?>

<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            <li style="background-image: url('<?php echo esc_url($blog_background_banner_image); ?>');">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                            <div class="slider-text-inner">
                                <h2 class="heading-title">
                                    <?php echo get_field('blog_heading_tittle', get_the_ID()) ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<div id="fh5co-blog-section" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>
                    <?php echo get_field('blog_main_heading_tittle', get_the_ID()) ?>
                </h3>
                <p>
                    <?php echo get_field('blog_main_heading_text', get_the_ID()) ?>
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row row-bottom-padded-md">


            <?php 
                    $blog_recent_page = new WP_Query( array( 'post_type' => 'blog_recent_page' ));
                    while ( $blog_recent_page->have_posts() ) : $blog_recent_page->the_post();

					          $blog_image_blog = get_field('blog_image_blog', get_the_ID());

                    $blog_recent_learn_more = get_field('blog_recent_learn_more', get_the_ID());
                    $blog_recent_learn_more_url = get_field('blog_recent_learn_more_url', get_the_ID());

          ?>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="fh5co-blog animate-box">
                    <a href="#"><img class="img-responsive" src="<?php echo esc_url($blog_image_blog); ?>" alt=""></a>
                    <div class="blog-text">
                        <div class="prod-title">
                            <h3><a href="#">
                                    <?php echo get_field('blog_heading_tittle_blog', get_the_ID()) ?>
                                </a></h3>
                            <span class="posted_by">
                                <?php echo get_field('blog_recent_posted_by', get_the_ID()) ?>
                            </span>
                            <span class="comment"><a href="#">
                                    <?php echo get_field('blog_recent_comments', get_the_ID()) ?>21<i
                                        class="icon-bubble2"></i>
                                </a></span>
                            <p>
                                <?php echo get_field('blog_recent_text_section', get_the_ID()) ?>
                            </p>
                            <h3><a href="<?php echo esc_url($blog_recent_learn_more_url); ?>">
                                    <?php echo esc_html($blog_recent_learn_more); ?>
                                </a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>

            <?php endwhile; wp_reset_postdata(); ?>


        </div>
    </div>
</div>


<?php
get_footer();