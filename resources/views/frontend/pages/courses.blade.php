@extends('frontend.layouts.app_layout')
{{-- Meta tag sectiopn --}}
@section('description', "Contact || ".Config::get('constants.PROJECT_NAME'))
@section('keywords', "Contact || ".Config::get('constants.PROJECT_NAME'))
@section('page-title', "Contact || ".Config::get('constants.PROJECT_NAME'))
{{-- End Meta tag sectiopn --}}
@section('page-contain')
@php
    $course = Config::get('courses_details.courses_details');
@endphp
<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Courses</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Courses</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Courses Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center px-3" style="color:#e12028">Courses</h6>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach ($course as $course_key => $value)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <a href="{{route('courses-detail', $course_key)}}">
                                <img class="img-fluid" src="{{  $value['image'] }}" alt="">
                            </a>
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="{{route('courses-detail', $course_key)}}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <a href="{{route('courses-detail', $course_key)}}">
                                <h5 class="mb-4">{{  $value['title'] }}</h5>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center px-3" style="color:#e12028">Testimonial</h6>
            <h1 class="mb-5">Our Students Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="{{  asset('frontend/img/testimonial-1.jpg') }}"
                    style="width: 80px; height: 80px;">
                <h5 class="mb-0">Archil Hirapra</h5>
                <p>Node js Devloper</p>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Very good Institute for the Computer courses. you
                        will be very well equipped to clear interview
                        and land in good job</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="{{  asset('frontend/img/testimonial-2.jpg') }}"
                    style="width: 80px; height: 80px;">
                <h5 class="mb-0">Vishal Gajera</h5>
                <p>IOS Devloper</p>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Trainers are good and very supportive.
                        institute provide lot of opportunities to get placed.I am happy to
                        joined institute.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="{{  asset('frontend/img/testimonial-3.jpg') }}"
                    style="width: 80px; height: 80px;">
                <h5 class="mb-0">Shruti Davra</h5>
                <p>UI/UX Desiner</p>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">All staff members are really good
                        and they explained every concept in detailed. They provide good support for placement.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="{{  asset('frontend/img/testimonial-4.jpg') }}"
                    style="width: 80px; height: 80px;">
                <h5 class="mb-0">Rahul Patel</h5>
                <p>Androis Devloper</p>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Good institute and excellent presentation skills and if any doubts regarding
                        topics they will clear immediately.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

@endsection
