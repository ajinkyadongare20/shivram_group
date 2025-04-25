<?php
/**
 * The main template file
 * Template Name: Videos
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
                <h2 class="heading-title">Videos</h2>
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
        <h3>Our Videos</h3>
        <p>Explore insights, project highlights, and real estate tips from Shivram Group – building better lifestyles through innovation and trust.</p>
      </div>
    </div>
  </div>
<div class="container video-list">
  <div class="video-grid" style="display: flex;
              flex-wrap: wrap;	
              gap: 20px;
              justify-content: flex-start;">
    <div class="video-card">
      <button class="video-close" onclick="closeVideo(event)">X</button>
      <video
        src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/videos/Amenities show.mp4"
        onclick="playVideo(this)" controls></video>
    </div>
    <div class="video-card">
      <button class="video-close" onclick="closeVideo(event)">X</button>
      <video
        src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/videos/Bedroom.mp4"
        onclick="playVideo(this)" controls></video>
    </div>
    <div class="video-card">
      <button class="video-close" onclick="closeVideo(event)">X</button>
      <video
        src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/videos/Bedroom2 Video.mp4"
        onclick="playVideo(this)" controls></video>
    </div>
    <div class="video-card">
      <button class="video-close" onclick="closeVideo(event)">X</button>
      <video
        src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/videos/Bedroom2.mp4"
        onclick="playVideo(this)" controls></video>
    </div>
    <div class="video-card">
      <button class="video-close" onclick="closeVideo(event)">X</button>
      <video
        src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/videos/Booking Ad video.mp4"
        onclick="playVideo(this)" controls></video>
    </div>
    <div class="video-card">
      <button class="video-close" onclick="closeVideo(event)">X</button>
      <video
        src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/videos/devghar video.mp4"
        onclick="playVideo(this)" controls></video>
    </div>
    <div class="video-card">
      <button class="video-close" onclick="closeVideo(event)">X</button>
      <video
        src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/videos/Ground floor show.mp4"
        onclick="playVideo(this)" controls></video>
    </div>
    <div class="video-card">
      <button class="video-close" onclick="closeVideo(event)">X</button>
      <video
        src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/videos/Ground floor show.mp4"
        onclick="playVideo(this)" controls></video>
    </div>
    <div class="video-card">
      <button class="video-close" onclick="closeVideo(event)">X</button>
      <video
        src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/videos/Hall video1.mp4"
        onclick="playVideo(this)" controls></video>
    </div>
    <div class="video-card">
      <button class="video-close" onclick="closeVideo(event)">X</button>
      <video
        src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/videos/Hall Video2.mp4"
        onclick="playVideo(this)" controls></video>
    </div>
    <div class="video-card">
      <button class="video-close" onclick="closeVideo(event)">X</button>
      <video
        src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/videos/Kitchen balcony show.mp4"
        onclick="playVideo(this)" controls></video>
    </div>
    <div class="video-card">
      <button class="video-close" onclick="closeVideo(event)">X</button>
      <video
        src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/videos/Kitchen balcony.mp4"
        onclick="playVideo(this)" controls></video>
    </div>

    <div class="video-card">
      <button class="video-close" onclick="closeVideo(event)">X</button>
      <video
        src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/videos/Kitchen show.mp4"
        onclick="playVideo(this)" controls></video>
    </div>
    <div class="video-card">
      <button class="video-close" onclick="closeVideo(event)">X</button>
      <video
        src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/videos/Kitchen.mp4"
        onclick="playVideo(this)" controls></video>
    </div>
    <div class="video-card">
      <button class="video-close" onclick="closeVideo(event)">X</button>
      <video
        src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/videos/Lobby Show.mp4"
        onclick="playVideo(this)" controls></video>
    </div>

    <div class="video-card">
      <button class="video-close" onclick="closeVideo(event)">X</button>
      <video
        src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/videos/master bedroom show.mp4"
        onclick="playVideo(this)" controls></video>
    </div>
    <div class="video-card">
      <button class="video-close" onclick="closeVideo(event)">X</button>
      <video
        src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/videos/Varad Add.mp4"
        onclick="playVideo(this)" controls></video>
    </div>
    <div class="video-card">
      <button class="video-close" onclick="closeVideo(event)">X</button>
      <video
        src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/videos/Varad Flat.mp4"
        onclick="playVideo(this)" controls></video>
    </div>

    <div class="video-card">
      <button class="video-close" onclick="closeVideo(event)">X</button>
      <video
        src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/videos/varad intro video.mp4"
        onclick="playVideo(this)" controls></video>
    </div>
    <div class="video-card">
      <button class="video-close" onclick="closeVideo(event)">X</button>
      <video
        src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/videos/varad navratri offer.mp4"
        onclick="playVideo(this)" controls></video>
    </div>
    <div class="video-card">
      <button class="video-close" onclick="closeVideo(event)">X</button>
      <video
        src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/videos/Varad res boobking ad.mp4"
        onclick="playVideo(this)" controls></video>
    </div>
  </div>

</div>




<?php
get_footer();