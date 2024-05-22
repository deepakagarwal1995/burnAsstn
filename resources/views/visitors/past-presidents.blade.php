@extends('layouts.visitorsApp', ['page_title' => 'Past Presidents'])
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
                <h1>Past Presidents</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>Past Presidents</span></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="faq-section sec-pad">
        <div class="auto-container">

            <div class="row clearfix">

                <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="schedule-block-one">
                        <div class="inner-box table-responsive">

                            <table class="table table-bordered table-stripped ">

                                <tbody>
                                    <tr>

                                        <td>&nbsp; </td>

                                        <td><strong> Name of President </strong></td>

                                        <td> <strong>Conference Location </strong></td>

                                    </tr>

                                    <tr>

                                        <td> Founder President </td>

                                        <td> RAJEEV AHUJA </td>

                                        <td> New Delhi, India </td>

                                    </tr>

                                    <tr>

                                        <td> 2009 – 2011 </td>

                                        <td> CHOMCHARK CHUNTRASAKUL </td>

                                        <td>  </td>

                                    </tr>

                                    <tr>

                                        <td> 2011 – 2013 </td>

                                        <td> Lee Nam </td>

                                        <td>  </td>

                                    </tr>

                                    <tr>

                                        <td> 2013 – 2015 </td>

                                        <td> NYOMAN RIASA </td>

                                        <td> Bali, Indonesia </td>

                                    </tr>

                                    <tr>

                                        <td> 2015 – 2017 </td>

                                        <td> NIANN – TZYY DAI </td>

                                        <td> Taipei </td>

                                    </tr>
                                    <tr>

                                        <td> 2017 – 2019 </td>

                                        <td> CHONG SI JACK </td>

                                        <td> Singapore </td>

                                    </tr>
                                    <tr>

                                        <td> 2019 – 2021 </td>

                                        <td> HAJIME MATSUMURA</td>

                                        <td> Japan </td>

                                    </tr>
                                    <tr>

                                        <td> 2021 – 2023 </td>

                                        <td> Gaoxing Lao </td>

                                        <td> China </td>

                                    </tr>




                                </tbody>
                            </table>
                            </div>
                            </div>
                            </div>
            </div>
        </div>
    </section>
@endsection
