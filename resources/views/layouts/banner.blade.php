@if ($location=="home")
    <div  class="cover-image bg-background-1 bg-background-dark" data-bs-image-src="{{ asset('assets/images/banners/slide-3.jpg') }}">
        <!--Topbar-->
        <div class="header-main">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-sm-4 col-12">
                            <div class="top-bar-start d-flex">
                                <div class="clearfix">
                                    <ul class="socials">
                                        <li>
                                            <a class="social-icon text-dark" href="javascript:void(0)"><i class="fe fe-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a class="social-icon text-dark" href="javascript:void(0)"><i class="fe fe-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a class="social-icon text-dark" href="javascript:void(0)"><i class="fe fe-linkedin"></i></a>
                                        </li>
                                        <li>
                                            <a class="social-icon text-dark" href="javascript:void(0)"><i class="fe fe-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-sm-8 col-12">
                            <div class="top-bar-end">
                                <ul class="custom">
                                    <li>
                                        <a href="{{ url('register') }}" class="text-dark"><i class="fe fe-user me-1"></i> <span>Register</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ url('login') }}" class="text-dark"><i class="fe fe-log-in me-1"></i> <span>Login</span></a>
                                    </li>
                                    {{-- <li class="dropdown">
                                        <a href="javascript:void(0)" class="text-dark" data-bs-toggle="dropdown"><i class="fe fe-home me-1"></i><span> My Dashboard<i class="fe fe-chevron-down text-white ms-1"></i></span></a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <a href="mydash.html" class="dropdown-item" >
                                                <i class="dropdown-icon icon icon-user"></i> My Profile
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="dropdown-icon icon icon-speech"></i> Inbox
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="dropdown-icon icon icon-bell"></i> Notifications
                                            </a>
                                            <a href="mydash.html" class="dropdown-item" >
                                                <i class="dropdown-icon  icon icon-settings"></i> Account Settings
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="dropdown-icon icon icon-power"></i> Log out
                                            </a>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/Topbar-->
            <!-- Mobile Header -->
            <div class="sticky">
                <div class="horizontal-header clearfix ">
                    <div class="container">
                        <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
                        <span class="smllogo"><img src="{{ ('assets/images/brand/logo1.png') }}" width="120" alt="img"/></span>
                        <span class="smllogo-white"><img src="{{ ('assets/images/brand/logo.png') }}" width="120" alt="img"/></span>
                        <a href="tel:245-6325-3256" class="callusbtn"><i class="icon icon-phone" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Mobile Header -->

            <!--Horizontal-main -->
            <div class="horizontal-main header-style1 bg-dark-transparent clearfix p-0 pt-4">
                <div class="horizontal-mainwrapper container clearfix">
                    <div class="desktoplogo">
                        <a href="#"><img src="{{ asset('assets/images/brand/logo1.png') }}" alt="img">
                            <img src="{{ asset('assets/images/brand/logo.png') }}" class="header-brand-img header-white" alt="logo">
                        </a>
                    </div>
                    <div class="desktoplogo-1">
                        <a href="#"><img src="{{ asset('assets/images/brand/logo.png') }}" alt="img"></a>
                    </div>
                    <nav class="horizontalMenu clearfix d-md-flex">
                        <ul class="horizontalMenu-list">
                            <li aria-haspopup="true"><a href="#">Home</a></li>
                            <li aria-haspopup="true"><a href="#">About Us </a></li>
                            <li aria-haspopup="true"><a href="#">Courses</a></li>
                            <li aria-haspopup="true"><a href="#">Institutes</a></li>
                            <li aria-haspopup="true"><a href="#">How it works</a></li>
                            <li aria-haspopup="true"><a href="#"> Contact Us</a></li>
                            <li aria-haspopup="true" class="p-0 mt-1">
                                <span><a class="btn btn-primary" href="course-posts.html">Register Now</a></span>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div><!--/Horizontal-main -->

        <!--Section-->
        <section class="sptb-2 sptb-tab header-banner">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 d-block mx-auto">
                            <div class="text-white mb-7 text-center">
                                <h1 class="font-weight-semibold fs-40">Find The Best Trainers and Build Your Future</h1>
                                <p class="fs-18">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration <br> in some form, by injected humour, or randomised words</p>
                            </div>
                            <div class="search-background bg-transparent typewrite-text">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 d-block mx-auto">
                                        <form action="{{ route('search') }}" class="form row g-0 ">
                                            @include('layouts._form')
                                        </form>
                                            {{-- <div class="form-group col-xl-2 col-lg-2 col-md-12 select2-lg br-ts-7 br-bs-7 mb-0 bg-white">
                                                <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Select Destination">
                                                    <optgroup label="Destination">
                                                        <option value="united_kingdom">United Kingdom </option>
                                                        <option value="new_zealand">New Zealand </option>
                                                        <option value="united_state_of_america">United State of America </option>
                                                        <option value="europe">Europe</option>
                                                        <option value="australia">Australia </option>
                                                        <option value="malaysia">Malaysia </option>
                                                        <option value="china">China </option>
                                                        <option value="germany">Germany </option>
                                                        <option value="canada">Canada </option>
                                                        <option value="ireland">Ireland </option>
                                                        <option value="france">France </option>
                                                        <option value="hungary">Hungary </option>
                                                        <option value="cyprus">Cyprus </option>
                                                        <option value="united_arab_emirates">United Arab Emirates </option>
                                                        <option value="grenada">Grenada </option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="form-group col-xl-2 col-lg-2 col-md-12 select2-lg mb-0 bg-white">
                                                <select class="form-control select2-show-search border-bottom-0" data-placeholder="Programme Level">
                                                    <optgroup label="Categories">
                                                        <option>Programme Level</option>
                                                        <option value="a_level">A Level</option>
                                                        <option value="english_language_preparation">English Language Preparation</option>
                                                        <option value="foundation">Foundation</option>
                                                        <option value="high_school">High School</option>
                                                        <option value="international_year_one">International year one</option>
                                                        <option value="postgraduate">Postgraduate</option>
                                                        <option value="postgraduate_research">Postgraduate Research</option>
                                                        <option value="pre-dba">Pre-DBA</option>
                                                        <option value="pre-masters">Pre-Masters</option>
                                                        <option value="undergraduate">Undergraduate</option>
                                                        <option value="certificate">Certificate</option>
                                                        <option value="diploma">Diploma</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="form-group col-xl-2 col-lg-2 col-md-12 select2-lg mb-0 bg-white">
                                                <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Select Category">
                                                    <optgroup label="Categories">
                                                        <option value="accounting">Accounting</option>
                                                        <option value="art_and_design">Art and Design</option>
                                                        <option value="business">Business</option>
                                                        <option value="computing_and_it">Computing and IT</option>
                                                        <option value="economics">Economics</option>
                                                        <option value="engineering">Engineering</option>
                                                        <option value="english_language">English Language</option>
                                                        <option value="exam_preparation_english_course">Exam Preparation English Course</option>
                                                        <option value="humanities-and-social-science">Humanities and Social Science</option>
                                                        <option value="law">Law</option>
                                                        <option value="life-science">Life Science</option>
                                                        <option value="management">Management</option>
                                                        <option value="marketing">Marketing</option>
                                                        <option value="mathematics-and-statistics">Mathematics and Statistics</option>
                                                        <option value="media">Media</option>
                                                        <option value="medical">Medical</option>
                                                        <option value="other-courses">Other Courses</option>
                                                        <option value="science">Science</option>
                                                        <option value="senior-secondary-high-school">Senior Secondary High School</option>
                                                        <option value="social-science">Social Science</option>
                                                        <option value="education">Education</option>
                                                        <option value="cultural-studies">Cultural Studies</option>
                                                        <option value="sports-and-nutrition">Sports and Nutrition</option>
                                                        <option value="applied-science">Applied Science</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="form-group  col-xl-3 col-lg-3 col-md-12 mb-0">
                                                <input type="text" class="form-control input-xl br-0" placeholder="Search Courses...." data-min-length="1" list="courses" name="courses">
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-md-12 mb-0">
                                                <a href="javascript:void(0)" class="btn btn-xl btn-block btn-primary br-ts-md-0 br-bs-md-0"><i class="fe fe-search"></i> Search</a>
                                            </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /header-text -->
        </section><!--/Section-->
    </div>
@else
		<!--Topbar-->
		<div class="header-main">
			<div class="top-bar top-bar-light">
				<div class="container">
					<div class="row">
						<div class="col-xl-8 col-lg-8 col-sm-4 col-12">
							<div class="top-bar-start d-flex">
								<div class="clearfix">
									<ul class="socials">
										<li>
											<a class="social-icon text-dark" href="javascript:void(0)"><i class="fe fe-facebook"></i></a>
										</li>
										<li>
											<a class="social-icon text-dark" href="javascript:void(0)"><i class="fe fe-twitter"></i></a>
										</li>
										<li>
											<a class="social-icon text-dark" href="javascript:void(0)"><i class="fe fe-linkedin"></i></a>
										</li>
										<li>
											<a class="social-icon text-dark" href="javascript:void(0)"><i class="fe fe-instagram"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-sm-8 col-12">
							<div class="top-bar-end">
								<ul class="custom">
									<li>
										<a href="{{ url('register') }}" class="text-dark"><i class="fa fa-user me-1"></i> <span>Register1</span></a>
									</li>
									<li>

										<a href="{{ url('login') }}" class="text-dark"><i class="fe fe-log-in me-1"></i> <span>Login</span></a>
									</li>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div><!--/Topbar-->

			<!--Section-->
			<div class="cover-image bg-background-1" data-bs-image-src="../../assets/images/banners/banner1.jpg">

				<!--Topbar-->
				<div class="header-main">
					<!-- Mobile Header -->
					<div class="sticky">
						<div class="horizontal-header clearfix ">
							<div class="container">
								<a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
								<span class="smllogo"><img src="../../assets/images/brand/logo1.png" width="120" alt="img"/></span>
								<span class="smllogo-white"><img src="../../assets/images/brand/logo.png" width="120" alt="img"/></span>
								<a href="tel:245-6325-3256" class="callusbtn"><i class="icon icon-phone" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<!-- /Mobile Header -->

					<!--Horizontal-main -->
					<div class="horizontal-main header-style1 bg-dark-transparent clearfix p-0 pt-0 border-bottom border-white-transparent">
						<div class="horizontal-mainwrapper container clearfix">
							<div class="desktoplogo">
								<a href="{{ route('main') }}">
									<img src="{{ asset('assets/images/brand/logo1.png') }}" alt="img">
									<img src="{{ asset('assets/images/brand/logo1.png') }}" class="header-brand-img header-white" alt="logo">
								</a>
							</div>
							<div class="desktoplogo-1">
								<a href="{{ route('main') }}"><img src="{{ asset('assets/images/brand/logo.png') }}" alt="img"></a>
							</div>
							{{-- <nav class="horizontalMenu clearfix d-md-flex">
								<ul class="horizontalMenu-list">
									<li aria-haspopup="true"><a href="javascript:void(0)">Home <span class="fe fe-chevron-down"></span></a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="index.html">Home Default</a></li>
											<li aria-haspopup="true"><a href="index-text-animation.html">Home Text Animation</a></li>
											<li aria-haspopup="true"><a href="index-slides.html">Home Slides</a></li>
											<li aria-haspopup="true"><a href="index-video.html">Home Video</a></li>
											<li aria-haspopup="true"><a href="index-background-animation.html">Home Background Animation</a></li>
											<li aria-haspopup="true"><a href="index-intro-page.html">Home Intro Page</a></li>
											<li aria-haspopup="true"><a href="index-popup-login.html">Home Pop-up login</a></li>
											<li aria-haspopup="true"><a href="index-banner.html">Home Banner</a></li>
										</ul>
									</li>
									<li aria-haspopup="true"><a href="about.html">About Us </a></li>
									<li aria-haspopup="true"><a href="widgets.html">Widgets</a></li>
									<li aria-haspopup="true"><a href="javascript:void(0)">Pages <span class="fe fe-chevron-down"></span></a>
										<div class="horizontal-megamenu clearfix">
											<div class="container">
												<div class="megamenu-content">
													<div class="row">
														<ul class="col link-list">
															<li class="title">Other pages</li>
															<li><a href="page-list.html">Page List</a></li>
															<li><a href="page-list-right.html">Page List Right</a></li>
															<li><a href="categories.html">Categories</a></li>
															<li><a href="inovice.html">Invoice</a></li>
															<li><a href="usersall.html">User Lists</a></li>
															<li><a href="typography.html">Typography</a></li>
														    <li><a href="pricing.html">Pricing</a></li>
														</ul>
														<ul class="col link-list">
															<li class="title">Other pages</li>
															<li><a href="course-list.html">Course Listing</a></li>
															<li><a href="course-list-right.html">Course Listing Right</a></li>
															<li><a href="course-details.html">Course Details</a></li>
															<li><a href="course-details-right.html">Course Details Right</a></li>
															<li><a href="course-posts.html">Course Posts</a></li>
															<li><a href="edit-posts.html">Edit Posts</a></li>
															<li><a href="course-posts2.html">Course Posts2</a></li>
															<li><a href="edit-posts2.html">Edit Posts2</a></li>
														</ul>
														<ul class="col link-list">
															<li class="title">User pages</li>
															<li><a href="userprofile.html"> User Profile</a></li>
															<li aria-haspopup="true"><a href="profile.html">User Profile 1</a></li>
															<li><a href="mydash.html">My Dashboard</a></li>
															<li><a href="mycourses.html">My Courses</a></li>
															<li><a href="myfavorite.html">Favorite Courses</a></li>
															<li><a href="manged.html">Manged Courses</a></li>
															<li><a href="payments.html">Payments</a></li>
															<li><a href="orders.html"> Orders</a></li>
														</ul>
														<ul class="col link-list">
															<li class="title">Other Pages</li>
															<li><a href="settings.html"> Settings</a></li>
															<li><a href="page-details.html">Course Details</a></li>
															<li><a href="page-details1.html">Course Details 1</a></li>
															<li><a href="page-details-right.html">Course Details Right</a></li>
															<li><a href="testimonial.html">Testimonials</a></li>
															<li><a href="faq.html">Faq</a></li>
														</ul>
														<ul class="col link-list">
															<li class="title">Headers & Footers</li>
															<li><a href="header-style1.html">Header Style 01</a></li>
															<li><a href="header-style2.html">Header Style 02</a></li>
															<li><a href="header-style3.html">Header Style 03</a></li>
															<li><a href="header-style4.html">Header Style 04</a></li>
															<li><a href="footer-style.html">Footer Style 01</a></li>
															<li><a href="footer-style2.html">Footer Style 02</a></li>
															<li><a href="footer-style3.html">Footer Style 03</a></li>
															<li><a href="footer-style4.html">Footer Style 04</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li aria-haspopup="true"><a href="javascript:void(0)">Blog <span class="fe fe-chevron-down m-0"></span></a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="javascript:void(0)">Blog Grid <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
												 <ul class="sub-menu">
													<li aria-haspopup="true"><a href="blog-grid.html">Blog Grid Left</a></li>
													<li aria-haspopup="true"><a href="blog-grid-right.html">Blog Grid Right</a></li>
													<li aria-haspopup="true"><a href="blog-grid-center.html">Blog Grid Center</a></li>
												</ul>
											</li>
											<li aria-haspopup="true"><a href="javascript:void(0)">Blog List <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
												 <ul class="sub-menu">
													<li aria-haspopup="true"><a href="blog-list.html">Blog List Left</a></li>
													<li aria-haspopup="true"><a href="blog-list-right.html">Blog List Right</a></li>
													<li aria-haspopup="true"><a href="blog-list-center.html">Blog List Center</a></li>
												</ul>
											</li>
											<li aria-haspopup="true"><a href="javascript:void(0)">Blog Details <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
												<ul class="sub-menu">
													<li aria-haspopup="true"><a href="blog-details.html">Blog Details Left</a></li>
													<li aria-haspopup="true"><a href="blog-details-right.html">Blog Details Right</a></li>
													<li aria-haspopup="true"><a href="blog-details-center.html">Blog Details Center</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li aria-haspopup="true"><a href="javascript:void(0)">Custom Pages <span class="fe fe-chevron-down m-0"></span></a>
										<ul class="sub-menu">
											<li><a href="register.html">Register</a></li>
											<li><a href="login.html">Login</a></li>
											<li><a href="login-2.html">Login 02</a></li>
											<li><a href="forgot.html">Forgot Password</a></li>
											<li><a href="lockscreen.html">Lock Screen</a></li>
											<li><a href="underconstruction.html">Under Constructions</a></li>
											<li><a href="404.html">404</a></li>
											<li aria-haspopup="true"><a href="javascript:void(0)">Submenu<i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
												<ul class="sub-menu">
													<li aria-haspopup="true"><a href="javascript:void(0)">Level-01</a></li>
													<li aria-haspopup="true"><a href="javascript:void(0)">Level-02<i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
														<ul class="sub-menu">
															<li aria-haspopup="true"><a href="javascript:void(0)">Level-11</a></li>
															<li aria-haspopup="true"><a href="javascript:void(0)">Level-12</a></li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li aria-haspopup="true"><a href="contact.html"> Contact Us</a></li>
									<li aria-haspopup="true" class="p-0 mt-1">
										<span><a class="btn btn-secondary" href="course-posts.html">Register Now</a></span>
									</li>
								</ul>
							</nav> --}}
                            <nav class="horizontalMenu clearfix d-md-flex">
                                <ul class="horizontalMenu-list">
                                    <li aria-haspopup="true"><a href="#">Home</a></li>
                                    <li aria-haspopup="true"><a href="#">About Us </a></li>
                                    <li aria-haspopup="true"><a href="#">Courses</a></li>
                                    <li aria-haspopup="true"><a href="#">Institutes</a></li>
                                    <li aria-haspopup="true"><a href="#">How it works</a></li>
                                    <li aria-haspopup="true"><a href="#"> Contact Us</a></li>
                                </ul>
                            </nav>
						</div>
					</div>
				</div><!--/Horizontal-main -->

				<!--Section-->
				<div>
					<div class="sptb-1">
						<div class="header-text1 mb-0">
							<div class="container">
								<div class="row">
									<div class="col-xl-9 col-lg-12 col-md-12 d-block mx-auto">
										<div class="text-center text-white text-property">
											<h1 class=""><span class="font-weight-bold">2000+</span> Best  Courses Available Here!</h1>
										</div>
										<div class="search-background bg-transparent">
                                            <form action="{{ route('search') }}" class="form row g-0 ">
                                                @include('layouts._form')
                                            </form>
										</div>
									</div>
								</div>
							</div>
						</div><!-- /header-text -->
					</div>
				</div><!--/Section-->
			</div>
		</div>
		<!--/Section-->
@endif

