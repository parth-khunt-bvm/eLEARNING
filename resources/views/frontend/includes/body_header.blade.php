  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
      <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
          <!-- <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2> -->
          <img height="50px" src="{{  asset('frontend/img/logo.png') }}" />
      </a>
      <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto p-4 p-lg-0">
              <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>

              <!-- <div class="nav-item dropdown">
                <a href="#" class="nav-item nav-link" data-bs-toggle="dropdown">STD 10th & 12th</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{route('gim-course')}}" class="dropdown-item">GIM (Graduate In Multimedia)</a>
                    <a href="{{route('ita-cs-ethical-hacking')}}" class="dropdown-item">ITA-CS+</a>
                    <a href="{{route('animation')}}" class="dropdown-item">Animation & VFX 2 year</a>
                </div>
            </div> -->
              <a href="{{route('gim-course')}}" class="nav-item nav-link">STD 10th & 12th</a>

              <!-- <div class="nav-item dropdown">
                <a href="{{ route('about') }}" class="nav-item nav-link" data-bs-toggle="dropdown">About</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{ route('about') }}" class="dropdown-item">About Us</a>
                    <a href="{{ route('student-works')}}" class="dropdown-item">Student Works</a>
                </div>
            </div> -->
              <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
              <a href="{{ route('courses') }}" class="nav-item nav-link">Courses</a>
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Student Corner</a>
                  <div class="dropdown-menu fade-down m-0">
                      <a href="{{route('emp-application')}}" class="dropdown-item">Apply job</a>
                      <!-- <a href="{{route('student-placement')}}" class="dropdown-item">Placement</a> -->
                      <a href="{{ route('why-i-choose-ndme') }}" class="dropdown-item">Why I choose NDME</a>
                      <!-- <a href="{{ route('placement-partners')}}" class="dropdown-item">Placement Partners</a> -->
                  </div>
              </div>
              <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
              <!-- <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                  <div class="dropdown-menu fade-down m-0">
                      <a href="team.html" class="dropdown-item">Our Team</a>
                      <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                      <a href="404.html" class="dropdown-item">404 Page</a>
                  </div>
              </div> -->
          </div>
          <a href="{{ route('contact') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
      </div>
  </nav>
  <!-- Navbar End -->