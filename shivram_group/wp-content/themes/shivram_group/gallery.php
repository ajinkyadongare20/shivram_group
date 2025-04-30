<?php
/**
 * The main template file
 * Template Name: Gallery
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
                    
            $gallery_background_banner_image_ = get_field('gallery_background_banner_image_', get_the_ID());
                         
?>

<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            <li style="background-image: url('<?php echo esc_url($gallery_background_banner_image_); ?>');">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                            <div class="slider-text-inner">
                                <h2 class="heading-title">
                                    <?php echo get_field('gallery_banner_heading_title', get_the_ID()) ?>
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
                    <?php echo get_field('gallery_main_heading_tittle', get_the_ID()) ?>
                </h3>
                <p>
                    <?php echo get_field('gallery_main_heading_text', get_the_ID()) ?>
                </p>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row g-5">


            <?php 
                    $gallery_cpt = new WP_Query( array( 'post_type' => 'gallery_cpt' ));
                    while ( $gallery_cpt->have_posts() ) : $gallery_cpt->the_post();

                    $gallery_product_images = get_field('gallery_product_images', get_the_ID());

                    $gallery_product_view_link = get_field('gallery_product_view_link', get_the_ID());
                    $gallery_product_view = get_field('gallery_product_view', get_the_ID());
                    // echo $gallery_product_view;
                    // var_dump($gallery_product_card_info); 
                    

            ?>
            
            <div class="col-md-4">
                <div class="card-box-a">
                    <img src="<?php echo esc_url($gallery_product_images); ?>" alt="Property 2">
                    <div class="card-overlay-a-content">
                        <div class="card-header-a">
                            <h2 class="card-title-a">
                                <a href="#">
                                    <?php echo get_field('gallery_card_tittle', get_the_ID()) ?>204 Mount<br>Olive Road
                                    Two
                                </a>
                            </h2>
                        </div>
                        <div class="card-body-a">
                            <div class="price-box d-flex">
                                <span class="price-a">
                                    <?php echo get_field('gallery_price_box', get_the_ID()) ?>RENT | $12,000
                                </span>
                            </div>
                            <a href="<?php echo esc_url($gallery_product_view_link); ?>" class="link-a">
                                <?php echo esc_html($gallery_product_view); ?> &rarr;
                            </a>
                        </div>
                    </div>
                    <div class="card-footer-a">
                        <?php echo get_field('gallery_product_card_info', get_the_ID()) ?>
                    </div>
                </div>
            </div>

            <?php endwhile; wp_reset_postdata(); ?>

        </div>
    </div>
</div>


<?php
get_footer();