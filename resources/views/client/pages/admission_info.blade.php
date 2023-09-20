@extends('client.layouts.masterlayout')
@section('content')
<div class="fables-choose-background fables-after-overlay py-4 py-md-5 bg-rules overflow-hidden px-3 px-md-0">
    <div class="container position-relative z-index">
        <div class="row">
            <div class="col-12 col-lg-12 bg-white px-6 py-3 py-md-5 wow fadeInRight" data-wow-delay="1s"
                data-wow-duration="1.5s">
                <h2 class="font-30 font-weight-bold fables-second-text-color">ADMISSION INFORMATION</h2>
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
                                    Admission Requirments
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                                (A) For Bachelors Programs : Minimum GPA 2.5 in both SSC and HSC or equivalent examinations or ‘O’ level in five subjects and ‘A’ level in two subjects with minimum ‘C’ grade in each or US High School Diploma. <br>
                                (B) For Postgraduate Programs : Minimum Bachelor degree relevant to the Postgraduate programs. Please refer the specific admission requirements relating to the desired program of study in the faculty link(i.e. Faculty of Health Science). <br>
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
                                    Aplication Procedure
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                                Interested candidates may collect ‘Application Form’ from the admission offices mentioned below. It may be noted that cost of an application package is Tk. 300/- (payable in cash). <br>
                                After filling up please submit the Application Form to the admission offices along with : <br>
                                Photocopies of the academic credentials (Transcript, Testimonial, Certificate and certificate of professional degree etc.)<br>
                                All photocopies of academic credentials should be attested by a 1st class gazetted officer.<br>
                                6 (Six) copies of recent color photographs (3 stamp-size + 3 P.P -size).<br>
                                All submitted applications will be verified by the admission committee whether these are eligible for the program or not.<br>
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
                                    For Overseas Student
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                                <b>Aplication Procedure:</b> <br>
                                Northern University Bangladesh welcomes international students and makes every effort to assist them to get admitted in its academic programs, special consideration is given to the students from SAARC countries, South and South-East Asia.
                                Anyone satisfying the eligibility criteria for admission is welcome to apply. Foreign nationals currently living in Bangladesh, may also take the opportunity to join in the different programs. The tuition fees and other charges of the programs are at a reasonable level.
                                The cost of living in Bangladesh is one of the lowest in the SAARC region. Our campus is situated mainly in Dhaka metropolitan Area. The cost of accommodation and meals will be approximately US$ 100 per month. The applicants from abroad must obtain valid VISA to study at NUB. Responsibility of getting a VISA from Bangladesh High Commission/Consulate concerned lies with the students.
                                All fees and charges involved for issuance of VISA or extension of VISA should be borne by the incumbent students.
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
                                    General Term & Condition For The Admitted Students
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                            <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                                Student must comply with all university regulations such as : <br><br>

                                The university reserves the right to expel a student if s/he does not fulfill the requirements of the university or his/her behavior is disruptive;<br>
                                Enrolment in a course or a program creates a binding agreement to follow academic regulations and payment of fees and charges;<br>
                                Tuition fees must be paid in advance or by installment if it is agreed;<br>
                                Tuition fees are not refundable after the commencement of a course;<br>
                                If a course is not conducted by the university, there will be a full refund of tuition fees;<br>
                                All payments must be made at ‘Shahjalal Islami Bank’ or any other prescribed bank which is payable to ‘Northern University Bangladesh’;<br>
                                The university may suspend a student without notice if tuition fees are in arrears;<br>
                                The university reserves the right to change the fees & charges anytime with notice;<br>
                                No person or organization is authorized to make any representation or promises on behalf of NUB;<br>
                                All international students must comply with all their visa status regulations as specified by the Home Office;<br>
                                NUB reserves the right to change any provision or requirement at any time, even within a student’s term of enrolment. The university further reserves the right to ask the student to withdraw, for any due cause, at any time;<br>
                                The university reserves to add or withdraw members from its faculty and to arrange courses, programs and facilities as teaching and economic exigencies render desirable;<br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection