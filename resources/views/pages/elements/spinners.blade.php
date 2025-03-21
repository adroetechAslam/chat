
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Spinners</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Spinners</li>
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
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Border spinner
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="spinner-border" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="spinner-border" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Colors
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="spinner-border text-primary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-secondary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-success" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-danger" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-warning" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-info" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-light" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-dark" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="spinner-border text-primary" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-border text-secondary" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-border text-success" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-border text-danger" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-border text-warning" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-border text-info" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-border text-light" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-border text-dark" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Growing spinner
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="spinner-grow" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="spinner-grow" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Growing spinner
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="spinner-grow text-primary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-secondary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-success" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-danger" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-warning" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-info" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-light" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-dark" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="spinner-grow text-primary" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-grow text-secondary" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-grow text-success" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-grow text-danger" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-grow text-warning" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-grow text-info" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-grow text-light" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-grow text-dark" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Alignment Flex
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-center mb-4">
                                        <div class="spinner-border" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <strong>Loading...</strong>
                                        <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="d-flex justify-content-center mb-4"&gt;
    &lt;div class="spinner-border" role="status"&gt;
        &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="d-flex align-items-center"&gt;
    &lt;strong&gt;Loading...&lt;/strong&gt;
    &lt;div class="spinner-border ms-auto" role="status" aria-hidden="true"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Alignment Float
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="clearfix mb-4">
                                        <div class="spinner-border float-end" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="spinner-border float-start" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="clearfix mb-4"&gt;
    &lt;div class="spinner-border float-end" role="status"&gt;
        &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="clearfix"&gt;
    &lt;div class="spinner-border float-start" role="status"&gt;
        &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-4 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Alignment Text center
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <div class="spinner-border" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="text-center"&gt;
    &lt;div class="spinner-border" role="status"&gt;
        &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Spinner Sizes
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body d-flex align-items-center">
                                    <div class="spinner-border spinner-border-sm me-4" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow spinner-grow-sm me-4" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border me-4" style="width: 3rem; height: 3rem;"
                                        role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="spinner-border spinner-border-sm me-4" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-grow spinner-grow-sm me-4" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-border me-4" style="width: 3rem; height: 3rem;"
    role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Alignment Margin
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="spinner-border m-5" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="spinner-border m-5" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

                    <!-- Start:: row-5 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Buttons</div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button class="btn btn-primary-light" type="button" disabled>
                                            <span class="spinner-border spinner-border-sm align-middle" role="status"
                                                aria-hidden="true"></span>
                                            <span class="visually-hidden">Loading...</span>
                                        </button>
                                        <button class="btn btn-primary-light" type="button" disabled>
                                            <span class="spinner-border spinner-border-sm align-middle" role="status"
                                                aria-hidden="true"></span>
                                            Loading...
                                        </button>
                                        <button class="btn btn-primary-light" type="button" disabled>
                                            <span class="spinner-grow spinner-grow-sm align-middle" role="status"
                                                aria-hidden="true"></span>
                                            <span class="visually-hidden">Loading...</span>
                                        </button>
                                        <button class="btn btn-primary-light" type="button" disabled>
                                            <span class="spinner-grow spinner-grow-sm align-middle" role="status"
                                                aria-hidden="true"></span>
                                            Loading...
                                        </button>
                                        <button class="btn btn-secondary-light" type="button" disabled>
                                            <span class="spinner-grow spinner-grow-sm align-middle" role="status"
                                                aria-hidden="true"></span>
                                            Loading...
                                        </button>
                                        <button class="btn btn-success-light" type="button" disabled>
                                            <span class="spinner-grow spinner-grow-sm align-middle" role="status"
                                                aria-hidden="true"></span>
                                            Loading...
                                        </button>
                                        <button class="btn btn-info-light" type="button" disabled>
                                            <span class="spinner-grow spinner-grow-sm align-middle" role="status"
                                                aria-hidden="true"></span>
                                            Loading...
                                        </button>
                                        <button class="btn btn-warning-light" type="button" disabled>
                                            <span class="spinner-grow spinner-grow-sm align-middle" role="status"
                                                aria-hidden="true"></span>
                                            Loading...
                                        </button>
                                        <button class="btn btn-danger-light" type="button" disabled>
                                            <span class="spinner-grow spinner-grow-sm align-middle" role="status"
                                                aria-hidden="true"></span>
                                            Loading...
                                        </button>
                                        <button class="btn btn-light" type="button" disabled>
                                            <span class="spinner-grow spinner-grow-sm align-middle" role="status"
                                                aria-hidden="true"></span>
                                            Loading...
                                        </button>
                                        <button class="btn btn-dark text-fixed-white" type="button" disabled>
                                            <span class="spinner-grow spinner-grow-sm align-middle" role="status"
                                                aria-hidden="true"></span>
                                            Loading...
                                        </button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
    &lt;button class="btn btn-primary-light" type="button" disabled&gt;
        &lt;span class="spinner-border spinner-border-sm align-middle" role="status"
            aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
    &lt;/button&gt;
    &lt;button class="btn btn-primary-light" type="button" disabled&gt;
        &lt;span class="spinner-border spinner-border-sm align-middle" role="status"
            aria-hidden="true"&gt;&lt;/span&gt;
        Loading...
    &lt;/button&gt;
    &lt;button class="btn btn-primary-light" type="button" disabled&gt;
        &lt;span class="spinner-grow spinner-grow-sm align-middle" role="status"
            aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
    &lt;/button&gt;
    &lt;button class="btn btn-primary-light" type="button" disabled&gt;
        &lt;span class="spinner-grow spinner-grow-sm align-middle" role="status"
            aria-hidden="true"&gt;&lt;/span&gt;
        Loading...
    &lt;/button&gt;
    &lt;button class="btn btn-secondary-light" type="button" disabled&gt;
        &lt;span class="spinner-grow spinner-grow-sm align-middle" role="status"
            aria-hidden="true"&gt;&lt;/span&gt;
        Loading...
    &lt;/button&gt;
    &lt;button class="btn btn-success-light" type="button" disabled&gt;
        &lt;span class="spinner-grow spinner-grow-sm align-middle" role="status"
            aria-hidden="true"&gt;&lt;/span&gt;
        Loading...
    &lt;/button&gt;
    &lt;button class="btn btn-info-light" type="button" disabled&gt;
        &lt;span class="spinner-grow spinner-grow-sm align-middle" role="status"
            aria-hidden="true"&gt;&lt;/span&gt;
        Loading...
    &lt;/button&gt;
    &lt;button class="btn btn-warning-light" type="button" disabled&gt;
        &lt;span class="spinner-grow spinner-grow-sm align-middle" role="status"
            aria-hidden="true"&gt;&lt;/span&gt;
        Loading...
    &lt;/button&gt;
    &lt;button class="btn btn-danger-light" type="button" disabled&gt;
        &lt;span class="spinner-grow spinner-grow-sm align-middle" role="status"
            aria-hidden="true"&gt;&lt;/span&gt;
        Loading...
    &lt;/button&gt;
    &lt;button class="btn btn-light" type="button" disabled&gt;
        &lt;span class="spinner-grow spinner-grow-sm align-middle" role="status"
            aria-hidden="true"&gt;&lt;/span&gt;
        Loading...
    &lt;/button&gt;
    &lt;button class="btn btn-dark text-fixed-white" type="button" disabled&gt;
        &lt;span class="spinner-grow spinner-grow-sm align-middle" role="status"
            aria-hidden="true"&gt;&lt;/span&gt;
        Loading...
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-5 -->

@endsection

@section('scripts')
	
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

@endsection
