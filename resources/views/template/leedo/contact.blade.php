@extends('template/leedo/main')

@section('content')
<div class="vlt-site-wrapper__inner">
	<!--Header-->
	<div class="d-none d-lg-block">
		<header class="vlt-header vlt-header--fullscreen">
			<div class="vlt-navbar vlt-navbar--main vlt-navbar--transparent vlt-navbar--sticky vlt-navbar--hide-on-scroll vlt-navbar--white-text-on-top">
				<div class="container">
					<div class="vlt-navbar-inner">
						<div class="vlt-navbar-inner--left">
							<!--Logo--><a class="vlt-navbar-logo" href="index.html"><img class="black" src="assets/img/root/logo--default-black.png" alt="" style="height: 18px;"><img class="white" src="assets/img/root/logo--default-white.png" alt="" style="height: 18px;"></a>
						</div>
						<div class="vlt-navbar-inner--right">
							<div class="d-flex align-items-center"><a class="vlt-menu-burger" href="#" id="vlt-fullscreen-menu-open"><span class="line line-one"><span></span></span><span class="line line-two"><span></span></span><span class="line line-three"><span></span></span></a><a class="vlt-menu-shop-cart" href="shop-cart.html"><i class="leedo-paper-bag"></i><span>0</span></a></div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="vlt-fullscreen-navigation-holder">
			<div class="vlt-navbar vlt-navbar--white-text-on-top">
				<div class="container">
					<div class="vlt-navbar-inner">
						<div class="vlt-navbar-inner--left">
							<!--Logo--><a class="vlt-navbar-logo" href="index.html"><img class="black" src="assets/img/root/logo--default-black.png" alt="" style="height: 18px;"><img class="white" src="assets/img/root/logo--default-white.png" alt="" style="height: 18px;"></a>
						</div>
						<div class="vlt-navbar-inner--right"><a class="vlt-menu-burger vlt-menu-burger--opened" href="#" id="vlt-fullscreen-menu-close"><span class="line line-one"><span></span></span><span class="line line-two"><span></span></span><span class="line line-three"><span></span></span></a></div>
					</div>
				</div>
			</div>
			<!--Navigation-->
			<nav class="vlt-fullscreen-navigation">
				<!--Menu-->
				<ul class="sf-menu">
					<li class="menu-item-has-children two-columns"><a href="#"><span>Home</span></a>
						<ul class="sub-menu">
							<li><a href="homepage-01.html"><span>Homepage 01</span></a>
							</li>
							<li><a href="homepage-02.html"><span>Homepage 02</span></a>
							</li>
							<li><a href="homepage-03.html"><span>Homepage 03</span></a>
							</li>
							<li><a href="homepage-04.html"><span>Homepage 04</span></a>
							</li>
							<li><a href="homepage-05.html"><span>Homepage 05</span></a>
							</li>
							<li><a href="homepage-06.html"><span>Homepage 06</span></a>
							</li>
							<li><a href="homepage-07.html"><span>Homepage 07</span></a>
							</li>
							<li><a href="homepage-08.html"><span>Homepage 08</span></a>
							</li>
							<li><a href="homepage-09.html"><span>Homepage 09</span></a>
							</li>
							<li><a href="homepage-10.html"><span>Homepage 10</span></a>
							</li>
							<li><a href="homepage-11.html"><span>Homepage 11</span></a>
							</li>
							<li><a href="homepage-12.html"><span>Homepage 12</span></a>
							</li>
						</ul>
					</li>
					<li class="menu-item-has-children"><a href="#"><span>About</span></a>
						<ul class="sub-menu">
							<li class="menu-item-has-children"><a href="about-us-01.html"><span>About Us</span></a>
								<ul class="sub-menu">
									<li><a href="about-us-01.html"><span>About Us 01</span></a>
									</li>
									<li><a href="about-us-02.html"><span>About Us 02</span></a>
									</li>
									<li><a href="about-us-03.html"><span>About Us 03</span></a>
									</li>
								</ul>
							</li>
							<li><a href="about-me.html"><span>About Me</span></a>
							</li>
						</ul>
					</li>
					<li class="menu-item-has-children"><a href="#"><span>Portfolio</span></a>
						<ul class="sub-menu">
							<li class="menu-item-has-children left"><a href="portfolio-01.html"><span>Layouts</span></a>
								<ul class="sub-menu">
									<li><a href="portfolio-01.html"><span>Portfolio 01</span></a>
									</li>
									<li><a href="portfolio-02.html"><span>Portfolio 02</span></a>
									</li>
									<li><a href="portfolio-03.html"><span>Portfolio 03</span></a>
									</li>
									<li><a href="portfolio-04.html"><span>Portfolio 04</span></a>
									</li>
								</ul>
							</li>
							<li class="menu-item-has-children left"><a href="single-work-01.html"><span>Single Work</span></a>
								<ul class="sub-menu">
									<li><a href="single-work-01.html"><span>Style 01</span></a>
									</li>
									<li><a href="single-work-02.html"><span>Style 02</span></a>
									</li>
									<li><a href="single-work-03.html"><span>Style 03</span></a>
									</li>
									<li><a href="single-work-04.html"><span>Style 04</span></a>
									</li>
									<li><a href="single-work-05.html"><span>Style 05</span></a>
									</li>
									<li><a href="single-work-06.html"><span>Style 06</span></a>
									</li>
									<li><a href="single-work-07.html"><span>Style 07</span></a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="menu-item-has-children"><a href="#"><span>Blog</span></a>
						<ul class="sub-menu">
							<li class="menu-item-has-children left"><a href="blog-01.html"><span>Layouts</span></a>
								<ul class="sub-menu">
									<li><a href="blog-01.html"><span>Blog 01</span></a>
									</li>
									<li><a href="blog-02.html"><span>Blog 02</span></a>
									</li>
									<li><a href="blog-03.html"><span>Blog 03</span></a>
									</li>
									<li><a href="blog-04.html"><span>Blog 04</span></a>
									</li>
									<li><a href="blog-05.html"><span>Blog 05</span></a>
									</li>
									<li><a href="blog-06.html"><span>Blog 06</span></a>
									</li>
									<li><a href="blog-07.html"><span>Blog 07</span></a>
									</li>
								</ul>
							</li>
							<li class="menu-item-has-children left"><a href="single-post-01.html"><span>Single Post</span></a>
								<ul class="sub-menu">
									<li><a href="single-post-01.html"><span>Style 01</span></a>
									</li>
									<li><a href="single-post-02.html"><span>Style 02</span></a>
									</li>
									<li><a href="single-post-03.html"><span>Style 03</span></a>
									</li>
									<li><a href="single-post-04.html"><span>Style 04</span></a>
									</li>
									<li><a href="single-post-05.html"><span>Style 05</span></a>
									</li>
									<li><a href="single-post-06.html"><span>Style 06</span></a>
									</li>
									<li><a href="single-post-07.html"><span>Style 07</span></a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="menu-item-has-children"><a href="#"><span>Pages</span></a>
						<ul class="sub-menu">
							<li class="menu-item-has-children left"><a href="services-01.html"><span>Services</span></a>
								<ul class="sub-menu">
									<li><a href="services-01.html"><span>Services 01</span></a>
									</li>
									<li><a href="services-02.html"><span>Services 02</span></a>
									</li>
									<li><a href="services-03.html"><span>Services 03</span></a>
									</li>
								</ul>
							</li>
							<li class="menu-item-has-children left"><a href="contact-us-01.html"><span>Contact Us</span></a>
								<ul class="sub-menu">
									<li><a href="contact-us-01.html"><span>Contact Us 01</span></a>
									</li>
									<li class=" current-menu-item"><a href="contact-us-02.html"><span>Contact Us 02</span></a>
									</li>
								</ul>
							</li>
							<li class="menu-item-has-children left"><a href="coming-soon-01.html"><span>Coming Soon</span></a>
								<ul class="sub-menu">
									<li><a href="coming-soon-01.html"><span>Coming Soon 01</span></a>
									</li>
									<li><a href="coming-soon-02.html"><span>Coming Soon 02</span></a>
									</li>
								</ul>
							</li>
							<li><a href="404.html"><span>Page 404</span></a>
							</li>
						</ul>
					</li>
					<li class="menu-item-has-children left"><a href="#"><span>Shop</span></a>
						<ul class="sub-menu">
							<li class="menu-item-has-children left"><a href="shop-01.html"><span>Layouts</span></a>
								<ul class="sub-menu">
									<li><a href="shop-01.html"><span>Shop 01</span></a>
									</li>
									<li><a href="shop-02.html"><span>Shop 02</span></a>
									</li>
									<li><a href="shop-03.html"><span>Shop 03</span></a>
									</li>
									<li><a href="shop-04.html"><span>Shop 04</span></a>
									</li>
								</ul>
							</li>
							<li><a href="shop-cart.html"><span>Cart</span></a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="d-lg-none d-sm-block">
		<header class="vlt-header vlt-header--opaque vlt-header--mobile">
			<nav class="vlt-navbar vlt-navbar--mobile">
				<div class="container">
					<div class="vlt-navbar-inner no-gutters">
						<div class="col text-left"><a class="vlt-menu-burger" href="#" id="vlt-mobile-menu-toggle"><span class="line line-one"><span></span></span><span class="line line-two"><span></span></span><span class="line line-three"><span></span></span></a></div>
						<div class="col text-center">
							<!--Logo--><a class="vlt-navbar-logo" href="index.html"><img src="assets/img/root/logo--aside.png" alt="" style="height: 26px;"></a>
						</div>
						<div class="col text-right"><a class="vlt-menu-shop-cart" href="shop-cart.html"><i class="leedo-paper-bag"></i><span>0</span></a></div>
					</div>
				</div>
			</nav>
			<!--Navigation-->
			<nav class="vlt-mobile-navigation">
				<div class="container">
					<!--Menu-->
					<ul class="sf-menu">
						<li class="menu-item-has-children two-columns"><a href="#"><span>Home</span></a>
							<ul class="sub-menu">
								<li><a href="homepage-01.html"><span>Homepage 01</span></a>
								</li>
								<li><a href="homepage-02.html"><span>Homepage 02</span></a>
								</li>
								<li><a href="homepage-03.html"><span>Homepage 03</span></a>
								</li>
								<li><a href="homepage-04.html"><span>Homepage 04</span></a>
								</li>
								<li><a href="homepage-05.html"><span>Homepage 05</span></a>
								</li>
								<li><a href="homepage-06.html"><span>Homepage 06</span></a>
								</li>
								<li><a href="homepage-07.html"><span>Homepage 07</span></a>
								</li>
								<li><a href="homepage-08.html"><span>Homepage 08</span></a>
								</li>
								<li><a href="homepage-09.html"><span>Homepage 09</span></a>
								</li>
								<li><a href="homepage-10.html"><span>Homepage 10</span></a>
								</li>
								<li><a href="homepage-11.html"><span>Homepage 11</span></a>
								</li>
								<li><a href="homepage-12.html"><span>Homepage 12</span></a>
								</li>
							</ul>
						</li>
						<li class="menu-item-has-children"><a href="#"><span>About</span></a>
							<ul class="sub-menu">
								<li class="menu-item-has-children"><a href="about-us-01.html"><span>About Us</span></a>
									<ul class="sub-menu">
										<li><a href="about-us-01.html"><span>About Us 01</span></a>
										</li>
										<li><a href="about-us-02.html"><span>About Us 02</span></a>
										</li>
										<li><a href="about-us-03.html"><span>About Us 03</span></a>
										</li>
									</ul>
								</li>
								<li><a href="about-me.html"><span>About Me</span></a>
								</li>
							</ul>
						</li>
						<li class="menu-item-has-children"><a href="#"><span>Portfolio</span></a>
							<ul class="sub-menu">
								<li class="menu-item-has-children left"><a href="portfolio-01.html"><span>Layouts</span></a>
									<ul class="sub-menu">
										<li><a href="portfolio-01.html"><span>Portfolio 01</span></a>
										</li>
										<li><a href="portfolio-02.html"><span>Portfolio 02</span></a>
										</li>
										<li><a href="portfolio-03.html"><span>Portfolio 03</span></a>
										</li>
										<li><a href="portfolio-04.html"><span>Portfolio 04</span></a>
										</li>
									</ul>
								</li>
								<li class="menu-item-has-children left"><a href="single-work-01.html"><span>Single Work</span></a>
									<ul class="sub-menu">
										<li><a href="single-work-01.html"><span>Style 01</span></a>
										</li>
										<li><a href="single-work-02.html"><span>Style 02</span></a>
										</li>
										<li><a href="single-work-03.html"><span>Style 03</span></a>
										</li>
										<li><a href="single-work-04.html"><span>Style 04</span></a>
										</li>
										<li><a href="single-work-05.html"><span>Style 05</span></a>
										</li>
										<li><a href="single-work-06.html"><span>Style 06</span></a>
										</li>
										<li><a href="single-work-07.html"><span>Style 07</span></a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="menu-item-has-children"><a href="#"><span>Blog</span></a>
							<ul class="sub-menu">
								<li class="menu-item-has-children left"><a href="blog-01.html"><span>Layouts</span></a>
									<ul class="sub-menu">
										<li><a href="blog-01.html"><span>Blog 01</span></a>
										</li>
										<li><a href="blog-02.html"><span>Blog 02</span></a>
										</li>
										<li><a href="blog-03.html"><span>Blog 03</span></a>
										</li>
										<li><a href="blog-04.html"><span>Blog 04</span></a>
										</li>
										<li><a href="blog-05.html"><span>Blog 05</span></a>
										</li>
										<li><a href="blog-06.html"><span>Blog 06</span></a>
										</li>
										<li><a href="blog-07.html"><span>Blog 07</span></a>
										</li>
									</ul>
								</li>
								<li class="menu-item-has-children left"><a href="single-post-01.html"><span>Single Post</span></a>
									<ul class="sub-menu">
										<li><a href="single-post-01.html"><span>Style 01</span></a>
										</li>
										<li><a href="single-post-02.html"><span>Style 02</span></a>
										</li>
										<li><a href="single-post-03.html"><span>Style 03</span></a>
										</li>
										<li><a href="single-post-04.html"><span>Style 04</span></a>
										</li>
										<li><a href="single-post-05.html"><span>Style 05</span></a>
										</li>
										<li><a href="single-post-06.html"><span>Style 06</span></a>
										</li>
										<li><a href="single-post-07.html"><span>Style 07</span></a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="menu-item-has-children"><a href="#"><span>Pages</span></a>
							<ul class="sub-menu">
								<li class="menu-item-has-children left"><a href="services-01.html"><span>Services</span></a>
									<ul class="sub-menu">
										<li><a href="services-01.html"><span>Services 01</span></a>
										</li>
										<li><a href="services-02.html"><span>Services 02</span></a>
										</li>
										<li><a href="services-03.html"><span>Services 03</span></a>
										</li>
									</ul>
								</li>
								<li class="menu-item-has-children left"><a href="contact-us-01.html"><span>Contact Us</span></a>
									<ul class="sub-menu">
										<li><a href="contact-us-01.html"><span>Contact Us 01</span></a>
										</li>
										<li class=" current-menu-item"><a href="contact-us-02.html"><span>Contact Us 02</span></a>
										</li>
									</ul>
								</li>
								<li class="menu-item-has-children left"><a href="coming-soon-01.html"><span>Coming Soon</span></a>
									<ul class="sub-menu">
										<li><a href="coming-soon-01.html"><span>Coming Soon 01</span></a>
										</li>
										<li><a href="coming-soon-02.html"><span>Coming Soon 02</span></a>
										</li>
									</ul>
								</li>
								<li><a href="404.html"><span>Page 404</span></a>
								</li>
							</ul>
						</li>
						<li class="menu-item-has-children left"><a href="#"><span>Shop</span></a>
							<ul class="sub-menu">
								<li class="menu-item-has-children left"><a href="shop-01.html"><span>Layouts</span></a>
									<ul class="sub-menu">
										<li><a href="shop-01.html"><span>Shop 01</span></a>
										</li>
										<li><a href="shop-02.html"><span>Shop 02</span></a>
										</li>
										<li><a href="shop-03.html"><span>Shop 03</span></a>
										</li>
										<li><a href="shop-04.html"><span>Shop 04</span></a>
										</li>
									</ul>
								</li>
								<li><a href="shop-cart.html"><span>Cart</span></a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
	</div>
	<!--Main-->
	<main class="vlt-main">
		<!--Page Title-->
		<section class="jarallax"><img class="jarallax-img" src="{{ asset('template/leedo/assets/img/attachment-07.jpg')}}" alt="">
			<div class="vlt-gap-170"></div>
			<div class="container">
				<!--Large Heading-->
				<h1 class="vlt-large-heading text-center" style="color:#fff;">Contact<span>.</span>
				</h1>
			</div>
			<div class="vlt-gap-170"></div>
		</section>
		<!--Contact Us 02-->
		<section>
			<div class="container">
				<div class="vlt-gap-120"></div>
				<div class="row">
					<div class="col-md-5">
						<!--Animation Block-->
						<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
							<!--Section Title-->
							<div class="vlt-section-title text-left">
								<h2>Get in Touch.
								</h2>
								<p>Above creature the rule blessed brought. Multiply they're one. Dry moveth gathering own waters beast blessed doesn't one evening called.
								</p>
							</div>
						</div>
						<div class="vlt-gap-40"></div>
						<!--Animation Block-->
						<div class="vlt-animation-block" data-aos="fade" data-aos-delay="100">
							<ul class="vlt-contact-info">
								<li><strong>Address:</strong> 10111 Santa Monica Boulevard, LA</li>
								<li><strong>Phone:</strong> <a href="tel:44987065908">+44 987 065 908</a></li>
								<li><strong>Email:</strong> <a href="mailto:info@example.com">info@example.com</a></li>
								<li><strong>Fax:</strong> +44 987 065 909</li>
							</ul>
						</div>
						<div class="vlt-gap-60--sm"></div>
					</div>
					<div class="col-md-6 offset-md-1">
						<!--Animation Block-->
						<div class="vlt-animation-block" data-aos="fade" data-aos-delay="100">
							<!--Contact Form-->
							<form class="vlt-contact-form" id="reused_form" method="post">
								<div class="vlt-form-group">
									<input class="vlt-form-control" type="text" placeholder="Your Name" name="your-name" size="40" required>
								</div>
								<div class="vlt-form-group">
									<input class="vlt-form-control" type="email" placeholder="Your Email" name="your-email" size="40" required>
								</div>
								<div class="vlt-form-group">
									<input class="vlt-form-control" type="text" placeholder="Your Title" name="your-title" size="40">
								</div>
								<div class="vlt-form-group">
									<textarea class="vlt-form-control" cols="40" rows="4" placeholder="Your Message" name="your-message"></textarea>
								</div>
								<!--Button-->
								<button class="vlt-btn vlt-btn--primary vlt-btn--lg vlt-btn--effect"><span>Send Message</span></button>
								<div id="success_message" style="display: none;">Success!</div>
								<div id="error_message" style="display: none;">Error!</div>
							</form>
						</div>
					</div>
					<div class="col-md-12">
						<div class="vlt-gap-120 vlt-gap-60--sm"></div>
						<!--Google Map 02-->
						<div id="map" style="height: 550px;"></div>
					</div>
				</div>
				<div class="vlt-gap-120"></div>
			</div>
		</section>
	</main>
	<!--Back to Top--><a class="vlt-btn vlt-btn--secondary vlt-btn--effect vlt-btn--go-top hidden" href="#"><span><i class="leedo-chevron-up"></i></span></a>
</div>
@endsection