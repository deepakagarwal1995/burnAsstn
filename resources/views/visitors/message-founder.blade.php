@extends('layouts.visitorsApp', ['page_title' => 'Message from Founder President'])
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
                <h1>Message from Founder President</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>Message from Founder President</span></li>
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

                            <p>Asia Pacific Burn Association (APBA) represents the burn scenario of the Asia Pacific region. This is a good forum for Burn experts and all stakeholders in the management of Burns to exchange ideas, share experiences and discuss problems unique to our area.</p><p>

The Asia Pacific region includes many of the countries where "Burn is endemic " and there are enormour deformities leading to severe morbidity. It is my hope that with the APBA as a binding factor, all professionals involved in Burn care in this region come forward not only to disseminate and advance the knowledge of burn management but also to lessen the sufferings in the low income countries of South east Asia.</p><p>

I would like to complement our Honorary Secretary Prof. Vinita Puri and our webmaster Rei Ogawa for their efforts to collate the information and design the website for APBA. The website provides a link for membership and it is my ardent hope that all burn care professionals register themselves as members of our association. A membership database will help increase the participation of the future Asia Pacific Burn Conferences and also disseminate information about the activities in the region and research and fellowship activities.</p>
                           <h4>Looking forward to meeting many of you at the 12th APBC at Singapore.</h4>

                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                    <div class="image-box text-center">
                        <figure class="image image-1"><img
                                src="{{ config('app.url') }}/assets/images/rajeev-ahuja.jpg"
                                alt="Rajeev Ahuja" style="    max-height: 180px;
    width: auto;
    max-width: 100%;">
                        </figure>
                       <h2>Rajeev Ahuja</h2>
                            <p class="et_pb_testimonial_meta"><span class="et_pb_testimonial_position">(Founder President &
                                    Executive Director)</span></p>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
