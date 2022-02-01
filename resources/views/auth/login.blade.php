<x-dashboard.header />

<div class="container position-sticky z-index-sticky top-0">
  <div class="row">
    <div class="col-12">
      <!-- Navbar -->
     <x-auth.nav >
          <li class="nav-item">
                  <a class="nav-link me-2 d-flex align-items-center" href="{{ route('register') }}">
                    Sign Up
                    <span class="material-icons ms-1">
                      login
                    </span>
                  </a>
                </li>
     </x-auth.nav >
      <!-- End Navbar -->
    </div>
  </div>
</div>

<main class="main-content  mt-0">
  <div class="page-header align-items-start min-vh-100" style="background-image: url('/images/earth.jpg');">
    <span class="mask bg-gradient-dark opacity-1"></span>
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-info shadow-info border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
              </div>
            </div>

            <div class="card-body">
                 <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
              <form method="POST" action="{{ route('login') }}" class="text-start">
                @csrf

                <div class="input-group input-group-outline my-3">
                  <label class="form-label">Email</label>
                  <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />

                  {{-- <input type="email" class="form-control"> --}}
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Password</label>
                  <x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                </div>
                <div class="form-check form-switch d-flex align-items-center mb-3">
                  {{-- <input class="form-check-input" type="checkbox" id="rememberMe"> --}}
                  <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                  <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember me</label>

                </div>
                <div class="text-center">

                  <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">Sign in</button>
                </div>
                              </form>

                @if (Route::has('password.request'))

                  <p class="mt-4 text-sm text-center">
                    Forgot your password?
                    <a href="{{ route('password.request') }}" class="text-info text-gradient font-weight-bold">Click here</a>
                  </p>
                @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  <x-auth.footer />
  </div>
</main>
<x-dashboard.end />
