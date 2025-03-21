
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Toasts</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Toasts</li>
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
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Live example
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-wave" id="liveToastBtn">Show live
                                        toast</button>
                                    <div class="toast-container position-fixed top-0 end-0 p-3">
                                        <div id="liveToast" class="toast" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header text-default">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/favicon.ico')}}" alt="...">
                                                <strong class="me-auto">Valex</strong>
                                                <small>11 mins ago</small>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-primary btn-wave" id="liveToastBtn"&gt;Show live
    toast&lt;/button&gt;
&lt;div class="toast-container position-fixed top-0 end-0 p-3"&gt;
    &lt;div id="liveToast" class="toast" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header text-default"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/favicon.ico')}}" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;small&gt;11 mins ago&lt;/small&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Hello, world! This is a toast message.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Color schemes
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="toast align-items-center text-bg-primary border-0 fade show mb-4"
                                        role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="d-flex">
                                            <div class="toast-body">
                                                Hello, world! This is the Primary toast message.
                                            </div>
                                            <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                                data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <div class="toast align-items-center text-bg-secondary border-0 fade show mb-4"
                                        role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="d-flex">
                                            <div class="toast-body">
                                                Hello, world! This is the Secondary toast.
                                            </div>
                                            <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                                data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <div class="toast align-items-center text-bg-success border-0 fade show mb-4"
                                        role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="d-flex">
                                            <div class="toast-body">
                                                Hello, world! This is the Success toast message.
                                            </div>
                                            <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                                data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <div class="toast align-items-center text-bg-info border-0 fade show"
                                        role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="d-flex">
                                            <div class="toast-body">
                                                Hello, world! This is the info toast message.
                                            </div>
                                            <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                                data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="toast align-items-center text-bg-primary border-0 fade show mb-4"
    role="alert" aria-live="assertive" aria-atomic="true"&gt;
    &lt;div class="d-flex"&gt;
        &lt;div class="toast-body"&gt;
            Hello, world! This is the Primary toast message.
        &lt;/div&gt;
        &lt;button type="button" class="btn-close btn-close-white me-2 m-auto"
            data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="toast align-items-center text-bg-secondary border-0 fade show mb-4"
    role="alert" aria-live="assertive" aria-atomic="true"&gt;
    &lt;div class="d-flex"&gt;
        &lt;div class="toast-body"&gt;
            Hello, world! This is the Secondary toast.
        &lt;/div&gt;
        &lt;button type="button" class="btn-close btn-close-white me-2 m-auto"
            data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="toast align-items-center text-bg-success border-0 fade show mb-4"
    role="alert" aria-live="assertive" aria-atomic="true"&gt;
    &lt;div class="d-flex"&gt;
        &lt;div class="toast-body"&gt;
            Hello, world! This is the Success toast message.
        &lt;/div&gt;
        &lt;button type="button" class="btn-close btn-close-white me-2 m-auto"
            data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="toast align-items-center text-bg-info border-0 fade show"
    role="alert" aria-live="assertive" aria-atomic="true"&gt;
    &lt;div class="d-flex"&gt;
        &lt;div class="toast-body"&gt;
            Hello, world! This is the info toast message.
        &lt;/div&gt;
        &lt;button type="button" class="btn-close btn-close-white me-2 m-auto"
            data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Basic example
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="toast-header text-default">
                                            <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/favicon.ico')}}" alt="...">

                                            <strong class="me-auto">Valex</strong>
                                            <small>11 mins ago</small>
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true"&gt;
    &lt;div class="toast-header text-default"&gt;
        &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/favicon.ico')}}" alt="..."&gt;

        &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
        &lt;small&gt;11 mins ago&lt;/small&gt;
        &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
            aria-label="Close"&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="toast-body"&gt;
        Hello, world! This is a toast message.
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Stacking
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="toast-container position-static">
                                        <div class="toast fade show" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header text-default">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/favicon.ico')}}" alt="...">

                                                <strong class="me-auto">Valex</strong>
                                                <small class="text-muted">just now</small>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                See? Just like this.
                                            </div>
                                        </div>
                                        <div class="toast fade show" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header text-default">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/favicon.ico')}}" alt="...">

                                                <strong class="me-auto">Valex</strong>
                                                <small class="text-muted">2 seconds ago</small>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Heads up, toasts will stack automatically
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="toast-container position-static"&gt;
    &lt;div class="toast fade show" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header text-default"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/favicon.ico')}}" alt="..."&gt;

            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;small class="text-muted"&gt;just now&lt;/small&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            See? Just like this.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="toast fade show" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header text-default"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/favicon.ico')}}" alt="..."&gt;

            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;small class="text-muted"&gt;2 seconds ago&lt;/small&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Heads up, toasts will stack automatically
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Translucent
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="toast-header text-default">
                                            <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/favicon.ico')}}" alt="...">

                                            <strong class="me-auto">Valex</strong>
                                            <small class="text-muted">11 mins ago</small>
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true"&gt;
    &lt;div class="toast-header text-default"&gt;
        &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/favicon.ico')}}" alt="..."&gt;

        &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
        &lt;small class="text-muted"&gt;11 mins ago&lt;/small&gt;
        &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
            aria-label="Close"&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="toast-body"&gt;
        Hello, world! This is a toast message.
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Custom content
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="toast align-items-center fade show mb-3" role="alert"
                                        aria-live="assertive" aria-atomic="true">
                                        <div class="d-flex">
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="my-4 text-muted">
                                            Alternatively, you can also add additional controls and components to
                                            toasts.
                                        </span>
                                    </div>
                                    <div class="toast fade show mt-2" role="alert" aria-live="assertive"
                                        aria-atomic="true">
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                            <div class="mt-2 pt-2 border-top">
                                                <button type="button" class="btn btn-primary btn-sm btn-wave">Take
                                                    action</button>
                                                <button type="button" class="btn btn-secondary btn-sm btn-wave"
                                                    data-bs-dismiss="toast">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="toast align-items-center fade show mb-3" role="alert"
    aria-live="assertive" aria-atomic="true"&gt;
    &lt;div class="d-flex"&gt;
        &lt;div class="toast-body"&gt;
            Hello, world! This is a toast message.
        &lt;/div&gt;
        &lt;button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
            aria-label="Close"&gt;
        &lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div&gt;
    &lt;span class="my-4 text-muted"&gt;
        Alternatively, you can also add additional controls and components to
        toasts.
    &lt;/span&gt;
