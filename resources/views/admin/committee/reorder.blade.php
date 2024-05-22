@extends('layouts.app', ['title' => $title])
@section('content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<style>
     .reorder-gallery{
                list-style: auto; columns: 2;
  -webkit-columns: 2;
  -moz-columns: 2;    padding: 0px;
     }
      .reorder-gallery li{
                margin-left: 20px;
    cursor: move;
    border: 1px solid #ddd;
    padding: 3px;
   background: #f5f5f5;
    border-radius: 7px;
    box-shadow: 1px 1px 4px #f2f2f2;
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
                <div class="col-md-12">

                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="gallery">
		<ul class="reorder-gallery">
		   @foreach ($items as $row)
			<li id="{{$row->id}}" class="ui-sortable-handle mb-3"><img style="    height: 40px;" src="{{ url('storage/images/'.$row->image) }}" alt="">  {{$row->name}}</li>
	        @endforeach
		</ul>



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
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
 <script>
        $(document).ready(function(){
	$("ul.reorder-gallery").sortable({
		update: function( event, ui ) {
			updateOrder();
		}
	});
});
function updateOrder() {
	var item_order = new Array();
	$('ul.reorder-gallery li').each(function() {
		item_order.push($(this).attr("id"));
	});
	var order_string = 'order='+item_order;
	$.ajax({
		type: "POST",
         headers: {
                            'X-CSRF-TOKEN': "{{csrf_token()}}",
                        },
		url: "{{ route('reorder.action') }}",
		data: order_string,
		cache: false,
		success: function(data){
		}
	});
}
    </script>
@endsection
