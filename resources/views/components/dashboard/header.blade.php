<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  {{-- <link rel="apple-touch-icon" type="image/png" sizes="76x76" href="{{ asset('dash/assets/img/apple-icon.png') }}"> --}}
  <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
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
  @notifyCss
  {{-- summer note --}}
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('dash/assets/css/material-dashboard.css?v=3.0.0') }}" rel="stylesheet" />


  {{-- Notify Css --}}

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
      margin-top: -5vh;
    }

    .note-editable {
      background: white !important;
    }

    hr {
      border: none;
      /* border: 1px solid #d7d7d7; */
    }

    .hr {
      text-align: center;
    }

    .hr img {
      position: relative;
      top: -18px;
    }

    #side-hr {
      top: 0
    }

    form hr,
    hr.d-md-none {
      background-color: inherit;
      width: 2%;
      border-top: 6px dotted #f52e77;
      margin: 0 auto;
      opacity: 1;
    }

    select:focus,
    .form-select:focus,
    .note-editable:focus {
      border-bottom: 3px solid #de2668;
    }

    input:hover,
    select:hover,
    .note-editable:hover {
      border-bottom: 3px solid #de2668;

    }

    @media(min-width: 768px) {
      .table-responsive {
        overflow: hidden;
      }
    }

    .notify {
      z-index: 9999 !important;
    }

  </style>
</head>
{{-- dark-version --}}
<x:notify-messages />

<body class="g-sidenav-show bg-gray-200">
  <div id="clickDiv" class="d-none">
    <img src="{{ asset('images/click.png') }}" id="clickImage" alt="Click" width="400">
  </div>
