<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome to Euphoria!</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Samira hotel template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('konten')}}/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="{{asset('konten')}}/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="{{asset('konten')}}/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('konten')}}/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="{{asset('konten')}}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="{{asset('konten')}}/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="{{asset('konten')}}/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="{{asset('konten')}}/styles/responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_content">

			<!-- Logo -->
			<div class="logo_container d-flex flex-column align-items-center justify-content-center">
				<div class="logo">
					<a href="#" class="text-center">
						<div class="logo_subtitle">Hotel</div>
						<div class="logo_title">Euphoria</div>
						<div class="logo_stars">
							<ul class="d-flex flex-row align-items-start justfy-content-start">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
						</div>
					</a>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_inner d-flex flex-row align-items-center justify-content-start">
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li class="active"><a href="/home"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>home</span></div></a></li>
									<li><a href="/about_us"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>about us</span></div></a></li>
									<li><a href="/daftar_kamar"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>rooms</span></div></a></li>
									<li><a href="/fasilitas"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>facility</span></div></a></li>
								</ul>
							</nav>
							<a href="/petugas/login_petugas" class="button_container header_button ml-auto"><div class="button text-center"><span>LOGIN PETUGAS</span></div></a>
							<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="background_image" style="background-image:url({{asset('konten')}}/images/menu.jpg)"></div>
		<div class="menu_content d-flex flex-column align-items-center justify-content-center">
			<ul class="menu_nav_list text-center">
				<li><a href="/home">Home</a></li>
				<li><a href="/about_us">About us</a></li>
				<li><a href="/daftar_kamar">Rooms</a></li>
				<li><a href="/fasilitas">Facility</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slide -->
				<div class="owl-item">
					<!-- Image credit: https://unsplash.com/@santtd -->
					<div class="background_image" style="background-image:url({{asset('konten')}}/images/blur1.png)"></div>
					<div class="home_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center">
										<div class="home_subtitle">Euphoria Feelings</div>
										<div class="home_title">Slides of Amazing Services for You.</div>
										<a href="/pelanggan/login_pelanggan" class="button_container home_button"><div class="button text-center"><span>Book Your Stay</span></div></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<!-- Image credit: https://unsplash.com/@santtd -->
					<div class="background_image" style="background-image:url({{asset('konten')}}/images/blur2.png)"></div>
					<div class="home_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center">
										<div class="home_subtitle">Euphoria Laughs</div>
										<div class="home_title">Fullfilling Your Happiness by Our Services</div>
										<a href="/pelanggan/login_pelanggan" class="button_container home_button"><div class="button text-center"><span>Book Your Stay</span></div></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<!-- Image credit: https://unsplash.com/@santtd -->
					<div class="background_image" style="background-image:url({{asset('konten')}}/images/blur3.png)"></div>
					<div class="home_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center">
										<div class="home_subtitle">Euphoria Mind</div>
										<div class="home_title">Relaxing Your Mind by The Euphoria</div>
										<a href="/pelanggan/login_pelanggan" class="button_container home_button"><div class="button text-center"><span>Book Your Stay</span></div></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
					<li class="home_slider_custom_dot active">01</li>
					<li class="home_slider_custom_dot">02</li>
					<li class="home_slider_custom_dot">03</li>
				</ul>
			</div>

		</div>
	</div>

	<!-- Search Bar -->



	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Intro Content -->
				<div class="col-lg-5 intro_col">
					<div class="intro_container d-flex flex-column align-items-start justify-content-center magic_up">
						<div class="intro_content">
							<div class="section_title_container">
								<div class="section_subtitle">Euphoria Hotel</div>
								<div class="section_title"><h2>Feel The Euphoria!</h2></div>
							</div>
							<div class="intro_text">
								<p>"Euphoria! Take my hands now, You are the cause of my euphoria!</p>
                                <p>Yeah yeah yeah yeah yeah yeah (ooh ooh), Yeah yeah yeah yeah yeah yeah.</p>
                                <p>Euphoria! Yeah yeah yeah yeah yeah yeah</p>
                                <p>Close the door now. When I'm with you, I'm in utopia</p>
								<p><strong>-Ryujin, ITZY (Brand Ambassador of Euphoria Hotel)</strong></p>
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Image -->
				<div class="col-lg-7 intro_col">
					<div class="intro_images magic_up">
						<!-- Image credit: https://unsplash.com/@yuni_ladyday2 -->
						<div class="intro_1 intro_img"><img src="{{asset('konten')}}/images/13.jpg" alt=""></div>
						<!-- Image credit: https://unsplash.com/@liliane -->
						<div class="intro_2 intro_img"><img src="{{asset('konten')}}/images/12.jpg" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Big Room -->

	<div class="big_room">
		<div class="container-fluid">
			<div class="row row-xl-eq-height">
				<div class="col-xl-6 order-xl-1 order-2">
					<div class="big_room_slider_container">

						<!-- Big Room SLider -->
						<div class="owl-carousel owl-theme big_room_slider">

							<!-- Slide -->
							<div class="owl-item">
								<!-- Image credit: https://unsplash.com/@jbriscoe -->
								<div class="background_image" style="background-image:url({{asset('konten')}}/images/pool4.jpg)"></div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<!-- Image credit: https://unsplash.com/@jbriscoe -->
								<div class="background_image" style="background-image:url({{asset('konten')}}/images/pool4.jpg)"></div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<!-- Image credit: https://unsplash.com/@jbriscoe -->
								<div class="background_image" style="background-image:url({{asset('konten')}}/images/pool4.jpg)"></div>
							</div>

						</div>

						<div class="big_room_slider_nav_container d-flex flex-row align-items-start justify-content-start">
							<div class="big_room_slider_prev big_room_slider_nav"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
							<div class="big_room_slider_next big_room_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 order-xl-2 order-1">
					<div class="big_room_content">
						<div class="big_room_content_inner magic_up">
							<div class="section_title_container">
								<div class="section_subtitle">Feel The Euphoria</div>
								<div class="section_title"><h2>Let's swim with your euphoria soul!</h2></div>
							</div>
							<div class="big_room_text">
								<p>Hotel ini memiliki kolam renang berstandar internasional dengan pemandangan indah nan menenangkan. Disediakan pula kursi santai datar untuk anda lebih leluasa menikmati pool view bagaikan di california beach.</p>
							</div>
							<div class="testimonial">
								<div class="testimonial_stars">
									<ul class="d-flex flex-row align-items-start justfy-content-start">
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
									</ul>
								</div>
								<div class="testimonial_text">Hotel yang sangat bagus! Kita bisa menikmati suasana nyaman bersama orang terkasih disini.</div>
								<div class="testimonial_author d-flex flex-row align-items-center justify-content-start">
									<div class="testimonial_author_name">Reza Zulfirkasyah</a><span>, Client</span></div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Room -->

	<div class="rooms">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center magic_up">
						<div class="section_subtitle">Feel the Euphoria</div>
						<div class="section_title"><h2>Choose Your Room</h2></div>
					</div>
				</div>
			</div>
			<div class="row room_row magic_up">

				<!-- Room -->
				<div class="col-lg-4 room_col">
					<div class="room">
						<div class="room_image"><img src="{{asset('konten')}}/images/silver9.jpg" alt="https://unsplash.com/@jonathan_percy"></div>
						<div class="room_content text-center">
                            <div class="room_price">From Rp 2.000.000 / <span>Night</span></div>
                            <div class="room_type">1 Bed</div>
							<div class="room_title"><a href="/singularity">Singularity Room</a></div>
							<div class="room_text">
								<p>Singularity Room adalah tipe kamar gaya minimalis yang cocok untuk self-love, bersama pasangan, maupun keluarga kecil anda.</p>
							</div>
							<a href="/booking" class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
						</div>
					</div>
				</div>

				<!-- Room -->
				<div class="col-lg-4 room_col">
					<div class="room">
						<div class="room_image"><img src="{{asset('konten')}}/images/gold1.jpg" alt="https://unsplash.com/@ultralinx"></div>
						<div class="room_content text-center">
							<div class="room_price">From Rp 3.000.000 / <span>Night</span></div>
							<div class="room_type">3 Beds</div>
							<div class="room_title"><a href="/serendipity">Serendipity Room</a></div>
							<div class="room_text">
								<p>Serendipity Room adalah kamar bergaya minimalis modern disertai pool view yang memanjakan keluarga anda dengan kehangatan.</p>
							</div>
							<a href="/booking" class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
						</div>
					</div>
				</div>

				<!-- Room -->
				<div class="col-lg-4 room_col">
					<div class="room">
						<div class="room_image"><img src="{{asset('konten')}}/images/diamond1.jpg" alt="https://unsplash.com/@rhemakallianpur"></div>
						<div class="room_content text-center">
							<div class="room_price">From Rp 5.000.000 / <span>Night</span></div>
							<div class="room_type">3 Beds</div>
							<div class="room_title"><a href="/epiphany">Epiphany Room</a></div>
							<div class="room_text">
								<p>Epiphany Room adalah kamar bertipe cozy-luxury yang merupakan tipe kamar tertinggi di Hotel Euphoria. Memiliki two-tone styles yaitu minimalis dan victoria.</p>
							</div>
							<a href="/booking" class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Gallery -->

	<div class="gallery">
		<div class="gallery_slider_container">

			<!-- Gallery Slider -->
			<div class="owl-carousel owl-theme gallery_slider magic_up">
				<div class="owl-item gallery_item">
					<div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
					<a class="colorbox" href="{{asset('konten')}}/images/ballroom2.jpg"><img src="{{asset('konten')}}/images/ballroom2.jpg" alt=""></a>
				</div>
				<div class="owl-item gallery_item">
					<div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
					<a class="colorbox" href="{{asset('konten')}}/images/bar1.jpg"><img src="{{asset('konten')}}/images/bar1.jpg" alt=""></a>
				</div>
				<div class="owl-item gallery_item">
					<div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
					<a class="colorbox" href="{{asset('konten')}}/images/indoor restaurant.jpg"><img src="{{asset('konten')}}/images/indoor restaurant.jpg" alt=""></a>
				</div>
				<div class="owl-item gallery_item">
					<div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
					<a class="colorbox" href="{{asset('konten')}}/images/outdoor restaurant.jpg"><img src="{{asset('konten')}}/images/outdoor restaurant.jpg" alt=""></a>
				</div>
				<div class="owl-item gallery_item">
					<div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
					<a class="colorbox" href="{{asset('konten')}}/images/pool1.jpg"><img src="{{asset('konten')}}/images/pool1.jpg" alt=""></a>
				</div>
			</div>

		</div>

		<!-- Nav -->
		<div class="gallery_slider_nav_container">
			<div class="container">
				<div class="row">
					<div class="col clearfix">
						<div class="gallery_slider_nav_content d-flex flex-row align-items-start justify-content-start">
							<div class="gallery_slider_prev gallery_slider_nav"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
							<div class="gallery_slider_next gallery_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Logo -->
				<div class="col-lg-3 footer_col">
					<div class="footer_logo_container">
						<div class="footer_logo">
							<a href="#" class="text-center">
								<div class="footer_logo_subtitle">Hotel</div>
								<div class="footer_logo_title">Euphoria</div>
								<div class="footer_logo_stars">
									<ul class="d-flex flex-row align-items-start justfy-content-start">
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
									</ul>
								</div>
							</a>
						</div>
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Intan & Netta</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
					</div>
				</div>

				<!-- Footer Menu -->
				<div class="col-lg-5 footer_col">
					<div class="footer_menu">
						<ul class="d-flex flex-row align-items-start justify-content-start">
							<li><a href="/home">Home</a></li>
							<li><a href="/about_us">About us</a></li>
							<li><a href="/daftar_kamar">Rooms</a></li>
							<li><a href="/fasilitas">Facility</a></li>
						</ul>
						<div class="footer_menu_text">
							<p>Find The Euphoria Here!.</p>
						</div>
					</div>
				</div>

				<!-- Footer Contact -->
				<div class="col-lg-4 footer_col">
					<div class="footer_contact clearfix">
						<div class="footer_contact_content float-lg-right">
							<ul>
								<li>Address: <span>Jl. Patih Jelantik No.11-12, Legian, Kuta, Kabupaten Badung, Bali 80361</span></li>
								<li>Phone: <span>(0361) 8496789</span></li>
								<li>Email: <span>euphoriahotel@gmail.com</span></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>
</div>

<script src="{{asset('konten')}}/js/jquery-3.2.1.min.js"></script>
<script src="{{asset('konten')}}/styles/bootstrap-4.1.2/popper.js"></script>
<script src="{{asset('konten')}}/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="{{asset('konten')}}/plugins/greensock/TweenMax.min.js"></script>
<script src="{{asset('konten')}}/plugins/greensock/TimelineMax.min.js"></script>
<script src="{{asset('konten')}}/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="{{asset('konten')}}/plugins/greensock/animation.gsap.min.js"></script>
<script src="{{asset('konten')}}/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="{{asset('konten')}}/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="{{asset('konten')}}/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="{{asset('konten')}}/plugins/easing/easing.js"></script>
<script src="{{asset('konten')}}/plugins/parallax-js-master/parallax.min.js"></script>
<script src="{{asset('konten')}}/js/custom.js"></script>
</body>
</html>
