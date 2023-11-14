<x-guest-layout>
    <main class="form-signin">
        <form action="{{ route('register')}}" method="POST">
            @csrf
          <h1 class="h3 mb-3 fw-semibold text-center">Registration Form</h1>
          <div class=" ">
            <div>
                <label for="name">Name</label>
            </div>
            <input type="text" name="name" class="form-control rounded-2 @error('name') is-invalid @enderror" id="name" required placeholder="">
            @error('name')
            <div class="invalid-feedback">
                {{ $message}}
            </div>
            @enderror
          </div>
          <div class=" ">
            <div>
                <label for="email">Email address</label>
            </div>
            <input type="email" name="email" class="form-control rounded-2 @error('email') is-invalid @enderror" id="email" required placeholder="name@example.com">
            @error('email')
            <div class="invalid-feedback">
                {{ $message}}
            </div>
            @enderror
          </div>
          <div class="">
            <div>
                <label for="password">Password</label>
            </div>
            <input type="password" name="password" class="form-control rounded-2 @error('password') is-invalid @enderror" id="password" required placeholder="Password">
            @error('password')
            <div class="invalid-feedback">
                {{ $message}}
            </div>
            @enderror
          </div>
          <div class="checkbox mb-3 mt-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary bg-primary" type="submit">Register</button>
        </form>
        <small class="d-block text-center mt-2 text-danger">Already Registered? <a href="{{ route('register-admin')}}" class="text-primary">Login now!</a></small>
      </main>
    </x-guest-layout>