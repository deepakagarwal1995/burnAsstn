@extends('layouts.visitorsApp', ['page_title' => 'History'])
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
                <h1>History</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><span>History</span></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="about-style-three" style="    background: #fff;">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title mb-0">
                            <h2>History of APBA</h2>
                        </div>

                        <div class="text-box mt-5">

                             <p class="text-justify">The concept for Asia Pacific Burn Conference was conceived in 1993 and a series of regional congresses followed, the first of which was hosted by Dr ST Lee in Singapore. The second was held in Hong Kong in 1996 and thereafter in Taipei(1999), Brisbane(2002), Shanghai (2005) and Seoul (2007). Initially it was a three year cycle, but after the Shanghai meeting it was changed to a two year cycle so that it would avoid clashing with the biennial ISBI congress. Hence the APBC is held in alternate year of the ISBI conference.</p>
                        </div>
                        <div class="text-box mt-3">

                             <p class="text-justify">The 1st meeting to formalize the APBA was held in 2004 at the ISBI Congress in Yokohama hosted by Prof. Naoki Aikawa. The senior leadership of the Asia Pacific region had a meeting to discuss the formalization of the association. This meeting of the senior leadership of the Asia Pacific region was at the initiative of Prof. Andrew Burd from Hongkong. At this meeting a steering committee was constituted to oversee the formalization of the APBA. The steering committee included Prof Andrew Burd (Hongkong), Dr. Rajeev Ahuja (India), Zhao-Fan Xia (China), Prof. Dong Chul Kim (South Korea) and Ms. Sheela Kavanagh (Australia). During the 7th APBC at New Delhi in 2009, the senior leadership decided to formalize this into an association and to proceed with the making of the byelaws and the registration of the APBA. Hence this collaboration of multiple nationalities in the Asia Pacific region was formalized on January 20, 2009 with the inauguration of the Asia Pacific Burn Association (APBA) at New Delhi, India. Dr. Rajiv Ahuja, who was the Organizing Chairperson of the 7th APBC, was the founding President of APBA. Dr. David Mackie, President Elect of the International Society of Burn Injuries (ISBI) was present to congratulate the founding members of this association. During the 7th APBC at New Delhi in 2009, the senior leadership decided to proceed with the making of the byelaws and the registration of the APBA. The process of finding a workable constitution catering to the varying complex requirements of the member nations went on for over five years. At the 2015 APBC at Bali, an executive committee was founded after a meeting with many members from across the Asia Pacific region. Founder President Dr. Rajeev Ahuja and honorary secretary Dr. Vinita Puri (India) formulated the constitution with the help of the then President Dr. Niann-Tzyy Dai(Taipei) and Immediate Past President Dr.Nyoman Riasa (Bali, Indonesia). With the herculean efforts of Dr. Nyoman Riasa, the APBA was finally registered at Bali, Indonesia.</p>

                             <h4 class="mt-5 mb-2">References :</h4>
                             <ul>
                                <li style="font-size: 18px;">• Andrew Burd The Asia Pacific Burns Association. Letter to the Editor. Burns 31 (2005) 534</li><li style="font-size: 18px;">
• Andrew Burd. The Asia Pacific Burn Association - patience is rewarded. Editorial. JPRAS 62 (2009) 436-437</li>
                             </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    @endsection
