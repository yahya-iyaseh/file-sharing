<x-dashboard.header />
<x-dashboard.sideBar />
{{-- dark-version --}}
<!-- Navbar -->
<x-dashboard.nav />
<!-- End Navbar -->

{{-- Main Content --}}
<x-dashboard.main>
  <div class="container-fluid py-4">

  <div class="row mb-5">
    <div class="col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">person</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Visitors Count</p>
            <h4 class="mb-0">{{ $file->visitors }}</h4>
          </div>
        </div>
        <div class='hr'>
          <img src="{{ asset('images/hr.png') }}" alt='' width="100%">
        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">weekend</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Downloads Count</p>
            <h4 class="mb-0">{{ $file->downloads }}</h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class='hr'>
          <img src="{{ asset('images/hr-2.png') }}" alt='' width="100%">
        </div>
      </div>
    </div>
  </div>


</div>
</x-dashboard.main>
{{-- Footer --}}
{{-- <x-dashboard.footer /> --}}
<!--   Core JS Files   -->

<x-dashboard.end />
