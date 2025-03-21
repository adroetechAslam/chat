
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
                            <img src="{{asset('build/assets/images/media/pngs/4.png')}}"
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
                                        <div class="mb-5 d-flex justify-content-center">
                                            <a href="{{url('index')}}" class="header-logo"><img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}"
                                                class="desktop-logo ht-40" alt="logo">
                                                <img src="{{asset('build/assets/images/brand-logos/desktop-white.png')}}"
                                                class="desktop-white ht-40" alt="logo">
                                            </a>
                                        </div>
                                        <div class="card-sigin">
                                            <div class="main-signin-header">
                                                <div class="mx-auto text-center mb-2">
                                                    <img alt="" class="avatar avatar-xxl rounded-circle  mt-2 mb-2 " src="{{asset('build/assets/images/faces/6.jpg')}}">
                                                </div>
                                                <div class="mx-auto text-center mt-3 mg-b-20">
                                                    <h6 class="mg-b-10 fs-17">Petey Cruiser</h6>
                                                    <p class="fs-13 text-muted">Enter Your Password to View your Screen</p>
                                                </div>
                                                <form>
                                                    <div class="form-group mb-4">
                                                        <input class="form-control" placeholder="Enter your password" type="password" value="">
                                                    </div>
                                                    <a href="{{url('index')}}" class="btn btn-primary w-100">Unlock</a>
                                                </form>
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
