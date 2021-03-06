<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="You are safe here with secure blog">
  <meta name="author" content="Nishan B">
  <title>Hawk Admin</title>
  <!-- Favicon -->
  <link href="{{asset('admin_assets/img/brand/favicon.png')}}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{asset('admin_assets/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
  <link href="{{asset('admin_assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{asset('admin_assets/css/argon.css?v=1.0.0')}}" rel="stylesheet">
</head>
<body>
  <!--side navbar-->
  @include('admin.inc.nav')
  <!-- Main content -->

  @yield('content')

  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{asset('admin_assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('admin_assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Optional JS -->
  <script src="{{asset('admin_assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('admin_assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset('admin_assets/js/argon.js?v=1.0.0')}}"></script>


</body>
</html>