&lt;/div&gt;
&lt;div class="toast fade show mt-2" role="alert" aria-live="assertive"
    aria-atomic="true"&gt;
    &lt;div class="toast-body"&gt;
        Hello, world! This is a toast message.
        &lt;div class="mt-2 pt-2 border-top"&gt;
            &lt;button type="button" class="btn btn-primary btn-sm btn-wave"&gt;Take
                action&lt;/button&gt;
            &lt;button type="button" class="btn btn-secondary btn-sm btn-wave"
                data-bs-dismiss="toast"&gt;Close&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
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
                                        Color Variants Live
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button type="button" class="btn btn-primary-light me-2 btn-wave" id="primaryToastBtn">Primary</button>
                                        <button type="button" class="btn btn-secondary-light me-2 btn-wave" id="secondaryToastBtn">secondary</button>
                                        <button type="button" class="btn btn-warning-light me-2 btn-wave" id="warningToastBtn">warning</button>
                                        <button type="button" class="btn btn-info-light me-2 btn-wave" id="infoToastBtn">info</button>
                                        <button type="button" class="btn btn-success-light me-2 btn-wave" id="successToastBtn">success</button>
                                        <button type="button" class="btn btn-danger-light me-2 btn-wave" id="dangerToastBtn">danger</button>
                                    </div>
                                    <div class="toast-container position-fixed top-0 end-0 p-3">
                                        <div id="primaryToast" class="toast colored-toast bg-primary-transparent" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="...">
                                                <strong class="me-auto">Valex</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="secondaryToast" class="toast colored-toast bg-secondary-transparent" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-secondary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="...">
                                                <strong class="me-auto">Valex</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="warningToast" class="toast colored-toast bg-warning-transparent" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-warning text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="...">
                                                <strong class="me-auto">Valex</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="infoToast" class="toast colored-toast bg-info-transparent" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-info text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="...">
                                                <strong class="me-auto">Valex</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="successToast" class="toast colored-toast bg-success-transparent" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-success text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="...">
                                                <strong class="me-auto">Valex</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="dangerToast" class="toast colored-toast bg-danger-transparent" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-danger text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="...">
                                                <strong class="me-auto">Valex</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
    &lt;button type="button" class="btn btn-primary-light me-2 btn-wave" id="primaryToastBtn"&gt;Primary&lt;/button&gt;
    &lt;button type="button" class="btn btn-secondary-light me-2 btn-wave" id="secondaryToastBtn"&gt;secondary&lt;/button&gt;
    &lt;button type="button" class="btn btn-warning-light me-2 btn-wave" id="warningToastBtn"&gt;warning&lt;/button&gt;
    &lt;button type="button" class="btn btn-info-light me-2 btn-wave" id="infoToastBtn"&gt;info&lt;/button&gt;
    &lt;button type="button" class="btn btn-success-light me-2 btn-wave" id="successToastBtn"&gt;success&lt;/button&gt;
    &lt;button type="button" class="btn btn-danger-light me-2 btn-wave" id="dangerToastBtn"&gt;danger&lt;/button&gt;
