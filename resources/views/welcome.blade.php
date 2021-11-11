@extends('layouts.uni_theam')

@section('banner')
    @include('layouts.banner', ['location' => "home"])
@endsection

@section('content')


{{--
<section class="absolute-banner-section bg-white">
    <div class="container">
        <div class="card mb-0 box-shadow-0 overflow-hidden">
            <div class="card-body">
                <div class="row content-text">
                    <div class="col-lg-3 col-md-6 col-sm-6 d-catmb mb-4 mb-lg-0">
                        <div class="d-flex">
                            <div>
                                <span class="bg-primary icon-service1 text-white">
                                    <i class="fe fe-book fs-30"></i>
                                </span>
                            </div>
                            <div class="ms-4 mt-4">
                                <h4 class="font-weight-semibold">Online Books</h4>
                                <h5 class="mb-0 mt-2 fs-14"><b>5864</b> Views</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-catmb mb-4 mb-lg-0">
                        <div class="d-flex">
                            <div>
                                <span class="bg-secondary icon-service1 text-white">
                                    <i class="fe fe-video fs-30"></i>
                                </span>
                            </div>
                            <div class="ms-4 mt-4">
                                <h4 class="font-weight-semibold">Video Classes</h4>
                                <h5 class="mb-0 mt-2 fs-14"><b>9685</b> Views</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-catmb mb-4 mb-sm-0">
                        <div class="d-flex">
                            <div>
                                <span class="bg-success icon-service1 text-white">
                                    <i class="fe fe-music fs-30"></i>
                                </span>
                            </div>
                            <div class="ms-4 mt-4">
                                <h4 class="font-weight-semibold">Audio Classes</h4>
                                <h5 class="mb-0 mt-2 fs-14"><b>8574</b> Views</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="d-flex">
                            <div>
                                <span class="bg-info icon-service1 text-white">
                                    <i class="fe fe-airplay fs-30"></i>
                                </span>
                            </div>
                            <div class="ms-4 mt-4">
                                <h4 class="font-weight-semibold">Online classes</h4>
                                <h5 class="mb-0 mt-2 fs-14"><b>8654</b> Views</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!--Section-->
<section class="sptb bg-white">
    <div class="container">
        <div class="section-title d-md-flex">
            <div>
                <h2>Categories</h2>
                <p class="fs-18 lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            {{-- <div class="ms-auto">
                <a class="btn btn-light mt-3" href="javascript:void(0)"><i class="fe fe-arrow-right"></i> View More</a>
            </div> --}}
        </div>
        <div class="item-all-cat education-categories">
            <div class="row">
                @foreach ($subject->take(8) as $key => $item)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item-all-card text-dark item-hover-card p-6">
                            <a href="{{ URL('Search')."?Subject=".$key }}" class="absolute-link"></a>
                            <div class="iteam-all-icon">
                                <i class="fe fe-book-open"></i>
                            </div>
                            <div class="item-all-text mt-3">
                                <h5 class="mb-0">{{ Str::limit($item,21,'...') }}</h5>
                                <p class="mt-3">Sed do eiusmod tempor ut labore et dolore magna aliqua</p>
                                <a class="btn-link" href="javascript:void(0)"><i class="fe fe-chevron-right"></i> View More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="item-all-card text-dark item-hover-card p-6">
                        <a href="page-list.html" class="absolute-link"></a>
                        <div class="iteam-all-icon">
                            <i class="fe fe-airplay"></i>
                        </div>
                        <div class="item-all-text mt-3">
                            <h5 class="mb-0">IT Courses</h5>
                            <p class="mt-3">Sed do eiusmod tempor ut labore et dolore magna aliqua</p>
                            <a class="btn-link" href="javascript:void(0)"><i class="fe fe-chevron-right"></i> View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="item-all-card text-dark item-hover-card p-6">
                        <a href="page-list.html" class="absolute-link"></a>
                        <div class="iteam-all-icon">
                            <i class="fe fe-database"></i>
                        </div>
                        <div class="item-all-text mt-3">
                            <h5 class="mb-0">Data Science</h5>
                            <p class="mt-3">Sed do eiusmod tempor ut labore et dolore magna aliqua</p>
                            <a class="btn-link" href="javascript:void(0)"><i class="fe fe-chevron-right"></i> View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="item-all-card text-dark item-hover-card p-6">
                        <a href="page-list.html" class="absolute-link"></a>
                        <div class="iteam-all-icon">
                            <i class="fe fe-heart"></i>
                        </div>
                        <div class="item-all-text mt-3">
                            <h5 class="mb-0">Health</h5>
                            <p class="mt-3">Sed do eiusmod tempor ut labore et dolore magna aliqua</p>
                            <a class="btn-link" href="javascript:void(0)"><i class="fe fe-chevron-right"></i> View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="item-all-card text-dark item-hover-card p-6">
                        <a href="page-list.html" class="absolute-link"></a>
                        <div class="iteam-all-icon">
                            <i class="fa fa-balance-scale"></i>
                        </div>
                        <div class="item-all-text mt-3">
                            <h5 class="mb-0">Law Course</h5>
                            <p class="mt-3">Sed do eiusmod tempor ut labore et dolore magna aliqua</p>
                            <a class="btn-link" href="javascript:void(0)"><i class="fe fe-chevron-right"></i> View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="item-all-card text-dark item-hover-card p-6">
                        <a href="page-list.html" class="absolute-link"></a>
                        <div class="iteam-all-icon">
                            <i class="fe fe-hash"></i>
                        </div>
                        <div class="item-all-text mt-3">
                            <h5 class="mb-0">Maths</h5>
                            <p class="mt-3">Sed do eiusmod tempor ut labore et dolore magna aliqua</p>
                            <a class="btn-link" href="javascript:void(0)"><i class="fe fe-chevron-right"></i> View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="item-all-card text-dark mb-lg-0 item-hover-card p-6">
                        <a href="page-list.html" class="absolute-link"></a>
                        <div class="iteam-all-icon">
                            <i class="fe fe-briefcase"></i>
                        </div>
                        <div class="item-all-text mt-3">
                            <h5 class="mb-0">Business</h5>
                            <p class="mt-3">Sed do eiusmod tempor ut labore et dolore magna aliqua</p>
                            <a class="btn-link" href="javascript:void(0)"><i class="fe fe-chevron-right"></i> View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="item-all-card text-dark mb-lg-0 item-hover-card p-6">
                        <a href="page-list.html" class="absolute-link"></a>
                        <div class="iteam-all-icon">
                            <i class="fe fe-bar-chart"></i>
                        </div>
                        <div class="item-all-text mt-3">
                            <h5 class="mb-0">Marketing</h5>
                            <p class="mt-3">Sed do eiusmod tempor ut labore et dolore magna aliqua</p>
                            <a class="btn-link" href="javascript:void(0)"><i class="fe fe-chevron-right"></i> View More</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!--/Section-->


