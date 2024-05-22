@extends('layouts.app', ['title' => $title])
@section('content')
<div class="main-content-wrap sidenav-open d-flex flex-column">
                <div class="main-content">
                               <div class="breadcrumb">
                <h1>{{$title}}</h1>
                <ul>
                    <li><a href="{{url('/admin')}}">Dashboard</a></li>
                    <li>Committee</li>
                </ul>
                <a href="{{route('committee.create')}}" style="float: right" type="button" class="btn btn-danger ">
                                              Add Member
                                                </a>
                                                <a href="{{route('reorder.view','EXECUTIVE')}}" style="float: right" type="button" class="btn btn-primary mx-3 ">
                                            Reorder EXECUTIVES
                                                </a>
                                                <a href="{{route('reorder.view','ADVISORS')}}" style="float: right" type="button" class="btn btn-warning ">
                                             Reorder ADVISORS
                                                </a>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <div class="col-md-12">

                    <div class="card mb-4">
                        <div class="card-body">
                            <div>
                                 @include('admin.inc.search')
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Designation</th>

                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @php
                                $currentPage = $items->currentPage()-1;
                                $currentPage = $currentPage*$items->perPage();
                            @endphp

                                    @foreach ($items as $row)

                                        <tr>
                                            <th scope="row">{{ $loop->index+$currentPage+1 }}</th>
                                             <td>

                                                <img class="rounded-circle m-0 avatar-lg" src="{{ url('storage/images/'.$row->image) }}" alt="">

                                            </td>
                                             <td>{{$row->type}}</td>
                                            <td>{{$row->name}}</td>


                                            <td>{{$row->position}}</td>

                                            <td>
                                                 <form action="{{ route('committee.destroy', $row->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        onclick="return confirm('Are You Sure You Want to Delete !!')"
                                                        class="btn btn-danger ">
                                                <i class="nav-icon i-Close-Window "></i>
                                                    </button>
                                                </form>


                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                             <div>
                                 @include('admin.inc.pagination')
                            </div>


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
