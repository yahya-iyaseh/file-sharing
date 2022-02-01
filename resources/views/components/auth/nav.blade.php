 <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
        <div class="container-fluid ps-2 pe-0">

          <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="38">
          </a>
          <div>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>

            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="{{ url('/') }}">
                    Home
                    <span class="material-icons ms-1">
                      home
                    </span>
                  </a>
                </li>
               {{ $slot }}
              </ul>
            </div>
          </div>
        </div>
      </nav>
