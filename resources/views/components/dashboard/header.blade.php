<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('dash/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('dash/assets/img/favicon.png') }}">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('dash/assets/css/nucleo-icons.css" rel="stylesheet') }}" />
  <link href="{{ asset('dash/assets/css/nucleo-svg.css" rel="stylesheet') }}" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('dash/assets/css/material-dashboard.css?v=3.0.0') }}" rel="stylesheet" />
  <style>
    #clickDiv {
      position: absolute;
      width: 100vw;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      top: 0;
      left: 0;

    }

    #clickImage {
      z-index: 88888 !important;
    }

  </style>
</head>

<body class="g-sidenav-show dark-version bg-gray-200">
  <div id="clickDiv" class="d-none">
<img src="{{ asset('images/click.png') }}" id="clickImage" alt="Click" width="400" >
</div>
