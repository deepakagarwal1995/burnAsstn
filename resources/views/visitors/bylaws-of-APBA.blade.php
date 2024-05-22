@extends('layouts.visitorsApp', ['page_title' => 'By Laws'])
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
                <h1>By Laws</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>By Laws</span></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="faq-section sec-pad">
        <div class="auto-container">
            <div class="sec-title centred">
                <h4>“BYLAWS OF PERKUMPULAN LUKA BAKAR ASIA PASIFIK – ASIA PACIFIC BURN ASSOCIATION (APBA)” (APBA)</h4>
            </div>
            <div class="row clearfix">

                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <ul class="accordion-box">
                            <li class="accordion block active-block" id="law1">
                                <div class="acc-btn active">
                                    <span class="count-text">1</span>
                                    <h3>ARTICLE 1</h3>
                                    <h6>NAME</h6>

                                </div>
                                <div class="acc-content current">
                                    <p align="justify">The society is called Perkumpulan Luka Bakar Asia Pasifik, the
                                        <strong> "Asia Pacific Burn Association’’ (APBA).</strong>
                                    </p>
                                    <p align="justify">The Asia Pacific Region is defined to include, but not limited to,
                                        the ollowing countries; Afghanistan, Australia, Bangladesh, Bhutan, Cambodia, China,
                                        Hong Kong (China), India, Indonesia, Iran, Iraq, Israel, Japan, Laos, Malaysia,
                                        Myanmar, New Zealand, Nepal, Pakistan, Philippines, Russia, Singapore, South Korea,
                                        Sri Lanka,
                                        Thailand, Taiwan, Turkey, Vietnam </p>
                                    <p align="justify"><strong> Office Address : </strong> Jalan Sekarsari 63, Kesiman
                                        Kertalangu, Denpasar Timur, Denpasar, Bali, Indonesia </p>
                                    <p align="justify"><strong>Registered address :</strong> Kota Denpasar</p>
                                    <p align="justify"><strong>Registration :</strong> Kementerian Hukum dan Hak Asasi
                                        Manusia Republik Indonesia, Nomor AHU-0081052.AH.01.07. Tahun 2016 </p>
                                </div>
                            </li>
                            <li class="accordion block" id="law2">
                                <div class="acc-btn">
                                    <span class="count-text">2</span>
                                    <h3>ARTICLE 2 </h3>
                                    <h6>AIMS & OBJECTIVES</h6>

                                </div>
                                <div class="acc-content">
                                    <ul>
                                        <li>The aims of the APBA are to promote scientific, evidence based, comprehensive
                                            multidisciplinary management of burn injuries and encourage basic and clinical
                                            research.</li>
                                        <li>The Association aims to create a common platform to promote mutual collaboration
                                            between different specialists and institutes involved in the management of burn,
                                            foster training and education and help in the dissemination of knowledge and
                                            creation of guidelines for management of burns.</li>
                                        <li>The Association aims can be achieved by organizing conferences, CMEs, seminars,
                                            training programs/fellowships, publishing of scientific literature, establishing
                                            of website etc.</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="accordion block" id="law3">
                                <div class="acc-btn">
                                    <span class="count-text">3</span>
                                    <h3>ARTICLE 3</h3>
                                    <h6>MEMBERSHIP</h6>
                                </div>
                                <div class="acc-content">
                                    <p align="justify"><strong> 3.1 Membership types : </strong>The membership of APBA
                                        consists of ‘Full members’, ‘Associate Members’ and ‘Honorary members’.</p>
                                    <p align="justify">The application for ‘Full membership’/ ‘Associate membership’ shall
                                        be addressed to the Secretary of the Society and shall be accompanied with the
                                        requisite fee, as applicable from time to time. The executive committee shall decide
                                        on admission of ‘Full / Associate’ members
                                        from other countries in the Region that are not listed above. Admission may be
                                        refused if there is any doubt on integrity of the applicant.</p>
                                    <p align="justify"><strong> Full membership :</strong> A ‘full member’ is defined as any
                                        doctor, nurse or therapist who is either practicing burn management or has practiced
                                        in
                                        the past. An applicant shall be eligible to apply for membership as a Full Member if
                                        he or she maintains a valid and unrestricted license to practice medicine/
                                        nursing/rehabilitation in his/her country of practice in the Asia- Pacific Region
                                        (applicable for those affiliated with medical disciplines).</p>
                                    <p align="justify"><strong>Associate membership : </strong> An ‘Associate member’ is
                                        defined as any other person like a scientist, health care worker or corporate
                                        individual who is interested in the study of, or management of burns.</p>
                                    <p align="justify"><strong>Honorary membership : </strong>An “Honorary member’ is
                                        defined as an individual, from any part of the world, who has been identified by the
                                        Executive committee of APBA as a person of excellence in the specialty of burn
                                        management. Honorary members may be proposed by any member for their distinguished
                                        contribution to burn care, and they shall be admitted at a Congress of APBA in
                                        person, upon the recommendation of the Executive Committee</p>
                                    <p align="justify"><strong> 3.2 Member Rights, Privileges, and Termination</strong></p>
                                    <p align="justify">i. Voting rights are reserved for ‘Full members’ only. Only ‘Full
                                        members’ shall be eligible to hold any office of the Executive. They can become
                                        members of various committees formed to oversee and execute the aims and objectives
                                        of the Association.</p>
                                    <p align="justify">ii. Associate members have no voting rights but they may be co-opted
                                        to the various committees that may be constituted by the Executive for discharging
                                        various responsibilities.</p>
                                    <p align="justify">iii. The executive committee reserves the right to terminate the
                                        membership of any member if the member is found guilty of conduct which is
                                        unbecoming of an upright individual, and if his/her actions are prejudicial to the
                                        interests and objects of the Association. A show cause notice shall be issued first
                                        by the Executive Committee and if the reply is found unsatisfactory the termination
                                        shall be recommended to the General Assembly.</p>
                                    <p align="justify">iv. The membership will also stand terminated if the dues are not
                                        paid for 3 consecutive years.</p>
                                </div>
                            </li>
                            <li class="accordion block" id="law4">
                                <div class="acc-btn">
                                    <span class="count-text">4</span>
                                    <h3>ARTICLE 4</h3>
                                    <h6>ORGANISATION</h6>
                                </div>
                                <div class="acc-content">
                                    <p align="justify">The work of the APBA is carried out by the General Assembly and by
                                        the Executive Committee, which will operate in accordance with the Constitution.</p>
                                    <p align="justify"><strong> 4.1 General Assembly : </strong>This body is the governing
                                        body of the APBA and is composed of ‘Full members’. Its tasks are to elect the
                                        officials who are the President, Secretary and Treasurer; to elect the members of
                                        the Executive Committee; to approve the report from the Executive Committee; to
                                        approve amendments to the constitution, to appoint auditors and adopt audited
                                        accounts. The General Assembly will normally be convened at the time of the Biennial
                                        Congress. The quorum for a General Assembly meeting is 20 full members.</p>
                                    <p align="justify"><strong> 4.2 Executive Committee : </strong> This body conducts the
                                        affairs of the "Asia Pacific Burn Association" (APBA) in accordance with the
                                        policies, and aims of the Society.</p>
                                    <p align="justify"><strong> The Executive Committee shall compose of :</strong></p>
                                    <ul>
                                        <li>The President</li>
                                        <li>Two immediate Past Presidents</li>
                                        <li>President Elect</li>
                                        <li>Founder President</li>
                                        <li>Secretary</li>
                                        <li>Treasurer</li>
                                        <li>Executive members (Four)</li>
                                    </ul><br>
                                    <p align="justify">One of the Executive committee members, of the six on the committee,
                                        shall serve as the web master to maintain the APBA website.</p>
                                    <p align="justify">In the absence of the President, the President Elect or the immediate
                                        past President shall assume charge, in that precedence.</p>
                                    <p align="justify"><strong>4.3 Quorum</strong></p>
                                    <p>The quorum for Executive committee meeting shall be five members.</p>
                                    <p align="justify"><strong> 4.4 Terms of Office</strong></p>
                                    <p align="justify">The Chairman of the Biennial Congress shall automatically be the
                                        President of APBA for the term of two years. The Secretary / Treasurer and the four
                                        members of the Executive Committee are elected for a period of four years. However,
                                        the office change of the Secretary and
                                        Treasurer shall be staggered and in first instance the Treasurer shall be changed.
                                        Similarly, of the four members of the Executive Committee, two longest serving
                                        members will be replaced every 2 years. In the first instance after adoption of
                                        byelaws the junior professional members of the Executive committee shall demit
                                        office first.</p>
                                    <p align="justify"><strong> Election / Nomination to office</strong></p>
                                    <p align="justify">The appointments to the Executive shall be made by a Nominating
                                        committee, which shall consist of the President, Two immediate Past Presidents,
                                        President Elect and the Founder President. The nomination slate shall be presented
                                        to General Assembly for ratification.</p>
                                    <p align="justify"><strong> 4.5 Compensation</strong></p>
                                    <p>Board members shall serve without compensation and cannot receive any remuneration as
                                        employees of the society.</p>

                                </div>
                            </li>
                            <li class="accordion block" id="law2">
                                <div class="acc-btn">
                                    <span class="count-text">5</span>
                                    <h3>ARTICLE 5 </h3>
                                    <h6>RESOURCES & FINANCES</h6>

                                </div>
                                <div class="acc-content">
                                    <p align="justify">The APBA has the right to request a membership fee to maintain affairs of its office. However, the
    APBA is starting with no initial membership fee. The final membership fee will be proposed by the Executive
    Committee and will be decided by the General Assembly. The APBA also welcomes support and benefits from sponsors and
    donors. 50% of the profits of each APBC (Asia Pacific Burn Congress) will be given to the APBA and 50% can be
    retained by the parent organizing society/body.</p>
