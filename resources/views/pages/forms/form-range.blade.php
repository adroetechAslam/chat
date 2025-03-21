
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

        <!-- noui Slider -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/nouislider/nouislider.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Range Slider</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Form Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Range Slider</li>
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

                    <!-- Start:: row-1 -->
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Default Range
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input type="range" class="form-range" id="customRange1">
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;input type="range" class="form-range" id="customRange1"&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Disabled Range
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input type="range" class="form-range" id="disabledRange" disabled>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;input type="range" class="form-range" id="disabledRange" disabled&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Range With Min and Max Values
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input type="range" class="form-range" min="0" max="5" id="customRange2">
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;input type="range" class="form-range" min="0" max="5" id="customRange2"&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Range With Steps
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3"&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <h6 class="mb-3">noUiSlider:</h6>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Default-Styling
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="slider"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Fit Handles
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="slider-fit"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Rounded Styling
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="slider-round"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Square Styling
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="slider-square"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Color Picker Slider</div>
                                </div>
                                <div class="card-body">
                                    <div class="sliders" id="color1"></div>
                                    <div class="sliders" id="color2"></div>
                                    <div class="sliders" id="color3"></div>
                                    <div id="result"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Locking Sliders</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="slider1"></div>
                                        <div id="slider1-span" class="my-1"></div>
                                        <div id="slider2"></div>
                                        <div id="slider2-span" class="my-1"></div>
                                        <div id="slider3"></div>
                                        <div id="slider3-span" class="my-1"></div>
                                        <button id="lockbutton" class="btn btn-sm btn-primary float-end">Lock</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Merging tooltips slider</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="merging-tooltips"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Non Linear Slider</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="nonlinear"></div>
                                            <div id="lower-value" class="mt-5"></div>
                                            <div id="upper-value" class="mt-2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Sliding Handles Tooltips</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="slider-hide"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-4 -->
                    <div  class="row">
                        <div class="col-xl-10">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Colored Connect Elements</div>
                                </div>
                                <div class="card-body">
                                    <div class="slider" id="color-slider"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Slider Toggle</div>
                                </div>
                                <div class="card-body">
                                    <div id="slider-toggle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

                    <!-- Start:: row-5 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Toggle Movement By Clicking Pips</div>
                                </div>
                                <div class="card-body pb-5">
                                    <div id="slider-pips"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Soft Limits</div>
                                </div>
                                <div class="card-body pb-5">
                                    <div id="soft"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-5 -->

                    <!-- Start:: row-6 -->
                    <h6 class="mb-3">noUiSlider Colors:</h6>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Primary
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="primary-colored-slider"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Secondary
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="secondary-colored-slider"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Warning
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="warning-colored-slider"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Info
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="info-colored-slider"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Success
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="success-colored-slider"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Danger
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="danger-colored-slider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-6 -->

@endsection

@section('scripts')
	
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

        <!-- noUiSlider JS -->
        <script src="{{asset('build/assets/libs/nouislider/nouislider.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/wnumb/wNumb.min.js')}}"></script>
        @vite('resources/assets/js/nouislider.js')

@endsection
