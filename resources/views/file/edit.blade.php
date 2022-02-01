<x-dashboard.header />
  <x-dashboard.sideBar />
  {{--  dark-version --}}
    <!-- Navbar -->
   <x-dashboard.nav />
    <!-- End Navbar -->

    {{-- Main Content --}}
    <x-dashboard.main >
        <div class="container-fluid py-4">
            <form action="{{ route('file.update', $file->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <x-dashboard._form title="Update" :file="$file" :accessType="$accessType" :date="$date" />

            </form>
        </div>
    </x-dashboard.main>
 {{-- Footer --}}
{{-- <x-dashboard.footer /> --}}
  <!--   Core JS Files   -->

<x-dashboard.end />