<p align="justify">The accounts of APBA shall be audited and submitted to requisite authorities as per laws of the
    country of Registration.</p>
                                </div>
                            </li>
                             <li class="accordion block" id="law2">
                                <div class="acc-btn">
                                    <span class="count-text">6</span>
                                    <h3>ARTICLE 6 </h3>
                                    <h6>MEETINGS</h6>

                                </div>
                                <div class="acc-content">
                                    <ul>
    <li>The APBA will hold at least one General Assembly and Scientific meeting (which may be held concurrently) every
        two years. The members of APBA are also encouraged to create awareness about the society by organizing dedicated
        burn sessions in their respective specialty meetings or by conducting dedicated burn meetings.</li>
    <li>Members desirous of holding an APBC shall submit an application to the Secretary and the Administrative
        Director, after approval of the National Society, no less than 2 years prior to the proposed Congress. The bid
        should not only be endorsed by their National society, but it should provide the names of the Chairman,
        Organizing Secretary and Program Chair, along with conference venue and a tentative budget (including
        registration fee structure etc) to the Administrative Director and / or Secretary.</li>
</ul><br>
                                </div>
                            </li>
                            <li class="accordion block" id="law2">
                                <div class="acc-btn">
                                    <span class="count-text">7</span>
                                    <h3>ARTICLE 7 </h3>
                                    <h6>MEETINGS</h6>

                                </div>
                                <div class="acc-content">
                                    <ul>
    <li>The APBA will hold at least one General Assembly and Scientific meeting (which may be held concurrently) every
        two years. The members of APBA are also encouraged to create awareness about the society by organizing dedicated
        burn sessions in their respective specialty meetings or by conducting dedicated burn meetings.</li>
    <li>Members desirous of holding an APBC shall submit an application to the Secretary and the Administrative
        Director, after approval of the National Society, no less than 2 years prior to the proposed Congress. The bid
        should not only be endorsed by their National society, but it should provide the names of the Chairman,
        Organizing Secretary and Program Chair, along with conference venue and a tentative budget (including
        registration fee structure etc) to the Administrative Director and / or Secretary.</li>
