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
				<h3 class="pt-lg-5 pt-sm-3">Popular Services</h3>
				<p>Explore our premium residential, commercial, and investment property solutions—designed with
					innovation,
					built on trust, and tailored to meet every lifestyle and business need across India.
				</p>
			</div>
		</div>

		<div class="row">
			<!-- Feature 1 -->
			<div class="col-md-4 animate-box">
				<div class="feature-left">
					<span class="icon">
						<i class="icon-map"></i>
					</span>
					<div class="feature-copy">
						<h3>Relocation Services</h3>
						<p>Simplify your home shifting experience with expert support and smooth transitions to your new
							property location.</p>
					</div>
				</div>
			</div>

			<!-- Feature 2 -->
			<div class="col-md-4 animate-box">
				<div class="feature-left">
					<span class="icon">
						<i class="icon-browser"></i>
					</span>
					<div class="feature-copy">
						<h3>Easy Home Loans</h3>
						<p>We assist in finding the right mortgage solution tailored to your budget, long-term goals, and property investment plans.</p>

					</div>
				</div>
			</div>

			<!-- Feature 3 -->
			<div class="col-md-4 animate-box">
				<div class="feature-left">
					<span class="icon">
						<i class="icon-wallet"></i>
					</span>
					<div class="feature-copy">
						<h3>Real Estate Investment</h3>
						<p>Unlock wealth opportunities through property investments with high returns and long-term
							value growth.</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Second Row -->
		<div class="row">
			<!-- Feature 4 -->
			<div class="col-md-4 animate-box">
				<div class="feature-left">
					<span class="icon">
						<i class="icon-piechart"></i>
					</span>
					<div class="feature-copy">
						<h3>Commercial Spaces</h3>
						<p>Explore business-ready office spaces and retail properties in prime locations across the
							city.</p>
					</div>
				</div>
			</div>

			<!-- Feature 5 -->
			<div class="col-md-4 animate-box">
				<div class="feature-left">
					<span class="icon">
						<i class="icon-genius"></i>
					</span>
					<div class="feature-copy">
						<h3>Real Estate Marketing</h3>
						<p>Promote your properties effectively with our targeted digital and offline marketing
							solutions.</p>
					</div>
				</div>
			</div>

			<!-- Feature 6 -->
			<div class="col-md-4 animate-box">
				<div class="feature-left">
					<span class="icon">
						<i class="icon-chat"></i>
					</span>
					<div class="feature-copy">
						<h3>Property Consultation</h3>
						<p>Get expert advice and guidance to make informed real estate decisions for buying or selling.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Popular Properties -->
<div id="fh5co-popular-properties" class="fh5co-section-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
				<h3>Popular Properties</h3>
				<p>Discover our most sought-after properties across top locations—offering modern amenities, premium
					design, and excellent connectivity for comfortable living and high-value investments.</p>

			</div>
		</div>
		<div class="row">
			<div class="col-md-4 animate-box">
				<a href="#" class="fh5co-property"
					style="background-image: url('http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/property-1.jpg');">
					<span class="status">Sale</span>
					<div class="prop-details">
						<span class="price">INR 25,00,000</span>
						<h3>Properties Near in Nashik, Maharashtra</h3>
					</div>
				</a>
			</div>
			<div class="col-md-4 animate-box">
				<a href="#" class="fh5co-property"
					style="background-image: url('http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/property-2.jpg');">
					<span class="status">Rent</span>
					<div class="prop-details">
						<span class="price">INR 25,000/mos</span>
						<h3>Modern House at Pune Maharashtra</h3>
					</div>
				</a>
			</div>
			<div class="col-md-4 animate-box">
				<a href="#" class="fh5co-property"
					style="background-image: url('http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/property-3.jpg');">
					<span class="status">Sale</span>
					<div class="prop-details">
						<span class="price">INR 25,000</span>
						<h3>Bonggalo House at Dadar Mumbai</h3>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

<!-- Happy Clients -->
<div id="fh5co-testimonial"
	style="background-image:url('http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/img_bg_2.jpg');">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h2>Happy Clients</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="box-testimony animate-box">
					<blockquote>
						<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
						<p>&ldquo;Shivram Group helped us find our dream home in Pune with complete transparency, timely
							support, and unmatched professionalism. Truly a reliable real estate partner.&rdquo;</p>
						<footer class="mt-2 fw-bold text-end">– Mr. Rajesh Kulkarni</footer>
					</blockquote>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-testimony animate-box">
					<blockquote>
						<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
						<p>&ldquo;We invested in a commercial space through Shivram Group and were impressed by the
							seamless process and great returns. Highly recommended for investors!&rdquo;</p>
						<footer class="mt-2 fw-bold text-end">– Mrs. Anjali Deshpande</footer>
					</blockquote>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-testimony animate-box">
					<blockquote>
						<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
						<p>&ldquo;Their properties are well-designed, strategically located, and come with excellent
							amenities. A trustworthy name in the real estate industry.&rdquo;</p>
						<footer class="mt-2 fw-bold text-end">– Mr. Suresh Patil</footer>
					</blockquote>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- Newest Properties -->
