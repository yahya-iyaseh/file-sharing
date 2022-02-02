<x-dashboard.header />

<x-auth.nav />


<div class="d-flex justify-content-center align-items-center" style="height: 100vh; width: 100vw">
  <form action="{{ route('redirect.download', $file->unique) }}" method="post">
    @csrf
    @method('POST')


    <div class="d-flex justify-content-center align-items-center container">
      <div class="card py-5 px-3">
        <h5 class="m-0"> Click on the button to Download the file: <span class="text-danger">{{ $file->name }}</span></h5>
        <div class="d-flex flex-row mt-5">


        </div>
        <div class="text-center"><button type="submit" class="font-weight-bold btn btn-primary cursor px-5">Download</button></div>
        <p class="mt-4 text-sm text-center">
          Want to Upload your Files?
          <a href="{{ route('login') }}" class="text-info text-gradient font-weight-bold">Join Us</a>
        </p>
      </div>

    </div>
  </form>
</div>




<x-dashboard.end />
