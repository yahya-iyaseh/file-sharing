<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-info" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0 d-flex justify-content-between align-items-center" href="{{ url('/') }}" target="_blank">
      <img src="{{ asset('images/logo.png') }}" class="navbar-brand-img rounded-circle bg-white" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">{{ config('app.name') }}</span>
    </a>
  </div>
     <div  class='hr'>
        <img id="side-hr" src="{{ asset('images/hr.png') }}" alt='' width="100%">
      </div>
  {{-- <hr class="horizontal light mt-0 mb-2"> --}}
  <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white @if(Route::is('file.index')) active @endif" href="{{ route('file.index') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">inventory_2</i>
          </div>
          <span class="nav-link-text ms-1">Files</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white @if(Route::is('file.*') & !Route::is('file.index')) active @endif" href="{{ route('file.create') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">upload_file</i>
          </div>
          <span class="nav-link-text ms-1">Upload File</span>
        </a>
      </li>


    </ul>
  </div>
  <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
      <button class="btn bg-gradient mt-4 w-100" type="button" onclick="clickOnMe()">Dont Click On Me Plz!</button>
    </div>
  </div>

</aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