&lt;/div&gt;
&lt;div class="toast-container position-fixed top-0 end-0 p-3"&gt;
    &lt;div id="primaryToast" class="toast colored-toast bg-primary-transparent" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="secondaryToast" class="toast colored-toast bg-secondary-transparent" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-secondary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="warningToast" class="toast colored-toast bg-warning-transparent" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-warning text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="infoToast" class="toast colored-toast bg-info-transparent" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-info text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="successToast" class="toast colored-toast bg-success-transparent" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-success text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="dangerToast" class="toast colored-toast bg-danger-transparent" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-danger text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Solid Background Toasts
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button type="button" class="btn btn-primary me-2 btn-wave" id="solidprimaryToastBtn">Primary</button>
                                        <button type="button" class="btn btn-secondary me-2 btn-wave" id="solidsecondaryToastBtn">secondary</button>
                                        <button type="button" class="btn btn-warning me-2 btn-wave" id="solidwarningToastBtn">warning</button>
                                        <button type="button" class="btn btn-info me-2 btn-wave" id="solidinfoToastBtn">info</button>
                                        <button type="button" class="btn btn-success me-2 btn-wave" id="solidsuccessToastBtn">success</button>
                                        <button type="button" class="btn btn-danger me-2 btn-wave" id="soliddangerToastBtn">danger</button>
                                    </div>
                                    <div class="toast-container position-fixed top-0 end-0 p-3">
                                        <div id="solid-primaryToast" class="toast colored-toast bg-primary text-fixed-white" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="...">
                                                <strong class="me-auto">Valex</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="solid-secondaryToast" class="toast colored-toast bg-secondary text-fixed-white" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-secondary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="...">
                                                <strong class="me-auto">Valex</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="solid-warningToast" class="toast colored-toast bg-warning text-fixed-white" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-warning text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="...">
                                                <strong class="me-auto">Valex</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="solid-infoToast" class="toast colored-toast bg-info text-fixed-white" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-info text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="...">
                                                <strong class="me-auto">Valex</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="solid-successToast" class="toast colored-toast bg-success text-fixed-white" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-success text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="...">
                                                <strong class="me-auto">Valex</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="solid-dangerToast" class="toast colored-toast bg-danger text-fixed-white" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-danger text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="...">
                                                <strong class="me-auto">Valex</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
    &lt;button type="button" class="btn btn-primary me-2 btn-wave" id="solidprimaryToastBtn"&gt;Primary&lt;/button&gt;
    &lt;button type="button" class="btn btn-secondary me-2 btn-wave" id="solidsecondaryToastBtn"&gt;secondary&lt;/button&gt;
    &lt;button type="button" class="btn btn-warning me-2 btn-wave" id="solidwarningToastBtn"&gt;warning&lt;/button&gt;
    &lt;button type="button" class="btn btn-info me-2 btn-wave" id="solidinfoToastBtn"&gt;info&lt;/button&gt;
    &lt;button type="button" class="btn btn-success me-2 btn-wave" id="solidsuccessToastBtn"&gt;success&lt;/button&gt;
    &lt;button type="button" class="btn btn-danger me-2 btn-wave" id="soliddangerToastBtn"&gt;danger&lt;/button&gt;
