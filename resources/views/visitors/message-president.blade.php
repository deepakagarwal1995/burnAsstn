@extends('layouts.visitorsApp', ['page_title' => 'Message from President'])
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
                <h1>Message from President</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>Message from  President</span></li>
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


						   <p align="justify">I stand before you today, deeply honoured and humbled to assume the role of President of the Asia Pacific Burn Association. I move from having been the founder honorary secretary of the Association to the role of President.  With immense gratitude for the trust you all have placed in me; I pledge to serve this esteemed organization with unwavering dedication and commitment during my two-year term.</p>

						   <p align="justify">As we embark on this journey together, I would like to extend my heartfelt appreciation to the Executive Director and Founder President Dr. Rajeev Ahuja for his outstanding leadership, guidance and dedication towards the APBA. My thanks also to my predecessors, Prof. Gaoxing Luo, from Chongqing, China for his leadership over the past two years and the Past Presidents Prof. Nyoman Putu Riasa (Indonesia), Dr. N T Dai (Taiwan), Dr. Chong Si Jack (Singapore) and Prof. Hajime Matsumura (Japan) for their contributions which have propelled our Association forward, and I am committed to building upon their successes. </p>

						   <p align="justify">The Asia Pacific Burn Association is more than just an organization; it is a community of passionate professionals dedicated to advancing the field of burn care and rehabilitation throughout our diverse and dynamic region. Over the years, we have made significant strides in improving burn care, fostering research, and enhancing the quality of life for burn survivors. Together, we have created a platform that enables us to share knowledge, collaborate on research projects, and support one another in our quest to alleviate the physical and emotional suffering caused by burn injuries.</p>

						   <p align="justify">During my tenure as President, I envision several key priorities and initiatives that will guide our collective efforts:<br><br>
<strong>Advancing Research and Education: </strong>We will continue to promote cutting-edge research and education in the field of burn care. This includes organizing conferences, workshops, and webinars to facilitate knowledge exchange and collaboration among our members.<br><br>
<strong>Patient-Centered Care: </strong>We must always remember that our primary mission is to improve the lives of burn survivors. We will work to ensure that our practices and policies are patient-centered and that the voices of survivors and their families are heard and valued.<br><br>
<strong>Mentorship and Networking: </strong>Nurturing the next generation of burn care professionals is crucial. We will establish mentorship programs and create opportunities for young professionals to connect with experienced mentors.<br><br>
<strong>Advocacy: </strong>Advocating for burn prevention, safety measures, and access to quality care is essential. Each of us need to actively engage with policymakers and stakeholders in our own regions to promote policies that protect and support our patients. </p>

<p align="justify">Throughout my term, I will rely on your input, expertise, and dedication to achieve our goals. Our strength lies in our collective efforts, and I am confident that, together, we can make significant strides in the field of burn care. Please feel free to write to me at vp@kem.edu </p>

<p align="justify">I invite each member to actively participate in our Association's activities, share your ideas, and collaborate with fellow members to make a positive impact. Your contributions, whether through research, volunteering, or advocacy, are vital to our success.</p>

<p align="justify">In closing, I want to express my profound gratitude for the opportunity to lead the Asia Pacific Burn Association. Together, we will work tirelessly to advance our mission and make a meaningful difference in the lives of burn survivors.</p>

						   <p align="justify">Thank you for your trust, and I look forward to the exciting journey ahead.</p>




                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                    <div class="image-box text-center">
                        <figure class="image image-1"><img
                                src="{{ config('app.url') }}/assets/images/vinita-puri.jpg"
                                alt="Vinita Puri" style="    max-height: 180px;
    width: auto;
    max-width: 100%;">
                        </figure>
                       <h2>Vinita Puri</h2>
                            <p align="justify">

                                  <strong>President, Asia Pacific Burn Association</strong><br>
									Prof. and Head, Department of Plastic Surgery<br>
								Seth G S Medical College and KEM Hospital, Mumbai, India<br>

                            </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
