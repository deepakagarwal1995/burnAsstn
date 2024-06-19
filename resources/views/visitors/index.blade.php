@extends('layouts.visitorsApp', ['page_title' => $title])
@section('content')
    <style>
        .carousel-caption {
            padding-bottom: 30px;
            width: 100%;
            right: 0;
            left: 0;
            bottom: 0;
            background: linear-gradient(rgb(0 0 0 / 4%) 3%, #000 100%, rgb(0 0 0 / 61%));
        }

        .carousel-caption h5 {
            color: #fff;
            font-size: 25px;
            padding: 10px 0;
        }

        .carousel-caption p {
            color: #fff;
            padding-bottom: 10px;
        }
    </style>
    <div class="herobanner h-100 position-relative">

        <div id="carouselExample" class="carousel slide carousel-fade">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">

                 @foreach($banners as $row)

                <div class="carousel-item @if($loop->index==0)
active
                @endif h-100">
                    <div class="herobanner-img position-relative h-100">
                        <img class="w-100" src="{{ url('storage/images/'.$row->image) }}" alt="banner"
                            class="jpdiv">
                    </div>
                </div>
  @endforeach
                   {{-- <div class="carousel-caption d-none d-md-block">
                            <h5>Asia Pacific Burn Association</h5>
                            <p>The 9th Asia Pacific Burns Congress.</p>
                        </div> --}}


            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


    </div>



    <section class="about-style-three">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image image-1"><img
                                src="{{ config('app.url') }}/assets/images/about.png" style="    max-height: 325px;
    width: auto; margin: auto;
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
                            <p>The Asia Pacific Burn Association (APBA) is a non-profit organization which aims for
                                improvement in burn care in the Asia Pacific Region which is defined to include, but not
                                limited to, the following countries/regions; Afghanistan, Australia, Bangladesh, Bhutan,
                                Cambodia, China, Hong Kong (China), India, Indonesia, Iran, Iraq, Israel, Japan, Laos,
                                Malaysia, Myanmar, New Zealand, Nepal, Pakistan, Philippines, Russia, Singapore, South
                                Korea, Sri Lanka, Thailand, Taiwan, Turkey and Vietnam.</p>
                            <div class="link-box">
                                <a href="{{route('about')}}"><span>Read More</span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="online-service-section sec-pad">
        <div class="auto-container">
            <div class="row clearfix">

<div class="col-lg-12 text-center">
                 <div class="sec-title">
                            <h2>Message From Our Leaders</h2>
                            <p>With courage and compassion, we stand as one, shaping a future that uplifts every voice and honors every aspiration. </p>
                        </div>

</div>
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <h4 class="member-title text-center-sm">Message from Founder President</h4>
                    <div class="members">
                        <img src="{{ config('app.url') }}/assets/images/rajeev-ahuja.jpg" alt="members">

                        <div class="members_description">
                            <p>"APBA represents the burn scenario of the Asia Pacific
                                region. This is a good forum for Burn experts and all stakeholders in the management of
                                Burns to exchange ideas, share experiences and discuss problems unique to our area."</p>
                            <span class="et_pb_testimonial_author">Rajeev Ahuja</span>
                            <p class="et_pb_testimonial_meta"><span class="et_pb_testimonial_position">(Founder President &
                                    Executive Director)</span></p>
                                    <a href="{{route('message-founder')}}" class="theme-btn btn-one mt-3">Read More</a>
                        </div>

                    </div> <!-- .et_pb_testimonial_description -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <h4 class="member-title text-center-sm">Message from President</h4>
                    <div class="members">
                        <img src="{{ config('app.url') }}/assets/images/vinita-puri.jpg" alt="members">

                        <div class="members_description">
                            <p>"Dear Esteemed Members,

                                I stand before you today, deeply honoured and humbled to assume the role of President of the
                                Asia Pacific Burn Association. I move from having been the founder honorary secretary of the
                                Association"</p>
                            <span class="et_pb_testimonial_author">Vinita Puri</span>
                            <p class="et_pb_testimonial_meta"><span class="et_pb_testimonial_position">(President)</span>
                            </p>
                             <a href="{{route('message-president')}}" class="theme-btn btn-one mt-3">Read More</a>
                        </div>

                    </div> <!-- .et_pb_testimonial_description -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <h4 class="member-title text-center-sm">Message from Secretary</h4>
                    <div class="members">
                        <img src="{{ config('app.url') }}/assets/images/rachel.jpg" alt="members">

                        <div class="members_description">
                            <p>"Dear Colleagues,

                                As the Honorary Secretary for the Asia Pacific Burn Association, I am committed to the goals
                                of the APBA and working towards the improvement in burn care in the Asia Pacific Region."
                            </p>
                            <span class="et_pb_testimonial_author">Rachel Kornhaber</span>
                            <p class="et_pb_testimonial_meta"><span class="et_pb_testimonial_position">(Secretary -
                                    APBA)</span></p>
                                     <a href="{{route('message-secretary')}}" class="theme-btn btn-one mt-3">Read More</a>
                        </div>

                    </div> <!-- .et_pb_testimonial_description -->
                </div>

            </div>
        </div>
    </section>

    <section class="resources-section">
            <div class="auto-container">
                <div class="row clearfix">
                     <div class="col-lg-12 col-md-12 col-sm-12 title-column">
                        <div class="sec-title light p-0 mb-5 text-center">
                            <h2>Our Leadership</h2>
                            <p style="color: #fff">
Great leadership transcends mere management; it embodies vision, empathy, and integrity. Effective leaders inspire and empower those around them, fostering an environment of collaboration and growth. </p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img
                                    src="{{ config('app.url') }}/assets/images/team/rajeev-ahuja.jpg"
                                    alt=""></figure>

                            <h3><a href="#0">DR. RAJEEV B. AHUJA</a></h3>
                            <span class="designation">FOUNDER, CHAIRPERSON & CEO</span>


                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img
                                    src="{{ config('app.url') }}/assets/images/team/vinita-puri.jpg"
                                    alt=""></figure>

                            <h3><a href="#0">Vinita Puri
(India)</a></h3>
                            <span class="designation">President</span>

                        </div>
                    </div>
                </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-12 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img
                                    src="{{ config('app.url') }}/assets/images/team/gaoxing-luo.jpg"
                                    alt=""></figure>

                            <h3><a href="#0">Gaoxing Luo
(China)</a></h3>
                            <span class="designation">
Immediate Past President</span>


                        </div>
                    </div>
                </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-12 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img
                                    src="{{ config('app.url') }}/assets/images/team/hajime.jpg"
                                    alt=""></figure>

                            <h3><a href="#0">Hajime Matsumura (Japan)</a></h3>
                            <span class="designation">Past President</span>

                        </div>
                    </div>
                </div>

                </div>
            </div>
        </section>
<section class="discover-section">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h2>Our Gallery</h2>

                </div>
                <div class="content-inner">
                    <div class="four-item-carousel owl-carousel owl-theme">

                        @foreach($items as $row)
                         <div class="discover-block-one">
                            <div class="inner-box">
                                <a href="{{ url('storage/images/'.$row->file) }}" data-fancybox="group" data-caption="{{$row->caption}}">
                                <figure class="image-box"><img src="{{ url('storage/images/'.$row->file) }}" alt="{{$row->caption}}"></figure>

                                <div class="overlay-content">
                                    <h3><a href="{{ url('storage/images/'.$row->file) }}" data-fancybox="group" data-caption="{{$row->caption}}">{{$row->caption}}</a></h3>

                                </div>
                            </a>
                            </div>
                        </div>
                      @endforeach


                    </div>
                </div>
            </div>
        </section>

@endsection


    @section('scripts')

    <script>
        $('[data-fancybox]').fancybox({
  // Options will go here
  buttons : [
    'close'
  ],
  wheel : false,
  transitionEffect: "slide",
   // thumbs          : false,
  // hash            : false,
  loop            : true,
  // keyboard        : true,
  toolbar         : false,
  // animationEffect : false,
  // arrows          : true,
  clickContent    : false
});
    </script>

    @endsection
