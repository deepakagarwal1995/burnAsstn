@extends('layouts.visitorsApp', ['page_title' => 'Contact'])
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
                <h1>Contact</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><span>Contact</span></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="contact-info-section centred">
            <div class="auto-container">
                <div class="sec-title">

                </div>
                <div class="four-item-carousel owl-carousel owl-theme owl-nav-none">
                                <div class="info-block-two">
                                    <div class="inner-box">
                                        <div class="icon-box"><img src="assets/images/icons/icon-89.png" alt=""></div>
                                        <h3>Rachel Kornhaber</h3>
                                        <p>Secretary APBA</p>
                                        <div class="text-box">
                                            <div class="email"><a href="mailto:secretary@apburn.org.com">secretary@apburn.org.com</a></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="info-block-two">
                                    <div class="inner-box">
                                        <div class="icon-box"><img src="assets/images/icons/icon-89.png" alt=""></div>
                                        <h3>Rajeev Ahuja</h3>
                                        <p>Founder President & Executive Director</p>
                                        <div class="text-box">
                                            <div class="email"><a href="mailto:executive.director@apburn.org">executive.director@apburn.org</a></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="info-block-two">
                                    <div class="inner-box">
                                        <div class="icon-box"><img src="assets/images/icons/icon-89.png" alt=""></div>
                                        <h3>Vinita Puri</h3>
                                        <p>President APBA</p>
                                        <div class="text-box">
                                            <div class="email"><a href="mailto:president@apburn.org">president@apburn.org</a></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="info-block-two">
                                    <div class="inner-box">
                                        <div class="icon-box"><img src="assets/images/icons/icon-89.png" alt=""></div>
                                        <h3>Pallab Chatterjee</h3>
                                        <p>Web Master</p>
                                        <div class="text-box">
                                            <div class="email"><a href="mailto:webmaster@apburn.org">webmaster@apburn.org</a></div>
                                        </div>
                                    </div>
                                </div>


                            </div>
            </div>
        </section>
        <!-- contact-info-section end -->


        <!-- contact-style-two -->
        <section class="contact-style-two">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 map-column">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448193.9510489025!2d76.76356158799182!3d28.64428734913832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1711439744917!5m2!1sen!2sin" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title">
                                <h2>Send Your Message</h2>
                                <p>Fill out this form to send your inquires or complaints.</p>
                            </div>
                            <div class="form-inner">
                                <form method="post" action="{{route('submitEnquiry')}}" class="default-form">
                                    @csrf
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                            <input type="text" name="name" placeholder="Your Name" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                            <input type="email" name="email" placeholder="Email Address" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                            <input type="number" name="phone" placeholder="Phone Number" required="" style="    position: relative;
    display: block;
    width: 100%;
    height: 60px;
    background: #f4f4f4;
    border: 1px solid #f4f4f4;
    border-radius: 5px;
    font-size: 18px;
    color: #505050;
    padding: 10px 20px;
    transition: all 500ms ease;">
                                        </div>
                                         <input type="hidden" name="type" value="Contact Enquiry" required="">

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="subject" required="" placeholder="Subject">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea name="messg" placeholder="Your Message..."></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                            <button class="theme-btn btn-one" type="submit" name="submit-form">Send a Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    @endsection


