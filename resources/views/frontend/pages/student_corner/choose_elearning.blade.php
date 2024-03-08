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
                <h1 class="display-3 text-white animated slideInDown">Why I Chose NDME</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="{{ route('courses') }}">Student
                                Corner</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Why I Chose NDME</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
<div class="container">
    <div class="text-center my-8 ">
        <h3 class="h2">Student Review on New Dremz Multimedia Education</h3>
    </div>
</div>
<!-- web design Start -->
@foreach ($chooseElearningDetails['student_review'] as $k => $v)
<div class="container-xxl py-5">
    <div class="container">
        <div class="row d-flex align-items-center ">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <a href="#">
                            <img class="img-fluid rounded" src="{{asset($v['images']['0']['image1'])}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.3s">
                <p class="mb-4">
                    {{$v['para']['0']['para1']}}
                </p>
            </div>
        </div>
        <div class="row d-flex align-items-center mt-5">
            <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.3s">
                <p class="mb-4">
                    {{$v['para']['1']['para2']}}
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <a href="#">
                            <img class="img-fluid rounded" src="{{asset($v['images']['1']['image2'])}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- web design End -->


@endsection