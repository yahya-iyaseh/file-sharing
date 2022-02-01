<x-dashboard.header />



<div class="container position-sticky z-index-sticky top-0">
  <div class="row">
    <div class="col-12">
      <!-- Navbar -->
      <x-auth.nav>
        <li class="nav-item">
          <a class="nav-link me-2 d-flex align-items-center" href="{{ route('login') }}">
            Login
            <span class="material-icons ms-1">
              login
            </span>
          </a>
        </li>
      </x-auth.nav>
      <!-- End Navbar -->
    </div>
  </div>
</div>
<main class="main-content  mt-0">
  <section>
    <div class="page-header bg-white min-vh-100">
      <div class="container">
        <div class="row">
          <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
            <div class="position-relative bg-gradient-info h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center opacity-50" style="background-image: url('/images/laptop-background.jpg'); background-size: cover;">
            </div>
          </div>
          <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5 mt-5">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="font-weight-bolder">Sign Up</h4>
                <p class="mb-0">Enter your email and password to register</p>
              </div>
              <!-- Validation Errors -->
              <x-auth-validation-errors class="mb-4" :errors="$errors" />

              <div class="card-body">

                <form role="form" method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Name</label>
                    <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />

                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Email</label>
                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Password</label>
                    <x-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Confirm Password</label>
                    <x-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required />
                  </div>

                  <div class="form-check form-check-info text-start ps-0">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                    <label class="form-check-label" for="flexCheckDefault">
                      I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                    </label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-lg bg-gradient-info btn-lg w-100 mt-4 mb-0">Sign Up</button>
                  </div>
                </form>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-2 text-sm mx-auto">
                  Already have an account?
                  <a href="{{ route('login') }}" class="text-info text-gradient font-weight-bold">Sign in</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>



<x-dashboard.end />
