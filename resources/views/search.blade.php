@extends('layouts.uni_theam')

@section('banner')
    @include('layouts.banner', ['location' => "sd"])
@endsection

@section('content')
		<!--Section-->
		<div class="position-relative">
            <div class="shape overflow-hidden bottom-footer-shape">
                <svg viewBox="0 0 2880 48" fill="none" xmsns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="#f5f4f9"></path>
                </svg>
            </div>
        </div>
		<!--/Section-->

		<!--Section-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-xl-9 col-lg-8 col-md-12">
						<!--Coursed lists-->
						<div class=" mb-lg-0">
							<div class="">
								<div class="item2-gl">
									<div class="mb-0">
										<div class="">
											<div class="p-5 bg-white item2-gl-nav d-flex">
												<div class="d-block">
													<h5 class="mb-0 mt-0">Showing 1 to 10 of 30 entries</h5>
													<label class="me-2 mt-3 mb-sm-1">Sort By:</label>
													<select name="item" class="form-control select2 w-70">
														<option value="1">Latest</option>
														<option value="2">Oldest</option>
														<option value="3">Fees:Low-to-High</option>
														<option value="5">Fees:Hight-to-Low</option>
													</select>
												</div>
												<ul class="nav item2-gl-menu ms-auto">
													<li class="border-end"><a href="#tab-11" class="active show" data-bs-toggle="tab" title="List style"><i class="fa fa-list"></i></a></li>
													<li><a href="#tab-12" data-bs-toggle="tab" class=" " title="Grid"><i class="fa fa-th"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="tab-content item-list2">
										<div class="tab-pane active" id="tab-11">
											<div class="card overflow-hidden">
												<div class="d-md-flex">
													<div class="item-card9-img">
														<div class="item-card9-imgs">
															<a href="page-details.html"></a>
															<img src="../../assets/images/media/Categories/2.jpg" alt="img" class="cover-image">
														</div>
														<div class="item-overly-trans">
														<a href="page-details.html" class="bg-primary">Popular</a>
														</div>
													</div>
													<div class="card border-0 mb-0">
														<div class="card-body p-0">
															<div class="item-card9 ps-5 pt-5">
																<a href="page-details.html" class="text-default-dark"><h3 class="">Business Management Classes</h3></a>
																<p class="mb-0 mt-1 lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
																 <div class="mt-2 mb-2">
																	<ul class="icon-card-1">
																		<li class="me-3"><span class="fs-14"><i class="fa fa-briefcase me-1"></i> Business</span></li>
																		<li class="me-3"><span class="fs-14"><i class="fa fa-user me-1"></i> Stephanie</span></li>
																		<li class="me-3"><span class="fs-14"><i class="fa fa-clock-o me-1"></i>37 Lectures</span></li>
																		<li class="me-3"><span class="fs-14"><i class="fa fa-users me-1"></i>45,000 students</span></li>
																	</ul>
																</div>
																<div>
																	<div class="rating-stars d-flex">
																		<h4 class="font-weight-semibold me-2">4.2</h4>
																		<div class="star-ratings start-ratings-main clearfix me-3">
																			<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
																				<div class="br-wrapper br-theme-fontawesome-stars">
																					<select class="example-fontawesome" name="rating" autocomplete="off" style="display: none;">
																						<option value="1">1</option>
																						<option value="2">2</option>
																						<option value="3">3</option>
																						<option value="4" selected="">4</option>
																						<option value="5">5</option>
																					</select>
																				</div>
																			</div>
																		</div>(4,24,525)
																	</div>
																</div>
															</div>
															<div class="border-top ps-5 mt-2">
																<h4 class="font-weight-semibold fs-20 text-dark mt-4 mb-4"><i class="fe fe-tag mt-0 fs-18 me-2"></i>$263.99</h4>
																<div class="item-card9-icons2">
																	<a href="javascript:void(0)" class="item-card9-icons1" data-bs-toggle="tooltip" data-bs-original-title="Like"> <i class="fe fe-heart"></i></a>
																	<a href="javascript:void(0)" class="item-card9-icons1" data-bs-toggle="tooltip" data-bs-original-title="Share"> <i class="fe fe-share-2"></i></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card overflow-hidden">
												<div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Offer</span></div>
												<div class="d-md-flex">
													<div class="item-card9-img">
														<div class="item-card9-imgs">
															<a href="page-details.html"></a>
															<img src="../../assets/images/media/Categories/4.jpg" alt="img" class="cover-image">
														</div>
														<div class="item-overly-trans">
														<a href="page-details.html" class="bg-blue">High Rated</a>
														</div>
													</div>
													<div class="card mb-0 border-0">
														<div class="card-body p-0">
															<div class="item-card9 ps-5 pt-5">
																<a href="page-details.html" class="text-default-dark"><h3 class="">Networking Classes</h3></a>
																<p class="mb-0 leading-tight">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
															    <div class="mt-2 mb-2">
																	<ul class="icon-card-1">
																		<li class="me-3"><span class="fs-14"><i class="fa fa-cube me-1"></i> Networking</span></li>
																		<li class="me-3"><span class="fs-14"><i class="fa fa-user me-1"></i> Lauren</span></li>
																		<li class="me-3"><span class="fs-14"><i class="fa fa-clock-o me-1"></i>50 Lectures</span></li>
																		<li class="me-3"><span class="fs-14"><i class="fa fa-users me-1"></i>75,030 students</span></li>
																	</ul>
																</div>
																<div class="">
																	<div class="rating-stars d-flex">
																		<h4 class="font-weight-semibold me-2">5.0</h4>
																		<div class="star-ratings start-ratings-main clearfix me-3">
																			<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
																				<select class="example-fontawesome" name="rating" autocomplete="off">
																					<option value="1">1</option>
																					<option value="2">2</option>
																					<option value="3">3</option>
																					<option value="4" >4</option>
																					<option value="5" selected>5</option>
																				</select>
																			</div>
																		</div>(12,00,525)
																	</div>
																</div>
															</div>
															<div class="border-top ps-5 mt-2">
																<h4 class="font-weight-semibold fs-20 text-dark mt-4 mb-4"><i class="fe fe-tag mt-0 fs-18 me-2"></i>$745.00<span class="strike-text ms-2 text-default fs-16">$896.00</span></h4>
																<div class="item-card9-icons2">
																	<a href="javascript:void(0)" class="item-card9-icons1" data-bs-toggle="tooltip" data-bs-original-title="Like"> <i class="fe fe-heart"></i></a>
																	<a href="javascript:void(0)" class="item-card9-icons1" data-bs-toggle="tooltip" data-bs-original-title="Share"> <i class="fe fe-share-2"></i></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card overflow-hidden">
												<div class="d-md-flex">
													<div class="item-card9-img">
														<div class="item-card9-imgs">
															<a href="page-details.html"></a>
															<img src="../../assets/images/media/Categories/9.jpg" alt="img" class="cover-image">
														</div>
														<div class="item-card9-icons">
															<a href="javascript:void(0)" class="item-card9-icons1 bg-primary"> <i class="fa fa fa-heart-o"></i></a>
															<a href="javascript:void(0)" class="item-card9-icons1 bg-secondary"> <i class="fa fa fa-share-alt"></i></a>
														</div>
														<div class="item-overly-trans">
														<a href="page-details.html" class="bg-primary">Popular</a>
														</div>
													</div>
													<div class="card border-0 mb-0">
														<div class="card-body p-0">
															<div class="item-card9 ps-5 pt-5">
																<a href="page-details.html" class="text-default-dark"><h3 class="">Beautician Classes</h3></a>
																<p class="mb-0 leading-tight">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
																<div class="mt-2 mb-2">
																	<ul class="icon-card-1">
																		<li class="me-3"><span class="fs-14"><i class="fa fa-paint-brush me-1"></i> Beautician</span></li>
																		<li class="me-3"><span class="fs-14"><i class="fa fa-user me-1"></i> Kimberly</span></li>
																		<li class="me-3"><span class="fs-14"><i class="fa fa-clock-o me-1"></i>20 Lectures</span></li>
																		<li class="me-3"><span class="fs-14"><i class="fa fa-users me-1"></i>35,500 students</span></li>
																	</ul>
																</div>
																<div class="">
																	<div class="rating-stars d-flex">
																		<h4 class="font-weight-semibold me-2">4.3</h4>
																		<div class="star-ratings start-ratings-main clearfix me-3">
																			<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
																				<select class="example-fontawesome" name="rating" autocomplete="off">
																					<option value="1">1</option>
																					<option value="2">2</option>
																					<option value="3">3</option>
																					<option value="4" selected>4</option>
																					<option value="5">5</option>
																				</select>
																			</div>
																		</div>(67,525)
																	</div>
																</div>
															</div>
															<div class="border-top ps-5 mt-2">
																<h4 class="font-weight-semibold fs-20 text-dark mt-4 mb-4"><i class="fe fe-tag mt-0 fs-18 me-2"></i>$149.00</h4>
																<div class="item-card9-icons2">
																	<a href="javascript:void(0)" class="item-card9-icons1" data-bs-toggle="tooltip" data-bs-original-title="Like"> <i class="fe fe-heart"></i></a>
																	<a href="javascript:void(0)" class="item-card9-icons1" data-bs-toggle="tooltip" data-bs-original-title="Share"> <i class="fe fe-share-2"></i></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card overflow-hidden">
												<div class="d-md-flex">
													<div class="item-card9-img">
														<div class="item-card2-img ">
															<a href="page-details.html"></a>
															<img src="../../assets/images/media/Categories/10.jpg" alt="img" class="cover-image">
														</div>
														<div class="item-card9-icons">
															<a href="javascript:void(0)" class="item-card9-icons1 bg-primary"> <i class="fa fa fa-heart-o"></i></a>
															<a href="javascript:void(0)" class="item-card9-icons1 bg-secondary"> <i class="fa fa fa-share-alt"></i></a>
														</div>
													</div>
													<div class="card border-0 mb-0">
														<div class="card-body p-0">
															<div class="item-card2 ps-5 pt-5">
																<div class="item-card2-desc">
																	<a href="page-details.html" class="text-default-dark mt-2"><h3 class="mt-0">Guitar Classes</h3></a>
																	<p class="mb-0 leading-tight">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
																	<div class="mt-2 mb-2">
																		<ul class="icon-card-1">
																			<li class="me-3"><span class="fs-14"><i class="fa fa-music me-1"></i> Music</span></li>
																			<li class="me-3"><span class="fs-14"><i class="fa fa-user me-1"></i> Jennifer</span></li>
																			<li class="me-3"><span class="fs-14"><i class="fa fa-clock-o me-1"></i>15 Lectures</span></li>
																			<li class="me-3"><span class="fs-14"><i class="fa fa-users me-1"></i>60,000 students</span></li>
																			<li class="me-3"><span class="fs-14"><i class="fa fa-map-marker me-1"></i>Los Angles</span></li>
																		</ul>
																	</div>
																</div>
																<div class="">
																	<div class="rating-stars d-flex">
																		<h4 class="font-weight-semibold me-2">4.9</h4>
																		<div class="star-ratings start-ratings-main clearfix me-3">
																			<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
																				<select class="example-fontawesome" name="rating" autocomplete="off">
																					<option value="1">1</option>
																					<option value="2">2</option>
																					<option value="3">3</option>
																					<option value="4" selected>4</option>
																					<option value="5">5</option>
																				</select>
																			</div>
																		</div>(99,525)
																	</div>
																</div>
															</div>
														</div>
														<div class="border-top ps-5 mt-2">
															<h4 class="font-weight-semibold fs-20 text-dark mt-4 mb-4"><i class="fe fe-tag mt-0 fs-18 me-2"></i>$13.00</h4>
															<div class="item-card9-icons2">
																<a href="javascript:void(0)" class="item-card9-icons1" data-bs-toggle="tooltip" data-bs-original-title="Like"> <i class="fe fe-heart"></i></a>
																<a href="javascript:void(0)" class="item-card9-icons1" data-bs-toggle="tooltip" data-bs-original-title="Share"> <i class="fe fe-share-2"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card overflow-hidden">
												<div class="d-md-flex">
													<div class="item-card9-img">
														<div class="item-card2-img ">
															<a href="page-details.html"></a>
															<img src="../../assets/images/media/Categories/11.jpg" alt="img" class="cover-image">
														</div>
														<div class="item-card9-icons">
															<a href="javascript:void(0)" class="item-card9-icons1 bg-primary"> <i class="fa fa fa-heart-o"></i></a>
															<a href="javascript:void(0)" class="item-card9-icons1 bg-secondary"> <i class="fa fa fa-share-alt"></i></a>
														</div>
														<div class="item-overly-trans">
														<a href="page-details.html" class="bg-blue">Popular</a>
														</div>
													</div>
													<div class="card border-0 mb-0">
														<div class="card-body p-0">
															<div class="item-card2 pt-5 ps-5">
																<div class="item-card2-desc">
																	<a href="page-details.html" class="text-default-dark mt-2"><h3 class="mt-0">Photoshop Designing Classes</h3></a>
																	<p class="mb-0 leading-tight">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
																	<div class="mt-2 mb-2">
																		<ul class="icon-card-1">
																			<li class="me-3"><span class="fs-14"><i class="fa fa-camera me-1"></i> PhotoShop</span></li>
																			<li class="me-3"><span class="fs-14"><i class="fa fa-user me-1"></i> Bernadette</span></li>
																			<li class="me-3"><span class="fs-14"><i class="fa fa-clock-o me-1"></i>45 Lectures</span></li>
																			<li class="me-3"><span class="fs-14"><i class="fa fa-users me-1"></i>70,000 students</span></li>
																			<li class="me-3"><span class="fs-14"><i class="fa fa-map-marker me-1"></i>Los Angles</span></li>
																		</ul>
																	</div>
																</div>
																<div class="">
																	<div class="rating-stars d-flex">
																		<h4 class="font-weight-semibold me-2">5.0</h4>
																		<div class="star-ratings start-ratings-main clearfix me-3">
																			<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
																				<select class="example-fontawesome" name="rating" autocomplete="off">
																					<option value="1">1</option>
																					<option value="2">2</option>
																					<option value="3">3</option>
																					<option value="4" >4</option>
																					<option value="5" selected>5</option>
																				</select>
																			</div>
																		</div>(1,25,252)
																	</div>
																</div>
															</div>
															<div class="border-top ps-5 mt-2">
																<h4 class="font-weight-semibold fs-20 text-dark mt-4 mb-4"><i class="fe fe-tag mt-0 fs-18 me-2"></i>$42.00</h4>
																<div class="item-card9-icons2">
																	<a href="javascript:void(0)" class="item-card9-icons1" data-bs-toggle="tooltip" data-bs-original-title="Like"> <i class="fe fe-heart"></i></a>
																	<a href="javascript:void(0)" class="item-card9-icons1" data-bs-toggle="tooltip" data-bs-original-title="Share"> <i class="fe fe-share-2"></i></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card overflow-hidden">
												<div class="d-md-flex">
													<div class="item-card9-img">
														<div class="item-card2-img ">
															<a href="page-details.html"></a>
															<img src="../../assets/images/media/Categories/1.jpg" alt="img" class="cover-image">
														</div>
														<div class="item-card9-icons">
															<a href="javascript:void(0)" class="item-card9-icons1 bg-primary"> <i class="fa fa fa-heart-o"></i></a>
															<a href="javascript:void(0)" class="item-card9-icons1 bg-secondary"> <i class="fa fa fa-share-alt"></i></a>
														</div>
														<div class="item-overly-trans">
														<a href="page-details.html" class="bg-blue">Best Sales</a>
														</div>
													</div>
													<div class="card border-0 mb-0">
														<div class="card-body p-0">
															<div class="item-card2 pt-5 ps-5">
																<div class="item-card2-desc">
																	<a href="page-details.html" class="text-default-dark mt-2"><h3 class="mt-0">DataScience Classes</h3></a>
																	<p class="mb-0 leading-tight">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
																	<div class="mt-2 mb-2">
																		<ul class="icon-card-1">
																			<li class="me-3"><span class="fs-14"><i class="fa fa-flask me-1"></i> DataScience</span></li>
																			<li class="me-3"><span class="fs-14"><i class="fa fa-user me-1"></i> Alexandra</span></li>
																			<li class="me-3"><span class="fs-14"><i class="fa fa-clock-o me-1"></i>120 Lectures</span></li>
																			<li class="me-3"><span class="fs-14"><i class="fa fa-users me-1"></i>720 Students</span></li>
																			<li class="me-3"><span class="fs-14"><i class="fa fa-map-marker me-1"></i>SanFrancisco</span></li>
																		</ul>
																	</div>
																</div>
																<div class="">
																	<div class="rating-stars d-flex">
																		<h4 class="font-weight-semibold me-2">5.0</h4>
																		<div class="star-ratings start-ratings-main clearfix me-3">
																			<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
																				<select class="example-fontawesome" name="rating" autocomplete="off">
																					<option value="1">1</option>
																					<option value="2">2</option>
																					<option value="3">3</option>
																					<option value="4" >4</option>
																					<option value="5" selected>5</option>
																				</select>
																			</div>
																		</div>(1,25,252)
																	</div>
																</div>
															</div>
															<div class="border-top ps-5 mt-2">
																<h4 class="font-weight-semibold fs-20 text-dark mt-4 mb-4"><i class="fe fe-tag mt-0 fs-18 me-2"></i>$122.00</h4>
																<div class="item-card9-icons2">
																	<a href="javascript:void(0)" class="item-card9-icons1" data-bs-toggle="tooltip" data-bs-original-title="Like"> <i class="fe fe-heart"></i></a>
																	<a href="javascript:void(0)" class="item-card9-icons1" data-bs-toggle="tooltip" data-bs-original-title="Share"> <i class="fe fe-share-2"></i></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab-12">
											<div class="row">
												<div class="col-lg-6 col-md-12 col-xl-6">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="item-card9-imgs">
																<a href="page-details.html"></a>
																<img src="../../assets/images/media/Categories/2.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="javascript:void(0)" class="item-card9-icons1 bg-primary"> <i class="fa fa fa-heart-o"></i></a>
																<a href="javascript:void(0)" class="item-card9-icons1 bg-secondary"> <i class="fa fa fa-share-alt"></i></a>
															</div>
															<div class="item-overly-trans">
																<a href="page-details.html" class="bg-primary">Popular</a>
															</div>
														</div>
														<div class="card-body pb-0">
															<div class="item-card9">
																<span class="item-card-badge"><i class="fa fa-briefcase me-1"></i> Business</span>
																<a href="page-details.html" class="text-default-dark mt-2"><h3 class="mt-2 mb-2">Business Management</h3></a>
																<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
															</div>
															<div class="mt-2">
																<div class="rating-stars d-flex">
																	<h4 class="font-weight-semibold me-2">4.2</h4>
																	<div class="star-ratings start-ratings-main clearfix me-3">
																		<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
																			<select class="example-fontawesome" name="rating" autocomplete="off">
																				<option value="1">1</option>
																				<option value="2">2</option>
																				<option value="3">3</option>
																				<option value="4" selected>4</option>
																				<option value="5">5</option>
																			</select>
																		</div>
																	</div>(4,24,525)
																</div>
															</div>
														</div>
														<div class="border-top ps-5  mt-2">
															<h4 class="font-weight-semibold fs-20 text-dark mt-4 mb-4"><i class="fe fe-tag mt-0 fs-18 me-2"></i>$263.99</h4>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-6">
													<div class="card overflow-hidden">
														<div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Offer</span></div>
														<div class="item-card9-img">
															<div class="item-card9-imgs">
																<a href="page-details.html"></a>
																<img src="../../assets/images/media/Categories/4.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="javascript:void(0)" class="item-card9-icons1 bg-primary"> <i class="fa fa fa-heart-o"></i></a>
																<a href="javascript:void(0)" class="item-card9-icons1 bg-secondary"> <i class="fa fa fa-share-alt"></i></a>
															</div>
															<div class="item-overly-trans">
																<a href="page-details.html" class="bg-primary">High Rated</a>
															</div>
														</div>
														<div class="card-body pb-0">
															<div class="item-card9">
																<span class="item-card-badge"><i class="fa fa-cube me-1"></i> Networking</span>
																<a href="page-details.html" class="text-default-dark"><h3 class="mt-2 mb-2">Networking Classes</h3></a>
																<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
															</div>
															<div class="mt-2">
																<div class="rating-stars d-flex">
																	<h4 class="font-weight-semibold me-2">5.0</h4>
																	<div class="star-ratings start-ratings-main clearfix me-3">
																		<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
																			<select class="example-fontawesome" name="rating" autocomplete="off">
																				<option value="1">1</option>
																				<option value="2">2</option>
																				<option value="3">3</option>
																				<option value="4">4</option>
																				<option value="5" selected>5</option>
																			</select>
																		</div>
																	</div>(12,00,525)
																</div>
															</div>
														</div>
														<div class="border-top ps-5 mt-2">
															<h4 class="font-weight-semibold fs-20 text-dark mt-4 mb-4"><i class="fe fe-tag mt-0 fs-18 me-2"></i>$745.00<span class="strike-text ms-2 text-default fs-16">$896.00</span></h4>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-6">
													<div class="card overflow-hidden">
														<div class="ribbon ribbon-top-left text-primary"><span class="bg-danger">Offer</span></div>
														<div class="item-card9-img">
															<div class="item-card9-imgs">
																<a href="page-details.html"></a>
																<img src="../../assets/images/media/Categories/9.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="javascript:void(0)" class="item-card9-icons1 bg-primary"> <i class="fa fa fa-heart-o"></i></a>
																<a href="javascript:void(0)" class="item-card9-icons1 bg-secondary"> <i class="fa fa fa-share-alt"></i></a>
															</div>
															<div class="item-overly-trans">
														       <a href="page-details.html" class="bg-blue">Popular</a>
														    </div>
														</div>
														<div class="card-body pb-0">
															<div class="item-card9">
																<span class="item-card-badge"><i class="fa fa-paint-brush me-1"></i> Beautician</span>
																<a href="page-details.html" class="text-default-dark mt-2"><h3 class="mt-2 mb-2">Beautician Classes</h3></a>
																<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
															</div>
															<div class="mt-2">
																<div class="rating-stars d-flex">
																	<h4 class="font-weight-semibold me-2">4.3</h4>
																	<div class="star-ratings start-ratings-main clearfix me-3">
																		<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
																			<select class="example-fontawesome" name="rating" autocomplete="off">
																				<option value="1">1</option>
																				<option value="2">2</option>
																				<option value="3">3</option>
																				<option value="4" selected>4</option>
																				<option value="5">5</option>
																			</select>
																		</div>
																	</div>(67,525)
																</div>
															</div>
														</div>
														<div class="border-top ps-5 mt-2">
															<h4 class="font-weight-semibold fs-20 text-dark mt-4 mb-4"><i class="fe fe-tag mt-0 fs-18 me-2"></i>$149.00</h4>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-6">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="item-card9-imgs">
																<a href="page-details.html"></a>
																<img src="../../assets/images/media/Categories/10.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="javascript:void(0)" class="item-card9-icons1 bg-primary"> <i class="fa fa fa-heart-o"></i></a>
																<a href="javascript:void(0)" class="item-card9-icons1 bg-secondary"> <i class="fa fa fa-share-alt"></i></a>
															</div>
														</div>
														<div class="card-body pb-0">
															<div class="item-card2">
																<div class="item-card2-desc">
																	<span class="item-card-badge"><i class="fa fa-music me-1"></i> Music</span>
																	<a href="page-details.html" class="text-default-dark mt-2"><h3 class="mt-2 mb-2">Guitar Classes</h3></a>
																	<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
																</div>
															</div>
															<div class="mt-2">
																<div class="rating-stars d-flex">
																	<h4 class="font-weight-semibold me-2">4.9</h4>
																	<div class="star-ratings start-ratings-main clearfix me-3">
																		<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
																			<select class="example-fontawesome" name="rating" autocomplete="off">
																				<option value="1">1</option>
																				<option value="2">2</option>
																				<option value="3">3</option>
																				<option value="4" selected>4</option>
																				<option value="5">5</option>
																			</select>
																		</div>
																	</div>(99,525)
																</div>
															</div>
														</div>
														<div class="border-top ps-5 mt-2">
															<h4 class="font-weight-semibold fs-20 text-dark mt-4 mb-4"><i class="fe fe-tag mt-0 fs-18 me-2"></i>$13.00</h4>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-6">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="item-card9-imgs">
																<a href="page-details.html"></a>
																<img src="../../assets/images/media/Categories/11.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="javascript:void(0)" class="item-card9-icons1 bg-primary"> <i class="fa fa fa-heart-o"></i></a>
																<a href="javascript:void(0)" class="item-card9-icons1 bg-secondary"> <i class="fa fa fa-share-alt"></i></a>
															</div>
															<div class="item-overly-trans">
														       <a href="page-details.html" class="bg-blue">Popular</a>
														    </div>
														</div>
														<div class="card-body pb-0">
															<div class="item-card2">
																<div class="item-card2-desc">
																	<span class="item-card-badge"><i class="fa fa-camera me-1"></i> PhotoShop</span>
																	<a href="page-details.html" class="text-default-dark mt-2"><h3 class="mt-2 mb-2">PhotoShop Design</h3></a>
																	<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
																</div>
															</div>
															<div class="mt-2">
																<div class="rating-stars d-flex">
																	<h4 class="font-weight-semibold me-2">5.0</h4>
																	<div class="star-ratings start-ratings-main clearfix me-3">
																		<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
																			<select class="example-fontawesome" name="rating" autocomplete="off">
																				<option value="1">1</option>
																				<option value="2">2</option>
																				<option value="3">3</option>
																				<option value="4">4</option>
																				<option value="5" selected>5</option>
																			</select>
																		</div>
																	</div>(99,525)
																</div>
															</div>
														</div>
														<div class="border-top ps-5 mt-2">
															<h4 class="font-weight-semibold fs-20 text-dark mt-4 mb-4"><i class="fe fe-tag mt-0 fs-18 me-2"></i>$42.00</h4>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-6">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="item-card9-imgs">
																<a href="page-details.html"></a>
																<img src="../../assets/images/media/Categories/1.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="javascript:void(0)" class="item-card9-icons1 bg-primary"> <i class="fa fa fa-heart-o"></i></a>
																<a href="javascript:void(0)" class="item-card9-icons1 bg-secondary"> <i class="fa fa fa-share-alt"></i></a>
															</div>
															<div class="item-overly-trans">
														       <a href="page-details.html" class="bg-primary">Best Sales</a>
														    </div>
														</div>
														<div class="card-body pb-0">
															<div class="item-card2">
																<div class="item-card2-desc">
																	<span class="item-card-badge"><i class="fa fa-flask me-1"></i> DataScience</span>
																	<a href="page-details.html" class="text-default-dark mt-2"><h3 class="mt-2 mb-2">Data Science</h3></a>
																	<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
																</div>
															</div>
															<div class="mt-2">
																<div class="rating-stars d-flex">
																	<h4 class="font-weight-semibold me-2">5.0</h4>
																	<div class="star-ratings start-ratings-main clearfix me-3">
																		<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
																			<select class="example-fontawesome" name="rating" autocomplete="off">
																				<option value="1">1</option>
																				<option value="2">2</option>
																				<option value="3">3</option>
																				<option value="4" >4</option>
																				<option value="5" selected>5</option>
																			</select>
																		</div>
																	</div>(1,25,252)
																</div>
															</div>
														</div>
														<div class="border-top ps-5 mt-2">
															<h4 class="font-weight-semibold fs-20 text-dark mt-4 mb-4"><i class="fe fe-tag mt-0 fs-18 me-2"></i>$263.99</h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="center-block text-center">
									<ul class="pagination mb-5 mb-lg-0">
										<li class="page-item page-prev disabled">
											<a class="page-link" href="javascript:void(0)" tabindex="-1">Prev</a>
										</li>
										<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
										<li class="page-item page-next">
											<a class="page-link" href="javascript:void(0)">Next</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!--/Coursed lists-->
					</div>

					<!--Right Side Content-->
					<div class="col-xl-3 col-lg-4 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="input-group">
									<input type="text" class="form-control br-ts-7 br-bs-7" placeholder="Search">
									<div class="input-group-text ">
										<button type="button" class="btn btn-primary br-te-7 br-be-7">
											Search
										</button>
									</div>
								</div>
							</div>
						</div>
						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title">Categories</h3>
							</div>
							<div class="card-body">
								<div class="" id="container">
									<div class="filter-product-checkboxs">
										<label class="custom-control form-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
											<span class="custom-control-label">
												<a href="javascript:void(0)" class="text-dark">Business<span class="label label-primary br-7 float-end">14</span></a>
											</span>
										</label>
										<label class="custom-control form-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
											<span class="custom-control-label">
												<a href="javascript:void(0)" class="text-dark">Data Science<span class="label label-primary br-7 float-end">22</span></a>
											</span>
										</label>
										<label class="custom-control form-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox3" value="option3">
											<span class="custom-control-label">
												<a href="javascript:void(0)" class="text-dark">IT<span class="label label-primary br-7 float-end">78</span></a>
											</span>
										</label>
										<label class="custom-control form-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox4" value="option3">
											<span class="custom-control-label">
												<a href="javascript:void(0)" class="text-dark">Marketing<span class="label label-primary br-7 float-end">35</span></a>
											</span>
										</label>
										<label class="custom-control form-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox5" value="option3">
											<span class="custom-control-label">
												<a href="javascript:void(0)" class="text-dark">Beautician<span class="label label-primary br-7 float-end">23</span></a>
											</span>
										</label>
										<label class="custom-control form-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox6" value="option3">
											<span class="custom-control-label">
												<a href="javascript:void(0)" class="text-dark">Photography<span class="label label-primary br-7 float-end">14</span></a>
											</span>
										</label>
										<label class="custom-control form-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="javascript:void(0)" class="text-dark">Literature<span class="label label-primary br-7 float-end">45</span></a>
											</span>
										</label>
										<label class="custom-control form-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="javascript:void(0)" class="text-dark">Law<span class="label label-primary br-7 float-end">34</span></a>
											</span>
										</label>
										<label class="custom-control form-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="javascript:void(0)" class="text-dark">Nursing<span class="label label-primary br-7 float-end">12</span></a>
											</span>
										</label>
										<label class="custom-control form-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="javascript:void(0)" class="text-dark">Digital Marketing<span class="label label-primary br-7 float-end">18</span></a>
											</span>
										</label>
										<label class="custom-control form-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="javascript:void(0)" class="text-dark">Web Designing<span class="label label-primary br-7 float-end">02</span></a>
											</span>
										</label>
										<label class="custom-control form-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="javascript:void(0)" class="text-dark">Languages<span class="label label-primary br-7 float-end">15</span></a>
											</span>
										</label>
										<label class="custom-control form-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="javascript:void(0)" class="text-dark">App Development<span class="label label-primary br-7 float-end">32</span></a>
											</span>
										</label>
									</div>
								</div>
							</div>
							<div class="card-header border-top">
								<h3 class="card-title">Levels</h3>
							</div>
							<div class="card-body">
								<div class="filter-product-checkboxs">
									<label class="custom-control form-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox11" value="option1">
										<span class="custom-control-label">
										Beginner
										</span>
									</label>
									<label class="custom-control form-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox12" value="option2">
										<span class="custom-control-label">
											Intermediate
										</span>
									</label>
									<label class="custom-control form-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="checkbox13" value="option3">
										<span class="custom-control-label">
											Advanced
										</span>
									</label>
								</div>
							</div>
							<div class="card-header border-top">
								<h3 class="card-title">Course Type</h3>
							</div>
							<div class="card-body">
								<div class="filter-product-checkboxs">
									<label class="custom-control form-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
										<span class="custom-control-label">
											Free
										</span>
									</label>
									<label class="custom-control form-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
										<span class="custom-control-label">
											Paid
										</span>
									</label>
								</div>
							</div>
							<div class="card-header border-top">
								<h3 class="card-title">Duration</h3>
							</div>
							<div class="card-body">
								<div class="filter-product-checkboxs">
									<label class="custom-control form-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
										<span class="custom-control-label">
											+5hours
										</span>
									</label>
									<label class="custom-control form-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
										<span class="custom-control-label">
											+10hours
										</span>
									</label>
									<label class="custom-control form-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox2" value="option3">
										<span class="custom-control-label">
											+20hours
										</span>
									</label>
									<label class="custom-control form-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="checkbox2" value="option4">
										<span class="custom-control-label">
											+30hours
										</span>
									</label>
								</div>
							</div>
							<div class="card-footer">
								<a href="javascript:void(0)" class="btn btn-primary btn-block">Apply Filter</a>
							</div>
						</div>
					</div>
					<!--/Right Side Content-->
				</div>
			</div>
		</section><!--Section-->

		<!--Section-->
		<section class="cover-image sptb bg-background-1" data-bs-image-src="../../assets/images/banners/banner5.jpg">
			<div class="content-text mb-0">
				<div class="container">
					<div class="text-white">
						<div class="row">
							<div class="col-lg-6">
								<div class="mt-0">
									<h1 class="mb-2 font-weight-semibold">Subscribe</h1>
									<p class="fs-18 mb-0">Many desktop publishing packages and web page editors.</p>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<div class="input-group sub-input mt-1">
										<input type="text" class="form-control input-lg  br-ts-7  br-bs-7" placeholder="Enter your Email">
										<div class="input-group-text ">
											<button type="button" class="btn btn-secondary btn-lg br-te-7  br-be-7">
												Subscribe
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Section-->

		<!--Section-->
		<div class="position-relative">
            <div class="shape overflow-hidden bottom-footer-shape">
                <svg viewBox="0 0 2880 48" fill="none" xmsns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
		<!--/Section-->
@endsection

