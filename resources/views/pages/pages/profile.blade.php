
@extends('layouts.master')

@section('styles')

        <!-- GLightbox CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Profile</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                        </div>
        
                        <div class="d-flex my-xl-auto right-content align-items-center">
                            <div class="pe-1 mb-xl-0">
                                <button type="button" class="btn btn-info btn-icon me-2 btn-b"><i class="mdi mdi-filter-variant"></i></button>
                            </div>
                            <div class="pe-1 mb-xl-0">
                                <button type="button" class="btn btn-danger btn-icon me-2"><i class="mdi mdi-star"></i></button>
                            </div>
                            <div class="pe-1 mb-xl-0">
                                <button type="button" class="btn btn-warning  btn-icon me-2"><i class="mdi mdi-refresh"></i></button>
                            </div>
                            <div class="mb-xl-0">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuDate" data-bs-toggle="dropdown" aria-expanded="false">
                                        14 Aug 2019
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuDate">
                                    <li><a class="dropdown-item" href="javascript:void(0);">2015</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">2016</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">2017</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">2018</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row row-sm">
                        <div class="col-xl-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="ps-0">
                                        <div class="main-profile-overview">
                                            <span class="avatar avatar-xxl avatar-rounded main-img-user profile-user user-profile">
                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="" class="profile-img">
                                                <a href="javascript:void(0);" class="badge rounded-pill bg-primary avatar-badge profile-edit">
                                                    <input type="file" name="photo" class="position-absolute profile-change w-100 h-100 op-0" id="">
                                                    <i class="fe fe-camera"></i>
                                                </a>
                                            </span>
                                            <div class="d-flex justify-content-between mb-4">
                                                <div>
                                                    <h5 class="main-profile-name">Petey Cruiser</h5>
                                                    <p class="main-profile-name-text text-muted">Web Designer</p>
                                                </div>
                                            </div>
                                            <h6 class="fs-14">Bio</h6>
                                            <div class="main-profile-bio">
                                                pleasure rationally encounter but because pursue consequences that are
                                                extremely painful.occur in which toil and pain can procure him some great
                                                pleasure.. <a href="javascript:void(0);" class="text-primary">More</a>
                                            </div><!-- main-profile-bio -->
                                            <div class="row">
                                                <div class="col-md-4 col mb20">
                                                    <h5 class="fs-17">947</h5>
                                                    <h6 class="text-small text-muted fs-14 mb-0">Followers</h6>
                                                </div>
                                                <div class="col-md-4 col mb20">
                                                    <h5 class="fs-17">583</h5>
                                                    <h6 class="text-small text-muted fs-14 mb-0">Tweets</h6>
                                                </div>
                                                <div class="col-md-4 col mb20">
                                                    <h5 class="fs-17">48</h5>
                                                    <h6 class="text-small text-muted fs-14 mb-0">Posts</h6>
                                                </div>
                                            </div>
                                            <hr class="border-0">
                                            <label class="main-content-label fs-13 mb-4">Social</label>
                                            <div class="main-profile-social-list">
                                                <div class="media">
                                                    <div class="media-icon bg-primary-transparent text-primary">
                                                        <i class="icon ion-logo-github"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <span>Github</span> <a href="javascript:void(0);" class="text-primary">github.com/spruko</a>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="media-icon bg-success-transparent text-success">
                                                        <i class="ri-twitter-x-fill"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <span>Twitter</span> <a href="javascript:void(0);" class="text-primary">twitter.com/spruko.me</a>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="media-icon bg-info-transparent text-info">
                                                        <i class="icon ion-logo-linkedin"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <span>Linkedin</span> <a href="javascript:void(0);" class="text-primary">linkedin.com/in/spruko</a>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="media-icon bg-danger-transparent text-danger">
                                                        <i class="icon ion-md-link"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <span>My Portfolio</span> <a href="javascript:void(0);" class="text-primary">spruko.com/</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="border-0">
                                            <h6 class="fs-14">Skills</h6>
                                            <div class="skill-bar mb-4 clearfix mt-3">
                                                <span>HTML5 / CSS3</span>
                                                <div class="progress mt-2">
                                                    <div class="progress-bar bg-primary-gradient" role="progressbar"
                                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 85%"></div>
                                                </div>
                                            </div>
                                            <!--skill bar-->
                                            <div class="skill-bar mb-4 clearfix">
                                                <span>Javascript</span>
                                                <div class="progress mt-2">
                                                    <div class="progress-bar bg-danger-gradient" role="progressbar"
                                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 89%"></div>
                                                </div>
                                            </div>
                                            <!--skill bar-->
                                            <div class="skill-bar mb-4 clearfix">
                                                <span>Bootstrap</span>
                                                <div class="progress mt-2">
                                                    <div class="progress-bar bg-success-gradient" role="progressbar"
                                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 80%"></div>
                                                </div>
                                            </div>
                                            <!--skill bar-->
                                            <div class="skill-bar clearfix">
                                                <span>Coffee</span>
                                                <div class="progress mt-2">
                                                    <div class="progress-bar bg-info-gradient" role="progressbar"
                                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 95%"></div>
                                                </div>
                                            </div>
                                            <!--skill bar-->
                                        </div><!-- main-profile-overview -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="row row-sm">
                                <div class="col-sm-12 col-lg-4 col-md-12">
                                    <div class="card ">
                                        <div class="card-body">
                                            <div class="counter-status d-flex md-mb-0">
                                                <div class="counter-icon bg-primary-transparent">
                                                    <i class="icon-layers text-primary"></i>
                                                </div>
                                                <div class="ms-auto">
                                                    <h5 class="fs-13">Orders</h5>
                                                    <h2 class="mb-0 fs-22 mb-1 mt-1">1,587</h2>
                                                    <p class="text-muted mb-0 fs-11"><i
                                                            class="si si-arrow-up-circle text-success me-1"></i>increase</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-4 col-md-12">
                                    <div class="card ">
                                        <div class="card-body">
                                            <div class="counter-status d-flex md-mb-0">
                                                <div class="counter-icon bg-danger-transparent">
                                                    <i class="icon-paypal text-danger"></i>
                                                </div>
                                                <div class="ms-auto">
                                                    <h5 class="fs-13">Revenue</h5>
                                                    <h2 class="mb-0 fs-22 mb-1 mt-1">46,782</h2>
                                                    <p class="text-muted mb-0 fs-11"><i
                                                            class="si si-arrow-up-circle text-success me-1"></i>increase</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-4 col-md-12">
                                    <div class="card ">
                                        <div class="card-body">
                                            <div class="counter-status d-flex md-mb-0">
                                                <div class="counter-icon bg-success-transparent">
                                                    <i class="icon-rocket text-success"></i>
                                                </div>
                                                <div class="ms-auto">
                                                    <h5 class="fs-13">Product sold</h5>
                                                    <h2 class="mb-0 fs-22 mb-1 mt-1">1,890</h2>
                                                    <p class="text-muted mb-0 fs-11"><i
                                                            class="si si-arrow-up-circle text-success me-1"></i>increase</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="tabs-menu ">
                                        <!-- Tabs -->
                                        <ul class="nav nav-tabs profile navtab-custom panel-tabs">
                                            <li class="">
                                                <a href="#home" data-bs-toggle="tab" class="active" aria-expanded="true"> <span
                                                        class="visible-xs"><i
                                                            class="las la-user-circle fs-16 me-1"></i></span> <span
                                                        class="hidden-xs">ABOUT ME</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="#gallery" data-bs-toggle="tab" aria-expanded="false"> <span
                                                        class="visible-xs"><i class="las la-images fs-15 me-1"></i></span>
                                                    <span class="hidden-xs">GALLERY</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="#friends01" data-bs-toggle="tab" aria-expanded="false"> <span
                                                        class="visible-xs"><i class="las la-life-ring fs-16 me-1"></i></span>
                                                    <span class="hidden-xs">FRIENDS</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="#settings" data-bs-toggle="tab" aria-expanded="false"> <span
                                                        class="visible-xs"><i class="las la-cog fs-16 me-1"></i></span>
                                                    <span class="hidden-xs">SETTINGS</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content border border-top-0 p-4 br-dark">
                                        <div class="tab-pane border-0 p-0 active" id="home">
                                            <h4 class="fs-15 text-uppercase mb-3">BIO Data</h4>
                                            <p>Hi I'm Petey Cruiser,has been the industry's standard dummy
                                                text ever since the 1500s, when an unknown printer took a galley of type.
                                                Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                                justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis
                                                eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum
                                                semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor
                                                eu, consequat vitae, eleifend ac, enim.</p>
                                            <div>
                                                <h4 class="fs-15 text-uppercase mt-3">Experience</h4>
                                                <div class=" p-t-10">
                                                    <h5 class="text-primary fs-14">Lead designer / Developer</h5>
                                                    <p class="">websitename.com</p>
                                                    <p><b>2010-2015</b></p>
                                                    <p class="text-muted fs-13">Lorem Ipsum is simply dummy text of
                                                        the printing and typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the 1500s, when an unknown
                                                        printer took a galley of type and scrambled it to make a type
                                                        specimen book.</p>
                                                </div>
                                                <div class="">
                                                    <h5 class="text-primary fs-14">Senior Graphic Designer</h5>
                                                    <p class="">coderthemes.com</p>
                                                    <p><b>2007-2009</b></p>
                                                    <p class="text-muted fs-13 mb-0">Lorem Ipsum is simply dummy text of the
                                                        printing and typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the 1500s, when an unknown
                                                        printer took a galley of type and scrambled it to make a type
                                                        specimen book.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane border-0 p-0" id="gallery">
                                            <div class="row">
                                                <div class="col-xxl-3 col-sm-6 col-12">
                                                    <div class="card overflow-hidden">
                                                        <a href="{{asset('build/assets/images/media/media-71.jpg')}}" class="glightbox card shadow-none" data-gallery="gallery1">
                                                            <img src="{{asset('build/assets/images/media/media-71.jpg')}}" alt="image" >
                                                        </a>
                                                        <h4 class="text-center fs-14 mt-3 mb-0">Gallary Image</h4>
                                                        <div class="ga-border"></div>
                                                        <p class="text-muted text-center"><small>Photography</small></p>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-sm-6 col-12"> 
                                                    <div class="card overflow-hidden"> 
                                                        <a href="{{asset('build/assets/images/media/media-70.jpg')}}" class="glightbox card shadow-none" data-gallery="gallery1">
                                                            <img src="{{asset('build/assets/images/media/media-70.jpg')}}" alt="image" >
                                                        </a>
                                                        <h4 class="text-center fs-14 mt-3 mb-0">Gallary Image</h4>
                                                        <div class="ga-border"></div>
                                                        <p class="text-muted text-center"><small>Photography</small></p>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-sm-6 col-12">
                                                    <div class="card overflow-hidden"> 
                                                        <a href="{{asset('build/assets/images/media/media-69.jpg')}}" class="glightbox card shadow-none" data-gallery="gallery1">
                                                            <img src="{{asset('build/assets/images/media/media-69.jpg')}}" alt="image" >
                                                        </a>
                                                        <h4 class="text-center fs-14 mt-3 mb-0">Gallary Image</h4>
                                                        <div class="ga-border"></div>
                                                        <p class="text-muted text-center"><small>Photography</small></p>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-sm-6 col-12">
                                                    <div class="card overflow-hidden"> 
                                                        <a href="{{asset('build/assets/images/media/media-68.jpg')}}" class="glightbox card shadow-none" data-gallery="gallery1">
                                                            <img src="{{asset('build/assets/images/media/media-68.jpg')}}" alt="image" >
                                                        </a>
                                                        <h4 class="text-center fs-14 mt-3 mb-0">Gallary Image</h4>
                                                        <div class="ga-border"></div>
                                                        <p class="text-muted text-center"><small>Photography</small></p>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-sm-6 col-12">
                                                    <div class="card overflow-hidden"> 
                                                        <a href="{{asset('build/assets/images/media/media-67.jpg')}}" class="glightbox card shadow-none" data-gallery="gallery1">
                                                            <img src="{{asset('build/assets/images/media/media-67.jpg')}}" alt="image" >
                                                        </a>
                                                        <h4 class="text-center fs-14 mt-3 mb-0">Gallary Image</h4>
                                                        <div class="ga-border"></div>
                                                        <p class="text-muted text-center"><small>Photography</small></p>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-sm-6 col-12">
                                                    <div class="card overflow-hidden"> 
                                                        <a href="{{asset('build/assets/images/media/media-66.jpg')}}" class="glightbox card shadow-none" data-gallery="gallery1">
                                                            <img src="{{asset('build/assets/images/media/media-66.jpg')}}" alt="image" >
                                                        </a>
                                                        <h4 class="text-center fs-14 mt-3 mb-0">Gallary Image</h4>
                                                        <div class="ga-border"></div>
                                                        <p class="text-muted text-center"><small>Photography</small></p>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-sm-6 col-12">
                                                    <div class="card overflow-hidden"> 
                                                        <a href="{{asset('build/assets/images/media/media-65.jpg')}}" class="glightbox card shadow-none" data-gallery="gallery1">
                                                            <img src="{{asset('build/assets/images/media/media-65.jpg')}}" alt="image" >
                                                        </a>
                                                        <h4 class="text-center fs-14 mt-3 mb-0">Gallary Image</h4>
                                                        <div class="ga-border"></div>
                                                        <p class="text-muted text-center"><small>Photography</small></p>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-sm-6 col-12">
                                                    <div class="card overflow-hidden"> 
                                                        <a href="{{asset('build/assets/images/media/media-36.jpg')}}" class="glightbox card shadow-none" data-gallery="gallery1">
                                                            <img src="{{asset('build/assets/images/media/media-36.jpg')}}" alt="image" >
                                                        </a>
                                                        <h4 class="text-center fs-14 mt-3 mb-0">Gallary Image</h4>
                                                        <div class="ga-border"></div>
                                                        <p class="text-muted text-center"><small>Photography</small></p>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-sm-6 col-12">
                                                    <div class="card overflow-hidden"> 
                                                        <a href="{{asset('build/assets/images/media/media-66.jpg')}}" class="glightbox card shadow-none" data-gallery="gallery1">
                                                            <img src="{{asset('build/assets/images/media/media-66.jpg')}}" alt="image" >
                                                        </a>
                                                        <h4 class="text-center fs-14 mt-3 mb-0">Gallary Image</h4>
                                                        <div class="ga-border"></div>
                                                        <p class="text-muted text-center"><small>Photography</small></p>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-sm-6 col-12">
                                                    <div class="card overflow-hidden"> 
                                                        <a href="{{asset('build/assets/images/media/media-65.jpg')}}" class="glightbox card shadow-none" data-gallery="gallery1">
                                                            <img src="{{asset('build/assets/images/media/media-65.jpg')}}" alt="image" >
                                                        </a>
                                                        <h4 class="text-center fs-14 mt-3 mb-0">Gallary Image</h4>
                                                        <div class="ga-border"></div>
                                                        <p class="text-muted text-center"><small>Photography</small></p>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-sm-6 col-12">
                                                    <div class="card overflow-hidden"> 
                                                        <a href="{{asset('build/assets/images/media/media-36.jpg')}}" class="glightbox card shadow-none" data-gallery="gallery1">
                                                            <img src="{{asset('build/assets/images/media/media-36.jpg')}}" alt="image" >
                                                        </a>
                                                        <h4 class="text-center fs-14 mt-3 mb-0">Gallary Image</h4>
                                                        <div class="ga-border"></div>
                                                        <p class="text-muted text-center"><small>Photography</small></p>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-sm-6 col-12">
                                                    <div class="card overflow-hidden"> 
                                                        <a href="{{asset('build/assets/images/media/media-35.jpg')}}" class="glightbox card shadow-none" data-gallery="gallery1">
                                                            <img src="{{asset('build/assets/images/media/media-35.jpg')}}" alt="image" >
                                                        </a>
                                                        <h4 class="text-center fs-14 mt-3 mb-0">Gallary Image</h4>
                                                        <div class="ga-border"></div>
                                                        <p class="text-muted text-center"><small>Photography</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane border-0 p-0" id="friends01" role="tabpanel">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4">
                                                    <div class="card custom-card border shadow-none">
                                                        <div class="card-body  user-lock text-center">
                                                            <div class="dropdown float-end">
                                                                <a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
                                                                <div class="dropdown-menu shadow"> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2"></i>
                                                                        Message</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2"></i> Edit</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                            <a href="{{url('profile')}}">
                                                                <img alt="avatar" class="rounded-circle" src="{{asset('build/assets/images/faces/1.jpg')}}">
                                                                <h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">James Thomas</h5>
                                                                <span class="text-muted">Web designer</span>
                                                                <div class="mt-3 d-flex mx-auto text-center justify-content-center">
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
                                                                        <i class="bx bxl-facebook fs-16 align-middle"></i>
                                                                    </span>
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
                                                                        <i class="ri-twitter-x-fill fs-16 align-middle"></i>
                                                                    </span>
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border">
                                                                        <i class="bx bxl-linkedin fs-16 align-middle"></i>
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4">
                                                    <div class="card custom-card border shadow-none">
                                                        <div class="card-body  user-lock text-center">
                                                            <div class="dropdown float-end">
                                                                <a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
                                                                <div class="dropdown-menu shadow"> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2"></i>
                                                                        Message</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2"></i> Edit</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                            <a href="{{url('profile')}}">
                                                                <img alt="avatar" class="rounded-circle" src="{{asset('build/assets/images/faces/3.jpg')}}">
                                                                <h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Reynante
                                                                    Labares</h5>
                                                                <span class="text-muted">Web designer</span>
                                                                <div class="mt-3 d-flex mx-auto text-center justify-content-center">
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
                                                                        <i class="bx bxl-facebook fs-16 align-middle"></i>
                                                                    </span>
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
                                                                        <i class="ri-twitter-x-fill fs-16 align-middle"></i>
                                                                    </span>
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border">
                                                                        <i class="bx bxl-linkedin fs-16 align-middle"></i>
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4">
                                                    <div class="card custom-card border shadow-none">
                                                        <div class="card-body  user-lock text-center">
                                                            <div class="dropdown float-end">
                                                                <a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
                                                                <div class="dropdown-menu shadow"> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2"></i>
                                                                        Message</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2"></i> Edit</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                            <a href="{{url('profile')}}">
                                                                <img alt="avatar" class="rounded-circle" src="{{asset('build/assets/images/faces/4.jpg')}}">
                                                                <h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Owen
                                                                    Bongcaras</h5>
                                                                <span class="text-muted">Web designer</span>
                                                                <div class="mt-3 d-flex mx-auto text-center justify-content-center">
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
                                                                        <i class="bx bxl-facebook fs-16 align-middle"></i>
                                                                    </span>
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
                                                                        <i class="ri-twitter-x-fill fs-16 align-middle"></i>
                                                                    </span>
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border">
                                                                        <i class="bx bxl-linkedin fs-16 align-middle"></i>
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4">
                                                    <div class="card custom-card border shadow-none">
                                                        <div class="card-body  user-lock text-center">
                                                            <div class="dropdown float-end">
                                                                <a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
                                                                <div class="dropdown-menu shadow"> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2"></i>
                                                                        Message</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2"></i> Edit</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                            <a href="{{url('profile')}}">
                                                                <img alt="avatar" class="rounded-circle" src="{{asset('build/assets/images/faces/8.jpg')}}">
                                                                <h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Stephen
                                                                    Metcalfe</h5>
                                                                <span class="text-muted">Administrator</span>
                                                                <div class="mt-3 d-flex mx-auto text-center justify-content-center">
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
                                                                        <i class="bx bxl-facebook fs-16 align-middle"></i>
                                                                    </span>
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
                                                                        <i class="ri-twitter-x-fill fs-16 align-middle"></i>
                                                                    </span>
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border">
                                                                        <i class="bx bxl-linkedin fs-16 align-middle"></i>
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4">
                                                    <div class="card custom-card border shadow-none">
                                                        <div class="card-body  user-lock text-center">
                                                            <div class="dropdown float-end">
                                                                <a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
                                                                <div class="dropdown-menu shadow"> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2"></i>
                                                                        Message</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2"></i> Edit</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                            <a href="{{url('profile')}}">
                                                                <img alt="avatar" class="rounded-circle" src="{{asset('build/assets/images/faces/2.jpg')}}">
                                                                <h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Socrates
                                                                    Itumay</h5>
                                                                <span class="text-muted">Project Manager</span>
                                                                <div class="mt-3 d-flex mx-auto text-center justify-content-center">
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
                                                                        <i class="bx bxl-facebook fs-16 align-middle"></i>
                                                                    </span>
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
                                                                        <i class="ri-twitter-x-fill fs-16 align-middle"></i>
                                                                    </span>
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border">
                                                                        <i class="bx bxl-linkedin fs-16 align-middle"></i>
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4">
                                                    <div class="card custom-card border shadow-none">
                                                        <div class="card-body  user-lock text-center">
                                                            <div class="dropdown float-end">
                                                                <a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
                                                                <div class="dropdown-menu shadow"> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2"></i>
                                                                        Message</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2"></i> Edit</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                            <a href="{{url('profile')}}">
                                                                <img alt="avatar" class="rounded-circle" src="{{asset('build/assets/images/faces/3.jpg')}}">
                                                                <h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Reynante
                                                                    Labares</h5>
                                                                <span class="text-muted">Web Designer</span>
                                                                <div class="mt-3 d-flex mx-auto text-center justify-content-center">
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
                                                                        <i class="bx bxl-facebook fs-16 align-middle"></i>
                                                                    </span>
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
                                                                        <i class="ri-twitter-x-fill fs-16 align-middle"></i>
                                                                    </span>
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border">
                                                                        <i class="bx bxl-linkedin fs-16 align-middle"></i>
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4">
                                                    <div class="card custom-card border shadow-none mb-xxl-0">
                                                        <div class="card-body  user-lock text-center">
                                                            <div class="dropdown float-end">
                                                                <a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
                                                                <div class="dropdown-menu shadow"> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2"></i>
                                                                        Message</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2"></i> Edit</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                            <a href="{{url('profile')}}">
                                                                <img alt="avatar" class="rounded-circle" src="{{asset('build/assets/images/faces/4.jpg')}}">
                                                                <h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Owen
                                                                    Bongcaras</h5>
                                                                <span class="text-muted">App Developer</span>
                                                                <div class="mt-3 d-flex mx-auto text-center justify-content-center">
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
                                                                        <i class="bx bxl-facebook fs-16 align-middle"></i>
                                                                    </span>
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
                                                                        <i class="ri-twitter-x-fill fs-16 align-middle"></i>
                                                                    </span>
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border">
                                                                        <i class="bx bxl-linkedin fs-16 align-middle"></i>
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4">
                                                    <div class="card custom-card border shadow-none mb-xxl-0">
                                                        <div class="card-body  user-lock text-center">
                                                            <div class="dropdown float-end">
                                                                <a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
                                                                <div class="dropdown-menu shadow"> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2"></i>
                                                                        Message</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2"></i> Edit</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                            <a href="{{url('profile')}}">
                                                                <img alt="avatar" class="rounded-circle" src="{{asset('build/assets/images/faces/8.jpg')}}">
                                                                <h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Stephen
                                                                    Metcalfe</h5>
                                                                <span class="text-muted">Administrator</span>
                                                                <div class="mt-3 d-flex mx-auto text-center justify-content-center">
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
                                                                        <i class="bx bxl-facebook fs-16 align-middle"></i>
                                                                    </span>
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
                                                                        <i class="ri-twitter-x-fill fs-16 align-middle"></i>
                                                                    </span>
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border">
                                                                        <i class="bx bxl-linkedin fs-16 align-middle"></i>
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4">
                                                    <div class="card custom-card border shadow-none mb-0">
                                                        <div class="card-body  user-lock text-center">
                                                            <div class="dropdown float-end">
                                                                <a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
                                                                <div class="dropdown-menu shadow"> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2"></i>
                                                                        Message</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2"></i> Edit</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                            <a href="{{url('profile')}}">
                                                                <img alt="avatar" class="rounded-circle" src="{{asset('build/assets/images/faces/11.jpg')}}">
                                                                <h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Michel
                                                                    Mathew</h5>
                                                                <span class="text-muted">Ui Developer</span>
                                                                <div class="mt-3 d-flex mx-auto text-center justify-content-center">
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
                                                                        <i class="bx bxl-facebook fs-16 align-middle"></i>
                                                                    </span>
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border me-3">
                                                                        <i class="ri-twitter-x-fill fs-16 align-middle"></i>
                                                                    </span>
                                                                    <span class="btn btn-icon btn-outline-primary rounded-circle border">
                                                                        <i class="bx bxl-linkedin fs-16 align-middle"></i>
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane border-0 p-0" id="settings">
                                            <form>
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="FullName">Full Name</label>
                                                    <input type="text" value="John Doe" id="FullName" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="Email">Email</label>
                                                    <input type="email" value="first.last@example.com" id="Email"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="Username">Username</label>
                                                    <input type="text" value="john" id="Username" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="Password">Password</label>
                                                    <input type="password" placeholder="6 - 15 Characters" id="Password"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="RePassword">Re-Password</label>
                                                    <input type="password" placeholder="6 - 15 Characters" id="RePassword"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="AboutMe">About Me</label>
                                                    <textarea id="AboutMe"
                                                        class="form-control">Loren gypsum dolor sit mate, consecrate disciplining lit, tied diam nonunion nib modernism tincidunt it Loretta dolor manga Amalia erst volute. Ur wise denim ad minim venial, quid nostrum exercise ration perambulator suspicious cortisol nil it applique ex ea commodore consequent.</textarea>
                                                </div>
                                                <button class="btn btn-primary waves-effect waves-light w-md"
                                                    type="submit">Save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

@endsection

@section('scripts')
	
        <!-- Gallery JS -->
        <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>
        @vite('resources/assets/js/gallery.js')

        <!-- Profile JS -->
        @vite('resources/assets/js/profile.js')

@endsection
