<!DOCTYPE html>
<html lang="en">

@include('frontend.includes.header')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/customcss/apply_job.css') }}">
</head>

<body>
    {{-- <div class="color-theme"> --}}
    <div class="text-center pt-3 pb-3 bg-red">
        <div class="row justify-content-center">
            <a href="https://www.rnwmultimedia.edu.in/" target="_blank" style="display: inline-block;">
                <img src="{{ asset('frontend/img/logo.png') }}" width="320"
                    alt="Red &amp; White MUltimedia Education" title="Red &amp; White MUltimedia Education">
            </a>
        </div>
    </div>
    {{-- </div> --}}

    <div class="main_title">
        <div class=" form-box">
            <h3>Employment Application</h3>
        </div>
        <div class="container">
            <div class="row mt-3 mb-1">
                <div class="col-md-6 col-sm-10 mx-auto">
                    <form class="form" id="add-emp-application-form" method="POST" action="{{ route('emp-application-save') }}"
                        autocomplete="off">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="full_name" name="full_name"
                                        placeholder="Your Full Name">
                                    <label for="name">Your Full Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="designation" name="designation"
                                        placeholder="Your Designation">
                                    <label for="designation">Designation</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control onlyNumber" id="phone_number" maxlength="10" name="phone_number"
                                        placeholder="Your Mobile Number">
                                    <label for="phone_number">Phone number</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="file" class="form-control" id="resume" name="resume"
                                        placeholder="Resume">
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

</body>
@include('frontend.includes.footer')
</html>
