@extends('layouts.visitorsApp', ['page_title' => 'Bidding Process For Conference'])
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
                <h1>Bidding Process For Conference</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><span>Bidding Process For Conference</span></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="about-style-three" style="    background: #fff;">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="col-lg-12 col-md-12 col-sm-12 content-column">


							<p align="justify"><strong>General guidelines for qualifying host country / city</strong></p>
              <ul class="show_bullets">
                  <li>The qualifying country must have demonstrated continued interest in APBA for at least 5-6 years by large delegations to the APBC and by significant participation in the Scientific Programs. When the membership fee becomes applicable the bidding country should have a large membership representation.</li>
                  <li>Host city must have an international airport with direct flights from many countries and there should be adequate transport facilities within the city.</li>
                  <li>There should be no visa restrictions for any nationality.</li>
                  <li>English language must be at least second language for the host country.</li>
                  <li>The host country / city should have no legal / social restrictions for alcohol, meat, any religion etc.</li>
                  <li>No country's bid shall be considered if it is within 5 years of hosting another International Congress on Burns. in the same country.</li>
                  <li>No APBC hosting country shall be free to enter into unilateral agreements with other Organizations for any purpose without the consent of the APBA Executive committee.</li>
                  <li>It has to be stated in all promotional material and in congress backdrops that APBC is the official Congress of Asia Pacific Burn Association.</li>
             </ul><br>

             <p align="justify"><strong>General guidelines for qualifying venue</strong></p>
             <ul class="show_bullets">
                 <li>Congress has to be planned for approx 600 delegates.</li>
                 <li>Venue must have 1 hall / auditorium to seat approx. 600 delegates. There should be another 3 halls to seat 200 delegates each for concurrent sessions.2-3 committee rooms to seat about 20 persons should be available for business meetings.</li>
                 <li>Venue should have broadband internet facilities.</li>
                 <li>There should be adequate space for Exhibition. </li>
                 <li>Having secure and convenient transportation means for delegates to meeting venues or dinner locations </li>
                 <li>Facilitate overseas delegates with the immigration (visa) processes while keeping the cost of meeting within 10% variations.</li>
                 <li>Demonstrate clearly that the meeting can be self-sustainable financially with a provisional balance sheet (Provide a budget for the congress)</li>
             </ul><br>

              <p align="justify"><strong>General guidelines for applications</strong></p>
              <p align="justify">Applications are to be made to the Executive Director / Secretary, APBA at least 4 years before the proposed year of Congress.</p>
              <ul>
                  <li>Application has to be made on behalf of a National Burn Society or jointly by a team (at least 4 senior signatories) of APBA members. Mention endorsements from allied societies, if any.</li>
                  <li>The application must include :
                      <ul style="list-style: none;">
                          <li>a) Year of proposed Congress </li>
                          <li>b) Possible dates (with weather conditions).</li>
                          <li>c) City, International flights availability</li>
                          <li>d) Venue and its facilities (must fulfill the requirement of number and capacity of the rooms and auditorium etc)</li>
                      </ul>
                  </li>
                  <li>e.  Key individuals responsible for the Congress organization.
                    <ul style="list-style: none;">
                      <li>i) President / Co President / Chairman etc.</li>
                      <li>ii) Organizing secretary</li>
                      <li>iii) Chairman, Scientific Committee</li>
                      <li>iv) Treasurer</li>
                      <li>v) Editor, Transactions </li>
                      <li></li>
                    </ul>
                  </li>
                  <li>3.  Accommodation available at venue and in the city.
                      <ul style="list-style: none;">
                        <li>a)  Names of the shortlisted hotels (with star rating) </li>
                        <li>b)  Rooms available for Congress at each hotel</li>
                        <li>c)  Indicative price</li>
                       </ul>
                  </li>
                  <li>4.  Proposed Registration fee structure
                    <ul style="list-style: none;">
                      <li>a)  APBA members-High income / low-income countries</li>
                      <li>b)  Non APBA members- High income / low-income countries</li>
                      <li>c)  Accompanying persons</li>
                      <li>d)  Paramedical</li>
                      <li>e)  Students</li>
                    </ul>
                  </li>
                  <li>5.  Proposed budget-Income &amp; expenditure account.</li>

              </ul><br>

              <p align="justify"><strong>General guidelines for processing of applications</strong></p>
              <ul class="show_bullets">
                      <li>After the initial scrutiny of the application the secretary shall invite the President / Chairman/Org secretary to present the bid in person at one of the Executive meetings. The presentation will be in power point / video. The presenter will be expected to answer all queries of the Executive members. APBA will not bear any costs towards this presentation.</li>
                      <li>The executive committee shall short list the accepted bid(s) for presentation to the General Assembly, and the Secretary will intimate the result to the bidding nation / individuals.</li>
                      <li>The short-listed bid(s) will have to be presented at the General Assembly meeting held 4 years before the proposed dates of the Congress under consideration (i.e., in 2008 for Congress in 2012). If there are more than one bid at the General Assembly then the members will vote by a show of hands.</li>

              </ul><br>
              <p align="justify"><strong>General guidelines for accepted bids</strong></p>
              <p align="justify">President / Chairman and the Organizing secretary for the Congress shall jointly submit the following :</p>
              <ul style="list-style: none;">
                      <li>1.  An undertaking to state that APBA will not be responsible in the event of a revenue loss from hosting the Congress.</li>
                      <li>2.  An undertaking about savings (50 percentage of the profit shall be retained for National Association/ group and 50 percentage will be returned to APBA).</li>
                      <li>3.  An undertaking stating that an audited statement of account shall be submitted to APBA within 9 months from the conclusion of the Congress.</li>
                      <li>4.  Failure to provide the above undertaking within 3 months of the acceptance of the bid shall lead to cancellation of the bid.</li>

                    </ul>

							<!-- <a href="#" class="btn btn-primary get-in-touch animate fadeInRight" data-text="Registration Form"><i class="fa fa-hand-o-right"></i>Registration Form</a> -->









						</div>



						 <!-- side-bar start-->


<!--
						<div class="col-md-4 animate fadeInRight" style="border: 2px solid #e9ebf1;">

								<div class="service-box three">

									<h5><strong>Upcoming Events</strong></h5>
                                     <p class="text-left"><strong> Webinar on Pediatric Burns </strong> <sup>  </sup>   <sup>  </sup> 1st Nov, 2023</p>
                                     <p class="text-left" style=" font-size: 17px;">
									 <a href="#" class="btn btn-primary get-in-touch-1 animate fadeInRight" data-text="View More Details" target="_blank" style="margin-left: 2%">
									View More Details</a></p>
									 <p class="text-left" style=" font-size: 17px;">
									 <a href="#" class="btn btn-primary get-in-touch-1 animate fadeInRight" data-text="Register Here" target="_blank" style="margin-left: 2%">
									Register Here</a></p>

                                </div>

							</div>


							-->
                           <!-- side-barend-->



            </div>
        </div>
    </section>

    @endsection
