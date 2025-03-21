
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">About Us</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
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

                    <div class="container about-container">
                        <!-- Start::row-1 -->
                        <div class="row about-main mb-5">
                            <div class="col-lg-8 col-md-8 col-sm-12 text-center">
                                <h1 class="mb-3 fw-semibold fs-46">Hello! This is <span class="text-primary fs-56">Valex.</span></h1>
                                <p class="leading-normal lead-1">Majority have suffered alteration in some form.</p>
                                <p class="leading-normal  fs-16">There are many variations of passages of Lorem Ipsum available, but the majority have suffered  by injected humour, or randomised words which don't look even slightly believable.
                                    If you are going to use a passage of Lorem Ipsum you are going to use a passage of Lorem Ipsum</p>
                            </div>
                        </div>
                        <!--End::row-1 -->

                        <!-- Start::row-2 -->
                        <div class="row mb-5 rounded-5">
                            <p><img src="{{asset('build/assets/images/media/media-74.jpg')}}" class="rounded-3 w-100"  alt="image"></p>
                        </div>
                        <!--End::row-2 -->

                        <!-- Start::row-3 -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card mt-7">
                                    <div class="card-body p-0 p-lg-5 text-dark">
                                        <div class="statistics-info p-4">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="">
                                                        <h2 class="fw-bold mb-4 text-dark">We Help to <span class="text-primary">Build</span> Your Dream Project.</h2>
                                                        <h5 class="leading-normal fw-normal mb-4 text-dark">majority have suffered alteration in some form, by injected humour</h5>
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered by injected humour, or randomised words which don't look even slightly believable.</p>
                                                        <p>All the Lorem Ipsum generators on the Internet tend to repeat Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                        <p> If you are going to use a passage of Lorem Ipsum, you need to as necessary All the Lorem Ipsum generators on the Internet tend to repeat Various versions have evolved over the years, sometimes by
                                                            accident, sometimes on purpose (injected humour and the like).</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="text-center">
                                                        <img src="{{asset('build/assets/images/media/pngs/7.png')}}" alt="" class="w-100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End::row-3 -->

                        <!-- Start::row-4 -->
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="card border-0 bg-primary-transparent">
                                    <div class="card-body">
                                        <div class="counter-status md-mb-0">
                                            <div class="text-center mb-1">
                                                <svg class="about-icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#0162e8" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99"/><path fill="#5a9bf4" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z"/></svg>
                                            </div>
                                            <div class="text-center">
                                                <h3 class="counter mb-2">256</h3>
                                                <h6 class="mb-0 text-muted fs-14">Completed Projects</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="card border-0 bg-danger-transparent">
                                    <div class="card-body">
                                        <div class="counter-status md-mb-0">
                                            <div class="text-center mb-1">
                                                <svg class="about-icons" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><circle cx="10" cy="8.5" r="5" fill="#fbb8c7"/><path fill="#fa95ac" d="M13.30884,12.22253C12.42566,13.00806,11.27496,13.5,10,13.5s-2.42566-0.49194-3.30884-1.27747C3.92603,13.48206,2,16.26324,2,19.5c0,0.00018,0,0.00037,0,0.00055C2.00012,20.05267,2.44788,20.50012,3,20.5h14c0.00018,0,0.00037,0,0.00055,0c0.55212-0.00012,0.99957-0.44788,0.99945-1C18,16.26324,16.07397,13.48206,13.30884,12.22253z"/><path fill="#f74f75" d="M18.3335,13.5c-0.26526,0.0003-0.51971-0.10515-0.707-0.293l-1.3335-1.333c-0.38694-0.39399-0.38123-1.02706,0.01275-1.414c0.38897-0.38202,1.01228-0.38202,1.40125,0l0.62647,0.626l1.95953-1.96c0.39399-0.38694,1.02706-0.38123,1.414,0.01275c0.38202,0.38897,0.38202,1.01227,0,1.40125l-2.6665,2.667C18.85321,13.39485,18.59877,13.5003,18.3335,13.5z"/></svg>
                                            </div>
                                            <div class="text-center mb-1">
                                                <h3 class="counter mb-2">7,234</h3>
                                                <h6 class="mb-0 text-muted fs-14">Total Customers</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="card border-0 bg-warning-transparent">
                                    <div class="card-body">
                                        <div class="counter-status md-mb-0">
                                            <div class="text-center mb-1">
                                                <svg class="about-icons" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#ffd79c" d="M12,14.5c-3.26461,0.00094-6.4876-0.73267-9.43018-2.14648C2.22156,12.18802,1.99974,11.83676,2,11.45117V9.5c0.00181-1.65611,1.34389-2.99819,3-3h14c1.65611,0.00181,2.99819,1.34389,3,3v1.95215c0.00003,0.3859-0.22189,0.73741-0.57031,0.90332C18.48677,13.76762,15.26418,14.50051,12,14.5z M21,11.45215L21,11.45215z"/><path fill="#ffbd5a" d="M10,6.5v-1c0.00055-0.55206,0.44794-0.99945,1-1h2c0.55206,0.00055,0.99945,0.44794,1,1v1h2v-1c-0.00183-1.65613-1.34387-2.99817-3-3h-2c-1.65613,0.00183-2.99817,1.34387-3,3v1H10z"/><path fill="#ffe4bd" d="M21.42969,12.35547C18.48676,13.76764,15.26416,14.50049,12,14.5c-3.26459,0.00092-6.48761-0.73267-9.43018-2.14648C2.22156,12.18805,1.99976,11.83673,2,11.45117V18.5c0.00183,1.65613,1.34387,2.99817,3,3h14c1.65613-0.00183,2.99817-1.34387,3-3v-7.04785C22.00006,11.83807,21.77814,12.18958,21.42969,12.35547z"/><path fill="#ffbd5a" d="M8,15.5c-0.55214,0.00014-0.99986-0.44734-1-0.99948C7,14.50035,7,14.50017,7,14.5v-2c0-0.55229,0.44772-1,1-1s1,0.44771,1,1v2c0.00014,0.55214-0.44734,0.99986-0.99948,1C8.00035,15.5,8.00017,15.5,8,15.5z M16,15.5c-0.55214,0.00014-0.99986-0.44734-1-0.99948c0-0.00017,0-0.00035,0-0.00052v-2c0-0.55229,0.44771-1,1-1c0.55228,0,1,0.44771,1,1v2c0.00014,0.55214-0.44734,0.99986-0.99948,1C16.00035,15.5,16.00017,15.5,16,15.5z"/></svg>
                                            </div>
                                            <div class="text-center mb-1">
                                                <h3 class="counter mb-2">846</h3>
                                                <h6 class="mb-0 text-muted fs-14">Available Employeed</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="card border-0 bg-info-transparent">
                                    <div class="card-body">
                                        <div class="counter-status md-mb-0">
                                            <div class="text-center mb-1">
                                                <svg class="about-icons" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><circle cx="12" cy="9.25" r="6" fill="#b8e6f9"/><path fill="#94daf6" d="M19.57391,17.01288L17.00854,12.56l-0.00873,0.00433C15.92511,14.18231,14.08795,15.25,12,15.25c-0.1286,0-0.25439-0.01123-0.38098-0.01923l0.38953,0.66925l2.37408,4.11218c0.13806,0.23914,0.44385,0.32111,0.68304,0.18304c0.07391-0.04266,0.13562-0.10358,0.17938-0.17682l1.32349-2.21844l2.57941-0.0376c0.27612-0.00397,0.4967-0.23108,0.49268-0.5072C19.6394,17.17004,19.61646,17.08667,19.57391,17.01288z"/><path fill="#4ec2f0" d="M11.61896,15.23071c-1.92963-0.12152-3.61176-1.14911-4.62012-2.66864l-2.56421,4.45081c-0.04248,0.07379-0.06549,0.15717-0.06671,0.24231c-0.00397,0.27612,0.21661,0.50323,0.49274,0.5072L7.44,17.79999l1.32355,2.21844c0.0437,0.07324,0.10547,0.13416,0.17938,0.17682c0.23914,0.13806,0.54492,0.05609,0.68298-0.18304L12,15.90002l0.00427-0.00732l-0.38525-0.66193L11.61896,15.23071z"/></svg>
                                            </div>
                                            <div class="text-center mb-1">
                                                <h3 class="counter mb-2">153</h3>
                                                <h6 class="mb-0 text-muted fs-14">Awards won</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End::row-4 -->

                        <!-- Start::row-5 -->
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="card p-3">
                                    <div class="card-body">
                                        <div class="mb-3 text-center about-team">
                                            <img class="rounded-circle avatar avatar-xl" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="image">
                                        </div>
                                        <div class="fs-16 text-center fw-semibold">
                                            Rosen Berg
                                        </div>
                                        <div class="fs-14 text-center text-muted mb-3">
                                            Chief Manager
                                        </div>
                                        <div class="text-center fs-14 mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam similique provident !</div>
                                        <p class="text-center mb-0"><i class="fe fe-facebook text-primary me-3"></i><i class="fe fe-instagram text-success me-3"></i><i class="fe fe-globe text-info"></i></p>
                                        </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="card p-3">
                                    <div class="card-body">
                                        <div class="mb-3 text-center about-team">
                                            <img class="rounded-circle avatar avatar-xl" src="{{asset('build/assets/images/faces/2.jpg')}}" alt="image">
                                        </div>
                                        <div class="fs-16 text-center fw-semibold">
                                            Mclaren mcannen
                                        </div>
                                        <div class="fs-14 text-center text-muted mb-3">
                                            Sales Manager
                                        </div>
                                        <div class="text-center fs-14 mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam similique provident !</div>
                                        <p class="text-center mb-0"><i class="fe fe-facebook text-primary me-3"></i><i class="fe fe-instagram text-success me-3"></i><i class="fe fe-globe text-info"></i></p>
                                        </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="card p-3">
                                    <div class="card-body">
                                        <div class="mb-3 text-center about-team">
                                            <img class="rounded-circle avatar avatar-xl" src="{{asset('build/assets/images/faces/3.jpg')}}" alt="image">
                                        </div>
                                        <div class="fs-16 text-center fw-semibold">
                                            Shimpa Craig
                                        </div>
                                        <div class="fs-14 text-center text-muted mb-3">
                                            Author & writer
                                        </div>
                                        <div class="text-center fs-14 mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam similique provident !</div>
                                        <p class="text-center mb-0"><i class="fe fe-facebook text-primary me-3"></i><i class="fe fe-instagram text-success me-3"></i><i class="fe fe-globe text-info"></i></p>
                                        </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="card p-3">
                                    <div class="card-body">
                                        <div class="mb-3 text-center about-team">
                                            <img class="rounded-circle avatar avatar-xl" src="{{asset('build/assets/images/faces/4.jpg')}}" alt="image">
                                        </div>
                                        <div class="fs-16 text-center fw-semibold">
                                            Limo Peter
                                        </div>
                                        <div class="fs-14 text-center text-muted mb-3">
                                            Operations Head
                                        </div>
                                        <div class="text-center fs-14 mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam similique provident !</div>
                                        <p class="text-center mb-0"><i class="fe fe-facebook text-primary me-3"></i><i class="fe fe-instagram text-success me-3"></i><i class="fe fe-globe text-info"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End::row-5 -->
                    </div>

@endsection

@section('scripts')
	


@endsection
