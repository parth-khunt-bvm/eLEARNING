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
                    <h1 class="display-3 text-white animated slideInDown">Student Works</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Student Works</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="filter-gallery">
                <div class="button-container">
                    <button class="filter-button active" data-filter="all">All</button>
                    <button class="filter-button" data-filter="nature">Nature</button>
                    <button class="filter-button" data-filter="animals">Animals</button>
                </div>

                <div class="image-container">
                    <div class="gallery-item" data-category="nature">
                        <img src="{{ asset('img/1.avif') }}" alt="Image 1">
                    </div>

                    <div class="gallery-item" data-category="animals">
                        <img src="{{ asset('img/2.avif') }}" alt="Image 2">
                    </div>

                    <div class="gallery-item" data-category="nature">
                        <img src="{{ asset('img/3.jfif') }}" alt="Image 3">
                    </div>

                    <div class="gallery-item" data-category="animals">
                        <img src="{{ asset('img/4.avif') }}" alt="Image 4">
                    </div>

                    <div class="gallery-item" data-category="nature">
                        <img src="{{ asset('img/5.avif') }}" alt="Image 5">
                    </div>

                    <div class="gallery-item" data-category="nature">
                        <img src="{{ asset('img/6.avif') }}" alt="Image 6">
                    </div>


                    <div class="gallery-item" data-category="animals">
                        <img src="{{ asset('img/7.avif') }}" alt="Image 7">
                    </div>
                    <!-- Add more gallery items as needed -->
                </div>
            </div>
        </div>
    </div>
@endsection
