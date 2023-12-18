@extends('user.layouts.main')
@section('content')
		<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
						<div class="carousel-item active">
								<img src="{{ asset('user') }}/img/hero/slider1.webp" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
								<img src="{{ asset('user') }}/img/hero/slider2.webp" class="d-block w-100" alt="...">
						</div>
				</div>
		</div>
		<section class="space overflow-hidden" data-bg-src="{{ asset('user') }}/img/bg/course_bg_2.png" id="course-sec">
				<div class="container">
						<div class="course-tab-1 tab-menu1 th-carousel row" data-slide-show="6" data-ml-slide-show="6"
								data-lg-slide-show="6" data-md-slide-show="6" data-sm-slide-show="6">
								<div class="col-lg-3">
										<a class="tab-btn" data-bg-src="{{ asset('user') }}/img/icon/custom/menu1.webp">
												&nbsp;
										</a>
								</div>
								<div class="col-lg-3">
										<a class="tab-btn" data-bg-src="{{ asset('user') }}/img/icon/custom/menu2.webp">
												&nbsp;
										</a>
								</div>
								<div class="col-lg-3">
										<a class="tab-btn" data-bg-src="{{ asset('user') }}/img/icon/custom/menu3.webp">
												&nbsp;
										</a>
								</div>
								<div class="col-lg-3">
										<a class="tab-btn" data-bg-src="{{ asset('user') }}/img/icon/custom/menu4.webp">
												&nbsp;
										</a>
								</div>
								<div class="col-lg-3">
										<a class="tab-btn" data-bg-src="{{ asset('user') }}/img/icon/custom/menu5.webp">
												&nbsp;
										</a>
								</div>
								<div class="col-lg-3">
										<a class="tab-btn" data-bg-src="{{ asset('user') }}/img/icon/custom/menu6.webp">
												&nbsp;
										</a>
								</div>
						</div>
				</div>
		</section>


		<section class="space" data-bg-src="user/img/bg/course_bg_1.png" id="course-sec">
				<div class="container">
						<div class="mb-35 text-md-start text-center">
								<div class="row align-items-center justify-content-between">
										<div class="col-md-8">
												<div class="title-area mb-md-0">
														<span class="sub-title"><i class="fal fa-book me-2"></i> E-Course Populer</span>
														<h2 class="sec-title">E-Course Populer Kami</h2>
												</div>
										</div>
										<div class="col-md-auto">
												<a href="course.html" class="th-btn">Lihat Semua Course<i class="fa-solid fa-arrow-right ms-2"></i></a>
										</div>
								</div>
						</div>
						<div class="row slider-shadow th-carousel course-slider-1" data-slide-show="4" data-ml-slide-show="4"
								data-lg-slide-show="4" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
								<div class="col-md-12 col-lg-3">
										<div class="course-box">
												<div class="course-img">
														<img src="{{ asset('user') }}/img/course/course1.webp" alt="img">
														<span class="tag"><i class="fas fa-clock"></i> 03 WEEKS</span>
												</div>
												<div class="course-content">
														<div class="course-rating">
																<div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
																		<span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
																</div>(4.7)
														</div>
														<h3 class="course-title"><a href="course-details.html">Education Software and PHP
																		and JS System Script</a></h3>
														<div class="course-meta">
																<span><i class="fal fa-file"></i>Lesson 8</span>
																<span><i class="fal fa-user"></i>Students 60+</span>
																<span><i class="fal fa-chart-simple"></i>Beginner</span>
														</div>
														<div class="course-author">
																<div class="author-info">
																		<img src="{{ asset('user') }}/img/course/author.png" alt="author">
																		<a href="course.html" class="author-name">Max Alexix</a>
																</div>
																<div class="offer-tag">Free</div>
														</div>
												</div>
										</div>
								</div>
								<div class="col-md-12 col-lg-3">
										<div class="course-box">
												<div class="course-img">
														<img src="{{ asset('user') }}/img/course/course2.webp" alt="img">
														<span class="tag"><i class="fas fa-clock"></i> 02 WEEKS</span>
												</div>
												<div class="course-content">
														<div class="course-rating">
																<div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
																		<span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
																</div>(4.7)
														</div>
														<h3 class="course-title"><a href="course-details.html">Learn Figma – UI/UX Design
																		Essential Training</a></h3>
														<div class="course-meta">
																<span><i class="fal fa-file"></i>Lesson 9</span>
																<span><i class="fal fa-user"></i>Students 50+</span>
																<span><i class="fal fa-chart-simple"></i>Beginner</span>
														</div>
														<div class="course-author">
																<div class="author-info">
																		<img src="{{ asset('user') }}/img/course/author.png" alt="author">
																		<a href="course.html" class="author-name">Kevin Perry</a>
																</div>
																<div class="offer-tag">Free</div>
														</div>
												</div>
										</div>
								</div>
								<div class="col-md-12 col-lg-3">
										<div class="course-box">
												<div class="course-img">
														<img src="{{ asset('user') }}/img/course/course3.webp" alt="img">
														<span class="tag"><i class="fas fa-clock"></i> 04 WEEKS</span>
												</div>
												<div class="course-content">
														<div class="course-rating">
																<div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
																		<span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
																</div>(4.7)
														</div>
														<h3 class="course-title"><a href="course-details.html">Advanced Android 12 & Kotlin
																		Development Course</a></h3>
														<div class="course-meta">
																<span><i class="fal fa-file"></i>Lesson 7</span>
																<span><i class="fal fa-user"></i>Students 30+</span>
																<span><i class="fal fa-chart-simple"></i>Beginner</span>
														</div>
														<div class="course-author">
																<div class="author-info">
																		<img src="{{ asset('user') }}/img/course/author.png" alt="author">
																		<a href="course.html" class="author-name">Max Alexix</a>
																</div>
																<div class="offer-tag">Free</div>
														</div>
												</div>
										</div>
								</div>
								<div class="col-md-12 col-lg-3">
										<div class="course-box">
												<div class="course-img">
														<img src="{{ asset('user') }}/img/course/course4.webp" alt="img">
														<span class="tag"><i class="fas fa-clock"></i> 02 WEEKS</span>
												</div>
												<div class="course-content">
														<div class="course-rating">
																<div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
																		<span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
																</div>(4.7)
														</div>
														<h3 class="course-title"><a href="course-details.html">IT Statistics Data Science and
																		Business Analysis</a></h3>
														<div class="course-meta">
																<span><i class="fal fa-file"></i>Lesson 10</span>
																<span><i class="fal fa-user"></i>Students 20+</span>
																<span><i class="fal fa-chart-simple"></i>Beginner</span>
														</div>
														<div class="course-author">
																<div class="author-info">
																		<img src="{{ asset('user') }}/img/course/author.png" alt="author">
																		<a href="course.html" class="author-name">Kevin Perry</a>
																</div>
																<div class="offer-tag">Free</div>
														</div>
												</div>
										</div>
								</div>
								<div class="col-md-12 col-lg-3">
										<div class="course-box">
												<div class="course-img">
														<img src="{{ asset('user') }}/img/course/course5.webp" alt="img">
														<span class="tag"><i class="fas fa-clock"></i> 03 WEEKS</span>
												</div>
												<div class="course-content">
														<div class="course-rating">
																<div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
																		<span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
																</div>(4.7)
														</div>
														<h3 class="course-title"><a href="course-details.html">Education Software and PHP
																		and JS System Script</a></h3>
														<div class="course-meta">
																<span><i class="fal fa-file"></i>Lesson 8</span>
																<span><i class="fal fa-user"></i>Students 60+</span>
																<span><i class="fal fa-chart-simple"></i>Beginner</span>
														</div>
														<div class="course-author">
																<div class="author-info">
																		<img src="{{ asset('user') }}/img/course/author.png" alt="author">
																		<a href="course.html" class="author-name">Max Alexix</a>
																</div>
																<div class="offer-tag">Free</div>
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
		</section>


		<!--==============================
		Testimonial Area
		==============================-->
		<section class="testi-area-3 bg-smoke space overflow-hidden">
				<div class="shape-mockup testi2-bg-shape2 spin d-xl-block d-none" data-right="0" data-bottom="5%">
						<img src="{{ asset('user') }}/img/testimonial/testi-bg-shape_1_2.png" alt="img">
				</div>

				<div class="shape-mockup testi2-bg-shape2 spin d-xl-block d-none" data-left="0" data-top="30%">
						<img src="{{ asset('user') }}/img/testimonial/testi-bg-shape_1_2.png" alt="img">
				</div>

				<div class="shape-mockup testi2-bg-shape3 jump d-lg-block d-none" data-left="5%" data-top="45%">
						<img src="{{ asset('user') }}/img/testimonial/testi-bg-shape_2_1.png" alt="img">
				</div>
				<div class="container">
						<div class="title-area text-lg-start text-center">
								<span class="sub-title"><i class="fal fa-book me-2"></i> E-Course Yang Tersedia</span>
								<h2 class="sec-title">Pilihan E-Course Buat Kamu Saat Ini</h2>
						</div>
				</div>
				<div class="container-fluid">
						<div class="row slider-shadow th-carousel testi-slider-3" data-slide-show="3" data-ml-slide-show="2"
								data-lg-slide-show="2" data-md-slide-show="1" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true">
								<div class="col-lg-4 mb-lg-3 mb-3">
										<div class="cta-card" data-bg-src="user/img/bg/warungskill-1.webp">
												<div class="title-area mb-40">
														<span class="sub-title text-white"><i class="fal fa-book me-2"></i>Popular Courses</span>
														<h4 class="sec-title text-white">Get The Best Courses & <br> Upgrade Your Skills </h4>
												</div>
												<a href="contact.html" class="th-btn style8">Join With Us<i class="fas fa-arrow-right ms-2"></i></a>
										</div>
								</div>
								<div class="col-lg-4 mb-30 mb-lg-30">
										<div class="cta-card" data-bg-src="user/img/bg/warungskill-2.webp">
												<div class="title-area mb-40">
														<span class="sub-title text-white"><i class="fal fa-book me-2"></i>Popular Courses</span>
														<h4 class="sec-title text-white">Engaging Courses for <br> Intellectual Exploration</h4>
												</div>
												<a href="contact.html" class="th-btn style8">Join With Us<i class="fas fa-arrow-right ms-2"></i></a>
										</div>
								</div>
								<div class="col-lg-4 mb-30 mb-lg-30">
										<div class="cta-card" data-bg-src="user/img/bg/warungskill-3.webp">
												<div class="title-area mb-40">
														<span class="sub-title text-white"><i class="fal fa-book me-2"></i>Popular Courses</span>
														<h4 class="sec-title text-white">Engaging Courses for <br> Intellectual Exploration</h4>
												</div>
												<a href="contact.html" class="th-btn style8">Join With Us<i class="fas fa-arrow-right ms-2"></i></a>
										</div>
								</div>

								<div class="col-lg-4 mb-30 mb-lg-30">
										<div class="cta-card" data-bg-src="user/img/bg/warungskill-4.webp">
												<div class="title-area mb-40">
														<span class="sub-title text-white"><i class="fal fa-book me-2"></i>Popular Courses</span>
														<h4 class="sec-title text-white">Engaging Courses for <br> Intellectual Exploration</h4>
												</div>
												<a href="contact.html" class="th-btn style8">Join With Us<i class="fas fa-arrow-right ms-2"></i></a>
										</div>
								</div>
						</div>
				</div>
		</section>


		<!--==============================
		Service Area
		==============================-->
		<section class="service-sec space">
				<div class="container">
						<div class="title-area text-center">
								<span class="sub-title"><i class="fal fa-book me-2"></i> Kenapa Pilih Warung Skill</span>
								<h2 class="sec-title">Kata Mereka Kenapa Pilih Warung Skill</h2>
						</div>

						<div class="row th-carousel service-slider1 slider-shadow" data-slide-show="4" data-ml-slide-show="3"
								data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1">
								<div class="col-md-6 col-xl-4">
										<div class="service-card">
												<div class="service-card-icon">
														<img class="svg-img" src="{{ asset('user') }}/img/icon/service-icon-1-1.svg" alt="icon">
												</div>
												<div class="service-card-content">
														<h3 class="box-title"><a href="service-details.html">Exclusive Advisor</a></h3>
														<p class="service-card-text">Monotonically conceptualize cutting-edge convergence whereas B2C networks.</p>
														<div class="service-card-img">
																<img src="{{ asset('user') }}/img/service/service-1-1.png" alt="img">
																<a href="service-details.html" class="icon-btn"><i class="fa-solid fa-arrow-right"></i></a>
														</div>
												</div>
										</div>
								</div>

								<div class="col-md-6 col-xl-4">
										<div class="service-card">
												<div class="service-card-icon">
														<img class="svg-img" src="{{ asset('user') }}/img/icon/service-icon-1-2.svg" alt="icon">
												</div>
												<div class="service-card-content">
														<h3 class="box-title"><a href="service-details.html">Study Off Flexibly</a></h3>
														<p class="service-card-text">Discover different career paths and industries, along with the required
																skills, education.</p>
														<div class="service-card-img">
																<img src="{{ asset('user') }}/img/service/service-1-2.png" alt="img">
																<a href="service-details.html" class="icon-btn"><i class="fa-solid fa-arrow-right"></i></a>
														</div>
												</div>
										</div>
								</div>

								<div class="col-md-6 col-xl-4">
										<div class="service-card">
												<div class="service-card-icon">
														<img class="svg-img" src="{{ asset('user') }}/img/icon/service-icon-1-3.svg" alt="icon">
												</div>
												<div class="service-card-content">
														<h3 class="box-title"><a href="service-details.html">Online Certificates</a></h3>
														<p class="service-card-text">Gain insights into how parents can support their childs educational journey.
														</p>
														<div class="service-card-img">
																<img src="{{ asset('user') }}/img/service/service-1-3.png" alt="img">
																<a href="service-details.html" class="icon-btn"><i class="fa-solid fa-arrow-right"></i></a>
														</div>
												</div>
										</div>
								</div>

								<div class="col-md-6 col-xl-4">
										<div class="service-card">
												<div class="service-card-icon">
														<img class="svg-img" src="{{ asset('user') }}/img/icon/service-icon-1-4.svg" alt="icon">
												</div>
												<div class="service-card-content">
														<h3 class="box-title"><a href="service-details.html">Evidence of learned</a></h3>
														<p class="service-card-text">Access a range of teaching strategies, lesson plans, classroom management.</p>
														<div class="service-card-img">
																<img src="{{ asset('user') }}/img/service/service-1-4.png" alt="img">
																<a href="service-details.html" class="icon-btn"><i class="fa-solid fa-arrow-right"></i></a>
														</div>
												</div>
										</div>
								</div>

								<div class="col-md-6 col-xl-4">
										<div class="service-card">
												<div class="service-card-icon">
														<img class="svg-img" src="{{ asset('user') }}/img/icon/service-icon-1-1.svg" alt="icon">
												</div>
												<div class="service-card-content">
														<h3 class="box-title"><a href="service-details.html">Exclusive Advisor</a></h3>
														<p class="service-card-text">Monotonically conceptualize cutting-edge convergence whereas B2C networks.</p>
														<div class="service-card-img">
																<img src="{{ asset('user') }}/img/service/service-1-1.png" alt="img">
																<a href="service-details.html" class="icon-btn"><i class="fa-solid fa-arrow-right"></i></a>
														</div>
												</div>
										</div>
								</div>

								<div class="col-md-6 col-xl-4">
										<div class="service-card">
												<div class="service-card-icon">
														<img class="svg-img" src="{{ asset('user') }}/img/icon/service-icon-1-2.svg" alt="icon">
												</div>
												<div class="service-card-content">
														<h3 class="box-title"><a href="service-details.html">Study Off Flexibly</a></h3>
														<p class="service-card-text">Discover different career paths and industries, along with the required
																skills, education.</p>
														<div class="service-card-img">
																<img src="{{ asset('user') }}/img/service/service-1-2.png" alt="img">
																<a href="service-details.html" class="icon-btn"><i class="fa-solid fa-arrow-right"></i></a>
														</div>
												</div>
										</div>
								</div>

								<div class="col-md-6 col-xl-4">
										<div class="service-card">
												<div class="service-card-icon">
														<img class="svg-img" src="{{ asset('user') }}/img/icon/service-icon-1-3.svg" alt="icon">
												</div>
												<div class="service-card-content">
														<h3 class="box-title"><a href="service-details.html">Online Certificates</a></h3>
														<p class="service-card-text">Gain insights into how parents can support their childs educational journey.
														</p>
														<div class="service-card-img">
																<img src="{{ asset('user') }}/img/service/service-1-3.png" alt="img">
																<a href="service-details.html" class="icon-btn"><i class="fa-solid fa-arrow-right"></i></a>
														</div>
												</div>
										</div>
								</div>

								<div class="col-md-6 col-xl-4">
										<div class="service-card">
												<div class="service-card-icon">
														<img class="svg-img" src="{{ asset('user') }}/img/icon/service-icon-1-4.svg" alt="icon">
												</div>
												<div class="service-card-content">
														<h3 class="box-title"><a href="service-details.html">Evidence of learned</a></h3>
														<p class="service-card-text">Access a range of teaching strategies, lesson plans, classroom management.</p>
														<div class="service-card-img">
																<img src="{{ asset('user') }}/img/service/service-1-4.png" alt="img">
																<a href="service-details.html" class="icon-btn"><i class="fa-solid fa-arrow-right"></i></a>
														</div>
												</div>
										</div>
								</div>

						</div>
				</div>
		</section>

		<!--==============================
		Team Area
		==============================-->
		<section class="space bg-smoke overflow-hidden" id="team-sec">
				<div class="shape-mockup team2-bg-shape1 jump-reverse d-lg-block d-none" data-left="-2%" data-top="0">
						<img src="{{ asset('user') }}/img/team/team-shape_1_1.png" alt="img">
				</div>

				<!-- <div class="shape-mockup team2-bg-shape2 jump d-lg-block d-none" data-left="30%" data-top="7%">
														<img src="{{ asset('user') }}/img/team/team-shape_1_2.png" alt="img">
										</div> -->

				<div class="shape-mockup team2-bg-shape3 jump d-md-block d-none" data-left="4%" data-bottom="3%">
						<img src="{{ asset('user') }}/img/team/team-shape_1_3.png" alt="img">
				</div>

				<div class="shape-mockup team2-bg-shape4 spin d-md-block d-none" data-left="40%" data-bottom="4%">
						<img src="{{ asset('user') }}/img/team/team-shape_1_4.png" alt="img">
				</div>

				<div class="shape-mockup team2-bg-shape5 jump d-xxl-block d-none" data-right="-7%" data-top="10%">
						<img src="{{ asset('user') }}/img/team/team-shape_1_5.png" alt="img">
				</div> -->

				<div class="container">
						<div class="title-area text-center">
								<span class="sub-title"><i class="fal fa-book me-2"></i> Instruktur Kami</span>
								<h2 class="sec-title">Kenalan Dengan Para Instruktur Berpengalaman</h2>
						</div>
						<div class="row th-carousel slider-shadow" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2"
								data-sm-slide-show="2" data-xs-slide-show="1">
								<!-- Single Item -->
								<div class="col-lg-6">
										<div class="team-card style2">
												<div class="team-img-wrap">
														<svg class="team-shape" xmlns="http://www.w3.org/2000/svg" width="327" height="337"
																viewBox="0 0 327 337" fill="none">
																<path
																		d="M158.167 331C158.167 333.946 160.555 336.333 163.5 336.333C166.446 336.333 168.833 333.946 168.833 331C168.833 328.054 166.446 325.667 163.5 325.667C160.555 325.667 158.167 328.054 158.167 331ZM158.167 6C158.167 8.94552 160.555 11.3333 163.5 11.3333C166.446 11.3333 168.833 8.94552 168.833 6C168.833 3.05448 166.446 0.666667 163.5 0.666667C160.555 0.666667 158.167 3.05448 158.167 6ZM325 167.5C325 257.254 253.238 330 163.5 330V332C254.359 332 327 258.343 327 167.5H325ZM2.00012 167.5C2.00012 77.7618 73.7458 7 163.5 7V5C72.6574 5 0.00012207 76.6411 0.00012207 167.5H2.00012Z"
																		fill="#0D5EF4" />
														</svg>
														<div class="team-img">
																<img src="{{ asset('user') }}/img/team/team_2_1.jpg" alt="Team">
														</div>
														<div class="team-social">
																<a href="#" class="icon-btn">
																		<i class="far fa-plus"></i>
																</a>
																<div class="th-social">
																		<a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
																		<a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
																		<a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
																</div>
														</div>
												</div>
												<div class="team-content">
														<h3 class="team-title"><a href="team-details.html">Hirmar Ubunti</a></h3>
														<span class="team-desig">Instructor</span>
												</div>
										</div>
								</div>

								<!-- Single Item -->
								<div class="col-lg-6">
										<div class="team-card style2">
												<div class="team-img-wrap">
														<svg class="team-shape" xmlns="http://www.w3.org/2000/svg" width="327" height="337"
																viewBox="0 0 327 337" fill="none">
																<path
																		d="M158.167 331C158.167 333.946 160.555 336.333 163.5 336.333C166.446 336.333 168.833 333.946 168.833 331C168.833 328.054 166.446 325.667 163.5 325.667C160.555 325.667 158.167 328.054 158.167 331ZM158.167 6C158.167 8.94552 160.555 11.3333 163.5 11.3333C166.446 11.3333 168.833 8.94552 168.833 6C168.833 3.05448 166.446 0.666667 163.5 0.666667C160.555 0.666667 158.167 3.05448 158.167 6ZM325 167.5C325 257.254 253.238 330 163.5 330V332C254.359 332 327 258.343 327 167.5H325ZM2.00012 167.5C2.00012 77.7618 73.7458 7 163.5 7V5C72.6574 5 0.00012207 76.6411 0.00012207 167.5H2.00012Z"
																		fill="#0D5EF4" />
														</svg>
														<div class="team-img">
																<img src="{{ asset('user') }}/img/team/team_2_2.jpg" alt="Team">
														</div>
														<div class="team-social">
																<a href="#" class="icon-btn">
																		<i class="far fa-plus"></i>
																</a>
																<div class="th-social">
																		<a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
																		<a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
																		<a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
																</div>
														</div>
												</div>
												<div class="team-content">
														<h3 class="team-title"><a href="team-details.html">Lily Michelle</a></h3>
														<span class="team-desig">Founder & CEO</span>
												</div>
										</div>
								</div>

								<!-- Single Item -->
								<div class="col-lg-6">
										<div class="team-card style2">
												<div class="team-img-wrap">
														<svg class="team-shape" xmlns="http://www.w3.org/2000/svg" width="327" height="337"
																viewBox="0 0 327 337" fill="none">
																<path
																		d="M158.167 331C158.167 333.946 160.555 336.333 163.5 336.333C166.446 336.333 168.833 333.946 168.833 331C168.833 328.054 166.446 325.667 163.5 325.667C160.555 325.667 158.167 328.054 158.167 331ZM158.167 6C158.167 8.94552 160.555 11.3333 163.5 11.3333C166.446 11.3333 168.833 8.94552 168.833 6C168.833 3.05448 166.446 0.666667 163.5 0.666667C160.555 0.666667 158.167 3.05448 158.167 6ZM325 167.5C325 257.254 253.238 330 163.5 330V332C254.359 332 327 258.343 327 167.5H325ZM2.00012 167.5C2.00012 77.7618 73.7458 7 163.5 7V5C72.6574 5 0.00012207 76.6411 0.00012207 167.5H2.00012Z"
																		fill="#0D5EF4" />
														</svg>
														<div class="team-img">
																<img src="{{ asset('user') }}/img/team/team_2_3.jpg" alt="Team">
														</div>
														<div class="team-social">
																<a href="#" class="icon-btn">
																		<i class="far fa-plus"></i>
																</a>
																<div class="th-social">
																		<a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
																		<a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
																		<a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
																</div>
														</div>
												</div>
												<div class="team-content">
														<h3 class="team-title"><a href="team-details.html">Daniel Thomas</a></h3>
														<span class="team-desig">Junior Instructor</span>
												</div>
										</div>
								</div>


								<div class="col-lg-6">
										<div class="team-card style2">
												<div class="team-img-wrap">
														<svg class="team-shape" xmlns="http://www.w3.org/2000/svg" width="327" height="337"
																viewBox="0 0 327 337" fill="none">
																<path
																		d="M158.167 331C158.167 333.946 160.555 336.333 163.5 336.333C166.446 336.333 168.833 333.946 168.833 331C168.833 328.054 166.446 325.667 163.5 325.667C160.555 325.667 158.167 328.054 158.167 331ZM158.167 6C158.167 8.94552 160.555 11.3333 163.5 11.3333C166.446 11.3333 168.833 8.94552 168.833 6C168.833 3.05448 166.446 0.666667 163.5 0.666667C160.555 0.666667 158.167 3.05448 158.167 6ZM325 167.5C325 257.254 253.238 330 163.5 330V332C254.359 332 327 258.343 327 167.5H325ZM2.00012 167.5C2.00012 77.7618 73.7458 7 163.5 7V5C72.6574 5 0.00012207 76.6411 0.00012207 167.5H2.00012Z"
																		fill="#0D5EF4" />
														</svg>
														<div class="team-img">
																<img src="{{ asset('user') }}/img/team/team_2_4.jpg" alt="Team">
														</div>
														<div class="team-social">
																<a href="#" class="icon-btn">
																		<i class="far fa-plus"></i>
																</a>
																<div class="th-social">
																		<a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
																		<a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
																		<a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
																</div>
														</div>
												</div>
												<div class="team-content">
														<h3 class="team-title"><a href="team-details.html">Jennifer Patricia</a></h3>
														<span class="team-desig">Senior Instructor</span>
												</div>
										</div>
								</div>

								<div class="col-lg-6">
										<div class="team-card style2">
												<div class="team-img-wrap">
														<svg class="team-shape" xmlns="http://www.w3.org/2000/svg" width="327" height="337"
																viewBox="0 0 327 337" fill="none">
																<path
																		d="M158.167 331C158.167 333.946 160.555 336.333 163.5 336.333C166.446 336.333 168.833 333.946 168.833 331C168.833 328.054 166.446 325.667 163.5 325.667C160.555 325.667 158.167 328.054 158.167 331ZM158.167 6C158.167 8.94552 160.555 11.3333 163.5 11.3333C166.446 11.3333 168.833 8.94552 168.833 6C168.833 3.05448 166.446 0.666667 163.5 0.666667C160.555 0.666667 158.167 3.05448 158.167 6ZM325 167.5C325 257.254 253.238 330 163.5 330V332C254.359 332 327 258.343 327 167.5H325ZM2.00012 167.5C2.00012 77.7618 73.7458 7 163.5 7V5C72.6574 5 0.00012207 76.6411 0.00012207 167.5H2.00012Z"
																		fill="#0D5EF4" />
														</svg>
														<div class="team-img">
																<img src="{{ asset('user') }}/img/team/team_2_1.jpg" alt="Team">
														</div>
														<div class="team-social">
																<a href="#" class="icon-btn">
																		<i class="far fa-plus"></i>
																</a>
																<div class="th-social">
																		<a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
																		<a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
																		<a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
																</div>
														</div>
												</div>
												<div class="team-content">
														<h3 class="team-title"><a href="team-details.html">Hirmar Ubunti</a></h3>
														<span class="team-desig">Instructor</span>
												</div>
										</div>
								</div>

								<div class="col-lg-6">
										<div class="team-card style2">
												<div class="team-img-wrap">
														<svg class="team-shape" xmlns="http://www.w3.org/2000/svg" width="327" height="337"
																viewBox="0 0 327 337" fill="none">
																<path
																		d="M158.167 331C158.167 333.946 160.555 336.333 163.5 336.333C166.446 336.333 168.833 333.946 168.833 331C168.833 328.054 166.446 325.667 163.5 325.667C160.555 325.667 158.167 328.054 158.167 331ZM158.167 6C158.167 8.94552 160.555 11.3333 163.5 11.3333C166.446 11.3333 168.833 8.94552 168.833 6C168.833 3.05448 166.446 0.666667 163.5 0.666667C160.555 0.666667 158.167 3.05448 158.167 6ZM325 167.5C325 257.254 253.238 330 163.5 330V332C254.359 332 327 258.343 327 167.5H325ZM2.00012 167.5C2.00012 77.7618 73.7458 7 163.5 7V5C72.6574 5 0.00012207 76.6411 0.00012207 167.5H2.00012Z"
																		fill="#0D5EF4" />
														</svg>
														<div class="team-img">
																<img src="{{ asset('user') }}/img/team/team_2_2.jpg" alt="Team">
														</div>
														<div class="team-social">
																<a href="#" class="icon-btn">
																		<i class="far fa-plus"></i>
																</a>
																<div class="th-social">
																		<a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
																		<a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
																		<a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
																</div>
														</div>
												</div>
												<div class="team-content">
														<h3 class="team-title"><a href="team-details.html">Lily Michelle</a></h3>
														<span class="team-desig">Founder & CEO</span>
												</div>
										</div>
								</div>

								<div class="col-lg-6">
										<div class="team-card style2">
												<div class="team-img-wrap">
														<svg class="team-shape" xmlns="http://www.w3.org/2000/svg" width="327" height="337"
																viewBox="0 0 327 337" fill="none">
																<path
																		d="M158.167 331C158.167 333.946 160.555 336.333 163.5 336.333C166.446 336.333 168.833 333.946 168.833 331C168.833 328.054 166.446 325.667 163.5 325.667C160.555 325.667 158.167 328.054 158.167 331ZM158.167 6C158.167 8.94552 160.555 11.3333 163.5 11.3333C166.446 11.3333 168.833 8.94552 168.833 6C168.833 3.05448 166.446 0.666667 163.5 0.666667C160.555 0.666667 158.167 3.05448 158.167 6ZM325 167.5C325 257.254 253.238 330 163.5 330V332C254.359 332 327 258.343 327 167.5H325ZM2.00012 167.5C2.00012 77.7618 73.7458 7 163.5 7V5C72.6574 5 0.00012207 76.6411 0.00012207 167.5H2.00012Z"
																		fill="#0D5EF4" />
														</svg>
														<div class="team-img">
																<img src="{{ asset('user') }}/img/team/team_2_3.jpg" alt="Team">
														</div>
														<div class="team-social">
																<a href="#" class="icon-btn">
																		<i class="far fa-plus"></i>
																</a>
																<div class="th-social">
																		<a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
																		<a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
																		<a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
																</div>
														</div>
												</div>
												<div class="team-content">
														<h3 class="team-title"><a href="team-details.html">Daniel Thomas</a></h3>
														<span class="team-desig">Junior Instructor</span>
												</div>
										</div>
								</div>


								<div class="col-lg-6">
										<div class="team-card style2">
												<div class="team-img-wrap">
														<svg class="team-shape" xmlns="http://www.w3.org/2000/svg" width="327" height="337"
																viewBox="0 0 327 337" fill="none">
																<path
																		d="M158.167 331C158.167 333.946 160.555 336.333 163.5 336.333C166.446 336.333 168.833 333.946 168.833 331C168.833 328.054 166.446 325.667 163.5 325.667C160.555 325.667 158.167 328.054 158.167 331ZM158.167 6C158.167 8.94552 160.555 11.3333 163.5 11.3333C166.446 11.3333 168.833 8.94552 168.833 6C168.833 3.05448 166.446 0.666667 163.5 0.666667C160.555 0.666667 158.167 3.05448 158.167 6ZM325 167.5C325 257.254 253.238 330 163.5 330V332C254.359 332 327 258.343 327 167.5H325ZM2.00012 167.5C2.00012 77.7618 73.7458 7 163.5 7V5C72.6574 5 0.00012207 76.6411 0.00012207 167.5H2.00012Z"
																		fill="#0D5EF4" />
														</svg>
														<div class="team-img">
																<img src="{{ asset('user') }}/img/team/team_2_4.jpg" alt="Team">
														</div>
														<div class="team-social">
																<a href="#" class="icon-btn">
																		<i class="far fa-plus"></i>
																</a>
																<div class="th-social">
																		<a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
																		<a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
																		<a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
																</div>
														</div>
												</div>
												<div class="team-content">
														<h3 class="team-title"><a href="team-details.html">Jennifer Patricia</a></h3>
														<span class="team-desig">Senior Instructor</span>
												</div>
										</div>
								</div>

						</div>
				</div>
		</section>

		<section class="space" data-bg-src="user/img/bg/event-bg_1.png">
				<div class="shape-mockup event-shape1 jump" data-top="0" data-left="-60px">
						<img src="{{ asset('user') }}/img/team/team-shape_1_1.png" alt="img">
				</div>
				<div class="container">
						<div class="title-area text-center">
								<span class="sub-title"><i class="fal fa-book me-2"></i> Workshop Kami</span>
								<h2 class="sec-title">Catet Dari Sekarang Yah Workshop Yang Akan Dateng Nih!!</h2>
						</div>
						<div class="row slider-shadow event-slider-1 th-carousel gx-70" data-slide-show="3" data-lg-slide-show="3"
								data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true">
								<div class="col-lg-6 col-xl-4">
										<div class="event-card">
												<div class="event-card_img" data-mask-src="{{ asset('user') }}/img/event/event_img-shape.png">
														<img src="{{ asset('user') }}/img/event/event_img-1.png" alt="event">
												</div>
												<div class="event-card_content">
														<div class="event-author">
																<div class="avater">
																		<img src="{{ asset('user') }}/img/event/event-author1.png" alt="avater">
																</div>
																<div class="details">
																		<span class="author-name">David Smith</span>
																		<p class="author-desig">Chief - Executive</p>
																</div>
														</div>
														<div class="event-meta">
																<p><i class="fal fa-location-dot"></i>259, NewYork,</p>
																<p><i class="fal fa-clock"></i>08:00 am - 10:00 am</p>
														</div>
														<h3 class="event-card_title"><a href="event-details.html">What Soul Can Tech Us About Web Design</a></h3>
														<div class="event-card_bottom">
																<a href="event-details.html" class="th-btn">View Event <i class="far fa-arrow-right ms-1"></i></a>
														</div>
														<div class="event-card-shape jump">
																<img src="{{ asset('user') }}/img/event/event-box-shape1.png" alt="img">
														</div>
												</div>
										</div>
								</div>
								<div class="col-lg-6 col-xl-4">
										<div class="event-card">
												<div class="event-card_img" data-mask-src="{{ asset('user') }}/img/event/event_img-shape.png">
														<img src="{{ asset('user') }}/img/event/event_img-2.png" alt="event">
												</div>
												<div class="event-card_content">
														<div class="event-author">
																<div class="avater">
																		<img src="{{ asset('user') }}/img/event/event-author2.png" alt="avater">
																</div>
																<div class="details">
																		<span class="author-name">Adam Jhon</span>
																		<p class="author-desig">Chief - Executive</p>
																</div>
														</div>
														<div class="event-meta">
																<p><i class="fal fa-location-dot"></i>Hilton, NewYork,</p>
																<p><i class="fal fa-clock"></i>10:00 am - 11:00 am</p>
														</div>
														<h3 class="event-card_title"><a href="event-details.html">Embrace the world of online education</a></h3>
														<div class="event-card_bottom">
																<a href="event-details.html" class="th-btn">View Event <i class="far fa-arrow-right ms-1"></i></a>
														</div>
														<div class="event-card-shape jump">
																<img src="{{ asset('user') }}/img/event/event-box-shape1.png" alt="img">
														</div>
												</div>
										</div>
								</div>
								<div class="col-lg-6 col-xl-4">
										<div class="event-card">
												<div class="event-card_img" data-mask-src="{{ asset('user') }}/img/event/event_img-shape.png">
														<img src="{{ asset('user') }}/img/event/event_img-3.png" alt="event">
												</div>
												<div class="event-card_content">
														<div class="event-author">
																<div class="avater">
																		<img src="{{ asset('user') }}/img/event/event-author3.png" alt="avater">
																</div>
																<div class="details">
																		<span class="author-name">Michael Rich</span>
																		<p class="author-desig">Chief - Executive</p>
																</div>
														</div>
														<div class="event-meta">
																<p><i class="fal fa-location-dot"></i>147, Green Road</p>
																<p><i class="fal fa-clock"></i>11:00 am - 12:00 pm</p>
														</div>
														<h3 class="event-card_title"><a href="event-details.html">Gain insights into how parents can support</a>
														</h3>
														<div class="event-card_bottom">
																<a href="event-details.html" class="th-btn">View Event <i class="far fa-arrow-right ms-1"></i></a>
														</div>
														<div class="event-card-shape jump">
																<img src="{{ asset('user') }}/img/event/event-box-shape1.png" alt="img">
														</div>
												</div>
										</div>
								</div>
								<div class="col-lg-6 col-xl-4">
										<div class="event-card">
												<div class="event-card_img" data-mask-src="{{ asset('user') }}/img/event/event_img-shape.png">
														<img src="{{ asset('user') }}/img/event/event_img-4.png" alt="event">
												</div>
												<div class="event-card_content">
														<div class="event-author">
																<div class="avater">
																		<img src="{{ asset('user') }}/img/event/event-author4.png" alt="avater">
																</div>
																<div class="details">
																		<span class="author-name">Anadi Juila</span>
																		<p class="author-desig">Chief - Executive</p>
																</div>
														</div>
														<div class="event-meta">
																<p><i class="fal fa-location-dot"></i>Kipling, London,</p>
																<p><i class="fal fa-clock"></i>08:00 am - 10:00 am</p>
														</div>
														<h3 class="event-card_title"><a href="event-details.html">Exploring New Frontiers in Education</a></h3>
														<div class="event-card_bottom">
																<a href="event-details.html" class="th-btn">View Event <i class="far fa-arrow-right ms-1"></i></a>
														</div>
														<div class="event-card-shape jump">
																<img src="{{ asset('user') }}/img/event/event-box-shape1.png" alt="img">
														</div>
												</div>
										</div>
								</div>
								<div class="col-lg-6 col-xl-4">
										<div class="event-card">
												<div class="event-card_img" data-mask-src="{{ asset('user') }}/img/event/event_img-shape.png">
														<img src="{{ asset('user') }}/img/event/event_img-5.png" alt="event">
												</div>
												<div class="event-card_content">
														<div class="event-author">
																<div class="avater">
																		<img src="{{ asset('user') }}/img/event/event-author1.png" alt="avater">
																</div>
																<div class="details">
																		<span class="author-name">David Smith</span>
																		<p class="author-desig">Chief - Executive</p>
																</div>
														</div>
														<div class="event-meta">
																<p><i class="fal fa-location-dot"></i>Paris, France,</p>
																<p><i class="fal fa-clock"></i>10:00 am - 11:00 am</p>
														</div>
														<h3 class="event-card_title"><a href="event-details.html">A Journey of Educational Excellence</a></h3>
														<div class="event-card_bottom">
																<a href="event-details.html" class="th-btn">View Event <i class="far fa-arrow-right ms-1"></i></a>
														</div>
														<div class="event-card-shape jump">
																<img src="{{ asset('user') }}/img/event/event-box-shape1.png" alt="img">
														</div>
												</div>
										</div>
								</div>
								<div class="col-lg-6 col-xl-4">
										<div class="event-card">
												<div class="event-card_img" data-mask-src="{{ asset('user') }}/img/event/event_img-shape.png">
														<img src="{{ asset('user') }}/img/event/event_img-6.png" alt="event">
												</div>
												<div class="event-card_content">
														<div class="event-author">
																<div class="avater">
																		<img src="{{ asset('user') }}/img/event/event-author2.png" alt="avater">
																</div>
																<div class="details">
																		<span class="author-name">Adam Jhon</span>
																		<p class="author-desig">Chief - Executive</p>
																</div>
														</div>
														<div class="event-meta">
																<p><i class="fal fa-location-dot"></i>Broly, NewYork,</p>
																<p><i class="fal fa-clock"></i>11:00 am - 12:00 pm</p>
														</div>
														<h3 class="event-card_title"><a href="event-details.html">Unleashing the Potential of Education</a></h3>
														<div class="event-card_bottom">
																<a href="event-details.html" class="th-btn">View Event <i class="far fa-arrow-right ms-1"></i></a>
														</div>
														<div class="event-card-shape jump">
																<img src="{{ asset('user') }}/img/event/event-box-shape1.png" alt="img">
														</div>
												</div>
										</div>
								</div>
								<div class="col-lg-6 col-xl-4">
										<div class="event-card">
												<div class="event-card_img" data-mask-src="{{ asset('user') }}/img/event/event_img-shape.png">
														<img src="{{ asset('user') }}/img/event/event_img-7.png" alt="event">
												</div>
												<div class="event-card_content">
														<div class="event-author">
																<div class="avater">
																		<img src="{{ asset('user') }}/img/event/event-author3.png" alt="avater">
																</div>
																<div class="details">
																		<span class="author-name">Michael Rich</span>
																		<p class="author-desig">Chief - Executive</p>
																</div>
														</div>
														<div class="event-meta">
																<p><i class="fal fa-location-dot"></i>Easton, USA,</p>
																<p><i class="fal fa-clock"></i>08:00 am - 10:00 am</p>
														</div>
														<h3 class="event-card_title"><a href="event-details.html">Preparing Students for Tomorrow,s Challenges</a>
														</h3>
														<div class="event-card_bottom">
																<a href="event-details.html" class="th-btn">View Event <i class="far fa-arrow-right ms-1"></i></a>
														</div>
														<div class="event-card-shape jump">
																<img src="{{ asset('user') }}/img/event/event-box-shape1.png" alt="img">
														</div>
												</div>
										</div>
								</div>
								<div class="col-lg-6 col-xl-4">
										<div class="event-card">
												<div class="event-card_img" data-mask-src="{{ asset('user') }}/img/event/event_img-shape.png">
														<img src="{{ asset('user') }}/img/event/event_img-8.png" alt="event">
												</div>
												<div class="event-card_content">
														<div class="event-author">
																<div class="avater">
																		<img src="{{ asset('user') }}/img/event/event-author4.png" alt="avater">
																</div>
																<div class="details">
																		<span class="author-name">Anadi Juila</span>
																		<p class="author-desig">Chief - Executive</p>
																</div>
														</div>
														<div class="event-meta">
																<p><i class="fal fa-location-dot"></i>Sharjah, UAE,</p>
																<p><i class="fal fa-clock"></i>10:00 am - 11:00 am</p>
														</div>
														<h3 class="event-card_title"><a href="event-details.html">Embracing Technology in Education</a></h3>
														<div class="event-card_bottom">
																<a href="event-details.html" class="th-btn">View Event <i class="far fa-arrow-right ms-1"></i></a>
														</div>
														<div class="event-card-shape jump">
																<img src="{{ asset('user') }}/img/event/event-box-shape1.png" alt="img">
														</div>
												</div>
										</div>
								</div>
								<div class="col-lg-6 col-xl-4">
										<div class="event-card">
												<div class="event-card_img" data-mask-src="{{ asset('user') }}/img/event/event_img-shape.png">
														<img src="{{ asset('user') }}/img/event/event_img-9.png" alt="event">
												</div>
												<div class="event-card_content">
														<div class="event-author">
																<div class="avater">
																		<img src="{{ asset('user') }}/img/event/event-author1.png" alt="avater">
																</div>
																<div class="details">
																		<span class="author-name">David Smith</span>
																		<p class="author-desig">Chief - Executive</p>
																</div>
														</div>
														<div class="event-meta">
																<p><i class="fal fa-location-dot"></i>Al Road, Dubai,</p>
																<p><i class="fal fa-clock"></i>11:00 am - 12:00 pm</p>
														</div>
														<h3 class="event-card_title"><a href="event-details.html">Redefining Learning for the 21st Century</a>
														</h3>
														<div class="event-card_bottom">
																<a href="event-details.html" class="th-btn">View Event <i class="far fa-arrow-right ms-1"></i></a>
														</div>
														<div class="event-card-shape jump">
																<img src="{{ asset('user') }}/img/event/event-box-shape1.png" alt="img">
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
		</section>
		<section class="space overflow-hidden" data-bg-src="user/img/bg/blog-3-bg.png" id="blog-sec">
				<div class="container">
						<div class="text-md-start mb-20 text-center">
								<div class="row align-items-center justify-content-between">
										<div class="col-md-8">
												<div class="title-area mb-md-0">
														<span class="sub-title"><i class="fal fa-book me-2"></i> Mitra Kami</span>
														<h2 class="sec-title">Lebih Dari 100 Mitra Telah Tergabung di Warung Skill</h2>
												</div>
										</div>
										<div class="col-md-auto">
												<a href="blog.html" class="th-btn">View All Client<i class="fa-solid fa-arrow-right ms-2"></i></a>
										</div>
								</div>
						</div>
						<div class="client-area-3">
								<div class="row th-carousel" data-slide-show="8" data-md-slide-show="6">
										<div class="col-lg-12">
												<a href="blog.html" class="client-thumb">
														<img src="{{ asset('user') }}/img/client/transparent/support-1.webp" alt="img">
												</a>
										</div>

										<div class="col-lg-12">
												<a href="blog.html" class="client-thumb">
														<img src="{{ asset('user') }}/img/client/transparent/support-2.webp" alt="img">
												</a>
										</div>

										<div class="col-lg-12">
												<a href="blog.html" class="client-thumb">
														<img src="{{ asset('user') }}/img/client/transparent/support-3.webp" alt="img">
												</a>
										</div>

										<div class="col-lg-12">
												<a href="blog.html" class="client-thumb">
														<img src="{{ asset('user') }}/img/client/transparent/support-4.webp" alt="img">
												</a>
										</div>

										<div class="col-lg-12">
												<a href="blog.html" class="client-thumb">
														<img src="{{ asset('user') }}/img/client/transparent/support-5.webp" alt="img">
												</a>
										</div>

										<div class="col-lg-12">
												<a href="blog.html" class="client-thumb">
														<img src="{{ asset('user') }}/img/client/transparent/support-6.webp" alt="img">
												</a>
										</div>

										<div class="col-lg-12">
												<a href="blog.html" class="client-thumb">
														<img src="{{ asset('user') }}/img/client/transparent/support-7.webp" alt="img">
												</a>
										</div>

										<div class="col-lg-12">
												<a href="blog.html" class="client-thumb">
														<img src="{{ asset('user') }}/img/client/transparent/support-8.webp" alt="img">
												</a>
										</div>

										<div class="col-lg-12">
												<a href="blog.html" class="client-thumb">
														<img src="{{ asset('user') }}/img/client/transparent/support-9.webp" alt="img">
												</a>
										</div>

										<div class="col-lg-12">
												<a href="blog.html" class="client-thumb">
														<img src="{{ asset('user') }}/img/client/transparent/support-10.webp" alt="img">
												</a>
										</div>

										<div class="col-lg-12">
												<a href="blog.html" class="client-thumb">
														<img src="{{ asset('user') }}/img/client/transparent/support-11.webp" alt="img">
												</a>
										</div>

										<div class="col-lg-12">
												<a href="blog.html" class="client-thumb">
														<img src="{{ asset('user') }}/img/client/transparent/support-12.webp" alt="img">
												</a>
										</div>

										<div class="col-lg-12">
												<a href="blog.html" class="client-thumb">
														<img src="{{ asset('user') }}/img/client/transparent/support-13.webp" alt="img">
												</a>
										</div>

										<div class="col-lg-12">
												<a href="blog.html" class="client-thumb">
														<img src="{{ asset('user') }}/img/client/transparent/support-14.webp" alt="img">
												</a>
										</div>


								</div>
						</div>
						<div class="clearfix">&nbsp;</div>
				</div>
		</section>
@endsection