<!--Section-->
<section class="sptb">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="video-img">
                    <img src="../../assets/images/media/video.jpg" alt="img" class="cover-image br-7">
                    <a class="mt-6 d-block video-btn mx-auto" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#homeVideo"><i class="fa fa-play text-white"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="video-section mt-8 ms-lg-5 pt-5">
                    <div class="">
                        <h6 class="text-uppercase mb-2 text-primary"><i class="fe fe-book"></i> Online classes & Study</h6>
                        <h2 class="mt-0 font-weight-bold">Online remote classes for all courses </h2>
                    </div>
                    <p class="lead leading-normal mt-4">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model</p>
                    <a class="btn btn-primary text-white mt-3"  href="javascript:void(0)"> <i class="fe fe-chevron-right"></i> View More</a>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <!--Section-->
<section class="sptb">
    <div class="container">
        <div class="section-title">
            <h2>Coming Up Classes</h2>
            <p class="fs-18 lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
        <div class="panel panel-primary">
            <div class="">
                <div class="tabs-menu ">
                    <!-- Tabs -->
                    <ul class="nav panel-tabs eductaional-tabs mb-6">
                        <li class=""><a href="#tab1" class="active show" data-bs-toggle="tab">All</a></li>
                        <li><a href="#tab2" data-bs-toggle="tab" class="">Short Term Courses</a></li>
                        <li><a href="#tab3" data-bs-toggle="tab" class="">Long Term Courses</a></li>
                        <li><a href="#tab4" data-bs-toggle="tab" class="">Online Courses</a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body p-0">
                <div class="tab-content">
                    <div class="tab-pane active show" id="tab1">
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Free</span></div>
                                    <div class="item-card7-img pt-5 px-5">
                                        <div class="item-card7-imgs">
                                            <a href="javascript:void(0)"></a>
                                            <img src="../../assets/images/media/0-1.jpg" alt="img" class="cover-image br-7 border">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <div class="item-card7-text">
                                                <a href="javascript:void(0)" class="text-dark"><h4 class="font-weight-semibold mb-1">Digital Marketing</h4></a>
                                            </div>
                                            <div class="d-flex mb-0">
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
                                                </div>
                                                <span class="">487 reviews</span>
                                            </div>
                                            <div class="pt-2 mb-3">
                                                <a class="me-4"><span class="font-weight-bold">Duration :</span> <span class="text-muted">6 Months</span></a>
                                                <a class="me-4 float-end"><span class="font-weight-bold">Daily :</span><span class="text-muted"> 2 Hours </span></a>
                                            </div>
                                            <p class="mb-0">Nemo enim ipsam voluptatem voluptas sit aspernatur ratione voluptatem sequi nesciunt..</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><img src="../../assets/images/png/power.png" class=""></span></div>
                                    <div class="item-card7-img pt-5 px-5">
                                        <div class="item-card7-imgs">
                                            <a href="javascript:void(0)"></a>
                                            <img src="../../assets/images/media/0-2.jpg" alt="img" class="cover-image br-7 border">
                                        </div>
                                        <div class="item-card7-overlaytext">
                                            <h4 class="mb-0">$752.99</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <div class="item-card7-text">
                                                <a href="javascript:void(0)" class="text-dark"><h4 class="font-weight-semibold mb-1"> Coding Training Classes</h4></a>
                                            </div>
                                            <div class="d-flex mb-0">
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
                                                </div>
                                                <span class="">487 reviews</span>
                                            </div>
                                            <div class="pt-2 mb-3">
                                                <a class="me-4"><span class="font-weight-bold">Duration :</span><span class="text-muted">9 Months</span></a>
                                                <a class="me-4 float-end"><span class="font-weight-bold">Daily :</span><span class="text-muted"> 1 Hour</span></a>
                                            </div>
                                            <p class="mb-0">Nemo enim ipsam voluptatem voluptas sit aspernatur ratione voluptatem sequi nesciunt..</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><img src="../../assets/images/png/power.png" class=""></span></div>
                                    <div class="item-card7-img pt-5 px-5">
                                        <div class="item-card7-imgs">
                                            <a href="javascript:void(0)"></a>
                                            <img src="../../assets/images/media/0-3.jpg" alt="img" class="cover-image br-7 border">
                                        </div>
                                        <div class="item-card7-overlaytext">
                                            <h4  class="font-weight-semibold mb-0">$635.45</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <div class="item-card7-text">
                                                <a href="javascript:void(0)" class="text-dark"><h4 class="font-weight-semibold mb-1">Guitar Classes</h4></a>
                                            </div>
                                            <div class="d-flex mb-0">
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
                                                </div>
                                                <span class="">487 reviews</span>
                                            </div>
                                            <div class="pt-2 mb-3">
                                                <a class="me-4"><span class="font-weight-bold">Duration :</span> <span class="text-muted">3 Months</span></a>
                                                <a class="me-4 float-end"><span class="font-weight-bold">Daily :</span> <span class="text-muted">3 Hour</span></a>
                                            </div>
                                            <p class="mb-0">Nemo enim ipsam voluptatem voluptas sit aspernatur ratione voluptatem sequi nesciunt..</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card overflow-hidden mb-xl-0">
                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><img src="../../assets/images/png/power.png" class=""></span></div>
                                    <div class="item-card7-img pt-5 px-5">
                                        <div class="item-card7-imgs">
                                            <a href="javascript:void(0)"></a>
                                            <img src="../../assets/images/media/0-4.jpg" alt="img" class="cover-image br-7 border">
                                        </div>
                                        <div class="item-card7-overlaytext">
                                            <h4  class="font-weight-semibold mb-0">$835.99</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <div class="item-card7-text">
                                                <a href="javascript:void(0)" class="text-dark"><h4 class="font-weight-semibold mb-1">Free Literature Classes</h4></a>
                                            </div>
                                            <div class="d-flex mb-0">
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
                                                </div>
                                                <span class="">487 reviews</span>
                                            </div>
                                            <div class="pt-2 mb-3">
                                                <a class="me-4"><span class="font-weight-bold">Duration :</span><span class="text-muted"> 2 Months </span></a>
                                                <a class="me-4 float-end"><span class="font-weight-bold">Daily :</span><span class="text-muted"> 2 Hours</span></a>
                                            </div>
                                            <p class="mb-0">Nemo enim ipsam voluptatem voluptas sit aspernatur ratione voluptatem sequi nesciunt..</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card mb-md-0">
                                    <div class="item-card7-img pt-5 px-5">
                                        <div class="item-card7-imgs">
                                            <a href="javascript:void(0)"></a>
                                            <img src="../../assets/images/media/0-5.jpg" alt="img" class="cover-image br-7 border">
                                        </div>
                                        <div class="item-card7-overlaytext">
                                            <h4  class="font-weight-semibold mb-0">$893.99</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <div class="item-card7-text">
                                                <a href="javascript:void(0)" class="text-dark"><h4 class="font-weight-semibold mb-1">PhotoShop Designing</h4></a>
                                            </div>
                                            <div class="d-flex mb-0">
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
                                                </div>
                                                <span class="">487 reviews</span>
                                            </div>
                                            <div class="pt-2 mb-3">
                                                <a class="me-4"><span class="font-weight-bold">Duration :</span><span class="text-muted"> 3 Months</span></a>
                                                <a class="me-4 float-end"><span class="font-weight-bold">Daily :</span><span class="text-muted"> 8 Hours</span></a>
                                            </div>
                                            <p class="mb-0">Nemo enim ipsam voluptatem voluptas sit aspernatur ratione voluptatem sequi nesciunt..</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card mb-0">
                                    <div class="item-card7-img pt-5 px-5">
                                        <div class="item-card7-imgs">
                                            <a href="javascript:void(0)"></a>
                                            <img src="../../assets/images/media/0-6.jpg" alt="img" class="cover-image br-7 border">
                                        </div>
                                        <div class="item-card7-overlaytext">
                                            <h4  class="font-weight-semibold mb-0">$836.50</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <div class="item-card7-text">
                                                <a href="javascript:void(0)" class="text-dark"><h4 class="font-weight-semibold mb-1">Networking classes</h4></a>
                                            </div>
                                            <div class="d-flex mb-0">
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
                                                </div>
                                                <span class="">487 reviews</span>
                                            </div>
                                            <div class="pt-2 mb-3">
                                                <a class="me-4"><span class="font-weight-bold">Duration :</span> <span class="text-muted"> 6 Months</span></a>
                                                <a class="me-4 float-end"><span class="font-weight-bold">Daily :</span> <span class="text-muted">3 Hours</span></a>
                                            </div>
                                            <p class="mb-0">Nemo enim ipsam voluptatem voluptas sit aspernatur ratione voluptatem sequi nesciunt..</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card overflow-hidden mb-xl-0">
                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><img src="../../assets/images/png/power.png" class=""></span></div>
                                    <div class="item-card7-img pt-5 px-5">
                                        <div class="item-card7-imgs">
                                            <a href="javascript:void(0)"></a>
                                            <img src="../../assets/images/media/0-7.jpg" alt="img" class="cover-image br-7 border">
                                        </div>
                                        <div class="item-card7-overlaytext">
                                            <h4  class="font-weight-semibold mb-0">$635.99</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <div class="item-card7-text">
                                                <a href="javascript:void(0)" class="text-dark"><h4 class="font-weight-semibold mb-1">Free Literature Classes</h4></a>
                                            </div>
                                            <div class="d-flex mb-0">
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
                                                </div>
                                                <span class="">487 reviews</span>
                                            </div>
                                            <div class="pt-2 mb-3">
                                                <a class="me-4"><span class="font-weight-bold">Duration :</span> <span class="text-muted">3 Months</span></a>
                                                <a class="me-4 float-end"><span class="font-weight-bold">Daily :</span><span class="text-muted"> 3 Hour</span></a>
                                            </div>
                                            <p class="mb-0">Nemo enim ipsam voluptatem voluptas sit aspernatur ratione voluptatem sequi nesciunt..</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card overflow-hidden mb-md-0">
                                    <div class="item-card7-img pt-5 px-5">
                                        <div class="item-card7-imgs">
                                            <a href="javascript:void(0)"></a>
                                            <img src="../../assets/images/media/0-8.jpg" alt="img" class="cover-image br-7 border">
                                        </div>
                                        <div class="item-card7-overlaytext">
                                            <h4  class="font-weight-semibold mb-0">$831.55</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <div class="item-card7-text">
                                                <a href="javascript:void(0)" class="text-dark"><h4 class="font-weight-semibold mb-1">PhotoShop Designing</h4></a>
                                            </div>
                                            <div class="d-flex mb-0">
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
                                                </div>
                                                <span class="">487 reviews</span>
                                            </div>
                                            <div class="pt-2 mb-3">
                                                <a class="me-4"><span class="font-weight-bold">Duration :</span><span class="text-muted"> 2 Months</span></a>
                                                <a class="me-4 float-end"><span class="font-weight-bold">Daily :</span><span class="text-muted"> 2 Hours</span></a>
                                            </div>
                                            <p class="mb-0">Nemo enim ipsam voluptatem voluptas sit aspernatur ratione voluptatem sequi nesciunt..</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card mb-0">
                                    <div class="item-card7-img pt-5 px-5">
                                        <div class="item-card7-imgs">
                                            <a href="javascript:void(0)"></a>
                                            <img src="../../assets/images/media/0-9.jpg" alt="img" class="cover-image br-7 border">
                                        </div>
                                        <div class="item-card7-overlaytext">
                                            <h4  class="font-weight-semibold mb-0">$897.99</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <div class="item-card7-text">
                                                <a href="javascript:void(0)" class="text-dark"><h4 class="font-weight-semibold mb-1">Networking classes</h4></a>
                                            </div>
                                            <div class="d-flex mb-0">
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
                                                </div>
                                                <span class="">487 reviews</span>
                                            </div>
                                            <div class="pt-2 mb-3">
                                                <a class="me-4"><span class="font-weight-bold">Duration :</span> <span class="text-muted">3 Months</span></a>
                                                <a class="me-4 float-end"><span class="font-weight-bold">Daily :</span> <span class="text-muted">8 Hours</span></a>
                                            </div>
                                            <p class="mb-0">Nemo enim ipsam voluptatem voluptas sit aspernatur ratione voluptatem sequi nesciunt..</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab3">
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card overflow-hidden mb-xl-0">
                                    <div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Free</span></div>
                                    <div class="item-card7-img pt-5 px-5">
                                        <div class="item-card7-imgs">
                                            <a href="javascript:void(0)"></a>
                                            <img src="../../assets/images/media/0-10.jpg" alt="img" class="cover-image br-7 border">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <div class="item-card7-text">
                                                <a href="javascript:void(0)" class="text-dark"><h4 class="font-weight-semibold mb-1"> Digital Marketing</h4></a>
                                            </div>
                                            <div class="d-flex mb-0">
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
                                                </div>
                                                <span class="">487 reviews</span>
                                            </div>
                                            <div class="pt-2 mb-3">
                                                <a class="me-4"><span class="font-weight-bold">Duration :</span> <span class="text-muted">6 Months</span></a>
                                                <a class="me-4 float-end"><span class="font-weight-bold">Daily :</span> <span class="text-muted">2 Hours</span></a>
                                            </div>
                                            <p class="mb-0">Nemo enim ipsam voluptatem voluptas sit aspernatur ratione voluptatem sequi nesciunt..</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card overflow-hidden mb-md-0">
                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><img src="../../assets/images/png/power.png" class=""></span></div>
                                    <div class="item-card7-img pt-5 px-5">
                                        <div class="item-card7-imgs">
                                            <a href="javascript:void(0)"></a>
                                            <img src="../../assets/images/media/0-11.jpg" alt="img" class="cover-image br-7 border">
                                        </div>
                                        <div class="item-card7-overlaytext">
                                            <h4  class="font-weight-semibold mb-0">$635</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <div class="item-card7-text">
                                                <a href="javascript:void(0)" class="text-dark"><h4 class="font-weight-semibold mb-1">  Coding Training Classes</h4></a>
                                            </div>
                                            <div class="d-flex mb-0">
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
                                                </div>
                                                <span class="">487 reviews</span>
                                            </div>
                                            <div class="pt-2 mb-3">
                                                <a class="me-4"><span class="font-weight-bold">Duration :</span><span class="text-muted"> 9 Months</span></a>
                                                <a class="me-4 float-end"><span class="font-weight-bold">Daily :</span><span class="text-muted"> 1 Hour</span></a>
                                            </div>
                                            <p class="mb-0">Nemo enim ipsam voluptatem voluptas sit aspernatur ratione voluptatem sequi nesciunt..</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card mb-0">
                                    <div class="item-card7-img pt-5 px-5">
                                        <div class="item-card7-imgs">
                                            <a href="javascript:void(0)"></a>
                                            <img src="../../assets/images/media/0-2.jpg" alt="img" class="cover-image br-7 border">
                                        </div>
                                        <div class="item-card7-overlaytext">
                                            <h4  class="font-weight-semibold mb-0">$836</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <div class="item-card7-text">
                                                <a href="javascript:void(0)" class="text-dark"><h4 class="font-weight-semibold mb-1">Guitar Classes</h4></a>
                                            </div>
                                            <div class="d-flex mb-0">
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
                                                </div>
                                                <span class="">487 reviews</span>
                                            </div>
                                            <div class="pt-2 mb-3">
                                                <a class="me-4"><span class="font-weight-bold">Duration :</span><span class="text-muted"> 6 Months</span></a>
                                                <a class="me-4 float-end"><span class="font-weight-bold">Daily :</span> <span class="text-muted">3 Hours</span></a>
                                            </div>
                                            <p class="mb-0">Nemo enim ipsam voluptatem voluptas sit aspernatur ratione voluptatem sequi nesciunt..</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab4">
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card overflow-hidden mb-0">
                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><img src="../../assets/images/png/power.png" class=""></span></div>
                                    <div class="item-card7-img pt-5 px-5">
                                        <div class="item-card7-imgs">
                                            <a href="javascript:void(0)"></a>
                                            <img src="../../assets/images/media/0-1.jpg" alt="img" class="cover-image br-7 border">
                                        </div>
                                        <div class="item-card7-overlaytext">
                                            <h4  class="font-weight-semibold mb-0">$63</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <div class="item-card7-text">
                                                <a href="javascript:void(0)" class="text-dark"><h4 class="font-weight-semibold mb-1">App Development Classes</h4></a>
                                            </div>
                                            <div class="d-flex mb-0">
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
                                                </div>
                                                <span class="">487 reviews</span>
                                            </div>
                                            <div class="pt-2 mb-3">
                                                <a class="me-4"><span class="font-weight-bold">Duration :</span> <span class="text-muted">3 Months</span></a>
                                                <a class="me-4 float-end"><span class="font-weight-bold">Daily :</span> <span class="text-muted">3 Hour</span></a>
                                            </div>
                                            <p class="mb-0">Nemo enim ipsam voluptatem voluptas sit aspernatur ratione voluptatem sequi nesciunt..</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/Section-->

