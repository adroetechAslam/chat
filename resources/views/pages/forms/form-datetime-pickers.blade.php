
@extends('layouts.master')

@section('styles')

        <!-- FlatPickr CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Date & Time Pickers</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Form Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Date & Time Pickers</li>
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
                                <div class="card-header">
                                    <div class="card-title">
                                        Basic Date picker
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                            <input type="text" class="form-control" id="date" placeholder="Choose date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Date picker With Time
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                            <input type="text" class="form-control" id="datetime" placeholder="Choose date with time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Human Friendly dates
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                            <input type="text" class="form-control" id="humanfrienndlydate" placeholder="Human friendly dates">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Date range picker
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                            <input type="text" class="form-control" id="daterange" placeholder="Date range picker">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Basic Time picker
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-muted"> <i class="ri-time-line"></i> </div>
                                            <input type="text" class="form-control" id="timepikcr" placeholder="Choose time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Time Pickr with 24hr Format
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-muted"> <i class="ri-time-line"></i> </div>
                                            <input type="text" class="form-control" id="timepickr1" placeholder="Choose time in 24hr format">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Time Picker with Limits
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-muted"> <i class="ri-time-line"></i> </div>
                                            <input type="text" class="form-control" id="limittime" placeholder="choose time min 16:00 to max 22:30">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        DateTimePicker with Limited Time Range
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-muted"> <i class="ri-time-line"></i> </div>
                                            <input type="text" class="form-control" id="limitdatetime" placeholder="date with time limit from 16:00 to 22:00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Date Picker with week numbers
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group mb-0">
                                                <div class="input-group">
                                                    <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                    <input type="text" class="form-control" id="weeknum" placeholder="Choose date">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Inline Time Picker
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group mb-0">
                                                <input type="text" class="form-control" id="inlinetime" placeholder="Choose time">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Preloading time
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group mb-0">
                                                <div class="input-group">
                                                    <div class="input-group-text text-muted"> <i class="ri-time-line"></i> </div>
                                                    <input type="text" class="form-control" id="pretime" placeholder="Preloading time">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Inline Calendar
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group mb-0 overflow-auto">
                                        <input type="text" class="form-control" id="inlinecalendar" placeholder="Choose date">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

@endsection

@section('scripts')
	
        <!-- Date & Time Picker JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        @vite('resources/assets/js/date&time_pickers.js')

@endsection
