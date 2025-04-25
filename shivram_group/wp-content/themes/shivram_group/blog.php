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

<aside id="fh5co-hero" class="js-fullheight">
  <div class="flexslider js-fullheight">
    <ul class="slides">
      <li
        style="background-image: url('http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/img_bg_3.jpg');">
        <div class="overlay"></div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
              <div class="slider-text-inner">
                <h2 class="heading-title">Our Blog</h2>
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
        <h3>Our Blog</h3>
        <p>Explore insights, project highlights, and real estate tips from Shivram Group – building better lifestyles through innovation and trust.</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row row-bottom-padded-md">

      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="fh5co-blog animate-box">
          <a href="#"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/property-4.jpg" alt=""></a>
          <div class="blog-text">
            <div class="prod-title">
              <h3><a href="#">Shivram Heights – Premium Living in Baner</a></h3>
              <span class="posted_by">April 10th</span>
              <span class="comment"><a href="#">21<i class="icon-bubble2"></i></a></span>
              <p>Shivram Heights brings luxury living to Baner, Pune with 2 & 3 BHK premium apartments, world-class amenities, and excellent connectivity to Hinjewadi and Aundh.</p>
              <p><a href="#">Learn More...</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="fh5co-blog animate-box">
          <a href="#"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/property-2.jpg" alt=""></a>
          <div class="blog-text">
            <div class="prod-title">
              <h3><a href="#">Why Invest in Shivram Properties</a></h3>
              <span class="posted_by">April 5th</span>
              <span class="comment"><a href="#">18<i class="icon-bubble2"></i></a></span>
              <p>Discover why Shivram Group projects in Pune are ideal for long-term investment – strategic locations, high ROI, and superior build quality.</p>
              <p><a href="#">Learn More...</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix visible-sm-block"></div>

      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="fh5co-blog animate-box">
          <a href="#"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/property-3.jpg" alt=""></a>
          <div class="blog-text">
            <div class="prod-title">
              <h3><a href="#">Smart Homes by Shivram Group</a></h3>
              <span class="posted_by">March 25th</span>
              <span class="comment"><a href="#">14<i class="icon-bubble2"></i></a></span>
              <p>Experience a new level of convenience and safety with Shivram’s smart home integrations across all residential projects in Pune.</p>
              <p><a href="#">Learn More...</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="fh5co-blog animate-box">
          <a href="#"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/property-4.jpg" alt=""></a>
          <div class="blog-text">
            <div class="prod-title">
              <h3><a href="#">Upcoming Launch: Shivram Gardenia</a></h3>
              <span class="posted_by">March 10th</span>
              <span class="comment"><a href="#">22<i class="icon-bubble2"></i></a></span>
              <p>Introducing Shivram Gardenia – an upcoming residential project in Kharadi with serene views, open spaces, and unmatched design aesthetics.</p>
              <p><a href="#">Learn More...</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="fh5co-blog animate-box">
          <a href="#"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/property-2.jpg" alt=""></a>
          <div class="blog-text">
            <div class="prod-title">
              <h3><a href="#">Commercial Spaces at Shivram Towers</a></h3>
              <span class="posted_by">February 18th</span>
              <span class="comment"><a href="#">19<i class="icon-bubble2"></i></a></span>
              <p>Shivram Towers offers high-footfall commercial shops and offices in the heart of Wakad – ideal for startups, showrooms, and co-working spaces.</p>
              <p><a href="#">Learn More...</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix visible-sm-block"></div>

      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="fh5co-blog animate-box">
          <a href="#"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/property-6.jpg" alt=""></a>
          <div class="blog-text">
            <div class="prod-title">
              <h3><a href="#">Customer Testimonials & Success Stories</a></h3>
              <span class="posted_by">February 5th</span>
              <span class="comment"><a href="#">25<i class="icon-bubble2"></i></a></span>
              <p>Meet our proud homeowners who share their experience of finding their dream home with Shivram Group. Trust, transparency, and timely delivery.</p>
              <p><a href="#">Learn More...</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix visible-md-block"></div>

	  <div class="col-lg-4 col-md-4 col-sm-6">
  <div class="fh5co-blog animate-box">
    <a href="#"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/property-2.jpg" alt=""></a>
    <div class="blog-text">
      <div class="prod-title">
        <h3><a href="#">Shivram Elite: Homes in Tathawade</a></h3>
        <span class="posted_by">January 30th</span>
        <span class="comment"><a href="#">16<i class="icon-bubble2"></i></a></span>
        <p>Shivram Elite offers 1 & 2 BHK homes in Tathawade, blending modern design with affordability for young professionals and growing families.</p>
        <p><a href="#">Learn More...</a></p>
      </div>
    </div>
  </div>
</div>
<div class="clearfix visible-md-block"></div>

<div class="col-lg-4 col-md-4 col-sm-6">
  <div class="fh5co-blog animate-box">
    <a href="#"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/property-4.jpg" alt=""></a>
    <div class="blog-text">
      <div class="prod-title">
        <h3><a href="#">Loan Assistance & Financing by Shivram</a></h3>
        <span class="posted_by">January 20th</span>
        <span class="comment"><a href="#">10<i class="icon-bubble2"></i></a></span>
        <p>Shivram Group partners with leading banks to provide easy home loan approvals, EMI support, and financing consultation to buyers.</p>
        <p><a href="#">Learn More...</a></p>
      </div>
    </div>
  </div>
</div>
<div class="clearfix visible-md-block"></div>

<div class="col-lg-4 col-md-4 col-sm-6">
  <div class="fh5co-blog animate-box">
    <a href="#"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/property-6.jpg" alt=""></a>
    <div class="blog-text">
      <div class="prod-title">
        <h3><a href="#">Sustainable Construction Practices</a></h3>
        <span class="posted_by">January 10th</span>
        <span class="comment"><a href="#">12<i class="icon-bubble2"></i></a></span>
        <p>At Shivram Group, we prioritize sustainability with eco-friendly materials, rainwater harvesting, and green building techniques across all projects.</p>
        <p><a href="#">Learn More...</a></p>
      </div>
    </div>
  </div>
</div>
<div class="clearfix visible-md-block"></div>


    </div>
  </div>
</div>


<!-- fh5co-blog-section -->

<?php
get_footer();