@extends('layouts.visitorsApp', ['page_title' => 'About'])
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
                <h1>About</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><span>About</span></li>
                </ul>
            </div>
        </div>
    </section>
     <section class="about-style-three">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image image-1"><img
                                src="{{ config('app.url') }}/assets/images/about.png" style="    max-height: 325px;
    width: auto;    margin: auto;
    display: block;
    max-width: 100%;" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title mb-0">
                            <h2>About APBA</h2>
                        </div>
                        <div class="text-box">
                            <h4>Welcome to Asia Pacific Burn Association</h4>
                            <p>The Asia Pacific Burn Association (APBA) is a non-profit organization which aims for improvement in burn care in the Asia Pacific Region which is defined to include, but not limited to, the following countries; Afghanistan, Australia, Bangladesh, Bhutan, Cambodia, China, Hong Kong (China), India, Indonesia, Iran, Iraq, Israel, Japan, Laos, Malaysia, Myanmar, New Zealand, Nepal, Pakistan, Philippines, Russia, Singapore, South Korea, Sri Lanka, Thailand, Taiwan, Turkey and Vietnam.</p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-style-three" style="    background: #fff;">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title mb-0">
                            <h2>Mission Statement</h2>
                        </div>

                        <div class="text-box">
                             <h4>Mission Statement</h4>
                             <ul>
                                    <li>• To promote scientific, evidence based, comprehensive multidisciplinary management of burn injuries and encourage basic and clinical research.</li>

<li>• The Association aims to create a common platform to promote mutual collaboration between different specialists and institutes involved in the management of burn, foster training and education and help in the dissemination of knowledge and creation of guidelines for management of burns.</li>

<li>• The Association aims can be achieved by organising conferences, CMEs, seminars, training programs/fellowships, publishing of scientific literature, establishing of website etc.</li>
                                </ul>
                        </div>

                    </div>
                </div>
                 <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image image-1"><img
                                src="{{ config('app.url') }}/assets/images/how-to-stay-focused-on-your-mission.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
