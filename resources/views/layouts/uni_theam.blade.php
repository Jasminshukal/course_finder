<!doctype html>
<html lang="en">
<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content=" Edomi - Online Education & Learning Courses HTML CSS Responsive Template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="html , html dir ,  website template, bootstrap 5  template,  bootstrap template, admin panel template , admin panel , html5 , academy training course css template, classes online training website templates, courses training html5 template design, education training rwd simple template, educational learning management jquery html, elearning bootstrap education template, professional training center bootstrap html, institute coaching mobile responsive template, marketplace html template premium, learning management system jquery html, clean online course teaching directory template, online learning course management system, online course website template css html, premium lms training web template, training course responsive website"/>

		<!-- Favicon -->
		<link rel="icon" href="{{ asset('assets/images/brand/favicon.ico') }}" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.ico') }}" />

		<!-- Title -->
		<title> {{ env('APP_NAME'), 'Uni student' }} </title>

		<!-- Bootstrap css -->
		<link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />

		<!-- Style css -->
		<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

		<!-- Font-awesome  css -->
		<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet"/>

		<!--Select2 css -->
		<link href="{{ asset('assets/plugins/select2/select2.css') }}" rel="stylesheet" />

		<!-- Cookie css -->
		<link href="{{ asset('assets/plugins/cookie/cookie.css') }}" rel="stylesheet">

		<!-- Owl Theme css-->
		<link href="{{ asset('assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />

		<!--Jquery flexdatalist  css -->
		<link href="{{ asset('assets/plugins/jquery.flexdatalist/jquery.flexdatalist.css') }}" rel="stylesheet">

		<!-- Switcher css -->
		<link  href="{{ asset('assets/switcher/css/switcher.css') }}" rel="stylesheet" id="switcher-css" type="text/css" media="all"/>

		<!-- Color Skin css -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/color-skins/color.css') }}" />

	</head>

	<body>

		<!--Loader-->
		<div id="global-loader">
			<img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="img">
		</div><!--/Loader-->



        <!--Section-->

        <!--/Section-->
        @yield('banner')
        {{-- @include('layouts.banner', ['location' => "home"]) --}}

        @yield('content')


		<!--Footer Section-->
		<footer class="bg-dark">
			<div class="footer-main footer-main1">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="row">
								<div class="col-lg-7 col-md-12">
									<img src="{{ asset('assets/images/brand/logo-white.png') }}" class="w-auto border-0" alt="img">
									<ul class="list-unstyled mb-0 mt-4">
										<li>
											<a href="javascript:void(0)">Second stret, New York, NY 10012, US</a>
										</li>
										<li>
											<a href="javascript:void(0)">info@example.com, info@edomi.com</a></li>
										<li>
											<a href="javascript:void(0)">+ 01 234 567 88</a>
										</li>
										 <li>
											<a href="javascript:void(0)">+ 01 234 567 89</a>
										</li>
									</ul>
									<ul class="list-unstyled list-inline mt-5 mb-lg-0 mb-5">
										<li class="list-inline-item">
											<a class="social-icons btn-sm rgba-white-slight waves-effect waves-light">
												<i class="fa fa-facebook"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a class="social-icons btn-sm rgba-white-slight waves-effect waves-light">
												<i class="fa fa-twitter"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a class="social-icons btn-sm rgba-white-slight waves-effect waves-light">
												<i class="fa fa-google-plus"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a class="social-icons btn-sm rgba-white-slight waves-effect waves-light">
												<i class="fa fa-linkedin"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a class="social-icons btn-sm rgba-white-slight waves-effect waves-light">
												<i class="fa fa-github"></i>
											</a>
										</li>
									</ul>
								</div>
								<div class="col-lg-5 col-md-12">
									<h6 class="font-weight-normal text-white">Categories</h6>
									<ul class="list-unstyled mb-5 mb-lg-0">
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Software Development</a></li>
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Web Development</a></li>
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Web Designing</a></li>
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Business Classes</a></li>
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Animation Classes</a></li>
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Networking Classes</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="row">
								<div class="col-lg-4 col-md-12">
									<h6 class="font-weight-normal text-white">Courses</h6>
									<ul class="list-unstyled mb-5 mb-lg-0">
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Angular</a></li>
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Java</a></li>
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> HTML</a></li>
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Devops</a></li>
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Php Laravel</a></li>
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Digital Marketing</a></li>
									</ul>
								</div>
								<div class="col-lg-4 col-md-12">
									<h6 class="font-weight-normal text-white">Our Company</h6>
									<ul class="list-unstyled mb-lg-0 mb-5">
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Our Team</a></li>
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Contact US</a></li>
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> About Us</a></li>
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Services</a></li>
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Blog News</a></li>
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Online Classes</a></li>
									</ul>
								</div>
								<div class="col-lg-4 col-md-12">
									<h6 class="font-weight-normal text-white">Support</h6>
									<ul class="list-unstyled mb-5 mb-lg-0">
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Home</a></li>
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Sitemap</a></li>
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Privacy Policy</a></li>
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Cooky Policy</a></li>
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Web User Plocy</a></li>
										<li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Terms and Services</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="py-3 bg-dark">
				<div class="container">
					<div class="row d-flex">
						<div class="col-lg-12 col-sm-12  mt-2 mb-2 text-center text-white">
							Copyright © 2021 <a href="https://www.anantsoftcomputing.com/" target="_blank"  class="fs-14 text-primary">Anantsoft Computing</a>. All rights reserved.
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--Footer Section-->

		<!-- Video Modal -->
		<div class="modal fade" id="homeVideo" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i></button>
					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/watch?v=0qHWub21h5c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
		<!-- /Video Modal -->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-long-arrow-up"></i></a>

		<!-- JQuery js-->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>

		<!-- Bootstrap js -->
		<script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

		<!--JQuery IT Coursesrkline js-->
		<script src="{{ asset('assets/js/jquery.sparkline.min.js') }}"></script>

		<!-- Circle Progress js-->
		<script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>

		<!-- Star Rating js-->
		<script src="{{ asset('assets/plugins/jquery-bar-rating/jquery.barrating.js') }}"></script>
		<script src="{{ asset('assets/plugins/jquery-bar-rating/js/rating.js') }}"></script>

		<!--Owl Carousel js -->
		<script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script>

		<!--Horizontal Menu js-->
		<script src="{{ asset('assets/plugins/horizontal-menu/horizontal-menu.js') }}"></script>

		<!--Counters -->
		<script src="{{ asset('assets/plugins/counters/counterup.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/counters/waypoints.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/counters/numeric-counter.js') }}"></script>

		<!--JQuery TouchSwipe js-->
		<script src="{{ asset('assets/js/jquery.touchSwipe.min.js') }}"></script>

		<!--Select2 js -->
		<script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
		<script src="{{ asset('assets/js/select2.js') }}"></script>

		<!-- Cookie js -->
		<script src="{{ asset('assets/plugins/cookie/jquery.ihavecookies.js') }}"></script>
		<script src="{{ asset('assets/plugins/cookie/cookie.js') }}"></script>

		<!-- Internal :::   Jquery flexdatalist js -->
		<script src="{{ asset('assets/plugins/jquery.flexdatalist/jquery.flexdatalist.js') }}"></script>
		<script src="{{ asset('assets/plugins/jquery.flexdatalist/data-list.js') }}"></script>

		<!-- sticky js-->
		<script src="{{ asset('assets/js/sticky.js') }}"></script>

		<!-- Switcher js -->
		<script src="{{ asset('assets/switcher/js/switcher.js') }}"></script>

		<!-- Scripts js-->
		<script src="{{ asset('assets/js/owl-carousel.js') }}"></script>

		<!-- Typewritter js-->
		<script src="{{ asset('assets/js/typewritter.js') }}"></script>

		<!-- Custom js-->
		<script src="{{ asset('assets/js/custom.js') }}"></script>

	</body>
</html>
