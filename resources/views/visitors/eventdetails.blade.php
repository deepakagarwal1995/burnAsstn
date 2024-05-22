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
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><span>Events</span></li>
                </ul>
            </div>
        </div>
    </section>
<section class="event-details">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="event-details-content">
                            <div class="content-one">
                                <h2>{{$items->title}}</h2>
                                <figure class="image-box"><img src="{{ url('storage/images/'.$items->image) }}" alt="{{$items->title}}"></figure>
                                <ul class="info-list clearfix">
                                    <li>
                                        <h5>Date</h5>
                                        <p class="mb-5">{{$items->date}}</p>
                                    </li>

                                </ul>
                                <div>{!! $items->descr !!}</div>

                            </div>



                    </div>
                 </div>
                    </div>
                     </div>
                    </section>



    @endsection