<!--Section-->
<section>
    <div class="cover-image sptb bg-background-color text-white" data-bs-image-src="../../assets/images/banners/banner3.jpg">
        <div class="content-text mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="section-title pb-4">
                            <h2>The predicious Features for you</h2>
                            <p class="text-white-80 fs-18 mt-6">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose</p>
                        </div>
                        <ul class="list-style fs-18 text-white student-feature-icons">
                            <li class="py-2"><i class="fe fe-check me-3"></i> Online Classes</li>
                            <li class="py-2"><i class="fe fe-check me-3"></i> Offline Classes</li>
                            <li class="py-2"><i class="fe fe-check me-3"></i> Books Online/Offline</li>
                            <li class="py-2"><i class="fe fe-check me-3"></i> Short Term Courses</li>
                            <li class="py-2"><i class="fe fe-check me-3"></i> Long Term Courses</li>
                            <li class="py-2"><i class="fe fe-check me-3"></i> Music Classes</li>
                            <li class="py-2"><i class="fe fe-check me-3"></i> Cooking Classes</li>
                            <li class="py-2"><i class="fe fe-check me-3"></i> Networking Courses</li>
                        </ul>
                        <div class="mt-6">
                            <a class="btn btn-secondary btn-lg" href="javascript:void(0)"> Start Learning</a>
                            <a class="btn btn-light btn-lg" href="javascript:void(0)"> View More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 met-sm-2">
                        <div class="student-img ">
                            <img src="../../assets/images/png/19.png" class="" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/Section-->

