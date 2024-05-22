@extends('layouts.app', ['title' => $title])
@section('content')
<div class="main-content-wrap sidenav-open d-flex flex-column">
                <div class="main-content">
                               <div class="breadcrumb">
                <h1>{{$title}}</h1>
                <ul>
                    <li><a href="{{url('/admin')}}">Dashboard</a></li>
                    <li>Resources</li>
                </ul>
                <a href="{{route('ress.create')}}" style="float: right" type="button" class="btn btn-danger ">
                                              Add Resource
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
                                            <th scope="col">Thumbnail</th>
                                            <th scope="col">File</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Type</th>

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
                                             <td>

                                                <a target="_blank" href="{{ route('view_resource', $row->id) }}">View Post</a>

                                            </td>
                                             <td>{{$row->title}}</td>
                                              <td>{{$row->type}}</td>
                                            <td>
                                                 <form action="{{ route('ress.destroy', $row->id) }}" method="post">
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
