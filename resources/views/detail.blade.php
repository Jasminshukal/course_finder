@extends('layouts.uni_theam')

@section('banner')
    @include('layouts.banner', ['location' => "sd"])
@endsection

@section('content')
		<!--Section-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-8 col-md-12">
						<!--Coursed Description-->
						<div class="card overflow-hidden">
							<div class="ribbon ribbon-top-right text-danger"><span class="bg-danger">Best Seller</span>
							</div>
							<div class="card-body pb-0">
								<a href="javascript:void(0)" class="text-dark"><h2 class="font-weight-semibold mb-0">{{ $course->name }}</h2></a>
								<p class="lead-1">{{ $course->laval }}</p>
								<div class="product-slider">
									<ul class="list-unstyled video-list-thumbs">
										<li class="mb-0">
											<a class="class-video p-0">
												<img src="https://via.placeholder.com/1200x676.png/0011bb?text={{$course->name}}" alt="img" class="img-responsive  border br-7">
											</a>
										</li>
									</ul>
								</div>
								<div class="item-card-text-bottom">
									<h4 class="mb-0">{{ $course->currency_sym }}{{ $course->fee }},000</h4>
								 </div>
							</div>
							<div class="row details-1">
								{{-- <div class="col-xl-4 col-lg-4 col-md-4 ">
									<div class="card mb-0 border-0 shadow-none">
										<div class="card-body d-flex pb-0 pb-md-5">
											<img src="../../assets/images/users/female/20.jpg" class="brround d-none d-md-flex avatar-md me-3" alt="user">
											<div>
												<span class="icons fs-16 font-weight-semibold text-dark">Instructor</span>
												<a href="javascript:void(0)" class="icons h4 font-weight-semibold text-dark"><span class=" d-block">Jacob Smith</span></a>
											</div>
										</div>
									</div>
								</div> --}}
								<div class="col-xl-4 col-lg-4 col-md-4">
									<div class="card mb-0 border-0 shadow-none">
										<div class="card-body pb-0 pb-md-5">
											<div>
												<span class="icons fs-16 font-weight-semibold text-dark">Category</span>
												<a href="javascript:void(0)" class="icons h4 font-weight-semibold text-dark"><span class=" d-block">Development</span></a>
											</div>
										</div>
									</div>
								</div>
								{{-- <div class="col-xl-4 col-lg-4 col-md-4">
									<div class="card mb-0 border-0 shadow-none">
										<div class="card-body">
											<span href="javascript:void(0)" class="icons font-weight-semibold fs-16 text-dark">Reviews</span>
											<span class="d-block">
												<p class="mb-0">
													<span class="fs-14 ">
														<i class="fa fa-star text-yellow me-0"></i>
														<i class="fa fa-star text-yellow me-0"></i>
														<i class="fa fa-star text-yellow me-0"></i>
														<i class="fa fa-star text-yellow me-0"></i>
														<i class="fa fa-star-o text-yellow me-2"></i>
														<a href="javascript:void(0)" class="icons h4 font-weight-semibold text-dark"><span class=""> 4.0</span></a>
													</span>
												</p>
											</span>
										</div>
									</div>
								</div> --}}
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Detail</h3>
							</div>
							<div class="card-body">
								<div class="mb-4 description">
									{!! $course->overview !!}
								</div>
								<h4 class="mb-4 font-weight-bold">Specifications</h4>
								<div class="row">
									<div class="col-xl-6 col-md-12">
										<ul class="list-unstyled widget-spec-1">
											<li class="text-default-dark"><i class="text-default fe fe-star"></i><span>Free Demo</span></li>
											<li class="text-default-dark"><i class="text-default fe fe-user"></i><span>100% job Assistance</span></li>
											<li class="text-default-dark"><i class="text-default fe fe-alert-circle"></i><span> Flexible Timing</span></li>
											<li class="text-default-dark"><i class="text-default fe fe-file"></i><span>  Realtime Project Work</span></li>
											<li class="text-default-dark"><i class="text-default fe fe-users"></i><span> Learn From Experts</span></li>
											<li class="text-default-dark mb-2 mb-md-0"><i class="text-default fe fe-award"></i><span> Get Certified</span></li>
										</ul>
									</div>
									<div class="col-xl-6 col-md-12">
										<ul class="list-unstyled widget-spec-1">
											<li class="text-default-dark"><i class="text-default fe fe-heart"></i><span> Place your career</span></li>
											<li class="text-default-dark"><i class="text-default fe fe-dollar-sign"></i><span> Reasonable fees</span></li>
											<li class="text-default-dark"><i class="text-default fe fe-airplay"></i><span> Access on mobile and Tv</span></li>
											<li class="text-default-dark"><i class="text-default fe fe-monitor"></i><span> High-quality content and Class videos</span></li>
											<li class="text-default-dark"><i class="text-default fe fe-aperture"></i><span>Learning Management System</span></li>
											<li class="text-default-dark"><i class="text-default fe fe-credit-card"></i><span> Full lifetime access</span></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!--/Coursed Description-->

						<div class="card mb-lg-0">
							<div class="card-header">
								<h3 class="card-title">Leave a reply</h3>
							</div>
							<div class="card-body">
								<div>
									<div class="form-group">
										<input type="text" class="form-control" id="name1" placeholder="Your Name">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" id="email" placeholder="Email Course address">
									</div>
									<div class="form-group">
										<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Comment"></textarea>
									</div>
									<a href="javascript:void(0)" class="btn btn-primary">Send Reply</a>
								</div>
							</div>
						</div>
					</div>

					<!--Right Side Content-->
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">University Detail</h3>
							</div>
							<div class="card-body  item-user">
								<div class="profile-pic mb-0">
									<img src="{{ $course->University->image }}" class="brround avatar-xxl" alt="user">
									<div >
										<a href="userprofile.html" class="text-dark"><h4 class="mt-3 mb-1 font-weight-bold">{{ $course->University->name }} </h4></a>
										<span class="lead fs-16">Member Since November 2008</span>
										<div class=" item-user-icons mt-3">
											<a href="javascript:void(0)" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>
											<a href="javascript:void(0)" class="twitter-bg"><i class="fa fa-twitter"></i></a>
											<a href="javascript:void(0)" class="google-bg"><i class="fa fa-google"></i></a>
											<a href="javascript:void(0)" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body item-user">
								<div>
                                    <h5 class="mb-3">Address :</h5>
									<h6 class="mb-3"> {{ $course->University->address }}</h6>
								</div>
							</div>
							<div class="card-footer">
								<div class="text-start">
									{{-- <a href="javascript:void(0)" class="btn  btn-primary mb-2 mb-xl-0"><i class="fa fa-envelope"></i> Chat</a>
									<a href="javascript:void(0)" class="btn btn-secondary mb-2 mb-xl-0" data-bs-toggle="modal" data-bs-target="#contact"><i class="fa fa-user"></i> Contact Me</a>
									<a href="javascript:void(0)" class="btn  btn-danger mb-2 mb-xl-0"><i class="fa fa-share"></i> Share</a> --}}
								</div>
							</div>
						</div>
						{{-- <div class="card">
							<div class="card-header">
								<h3 class="card-title">Popular Classes</h3>
							</div>
							<div class="card-body">
								<div class="product-tags clearfix">
									<ul class="list-unstyled mb-0">
										<li><a href="javascript:void(0)">Web Designing</a></li>
										<li><a href="javascript:void(0)">Unix Classes</a></li>
										<li><a href="javascript:void(0)">Networking</a></li>
										<li><a href="javascript:void(0)">Python Classes</a></li>
										<li><a href="javascript:void(0)">Data Science</a></li>
										<li><a href="javascript:void(0)">.Net</a></li>
										<li><a href="javascript:void(0)">Digital Marketing</a></li>
										<li><a href="javascript:void(0)">Java</a></li>
										<li><a href="javascript:void(0)">SQL</a></li>
										<li><a href="javascript:void(0)">Photoshop</a></li>
										<li><a href="javascript:void(0)" class="mb-0">Autocad</a></li>
									</ul>
								</div>
							</div>
						</div> --}}
					</div>
					<!--Right Side Content-->
				</div>
			</div>
		</section>
        <!--/Section-->
@endsection
