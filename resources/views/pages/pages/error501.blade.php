
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                <!-- Start::row-1 -->
                <div class="row">
                    <div class="main-error-wrapper wrapper-1">
                        <h1 class="">501<span class="fs-20">error</span></h1>
                        <h3 class="title">Oopps. The page you were looking for doesn't exist.</h3>
                        <h6 class="sub_title text-default">You may have mistyped the address or the page may have moved.</h6><a class="btn btn-primary" href="{{url('index')}}">Back to Home</a>
                    </div>
                </div>
                <!-- row closed -->

@endsection

@section('scripts')
	


@endsection
