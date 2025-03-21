
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Blog</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Blog Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
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
                    <div class="row">
                        <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <a href="{{url('blog-details')}}">
                                    <img class="card-img-top w-100 w-100" src="{{asset('build/assets/images/media/media-85.jpg')}}" alt="">
                                </a>
                                <div class="card-body">
                                    <a href="javascript:void(0);" class="mt-4"><h5 class="font-weight-semibold text-dark">Best Place To visit For a Holiday idea of denouncing pleasure?</h5></a>
                                    <p class="mb-0 mt-3">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>

                                </div>
                                <div class="card-footer p-3">
                                    <div class="item7-card-desc d-sm-flex mt-0">
                                        <a href="javascript:void(0);" class="d-flex"><span class="fe fe-user text-muted me-2 fs-17"></span><div class="mt-0 mt-0  font-weight-semibold text-muted">Anna Ogden</div></a>
                                        <div class="d-flex ms-auto">
                                            <a href="javascript:void(0);" class="d-flex me-3"><span class="fe fe-calendar text-muted me-2 fs-17"></span><div class="mt-0 mt-0  font-weight-semibold text-muted">Jan-18-2020</div></a>
                                            <a class="me-0 d-flex" href="javascript:void(0);"><span class="fe fe-message-square text-muted me-2 fs-17"></span><div class="mt-0 mt-0  font-weight-semibold text-muted">12 Comments</div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6  col-sm-6">
                            <div class="card custom-card card-img-top-1">
                                <a href="{{url('blog-details')}}"><img class="card-img-top w-100 w-100" src="{{asset('build/assets/images/media/media-75.jpg')}}" alt=""></a>
                                <div class="card-body pb-0">
                                    <a href="{{url('blog-details')}}"><h4 class="card-title">10 Ways To Immediately Start Selling Products !</h4></a>
                                    <p class="mb-2">Those who do not know how  pursues or desires to  occur in which toil and pain can procure him some great pleasure. To take a trivial example  pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-buil .the great explorer of the truth, the master-buil</p>
                                </div>
                                <div class="item7-card-desc d-flex p-3 align-items-center justify-content-center border-top">
                                    <div class="main-img-user online">
                                    <img alt="avatar" class="avatar avatar-sm" src="{{asset('build/assets/images/faces/9.jpg')}}">
                                    </div>
                                    <div class="main-contact-body ms-1">
                                        <h6 class="fs-14">Jiggel mossin</h6>
                                    </div>
                                    <div class="ms-auto">
                                        <a class="me-0 d-flex" href="javascript:void(0);"><span class="phone font-weight-semibold text-muted"><span class="fe fe-calendar text-muted me-2 fs-16"></span>Aug 01,2021</span></a>
                                    </div>
                                </div>
                                </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6  col-sm-6">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h3 class="card-title">Latest Posts</h3>
                                </div>
                                <div class="card-body pt-1">
                                    <div class="list-catergory1">
                                        <div class="item-list">
                                            <ul class="list-group mb-0">
                                                <li class="list-group-item d-flex">
                                                    <img src="{{asset('build/assets/images/media/media-9.jpg')}}" class="avatar rounded-3 avatar-xl me-3 my-auto" alt="avatar-img">
                                                    <div class="my-auto">
                                                        <span class="d-block fs-14 text-dark fw-semibold">Health</span>
                                                        <a class="text-default ">Health care and fitness awareness</a>
                                                        <small class="d-block text-muted">22 hrs ago</small>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex">
                                                    <img src="{{asset('build/assets/images/media/media-73.jpg')}}" class="avatar rounded-3 avatar-xl me-3 my-auto" alt="avatar-img">
                                                    <div class="my-auto">
                                                        <span class="d-block fs-14 text-dark fw-semibold">Beautician</span>
                                                        <a class="text-default ">Beautification courses are available.</a>
                                                        <small class="d-block text-muted">2 hrs ago</small>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex pt-4">
                                                    <img src="{{asset('build/assets/images/media/media-84.jpg')}}" class="avatar rounded-3 avatar-xl me-3 my-auto" alt="avatar-img">
                                                    <div class="my-auto">
                                                        <span class="d-block fs-14 text-dark fw-semibold">Tourism</span>
                                                        <a class="text-default ">Explore tourism by visitinig places.</a>
                                                        <small class="d-block text-muted">2 day ago</small>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex">
                                                    <img src="{{asset('build/assets/images/media/media-34.jpg')}}" class="avatar rounded-3 avatar-xl me-3 my-auto" alt="avatar-img">
                                                    <div class="my-auto">
                                                        <span class="d-block fs-14 text-dark fw-semibold">Literature</span>
                                                        <a class="text-default ">English and spanish classes in Your way</a>
                                                        <small class="d-block text-muted">1 week ago</small>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex ">
                                                    <img src="{{asset('build/assets/images/media/media-72.jpg')}}" class="avatar rounded-3 avatar-xl me-3 my-auto" alt="avatar-img">
                                                    <div class="my-auto">
                                                        <span class="d-block fs-14 text-dark fw-semibold">Music</span>
                                                        <a class="text-default ">Music in a peaceful way </a>
                                                        <small class="d-block text-muted">1 day ago</small>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!--Start::row-2 -->
                    <div class="row ">
                        <div class="col-xxl-3 col-xl-6 col-lg-6  col-sm-6">
                            <div class="card custom-card card-img-top-1">
                                <a href="{{url('blog-details')}}"><img class="card-img-top w-100 w-100" src="{{asset('build/assets/images/media/media-70.jpg')}}" alt=""></a>
                                <div class="card-body pb-0">
                                    <a href="{{url('blog-details')}}"><h4 class="card-title">How To Become Better With Building In 1 Month !</h4></a>
                                    <p class="card-text mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="item7-card-desc d-flex p-3 align-items-center justify-content-center border-top">
                                    <div class="main-img-user avatar avatar-sm online avatar-rounded">
                                    <img alt="avatar" class="" src="{{asset('build/assets/images/faces/2.jpg')}}">
                                    </div>
                                    <div class="main-contact-body ms-1">
                                        <h6 class="fs-14">Abigail John</h6>
                                    </div>
                                    <div class="ms-auto">
                                        <a class="me-0 d-flex" href="javascript:void(0);"><span class="phone font-weight-semibold text-muted"><span class="fe fe-calendar text-muted me-2 fs-16"></span>Aug 24,2021</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6  col-sm-6">
                            <div class="card custom-card card-img-top-1">
                                <a href="{{url('blog-details')}}"><img class="card-img-top w-100 w-100" src="{{asset('build/assets/images/media/media-71.jpg')}}" alt=""></a>
                                <div class="card-body pb-0">
                                    <a href="{{url('blog-details')}}"><h4 class="card-title">10 Ways To Immediately Start Selling Products !</h4></a>
                                    <p class="card-text mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                <div class="item7-card-desc d-flex p-3 align-items-center justify-content-center border-top">
                                    <div class="main-img-user online">
                                    <img alt="avatar" class="avatar avatar-sm" src="{{asset('build/assets/images/faces/9.jpg')}}">
                                    </div>
                                    <div class="main-contact-body ms-1">
                                        <h6 class="fs-14">Jiggel mossin</h6>
                                    </div>
                                    <div class="ms-auto">
                                        <a class="me-0 d-flex" href="javascript:void(0);"><span class="phone font-weight-semibold text-muted"><span class="fe fe-calendar text-muted me-2 fs-16"></span>Aug 01,2021</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6  col-sm-6">
                            <div class="card custom-card card-img-top-1">
                                <a href="{{url('blog-details')}}"><img class="card-img-top w-100 w-100" src="{{asset('build/assets/images/media/media-35.jpg')}}" alt=""></a>
                                <div class="card-body pb-0">
                                    <a href="{{url('blog-details')}}"><h4 class="card-title">3 Easy Ways To Make Your mobile Faster & Even !</h4></a>
                                    <p class="card-text mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="item7-card-desc d-flex p-3 align-items-center justify-content-center border-top">
                                    <div class="main-img-user online">
                                    <img alt="avatar" class="avatar avatar-sm" src="{{asset('build/assets/images/faces/7.jpg')}}">
                                    </div>
                                    <div class="main-contact-body ms-1">
                                        <h6 class="fs-14">Raven Chanan</h6>
                                    </div>
                                    <div class="ms-auto">
                                        <a class="me-0 d-flex" href="javascript:void(0);"><span class="phone font-weight-semibold text-muted"><span class="fe fe-calendar text-muted me-2 fs-16"></span>Feb 19,2021</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6  col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-header pb-1">
                                    <h3 class="card-title mb-2">Blog AUthors</h3>
                                </div>
                                <div class="card-body p-0 customers mt-1">
                                    <div class="list-group list-lg-group list-group-flush">
                                <a href="javascript:void(0);" class="border-0">
                                        <div class="list-group-item list-group-item-action border-0">
                                            <div class="media mt-0">
                                                <img class="rounded-circle me-3 my-auto avatar avatar-md" src="{{asset('build/assets/images/faces/3.jpg')}}" alt="Image description">
                                                <div class="media-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="mt-0">
                                                            <h5 class="mb-0 fs-13 fw-semibold">Samantha Melon</h5>
                                                            <p class="mb-0 fs-13 text-muted">User ID: #1234</p>
                                                        </div>
                                                        <span class="ms-auto wd-45p fs-16 ">
                                                            <span id="spark1" class="wd-100p"></span>
                                                            <span class="float-end badge ">
                                                            <span class="op-7 text-success font-weight-semibold">8 hrs ago </span>
                                                        </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                        <a href="javascript:void(0);" class="border-0">
                                            <div class="list-group-item list-group-item-action border-0">
                                                <div class="media mt-0">
                                                    <img class="rounded-circle me-3 my-auto avatar avatar-md" src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Image description">
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-1">
                                                                <h5 class="mb-0 fs-13 fw-semibold">Allie Grater</h5>
                                                                <p class="mb-0 fs-13 text-muted">User ID: #1234</p>
                                                            </div>
                                                            <span class="ms-auto wd-45p fs-16 ">
                                                                <span id="spark2" class="wd-100p"></span>
                                                                <span class="float-end badge ">
                                                                <span class="op-7 text-danger font-weight-semibold">12 hrs ago</span>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="border-0">
                                            <div class="list-group-item list-group-item-action border-0">
                                                <div class="media mt-0">
                                                    <img class="rounded-circle me-3 my-auto avatar avatar-md" src="{{asset('build/assets/images/faces/17.jpg')}}" alt="Image description">
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-1">
                                                                <h5 class="mb-0 fs-13 fw-semibold">Gabe Lackmen</h5>
                                                                <p class="mb-0 fs-13 text-muted">User ID: #1234</p>
                                                            </div>
                                                            <span class="ms-auto wd-45p fs-16 ">
                                                                <span id="spark3" class="wd-100p"></span>
                                                                <span class="float-end badge ">
                                                                <span class="op-7 text-danger font-weight-semibold">1 hr ago</span>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="border-0">
                                            <div class="list-group-item list-group-item-action border-0">
                                                <div class="media mt-0">
                                                    <img class="rounded-circle me-3 my-auto avatar avatar-md" src="{{asset('build/assets/images/faces/15.jpg')}}" alt="Image description">
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-1">
                                                                <h5 class="mb-0 fs-13 fw-semibold">Manuel Labor</h5>
                                                                <p class="mb-0 fs-13 text-muted">User ID: #1234</p>
                                                            </div>
                                                            <span class="ms-auto wd-45p fs-16">
                                                                <span id="spark6" class="wd-100p"></span>
                                                            <span class="float-end badge  ">
                                                            <span class="op-7 text-success font-weight-semibold">3 days ago</span>
                                                        </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:void(0);" class="border-0">
                                            <div class="list-group-item list-group-item-action border-0">
                                                <div class="media mt-0">
                                                    <img class="rounded-circle me-3 my-auto avatar avatar-md" src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Image description">
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-1">
                                                                <h5 class="mb-0 fs-13 fw-semibold">Stephen Nurrisht</h5>
                                                                <p class="mb-0 fs-13 text-muted">User ID: #6547</p>
                                                            </div>
                                                            <span class="ms-auto wd-45p fs-16">
                                                                <span id="spark4" class="wd-100p"></span>
                                                                <span class="float-end badge ">
                                                                <span class="op-7 text-success font-weight-semibold">2 hrs ago</span>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="border-0">
                                            <div class="list-group-item list-group-item-action border-0">
                                                <div class="media mt-0">
                                                    <img class="rounded-circle me-3 my-auto avatar avatar-md" src="{{asset('build/assets/images/faces/13.jpg')}}" alt="Image description">
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-1">
                                                                <h5 class="mb-0 fs-13 fw-semibold">Manuel Labor</h5>
                                                                <p class="mb-0 fs-13 text-muted">User ID: #1234</p>
                                                            </div>
                                                            <span class="ms-auto wd-45p fs-16">
                                                                <span id="spark5" class="wd-100p"></span>
                                                                <span class="float-end badge ">
                                                                <span class="op-7 text-danger font-weight-semibold">1 day ago</span>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-2 -->
                    
                    <ul class="pagination product-pagination ms-auto float-end">
                        <li class="page-item page-prev disabled">
                            <a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                        <li class="page-item page-next">
                            <a class="page-link" href="javascript:void(0);">Next</a>
                        </li>
                    </ul>

@endsection

@section('scripts')
	


@endsection
