@extends('frontend.layouts.app_layout')

{{-- Meta tag sectiopn --}}
@section('description', 'About-us || ' . Config::get('constants.PROJECT_NAME'))
@section('keywords', 'About-us || ' . Config::get('constants.PROJECT_NAME'))
@section('page-title', 'About-us || ' . Config::get('constants.PROJECT_NAME'))
{{-- End Meta tag sectiopn --}}
@section('page-contain')
    <div class="web-bg ethnical-bg pb-5">
        <div class="container">
            <div class="row align-items-center container-div">
                <div class="text-light col-lg-6">
                    <h1 class="fw-bolder py-2 text-light">16 Months <br> Ethical Hacking Course</h1>
                    <h6 class="fw-bold py-2 text-light">Master the skill of programming browsers, servers, and databases with
                        our experts while working on live projects.</h6>
                    <h3 class="py-3 text-light">100% Job</h3>
                    <ul class="row ps-0 pb-2 banner-list">
                        <div class="col-sm-5">
                            <li class="py-4"><span class="me-2 background-red rounded-circle"><img
                                        src=" {{ asset('frontend/img/tutor.png') }}" alt=""
                                        class="img-fluid"></span>Experienced Tutors</li>
                            <li class="py-4"><span class="img-fluid me-2 background-red rounded-circle"><img
                                        src="{{ asset('frontend/img/web-programming.png') }}" alt=""
                                        class="img-fluid"></span>Rich Learning Content</li>
                        </div>
                        <div class="col-sm-7">
                            <li class="py-4"><span class="me-2 background-red rounded-circle"><img
                                        src="{{ asset('frontend/img/solution.png') }}" alt=""
                                        class="img-fluid"></span>Practical-based Teaching Approach</li>
                            <li class="py-4"><span class="me-2 background-red rounded-circle"><img
                                        src="{{ asset('frontend/img/briefing.png') }}" alt=""
                                        class="img-fluid"></span>Industry-oriented Projects</li>
                        </div>
                    </ul>
                    <button class="btn bg-light me-2 mb-1" style="color: #e31e25;" data-bs-toggle="modal"
                        data-bs-target=".inq_form">Apply Now</button>
                    <a href="https://www.youtube.com/watch?v=2YW__Fm5W30" target="__blank"><button
                            class="btn text-light me-2 mb-1" style="background: #e31e25;">Watch The Intro Video</button></a>
                </div>
                <div class="col-lg-6 d-lg-block d-none">
                    <img src=" {{ asset('frontend/img/ethnical-vector.png') }} " class="img-fluid" alt="full-stack-banner">
                </div>
            </div>
        </div>
    </div>


    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative">
                        <iframe class="rounded" width="560" height="420"
                            src="https://www.youtube.com/embed/3HjAwJ8PfIs?si=ZcAH338qigA6YIHM" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class=" bg-white text-start ">About ITA-CS+ Course</h2>
                    <p class="mb-2">હાલની તકે આપણે જે કોઈપણ ટેકનોલોજી નો વપરાશ કરીએ છીએ જેવી કે મોબાઈલ, ઈન્ટરનેટ,
                        બેન્કિંગ, મની ટ્રાન્સફર જેવા અન્ય કોઈપણ ડિજિટલ વ્યવહાર, તે તમામ સુવિધા ની રચના પાછળ જોડાયેલા મૂળભૂત
                        5 પરિબળો એટલે કે Hardware, Network, Server, Cloud & Security કે જેના લીધે આપણે સ્થળ, સમય અને ડર વગર
                        તે વ્યવહાર કરી શકીએ છીએ, આ 5 પરિબળોનો અભ્યાસ એટલે IT Administrator & Cyber Security Specialist.</p>
                    <p class="mb-2">આ કોર્ષમાં વિધાર્થીઓ પ્રથમ કમ્પ્યુટરના શરૂઆતી લેવલથી જ ખૂબ સરળ પધ્ધતિ દ્વારા
                        આંતરરાષ્ટ્રીય લેવલના અભ્યાસક્રમો જેવા કે CompTIA A+ CompTIA Network+, Cisco, Microsoft, AWS, Google
                        and Cyber Security ઈન્ડસ્ટ્રી એક્સપર્ટ દ્વારા Live Project ના માધ્યમ થી ભણાવવામાં આવે છે, કે જેથી
                        આંતરરાષ્ટ્રીય જોબ કે બિઝનેસ માટે વિધાર્થી તૈયાર થાય છે.</p>
                    <p class="mb-2">આ કોર્ષ વિદ્યાર્થી ટેક્નોલોજીની એક નવીનત્તમ દુનિયાના દરવાજા ખોલી આપે છે.</p>
                    <p class="mb-2">આ કોર્ષ સ્કૂલ/કોલેજ ના કમ્પ્યુટર અને નેટવર્કમાં રૂચિ રાખતા વિદ્યાર્થી માટે એક અત્યંત
                        નવાજ કરિયરની શરૂઆત છે. જેમના દ્વારા વિદ્યાર્થી IT Administrator & Cyber Security Specialist બની શકે
                        છે.</p>
                    <div class="d-flex mt-3">
                        <div class="border p-2 px-3 course-duration rounded text-center d-flex">
                            <p class="fw-normal mb-0 me-2">Course Duration <strong class="text-dark">16 Months</strong></p>
                        </div>
                        <div class="ms-3 border p-2 px-3 course-duration rounded text-center d-flex">
                            <p class="fw-normal me-2 mb-0">Daily Time <strong class="text-dark">2 Hours</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="container">
            <div class="row mb-5 mt-0">
                <div class="col-lg-12">
                    <h1 class="text-center mb-5">ITA-CS+ જ શા માટે?</h1>
                    <div class="row grid-view mb-3">
                        <div class="col-lg-3 col-6 mb-2 mb-md-6 ">
                            <div class="position-relative mg-4 mx-md-3 h-100">
                                <div class="card h-100 rounded">
                                    <div class="card-body px-6 py-5 text-center ">
                                        <span class="icon btn btn-block btn-lg btn-soft-purple mb-4"><span
                                                class="number fs-22">01</span></span>
                                        <h3 class="text-dark mb-0 fs-18">
                                            <p class="mb-0 fs-15">90% of Companies હાલમાં cloud પર જ ચાલી રહી છે.</p>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 mb-2 mb-md-6">
                            <div class="position-relative mg-4 mx-md-3 h-100">

                                <div class="card h-100 rounded">
                                    <div class="card-body px-6 py-5 text-center">
                                        <span class="icon btn btn-block btn-lg btn-soft-green mb-4"><span
                                                class="number fs-22">02</span></span>
                                        <h3 class="text-dark mb-0 fs-18">
                                            <p class="mb-0 fs-15">Cloud Computing Market 2023 સુધીમાં ટેક્સટાઈલ ઈન્ડસ્ટ્રી
                                                કરતા પણ 3
                                                ગણી મોટી થઈ જશે.</p>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 mb-2 mb-md-6">
                            <div class="position-relative mg-4 mx-md-3 h-100">

                                <div class="card h-100 rounded">
                                    <div class="card-body px-6 py-5 text-center">
                                        <span class="icon btn btn-block btn-lg btn-soft-orange mb-4"><span
                                                class="number fs-22">03</span></span>
                                        <h3 class="text-dark mb-0 fs-18">
                                            <p class="mb-0 fs-  ">IT Security માં સતત વધતી માંગના કારણે ટૂંક સમયમાં વૈશ્વિક
                                                સ્તરે
                                                અંદાજીત 3.5 મિલિયન નોકરીનું નિર્માણ થશે.</p>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 mb-2 mb-md-6">
                            <div class="position-relative mg-4 mx-md-3 h-100">

                                <div class="card h-100 rounded">
                                    <div class="card-body px-6 py-5 text-center">
                                        <span class="icon btn btn-block btn-lg btn-soft-yellow mb-4"><span
                                                class="number fs-22">04</span></span>
                                        <h3 class="text-dark mb-0 fs-18">
                                            <p class="mb-0 fs-15">Technical Hackers ને ઇન્ડિયાની સૌથી વધુ પગાર આપતી Top
                                                Companies
                                                જેવી કે Dell, Google, Wipro, Reliance, Infosys &amp; IBM.</p>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12">
                <h2 class="text-center mb-4">Why ITA-CS+ in RNW?</h2>
                <div class="row ms-lg-10">
                    <div class="col-lg-6 col-12">
                        <ul class="course-point mb-0">
                            <li>15 વર્ષથી વાલીઓ અને વિદ્યાર્થીઓનો ભરોષો ધરાવતી સંસ્થા.</li>
                            <li>વિષય નિષ્ણાંત શિક્ષકો દ્વારા Live Training. ઈન્ડસ્ટ્રી માં કાર્ય કરી રહેલા વ્યક્તિ પાસેથી.
                            </li>
                            <li>વિશાળ લેબ અને પ્રેક્ટિકલની તમામ સુવિધા.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-12">
                        <ul class="course-point">
                            <li>100% નોકરી નો સપોર્ટ.</li>
                            <li>5 વર્ષ સુધી સપોર્ટની જવાબદારી.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x far fa-user text-primary mb-4"></i>
                            <h5 class="mb-3">100,000+</h5>
                            <p>Career Awareness Counselling</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fas fa-3x fa-certificate text-primary mb-4"></i>
                            <h5 class="mb-3">37,500+</h5>
                            <p>Passout Students</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fas fa-3x  fa-suitcase text-primary mb-4"></i>
                            <h5 class="mb-3">100%</h5>
                            <p>Placed Students</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa far fa-3x  fa-user text-primary mb-4"></i>
                            <h5 class="mb-3">1250+</h5>
                            <p>Companies Tie-Ups</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-12">
                <div class="mb-3">
                    <h2 class="text-center">ITA-CS+ માં શું આવશે?</h2>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center text-center py-2">
            <div class="col-lg-3 mb-2 border rounded py-2 px-2 my-1 mx-1 text-center">
                <a href="#computer-foundation" class="d-block">
                    <h4 class="mb-0">Computer Education</h4>
                </a>
            </div>
            <div class="col-lg-3 mb-2  border rounded py-2 px-2 my-1 mx-1 text-center">
                <a href="#computer-hardware" class="d-block">
                    <h4 class="mb-0">Computer Hardware</h4>
                </a>
            </div>
            <div class="col-lg-2 mb-2  border rounded py-2 px-2 my-1 mx-1 text-center">
                <a href="#networking" class="d-block">
                    <h4 class="mb-0">Networking</h4>
                </a>
            </div>
            <div class="col-lg-3 mb-2  border rounded py-2 px-2 my-1 mx-1 text-center">
                <a href="#switches-routers-technology" class="d-block">
                    <h4 class="mb-0">Switches &amp; Routers Technology</h4>
                </a>
            </div>
            <div class="col-lg-2 border rounded py-2 px-2 my-1 mx-1 text-center">
                <a href="#server" class="d-block">
                    <h4 class="mb-0">Server</h4>
                </a>
            </div>
            <div class="col-lg-2 border rounded py-2 px-2 my-1 mx-1 text-center">
                <a href="#cloud-computing" class="d-block">
                    <h4 class="mb-0">Cloud Computing</h4>
                </a>
            </div>
            <div class="col-lg-4 border rounded py-2 px-2 my-1 mx-1 text-center">
                <a href="#cyber-security-ethical-hacking" class="d-block">
                    <h4 class="mb-0">Cyber Security &amp; Ethical Hacking</h4>
                </a>
            </div>
            <div class="col-lg-3 border rounded py-2 px-2 my-1 mx-1 text-center">
                <a href="#soft-skill" class="d-block">
                    <h4 class="mb-0">Soft Skill Training</h4>
                </a>
            </div>
        </div>
    </div>

    <div class="text-center course-btn mt-3" data-bs-toggle="modal" data-bs-target="#"><button
            class="btn btn-primary btn-sm mt-4">100% નોકરી લક્ષી કોર્ષ માટે આજે જ એપ્લાય કરો</button></div>


    <div class="container">
        <div class="row card p-lg-3 p-2 my-5 flex-row" id="computer-foundation">
            <div class="col-lg-3 text-center">
                <h2 class="fs-100">1</h2>
                <h1 class="">Computer Foundation</h1>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <p>આ વિષય એક સામાન્ય માણસને કમ્પ્યુટરનું સંપૂર્ણ બેઝિક નોલેજ આપવા માટે બનાવવામાં આવ્યો છે. આજે વિશ્વ
                            વધારે ને વધારે ટેક્નોલોજી તરફ આગળ વધી રહ્યું છે જેમાં કમ્પ્યુટર જેવા સાધનો નો સૌથી વધારે ઉપયોગ
                            કરવામાં આવે છે. માટે દરેક સામાન્ય માણસને કમ્પ્યુટર નોલેજ લેવાની અતિશય જરૂરિયાત છે. આપણે સૌ જાણીએ
                            જ
                            છીએ કે હિસાબ, ખરીદી થી લઇને બુકિંગ તેમજ આધાર કાર્ડ, લાયસન્સ કે કોઈપણ પ્રકારની એપ્લિકેશન ને લગતા
                            દરેક
                            કામ આજે કમ્પ્યુટર અને ઈન્ટરનેટ દ્વારા જ થાય છે જેમાં MS-Office સૌથી વધારે ઉપયોગી થતું હોય છે
                            જેના
                            તમામ મોડ્યુલ્સ આ કોર્ષ માં આવરી લેવામાં આવ્યા છે.</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="border p-2 px-3 rounded d-inline-block">
                            <h5 class=" ">MODULES TO LEARN:</h5>
                            <p class="fs-16">Wordpad, Excel, MS Word, Paint, PowerPoint</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row card p-lg-3 p-2 my-5 flex-row" id="computer-foundation">
            <div class="col-lg-3 text-center">
                <h2 class="fs-100">2</h2>
                <h1 class="">Computer Hardware</h1>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <p>આપણે જાણીએ છીએ કે આજના યુગમાં મોબાઈલ ફોન તેમજ કમ્પ્યુટર એક અગત્યનું સાધન બની ગયું છે અને તેના
                            વિના જીવન જીવવું ભવિષ્યમાં મુશ્કેલ હશે. આજે રોજીંદા જીવન તેમજ વ્યવસાયને લગતા દરેક કામ ઓટોમેટિક
                            તેમજ કમ્પ્યુટર દ્વારા થાય છે અને જો આપણને હાર્ડવેરના તમામ ભાગો કેવી રીતે કામ કરે છે તેમજ રિપેર
                            કઈ રીતે કરી શકાય તેની સંપૂર્ણ જાણકારી હોય તો આપણું કાર્ય ક્યારે પણ અટકે નહીં માટે આજે દરેક નાની
                            મોટી કંપનીઓ માં એક કમ્પ્યુટર હાર્ડવેર એક્સપર્ટની જરૂર હોઈ છે અને તેના માટેના તમામ ટોપીક્સ
                            આસિલેબસમાં આવરી લેવામાં આવ્યા છે.</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="border p-2 px-3 rounded d-inline-block">
                            <h5>MODULES TO LEARN IN CompTIA A+ 220-1001, CompTIA A+ 220-1002:</h5>
                            <p class="fs-16">Hardware, Printer & Scanner, Networking, Troubleshooting, Windows Operating
                                System, Other Operating System and Technology, Security, Software Troubleshooting,
                                Operational Procedure</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row card p-lg-3 p-2 my-5 flex-row" id="computer-foundation">
            <div class="col-lg-3 text-center">
                <h2 class="fs-100">3</h2>
                <h1 class="">Networking</h1>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <p>ઘણા બધા કમ્પ્યુટર્સ ને એક સાથે જોડવા તેમજ એક જ કમ્પ્યુટર દ્વારા ઘણા બધા ડિવાઈઝને એક્સેસ કરવા માટે
                            જે સિસ્ટમ વપરાય છે તેને નેટવર્કિંગ કહેવાય છે. જેમ કોઈ ઓફિસમાં એક જ પ્રિન્ટર ઘણા બધા કમ્પ્યુટર
                            સાથે જોડાયેલું હોય છે કારણ કે તે પ્રિન્ટર તેમ જ બધા જ કમ્પ્યુટર્સ એકબીજા સાથે નેટવર્ક દ્વારા
                            જોડાયેલા હોય છે, જેના માટે સ્વીચ કે રાઉટર્સ ડિવાઈઝનો ઉપયોગ થતો હોય છે તો આમ નેટવર્કીંગ ના
                            માધ્યમથી ઘણા બધા ડિવાઈઝ ઓનલાઈન તેમજ ઓફલાઈન જોડી શકાય છે અને CompTIA Network+ એ IT માટે
                            નેટવર્કિંગ નું આવશ્યક નોલેજ તેમજ ભણતર પૂરૂ પાડે છે.</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="border p-2 px-3 rounded d-inline-block">
                            <h5>MODULES TO LEARN IN CompTIA Network+:</h5>
                            <p class="fs-16">Topologies and Infrastructure, Addressing and Routing, Troubleshooting and
                                Management, Installation Network Sites, Security</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row align-items-center b-red rounded mt-5 px-10 py-5">
            <div class="col-lg-9 col-md-8 text-center">
                <h3 class="text-white mb-0">તો આજેજ એડમિશન કરાવી તમારી સીટ કન્ફર્મ કરો.</h3>
            </div>
            <div class="col-lg-3 col-md-4 text-center course-btn">
                <a href="#" class="btn btn-white btn-sm" data-bs-toggle="modal" data-bs-target=".inq_form">Apply
                    Now</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row card mt-5">
            <div class="col-lg-12 my-8 mt-5">
                <h2 class="text-center">અમારી સાથે જોડાયેલી રાષ્ટ્રીય અને આંતરરાષ્ટ્રીય કંપનીઓ</h2>
            </div>
            <div class="col-lg-12">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/1.jpg') }}" alt=" " title=""
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/2.jpg') }}" alt=" " title=""
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/3.png') }}" alt=" " title=""
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/4.png') }}" alt=" " title=""
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/5.jpg') }}" alt=" " title=""
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/6.png') }}" alt=" " title=""
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/7.png') }}" alt=" " title=""
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/8.png') }}" alt=" " title=""
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/9.png') }}" alt=" " title=""
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/19.png') }}" alt=" " title=""
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 my-5">
                <h2 class="text-center">Companies That Can Hire ITA CS+ Course Candidates</h2>
            </div>
            <div class="col-lg-12">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/companie-logo-1-min.jpg') }}" alt=" "
                                title="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/companie-logo-2-min.jpg') }}" alt=" "
                                title="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/companie-logo-3-min.jpg') }}" alt=" "
                                title="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/companie-logo-4-min.jpg') }}" alt=" "
                                title="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/companie-logo-5-min.jpg') }}" alt=" "
                                title="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/companie-logo-6-min.jpg') }}" alt=" "
                                title="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/companie-logo-7-min.jpg') }}" alt=" "
                                title="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/companie-logo-8-min.jpg') }}" alt=" "
                                title="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/companie-logo-10-min.jpg') }}" alt=" "
                                title="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/companie-logo-11-min.jpg') }}" alt=" "
                                title="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/companie-logo-12-min.jpg') }}" alt=" "
                                title="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/companie-logo-13-min.jpg') }}" alt=" "
                                title="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/companie-logo-14-min.jpg') }}" alt=" "
                                title="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/companie-logo-15-min.jpg') }}" alt=" "
                                title="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="company-wrapper">
                            <img src="{{ asset('frontend/company_logo/companie-logo-16-min.jpg') }}" alt=" "
                                title="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 my-8 mt-10 text-center">
                <h2 class="text-center mt-5">તો આજેજ એડમિશન કરાવી તમારી સીટ કન્ફર્મ કરો.</h2>
                <div class="course-btn">
                    <a href="#" class="btn btn-primary btn-sm mt-2" data-bs-toggle="modal"
                        data-bs-target=".inq_form">Apply
                        Now</a>
                </div>
            </div>
        </div>
    </div>
@endsection
