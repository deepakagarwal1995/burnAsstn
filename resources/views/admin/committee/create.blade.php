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
                    <li>Committee</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <div class="offset-md-2 col-md-8">

                    <div class="card mb-4">
                        <div class="card-body">
                           <form action="{{ route('committee.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label>Committee Type <span class="text-danger">*</span></label>
                                        <select name="type" class="form-control" required>
                                            <option value="">Select Committee Type</option>
                                            <option value="EXECUTIVE">EXECUTIVE</option>
                                            <option value="ADVISORS">ADVISORS</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Full Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Profile Image <span class="text-danger">*</span></label>
                                        <input type="file" name="image" accept="image/*" class="form-control" required>
                                        @error('image')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Designation <span class="text-danger">*</span></label>
                                        <input type="text" name="position" class="form-control" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom02">Facebook Link</label>
                                        <input type="text" class="form-control" name="fb" >
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom02">Instagram Link</label>
                                        <input type="text" class="form-control" name="insta" >
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom02">Twitter Link</label>
                                        <input type="text" class="form-control" name="twitt" >
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

