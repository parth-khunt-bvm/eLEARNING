@extends('frontend.layouts.app_layout')

{{-- Meta tag sectiopn --}}
@section('description', 'About-us || ' . Config::get('constants.PROJECT_NAME'))
@section('keywords', 'About-us || ' . Config::get('constants.PROJECT_NAME'))
@section('page-title', 'About-us || ' . Config::get('constants.PROJECT_NAME'))
{{-- End Meta tag sectiopn --}}
@section('page-contain')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Placement Partners</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('courses') }}">Courses</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Placement Partners</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!-- video Start -->
    <div class="container">
        <p class="mb-4" style="text-align: center!important;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius dignissimos vero alias consequatur
            sunt dolores accusamus maxime commodi totam! Porro repellendus maxime nemo ipsa maiores error, quia placeat nam
            hic! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam eligendi illum dolorem vero, est
            laboriosam sit quam numquam aspernatur necessitatibus culpa cumque! Natus delectus beatae rerum tempore
            blanditiis? Dolores, perspiciatis.
        </p>
    </div>
    <div class="container">
        <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center justify-content-between ">
            <div class="col-lg-5 position-relative" style="height:300px;">
                <iframe class="mt-3 rounded" width="560" height="315"
                    src="https://www.youtube.com/embed/HcOc7P5BMi4?si=8oaIXSE_QMAwq8kn" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="col-lg-5 position-relative" style="height:300px;">
                <iframe class="mt-3 rounded" width="560" height="315"
                    src="https://www.youtube.com/embed/bT70Qqgn-qY?si=falaS3bwHqDYE0X4" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="col-lg-5 position-relative mt-5" style="height:300px;">
                <iframe class="mt-5 rounded" width="560" height="315"
                    src="https://www.youtube.com/embed/icudf_w_pqU?si=PYLCb2UO_DFGRAeD" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="col-lg-5 position-relative mt-5" style="height:300px;">
                <iframe class="mt-5 rounded" width="560" height="315"
                    src="https://www.youtube.com/embed/hE6I9apUvrk?si=k6CONDiQxBreISIj" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- video End -->

    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center mt-5 ">
                <h3 class="h2 mt-5">Placement Partner</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="brand-carousel section-padding owl-carousel">
            @foreach ($partnerDetails['images'] as $k => $v)
            <div class="single-logo">
                <img src="{{asset($v['image'])}}" alt="">
            </div>
            @endforeach
        </div>
    </div>
@endsection
