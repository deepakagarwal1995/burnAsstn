@extends('layouts.visitorsApp', ['page_title' => 'Membership'])
@section('content')
    <section class="page-title">
        <div class="bg-layer" style="background-image: url({{ config('app.url') }}/assets/images/banner/banner-3.jpg);"></div>
        <div class="pattern-layer" style="background-image: url({{ config('app.url') }}/assets/images/shape/shape-20.png);">
        </div>
        <div class="line-box">
            <div class="line-1"></div>
            <div class="line-2"></div>
        </div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Membership</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><span>Membership</span></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="about-style-three" style="    background: #fff;">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="content-box">


                        <div class="text-box mt-5">
							<p align="justify"><b>Dear colleagues,</b></p><p>
							</p><p align="justify"> The <strong>“ASIA PACIFIC BURN ASSOCIATION” (APBA)</strong> is a non-profit organization. The aims of the APBA are to promote scientific, evidence based,
							 comprehensive multidisciplinary management of Burns and encourage basic and clinical research. The society aims to create a common platform to
							 promote mutual collaboration between different specialists and institutes involved in the treatment of Burns, foster training and education and help in
							 the dissemination of knowledge and creation of guidelines for management of Burns.<br>
							 We are seeking to establish a register of Members for the “ASIA PACIFIC BURN ASSOCIATION” (APBA).<br>
							 Currently there is no membership fee required. If and when the APBA international board requests a membership fee you will be informed accordingly.</p>
							<p> <strong>The eligibility criteria for membership are (both mandatory):</strong><br>
							  •	a doctor, nurse, scientist, related health care worker or individual who is interested and actively engaged in the study of,
							             diagnosis and care of Burn patients <br>
							    • a member of a national association that deals with Burns</p>
								<p>In case you desire to be included as a life member of the Asia Pacific Burn Association and consent to its bylaws please fill in the requisite details
								 in the attached form.</p>
                               <p> Please scan and e mail the completed form to <strong>president@apburn.org </strong> </p>
								<p>Please note that your application may be reviewed by your country’s representative on the APBA international board and membership may be refused.<br>
								Looking forward to having you join us in Singapore and Japan for APBA 2019 and 2021 respectively.  </p>

								Regards<br>
								<strong> Prof. Vinita  Puri</strong><br>
								President - Asia Pacific Burn Association<br>
								Prof. and Head, Department of Plastic Surgery<br>
								Seth G S Medical College and KEM Hospital, Mumbai, India<br>


							<p></p>
							<hr>
							<h5><strong>Membership Details : </strong>
						    </h5>

							<p align="justify">The membership of APBA consists of ‘Full members’, ‘Associate Members’ and ‘Honorary members’.<br>
                                The application for ‘Full membership’/ ‘Associate membership’ shall be addressed to the Secretary of the Society in the prescribed format [5]
								 and shall be accompanied with the requisite fee, when applicable. The executive committee shall decide on admission of ‘Full / Associate’ members
								 from other countries in the Region that are not listed above. Admission may be refused if there is any doubt on integrity of the applicant.
						    </p>
							<p align="justify"><strong>Full membership :</strong> A ‘full member’ is defined as any doctor, nurse or therapist who is either practising burn management
							 or has practiced in the past. An applicant shall be eligible to apply for membership as a Full Member if he or she maintains a valid and unrestricted
							 license to practice medicine/ nursing/rehabilitation in his/her country of practice in the Asia- Pacific Region (applicable for those affiliated with
							  medical disciplines).
						    </p>
							<p align="justify"><strong>Associate membership :</strong> An ‘Associate member’ is defined as any other person like a scientist, health care worker or
							corporate individual who is interested in the study of, or management of burns.
						    </p>
							<p align="justify"><strong>Honorary membership :</strong> An “Honorary member’ is defined as an individual, from any part of the world, who has been identified by
							the Executive committee of APBA as a person of excellence in the specialty of burn management. Honorary members may be proposed, by any member,
							 for their distinguished contribution to APBA, and they shall be admitted at a Congress of APBA in person, upon the recommendation of the Executive.
						    </p>
							<p align="justify">All burn professional from the countries mentioned above who wish to be included in the initial list of membership of APBA shall forward
							 their contact details to the secretary.
						    </p><br>
							<p><strong>Membership Application For  “ASIA PACIFIC BURN ASSOCIATION” (APBA)</strong></p>
							<p align="justify">I, the undersigned hereby desire to become a life member of the Asia Pacific Burn Association and consent to its bylaws.
						    </p>
							<p align="justify"><strong>I certify that I fulfill the eligibility criteria for membership mentioned below. </strong><br>
								•	a doctor, nurse, scientist, related health care worker or individual who is interested and actively engaged in the study of,
								    diagnosis and care of Burn patients / survivors <br>
								•	a member of my national association that deals with Burns

						    </p>


                        </div>
                        <style>
                            .download-section .download-list li {
     display: inline-block;
     margin-right: 10px;
}
                        </style>
                        <div class="home_2">
                            <div class="download-section">


                       <ul class="download-list clearfix">

                                <li>
                                    <a href="{{url('/registration')}}">
                                        <div class="icon-box"><img src="{{ config('app.url') }}/assets/images/icons/icon-33.png" alt=""></div>
                                        <h3>Online</h3>
                                        <span>Apply Online</span>
                                    </a>
                                </li>
                            </ul>
  </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @endsection
