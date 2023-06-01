@extends('layout.main')

<section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <h3 class="mb-5">Sign in Admin</h3>

              @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('loginError')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <form action="/in" method="POST">
              @csrf

              <div class="form-floating mb-3">
                  <input type="email" name="email" class="form-control @error('email')is-invalid @enderror"
                      id="email" placeholder="name@example.com" autofocus required value="{{old('email')}}">
                  <label for="email">Email Address</label>
                  @error('email')
                  <div class="invalid-feedback">
                      {{$message}}
                  </div>
                  @enderror
              </div>
              <div class="form-floating">
                  <input type="password" name="password"
                      class="form-control @error('password') is-invalid @enderror" id="password"
                      placeholder="Password" required>
                  <label for="password">Password</label>
              </div>

              <div class="checkbox d-flex float-left mb-2 mt-2">
                  <label>
                      <input type="checkbox" value="remember-me"> Remember me
                  </label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
          </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>