&lt;/div&gt;
&lt;div class="toast-container position-fixed top-0 end-0 p-3"&gt;
    &lt;div id="solid-primaryToast" class="toast colored-toast bg-primary text-fixed-white" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="solid-secondaryToast" class="toast colored-toast bg-secondary text-fixed-white" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-secondary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="solid-warningToast" class="toast colored-toast bg-warning text-fixed-white" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-warning text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="solid-infoToast" class="toast colored-toast bg-info text-fixed-white" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-info text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="solid-successToast" class="toast colored-toast bg-success text-fixed-white" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-success text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="solid-dangerToast" class="toast colored-toast bg-danger text-fixed-white" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-danger text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Toast Placements
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button type="button" class="btn btn-outline-primary me-2 btn-wave" id="topleftToastBtn">Top Left</button>
                                        <button type="button" class="btn btn-outline-primary me-2 btn-wave" id="topcenterToastBtn">Top Center</button>
                                        <button type="button" class="btn btn-outline-primary me-2 btn-wave" id="toprightToastBtn">Top Right</button>
                                        <button type="button" class="btn btn-outline-primary me-2 btn-wave" id="middleleftToastBtn">Middle Left</button>
                                        <button type="button" class="btn btn-outline-primary me-2 btn-wave" id="middlecenterToastBtn">Middle Center</button>
                                        <button type="button" class="btn btn-outline-primary me-2 btn-wave" id="middlerightToastBtn">Middle Right</button>
                                        <button type="button" class="btn btn-outline-primary me-2 btn-wave" id="bottomleftToastBtn">Bottom Left</button>
                                        <button type="button" class="btn btn-outline-primary me-2 btn-wave" id="bottomcenterToastBtn">Bottom Center</button>
                                        <button type="button" class="btn btn-outline-primary me-2 btn-wave" id="bottomrightToastBtn">Bottom Right</button>
                                    </div>
                                    <div class="toast-container position-fixed top-0 start-0 p-3">
                                        <div id="topleft-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="...">
                                                <strong class="me-auto">Valex</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="toast-container position-fixed top-0 start-50 translate-middle-x p-3">
                                        <div id="topcenter-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="...">
                                                <strong class="me-auto">Valex</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="toast-container position-fixed top-0 end-0 p-3">
                                        <div id="topright-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="...">
                                                <strong class="me-auto">Valex</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="toast-container position-fixed top-50 start-0 translate-middle-y p-3">
                                        <div id="middleleft-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="...">
                                                <strong class="me-auto">Valex</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="toast-container position-fixed top-50 start-50 translate-middle">
                                        <div id="middlecenter-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="...">
                                                <strong class="me-auto">Valex</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="toast-container position-fixed top-50 end-0 translate-middle-y p-3">
                                        <div id="middleright-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="...">
                                                <strong class="me-auto">Valex</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="toast-container position-fixed bottom-0 start-0 p-3">
                                        <div id="bottomleft-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="...">
                                                <strong class="me-auto">Valex</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="toast-container position-fixed bottom-0 start-50 translate-middle-x p-3">
                                        <div id="bottomcenter-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="...">
                                                <strong class="me-auto">Valex</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="toast-container position-fixed bottom-0 end-0 p-3">
                                        <div id="bottomright-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="...">
                                                <strong class="me-auto">Valex</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
    &lt;button type="button" class="btn btn-outline-primary me-2 btn-wave" id="topleftToastBtn"&gt;Top Left&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-primary me-2 btn-wave" id="topcenterToastBtn"&gt;Top Center&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-primary me-2 btn-wave" id="toprightToastBtn"&gt;Top Right&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-primary me-2 btn-wave" id="middleleftToastBtn"&gt;Middle Left&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-primary me-2 btn-wave" id="middlecenterToastBtn"&gt;Middle Center&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-primary me-2 btn-wave" id="middlerightToastBtn"&gt;Middle Right&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-primary me-2 btn-wave" id="bottomleftToastBtn"&gt;Bottom Left&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-primary me-2 btn-wave" id="bottomcenterToastBtn"&gt;Bottom Center&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-primary me-2 btn-wave" id="bottomrightToastBtn"&gt;Bottom Right&lt;/button&gt;
