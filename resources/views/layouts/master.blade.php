
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="icon" href="{{asset('images/logo.png')}}">
  <title>Admin Panel / Catalang</title>

  <meta name="csrf-token" content="{{ csrf_token() }}">


  <!-- Font Awesome Icons -->
  {{-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> --}}
  <!-- Theme style -->
  {{-- <link rel="stylesheet" href="dist/css/adminlte.min.css"> --}}
  <!-- Google Font: Source Sans Pro -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> --}}
<!--all admin lte css-->
<link rel="stylesheet" href="/css/app.css">


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <header-component logo="{{ asset('images/logo.png') }}" profile="{{ asset('images/profile.png') }}"></header-component>

 <side-nav logo="{{ asset('images/logo.png') }}" profile="{{ asset('images/profile.png') }}"></side-nav>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <router-view></router-view>
  </div>
  <!-- /.content-wrapper -->

<footer-component></footer-component>

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
{{-- <script src="plugins/jquery/jquery.min.js"></script> --}}
<!-- Bootstrap 4 -->
{{-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
<!-- AdminLTE App -->
{{-- <script src="dist/js/adminlte.min.js"></script> --}}

<!-- all admin lte js-->
<script src="/js/app.js"></script>

</body>
</html>
