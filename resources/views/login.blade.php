@extends('template')

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-2 col-lg-6 offset-lg-3 p-5">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('auth') }}" method="POST">
                            @csrf
                            <h2 class="text-center fw-semibold">Login</h2>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email"name="email"
                                    placeholder="robert@gmail.com">
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password"name="password"
                                    placeholder="***********">
                                @error('password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="remember_me"
                                        name="remember_me" checked>
                                    <label class="form-check-label" for="remember_me">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">
                                Login
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
