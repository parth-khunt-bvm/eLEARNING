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
                <h1 class="display-3 text-white animated slideInDown">Apply Job</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Apply Job</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Service Start -->
<div class="container-xxl py-2">
    <div class="container">
        <div class="main_title">
            <div class=" form-box" style="text-align: center;">
                <h3>Employment Application</h3>
            </div>
            <div class="container">
                <div class="row mt-3 mb-1">
                    <div class="col-md-6 col-sm-10 mx-auto">
                        <form class="form" id="add-emp-application-form" method="POST" action="{{ route('emp-application-save') }}" autocomplete="off">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Your Full Name">
                                        <label for="name">Your Full Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="designation" name="designation" placeholder="Your Designation">
                                        <label for="designation">Designation</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control onlyNumber" id="phone_number" maxlength="10" name="phone_number" placeholder="Your Mobile Number">
                                        <label for="phone_number">Phone number</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" id="resume" name="resume" placeholder="Resume" accept=".pdf,application/pdf">
                                        <label for="resume">Resume upload</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Note a message here" name="note" id="note" style="height: 150px"></textarea>
                                        <label for="note">Note</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- About End -->

@endsection