</ul><br>
                                </div>
                            </li>
                            <li class="accordion block" id="law2">
                                <div class="acc-btn">
                                    <span class="count-text">8</span>
                                    <h3>ARTICLE 8 </h3>
                                    <h6>Communication</h6>

                                </div>
                                <div class="acc-content">
                                   <p align="justify">Communication to members will be via e-mail and information updates on the APBA web site.</p>
                                </div>
                            </li>
                            <li class="accordion block" id="law2">
                                <div class="acc-btn">
                                    <span class="count-text">9</span>
                                    <h3>ARTICLE 9 </h3>
                                    <h6>Journal</h6>

                                </div>
                                <div class="acc-content">
                                   <p align="justify">APBA shall have its own Journal but till this is possible APBA may affiliate with other ‘English
    language’ Journals published in the Region. The ‘Editor’ of APBA Journal shall be selected from the Region from
    suitable applicants by a panel consisting of the nominating committee members.</p>
                                </div>
                            </li>
                            <li class="accordion block" id="law2">
                                <div class="acc-btn">
                                    <span class="count-text">10</span>
                                    <h3>ARTICLE 10 </h3>
                                    <h6>Website</h6>

                                </div>
                                <div class="acc-content">
                                   <p align="justify">The website of APBA shall be maintained by the web master (as mentioned above) who shall be solely
    responsible for updating the content after obtaining suitable material from the Executive members.</p>
                                </div>
                            </li>
                            <li class="accordion block" id="law2">
                                <div class="acc-btn">
                                    <span class="count-text">11</span>
                                    <h3>ARTICLE 11 </h3>
                                    <h6>Amendments</h6>

                                </div>
                                <div class="acc-content">
                                    <p align="justify">Any proposed amendments to the constitution of the APBA shall be posted by the Secretary on APBA
    website at least 6 months before the ratification at the next General Assembly of APBA.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
