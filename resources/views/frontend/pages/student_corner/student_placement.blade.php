@extends('frontend.layouts.app_layout')

{{-- Meta tag sectiopn --}}
@section('description', 'About-us || ' . Config::get('constants.PROJECT_NAME'))
@section('keywords', 'About-us || ' . Config::get('constants.PROJECT_NAME'))
@section('page-title', 'About-us || ' . Config::get('constants.PROJECT_NAME'))
{{-- End Meta tag sectiopn --}}
@section('page-contain')
    <div class="wrapper bg-gray gim-banner student-placement-header"></div>

    <div class="container">
        <div class="brand-carousel section-padding owl-carousel">
            @foreach ($companyowlcarousel['images'] as $k => $v)
                <div class="single-logo">
                    <img src="{{ asset($v['image']) }}" alt="">
                </div>
            @endforeach
        </div>
    </div>

    <!-- Service Start -->
    <div class="container-xxl py-0">
        <div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x far fa-user text-primary mb-4"></i>
                            <h5 class="mb-3">37,500+</h5>
                            <p>Students Trained</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fas fa-3x fa-certificate text-primary mb-4"></i>
                            <h5 class="mb-3">15+</h5>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fas fa-3x  fa-suitcase text-primary mb-4"></i>
                            <h5 class="mb-3">100%</h5>
                            <p>Job Placements Done</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa far fa-3x  fa-user text-primary mb-4"></i>
                            <h5 class="mb-3">1250+</h5>
                            <p>Company Registered</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-lg-6">
                <ul class="nav nav-tabs justify-content-center border-0" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active rounded" id="home-tab" data-bs-toggle="tab" data-bs-target="#employee"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Employee</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded" id="profile-tab" data-bs-toggle="tab" data-bs-target="#owner"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">Owner</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="employee" role="tabpanel" aria-labelledby="home-tab">
                <div class="row justify-content-center" id="employeeDataContainer">
                    @foreach ($studentsPlacement['students'] as $key => $value)
                    <div class="col-lg-3 col-md-4 col-12 my-4 ">
                        <div class="card h-100 text-center py-4 p-2 rounded">
                            <img src="{{asset($value['image'])}}" class="rounded-circle w-15 h-15 align-self-center" alt="..."
                                style="object-fit: cover;">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-2">
                                    {{$value['h5']}}
                                </h5>

                                <p class="fw-bolder mb-0">
                                </p>
                                <p class="fw-bolder text-dark mb-1 fs-16">
                                    {{$value['p']}}

                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div id="show-more-data"></div>
                </div>
                <div class="text-center course-btn my-3" id="show-more-data">

                    <button class="btn btn-primary btn-sm" onclick="showMore(16)">Show
                        More</button>
                </div>
            </div>

            <div class="text-center" id="loader" style="display: none;">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
            <div class="tab-pane fade" id="owner" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row justify-content-center">
                    @foreach ($studentsPlacement['owner'] as $key => $value)

                    <div class="col-lg-3 col-md-4 col-12 my-4">
                        <div class="card h-100 text-center py-4 p-2">
                            <img src="{{asset($value['image'])}}" class="rounded-circle w-15 h-15 align-self-center"
                                alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-2">
                                    {{$value['h51']}}
                                </h5>
                                <p class="fw-bolder mb-0">
                                    {{$value['p1']}}
                                </p>
                                <p class="fw-bolder text-dark mb-0">
                                    {{$value['p2']}}
                                </p>
                                <h5 class="fw-bolder text-dark mb-1">
                                    {{$value['h52']}}
                                </h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
