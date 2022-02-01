<x-dashboard.header />
<x-dashboard.sideBar />
{{-- dark-version --}}
<!-- Navbar -->
<x-dashboard.nav />
<!-- End Navbar -->

{{-- Main Content --}}
<x-dashboard.main>
    @if($errors->count() > 0)
    @foreach($errors->all() as $error)
    <span class="d-block invalid-feedback">{{ $error }}</span>
    @endforeach
    @endif
    <div class="container-fluid py-4">
        <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-dynamic mb-4">
                        <span class="input-group-text" id="basic-addon1">File Name</span>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            placeholder="File Name" aria-label="File Name" aria-describedby="basic-addon1" name="name"
                            value="{{ old('name', $file->name) }}" required>
                        @error('name')
                        <span class="d-block invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <hr class="d-md-none">
                <div class="col-md-6">
                    <input type="file" name="file" class="form-control @error('file') is-invalid @enderror"
                        id="customFile" value="{{ old('file', $file->file) }}" required />
                    @error('file')
                    <span class="d-block invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <hr>

            <div class="form-group mb-4">
                <label for="description">Description</label>
                <textarea name="description" id="description" placeholder="Description"
                    class="@error('description') is-invalid @enderror">
                    {!! old('description', $file->description)!!}</textarea>
                @error('description') <span class="d-block invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <hr>



            <div class="select-group mb-4">
                <label for="access_type">Access Type</label>
                <select class="form-select @error('access_type') is-invalid @enderror" name="access_type"
                    aria-label="Default select example">
                    @foreach ($accessType as $key => $value)
                    <option value="{{ $key }}" @if($key==old('access_type', $file->access_type)) selected @endif>{{
                        $value }}</option>
                    @endforeach
                </select> @error('access_type') <span class="d-block invalid-feedback">{{ $message }}</span> @enderror
            </div>


            <hr>
            <div class="input-group input-group-dynamic mb-4">
                <span class="input-group-text" id="basic-addon1">BIN Code</span>
                <input type="text" name="bin" class="form-control @error('bin') is-invalid @enderror"
                    placeholder="BIN Code" aria-label="BIN Code" aria-describedby="basic-addon1"
                    value="{{ old('bin', $file->bin) }}">
                @error('bin') <span class="d-block invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <hr>

            <div class="form-check m-0">
                <input class="form-check-input @error('access') is-invalid @enderror" name="access" type="checkbox"
                    id="flexCheckDefault" @if( old('name', $file->name)) checked @endif>
                <label class="form-check-label" for="flexCheckDefault">
                    Access
                </label> @error('access') <span class="d-block invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <hr>
            <div class="text-center">
                <button type="submit" class="btn bg-gradient-primary mt-4 w-25" type="button">Save</button>
            </div>

        </form>

    </div>
</x-dashboard.main>
{{-- Footer --}}
{{--
<x-dashboard.footer /> --}}
<!--   Core JS Files   -->

<x-dashboard.end />
