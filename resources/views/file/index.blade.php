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
                {{-- <td>Image</td> --}}
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  File Name
                </th>

                <th>
                  URL
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Expired Date
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Lock Bin
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Access
                </th>
                <th class="text-secondary opacity-7 text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              @if ($files->count() > 0)
                @foreach ($files as $file)
                  <tr>
                    {{-- <td>
                        <img src="{{ Storage::url($file->file) }}" alt="" width="100">
                    </td> --}}
                    <td>
                      <a href="{{ route('file.show', $file->id) }}">
                        <h6 class="mb-0 ms-3">{{ $file->name }}</h6>
                      </a>
                    </td>
                    <td>
                      <button class="btn" value="{{ url('/') . '/' . $file->unique }}" onClick="navigator.clipboard.writeText(this.value)">
                        Copy URL
                        <span class="material-icons">
                          content_copy
                        </span>
                      </button>

                    </td>
                    <td>
                      <span class="badge badge-sm badge-gradient-light text-dark">{{ $file->expired_date }}</span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      @if (!$file->bin)
                        <span class="badge badge-sm bg-gradient-danger">NoN</span>
                      @else
                        <span class="badge badge-sm bg-gradient-success">Yes</span>
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
                      <div class="text-center row">
                        <div class="col-md-6"> <a href="{{ route('file.edit', $file->id) }}" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-original-title="Edit user">
                            <span class="material-icons color-info">
                              mode_edit
                            </span>
                          </a></div>
                        <div class="col-md-6">
                          <form action="{{ route('file.destroy', $file->id) }}" method="post" onsubmit="return confirm('Are you Sure you Want to Delete the file?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm"><span class="material-icons">
                                delete
                              </span></button>
                          </form>
                        </div>

                      </div>
                    </td>
                  </tr>
                @endforeach

              @endif
            </tbody>
          </table>

          @if ($files->count() == 0)
          <div class="text-center">

            <h3>ooopS You don't Upload any Files Yet, 🤨</h3>
            <a href="{{ route('file.create') }}" class="btn text-light btn-primary font-weight-bold">Upload Now.</a>
          </div>
          @endif
        </div>
      </div>
      <div class="d-flex justify-content-end m-5">
        {{ $files->links() }}

      </div>


    </div>
  </div>

</x-dashboard.main>
{{-- Footer --}}
{{-- <x-dashboard.footer /> --}}
<!--   Core JS Files   -->

<x-dashboard.end />
