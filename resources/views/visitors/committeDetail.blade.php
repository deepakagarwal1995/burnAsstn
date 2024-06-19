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
                <h1>{{$items->name}}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>{{$items->name}}</span></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="about-style-three" style="    background: #fff;">
        <div class="auto-container">
            <div class="row clearfix">
<div class="col-lg-4 col-md-12 col-sm-12 image-column">
                   <div class="inner-box">
                            <figure class="image-box"><img
                                    src="{{ url('storage/images/'.$items->image) }}"
                                    alt=""></figure>

                            <h3><a href="#0">{{$items->name}}</a></h3>
                            <span class="designation">{{$items->position}}</span>
                            <ul class="share-links">
                                @if($items->fb!='')
                                <li><a href="{{$items->fb}}" target="_blank"><span class="fab fa-facebook-square"></span></a></li>
                                @endif
                                @if($items->twitt!='')
                                <li><a href="{{$items->twitt}}" target="_blank"><span class="fab fa-twitter-square"></span></a></li>
                                @endif
                                @if($items->insta!='')
                                <li><a href="{{$items->insta}}" target="_blank"><span class="fab fa-instagram-square"></span></a></li>
                                @endif

                            </ul>


                        </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title mb-0">

                        </div>

                        <div class="text-box">

{!! $items->descr !!}

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
