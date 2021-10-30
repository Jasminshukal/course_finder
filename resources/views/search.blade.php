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
					<div class="col-xl-12 col-lg-12 col-md-12">
						<!--Coursed lists-->
						<div class=" mb-lg-0">
							<div class="">
								<div class="item2-gl">
									<div class="mb-0">
										<div class="">
											<div class="bg-white item2-gl-nav d-flex">
												<ul class="nav item2-gl-menu ms-auto">
													<li class="border-end"><a href="#tab-11" class="active show" data-bs-toggle="tab" title="List style"><i class="fa fa-list"></i></a></li>
													<li><a href="#tab-12" data-bs-toggle="tab" class=" " title="Grid"><i class="fa fa-th"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="tab-content item-list2">
										<div class="tab-pane active" id="tab-11">
                                            @forelse ($courese as $item)
                                                <div class="card overflow-hidden">
                                                    <div class="d-md-flex">
                                                        <div class="item-card9-img">
                                                            <div class="item-card9-imgs">
                                                                <a href="{{ route('Detail',[$item->slug]) }}"></a>
                                                                <img src="{{ $item->banner }}" alt="img" class="cover-image">
                                                            </div>
                                                            <div class="item-overly-trans">
                                                            <a href="{{ route('Detail',[$item->slug]) }}" class="bg-primary">Popular</a>
                                                            </div>
                                                        </div>
                                                        <div class="card border-0 mb-0">
                                                            <div class="card-body p-0">
                                                                <div class="item-card9 ps-5 pt-5">
                                                                    <a href="{{ route('Detail',[$item->slug]) }}" class="text-default-dark"><h3 class="">{{ $item->name }}</h3></a>
                                                                    <p class="mb-0 mt-1 lead"></p>
                                                                    <div class="mt-2 mb-2">
                                                                        <ul class="icon-card-1">
                                                                            <li class="me-3"><span class="fs-14"><i class="fa fa-map-marker me-1"></i> {{ $item->destination }}</span></li>
                                                                            <li class="me-3"><span class="fs-14"><i class="fa fa-external-link me-1"></i> {{ $item->laval }}</span></li>
                                                                            <li class="me-3"><span class="fs-14"><i class="fa fa-tags me-1"></i>{{ $item->subject }}</span></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div>

                                                                    </div>
                                                                </div>
                                                                <div class="border-top ps-5 mt-2">
                                                                    <h4 class="font-weight-semibold fs-20 text-dark mt-4 mb-4">{{ $item->currency_sym }}{{ $item->fee }},000</h4>
                                                                    <div class="item-card9-icons2">
                                                                        <a href="javascript:void(0)" class="item-card9-icons1" data-bs-toggle="tooltip" data-bs-original-title="Like"> <i class="fe fe-heart"></i></a>
                                                                        <a href="javascript:void(0)" class="item-card9-icons1" data-bs-toggle="tooltip" data-bs-original-title="Share"> <i class="fe fe-share-2"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                            <h1 class="center-block text-center">No Data Found...</h1>

                                            @endforelse
										</div>
										<div class="tab-pane" id="tab-12">
											<div class="row">
                                                @foreach ($courese as $item)
                                                    <div class="col-lg-4 col-md-12 col-xl-4">
                                                        <div class="card overflow-hidden">
                                                            <div class="item-card9-img">
                                                                <div class="item-card9-imgs">
                                                                    <a href="{{ route('Detail',[$item->slug]) }}"></a>
                                                                    <img src="{{ $item->banner }}" alt="img" class="cover-image">
                                                                </div>
                                                                <div class="item-card9-icons">
                                                                    <a href="javascript:void(0)" class="item-card9-icons1 bg-primary"> <i class="fa fa fa-heart-o"></i></a>
                                                                    <a href="javascript:void(0)" class="item-card9-icons1 bg-secondary"> <i class="fa fa fa-share-alt"></i></a>
                                                                </div>
                                                                <div class="item-overly-trans">
                                                                    <a href="{{ route('Detail',[$item->slug]) }}" class="bg-primary">Popular</a>
                                                                </div>
                                                            </div>
                                                            <div class="card-body pb-0">
                                                                <div class="item-card9">
                                                                    <span class="fs-14"><i class="fa fa-map-marker me-1"></i> {{ $item->destination }}</span>
                                                                    <a href="{{ route('Detail',[$item->slug]) }}" class="text-default-dark mt-2"><h3 class="mt-2 mb-2">{{ $item->name }}</h3></a>
                                                                    <p class="mb-0">{{ Str::limit($item->description, 35) }}</p>
                                                                </div>
                                                                <div class="mt-2">

                                                                </div>
                                                            </div>
                                                            <div class="border-top ps-5  mt-2">
                                                                <h4 class="font-weight-semibold fs-20 text-dark mt-4 mb-4"><i class="fe fe-tag mt-0 fs-18 me-2"></i>$263.99</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
											</div>
										</div>
									</div>
								</div>

								<div class="center-block text-center">
                                    {{ $courese->appends(request()->query())->render("pagination::bootstrap-4") }}
									{{-- <ul class="pagination mb-5 mb-lg-0">
										<li class="page-item page-prev disabled">
											<a class="page-link" href="javascript:void(0)" tabindex="-1">Prev</a>
										</li>
										<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
										<li class="page-item page-next">
											<a class="page-link" href="javascript:void(0)">Next</a>
										</li>
									</ul> --}}
								</div>
							</div>
						</div>
						<!--/Coursed lists-->
					</div>

					<!--Right Side Content-->

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

