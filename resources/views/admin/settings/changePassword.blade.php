@extends('layouts.app', ['title' => 'Change Password'])
@section('content')
<div class="main-content-wrap sidenav-open d-flex flex-column">
                <div class="main-content">
                               <div class="breadcrumb">
                <h1>Change Password</h1>
                <ul>
                    <li><a href="{{url('/admin')}}">Dashboard</a></li>
                    <li>Password</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <div class="offset-md-2 col-md-8">

                    <div class="card mb-4">
                        <div class="card-body">
                           <form action="{{ route('ChangePassword') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                                <div class="form-row">


                                    <div class="col-md-12 mb-3">
                                        <label>Old Password <span class="text-danger">*</span></label>
                                        <input type="password" name="old_password" class="form-control" required>
                                        @error('old_password')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label>New Password <span class="text-danger">*</span></label>
                                        <input type="password" name="new_password" class="form-control" required>
                                        @error('new_password')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label>Confirm Password <span class="text-danger">*</span></label>
                                        <input type="password" name="confirm_password" class="form-control" required>
                                        @error('confirm_password')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
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