<div id="fh5co-properties" class="fh5co-section-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
				<h3>Newest Properties</h3>
				<p>Explore the latest residential and commercial properties across India—from luxurious villas in Goa to high-rise apartments in Pune, crafted with the trust and quality of the Shivram Group.</p>
			</div>
		</div>
		<div class="row">

			<!-- Property 1 -->
			<div class="col-md-4 animate-box">
				<div class="property">
					<a href="#" class="fh5co-property"
						style="background-image: url('http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/property-1.jpg');">
						<span class="status">Sale</span>
						<ul class="list-details">
							<li>2000 ft sq</li>
							<li>5 Bedroom</li>
							<li>4 Bathroom</li>
							<li>3 Garage</li>
						</ul>
					</a>
					<div class="property-details">
						<h3>Luxury Villa near Diveagar Beach</h3>
						<span class="price">₹2.5 Cr</span>
						<p>Stunning sea-facing villa in Goa, offering modern comforts and tropical vibes. Perfect for vacation homes or investment.</p>
						<span class="address"><i class="icon-map"></i>Candolim, Goa, India</span>
					</div>
				</div>
			</div>

			<!-- Property 2 -->
			<div class="col-md-4 animate-box">
				<div class="property">
					<a href="#" class="fh5co-property"
						style="background-image: url('http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/property-2.jpg');">
						<span class="status">Rent</span>
						<ul class="list-details">
							<li>1800 ft sq</li>
							<li>3 Bedroom</li>
							<li>2 Bathroom</li>
							<li>1 Garage</li>
						</ul>
					</a>
					<div class="property-details">
						<h3>Furnished Flat in Nashik</h3>
						<span class="price">₹35,000/month</span>
						<p>Modern apartment in Pune’s IT hub, with premium amenities and excellent connectivity.</p>
						<span class="address"><i class="icon-map"></i>Baner, Pune, Maharashtra</span>
					</div>
				</div>
			</div>

			<!-- Property 3 -->
			<div class="col-md-4 animate-box">
				<div class="property">
					<a href="#" class="fh5co-property"
						style="background-image: url('http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/property-3.jpg');">
						<span class="status">Sale</span>
						<ul class="list-details">
							<li>2200 ft sq</li>
							<li>4 Bedroom</li>
							<li>3 Bathroom</li>
							<li>2 Garage</li>
						</ul>
					</a>
					<div class="property-details">
						<h3>Independent House in Baner</h3>
						<span class="price">₹1.9 Cr</span>
						<p>Spacious independent home in a quiet yet well-connected neighborhood of Bengaluru.</p>
						<span class="address"><i class="icon-map"></i>Whitefield, Bengaluru, Karnataka</span>
					</div>
				</div>
			</div>

			<!-- Property 4 -->
			<div class="col-md-4 animate-box">
				<div class="property">
					<a href="#" class="fh5co-property"
						style="background-image: url('http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/property-4.jpg');">
						<span class="status">Sale</span>
						<ul class="list-details">
							<li>2500 ft sq</li>
							<li>5 Bedroom</li>
							<li>4 Bathroom</li>
							<li>2 Garage</li>
						</ul>
					</a>
					<div class="property-details">
						<h3>Row House in Kharadi</h3>
						<span class="price">₹2.1 Cr</span>
						<p>Elegant row house in one of Pune’s fastest-growing residential zones, perfect for families.</p>
						<span class="address"><i class="icon-map"></i>Kharadi, Pune, Maharashtra</span>
					</div>
				</div>
			</div>

			<!-- Property 5 -->
			<div class="col-md-4 animate-box">
				<div class="property">
					<a href="#" class="fh5co-property"
						style="background-image: url('http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/property-5.jpg');">
						<span class="status">Rent</span>
						<ul class="list-details">
							<li>1500 ft sq</li>
							<li>3 Bedroom</li>
							<li>2 Bathroom</li>
							<li>1 Garage</li>
						</ul>
					</a>
					<div class="property-details">
						<h3>Family Flat in Wakad</h3>
						<span class="price">₹25,000/month</span>
						<p>Well-maintained flat close to schools and shopping centres, ideal for small families.</p>
						<span class="address"><i class="icon-map"></i>Wakad, Pune, Maharashtra</span>
					</div>
				</div>
			</div>

			<!-- Property 6 -->
			<div class="col-md-4 animate-box">
				<div class="property">
					<a href="#" class="fh5co-property"
						style="background-image: url('http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/property-6.jpg');">
						<span class="status">Sale</span>
						<ul class="list-details">
							<li>3000 ft sq</li>
							<li>6 Bedroom</li>
							<li>5 Bathroom</li>
							<li>3 Garage</li>
						</ul>
					</a>
					<div class="property-details">
						<h3>Hilltop Bungalow in Lonavala</h3>
						<span class="price">₹3.6 Cr</span>
						<p>Experience peace and luxury with breathtaking views and spacious interiors, just 2 hours from Mumbai.</p>
						<span class="address"><i class="icon-map"></i>Tiger Point Road, Lonavala, Maharashtra</span>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>



