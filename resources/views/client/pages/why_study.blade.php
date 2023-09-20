@extends('client.layouts.masterlayout')
@section('content')
<div class="fables-choose-background fables-after-overlay py-4 py-md-5 bg-rules overflow-hidden px-3 px-md-0">
    <div class="container position-relative z-index">
        <div class="row">
            <div class="col-12 col-lg-12 bg-white px-6 py-3 py-md-5 wow fadeInRight" data-wow-delay="1s"
                data-wow-duration="1.5s">
                <h2 class="font-30 font-weight-bold fables-second-text-color">WHY CHOOSE NUB</h2>
                <p class="fables-main-text-color font-14 my-3">
                    Mission of NUB is to offer such programs of study and related functions that will be directly linked to socio-economic empowerment of the people of the country. It will also conduct educational research and developmental programs of higher quality that would be at par with industry needs, skill-ready world and real life situation.
                </p>
                <div id="accordion">
                    <div class="card border-0 mb-2">
                        <div class="card-header p-0 border bg-transparent rounded-0" id="headingOne">
                            <h5 class="mb-0 position-relative">
                                <span
                                    class="fables-second-background-color white-color d-inline-block 
position-absolute fables-lus-icon pt-2 text-center">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <button
                                    class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate"
                                    data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Key Features
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                                Choice of 3 starting dates per year gives students the flexibility to join the chosen program at their convenience. <br>
                                North American & European standard academic curriculum.<br>
                                The academic programs of NUB are well designed & comprehensive in nature.<br>
                                The fees are moderate in comparison to other private universities.<br>
                                Having a centre for management development and research (CMDR).<br>
                                Teaching incorporates all the latest developments in business and IT.<br>
                                Focus of the programs is to enable students to operate in global environments.<br>
                                Programs are very contemporary and forward looking in nature.<br>
                                Programs include core training in transferable skills-including English, Computing and Communication.<br>
                                Modern library with rich collection of books (95,000), journals, articles, encyclopedia and reference section.<br>
                                Separate placement office to assist students to find challenging & growth oriented employment & Internship.<br>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 mb-2">
                        <div class="card-header bg-transparent p-0 border rounded-0" id="headingTwo">
                            <h5 class="mb-0 position-relative">
                                <span
                                    class="fables-second-background-color white-color d-inline-block 
position-absolute fables-lus-icon pt-2 text-center">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <button
                                    class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Financial Assistance
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                                A. Tuition fee waiver will be available depending on the results of SSC/HSC/equivalent examinations as follows (Applicable for undergraduate students only):
                                <br>
                                100% waiver on tuition fees for Golden GPA 5.00 (in both SSC/equiv & HSC/equiv).<br>
                                60% waiver on tuition fees for normal GPA 5.00 (in both SSC/equiv & HSC/equiv).<br>
                                40% waiver on tuition fees for GPA 4.80-4.99 (in both SSC/equiv & HSC/equiv).<br>
                                30% waiver on tuition fees for GPA 4.50-4.79 (in both SSC/equiv & HSC/equiv).<br>
                                20% waiver on tuition fees for GPA 4.00-4.49 (in both SSC/equiv & HSC/equiv).<br>
                                10% waiver on tuition fees for GPA B 3.50-3.99 (in both SSC/equiv & HSC/equiv).<br><br>
                                B.  Additional waiver (Subject to approval of the authority).<br>

                                Special 5% scholarship on tuition fee for females.<br>
                                20% scholarship on tuition fee for siblings.<br>
                                Special waiver for wards of Freedom Fighters.<br><br>
                                C.  Siblings would get 20% waiver each on tuition fees or waiver on result of SSC/HSC whichever is higher. A certificate from concerned ward commissioner and academic transcript of SSC examination should be submitted along with the application.<br><br>

                                D.  A student will get merit scholarship @ Tk.3,000/-, 2000/-, & 1,000/- for 1st, 2nd & 3rd position respectively based on the semester final result for all undergraduate programs except B. Pharma or any other programs of bi-semester where it should be @ Tk. 4000, Tk. 3000, & Tk. 2000 respectively provided they get minimum GPA 3.50.<br><br>

                                E. Generous financial assistance is also available for underprivileged and meritorious students. But they have to earn and maintain GPA 3.00.<br><br>

                                Note: Above mentioned financial assistance will be available depending on some conditions as follows:<br>

                                Waiver will be discontinued if any student gets GPA bellow 2.00 in any semester.<br>
                                Waiver will be adjusted in the following semester.<br>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 mb-2">
                        <div class="card-header p-0 border bg-transparent rounded-0" id="headingThree">
                            <h5 class="mb-0 position-relative">
                                <span
                                    class="fables-second-background-color white-color d-inline-block 
position-absolute fables-lus-icon pt-2 text-center">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <button
                                    class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed"
                                    data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Logistic supports
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                                225 full time faculty members with proven teaching & research excellence at home & abroad. <br>
                                Adjunct faculties from DU, BUET, IBA, JU, RU, RUET etc.<br>
                                Well-stacked library with total collection around 1, 20,000 books.<br>
                                Online Library<br>
                                State-of-the-art computer lab with more than 800 computers with internet facilities.<br>
                                100 Mbps dedicated internet bandwidth. Wi-Fi facility, high speed internet browsing and learning LAB at all buildings. All Class rooms are equipped with multimedia projector and faculty buildings are connected with high speed data connectivity.<br>
                                18 Modern Digital Labs for Electrical, Electronics, Telecommunications and Pharmacy.<br>
                                Air-conditioned classrooms with audio-visual supports.<br>
                                Auditorium with modern facilities.<br>
                                24 hours Security Guards with latest CCTV camera monitoring.<br>

                            </div>
                        </div>
                    </div>
                    <div class="card border-0 mb-2">
                        <div class="card-header p-0 border bg-transparent rounded-0" id="headingfour">
                            <h5 class="mb-0 position-relative">
                                <span
                                    class="fables-second-background-color white-color d-inline-block 
position-absolute fables-lus-icon pt-2 text-center">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <button
                                    class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed"
                                    data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Others facilities
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                            <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                                Generous lending facilities of text/reference books. <br>
                                24 hours free Internet facility with fiber optic backbone. <br>
                                Student advising system.<br>
                                Special English language program.<br>
                                Job placement opportunity.<br>
                                Fit for future framing.<br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection