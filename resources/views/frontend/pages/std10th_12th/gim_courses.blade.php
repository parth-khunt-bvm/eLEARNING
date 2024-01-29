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
    <div class="container">
        <div class="card shadow-none my-n15 my-lg-n17 gim-wrapper rounded"
            style="margin-top: -113px; margin-right:-67px; margin-left:-71px; border-style: none;">
            <div class="card-body rounded" style="padding: 40px; ">
                <div class="row">
                    <div class="mb-10 text-center">
                        <div class="p-5 pb-0 rounded border">
                            <h2 class="text-center">કોલેજ કે ઉચ્ચ શિક્ષણ પછી પણ શા માટે વિદ્યાર્થીઓ ને નોકરી નથી
                                મળતી?</h2>
                            <img src="{{ asset('frontend/img/news.jpg') }}" class="my-4 img-fluid ">
                            <p class="text-center mt-3">કારણ કે શાળા કે કોલેજમાં સારા શિક્ષકો તેમજ ઉત્તમ સ્ટાફ
                                હોવા છતાં જે ભણાવવામાં આવે છે તે અભ્યાસક્રમ ઘણો જૂનો હોય છે કે જેથી ઈન્ડસ્ટ્રી
                                કે માર્કેટ પ્રમાણે જે લેટેસ્ટ નોલેજ વિદ્યાર્થી માં હોવું જોઈએ તે મળતું નથી તેમજ
                                વિદ્યાર્થીઓમાં
                                ખરેખર સ્કિલ અને આવડતનો અભાવ રહી જાય છે જેના કારણે કોલેજ પૂર્ણ કર્યા બાદ તરત જોબ
                                મળવી ખૂબ જ મુશ્કેલ થઈ જાય છે અને મળે તો પણ જે ક્ષેત્રનું ભણ્યા હોય તેની નથી
                                મળતી.</p>
                            <div class="text-center course-btn my-3" data-bs-toggle="modal" data-bs-target=".inq_form">
                                <button class="btn btn-primary btn-sm mt-4">Apply
                                    Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="mb-8 mt-5">
                        <h2 class="text-center">તેના માત્ર બે જ કારણ છે કે:-</h2>
                    </div>
                    <div class="col-md-6 col-sm-12 col-12 mt-5">
                        <div class="row align-items-center">
                            <div class="col-12 border-md-none border-end">
                                <div class="gim-reasons text-center">
                                    <img src="{{ asset('frontend/img/gim-1.png') }}" width="150px">
                                    <h5 class="fw-normal ps-3 mt-2">શાળા કે કોલેજમાં સ્કીલ બેઇઝ એજ્યુકેશન નો અભાવ.
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-12 mt-5">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-12">
                                <div class="gim-reasons text-center">
                                    <img src="{{ asset('frontend/img/gim-2.png') }}" width="150px">
                                    <h5 class="fw-normal ps-3 mt-2">વિદ્યાર્થીઓમાં રહેલી આંતરિક શક્તિ તેમજ આવડત મુજબ
                                        ફિલ્ડની પસંદગી.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center my-6 mt-5">
                    <div class="col-12 py-4">
                        <h2 class="text-center">કેવી હોવી જોઈએ એજ્યુકેશન સિસ્ટમ? </h2>
                        <p class="text-center">હાર્વર્ડ અને કેમ્બ્રિજ કે જે દુનિયાની સૌથી બેસ્ટ યુનિવર્સીટી છે
                            તેની એજ્યુકેશન સિસ્ટમ કેવી છે?</p>
                    </div>
                    <div class="col-lg-4 col-4 mb-4">
                        <div class="text-center">
                            <span class="icon btn btn-block btn-lg btn-soft-purple mb-2"><span
                                    class="number fs-22">01</span></span>
                            <p class="text-dark mb-0 fw-bold fs-18 mt-1"><strong class="fs-18">90% પ્રેક્ટિકલ, 10%
                                    થિયરી</strong></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-4 mb-4">
                        <div class="text-center">
                            <span class="icon btn btn-block btn-lg btn-soft-green mb-2"><span
                                    class="number fs-22">02</span></span>
                            <p class="text-dark mb-0 fw-bold mt-1"><strong class="fs-18">પ્રોજેક્ટસ તેમજ કેસ
                                    સ્ટડી</strong></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-4 mb-4">
                        <div class="text-center">
                            <span class="icon btn btn-block btn-lg btn-soft-orange mb-2"><span
                                    class="number fs-22">03</span></span>
                            <p class="text-dark mb-0 fw-bold mt-1">
                                <strong class="fs-18">ઇનોવેશન અને ક્રિએટિવિટી</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row my-10 align-items-center mt-6">
                    <div class="col-lg-6 col-md-6 col-12 text-center mt-5">
                        <h3 class="mb-3">તેમજ વિદેશ ની એજ્યુકેશન સિસ્ટમ કેવી હોઈ છે?</h3>
                        <p>વિદેશ ની જે એજ્યુકેશન સિસ્ટમ થી આકર્ષાઈ ને ભારતીય વિદ્યાર્થીઓ ત્યાં ભણવા જાય છે તે જ
                            સિસ્ટમ થી તે ભારત માં રહીને પણ ભણી શકે છે અને તે પણ ત્યાં કરતા ઓછા ખર્ચે પરંતુ અભાવ
                            છે તો માત્ર જાણકારી નો કે એવું એજ્યુકેશન મેળવવું ક્યાંથી ?
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 order mb-sm-4 mb-0 mt-5">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/KrBnRcpWGEI?si=cI_LwecHEVQtpk6r" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="text-center course-btn mt-3" data-bs-toggle="modal" data-bs-target="#">
                        <button class="btn btn-primary btn-sm mt-4">Apply For This Module</button>
                    </div>
                </div>
                <div class="row my-10 align-items-center mt-5">
                    <div class="col-lg-6 col-sm-12 mt-3">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/JYnEbcTCyVI?si=KH4WckUSKzX4W0B3" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>

                    </div>
                    <div class="col-lg-6 col-sm-12 text-center mt-3">
                        <h3 class="my-3">અમે આપીએ છીએ આ તમામ સમસ્યા નું નિવારણ</h3>
                        <p>The Red &amp; White Group of Institutes આ જ બાબતને ધ્યાનમાં રાખીને છેલ્લા ૧૫ વર્ષથી
                            કાર્યરત છે અને એક જ હેતુથી કાર્ય કરે છે.
                        </p>
                        <p> “દરેક ભારતીય યુવાન પોતાની આવડત મુજબ આજના સમયમાં ઝડપથી વિકાસ પામતા ક્ષેત્રનું
                            પ્રેક્ટિકલ અને વ્યવસાય તેમજ નોકરી લક્ષી ભણતર મેળવે અને આંતરરાષ્ટ્રીય કારકિર્દી
                            બનાવે.”
                        </p>
                        <p class="mb-0">એટલે કે હાલની એજ્યુકેશન સિસ્ટમ અને ઇન્ડસ્ટ્રી વચ્ચે રહેલા ગેપને દૂર કરવા
                            Red &amp; White પ્રેકટીકલ તેમજ સ્કિલ બેઈઝ નોલેજ સાથે શિક્ષણ આપે છે. માટે વિદ્યાર્થીને જે
                            ફિલ્ડ માં જોબ કરવાની ઇચ્છા હોય અથવા તો વિદ્યાર્થીની આવડત કે કાર્યકુશળતા
                            જે ફિલ્ડ માં વધારે હોય તે ફિલ્ડ માં ભણવા માટેનો અભ્યાસક્રમ એટલે GIM
                        </p>
                    </div>
                    <div class="text-center course-btn mt-3" data-bs-toggle="modal" data-bs-target="#">
                        <button class="btn btn-primary btn-sm mt-4">Apply For This Module</button>
                    </div>
                </div>
                <div class="row mb-5 align-items-center mt-0 mt-5">
                    <div class="mb-5">
                        <h2 class="text-center">GIM જ શા માટે?</h2>
                        <p class="text-center mt-2">ઘણીવાર વિદ્યાર્થીઓ મિત્રોની દેખાદેખી, લોકોની સલાહ કે ઘરની
                            પરિસ્થિતિ પ્રમાણે ફિલ્ડની પસંદગી કરતા હોય છે જે ખરેખર આગળ જઈને ખૂબ જ ખરાબ પરિણામ
                            આપતું હોય છે માટે ફિલ્ડની પસંદગી હંમેશા પોતાની આવડત તેમજ કાર્ય કુશળતાને ધ્યાનમાં
                            રાખીને જ કરવી જોઈએ.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                        <h3 class="mb-3">હવે સવાલ એ છે કે ખરેખર આપણી આવડત કે કાર્ય કુશળતાને ઓળખવી કઇ રીતે?.</h3>
                        <p>તો તેના માટે તજજ્ઞો, ઈન્ડસ્ટ્રી એક્સપર્ટ તેમજ સાયકોલોજીસ્ટની સલાહ લઈને GIM(Graduate
                            in multimedia) અભ્યાસક્રમ તૈયાર કરવામાં આવ્યો છે કે જેમાં વિદ્યાર્થીની આંતરિક શક્તિ
                            તેમજ આવડતને પારખવામાં આવે છે ત્યારબાદ જ કોઈ ફિલ્ડની
                            પસંદગી કરવામાં આવે છે.
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 order mb-sm-4 mb-0">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/GKbGus5vY1s?si=eMeAwpIx2uyrTCax"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="text-center course-btn mt-3" data-bs-toggle="modal" data-bs-target=".inq_form">
                        <button class="btn btn-primary btn-sm mt-4">Apply For This Module</button>
                    </div>
                </div>
                <div class="row mb-0 align-items-center mt-3">
                    <div class="mb-5 mx-auto col-md-8 col-sm-12">
                        <h2 class="text-center mb-4">ફાયદાઓ</h2>
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0" style="list-style-type: none;">
                            <li><span><i class="fas fa-check"></i></span> અમારી સંસ્થા આંતરરાષ્ટ્રીય જોડાણ ધરાવતી
                                હોવાથી વિધાર્થીઓ GIM નાં સર્ટીફીકેટથી દેશ – વિદેશમાં નોકરી મેળવી શકે છે .</li>
                            <li><span><i class="fas fa-check"></i></span> વિદ્યાર્થી પોતાની આવડત ને અનુરૂપ
                                ક્ષેત્ર માં અભ્યાસ કરતા હોવાથી ખુબજ સારી સફળતા મેળવે છે .</li>
                            <li><span><i class="fas fa-check"></i></span> IT અને કોમ્યુટર ના દરેક ક્ષેત્રો નું
                                પ્રથમ અભ્યાસ કર્યા હોવાથી બિઝનેસ અને નોકરી માં સફળતા મેળવે છે .</li>
                            <li><span><i class="fas fa-check"></i></span> આ અભ્યાસક્રમ ટોટલ પ્રેકિટકલ હોવાથી
                                વિદ્યાર્થી બિઝનેસ કે નોકરી માં ડાયરેકટ જોડાય શકે છે તેમને ટ્રેનિંગ ની જરૂર રહેતી
                                નથી .</li>
                            <li><span><i class="fas fa-check"></i></span> વિધાર્થીની વ્યકિતગત સોફટ સ્કીલ પર
                                પૂરતું ધ્યાન અપાતું હોવાથી મોટી કંપનીઓમાં વિદ્યાર્થી સરળતાથી જોડાય શકે છે.</li>
                            <li><span><i class="fas fa-check"></i></span> આ અભ્યાસક્રમ બદલાય રહેલી ટેકનોલોજી ને
                                અનુરૂપ હોવાથી વિધાર્થી અત્યારના નવા ક્ષેત્ર ની અંદર નોકરી કે બીઝનેસ કરી શકે છે.
                            </li>
                            <li><span><i class="fas fa-check"></i></span> તમામ ફિલ્ડ આવડત અને પ્રેક્ટિકલ નોલેજ પર
                                આધારિત હોવાથી જેટલી આવડત વધારે હોય તેટલી વધારે income મેળવી શકાય.</li>
                            <li><span><i class="fas fa-check"></i></span> ઘરે બેસીને કામ કરવા માટે.</li>
                            <li><span><i class="fas fa-check"></i></span> દેશમાં જ રહીને Freelancing અથવા
                                Outsourcing વડે વિદેશ ના કામ કરી શકાય.</li>
                            <li><span><i class="fas fa-check"></i></span> Red &amp; White Surat ની
                                1250+ કરતા પણ
                                વધારે કંપની ઓ સાથે જોડાયેલુ છે.
                            </li>
                        </ul>
                        <div class="mt-5 text-center">
                            <a href="https://api.whatsapp.com/send?phone=917984711520&amp;text=Hi%2C%20I%20want%20to%20know%20more%20about%20your%20College"
                                target="_blank" class="fw-normal course-btn"><button
                                    class="btn btn-primary btn-sm">Whatsapp કરો</button></a>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <h2 class="text-center">GIM માં શું આવશે?</h2>
                    <p class="text-center">IT કે Computer ક્ષેત્રમાં આવતા 9 ફિલ્ડમાં થી ક્યાં ફિલ્ડ માં ભણવું
                        કે ઉત્તીર્ણ થવું તેના માટે શરૂઆતના ચાર મહિના બધી જ ફિલ્ડ વિષે ભણીશું, તેને લગતા
                        પ્રોજેક્ટ બનાવીશું, ફિલ્ડ માં આવનાર પ્રોબ્લેમ્સ નો પ્રેક્ટીકલ સાથે અભ્યાસ કરીશું અને
                        અંતમાં એક પરીક્ષા આપીશું કે જેના થકી આપણને એ જાણવા મળે કે આ 9 પૈકી કઈ ફિલ્ડમાં આપણી
                        આવડત સૌથી વધારે છે.</p>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="border text-center p-2 rounded mt-3">
                            <a href="graphic-design-course-surat.php" target="_blank">
                                <h4 class="mb-0 fs-16"> UI-UX &amp; Graphics Design</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mt-3">
                        <div class="border text-center p-2 rounded">
                            <a href="master-in-front-end-developing.php" target="_blank">
                                <h4 class="mb-0 fs-16">Front End Developing</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mt-3">
                        <div class="border text-center p-2 rounded">
                            <a href="web-development-course-surat.php" target="_blank">
                                <h4 class="mb-0 fs-16">Back End Developing</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mt-3">
                        <div class="border text-center p-2 rounded">
                            <a href="android-training-course-surat.php" target="_blank">
                                <h4 class="mb-0 fs-16">Android Development</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="border text-center p-2 rounded mt-3">
                            <a href="ios-training-surat.php" target="_blank">
                                <h4 class="mb-0 fs-16">iOS Development</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="border text-center p-2 rounded  mt-3">
                            <a href="flutter-training-surat.php" target="_blank">
                                <h4 class="mb-0 fs-16">Flutter Development</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="border text-center p-2 rounded mt-3">
                            <a href="game-design-development-course-surat.php" target="_blank">
                                <h4 class="mb-0 fs-16">Game Designing</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="border text-center p-2 rounded mt-3">
                            <a href="game-development-course-surat.php" target="_blank">
                                <h4 class="mb-0 fs-16">Game Developing</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="border text-center p-2 rounded mt-3">
                            <a href="animation-course-surat.php" target="_blank">
                                <h4 class="mb-0 fs-16">Animation</h4>
                            </a>
                        </div>
                    </div>
                    <div class="text-center course-btn mt-3" data-bs-toggle="modal" data-bs-target=".inq_form">
                        <button class="btn btn-primary btn-sm mt-4">100% નોકરી લક્ષી કોર્ષ માટે આજે જ એપ્લાય
                            કરો</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
