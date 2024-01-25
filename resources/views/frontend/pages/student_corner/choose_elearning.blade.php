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
                    <h1 class="display-3 text-white animated slideInDown"></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('courses') }}">Student Corner</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Why I Chose Elearning</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
        <div class="container">
        <div class="text-center my-8 ">
        <h3 class="h2">Student Review on Elearning Multimedia Education</h3>
        </div>
        </div>
  <!-- web design Start -->
  <div class="container-xxl py-5">
    <div class="container">
        <div class="row d-flex align-items-center ">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <a href="#">
                            <img style="border-radius:9px !important" class="img-fluid rounded" src="{{('frontend/img/about.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.3s">
                <p class="mb-4">
                    “I don't usually give my reviews, but Red and White deserve it. This is my first review of anything in my entire life. I always wanted to start my career as a UI/UX designer, and I was a plain slate until I joined Red and White. After months of research, I decided to join there back in 2008. And today, I am a senior team lead of the entire graphics team at a multinational organization. Red and white provided me with the tools and mindset required to advance in my career. My whole course at Red and white was worth it. It was challenging, and red and white helped me get to destiny. After reaching this standard and level, when I look back, I can see only Red and White that made my career right from the ground to the sky. Hats off to you guys, and God bless you!!</p>
            </div>
        </div>
        <div class="row d-flex align-items-center mt-5">
            <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.3s">
                <p class="mb-4">
                    "Amazing infrastructure with all required facilities that make learning quite easy as anything. So I choose red and white over any other institute."</p>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <a href="#">
                            <img style="border-radius:9px !important" class="img-fluid rounded" src="{{('frontend/img/about.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- web design End -->


@endsection
