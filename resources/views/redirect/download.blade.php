<x-dashboard.header />

<x-auth.nav />


<div class="d-flex justify-content-center mb-5 flex-column align-items-center" style="; width: 100vw; margin-top: 4rem">
  <form action="{{ route('redirect.download', $file->unique) }}" method="post">
    @csrf
    @method('POST')


    <div class="row container col-12 mt-5">
      <div class="col-12 card mx-auto py-5 my-5 text-center" style="max-width: 26rem">
        <h5 class="m-0"> Click on the button to Download the file: <br/> <h3 class="text-danger">{{ $file->name }}</h3></h5>
        <div class="d-flex mt-5">


        </div>
        <div class="text-center"><button type="submit" class="font-weight-bold btn btn-primary cursor px-5">Download</button></div>
        <p class="mt-4 text-sm text-center">
          Want to Upload your Files?
          <a href="{{ route('login') }}" class="text-info text-gradient font-weight-bold">Join Us</a>
        </p>
      </div>


  </form>
  @if($file->description)
<div class="col-12 card text-dark bg-white mb-3 col-12" style="">
  <div class="card-header bg-info text-light text-bold text-center">Note</div>
  <div class="card-body">
    <p class="card-text">{!! $file->description !!}</p>
  </div>
</div>
  @endif
 </div>

</div>




<x-dashboard.end />
