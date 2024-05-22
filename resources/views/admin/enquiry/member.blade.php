@extends('layouts.app', ['title' => $title])

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
<style>
    .dt-search{
            float: right;
    }
</style>
@endsection

@section('content')
<div class="main-content-wrap sidenav-open d-flex flex-column">
                <div class="main-content">
                               <div class="breadcrumb">
                <h1>{{$title}}</h1>
                <ul>
                    <li><a href="{{url('/admin')}}">Dashboard</a></li>
                    <li>Enquiry</li>
                </ul>
                  <a href="{{route('memberAdd')}}"  style="float: right" type="button" class="btn btn-danger ">
                                              Add Member
                                                </a>


            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <div class="col-md-12">

                    <div class="card mb-4">
                        <div class="card-header">  <div class="row input-daterange">
                <div class="col-md-4">
                    <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" readonly />
                </div>
                <div class="col-md-4">
                    <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" readonly />
                </div>
                <div class="col-md-4">
                    <button type="button" name="filter" id="filter" class="btn btn-primary">Filter</button>
                    <button type="button" name="refresh" id="refresh" class="btn btn-default">Refresh</button>
                </div>
            </div></div>
                        <div class="card-body">

                            <div class="table-responsive">
                                 <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>

                                            <th scope="col">#</th>

                                            <th scope="col">Title</th>
                                             <th scope="col">First Name</th>
                                              <th scope="col">Middle</th>
                                               <th scope="col">Last Name</th>
                                            <th scope="col">Speciality</th>
                                            <th scope="col">Qualifications</th>
                                            <th scope="col">Institute</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Country</th>
                                            <th scope="col">Membership number</th>

                                            <th scope="col">Date</th>


                                        </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>
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
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>

<script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script>
<script type="text/javascript">


$(document).ready(function(){
 $('.input-daterange').datepicker({
  todayBtn:'linked',
  format:'yyyy-mm-dd',
  autoclose:true
 });

 load_data();

 function load_data(from_date = '', to_date = '')
 {

  $('.yajra-datatable').DataTable({
    processing: true,
        serverSide: true,
        "aaSorting": [],
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
        dom:"Bfrtip",
        buttons:["pageLength","excel"],
   ajax: {
    url:'{{route('member')}}',
    data:{from_date:from_date, to_date:to_date}
   },



   columns: [
            {data: 'DT_RowIndex', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'fname', name: 'fname'},
            {data: 'mname', name: 'mname'},
            {data: 'lname', name: 'lname'},
            {data: 'specialty', name: 'specialty'},
            {data: 'qualification', name: 'qualification'},
              {data: 'institute', name: 'institute'},
              {data: 'contact', name: 'contact'},
              {data: 'email', name: 'email'},
            {data: 'country', name: 'country'},
            {data: 'details', name: 'details'},
            {data: 'dated', name: 'created_at'},
        ]

  });
 }

 $('#filter').click(function(){
  var from_date = $('#from_date').val();
  var to_date = $('#to_date').val();
  if(from_date != '' &&  to_date != '')
  {
   $('.yajra-datatable').DataTable().destroy();
   load_data(from_date, to_date);
  }
  else
  {
   alert('Both Date is required');
  }
 });

 $('#refresh').click(function(){
  $('#from_date').val('');
  $('#to_date').val('');
  $('.yajra-datatable').DataTable().destroy();
  load_data();
 });

});
</script>

@endsection
