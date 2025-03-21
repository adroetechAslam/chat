
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Checkout</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
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
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div>
                                        <label class="main-content-label mb-2">Checkout</label> <span class="d-block fs-12 mb-0 text-muted">The Project Budget is a tool used by project managers to estimate the total cost of a project</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-9">
                                            <div class="card shadow-none">
                                                <div class="card-body p-0 product-checkout">
                                                    <ul class="nav nav-tabs tab-style-2 d-sm-flex d-block border-bottom border-block-end-dashed justify-content-center" id="myTab1" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link active" id="order-tab" data-bs-toggle="tab"
                                                                data-bs-target="#order-tab-pane" type="button" role="tab"
                                                                aria-controls="order-tab" aria-selected="true"><i
                                                                    class="ri-number-1 me-2 align-middle fs-12 d-inline-flex align-items-center justify-content-center"></i>Sign In</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="confirmed-tab" data-bs-toggle="tab"
                                                                data-bs-target="#confirm-tab-pane" type="button" role="tab"
                                                                aria-controls="confirmed-tab" aria-selected="false"><i
                                                                    class="ri-number-2 me-2 align-middle fs-12 d-inline-flex align-items-center justify-content-center"></i>Billing</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="shipped-tab" data-bs-toggle="tab"
                                                                data-bs-target="#shipped-tab-pane" type="button" role="tab"
                                                                aria-controls="shipped-tab" aria-selected="false"><i
                                                                    class="ri-number-3 me-2 align-middle fs-12 d-inline-flex align-items-center justify-content-center"></i>Order</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="delivered-tab" data-bs-toggle="tab"
                                                                data-bs-target="#delivery-tab-pane" type="button" role="tab"
                                                                aria-controls="delivered-tab" aria-selected="false"><i
                                                                    class="ri-number-4 me-2 align-middle fs-12 d-inline-flex align-items-center justify-content-center"></i>Payments</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="finished-tab" data-bs-toggle="tab"
                                                                data-bs-target="#finished-tab-pane" type="button" role="tab"
                                                                aria-controls="finished-tab" aria-selected="false"><i
                                                                    class="ri-number-5 me-2 align-middle fs-12 d-inline-flex align-items-center justify-content-center"></i>Finished</button>
                                                        </li>
                                                    </ul>
                                                    <div class="row">
                                                        <div class="col-xxl-8 col-xl-10 mx-auto">
                                                            <div class="tab-content border-lg border-0 m-0 m-lg-4" id="myTabContent">
                                                                <div class="tab-pane fade show active border-0 p-0" id="order-tab-pane" role="tabpanel"
                                                                    aria-labelledby="order-tab-pane" tabindex="0">
                                                                    <div class="p-4">
                                                                        <div class="fs-15 align-items-center justify-content-between">
                                                                            <form>
                                                                                <h5 class="text-start mb-2">Signin to Your Account</h5>
                                                                                <p class="mb-4 text-muted fs-13 ms-0 text-start">Signin to create, discover and connect with the global community</p>
                                                                                <div class="form-group text-start">
                                                                                    <label class="form-label">Email</label>
                                                                                    <input class="form-control" placeholder="Enter your email" type="text">
                                                                                </div>
                                                                                <div class="form-group text-start">
                                                                                    <label class="form-label">Password</label>
                                                                                    <input class="form-control" placeholder="Enter your password" type="password">
                                                                                </div>
                                                                                <button class="btn ripple btn-primary w-100">Sign In</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                    <div class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-end">
                                                                        <button type="button" class="btn btn-primary" id="personal-details-trigger">Next</button>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade border-0 p-0" id="confirm-tab-pane"
                                                                    role="tabpanel" aria-labelledby="confirm-tab-pane" tabindex="0">
                                                                    <form class="p-4">
                                                                        <h5 class="text-start mb-2">Billing Information</h5>
                                                                        <p class="mb-4 text-muted fs-13 ms-0 text-start">Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                                                        <div class="row">
                                                                            <div class="col-md-6 mb-3">
                                                                                <label class="form-label" for="firstName">First name</label>
                                                                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                                                                                <div class="invalid-feedback">Valid first name is required.</div>
                                                                            </div>
                                                                            <div class="col-md-6 mb-3">
                                                                                <label class="form-label" for="lastName">Last name</label>
                                                                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                                                                                <div class="invalid-feedback">Valid last name is required.</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="address">Address</label>
                                                                            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                                                                            <div class="invalid-feedback">Please enter your shipping address.</div>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="address2">Address 2 <span class="text-muted">(Optional)</span>
                                                                            </label>
                                                                            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="mobile">Mobile Number</label>
                                                                            <input type="text" class="form-control" id="mobile">
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-xxl-5 col-md-12 mb-3">
                                                                                <label class="form-label">Country</label>
                                                                                <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                                                                    <option value="">--Choose--</option>
                                                                                    <option value="Choice 1">USA</option>
                                                                                    <option value="Choice 2">Italy</option>
                                                                                    <option value="Choice 3">Australia</option>
                                                                                    <option value="Choice 4">England</option>
                                                                                    <option value="Choice 5">Spain</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-xxl-4 col-md-12 mb-3">
                                                                                <label class="form-label">State</label>
                                                                                <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default1">
                                                                                    <option value="">--Choose--</option>
                                                                                    <option value="Choice 1">California</option>
                                                                                    <option value="Choice 2">Alaska</option>
                                                                                    <option value="Choice 3">Colorado</option>
                                                                                    <option value="Choice 4">Arizona</option>
                                                                                    <option value="Choice 5">Delaware</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-xxl-3 col-md-12 mb-3">
                                                                                <label class="form-label" for="zip">Zip</label>
                                                                                <input type="text" class="form-control" id="zip" placeholder="" required="">
                                                                                <div class="invalid-feedback">Zip code required.</div>
                                                                            </div>
                                                                        </div>
                                                                        <button class="btn btn-primary btn-lg w-100" type="submit">Continue to checkout</button>
                                                                    </form>
                                                                    <div class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-between">
                                                                        <button type="button" class="btn btn-light m-1" id="back-shipping-trigger">Previous</button>
                                                                        <button type="button" class="btn btn-primary m-1" id="payment-trigger">Next</button>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade border-0 p-0" id="shipped-tab-pane" role="tabpanel"
                                                                    aria-labelledby="shipped-tab-pane" tabindex="0">
                                                                    <div class="p-4">
                                                                        <h5 class="text-start mb-2">Your Order</h5>
                                                                        <p class="mb-4 text-muted fs-13 ms-0 text-start">Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                                                        <div class="product">
                                                                            <div class="item flex-wrap">
                                                                                <div class="left flex-wrap gap-2"> <a href="javascript:void(0);" class="thumb rounded-3 mb-2"> <img src="{{asset('build/assets/images/ecommerce/09.jpg')}}" alt="" class="rounded-3"> </a>
                                                                                    <div class="purchase mb-2">
                                                                                        <h6> <a href="javascript:void(0);">Digital Camera</a> </h6>
                                                                                        <div class="d-flex flex-wrap  mt-2">
                                                                                            <div class="product-title fs-12 me-2">Quantity:</div>
                                                                                            <div class="handle-counter input-group rounded flex-nowrap">
                                                                                                <button class="btn btn-icon btn-light  product-quantity-minus" ><i class="ri-subtract-line"></i></button>
                                                                                                <input type="text" class="form-control form-control-sm text-center" aria-label="quantity" id="product-quantity" value="2">
                                                                                                <button class="btn btn-icon btn-light  product-quantity-plus" ><i class="ri-add-line"></i></button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div> <span class="price fs-20">$290</span>
                                                                            </div>
                                                                            <div class="item flex-wrap">
                                                                                <div class="left flex-wrap gap-2"> <a href="javascript:void(0);" class="thumb rounded-3 mb-2"> <img src="{{asset('build/assets/images/ecommerce/03.jpg')}}" alt="" class="rounded-3"> </a>
                                                                                    <div class="purchase mb-2">
                                                                                        <h6> <a href="javascript:void(0);">Sports Shoe</a> </h6>
                                                                                        <div class="d-flex flex-wrap mt-2">
                                                                                            <div class="product-title fs-12 me-2">Quantity:</div>
                                                                                            <div class="handle-counter input-group rounded flex-nowrap">
                                                                                                <button class="btn btn-icon btn-light  product-quantity-minus" ><i class="ri-subtract-line"></i></button>
                                                                                                <input type="text" class="form-control form-control-sm text-center" aria-label="quantity" id="product-quantity1" value="2">
                                                                                                <button class="btn btn-icon btn-light  product-quantity-plus" ><i class="ri-add-line"></i></button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div> <span class="price fs-20">$124</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between">
                                                                            <span>Subtotal</span> 
                                                                            <span class="fs-20 fw-bold text-primary">$364</span> 
                                                                        </div>
                                                                    </div>
                                                                    <div class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-between">
                                                                        <button type="button" class="btn btn-light m-1" id="back-personal-trigger">Previous</button>
                                                                        <button type="button" class="btn btn-primary m-1" id="continue-payment-trigger">Next</button>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade border-0 p-0" id="delivery-tab-pane" role="tabpanel"
                                                                    aria-labelledby="delivery-tab-pane" tabindex="0">
                                                                    <div class="p-4">
                                                                        <div class="">
                                                                            <h5 class="text-start mb-2">Payments</h5>
                                                                            <p class="mb-4 text-muted fs-13 ms-0 text-start">Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                                                        </div>
                                                                        <div class="card-pay">
                                                                            <ul class="tabs-menu nav">
                                                                                <li class=""><a href="#tab20" class="active" data-bs-toggle="tab"><i class="fa fa-credit-card"></i> Credit Card</a></li>
                                                                                <li><a href="#tab21" data-bs-toggle="tab" class=""><i class="fab fa-paypal"></i>  Paypal</a></li>
                                                                                <li><a href="#tab22" data-bs-toggle="tab" class=""><i class="fa fa-university"></i>  Bank Transfer</a></li>
                                                                            </ul>
                                                                            <div class="tab-content">
                                                                                <div class="tab-pane border-0 active show" id="tab20">
                                                                                    <div class="form-group">
                                                                                        <label class="form-label">CardHolder Name</label>
                                                                                        <input type="text" class="form-control" placeholder="First Name">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="form-label">Card number</label>
                                                                                        <div class="input-group">
                                                                                            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for..." aria-describedby="button-addon2">
                                                                                            <button class="btn btn-primary" type="button" id="button-addon2">
                                                                                                <i class="fab fa-cc-visa"></i> &nbsp;
                                                                                                <i class="fab fa-cc-amex"></i> &nbsp;
                                                                                                <i class="fab fa-cc-mastercard"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-8">
                                                                                            <div class="form-group">
                                                                                                <label class="form-label">Expiration</label>
                                                                                                <div class="input-group">
                                                                                                    <input type="number" class="form-control" placeholder="MM" name="Month">
                                                                                                    <input type="number" class="form-control" placeholder="YY" name="Year">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-4">
                                                                                            <div class="form-group">
                                                                                                <label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
                                                                                                <input type="number" class="form-control" required="">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tab-pane border-0" id="tab21">
                                                                                    <p class="mt-4">Paypal is easiest way to pay online</p>
                                                                                    <p><a href="javascript:void(0);" class="btn btn-primary"><i class="fab fa-paypal"></i> Log in my Paypal</a></p>
                                                                                    <p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                                                                                </div>
                                                                                <div class="tab-pane border-0" id="tab22">
                                                                                    <p class="mt-4">Bank account details</p>
                                                                                    <dl class="card-text">
                                                                                        <dt>BANK: </dt>
                                                                                        <dd> THE UNION BANK 0456</dd>
                                                                                    </dl>
                                                                                    <dl class="card-text">
                                                                                        <dt>Account number: </dt>
                                                                                        <dd> 67542897653214</dd>
                                                                                    </dl>
                                                                                    <dl class="card-text">
                                                                                        <dt>IBAN: </dt>
                                                                                        <dd>543218769</dd>
                                                                                    </dl>
                                                                                    <p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-between">
                                                                        <button type="button" class="btn btn-light m-1" id="back-personal-trigger3">Previous</button>
                                                                        <button type="button" class="btn btn-primary m-1" id="continue-finished-tab">Next</button>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade border-0 p-0" id="finished-tab-pane" role="tabpanel"
                                                                    aria-labelledby="finished-tab-pane" tabindex="0">
                                                                    <div class="text-center p-4">
                                                                        <div class="">
                                                                            <h5 class="text-center mb-4">Your order Confirmed!</h5>
                                                                        </div>
                                                                        <svg class="wd-100 ht-100 mx-auto justify-content-center mb-3 text-center" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                                                            <circle class="path circle" fill="none" stroke="#22c03c" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                                                                            <polyline class="path check" fill="none" stroke="#22c03c" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 " />
                                                                        </svg>
                                                                        <p class="success pl-5 pr-5">Order placed successfully. Your order will be dispacted soon. meanwhile you can track your order in my order section.</p>
                                                                    </div>
                                                                    <div class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-between">
                                                                        <button type="button" class="btn btn-light m-1" id="back-personal-trigger4">Previous</button>
                                                                        <button type="button" class="btn btn-success m-1" id="continue-payment-trigger1">Order Again</button>
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
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

@endsection

@section('scripts')
	
        <!-- Handle-counter js -->
        @vite('resources/assets/js/handlecounter.js')

        <!-- Internal Checkout JS -->
        @vite('resources/assets/js/checkout.js')

@endsection
