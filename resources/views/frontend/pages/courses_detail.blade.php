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
                    <h1 class="display-3 text-white animated slideInDown">{{ $coursesDetails['title']}}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('courses') }}">Courses</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">{{ $coursesDetails['title']}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- web design Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative">
                        <img class="img-fluid w-100 " src="{{asset($coursesDetails['image'])}}" alt=""
                            style="object-fit: cover;">
                    </div>
                    <h5 class="mb-4 mt-4">{{ $coursesDetails['apart']['title'] }}</h5>
                    <ul>
                        @foreach ($coursesDetails['apart']['details'] as $k => $v)
                        <li>
                            <p class="mb-4"><b>{{ $v['title'] }}</b> {{ $v['details']}}
                            </p>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start pe-3" style="color:#e12028">{{ $coursesDetails['title']}}</h6>
                    <h5 class="mb-4">{{ $coursesDetails['header_1']}}</h5>
                    <p class="mb-4">{{ $coursesDetails['pera_1']}}</p>
                    <h5 class="mb-4">{{ $coursesDetails['header_2']}}</h5>
                    <p class="mb-4">{{ $coursesDetails['pera_2']}}</p>
                    <h5 class="mb-4">{{ $coursesDetails['header_3']}}</h5>
                    <p class="mb-4">{{ $coursesDetails['pera_3']}}</p>
                    <h5 class="mb-4">{{ $coursesDetails['header_4']}}</h5>
                    <p class="mb-4">{{ $coursesDetails['pera_4']}}</p>
                    <h5 class="mb-4">{{ $coursesDetails['header_5']}}</h5>
                    <p class="mb-4">{{ $coursesDetails['pera_5_1']}}</p>
                    <p class="mb-4">{{ $coursesDetails['pera_5_2']}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- web design End -->



@endsection
