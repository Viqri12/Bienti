<x-guest-layout>
    @if(session()->has('Success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
       {{ session('Success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if(session()->has('LoginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
       {{ session('LoginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
<main class="form-signin bg-white shadow col-6 mx-auto mt-5 rounded-4 p-2">
    <form action="{{ route('login')}}" method="POST">
        @csrf
        <div class=" col-3 mx-auto mt-2">
          <a href="{{ route('landingpage')}}">
              <img src="{{ asset('assets/images/icon/Logo-Bienti-03.png')}}" class="img-fluid" alt="">
          </a>
        </div>
      <div class="col-5 mx-auto">
        <div>
            <label for="email" class="fw-semibold">Email</label>
        </div>
        <input type="email" name="email" class="form-control rounded-2 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required>
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="col-5 mx-auto">
        <div>
            <label for="password" class="fw-semibold mt-2">Password</label>
        </div>
        <input type="password" name="password" class="form-control rounded-2 @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
      <div class="checkbox mb-3 mt-3 col-5 mx-auto">
        <button class="w-100 btn btn-lg btn-primary bg-primary" type="submit">Login</button>
      </div>
    </form>
    {{-- <div class="">
      <small class="d-block text-center text-danger">Not Registered? <a href="{{ route('register-admin')}}" class="text-primary">Register now!</a></small>
    </div> --}}
  </main>

  {{-- <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center ">
      <div class="col-md-8 col-lg-7 col-xl-6 d-flex align-items-center justify-content-center ">
        <img src="{{ asset('assets/images/icon/logo-bienti-B-01.png') }}" height="300" width="300" class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form1Example13" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example13">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example23">Password</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="#!">Forgot password?</a>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
          </div>

          <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
            role="button">
            <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
          </a>
          <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!"
            role="button">
            <i class="fab fa-twitter me-2"></i>Continue with Twitter</a>

        </form>
      </div>
    </div>
  </div>
</section> --}}
{{-- <body class="img js-fullheight" style="background-image: url(public/assets/images/icon/bg.jpg);"> --}}
{{-- <section class="ftco-section">
  <div class="container bg-white shadow col-4 mt-5 rounded-4">
    <div class="row justify-content-center">
      <div class="mt-3 mb-2">
        <div class=" col-4 mx-auto">
          <a href="{{ route('landingpage')}}">
              <img src="{{ asset('assets/images/icon/Logo-Bienti-03.png')}}" class="img-fluid" alt="">
          </a>
        </div>
    </div>
    </div>
    <div class="row justify-content-center">
      <div class="">
        <div class="login-wrap p-0">
          <form action="{{ route('dashboard')}}" method="POST" class="signin-form col-6 mx-auto">
            <div class="form-group mb-3">
              <div>
                <label for="email" class="fw-semibold">Email</label>
            </div>
            <input type="email" name="email" class="form-control rounded-2 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <div class="form-group mb-3">
              <div>
                <label for="password" class="fw-semibold">Password</label>
            </div>
            <input type="password" name="password" class="form-control rounded-2 @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            </div>
            <div class="form-group">
              <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
            </div>
          </form>
          <small class="d-block text-center mt-2 text-danger mb-3">Not Registered? <a href="{{ route('register-admin')}}" class="text-primary">Register now!</a></small>
        </div>
      </div>
    </div>
  </div>
</section> --}}
{{-- </body> --}}
</x-guest-layout>
