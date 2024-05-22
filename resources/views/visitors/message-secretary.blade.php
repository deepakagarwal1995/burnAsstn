@extends('layouts.visitorsApp', ['page_title' => 'Message from Secretary'])
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
                <h1>Message from Secretary</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>Message from  Secretary</span></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="about-style-three" style="    background: #fff;">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title mb-0">

                        </div>

                        <div class="text-box">


						   <p align="justify">Dear Colleagues, <br><br>

As the Honorary Secretary for the Asia Pacific Burn Association, I am committed to the goals of the APBA and working towards the improvement in burn care in the Asia Pacific Region. The future success of the APBA belongs to the Committee and its members and is pivotal in enabling the association to realise its mission and long-term goals to provide a common platform to promote mutual collaboration between different specialists and institutes involved in the management of burn, foster training and education and help in the dissemination of knowledge and creation of guidelines for management of burns.
<br><b>
Best wishes,</b></p>





                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                    <div class="image-box text-center">
                        <figure class="image image-1"><img
                                src="{{ config('app.url') }}/assets/images/rachel.jpg"
                                alt="Associate Professor Rachel Kornhaber PhD, RN" style="    max-height: 180px;
    width: auto;
    max-width: 100%;">
                        </figure>
                       <h4>Associate Professor Rachel Kornhaber PhD, RN</h4>
                            <p>
(Secretary -
                                    APBA)

                            </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
