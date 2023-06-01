@extends('layout.main')

@section('container')
<div class="container w-auto mt-5">
    <div class="row justify-content-center">
        <div class="col">
            <main class="form-signin w-100 m-auto">
                <i class="bi bi-building"></i>
                <h1 class="h3 mb-3 fw-normal">Please Register</h1>
                <form action="/daftar" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="rext" name="name" class="form-control @error('name')is-invalid @enderror" id="name"
                            placeholder="name" value="{{old('name')}}">
                        <label for="name">Name</label>
                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="username" class="form-control @error('username')is-invalid @enderror"
                            id="username" placeholder="username" value="{{old('username')}}">
                        <label for="username">username</label>
                        @error('username')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control @error('email')is-invalid @enderror"
                            id="email" placeholder="name@example.com" value="{{old('email')}}">
                        <label for="email">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password"
                            class="form-control @error('password')is-invalid @enderror" id="password"
                            placeholder="Password">
                        <label for="password">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-2">Already Registed?<a href="/">Login</a></small>
            </main>
        </div>
    </div>
</div>

@endsection