&lt;/div&gt;
&lt;div class="toast-container position-fixed top-0 start-0 p-3"&gt;
    &lt;div id="topleft-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="toast-container position-fixed top-0 start-50 translate-middle-x p-3"&gt;
    &lt;div id="topcenter-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="toast-container position-fixed top-0 end-0 p-3"&gt;
    &lt;div id="topright-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="toast-container position-fixed top-50 start-0 translate-middle-y p-3"&gt;
    &lt;div id="middleleft-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="toast-container position-fixed top-50 start-50 translate-middle"&gt;
    &lt;div id="middlecenter-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="toast-container position-fixed top-50 end-0 translate-middle-y p-3"&gt;
    &lt;div id="middleright-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="toast-container position-fixed bottom-0 start-0 p-3"&gt;
    &lt;div id="bottomleft-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="toast-container position-fixed bottom-0 start-50 translate-middle-x p-3"&gt;
    &lt;div id="bottomcenter-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="toast-container position-fixed bottom-0 end-0 p-3"&gt;
    &lt;div id="bottomright-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
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
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Aligning Toast Using Flexbox
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="bd-example bg-light bd-example-toasts d-flex px-3">
                                        <div aria-live="polite" aria-atomic="true"
                                            class="d-flex justify-content-center align-items-center w-100">
                                            <div class="toast fade show shadow-lg" role="alert" aria-live="assertive"
                                                aria-atomic="true">
                                                <div class="toast-header text-default">
                                                    <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/favicon.ico')}}" alt="...">
                                                    <strong class="me-auto">Valex</strong>
                                                    <small>11 mins ago</small>
                                                    <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="bd-example bg-light bd-example-toasts d-flex p-0"&gt;
    &lt;div aria-live="polite" aria-atomic="true"
        class="d-flex justify-content-center align-items-center w-100"&gt;
        &lt;div class="toast fade show shadow-lg" role="alert" aria-live="assertive"
            aria-atomic="true"&gt;
            &lt;div class="toast-header text-default"&gt;
                &lt;img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand-logos/favicon.ico')}}" alt="..."&gt;
                &lt;strong class="me-auto"&gt;Valex&lt;/strong&gt;
                &lt;small&gt;11 mins ago&lt;/small&gt;
                &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                    aria-label="Close"&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="toast-body"&gt;
                Hello, world! This is a toast message.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

@endsection

@section('scripts')
	
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

        <!-- Toast JS -->
        @vite('resources/assets/js/Toasts.js')

@endsection
