<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Admin' }} | {{ config('app.name') }}</title>
    <meta content="{{ config('app.name') }}" name="description">

    @include('admin.inc.headerLinks')

    @yield('head')



</head>

<body>




    <div class="app-admin-wrap layout-sidebar-large clearfix">

        <!-- header top menu end -->
        @include('admin.inc.header')

        @include('admin.inc.sidebar')

        @yield('content')





        <!--=============== Left side End ================-->

        <!-- ============ Body content start ============= -->

        <!-- ============ Body content End ============= -->
    </div>
    @include('admin.inc.footerLinks')
    @yield('script')


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>

  @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
  @endif
  @if(Session::has('info'))
        toastr.info("{{ Session::get('info') }}");
  @endif
  @if(Session::has('warning'))
        toastr.warning("{{ Session::get('warning') }}");
  @endif
  @if(Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
  @endif
</script>

</body>
</html>
