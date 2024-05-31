  <section class="about-style-three" style="background: #0a084e;padding: 40px 0;">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title mb-0">
                            <h2 style="color: #fff;">Join APBA</h2>
                        </div>
                        <div class="text-box">
                            <h4 class="mb-0" style="color: #cfcfcf;font-weight: 400;">JOIN ASIA PACIFIC BURN ASSOCIATION</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 content-column text-end">
                    <div class="btn-box">
                        <a href="{{route('registration')}}" class="theme-btn btn-one"
                            style="
    background: #fff;
    color: #0a084e!important;
">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <footer class="main-footer">
     <div class="widget-section">
         <div class="auto-container">
             <div class="row clearfix">
                 <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                     <div class="footer-widget links-widget">
                         <div class="widget-title">
                             <img src="{{ config('app.url') }}/assets/images/logo.png" alt="">
                         </div>

                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                     <div class="footer-widget links-widget">
                         <div class="widget-title">
                             <h3>Correspondence address</h3>
                         </div>
                         <div class="widget-content">
                             <p><i class="fa fa-map-marker"></i> B 18, Vikas Marg, Block B, Swasthya Vihar, Delhi, 110092</p>
                             <p>
                                {{-- <strong>T</strong> <a href="tel:+31736901415">+31 73 690 14 15</a><br> --}}

                                 <i class="fa fa-envelope"></i> <a href="mailto:secretary@apburn.org.com">secretary@apburn.org.com</a>
                             </p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                     <div class="footer-widget links-widget">
                         <div class="widget-title">
                             <h3>More information</h3>
                         </div>
                         <div class="widget-content">
                             <p>The ABPA serves as a forum through which medical specialists, researchers, professions
                                 allied to medicine (PAM) and other workers come in contact to discuss aspects of burn
                                 treatment and research.</p>

                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                     <div class="footer-widget links-widget">

                         <div class="widget-title">
                             <h3>Become a Member</h3>
                         </div>
                         <div class="widget-content">
                             <p> The aims of the APBA are to promote scientific, evidence based, comprehensive multidisciplinary management of Burns and encourage basic and clinical research</p>
                             <div class="btn-box">
                                 <a href="{{route('registration')}}" class="theme-btn btn-one mt-3">Register Now</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
       <div class="widget-section gray">
         <div class="auto-container">
             <div class="row clearfix">

                 <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>About the association</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="{{url('/about')}}">ABOUT</a></li>
                                                <li><a href="{{url('/past-presidents')}}">Past Presidents</a></li>
                                                <li><a href="{{url('/history')}}">History</a></li>
                                                <li><a href="{{url('/bylaws-of-APBA')}}">BYLAWS of APBA</a></li>
                                                <li><a href="{{url('/bidding-process')}}">Bidding Process For Conference</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                 <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                     <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Other Links</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="{{url('/committe')}}">Executive Committee</a></li>
                                                <li><a href="{{url('/committe')}}">Advisors Committee</a></li>
                                                <li>
                                            <a href="{{url('/membership')}}" class=""></span>MEMBERSHIP</a>
                                        </li>
                                        <li><a href="{{url('/events')}}">Upcoming Events</a></li>
                                                <li><a href="{{url('/past-events')}}">Past Events</a></li>
                                                <li><a href="{{url('/reports')}}">Report</a></li>
                                    </ul>
                                </div>
                            </div>
                 </div>
                 <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                      <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Education</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="{{route('PDFresources')}}">PDF resources</a></li>
                                        <li><a href="{{route('videoresources')}}">Video resources</a></li>
                                        <li><a href="{{route('blogs')}}">Research & Blogs</a></li>
                                        <li><a href="{{url('/books')}}">Books</a></li></ul>
                                </div>
                            </div>
                 </div>
                 <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                     <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Translate</h3>
                                </div>
                                <div class="widget-content">
<div id="google_translate_element"></div>
</div>
</div>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'en'},
                'google_translate_element'
            );
        }
    </script>
<style>.goog-te-gadget .goog-te-combo {
    margin: 4px 0;
    border: 2px solid #0a084d;
    padding: 10px;
    background: #fff;
    border-radius: 4px;
    box-shadow: 1px 1px 6px #9b9999;
}</style>

    <script type="text/javascript"
            src=
"https://translate.google.com/translate_a/element.js?
cb=googleTranslateElementInit">
    </script>
                 </div>
             </div>
         </div>
     </div>
     <div class="footer-bottom ">
         <div class="auto-container">
            <div class="row">
    <div class="col-md-6"><div class="copyright">
                     <p>Copyrights &copy; 2024 <a href="#">apburn.org</a>. All rights reserved </p>
                 </div></div>
    <div class="col-md-6"><p class="mb-0 ftext text-md-end">Design & Develop By <a href="https://www.papercodetech.com/" target="_blank" style="    color: #fff;
    text-decoration: none;">Paper Code Technologies</a>
</p></div>
    </div>

         </div>
     </div>
 </footer>
 <!-- main-footer end -->



 <!-- scroll to top -->
 <button class="scroll-top scroll-to-target" data-target="html">
     <i class="flaticon-up-chevron"></i>
 </button>
