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
                    <h1 class="display-3 text-white animated slideInDown">Student Courses Detail</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Student Courses Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('frontend/img/about.jpg') }}"
                            alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    {{-- <h6 class="section-title bg-white text-start pe-3" style="color:#e12028">Web Designing</h6> --}}
                    <h5 class="mb-4">Welcome to New Dreamz Multimedia Education - Ignite Your Creative Spark in the
                        Digital Universe!
                    </h5>
                    <p class="mb-4">New Dreamzs Multimedia Education is a reputed training institute in Gujarat for Data
                        Science, Machine Learning, Blockchain Development, AR/VR Game Development, Full Stack Web
                        Development, Web Design, Game Design, Mobile App Development, Video Editing & All types of IT
                        Courses with 10 years of full-fledged, result-oriented training experience.</p>
                    <h5 class="mb-4">Why Choose New Dreamz Multimedia Education?
                    </h5>
                    <p class="mb-4">At New Dreamz, we understand that multimedia education is not just about technical
                        skills; it's about unlocking your creative potential. Our carefully crafted courses blend
                        artistic expression with cutting-edge technology, empowering you to create captivating
                        multimedia experiences. By choosing New Dreamz, you're not just gaining skills; you're
                        joining a community passionate about pushing the boundaries of digital creativity.
                    </p>
                    <h5 class="mb-4">What Sets Us Apart?
                    </h5>
                    <ul>
                        <li>
                            <p class="mb-4"><b>Expert Instructors:</b>  Learn from industry experts and seasoned multimedia
                                professionals. Our instructors are dedicated to sharing their wealth of knowledge
                                and guiding you towards success in the dynamic field of multimedia.
                            </p>
                        </li>
                        <li>
                            <p class="mb-4"><b>Interactive Learning:</b>  Immerse yourself in hands-on projects that bridge theory
                                with real-world application. Our courses are designed to ensure you not only
                                understand the concepts but can confidently apply them in your creative
                                endeavors.

                            </p>
                        </li>
                        <li>
                            <p class="mb-4"><b>Certification:</b> Earn a prestigious certificate upon completing your course,
                                validating your proficiency in multimedia and web design. Showcase your skills to
                                potential employers and clients with confidence
                            </p>
                        </li>
                    </ul>

                    <h5 class="mb-4">Explore Our Multimedia Courses:
                    </h5>
                    <p class="mb-4">Discover a diverse range of courses covering graphic design, web development,
                        animation, video editing, and more. Whether you're passionate about visual storytelling,
                        user interface design, or mastering industry-standard multimedia tools, New Dreamz
                        has the perfect course for you.
                    </p>

                    <h5 class="mb-4">Join Our Creative Community:
                    </h5>
                    <p class="mb-4">Connect with fellow creatives in our lively student forum. Share your projects, seek
                        advice, and collaborate with like-minded individuals. Engage in multimedia challenges to
                        apply your skills and receive constructive feedback from peers and instructors.

                    </p>

                    <h5 class="mb-4">Ready to Ignite Your Creativity?
                    </h5>
                    <p class="mb-4">Embark on your multimedia education journey today! Explore our courses, connect with
                        our vibrant community, and unleash your creative potential at New Dreamz Multimedia
                        Education. Let's shape the future of digital creativity together
                    </p>
                    <p class="mb-4">Start your creative journey with New Dreamz Multimedia Education – Where Dreams Take
                        Flight in the Digital World!
                    </p>


                    <div class="row gy-2 gx-4 mb-4">
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
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection
