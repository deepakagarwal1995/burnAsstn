@extends('layouts.visitorsApp', ['page_title' => $title])
@section('content')

<style>
    .image-box img{
            height: 280px;
    object-fit: cover;
    }
</style>
   <link href="{{ config('app.url') }}/assets/css/nice-select.css" rel="stylesheet">
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
    <section class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                        <div class="event-list-content mt-5">

                             @foreach ($items as $row)
                    <div class="event-block-two">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="event-details.html"><img
                                                        src="{{ url('storage/images/' . $row->image) }}" alt=""></a></figure>

                                    </div>
                                    <div class="content-inner">
                                        <h3><a href="event-details.html">{{ $row->title }}</a></h3>
                                        <p>{{ $row->sdescr }}</p>
                                         <a
                                                         @if(Session::has('resource_enabled'))
                                                         href="{{route('view_resource',$row->id)}}" class="header-btn theme-btn btn-one mt-3"
                                                         @else
                                                         href="#exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal" class="open-AddBookDialog header-btn theme-btn btn-one mt-3" data-id="{{$row->id}}"
                                                         @endif

                                                          style="display: block;
    padding: 13px 5px;
    height: auto;
    line-height: 10px;
    max-width: 149px;">Read More</a>
                                    </div>
                                </div>
                            </div>
  @endforeach
                             </div>




                    </div>
                </div>



        </div>
    </section>

@if (isset($type) && $type=='Books')


     <section class="about-style-three">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="col-lg-12 content-column">
                    <div class="content-box">
                        <div class="sec-title mb-0">
                           <h4>Disclaimer</h4>
                        </div>
                        <div class="text-box">
                             <p>The information in this book is meant to supplement, not replace, your surgical burn training. APBA does not take any responsibility for the contents of the book and is only providing the link as the author is happy to provide it free of cost. Copyright and legal responsibilities lie with the author.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

@endsection

@section('scripts')
    <script src="{{ config('app.url') }}/assets/js/jquery.nice-select.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.selectmenu').niceSelect();
        });


        $(document).on("click", ".open-AddBookDialog", function () {
            var myBookId = $(this).data('id');
              @if(Session::has('resource_enabled'))
       location.href="view-resource/" + myBookId;
  @endif

     $(".rid").val( myBookId );

});
    </script>

@endsection
