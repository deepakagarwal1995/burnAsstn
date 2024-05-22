@extends('layouts.visitorsApp', ['page_title' => 'Past Events'])
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
                <h1>Past Events</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>Past Events</span></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="faq-section sec-pad">
        <div class="auto-container">

            <div class="row clearfix">

                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="schedule-block-one">
                        <div class="inner-box table-responsive">
                            <h4>Chronological history of APBC (Asia Pacific Burn Conference)</h4>

                            <table  class="table table-bordered table-stripped ">

								  <tbody><tr>

									<td><strong>Sr. No</strong> </td>

									<td><strong>Location</strong> </td>

									<td><strong>Date</strong> </td>

								  </tr>

								  <tr>

									<td> 1<sup>st</sup> Conference </td>

									<td> Singapore </td>

									<td> 1993 </td>

								  </tr>

								  <tr>

									<td> 2<sup>nd</sup> Conference </td>

									<td> Hong Kong </td>

									<td> 1996 </td>

								  </tr>

								  <tr>

									<td> 3<sup>rd</sup> Conference </td>

									<td> Taipei </td>

									<td> 1999 </td>

								  </tr>

								  <tr>

									<td> 4<sup>th</sup> Conference </td>

									<td> Brisbane </td>

									<td> 2002 </td>

								  </tr>

								  <tr>

									<td> 5<sup>th</sup> Conference </td>

									<td> Shanghai </td>

									<td> 2005 </td>

								  </tr>

								  <tr>

									<td> 6<sup>th</sup> Conference </td>

									<td> Seoul </td>

									<td> 2007 </td>

								  </tr>

								  <tr>

									<td> 7<sup>th</sup> Conference </td>

									<td> Delhi </td>

									<td> 2009 </td>

								  </tr>

								  <tr>

									<td> 8<sup>th</sup> Conference </td>

									<td> Bangkok </td>

									<td> 2011 </td>

								  </tr>

								  <tr>

									<td> 9<sup>th</sup> Conference </td>

									<td> Hanoi </td>

									<td> 2013 </td>

								  </tr>

								  <tr>

									<td> 10<sup>th</sup> Conference </td>

									<td> Bali </td>

									<td> 2015 </td>

								  </tr>

								  <tr>

									<td> 11<sup>th</sup> Conference </td>

									<td> Taipei </td>

									<td> 2017 </td>

								  </tr>

								   <tr>

									<td> 12<sup>th</sup> Conference </td>

									<td> Singapore</td>

									<td> 2019 </td>

								  </tr>

								  <tr>

									<td> 13<sup>th</sup> Conference </td>

									<td> Japan (Virtual)</td>

									<td> 2021 </td>

								  </tr>

								  	  <tr>

									<td> 14<sup>th</sup> Conference </td>

									<td> Chongqing (China)</td>

									<td> 2023 </td>

								  </tr>

								</tbody></table>
                            </div>
                            </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="schedule-block-one">
                        <div class="inner-box table-responsive">
                            <h4>CMEs</h4>

                            <table class="table table-bordered table-stripped ">

								  <tbody><tr>

									<td><strong>CME</strong> </td>

									<td align="center"><strong>Title</strong> </td>

									<td><strong>Date</strong> </td>

								  </tr>
								  <tr>
								  	  <td>1<sup>st</sup> CME</td>
								  	  <td>Controversies in Fluid Management in Burns</td>
								  	  <td>11<sup>th</sup> March, 2021</td>
								  </tr>
								  <tr>
								  	  <td>2<sup>nd</sup> CME </td>
								  	  <td>Post-burn contractures of the neck – simplified and demystified</td>
								  	  <td>8<sup>th</sup> July, 2021</td>
								  </tr>
								  <tr>
								  	  <td>3<sup>rd</sup> CME</td>
								  	  <td>Post Burn Trunk &amp; Axillary Contractures</td>
								  	  <td>30<sup>th</sup> Sept, 2021</td>
								  </tr>
								  <tr>
								  	  <td>4<sup>th</sup> CME</td>
								  	  <td>Nursing Care in Burns</td>
								  	  <td>09<sup>th</sup> Dec, 2021</td>
								  </tr>
								  <tr>
								  	  <td>5<sup>th</sup> CME</td>
								  	  <td>Skin Banking &amp; The Clinical Use of Skin Allografts for Burns</td>
								  	  <td>24<sup>th</sup> March, 2022</td>
								  </tr>
								  <tr>
								  	  <td>6<sup>th</sup> Symposium </td>
								  	  <td>HAND BURNS- Tips and tricks and management hacks for better function</td>
								  	  <td>14 <sup>th</sup> July, 2022</td>
								  </tr>
								  <tr>
								  	  <td>7<sup>th</sup> Symposium </td>
								  	  <td>Pediatric Burns</td>
								  	  <td>16 <sup>th</sup> March, 2023</td>
								  </tr>

								    <tr>
								  	  <td>8<sup>th</sup> Symposium </td>
								  	  <td>Burn Scars</td>
								  	  <td>17 <sup>th</sup> July, 2023</td>
								  </tr>

                            </tbody></table>
                            </div>
                            </div>
                            </div>
            </div>
        </div>
    </section>
@endsection
