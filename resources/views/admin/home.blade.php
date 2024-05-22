@extends('layouts.app', ['title' => 'Dashboard'])
@section('content')
<div class="main-content-wrap sidenav-open d-flex flex-column">

               <div class="main-content">
                               <div class="breadcrumb">
                <h1>Dashboard</h1>
                <ul>
                    <li><a href="{{route('admin')}}">Dashboard</a></li>

                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>


            <div class="row">
                <!-- ICON BG -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <a href="{{route('member')}}">
                            <div class="card-body text-center">
                            <i class="i-Bar-Chart-2"></i>
                            <div class="content" style="max-width: 100%;">
                                <p class="text-muted mt-2 mb-0">Total Members Registration</p>
                                <p class="text-primary text-24 line-height-1 mb-2">{{$mem}}</p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <a href="{{route('ress.index')}}">
                            <div class="card-body text-center">
                            <i class="i-Bar-Chart-2"></i>
                            <div class="content" style="max-width: 100%;">
                                <p class="text-muted mt-2 mb-0">Total Resources</p>
                                <p class="text-primary text-24 line-height-1 mb-2">{{$ress}}</p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <a href="{{route('reports.index')}}">
                            <div class="card-body text-center">
                            <i class="i-Bar-Chart-2"></i>
                            <div class="content" style="max-width: 100%;">
                                <p class="text-muted mt-2 mb-0">Total Reports</p>
                                <p class="text-primary text-24 line-height-1 mb-2">{{$rep}}</p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                 <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <a href="{{route('events.index')}}">
                            <div class="card-body text-center">
                            <i class="i-Bar-Chart-2"></i>
                            <div class="content" style="max-width: 100%;">
                                <p class="text-muted mt-2 mb-0">Total Events</p>
                                <p class="text-primary text-24 line-height-1 mb-2">{{$ev}}</p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                 <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <a href="{{route('gallery.index')}}">
                            <div class="card-body text-center">
                            <i class="i-Bar-Chart-2"></i>
                            <div class="content" style="max-width: 100%;">
                                <p class="text-muted mt-2 mb-0">Total Gallery</p>
                                <p class="text-primary text-24 line-height-1 mb-2">{{$gal}}</p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                 <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <a href="{{route('committee.index')}}">
                            <div class="card-body text-center">
                            <i class="i-Bar-Chart-2"></i>
                            <div class="content" style="max-width: 100%;">
                                <p class="text-muted mt-2 mb-0">Total Committee</p>
                                <p class="text-primary text-24 line-height-1 mb-2">{{$sm}}</p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>


            </div>



            <div class="flex-grow-1"></div>
   </div>


            <!-- fotter end -->
        </div>

        @endsection
