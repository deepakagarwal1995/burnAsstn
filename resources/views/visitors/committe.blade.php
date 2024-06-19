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
                    <li><span>Committee</span></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="team-section sec-pad">
        <div class="auto-container">

            <div class="row clearfix">
 @foreach ($items as $row)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img
                                    src="{{ url('storage/images/'.$row->image) }}"
                                    alt=""></figure>

                            <h3><a href="#0">{{$row->name}}</a></h3>
                            <span class="designation">{{$row->position}}</span>
                            <ul class="share-links">
                                @if($row->fb!='')
                                <li><a href="{{$row->fb}}" target="_blank"><span class="fab fa-facebook-square"></span></a></li>
                                @endif
                                @if($row->twitt!='')
                                <li><a href="{{$row->twitt}}" target="_blank"><span class="fab fa-twitter-square"></span></a></li>
                                @endif
                                @if($row->insta!='')
                                <li><a href="{{$row->insta}}" target="_blank"><span class="fab fa-instagram-square"></span></a></li>
                                @endif

                            </ul>
                            @php
                                $name =strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $row->name)));
                            @endphp
                            <a href="{{route('committeeDetail',['id' => $row->id,'name' => $name])}}" class="theme-btn btn-one mt-3" style="display: block;
    padding: 13px 5px;
    height: auto;
    line-height: 10px;
    max-width: 149px;
    margin: auto;">Read More</a>

                        </div>
                    </div>
                </div>
@endforeach

        </div>
        </div>
    </section>
@endsection
