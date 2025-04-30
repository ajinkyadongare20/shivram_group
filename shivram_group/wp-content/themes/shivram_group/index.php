<?php
/**
 * The main template file
 * Template Name: Home
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

<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            <li class="slides-li-bg"
                style="background-image: url('http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/img_bg_1.jpg');">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <span class="status">Sale</span>
                                    <h1>Luxurious 4 BHK House in Mumbai, India</h1>
                                    <h2 class="price">INR 45,00,000</h2>
                                    <p>Experience upscale living with this 4 BHK home in Mumbai – spacious, stylish, and
                                        built with Shivram Group’s hallmark of quality and trust.</p>
                                    <p class="details">
                                        <span></i> 2000 sq. ft.</span>
                                        <span> 4 Bedrooms</span>
                                        <span></i> 3 Bathrooms</span>
                                        <span></i> 2 Car Garage</span>
                                    </p>
                                    <a class="btn btn-primary btn-lg" href="#">Learn More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="slides-li-bg"
                style="background-image: url('http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/img_bg_2.jpg');">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <span class="status">Rent</span>
                                    <h1>New House in Nashik, India</h1>
                                    <h2 class="price">INR 15,000</h2>
                                    <p>Spacious new 3BHK house available for rent in Nashik. Modern amenities, prime
                                        location, and ideal for families seeking comfort at INR 20,000/month."</p>
                                    <p class="details">
                                        <span>1600 sq. ft.</span>
                                        <span>3 Bedrooms</span>
                                        <span>3 Bathrooms</span>
                                        <span>1 Car Garage</span>
                                    </p>
                                    <p><a class="btn btn-primary btn-lg" href="#">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="slides-li-bg"
                style="background-image: url('http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/img_bg_3.jpg');">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <span class="status">Sale</span>
                                    <h1>Elegant 4 BHK House in Pune, India</h1>
                                    <h2 class="price">INR 35,00,000</h2>
                                    <p>This beautifully designed 4 BHK home in Pune offers 2000 sq. ft. of luxury
                                        living, modern amenities, and premium craftsmanship by Shivram Group.</p>
                                    <p class="details">
                                        <span>2000 sq. ft.</span>
                                        <span>4 Bedrooms</span>
                                        <span>3 Bathrooms</span>
                                        <span>2 Car Garage</span>
                                    </p>

                                    <p><a class="btn btn-primary btn-lg" href="#">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>


<!-- Popular Services -->
<div id="fh5co-features">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box py-5">
                <h3 class="pt-lg-5 pt-sm-3">
                    <?php echo get_field('home_popular_services_tittle', get_the_ID()) ?>
                </h3>
                <p>
                    <?php echo get_field('home_popular_services_text', get_the_ID()) ?>
                </p>
                <!-- <?php var_dump($home_popular_services_tittle); ?> -->
            </div>
        </div>

        <div class="row">

            <?php 
                    $home_popular_service = new WP_Query( array( 'post_type' => 'home_popular_service' ));
                    while ( $home_popular_service->have_posts() ) : $home_popular_service->the_post();

                ?>

            <div class="col-md-4 animate-box">
                <div class="feature-left">
                    <span class="icon">
                        <i class="<?php echo get_field('home_popular_services_icon', get_the_ID()) ?>"></i>
                    </span>
                    <div class="feature-copy">
                        <h3>
                            <?php echo get_field('home_popular_services_tittle', get_the_ID()) ?>
                        </h3>
                        <p>
                            <?php echo get_field('home_popular_services_text', get_the_ID()) ?>
                        </p>
                    </div>
                </div>
            </div>

            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>


<!-- Popular Properties -->
<div id="fh5co-popular-properties" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">

                <h3 class="pt-lg-5 pt-sm-3">
                    <?php echo get_field('home_popular_properties_tittle', get_the_ID()) ?>
                </h3>
                <p>
                    <?php echo get_field('home_popular_properties_text', get_the_ID()) ?>
                </p>

            </div>
        </div>
        <div class="row">

            <?php 
                    $home_properties_serv = new WP_Query( array( 'post_type' => 'home_properties_serv' ));
                    while ( $home_properties_serv->have_posts() ) : $home_properties_serv->the_post();

					$image_url = get_field('home_properties_image', get_the_ID());

                ?>

            <div class="col-md-4 animate-box">
                <a href="#" class="fh5co-property" style="background-image: url('<?php echo esc_url($image_url); ?>');">
                    <span class="status">
                        <?php echo get_field('home_properties_status', get_the_ID()) ?>
                    </span>
                    <div class="prop-details">
                        <span class="price">
                            <?php echo get_field('home_properties_price', get_the_ID()) ?>
                        </span>
                        <h3>
                            <?php echo get_field('home_properties_desc', get_the_ID()) ?>
                        </h3>
                    </div>
                </a>
            </div>

            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>

<!-- Happy Clients -->
<div id="fh5co-testimonial"
    style="background-image:url('http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/img_bg_2.jpg');">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>
                    <?php echo get_field('home_heading_client_testimonials', get_the_ID()) ?>
                </h2>
            </div>
        </div>

        <div class="row">


            <?php 
                    $home_client_testi = new WP_Query( array( 'post_type' => 'home_client_testi' ));
                    while ( $home_client_testi->have_posts() ) : $home_client_testi->the_post();

                ?>

            <div class="col-md-4">
                <div class="box-testimony animate-box">
                    <blockquote>
                        <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                        <p>
                            <?php echo get_field('home_client_testimonials_desc', get_the_ID()) ?>
                        </p>
                        <footer class="mt-2 fw-bold text-end">
                            <?php echo get_field('home_testimonials_client_name', get_the_ID()) ?>
                        </footer>
                    </blockquote>
                </div>
            </div>


            <?php endwhile; wp_reset_postdata(); ?>

        </div>
    </div>
</div>

<!-- Newest Properties -->
<div id="fh5co-properties" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">

                <h3 class="pt-lg-5 pt-sm-3">
                    <?php echo get_field('home_heading_newest_properties_tittle', get_the_ID()) ?>
                </h3>
                <p>
                    <?php echo get_field('home_heading_newest_properties_text', get_the_ID()) ?>
                </p>

            </div>
        </div>
        <div class="row">


            <?php 
                    $home_newest_properti = new WP_Query( array( 'post_type' => 'home_newest_properti' ));
                    while ( $home_newest_properti->have_posts() ) : $home_newest_properti->the_post();

					$home_newest_properties_image = get_field('home_newest_properties_image', get_the_ID());

            ?>


            <div class="col-md-4 animate-box">
                <div class="property">
                    <a href="#" class="fh5co-property"
                        style="background-image: url('<?php echo esc_url($home_newest_properties_image); ?>');">
                        
						<span class="status">
                            <?php echo get_field('home_newest_properties_status', get_the_ID()) ?>
                        </span>
                        <?php echo get_field('home_newest_properties_list_details', get_the_ID()) ?>
                    </a>
                    <div class="property-details">
                        <h3>
                            <?php echo get_field('home_newest_properties_property_details', get_the_ID()) ?>
                        </h3>
                        <span class="price">
                            <?php echo get_field('home_newest_properties_price', get_the_ID()) ?>
                        </span>
                        <p>
                            <?php echo get_field('home_newest_properties_desc', get_the_ID()) ?>
                        </p>
                        <span class="address"><i class="icon-map"></i>
                            <?php echo get_field('home_newest_properties_address', get_the_ID()) ?>
                        </span>
                    </div>
                </div>
            </div>

            <?php endwhile; wp_reset_postdata(); ?>

        </div>
    </div>
</div>



<!-- Our Agents -->
<div id="fh5co-about" class="fh5co-agent">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Our Agents</h3>
                <p>Meet our expert real estate professionals who are dedicated to helping you find the perfect
                    residential or commercial space with personalized guidance.</p>
            </div>
        </div>
        <!-- <div class="row">
			
			<div class="col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
				<div class="fh5co-staff">
					<img class="img-responsive" src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/user-1.jpg" alt="Agent Rohan Deshmukh">
					<h3>Rohan Deshmukh</h3>
					<p>Specializes in premium residential properties across Pune and Mumbai. Trusted for seamless and strategic home buying experiences.</p>
				</div>
			</div>
			
			<div class="col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
				<div class="fh5co-staff">
					<img class="img-responsive" src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/user-2.jpg" alt="Agent Neha Kulkarni">
					<h3>Neha Kulkarni</h3>
					<p>Commercial property expert with deep insight into IT hubs and office space investments in key metro areas.</p>
				</div>
			</div>
			
			<div class="col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
				<div class="fh5co-staff">
					<img class="img-responsive" src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/user-3.jpg" alt="Agent Amit Patil">
					<h3>Amit Patil</h3>
					<p>Focused on high-value investments and property portfolio management with tailored strategies for real estate growth.</p>
				</div>
			</div>
			
			<div class="col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
				<div class="fh5co-staff">
					<img class="img-responsive" src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/user-4.jpg" alt="Agent Priya Sharma">
					<h3>Priya Sharma</h3>
					<p>Expert in luxury real estate projects and first-time buyer consultation with personalized customer engagement.</p>
				</div>
			</div>
		</div> -->
    </div>
</div>



<!-- Recent Blog -->
<div id="fh5co-blog-section" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">

                <h3 class="pt-lg-5 pt-sm-3">
                    <?php echo get_field('home_recent_blogs', get_the_ID()) ?>
                </h3>
                <p>
                    <?php echo get_field('home_recent_blogs_text', get_the_ID()) ?>
                </p>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row row-bottom-padded-md">

            <?php 
                    $home_recent_blog = new WP_Query( array( 'post_type' => 'home_recent_blog' ));
                    while ( $home_recent_blog->have_posts() ) : $home_recent_blog->the_post();


					$home_recent_blog_image = get_field('home_recent_blog_image', get_the_ID());


                ?>


            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="fh5co-blog animate-box">
                    <a href="#"><img class="img-responsive" src="<?php echo esc_url($home_recent_blog_image); ?>"
                            alt="Featured Residential Projects"></a>
                    <div class="blog-text">
                        <div class="prod-title">
                            <h3><a href="#">
                                    <?php echo get_field('recent_blog_tittle', get_the_ID()) ?>
                                </a></h3>
                            <span class="posted_by">
                                <?php echo get_field('recent_blog_posted_by', get_the_ID()) ?>
                            </span>
                            <span class="comment"><a href="#">
                                    <?php echo get_field('home_recent_blog_comment', get_the_ID()) ?><i
                                        class="icon-bubble2"></i>
                                </a></span>
                            <p>
                                <?php echo get_field('home_recent_blog_text', get_the_ID()) ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <?php endwhile; wp_reset_postdata(); ?>

        </div>
    </div>
</div>


<?php
get_footer();