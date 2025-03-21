
@extends('layouts.custom-master')

@section('styles')



@endsection

@section('content')
	
        <div class="container-fluid custom-page">
            <div class="row bg-white">
                <!-- The image half -->
                <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent-3">
                    <div class="row w-100 mx-auto text-center">
                        <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto w-100">
                            <img src="{{asset('build/assets/images/media/pngs/5.png')}}"
                                class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                        </div>
                    </div>
                </div>
                <!-- The content half -->
                <div class="col-md-6 col-lg-6 col-xl-5 bg-white py-4">
                    <div class="login d-flex align-items-center py-2">
                        <!-- Demo content-->
                        <div class="container p-0">
                            <div class="row">
                                <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                    <div class="card-sigin">
                                        <div class="mb-5 d-flex">
                                            <a href="{{url('index')}}" class="header-logo"><img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}"
                                                class="desktop-logo ht-40" alt="logo">
                                                <img src="{{asset('build/assets/images/brand-logos/desktop-white.png')}}"
                                                class="desktop-white ht-40" alt="logo">
                                            </a>
                                        </div>
                                        <div class="card-sigin">
                                            <div class="main-signup-header">
                                                <h3>Get Started</h3>
                                                <h6 class="fw-medium mb-4 fs-17">It's free to signup and only takes a minute.</h6>
                                                <form>
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">First Name and last Name</label> <input class="form-control"
                                                            placeholder="Enter your first Name and last Name" type="text">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Email</label> <input class="form-control"
                                                            placeholder="Enter your email" type="text">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Password</label> <input class="form-control"
                                                            placeholder="Enter your password" type="password">
                                                    </div>
                                                    <a href="{{url('index')}}"  class="btn btn-primary btn-block w-100">Create Account</a>
                                                    <div class="row mt-3">
                                                        <div class="col-sm-6">
                                                            <button class="btn btn-block w-100 btn-facebook"><i
                                                                    class="fab fa-facebook-f me-2"></i> Signup with
                                                                Facebook</button>
                                                        </div>
                                                        <div class="col-sm-6 mt-2 mt-sm-0">
                                                            <button class="btn btn-info btn-block w-100"><i
                                                                    class="ri-twitter-x-fill me-2"></i> Signup with
                                                                Twitter</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="main-signin-footer mt-5">
                                                    <p>Already have an account? <a href="{{url('signin')}}">Sign In</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End -->
                    </div>
                </div><!-- End -->
            </div>
        </div>

@endsection

@section('scripts')
	
        <!-- Show Password JS -->
        <script src="{{asset('build/assets/show-password.js')}}"></script>

@endsection
