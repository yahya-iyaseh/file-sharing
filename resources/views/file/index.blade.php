<x-dashboard.header />
<x-dashboard.sideBar />
{{-- dark-version --}}
<!-- Navbar -->
<x-dashboard.nav />
<!-- End Navbar -->

{{-- Main Content --}}
<x-dashboard.main>
  <div class="container-fluid py-4">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Files</h6>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  File Name
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Description
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Access Type
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Access
                </th>
                <th class="text-secondary opacity-7">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($files as $file)
                <tr>
                  <td>
                    <h6 class="mb-0 text-sm">{{ $file->name }}</h6>

                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{!! $file->description !!}</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    @if ($file->access_type == 'private')
                      <span class="badge badge-sm bg-gradient-secondary">Private</span>
                    @else
                      <span class="badge badge-sm bg-gradient-success">Public</span>
                    @endif
                  </td>
                  <td class="align-middle text-center text-sm">
                    @if ($file->access)
                      <span class="badge badge-sm bg-gradient-success">Available</span>
                    @else
                      <span class="badge badge-sm bg-gradient-danger">Block</span>
                    @endif
                  </td>

                  <td class="align-middle">
                    <div class="text-center">
                      <a href="{{ route('file.edit', $file->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        <span class="material-icons" style="color: #de2668">
                          mode_edit
                        </span>
                      </a>
                    </div>
                  </td>
                </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
</x-dashboard.main>
{{-- Footer --}}
{{-- <x-dashboard.footer /> --}}
<!--   Core JS Files   -->

<x-dashboard.end />