<!--Section-->
<section class="sptb bg-white">
    <div class="container">
        <div class="section-title">
            <h2>Our Sponsors</h2>
            <p class="fs-18 lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
        <div id="small-categories" class="owl-carousel client-carousel">
            <div class="item">
                <div class="client-img">
                    <img src="../../assets/images/clients/1.png" alt="img">
                </div>
            </div>
            <div class="item">
                <div class="client-img">
                    <img src="../../assets/images/clients/2.png" alt="img">
                </div>
            </div>
            <div class="item">
                <div class="client-img">
                    <img src="../../assets/images/clients/3.png" alt="img">
                </div>
            </div>
            <div class="item">
                <div class="client-img">
                    <img src="../../assets/images/clients/4.png" alt="img">
                </div>
            </div>
            <div class="item">
                <div class="client-img">
                    <img src="../../assets/images/clients/5.png" alt="img">
                </div>
            </div>
            <div class="item">
                <div class="client-img">
                    <img src="../../assets/images/clients/7.png" alt="img">
                </div>
            </div>
            <div class="item">
                <div class="client-img">
                    <img src="../../assets/images/clients/8.png" alt="img">
                </div>
            </div>
        </div>
    </div>
</section><!--/Section--> --}}

<!--Section-->
{{-- <section class="sptb">
    <div class="container">
        <div class="section-title">
            <h2>Online Classes</h2>
            <p class="fs-18 lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                <div class="row">
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="card overflow-hidden gallery-item">
                            <div class="card-body">
                                <a href="course-details.html">
                                    <div class="gallery-card">
                                        <div class="gallery-card-desc">
                                            <div class="gallery-card">
                                                <img src="../../assets/images/media/14.jpg" alt="img" class="">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="text-center mt-5">
                                    <h3 class="font-weight-semibold"><a href="course-details.html" class="text-default-dark">Software Development</a></h3>
                                    <span class="font-weight-bold"><strong class="fs-18 font-weight-bold">1856</strong> Over  Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="card overflow-hidden gallery-item">
                            <div class="card-body">
                                <a href="course-details.html">
                                    <div class="gallery-card">
                                        <div class="gallery-card-desc">
                                            <div class="gallery-card">
                                                <img src="../../assets/images/media/17.jpg" alt="img" class="">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="text-center mt-5">
                                    <h3 class="font-weight-semibold"><a href="course-details.html" class="text-default-dark">Web Designing</a></h3>
                                    <span class="font-weight-bold"><strong class="fs-18 font-weight-bold">1256</strong> Over  Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="card overflow-hidden gallery-item">
                            <div class="card-body">
                                <a href="course-details.html">
                                    <div class="gallery-card">
                                        <div class="gallery-card-desc">
                                            <div class="gallery-card">
                                                <img src="../../assets/images/media/21.jpg" alt="img" class="">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="text-center mt-5">
                                    <h3 class="font-weight-semibold"><a href="course-details.html" class="text-default-dark">Web Development</a></h3>
                                    <span class="font-weight-bold"><strong class="fs-18 font-weight-bold">656</strong> Over  Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="card overflow-hidden gallery-item">
                            <div class="card-body">
                                <a href="course-details.html">
                                    <div class="gallery-card">
                                        <div class="gallery-card-desc">
                                            <div class="gallery-card">
                                                <img src="../../assets/images/media/23.jpg" alt="img" class="">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="text-center mt-5">
                                    <h3 class="font-weight-semibold"><a href="course-details.html" class="text-default-dark">Animation Classes</a></h3>
                                    <span class="font-weight-bold"><strong class="fs-18 font-weight-bold">875</strong> Over  Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="card overflow-hidden gallery-item">
                            <div class="card-body">
                                <a href="course-details.html">
                                    <div class="gallery-card">
                                        <div class="gallery-card-desc">
                                            <div class="gallery-card">
                                                <img src="../../assets/images/media/25.jpg" alt="img" class="">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="text-center mt-5">
                                    <h3 class="font-weight-semibold"><a href="course-details.html" class="text-default-dark">Business Classes</a></h3>
                                    <span class="font-weight-bold"><strong class="fs-18 font-weight-bold">856</strong> Over  Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="card overflow-hidden gallery-item">
                            <div class="card-body">
                                <a href="course-details.html">
                                    <div class="gallery-card">
                                        <div class="gallery-card-desc">
                                            <div class="gallery-card">
                                                <img src="../../assets/images/media/19.jpg" alt="img" class="">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="text-center mt-5">
                                    <h3 class="font-weight-semibold"><a href="course-details.html" class="text-default-dark">Beauty Classes</a></h3>
                                    <span class="font-weight-bold"><strong class="fs-18 font-weight-bold">656</strong> Over Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--/Section-->

<!--Section-->
{{-- <section class="sptb position-relative cover-image bg-background" data-bs-image-src="../../assets/images/banners/pattern3.png">
    <div class="container">
        <div class="section-title">
            <h2 class="position-relative">Student Reviews</h2>
            <p class="fs-18 position-relative">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="myCarousel" class="owl-carousel testimonial-owl-carousel">
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="testimonial-img"><img src="../../assets/images/users/female/4.jpg" class="br-7 w-120 h-120" alt="img"></div>
                                    </div>
                                    <div class="col-md-9 col-sm-12 mt-2">
                                        <div class="d-md-flex">
                                            <div>
                                                <h4 class="title font-weight-bold">Lilly Potter</h4>
                                                <span class="post">Web developer student</span>
                                            </div>
                                            <div class="star-ratings start-ratings-main clearfix mb-3 ms-auto">
                                                <div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
                                                    <select class="example-fontawesome" name="rating" autocomplete="off">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4" selected>4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="fs-16 leading-normal mt-4 mb-0"><i class="fa fa-quote-left"></i> But I must explain to you how all this mistaken idea of denouncing pleasure and praising</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="testimonial-img"><img src="../../assets/images/users/male/33.jpg" class="br-7 w-120 h-120" alt="img"></div>
                                    </div>
                                    <div class="col-md-9 col-sm-12 mt-2">
                                        <div class="d-md-flex">
                                            <div>
                                                <h4 class="title font-weight-bold">John Joya</h4>
                                                <span class="post">Web developer student</span>
                                            </div>
                                            <div class="star-ratings start-ratings-main clearfix mb-3 ms-auto">
                                                <div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
                                                    <select class="example-fontawesome" name="rating" autocomplete="off">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4" selected>4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="fs-16 leading-normal mt-4 mb-0"><i class="fa fa-quote-left"></i> But I must explain to you how all this mistaken idea of denouncing pleasure and praising</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="testimonial-img"><img src="../../assets/images/users/female/1.jpg" class="br-7 w-120 h-120" alt="img"></div>
                                    </div>
                                    <div class="col-md-9 col-sm-12 mt-2">
                                        <div class="d-md-flex">
                                            <div>
                                                <h4 class="title font-weight-bold">Rebacca wisely</h4>
                                                <span class="post">Web designer student</span>
                                            </div>
                                            <div class="star-ratings start-ratings-main clearfix mb-3 ms-auto">
                                                <div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
                                                    <select class="example-fontawesome" name="rating" autocomplete="off">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4" selected>4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="fs-16 leading-normal mt-4 mb-0"><i class="fa fa-quote-left"></i> But I must explain to you how all this mistaken idea of denouncing pleasure and praising</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="testimonial-img"><img src="../../assets/images/users/male/34.jpg" class="br-7 w-120 h-120" alt="img"></div>
                                    </div>
                                    <div class="col-md-9 col-sm-12 mt-2">
                                        <div class="d-md-flex">
                                            <div>
                                                <h4 class="title font-weight-bold">williamson</h4>
                                                <span class="post">Web developer student</span>
                                            </div>
                                            <div class="star-ratings start-ratings-main clearfix mb-3 ms-auto">
                                                <div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
                                                    <select class="example-fontawesome" name="rating" autocomplete="off">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4" selected>4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="fs-16 leading-normal mt-4 mb-0"><i class="fa fa-quote-left"></i> But I must explain to you how all this mistaken idea of denouncing pleasure and praising</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--/Section-->

<!--Section-->
{{-- <section class="sptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <img src="../../assets/images/png/18.png" alt="img" class="absolute-student">
            </div>
            <div class="col-md-12 col-lg-8">
                <div class="section-title">
                    <h2>Download app for online classes</h2>
                    <p class="fs-18 lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
                <div class="text-wrap">
                    <div class="btn-list">
                        <a href="javascript:void(0)" class="btn btn-primary btn-lg mb-5 mb-lg-0"><i class="fa fa-apple fa-1x me-2"></i> App Store</a>
                        <a href="javascript:void(0)" class="btn btn-secondary btn-lg mb-5 mb-lg-0"><i class="fa fa-android fa-1x me-2"></i> Google Play</a>
                        <a href="javascript:void(0)" class="btn btn-info btn-lg mb-5 mb-lg-0"><i class="fa fa-windows fa-1x me-2"></i> Windows</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--/Section-->

<!--Section-->
{{-- <section class="sptb bg-white">
    <div class="container">
        <div class="section-title">
            <h2>Blog News</h2>
            <p class="fs-18 lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
        <div id="defaultCarousel" class="owl-carousel Card-owlcarousel owl-carousel-icons">
            <div class="item">
                <div class="card mb-0">
                    <div class="card-body p-4">
                        <div class="item7-card-img">
                            <a href="javascript:void(0)"></a>
                            <img src="../../assets/images/media/0-1.jpg" alt="img" class="cover-image br-7 mb-4 border">
                        </div>
                        <div class="item7-card-desc d-flex mb-2">
                            <a href="javascript:void(0)"><i class="fe fe-calendar me-2"></i>Dec-03-2018</a>
                            <div class="ms-auto">
                                <a href="javascript:void(0)"><i class="fe fe-message-circle me-2"></i>4 Comments</a>
                            </div>
                        </div>
                        <a href="blog-details.html"><h4 class="font-weight-semibold mb-2 mt-3">Nemo enim ipsam voluptatem</h4></a>
                        <p class="mb-4">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                        <a class="btn btn-primary" href="blog-details.html">Read More <i class="fe fe-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card mb-0">
                    <div class="card-body p-4">
                        <div class="item7-card-img">
                            <a href="javascript:void(0)"></a>
                            <img src="../../assets/images/media/0-2.jpg" alt="img" class="cover-image br-7 mb-4 border">
                        </div>
                        <div class="item7-card-desc d-flex mb-2">
                            <a href="javascript:void(0)"><i class="fe fe-calendar me-2"></i>Nov-28-2018</a>
                            <div class="ms-auto">
                                <a href="javascript:void(0)"><i class="fe fe-message-circle me-2"></i>2 Comments</a>
                            </div>
                        </div>
                        <a href="blog-details.html"><h4 class="font-weight-semibold mb-2 mt-3">Sed ut perspiciatis unde iste</h4></a>
                        <p class="mb-4">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                        <a class="btn btn-primary" href="blog-details.html">Read More <i class="fe fe-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card mb-0">
                    <div class="card-body p-4">
                        <div class="item7-card-img">
                            <a href="javascript:void(0)"></a>
                            <img src="../../assets/images/media/0-3.jpg" alt="img" class="cover-image br-7 mb-4 border">
                        </div>
                        <div class="item7-card-desc d-flex mb-2">
                            <a href="javascript:void(0)"><i class="fe fe-calendar me-2"></i>Nov-19-2018</a>
                            <div class="ms-auto">
                                <a href="javascript:void(0)"><i class="fe fe-message-circle me-2"></i>8 Comments</a>
                            </div>
                        </div>
                        <a href="blog-details.html"><h4 class="font-weight-semibold mb-2 mt-3">At vero eos et accusamus</h4></a>
                        <p class="mb-4">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                        <a class="btn btn-primary" href="blog-details.html">Read More <i class="fe fe-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card mb-0">
                    <div class="card-body p-4">
                        <div class="item7-card-img">
                            <a href="javascript:void(0)"></a>
                            <img src="../../assets/images/media/0-4.jpg" alt="img" class="cover-image br-7 mb-4 border">
                        </div>
                        <div class="item7-card-desc d-flex mb-2">
                            <a href="javascript:void(0)"><i class="fe fe-calendar me-2"></i>Dec-03-2018</a>
                            <div class="ms-auto">
                                <a href="javascript:void(0)"><i class="fe fe-message-circle me-2"></i>4 Comments</a>
                            </div>
                        </div>
                        <a href="blog-details.html"><h4 class="font-weight-semibold mb-2 mt-3">Excepteur occaecat cupidatat</h4></a>
                        <p class="mb-4">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                        <a class="btn btn-primary" href="blog-details.html">Read More <i class="fe fe-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card mb-0">
                    <div class="card-body p-4">
                        <div class="item7-card-img">
                            <a href="javascript:void(0)"></a>
                            <img src="../../assets/images/media/0-5.jpg" alt="img" class="cover-image br-7 mb-4 border">
                        </div>
                        <div class="item7-card-desc d-flex mb-2">
                            <a href="javascript:void(0)"><i class="fe fe-calendar me-2"></i>Nov-28-2018</a>
                            <div class="ms-auto">
                                <a href="javascript:void(0)"><i class="fe fe-message-circle me-2"></i>2 Comments</a>
                            </div>
                        </div>
                        <a href="blog-details.html"><h4 class="font-weight-semibold mb-2 mt-3">Sed ut perspiciatis iste</h4></a>
                        <p class="mb-4">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                        <a class="btn btn-primary" href="blog-details.html">Read More <i class="fe fe-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card mb-0">
                    <div class="card-body p-4">
                        <div class="item7-card-img">
                            <a href="javascript:void(0)"></a>
                            <img src="../../assets/images/media/0-6.jpg" alt="img" class="cover-image br-7 mb-4 border">
                        </div>
                        <div class="item7-card-desc d-flex mb-2">
                            <a href="javascript:void(0)"><i class="fe fe-calendar me-2"></i>Nov-19-2018</a>
                            <div class="ms-auto">
                                <a href="javascript:void(0)"><i class="fe fe-message-circle me-2"></i>8 Comments</a>
                            </div>
                        </div>
                        <a href="blog-details.html"><h4 class="font-weight-semibold mb-2 mt-3">At vero accusamus et iusto</h4></a>
                        <p class="mb-4">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                        <a class="btn btn-primary" href="blog-details.html">Read More <i class="fe fe-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--/Section-->

<!--Section-->
{{-- <section class="cover-image sptb bg-background-1" data-bs-image-src="../../assets/images/banners/banner5.jpg">
    <div class="content-text mb-0">
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
    </div>
</section> --}}
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
