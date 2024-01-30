@extends('frontend.layouts.app_layout')

{{-- Meta tag sectiopn --}}
@section('description', 'About-us || ' . Config::get('constants.PROJECT_NAME'))
@section('keywords', 'About-us || ' . Config::get('constants.PROJECT_NAME'))
@section('page-title', 'About-us || ' . Config::get('constants.PROJECT_NAME'))
{{-- End Meta tag sectiopn --}}
@section('page-contain')

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 gim-page-header bg-gray">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h2 class=" text-white animated slideInDown">GIM</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('courses') }}">GIM</a></li>
                        </ol>
                    </nav>
                    <h1 class=" text-white animated slideInDown">ધોરણ 10 કે 12 પછી ઉત્તમ ભવિષ્ય બનાવવા માંગતા વિદ્યાર્થીઓ
                        માટે....</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
   


@endsection
