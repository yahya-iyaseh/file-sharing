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
      <div class="col col-sm-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">check_circle</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize text-bold"><span class="text-success"> Successfully</span> Visit To Your File</p>
              <h4 class="mb-0">{{ $file->success_visit }}</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class='hr'>
            <img src="{{ asset('images/hr-2.png') }}" alt='' width="100%">
          </div>
        </div>
      </div>

      <div class="col col-sm-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-danger shadow-danger text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">sms_failed</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize text-bold"><span class="text-danger"> Failed</span> Visit To Your File</p>
              <h4 class="mb-0">{{ $file->failed_visit }}</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class='hr'>
            <img src="{{ asset('images/hr-2.png') }}" alt='' width="100%">
          </div>
        </div>
      </div>

      <div class="col col-sm-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">weekend</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize text-bold"><span class="text-dark"> Downloads</span> Count</p>
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

    <div class="card text-dark bg-light mb-3" style="">
      <div class="card-header text-bolder text-light bg-info">
        <h3 class="text-light">File Info</h3>
        <div class="d-flex justify-content-between align-items center">
          <h4 class="text-light"><u> File Name:</u>&nbsp; <span class="text-bold">{{ $file->name }}</span></h4>
          <h4 class="text-light"><u> Size:</u>&nbsp; <span class="text-bold">{{ $file->size }}</span></h4>
          <h4 class="text-light"><u> Extension:</u>&nbsp; <span class="text-bold">{{ $extension }}</span></h4>
        </div>
      </div>
      <div class="card-header text-bold text-light bg-dark">
        <h4 class="text-light">File Properties</h4>
        <div class="d-flex justify-content-between align-items center">
          <h6 class="text-light">File Access: <span>
              @if ($file->access)
                <span class="badge badge-sm bg-gradient-success">Available</span>
              @else
                <span class="badge badge-sm bg-gradient-danger">Block</span>
              @endif
            </span></h6>
          <h6 class="text-light">Expired Date&Time: <span>
              <span class="badge badge-sm bg-gradient-secondary">{{ $file->expired_date }}</span>
            </span></h6>
          <h6 class="text-light">Lock With BIN:
               @if ($file->bin)
                <span class="badge badge-sm bg-gradient-success">Yes</span>
              @else
                <span class="badge badge-sm bg-gradient-danger">Non</span>
              @endif
            <span>

            </span></h6>
        </div>
      </div>

      <div class="card-body">
        <h5 class="card-title">Note:</h5>
        @if($file->description)
        <div class="card-text">{!! $file->description !!}</div>

        @else
        <div class="card-text"><h2 class="text-warning">There is No Note For This File.</h2></div>

        @endif
      </div>
    </div>


  </div>
</x-dashboard.main>
{{-- Footer --}}
{{-- <x-dashboard.footer /> --}}
<!--   Core JS Files   -->

<x-dashboard.end />
