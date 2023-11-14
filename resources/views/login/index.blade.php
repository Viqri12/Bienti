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
<main class="form-signin">
    <form action="{{ route('login-admin-bienti')}}" method="POST">
        @csrf
      <h1 class="h3 mb-3 fw-semibold text-center">Please sign in</h1>
      <div class=" ">
        <div>
            <label for="email">Email address</label>
        </div>
        <input type="email" name="email" class="form-control rounded-2 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required>
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="">
        <div>
            <label for="password">Password</label>
        </div>
        <input type="password" name="password" class="form-control rounded-2 @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
      <div class="checkbox mb-3 mt-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary bg-primary" type="submit">Login</button>
    </form>
    <small class="d-block text-center mt-2 text-danger">Not Registered? <a href="{{ route('register-admin')}}" class="text-primary">Register now!</a></small>
  </main>
</x-guest-layout>