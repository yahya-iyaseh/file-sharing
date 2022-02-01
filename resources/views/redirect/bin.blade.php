<x-dashboard.header />

<x-auth.nav />


<div class="d-flex justify-content-center align-items-center" style="height: 100vh; width: 100vw">
  <form action="{{ route('redirect.file', $id) }}" method="POST">
    @csrf



    <div class="d-flex justify-content-center align-items-center container">
      <div class="card py-5 px-3">
        <h5 class="m-0"> <span class="text-danger"> BIN</span> Code</h5><span class="mobile-text">Enter the <span class="text-danger"> BIN</span> Code To Download This file.</span>
        <div class="d-flex flex-row mt-5">
          <div class="input-group input-group-outline my-3">
            <label class="form-label">Bin Code</label>
            <input type="password" name="bin" class="form-control">
          </div>

        </div>
        <div class="text-center"><button type="submit" class="font-weight-bold btn btn-primary cursor px-5">Send</button></div>
      </div>
    </div>
  </form>
</div>




<x-dashboard.end />
