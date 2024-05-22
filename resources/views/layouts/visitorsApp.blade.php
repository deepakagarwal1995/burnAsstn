<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $page_title ?? 'APBA' }} | Asia Pacific Burn Association</title>
    <meta name="description" content="{{ $page_description ?? 'The Asia Pacific Burn Association (APBA) is a non-profit organization which aims for improvement in burn care in the Asia Pacific Region' }}" />
    <meta property="og:title" content="{{ $title ?? 'APBA' }} | Asia Pacific Burn Association">
    <meta property="og:image" content="{{ config('app.url') }}/assets/img/logo.png">
    <meta property="og:description" content="{{ $page_description ?? 'The Asia Pacific Burn Association (APBA) is a non-profit organization which aims for improvement in burn care in the Asia Pacific Region' }}">

    @include('inc.headerLinks')

    @yield('head')
</head>

<body>

    <div class="boxed_wrapper">

    @include('inc.header')

    @yield('content')

    @include('inc.footer')

    @include('inc.footerLinks')

     </div>

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


    @yield('scripts')


</body>

</html>
