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
                <h1>{{ $title }}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>{{ $title }}</span></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="event-section event-page-section">
        <div class="auto-container">

            <div class="row clearfix">
                <div class="col-lg-8 col-sm-12 event-block">
                    @if ($items->type == 'PDF-Resource' || $items->type == 'Books')

                    <script>

    window.onload = function(){
         window.open("{{ url('storage/pdfs/' . $items->pdf) }}", "_blank"); // will open new tab on window.onload
    }
</script>
                        <div class='embed-responsive' >
                            <embed src="{{ url('storage/pdfs/' . $items->pdf) }}" type="application/pdf" style="height: 100vh;    width: 100%;" />
                        </div>
                    @endif
                    @if ($items->type == 'Video-Resource')

                        <video width="100%" height="440" controls>
                            <source src="{{ url('storage/videos/' . $items->pdf) }}" type="video/mp4">
                            Error Message
                        </video>
                    @endif

                    @if ($items->type == 'Research-Blogs')

                        <div class="row clearfix">
                            @php
                                $myArray = explode(',', $items->pdf);
                            @endphp
                            @foreach ($myArray as $row)
                                <div class="col-lg-6">
                                    <img src="{{ url('storage/images/' . $row) }}" class="img-fluid">
                                </div>
                            @endforeach
                            </div>
                    @endif
<div>{!! $items->descr !!}</div>
                </div>

             <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="blog-sidebar default-sidebar">


                        <div class="category-widget sidebar-widget">
                            <div class="widget-title">
                                <h3>Resources</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li><a href="{{ route('PDFresources') }}">PDF resources</a></li>
                                    <li><a href="{{ route('videoresources') }}">Video resources</a></li>
                                    <li><a href="{{ route('blogs') }}">Research & Blogs</a></li>
                                    <li><a href="{{ url('/books') }}">Books</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>  </div>
        </div>
    </section>





@endsection
