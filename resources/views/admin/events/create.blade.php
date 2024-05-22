@extends('layouts.app', ['title' => $title])
@section('content')

<style>
.ck-editor__editable_inline {
    min-height: 310px;
}
</style>
<div class="main-content-wrap sidenav-open d-flex flex-column">
                <div class="main-content">
                               <div class="breadcrumb">
                <h1>{{$title}}</h1>
                <ul>
                    <li><a href="{{url('/admin')}}">Dashboard</a></li>
                    <li>Events</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <div class="offset-md-2 col-md-8">

                    <div class="card mb-4">
                        <div class="card-body">
                           <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                                <div class="form-row">

                                    <div class="col-md-12 mb-3">
                                        <label>Title<span class="text-danger">*</span></label>
                                        <input type="text" name="title" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Image <span class="text-danger">*</span></label>
                                        <input type="file" name="image" accept="image/*" class="form-control" required>
                                        @error('image')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Date <span class="text-danger">*</span></label>
                                        <input type="date" name="date" class="form-control" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label>Short Description <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="sdescr" required></textarea>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationCustom02">Full Details</label>
                                        <textarea class="form-control" id="editor" rows="8" name="descr" ></textarea>
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
@section('script')
<script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
<script>
                        ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>
@endsection
