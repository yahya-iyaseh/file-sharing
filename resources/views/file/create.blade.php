<x-dashboard.header />
<x-dashboard.sideBar />
{{-- dark-version --}}
<!-- Navbar -->
<x-dashboard.nav />
<!-- End Navbar -->

{{-- Main Content --}}
<x-dashboard.main>
    <div class="container-fluid py-4">
        <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <x-dashboard._form title="Save" :file="$file" :accessType="$accessType" :date="null" />

        </form>
    </div>
</x-dashboard.main>
{{-- Footer --}}
{{--
<x-dashboard.footer /> --}}
<!--   Core JS Files   -->

<x-dashboard.end />
