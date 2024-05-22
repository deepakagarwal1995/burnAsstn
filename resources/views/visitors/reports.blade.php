@extends('layouts.visitorsApp', ['page_title' => $title])
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
                <h1>{{$title}}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>{{$title}}</span></li>
                </ul>
            </div>
        </div>
    </section>
 <section class="event-section event-page-section">
            <div class="auto-container">

                           <div class="row clearfix">
                    @foreach ($items as $row)
                     <div class="col-lg-4 col-md-6 col-sm-12 event-block">
                        <div class="event-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a target="_blank" href="{{ url('storage/pdfs/'.$row->image) }}"><img src="{{ url('storage/images/'.$row->thumbnail) }}" alt=""></a></figure>

                                </div>
                                <div class="lower-content">
                                    <div class="text-box">
                                        <h3><a target="_blank" href="{{ url('storage/pdfs/'.$row->image) }}">{{$row->title}}</a></h3>
                                        <p>{{$row->sdescr}}</p>
                                        <ul class="info-list clearfix">

                                            <li> <a target="_blank" href="{{ url('storage/pdfs/'.$row->image) }}" class="header-btn"><span>Download</span></a></li>

                                        </ul>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
                    </div>
                     </div>
                    </section>




        @endsection

