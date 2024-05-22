@extends('layouts.app', ['title' => $title])
@section('content')
<div class="main-content-wrap sidenav-open d-flex flex-column">
                <div class="main-content">
                               <div class="breadcrumb">
                <h1>{{$title}}</h1>
                <ul>
                    <li><a href="{{url('/admin')}}">Dashboard</a></li>
                    <li>Reports</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <div class="offset-md-2 col-md-8">

                    <div class="card mb-4">
                        <div class="card-body">
                           <form action="{{ route('reports.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                                <div class="form-row">

                                    <div class="col-md-12 mb-3">
                                        <label>Title <span class="text-danger">*</span></label>
                                        <input type="text" name="title" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>File (PDF)<span class="text-danger">*</span></label>
                                        <input type="file" name="image" accept="application/pdf" class="form-control" required>
                                        @error('image')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Thumbnail<span class="text-danger">*</span></label>
                                        <input type="file" name="thumbnail" accept="image/*" class="form-control" required>
                                        @error('thumbnail')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                    </div>

<div class="col-md-12 mb-3">
                                        <label>Short Description <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="sdescr" ></textarea>
                                    </div>

                                </div>

                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
</div>
            <!-- Footer Start -->
            <div class="flex-grow-1"></div>

            <!-- fotter end -->
        </div>

        @endsection
