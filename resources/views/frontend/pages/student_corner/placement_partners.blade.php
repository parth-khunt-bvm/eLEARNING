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
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('courses') }}">Courses</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page"></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


@endsection