<!-- Our Agents -->
<div id="fh5co-about" class="fh5co-agent">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
				<h3>Our Agents</h3>
				<p>Meet our expert real estate professionals who are dedicated to helping you find the perfect residential or commercial space with personalized guidance.</p>
			</div>
		</div>
		<div class="row">
			<!-- Agent 1 -->
			<div class="col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
				<div class="fh5co-staff">
					<img class="img-responsive" src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/user-1.jpg" alt="Agent Rohan Deshmukh">
					<h3>Rohan Deshmukh</h3>
					<p>Specializes in premium residential properties across Pune and Mumbai. Trusted for seamless and strategic home buying experiences.</p>
				</div>
			</div>
			<!-- Agent 2 -->
			<div class="col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
				<div class="fh5co-staff">
					<img class="img-responsive" src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/user-2.jpg" alt="Agent Neha Kulkarni">
					<h3>Neha Kulkarni</h3>
					<p>Commercial property expert with deep insight into IT hubs and office space investments in key metro areas.</p>
				</div>
			</div>
			<!-- Agent 3 -->
			<div class="col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
				<div class="fh5co-staff">
					<img class="img-responsive" src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/user-3.jpg" alt="Agent Amit Patil">
					<h3>Amit Patil</h3>
					<p>Focused on high-value investments and property portfolio management with tailored strategies for real estate growth.</p>
				</div>
			</div>
			<!-- Agent 4 -->
			<div class="col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
				<div class="fh5co-staff">
					<img class="img-responsive" src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/user-4.jpg" alt="Agent Priya Sharma">
					<h3>Priya Sharma</h3>
					<p>Expert in luxury real estate projects and first-time buyer consultation with personalized customer engagement.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Recent Blog -->
<div id="fh5co-blog-section" class="fh5co-section-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
				<h3>Recent From Blog</h3>
				<p>Explore expert insights, property market trends, and home-buying tips curated by the Shivram Group team. Whether you're investing, buying your first home, or simply staying informed, our blog offers the guidance and updates you need to make confident real estate decisions in today’s evolving market.</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row row-bottom-padded-md">
			<!-- Blog Post 1 -->
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive"
							src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/property-4.jpg"
							alt="Featured Residential Projects"></a>
					<div class="blog-text">
						<div class="prod-title">
							<h3><a href="#">Top Residential Projects in Pune for 2025</a></h3>
							<span class="posted_by">Apr. 10th</span>
							<span class="comment"><a href="#">15<i class="icon-bubble2"></i></a></span>
							<p>Looking to invest in Pune real estate? We highlight the most promising residential projects for 2025—featuring prime locations, modern amenities, and competitive pricing. Perfect for families and investors alike, these developments offer a strong combination of lifestyle and long-term value you won't want to miss.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Blog Post 2 -->
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive"
							src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/property-2.jpg"
							alt="Smart Home Features"></a>
					<div class="blog-text">
						<div class="prod-title">
							<h3><a href="#">Smart Home Trends in Urban India</a></h3>
							<span class="posted_by">Apr. 5th</span>
							<span class="comment"><a href="#">12<i class="icon-bubble2"></i></a></span>
							<p>Smart homes are revolutionizing urban living. From remote-controlled lighting and appliances to advanced security systems, these features offer convenience and peace of mind. Discover how modern buyers are prioritizing tech-savvy spaces and how developers are responding with intelligent design and digital integration in today’s properties.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Blog Post 3 -->
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive"
							src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/property-3.jpg"
							alt="Property Investment Tips"></a>
					<div class="blog-text">
						<div class="prod-title">
							<h3><a href="#">How to Maximize Returns on Property Investments</a></h3>
							<span class="posted_by">Mar. 30th</span>
							<span class="comment"><a href="#">18<i class="icon-bubble2"></i></a></span>
							<p>Investing in property? Maximize your returns with smart strategies—choose high-growth locations, assess rental yields, and time your exit right. In this post, we break down proven techniques that real estate investors use to generate long-term wealth while minimizing risks in an ever-changing property landscape.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix visible-md-block"></div>
		</div>
	</div>
</div>



<!-- fh5co-blog-section -->
<!-- <div id="fh5co-contact" class="fh5co-contact">
	<div class="half-contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center heading-section animate-box">
				<h3>Ask an Agent — We're Here to Help 24/7</h3>
				<p>Have questions about buying, selling, or investing in property? Our expert agents are available around the clock to provide clear answers, honest advice, and guidance tailored to your needs. Whether it's a quick query or a deep discussion, we're just a message away—ready to assist you anytime, day or night.</p>

				</div>
			</div>
			<div class="row">
				<div class="col-md-12 animate-box">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Name">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="" class="form-control" id="" cols="30" rows="7"
									placeholder="Message"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" value="Send Message" class="btn btn-primary">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="half-bg"
		style="background-image: url('http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/img_bg_1.jpg');">
	</div>
</div> -->

<?php
get_footer();