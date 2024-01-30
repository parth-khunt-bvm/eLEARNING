@extends('frontend.layouts.app_layout')

{{-- Meta tag sectiopn --}}
@section('description', 'About-us || ' . Config::get('constants.PROJECT_NAME'))
@section('keywords', 'About-us || ' . Config::get('constants.PROJECT_NAME'))
@section('page-title', 'About-us || ' . Config::get('constants.PROJECT_NAME'))
{{-- End Meta tag sectiopn --}}
@section('page-contain')

    <div class="wrapper bg-gray gim-banner  animation-page-header"></div>

    <div class="py-10 course-main bg-dark ic-white bg-img">
        <div class="container-fluid container-xxl">
            <div class="row justify-content-center rounded">
                <div class="col-lg-10">
                    <div class="row blur">
                        <div class="col-lg-4 col-md-5 my-auto">
                            <img src="{{ asset('frontend/animation_img/animation-page.png') }}" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="course-content p-5">
                                <h2 class="text-white">About 2-Year Animation Course</h2>
                                <p class="mb-0 text-white">The Indian Animation Industry encompasses traditional 2D
                                    animation, 3D animation, and visual effects for feature films. Animated feature-length
                                    films returned the highest gross margins (around 52%) of all film genres between 2004
                                    and 2013. Animation as an art and industry continues to thrive as of the early 2020s.
                                    Today, the biggest Hollywood companies are Disney and Comcast. Together, they own or
                                    control something like 90% of all feature animation created in North America. When
                                    Disney or Pixar makes a movie, the production budget will be US$200+ million, and the
                                    studio does not expect to recoup the investment from the box office.</p>
                                <div class="d-flex mt-5">
                                    <div class="border p-2 px-3 bg-light course-duration rounded text-center d-flex">
                                        <p class="fw-normal mb-0 me-2">Course Duration <strong class="text-dark">2
                                                Year</strong></p>
                                    </div>
                                    <div class="ms-3 border bg-light p-2 px-3 course-duration rounded text-center d-flex">
                                        <p class="fw-normal me-2 mb-0">Daily Time <strong class="text-dark">2 Hours</strong>
                                        </p>
                                    </div>
                                </div>
                                <h4 class="mt-4 mb-3 text-white">Included In This Course</h4>
                                <ul class="course-point text-white">
                                    <li>100% Job</li>
                                    <li>Rich Learning Content</li>
                                    <li>Taught by Experienced Prof.</li>
                                    <li>Industry Oriented Projects</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row mb-8 justify-content-center">
            <div class="col-lg-12">
                <h2 class="text-center mt-5">Included Subjects in 2-Year Animation Course</h2>
            </div>
        </div>
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-lg-14 mb-xl-16 mb-xxl-18 mt-5">
            <div class="col-md-6">
                <div class="card bg-pale-leaf rounded">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card-body">
                                <h4>Graphic</h4>
                                <p class="mb-0">Graphic design is a profession, applied art, and academic discipline whose
                                    activity consists in projecting visual communications intended to transmit specific
                                    messages to social groups with specific objectives.</p>
                            </div>
                        </div>
                        <div class="col-md-3 text-center align-self-end pe-4">
                            <img src=" {{ asset('frontend/animation_img/animation-bg-5.png') }}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-pale-yellow rounded">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card-body">
                                <h4>2D Animation</h4>
                                <p class="mb-0">2D animation is the art of creating movement in a two-dimensional space.
                                    This includes characters, creatures, FX, and backgrounds. The illusion of movement is
                                    created when individual drawings are sequenced together over time.</p>
                            </div>
                        </div>
                        <div class="col-md-3 text-center align-self-end pe-4">
                            <img src="{{ asset('frontend/animation_img/animation-bg-4.png') }}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card bg-pale-red rounded">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card-body">
                                <h4>3D Animation Advanced</h4>
                                <p class="mb-0">Advanced 3D Animation &amp; 3D Modelling is a full-time, two-year Centre
                                    for Entertainment Arts (CEA) program focused on 3D Animation and 3D Modelling and its
                                    various departmental specializations, such as 3D animation (character and creature),
                                    rigging, 3D Modeling &amp; Sculpting,, and texturing/surfacing.</p>
                            </div>
                        </div>
                        <div class="col-md-3 text-center align-self-end pe-4">
                            <img src="{{ asset('frontend/animation_img/animation-bg-1.png') }}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-pale-primary rounded">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card-body">
                                <h4>3D FX &amp; VFX</h4>
                                <p class="mb-0">VFX involves the integration of live-action footage (which may include
                                    in-camera special effects) and generated imagery (digital or optics, animals or
                                    creatures) which look realistic but would be dangerous, expensive, impractical,
                                    time-consuming, or impossible to capture on film.</p>
                            </div>
                        </div>
                        <div class="col-md-3 text-center align-self-end pe-4">
                            <img src="{{ asset('frontend/animation_img/animation-bg-3.png') }}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-primary btn-design mt-5">
        <div class="container-fluid container-xxl mt-5">
            <div class="">
                <div class="card-body p-md-10 py-xxl-12 position-relative">
                    <div class="row gx-md-0 gx-xl-12 text-center">
                        <div class="col-lg-3 col-md-3 offset-lg-5 col-xl-6">
                            <div class="position-absolute d-block" style="bottom:0; left:10%; width: 30%; z-index:2">
                                <img src="{{ asset('frontend/animation_img/animation-bg-6.png') }}"
                                    srcset="{{ asset('frontend/animation_img/animation-bg-6.png') }} 2x" alt=""
                                    class="img-fluid">
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-9 offset-lg-5 col-xl-6">
                            <h3 class="fs-28 text-white">Learn From the Industry Experts</h3>
                            <div class="text-center course-btn" data-bs-toggle="modal" data-bs-target="#">
                                <button class="btn btn-warning text-primary btn-sm mt-2 px-4 py-3 fs-18">Apply For the
                                    Module</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row d-flex align-items-center mt-3 mb-5">
                <div class="col-lg-7 col-md-6 wow fadeInUp " data-wow-delay="0.1s" style="padding-right: 35px;">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <video src="{{ asset('frontend/animation_img/Graphics-Video.mp4') }}" class="rounded"
                                autoplay="" loop="" controls="" muted="muted" controlslist="nodownload"
                                width="100%"></video>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-5" style="padding-left: 35px;">
                    <h1 class="">Graphics</h1>
                    <ul class="course-points">
                        <li>Understand Concepts of Graphics &amp; illustration</li>
                        <li>2D Graphics Design</li>
                        <li>Digital illustration</li>
                        <li>Product Design</li>
                        <li>Product Packaging Design</li>
                        <li>Digital Painting</li>
                        <li>Photo Manipulation</li>
                        <li>Design graphics Profile</li>
                        <li>Software – Adobe Photoshop CC, Adobe Illustrator CC, Drawing</li>
                    </ul>
                    <div class="course-btn" data-bs-toggle="modal" data-bs-target=".inq_form">
                        <button class="btn btn-warning text-primary btn-sm mt-2 py-4 fs-18 fs-5">Apply For The Graphics</button>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center mt-5">
                <div class="col-xl-5 col-lg-6 col-md-5 ps-lg-16 ps-md-10 mt-5" style="padding-right: 35px;">
                    <h1>2D Animation</h1>
                    <ul class="course-points">
                        <li>Cinematography</li>
                        <li>Title Making</li>
                        <li>Promo video</li>
                        <li>Rendering with the final output</li>
                        <li>Motion Graphics</li>
                        <li>Intro of Element 3D</li>
                        <li>Audio &amp; Video Editing</li>
                        <li>Creating Short Film</li>
                        <li>Making work Showreels with Online Platforms (Art Station, Behance, Dribbble, etc.)</li>
                        <li>Software – Adobe Animate CC, Adobe Audition CC, Adobe Premiere CC, Adobe After
                            effect CC, Element 3D</li>
                    </ul>
                    <div class="course-btn" data-bs-toggle="modal" data-bs-target=".inq_form">
                        <button class="btn text-primary btn-warning btn-sm mt-2 py-4 fs-5">Apply For The 2D
                            Animation</button>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp mt-5" data-wow-delay="0.1s" style="padding-left: 35px;">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <video src="{{ asset('frontend/animation_img/Animation-institute-in-surat.mp4') }}"
                                class="rounded" autoplay="" loop="" controls="" muted="muted"
                                controlslist="nodownload" width="100%"></video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper b-grey">
        <div class="container py-10 py-md-10">
            <div class="row px-lg-10 justify-content-center">
                <div class="col-lg-12 text-center">
                    <h3 class="display-4 mb-5">Workshops</h3>
                </div>
            </div>
            <div class="grid grid-view projects-masonry">
                <div class="row gx-md-10 gy-10 gy-md-13 isotope" style="position: relative; height: 349.2px;">
                    <div class="project item col-md-4 col-xl-4 product" style="position: absolute; left: 0%; top: 0px;">
                        <figure class="lift rounded mb-6"><a href="admin/event_image/student-work-2.png"
                                data-fancybox="workshop" data-caption="">
                                <img src="admin/event_image/student-work-2.png" alt=""></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                            <div class="post-header">
                                <h3 class="text-line post-title">Photo Manipulation</h3>
                            </div>
                        </div>
                    </div>
                    <div class="project item col-md-4 product" style="position: absolute; left: 33.3333%; top: 0px;">
                        <figure class="lift rounded mb-6"><a href="admin/event_image/student-workshop-3.png"
                                data-fancybox="workshop" data-caption="">
                                <img src="admin/event_image/student-workshop-3.png" alt=""></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                            <div class="post-header">
                                <h3 class="text-line post-title">Flip Book</h3>
                            </div>
                        </div>
                    </div>
                    <div class="project item col-md-4 product" style="position: absolute; left: 66.6667%; top: 0px;">
                        <figure class="lift rounded mb-6"><a href="admin/event_image/3d-paint-workshop-work-2.png"
                                data-fancybox="workshop" data-caption=""><img
                                    src="admin/event_image/3d-paint-workshop-work-2.png" alt=""></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                            <div class="post-header">
                                <h3 class="text-line post-title">3D Paint</h3>
                            </div>
                        </div>
                    </div>
                    <div class="project item col-md-4 product" style="position: absolute; left: 0%; top: 174.6px;">
                        <figure class="lift rounded mb-6"><a href="admin/event_image/during-workshop-1.png"
                                data-fancybox="workshop" data-caption=""> <img
                                    src="admin/event_image/during-workshop-1.png" alt=""></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                            <div class="post-header">
                                <h3 class="text-line post-title">3D FX &amp; VFX</h3>
                            </div>
                        </div>
                    </div>
                    <div class="project item col-md-4 product" style="position: absolute; left: 33.3333%; top: 174.6px;">
                        <figure class="lift rounded mb-6"><a href="admin/event_image/lecture-workshop-2.jpg"
                                data-fancybox="workshop" data-caption=""> <img
                                    src="admin/event_image/lecture-workshop-2.jpg" alt=""></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                            <div class="post-header">
                                <h3 class="text-line post-title">Cinema 4D</h3>
                            </div>
                        </div>
                    </div>
                    <div class="project item col-md-4 product" style="position: absolute; left: 66.6667%; top: 174.6px;">
                        <figure class="lift rounded mb-6"><a href="admin/event_image/lecture-workshop-3.png"
                                data-fancybox="workshop" data-caption=""> <img
                                    src="admin/event_image/lecture-workshop-3.png" alt=""></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                            <div class="post-header">
                                <h3 class="text-line post-title">Video Editing</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper bg-soft-primary btn-design">
        <div class="container py-10">
            <div class="row">
                <div class="col-lg-12 col-xxl-10 mx-auto text-center">
                    <h5 class="fs-15 text-uppercase text-muted mb-3">FAQ</h5>
                    <h1 >If you don't see an answer to your question,
                        Fill out the contact form.</h1>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-8 col-md-8 col-12 mx-auto">
                    <div id="accordion-3" class="accordion-wrapper">
                        <div class="card accordion-item shadow-lg">
                            <div class="card-header" id="accordion-heading-3-1">
                                <button class="collapsed border-0 font" data-bs-toggle="collapse"
                                    data-bs-target="#accordion-collapse-3-1" aria-expanded="false"
                                    aria-controls="accordion-collapse-3-1" ><i class="fas fa-chevron-down me-2"></i>What
                                    will you learn in the 2 Years of Animation Course?</button>
                            </div>
                            <div id="accordion-collapse-3-1" class="collapse" aria-labelledby="accordion-heading-3-1"
                                data-bs-target="#accordion-3" style="">
                                <div class="card-body">
                                    <ul class="bullets-point ps-3">
                                        <li>Adobe Photoshop</li>
                                        <li>Adobe Illustrator</li>
                                        <li>Adobe Animate</li>
                                        <li>Adobe Audition</li>
                                        <li>Adobe Premiere Pro</li>
                                        <li>Adobe After Effects</li>
                                        <li>Element 3D</li>
                                        <li>Maya (Advanced)</li>
                                        <li>Z-brush</li>
                                        <li>Nuke</li>
                                        <li>Cinema 4D</li>
                                        <li>Arnold Render</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item shadow-lg">
                            <div class="card-header" id="accordion-heading-3-2">
                                <button class="collapsed border-0 font" data-bs-toggle="collapse"
                                    data-bs-target="#accordion-collapse-3-2" aria-expanded="false"
                                    aria-controls="accordion-collapse-3-2"><i class="fas fa-chevron-down me-2"></i>Career
                                    options after Animation &amp; VFX course?</button>
                            </div>
                            <div id="accordion-collapse-3-2" class="collapse" aria-labelledby="accordion-heading-3-2"
                                data-bs-target="#accordion-3" style="">
                                <div class="card-body">
                                    <ul class="bullets-point ps-3">
                                        <li>Animation film production studios</li>
                                        <li>Television channels</li>
                                        <li>Television production houses</li>
                                        <li>Ad production houses</li>
                                        <li>Gaming companies</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item shadow-lg">
                            <div class="card-header" id="accordion-heading-3-3">
                                <button class="collapsed border-0 font" data-bs-toggle="collapse"
                                    data-bs-target="#accordion-collapse-3-3" aria-expanded="false"
                                    aria-controls="accordion-collapse-3-3"><i class="fas fa-chevron-down me-2"></i>Why is
                                    this an ideal Program?</button>
                            </div>
                            <div id="accordion-collapse-3-3" class="collapse" aria-labelledby="accordion-heading-3-3"
                                data-bs-target="#accordion-3" style="">
                                <div class="card-body">
                                    <ul class="bullets-point ps-3">
                                        <li>The program teaches students to conceptualize, visualize, plan, implement,
                                            execute, and fine-tune their skills, giving them an edge over competitors.</li>
                                        <li>The program teaches Design &amp; Visualisation, 3D Animation and Advanced 3D
                                            Animation, making them future-ready.</li>
                                        <li>Students learn the latest industry-relevant software in Animation including 3ds
                                            Max with V Ray, Maya, Digital Effects, Z-Brush, and many more.</li>
                                        <li>Students also learn all the techniques of animation, including Drawings.</li>
                                        <li>Expert faculties help students create a digital portfolio with an area of
                                            specialization.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mx-auto">
                    <div class="text-center course-btn" data-bs-toggle="modal" data-bs-target=".inq_form">
                        <button class="btn text-primary btn-sm mt-2 py-4 fs-18">Ask Your Query To Our Career Counseling
                            Expert</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
