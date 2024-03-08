@extends('frontend.layouts.app_layout')
{{-- Meta tag sectiopn --}}
@section('description', "About-us || ".Config::get('constants.PROJECT_NAME'))
@section('keywords', "About-us || ".Config::get('constants.PROJECT_NAME'))
@section('page-title', "About-us || ".Config::get('constants.PROJECT_NAME'))
{{-- End Meta tag sectiopn --}}
@section('page-contain')

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                        <h5 class="mb-3">Industry Experts Trainers</h5>
                        <p>Our trainers have 7+ years of Highly Skilled IT working experience</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                        <h5 class="mb-3">Latest Technology</h5>
                        <p>We Provide Training Based On International IT Industry Required Latest Technologies</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-home text-primary mb-4"></i>
                        <h5 class="mb-3">Lifetime Support</h5>
                        <p>We will provide you lifetime support on all the courses you learned from us.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                        <h5 class="mb-3">Interview Assistance</h5>
                        <p>our training instructor will go through the possible
                            technical questions you may be asked.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="{{  asset('frontend/img/about.jpg') }}" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start pe-3" style="color:#e12028">About Us</h6>
                <h1 class="mb-4">Welcome to New Dreamzs Multimedia Education</h1>
                <p class="mb-4">New Dreamzs Multimedia Education is a reputed training institute in
                    Gujarat for Data Science, Machine Learning, Blockchain Development, AR/VR Game Development, Full
                    Stack Web Development, Web Design, Game Design, Mobile App Development, Video Editing & All
                    types of IT Courses with 10 years of full-fledged, result-oriented training experience.
                </p>
                <p class="mb-4">Our aim is to ease the hiring process for businesses and organizations by providing
                    work-ready professionals who can contribute greatly to their success. Since then, we have worked
                    hard to achieve this goal and dedicated our time and resources to train students extensively.
                </p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>LIFE LONG SUPPORT</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>PROVIDE LATEST TECHNOLOGY</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Expert Faculty</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Best Experience Tutor</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Best Environment</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Certified Course
                        </p>
                    </div>
                </div>
                <h6 class="section-title bg-white text-start pe-3 mt-3" style="color:#e12028">OUR VISION</h6>
                <p class="mb-4">Our mission is to advance students' lives through technology.</p>

                <h6 class="section-title bg-white text-start pe-3" style="color:#e12028">OUR MISSION</h6>
                <p class="mb-4">To impart every knowledge of IT field to every student, developing in today's competitive times.</p>
                <h6 class="section-title bg-white text-start pe-3" style="color:#e12028">WHY CHOOSE US?</h6>
                <ul>
                    <li>ONGOING MAINTENANCE AND SUPPORT</li>
                    <li>QUICK EMPLOYMENT</li>
                    <li>EASY CAREER GROWTH</li>
                    <li>A VARIETY OF CAREER OPPORTUNITY</li>
                    <li>IT PAYS WELL</li>
                    <li>A REASONABLE EDUCATION</li>
                    <li>BACK AND SUPPORT</li>
                    <li>LIVE PROJECTS</li>
                    <li>COMPANY ORIENTED TRAINING</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection