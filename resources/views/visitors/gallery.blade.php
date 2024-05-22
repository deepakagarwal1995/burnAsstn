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
                    <li><span>{{$title}}</span></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="project-section sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">

                </div>

                <div class="sortable-masonry">
                    <div class="filters centred">
                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="active filter" data-role="button" data-filter=".all">View All </li>
                            <li class="filter" data-role="button" data-filter=".Activities">Activities</li>
                            <li class="filter" data-role="button" data-filter=".Conference">Conference</li>
                        </ul>
                    </div>
                    <div class="items-container row clearfix">
                         @foreach($items as $row)
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all {{$row->type}}">
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ url('storage/images/'.$row->file) }}" alt="{{$row->caption}}"></figure>
                                    <div class="content-box">
                                        <div class="link"><a href="{{ url('storage/images/'.$row->file) }}" data-fancybox="group" data-caption="{{$row->caption}}"><i class="fa fa-plus"></i></a></div>
                                        <div class="text">
                                            <p>{{$row->caption}}</p>

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
