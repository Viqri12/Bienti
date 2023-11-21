<x-guest-layout>
    <main class="form-signin bg-white shadow col-6 mx-auto rounded-4 mt-5 p-2">
        <form action="{{ route('register-admin-bienti')}}" method="POST">
            @csrf
          <h1 class="h3 mb-3 fw-semibold text-center">Registration Form</h1>
          <div class="col-5 mx-auto">
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
          <div class="checkbox mb-3 mt-3 col-5  mx-auto">
            <button class="w-100 btn btn-lg btn-primary bg-primary" type="submit">Register</button>
          </div>
        </form>
        <small class="d-block text-center mt-2 text-danger">Already Registered? <a href="{{ route('register-admin')}}" class="text-primary">Login now!</a></small>
      </main>
    </x-guest-layout>